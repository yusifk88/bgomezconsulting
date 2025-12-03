<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Dependant extends Model
{
    protected $table = "dependants";
    protected $fillable = ["account_id","name","dob","ssn","months_in_home"];
}
