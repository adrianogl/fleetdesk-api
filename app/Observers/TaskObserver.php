<?php

namespace App\Observers;

use App\Models\Task;
use App\Models\TaskHistory;
use App\Repository\TaskHistory\TaskHistoryRepository;
use Illuminate\Support\Facades\Auth;

class TaskObserver
{
    public function __construct(private TaskHistoryRepository $taskHistoryRepository)
    {
    }

    public function creating(Task $task)
    {
        $task->user_id = Auth::id();
    }

    public function created(Task $task)
    {
        $fields = array_filter(
            $task->getAttributes(),
            fn($value, $key) => in_array($key, $task->getFillable()),
            ARRAY_FILTER_USE_BOTH);

        $this->taskHistoryRepository->create([
            'task_id' => $task->id,
            'user_id' => $task->user_id,
            'status' => TaskHistory::ACTION_CREATE,
            'new_value' => json_encode($fields),
        ]);
    }
}
