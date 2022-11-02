<?php

namespace App\Http\Controllers\Api\Tasks;

use App\Http\Controllers\Controller;
use App\Http\Requests\Api\Tasks\CreateRequest;
use App\Repository\Task\TaskRepository;
use App\Repository\Task\TaskRepositoryInterface;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class CreateAction extends Controller
{
    public function __construct(private TaskRepository $taskRepository)
    {
        $this->middleware('auth:api');
    }

    /**
     * @group Tasks
     */
    public function __invoke(CreateRequest $request): JsonResponse
    {
        $data = $request->validated();
        $task = $this->taskRepository->create($data);

        return $this->responseSuccess([
            'task' => $task,
        ]);
    }
}
