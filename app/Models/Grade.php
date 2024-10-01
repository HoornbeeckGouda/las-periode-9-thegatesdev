<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOneThrough;

class Grade extends Model
{
    use HasFactory;

    protected $fillable = [
        'career_user_id',
        'subject_id',
        'description',
    ];


    public function subject(): BelongsTo
    {
        return $this->belongsTo(Subject::class);
    }

    public function careerUser(): BelongsTo
    {
        return $this->belongsTo(CareerUser::class);
    }

    public function user(): HasOneThrough
    {
        return $this->hasOneThrough(User::class, CareerUser::class);
    }
}
