<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class File extends Model
{
    protected $table = "files";
    protected $fillable = ["account_id", "record_id", "name", "url"];


    /**
     * @return BelongsTo
     */
    public function record(): BelongsTo
    {
        return $this->belongsTo(Record::class);
    }

}
