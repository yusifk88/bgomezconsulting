<?php

namespace App\Models;

use App\Mail\ReviewNotification;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Support\Facades\Mail;

class Account extends Model
{
    protected $table = "accounts";
    protected $fillable = ["name", "occupation", "dob", "user_id", "address", "phone", "state", "city", "street", "zip", "email", "ssn", "license_number"];


    /**
     * @param string $title
     * @param string $message
     * @param string $email
     * @param string|null $link
     * @return void
     * send an email notification to the email provided
     */

    public static function sendNotification(string $title, string $message, string $email, string $link = null): void
    {

        Mail::to($email)->queue(new ReviewNotification(title: $title, message: $message, link: $link));

    }

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

    public function files(): HasMany
    {
        return $this->hasMany(Record::class);
    }

}
