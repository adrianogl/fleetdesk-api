<?php

namespace App\Http\Controllers\Api\Tasks;

use App\Http\Controllers\Controller;
use App\Repository\Task\TaskRepository;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class ListAction extends Controller
{
    public function __construct(private TaskRepository $taskRepository)
    {
        $this->middleware('auth:api');
    }

    /**
     * @group Tasks
     */
    public function __invoke(Request $request): JsonResponse
    {
        $tasks = $this->taskRepository->all([
            'id',
            'title',
            'description',
            'status'
        ]);

        return $this->responseSuccess([
            'tasks' => $tasks,
        ]);
    }
}
