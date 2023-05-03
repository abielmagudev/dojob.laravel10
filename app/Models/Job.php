<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    use HasFactory;

    // Validators

    public function hasExtensions()
    {
        return (bool) $this->extensions->count();
    }

    // Relationships

    public function tasks()
    {
        return $this->hasMany(Task::class);
    }

    public function extensions()
    {
        return $this->belongsToMany(Extension::class);
    }
}
