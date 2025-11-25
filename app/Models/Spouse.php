<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Spouse extends Model
{
    protected $table = "spouses";
    protected $fillable = ["name","occupation","dob","account_id","address","phone","state","city","street","email","ssn","license_number","dob"];

}
