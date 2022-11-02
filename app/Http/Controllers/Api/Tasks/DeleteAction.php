<?php

namespace App\Http\Controllers\Api\Tasks;

use App\Http\Controllers\Controller;
use App\Models\Task;
use App\Repository\Task\TaskRepository;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class DeleteAction extends Controller
{
    public function __construct(private TaskRepository $taskRepository)
    {
        $this->middleware('auth:api');
    }

    public function __invoke(Task $task): JsonResponse
    {
        $this->taskRepository->delete($task->id);
        return $this->responseSuccess();
    }
}
