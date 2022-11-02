<?php

namespace App\Repository\TaskHistory;

use App\Models\TaskHistory;
use App\Repository\BaseRepository;

class TaskHistoryRepository extends BaseRepository implements TaskHistoryRepositoryInterface
{
    public function __construct(TaskHistory $model)
    {
        $this->model = $model;
    }
}
