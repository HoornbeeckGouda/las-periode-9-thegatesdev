<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasManyThrough;

class Course extends Model
{
    protected $fillable = [
        'name',
        'prefix',
    ];


    public function subjects(): BelongsToMany
    {
        return $this->belongsToMany(Subject::class);
    }

    public function careers(): HasMany
    {
        return $this->hasMany(Career::class);
    }

    public function courseYears(): BelongsToMany
    {
        return $this->belongsToMany(CourseYear::class);
    }

    public function careerUser(): HasManyThrough
    {
        return $this->hasManyThrough(CareerUser::class, Career::class);
    }
}
