<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Subject extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
    ];

    public $timestamps = false;


    public function courses(): BelongsToMany
    {
        return $this->belongsToMany(Course::class);
    }

    public function grades(): HasMany
    {
        return $this->hasMany(Grade::class);
    }
}
