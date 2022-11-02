<?php

namespace App\Repository\Task;

use App\Models\Task;
use App\Repository\BaseRepository;

class TaskRepository extends BaseRepository implements TaskRepositoryInterface
{
    public function __construct(Task $model)
    {
        $this->model = $model;
    }
}
