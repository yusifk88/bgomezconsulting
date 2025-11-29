<?php

namespace App\Http\Controllers;

use App\Models\File;
use App\Models\Record;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Storage;
use Inertia\Inertia;

class RecordsController extends Controller
{

    public function store(Request $request)
    {
        $request->validate(array(
            "title" => "required",
            "description" => "nullable|string",
            "documents" => "array",
            "documents.*" => "required|file|mimes:pdf,jpg,jpeg,png,gif,webp,doc,docx,xls,xlsx|max:20480"
        ));

        $user = auth()->user();


        $data = $request->only(["title", "description"]);
        $data["account_id"] = $user->account->id;
        $data["bio_info"] = json_encode($user->account);

        $record = Record::create($data);

        if ($record) {


            $savedFiles = [];

            foreach ($request->documents as $file) {


                $url = Storage::disk("spaces")
                    ->put("records/{$user->account->id}", $file);

                $savedFiles[] = [
                    "url" => $url,
                    "name" => $file->getClientOriginalName(),
                    "account_id" => $user->account->id,
                    "record_id" => $record->id
                ];
            }

            File::insert($savedFiles);

        }

        return redirect()->route("records.show", $record);

    }


    public function create()
    {
        return Inertia::render('Records/Create', []);

    }


    public function dashboard()
    {

        $recentSubmissions = Record::with("files")
            ->where("account_id", auth()->user()->account->id)
            ->orderBy("created_at", "desc")
            ->limit(5)->get();

        return Inertia::render("Dashboard", ["recentSubmissions" => $recentSubmissions]);

    }


    public function show(int $id)
    {
        $record = Record::with("files")
            ->where("account_id", auth()->user()->account->id)->findOrFail($id);

        return Inertia::render("Records/Show", ["record" => $record]);
    }


    public function downloadFile(int $id)
    {
        $file = File::whereIn("record_id", Record::select("id")->where("account_id", auth()->user()->account->id))->findOrFail($id);
        $url = Storage::disk('spaces')->temporaryUrl(
            $file->url,
            Carbon::now()->addMinutes(5)
        );

        return redirect($url);
    }

    public function destroyFile(string $id)
    {
        $file = File::whereIn("record_id", Record::select("id")->where("account_id", auth()->user()->account->id))->findOrFail($id);

        Storage::disk('spaces')->delete($file->url);

        $file->delete();
        return redirect()->back();
    }


    public function addFile(int $id, Request $request)
    {
        $request->validate([
            "documents" => "array",
            "documents.*" => "required|file|mimes:pdf,jpg,jpeg,png,gif,webp,doc,docx,xls,xlsx|max:20480"
        ]);

        $user = auth()->user();

        $record = Record::where("account_id", $user->account->id)->findOrFail($id);

        $savedFiles = [];
        foreach ($request->documents as $file) {

            $url = Storage::disk("spaces")
                ->put("records/{$user->account->id}", $file);

            $savedFiles[] = [
                "url" => $url,
                "name" => $file->getClientOriginalName(),
                "account_id" => $user->account->id,
                "record_id" => $record->id
            ];
        }

        File::insert($savedFiles);

        return redirect()->route("records.show", $record);


    }

    public function destroy(string $id)
    {

        $user = auth()->user();

        $record = Record::with("files")->where("account_id", $user->account->id)->findOrFail($id);

        foreach ($record->files as $file) {
            Storage::disk("spaces")->delete($file->url);
        }
        File::where("record_id", $id)->delete();
        $record->delete();

        return redirect()->route("dashboard");

    }

    public function update(int $id, Request $request)
    {
        $request->validate([
            "title" => "required",
            "description" => "nullable|string",
        ]);

        $user = auth()->user();
        $record = Record::with("files")->where("account_id",$user->account->id)->findOrFail($id);

        $data = $request->only(["title", "description"]);
        $data["bio_info"] = json_encode($user->account);

        $record->update($data);
        return redirect()->back();

    }


}
