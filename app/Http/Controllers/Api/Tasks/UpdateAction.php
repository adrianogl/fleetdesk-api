<?php

namespace App\Http\Controllers\Api\Tasks;

use App\Http\Controllers\Controller;
use App\Http\Requests\Api\Tasks\UpdateRequest;
use App\Models\Task;
use App\Repository\Task\TaskRepository;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UpdateAction extends Controller
{
    public function __construct(private TaskRepository $taskRepository)
    {
        $this->middleware('auth:api');
    }

    /**
     * @group Tasks
     */
    public function __invoke(Task $task, UpdateRequest $request): JsonResponse
    {
        $task = $this->taskRepository->update($task->id, $request->validated());
        return $this->responseSuccess([
            'task' => $task,
        ]);
    }
}
