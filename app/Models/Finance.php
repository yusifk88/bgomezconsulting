<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Finance extends Model
{
    protected $table = "finances";
    protected $fillable = ["account_id","type","name","amount"];

}
