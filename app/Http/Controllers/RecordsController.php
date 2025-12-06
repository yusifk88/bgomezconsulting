<?php

namespace App\Http\Controllers;

use App\Models\Account;
use App\Models\File;
use App\Models\Record;
use App\Models\Review;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Inertia\Inertia;

class RecordsController extends Controller
{


    public function dashboard()
    {

        $recentSubmissions = [
            "users" => Account::count(),
            "all_submissions" => Record::all()->count(),
            "completed_submissions" => Record::where("status", "completed")->count(),
            "pending_submissions" => Record::where("status", "pending")->count(),
            "waning_submissions" => Record::where("status", "error")->count(),
            "recent_clients" => Account::limit(5)->orderBy("id", "desc")->get(),
            "recent_records" => Record::with("files")->limit(5)->orderBy("id", "desc")->get(),
        ];

        return Inertia::render("Dashboard", ["summaries" => $recentSubmissions]);

    }


    public function show(int $id)
    {
        $record = Record::with(["files", "reviews.file"])->findOrFail($id);

        return Inertia::render("Records/Show", ["record" => $record]);
    }


    public function index()
    {
        $recordsQuery = Record::query()->with(["files", "account"]);

        if (request()->filled("client")) {

            $recordsQuery->where("account_id", request()->integer("client"));
        }

        if (request()->filled("status")) {
            $recordsQuery->where("status", request()->string("status"));
        }

        if (request()->filled("from") && request()->filled("to")) {
            $recordsQuery->whereBetween("created_at", [request()->date("from")->startOfDay(), request()->date("to")->endOfDay()]);
        }

        $clients = Account::select("name", "id")->orderBy("name")->get();

        $records = $recordsQuery->orderBy("created_at", "desc")->paginate(50);

        return Inertia::render("Records/Index", ["records" => $records, "clients" => $clients]);

    }


    public function clients()
    {
        $clients = Account::where("id", ">", 0)->orderBy("id", "desc")->paginate(50);
        return Inertia::render("Records/Clients", ["clients" => $clients]);

    }

    public function client(int $id)
    {
        $client = Account::with(["spouse", "dependants", "financials", "files.files"])->findOrFail($id);
        return Inertia::render("Records/Client", ["client" => $client]);

    }

    public function downloadFile(int $id)
    {
        $file = File::findOrFail($id);

        return Storage::disk('spaces')->download($file->url, $file->name);

    }


    public function sendReview(Request $request, int $record_id)
    {

        $request->validate([
            "title" => "required|string",
            "details" => "required|string",
            "file_id" => "nullable|numeric|exists:files,id",
        ]);

        $record = Record::with("account")->findOrFail($record_id);


        $record->update([
            "status" => $request->status,
        ]);


        $review = Review::create([
            "record_id" => $record_id,
            "title" => $request->title,
            "details" => $request->details . "(" . $request->status . ")",
            "file_id" => $request->file_id,
            "type" => "admin",
            "from" => auth()->user()->name
        ]);


        $client = DB::table("users")->find($record->account->user_id);

        $link = config("app.client_url") . "/records/" . $record_id;

        Account::sendNotification(title: $request->title, message: $request->details, email: $client->email, link: $link);


    }

}
