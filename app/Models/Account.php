<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Account extends Model
{
    protected $table = "accounts";
    protected $fillable = ["name", "occupation", "dob", "user_id", "address", "phone", "state", "city", "street", "email", "ssn", "license_number"];


    /**
     * @return HasOne
     */
    public function spouse(): HasOne
    {
        return $this->hasOne(Spouse::class);

    }

    public function dependants(): HasMany
    {
        return $this->hasMany(Dependant::class);
    }


    public function financials(): HasMany
    {
        return $this->hasMany(Finance::class);
    }


}
