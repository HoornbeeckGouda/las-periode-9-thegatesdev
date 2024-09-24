<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Career extends Model
{
    protected $fillable = [
        'courseyear_id',
        'course_id',
    ];


    public function courseyear(): HasOne
    {
        return $this->hasOne(CourseYear::class);
    }

    public function course(): HasOne
    {
        return $this->hasOne(Course::class);
    }
}
