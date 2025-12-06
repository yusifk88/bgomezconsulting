<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Review extends Model
{
    protected $table = 'reviews';
    protected $fillable = ["title", "details", "file_id", "record_id", "from", "type","status"];


    /**
     * @return BelongsTo
     */
    public function record(): BelongsTo
    {
        return $this->belongsTo(Record::class);
    }

    public function file(): BelongsTo
    {
        return $this->belongsTo(File::class);
    }


}
