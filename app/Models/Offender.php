<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Offender extends Model
{
    use HasFactory;

    protected $table    = 'offenders';
    protected $fillable = [
        'name',
        'violation',
        'class_id'
    ];

    /**
     * Get the user that owns the Offender
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function offender()
    {
        return $this->belongsTo(Offender::class);
    }
}
