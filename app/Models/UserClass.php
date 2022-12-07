<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserClass extends Model
{
    use HasFactory;

    protected $table    = 'user_classes';
    protected $fillable = [
        'class'
    ];

    /**
     * Get all of the comments for the UserClass
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function userclass() 
    {
        return $this->hasMany(UserClass::class);
    }
}
