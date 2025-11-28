<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;

class RecordsController extends Controller
{

    public function store(Request $request)
    {

        $request->validate([
            "title" => "required",
            "description" => "nullable|string",
            "files" => "required|file|mimes:pdf,jpg,jpeg,png,gif,webp,doc,docx,xls,xlsx|max:20480"
        ]);

        $user = auth()->user();

        $bioInfo = [
            "account" => $user->account
        ];

        $data = $request->only(["title", "description"]);
        $data["account_id"]=$user->account->id;
        $data["bio_info"] = json_encode($bioInfo);
        $data["account_id"] = $user->account->id;

    }


    public function create()
    {
        return Inertia::render('Records/Create', []);

    }


}
