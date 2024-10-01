<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Relations\Pivot;

class CareerUser extends Pivot
{
    use HasFactory;

    protected $fillable = [
        'start_date',
        'end_date',
    ];

    public $timestamps = false;


    public function career(): HasOne
    {
        return $this->hasOne(Career::class);
    }

    public function user(): HasOne
    {
        return $this->hasOne(User::class);
    }
}
