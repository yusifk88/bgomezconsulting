<?php

namespace App\Http\Controllers;

use App\Models\Account;
use Illuminate\Http\Request;

class AccountsController extends Controller
{

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'occupation' => 'required',
            'phone' => 'required',
            "dob" => 'required|date',
            "address" => 'required',
            "state" => 'required',
            "city" => 'required',
            "street" => 'required',
            "ssn" => 'required',
            "license_number" => 'required'
        ]);

        $data = $request->all();
        $data["user_id"]=auth()->id();

        Account::updateOrCreate(["user_id",auth()->id()],$data);

    }

}
