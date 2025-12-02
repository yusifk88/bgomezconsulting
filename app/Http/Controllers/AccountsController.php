<?php

namespace App\Http\Controllers;

use App\Models\Account;
use App\Models\Dependant;
use App\Models\Finance;
use App\Models\Spouse;
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

        $user = auth()->user();

        $data = $request->all();
        $data["user_id"] = $user->id;

        Account::updateOrCreate(["user_id"=> $user->id], $data);

    }


    public function saveSpouse(Request $request)
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
        $user = auth()->user();

        if (!$user->account) {
            return response()->json(["message" => "Account not found"], 422);
        }

        $data["account_id"] = $user->account->id;

        Spouse::updateOrCreate(["account_id"=> $user->account->id], $data);

    }


    public function saveDependent(Request $request)
    {
        $request->validate([
            "name" => "required",
            "dob" => "required|date",
            "ssn" => "required",
            "months_in_home" => "required|numeric"
        ]);

        $user = auth()->user();

        $data = $request->all();
        $data["account_id"] = $user->account->id;
        Dependant::create($data);

    }

    public function deletedDependant($id)
    {
        $user = auth()->user();
        Dependant::where("account_id", $user->account->id)->where("id", $id)->delete();

    }

    public function saveFinance(Request $request)
    {
        $request->validate([
            "name" => "required",
            "type" => "required|in:income,expense",
            "amount" => "required|numeric",
        ]);

        $user = auth()->user();

        $data = $request->all();

        $data["account_id"] = $user->account->id;

        Finance::create($data);

        return redirect()->back();

    }

    public function deleteFinance(string $id)
    {
        Finance::where("account_id", auth()->user()->account->id)->where("id",$id)->delete();

    }

}
