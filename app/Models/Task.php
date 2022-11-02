<?php

namespace App\Models;

use App\Scopes\TaskUserScope;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'description'
    ];

    protected static function boot()
    {
        parent::boot();
        static::addGlobalScope(new TaskUserScope());
    }
}
