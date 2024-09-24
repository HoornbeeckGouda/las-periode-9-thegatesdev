<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Profile extends Model
{
    protected $fillable = [
        'first_name',
        'name_prefix',
        'last_name',
        'initials',
        'official_name',
        'postal_code',
        'street',
        'house_no',
        'house_no_addition',
        'city',
    ];


    public function user(): HasOne
    {
        return $this->hasOne(User::class);
    }
}
