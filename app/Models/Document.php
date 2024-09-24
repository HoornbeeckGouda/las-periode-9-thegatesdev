<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Document extends Model
{
    protected $fillable = [
        'path',
        'display',
    ];


    public function users(): BelongsToMany
    {
        return $this->belongsToMany(User::class);
    }
}
