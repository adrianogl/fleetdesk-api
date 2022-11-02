<?php

namespace App\Models;

use App\Scopes\TaskUserScope;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Task extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'title',
        'description',
        'status'
    ];

    protected static function boot()
    {
        parent::boot();
        static::addGlobalScope(new TaskUserScope());
    }
}
