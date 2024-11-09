<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasManyThrough;

class Course extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'prefix',
    ];

    public $timestamps = false;


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
        return $this->belongsToMany(CourseYear::class, 'careers');
    }

    public function careerUsers(): HasManyThrough
    {
        return $this->hasManyThrough(CareerUser::class, Career::class);
    }


    protected function lastCourseYear(): Attribute
    {
        return Attribute::make(function () {
            return $this->courseYears()->latest('start_date')->first();
        });
    }
}
