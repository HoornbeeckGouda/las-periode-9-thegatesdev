<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class CourseYear extends Model
{
    protected $fillable = [
        'name',
        'start_date',
        'end_date',
    ];


    public function careers(): HasMany
    {
        return $this->hasMany(Career::class);
    }
}
