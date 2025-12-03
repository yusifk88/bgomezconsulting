<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Record extends Model
{
    protected $table = 'records';
    protected $fillable = ["title", "description", "bio_info", "account_id"];

    protected $casts = [
        "bio_info" => "array",
    ];


    /**
     * @return HasMany
     */
    public function files(): HasMany
    {
        return $this->hasMany(File::class);
    }


    public function account(): BelongsTo
    {
        return $this->belongsTo(Account::class);
    }


}
