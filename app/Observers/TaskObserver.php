<?php

namespace App\Observers;

use App\Models\Task;
use Illuminate\Support\Facades\Auth;

class TaskObserver
{
    public function creating(Task $task)
    {
        $task->user_id = Auth::id();
    }
}
