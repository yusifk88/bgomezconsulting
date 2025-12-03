<?php

namespace App\Http\Controllers;

use App\Models\Account;
use App\Models\File;
use App\Models\Record;
use Illuminate\Support\Carbon;
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
        $record = Record::with("files")->findOrFail($id);

        return Inertia::render("Records/Show", ["record" => $record]);
    }


    public function index()
    {
        $records = Record::with("files")
            ->orderBy("created_at", "desc")
            ->paginate(50);
        return Inertia::render("Records/Index", ["records" => $records]);

    }


    public function clients()
    {
        $clients = Account::where("id",">",0)->orderBy("id", "desc")->paginate(50);
        return Inertia::render("Records/Clients", ["clients" => $clients]);

    }

    public function client(int $id)
    {
        $client = Account::with(["spouse","dependants","financials","files.files"])->findOrFail($id);
        return Inertia::render("Records/Client", ["client" => $client]);

    }

    public function downloadFile(int $id)
    {
        $file = File::findOrFail($id);

        return Storage::disk('spaces')->download($file->url, $file->name);

    }


}
