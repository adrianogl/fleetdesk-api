<?php

namespace App\Repository\Task;

use App\Models\Task;
use App\Repository\BaseRepository;
use Illuminate\Database\Eloquent\Collection;

class TaskRepository extends BaseRepository implements TaskRepositoryInterface
{
    public function __construct(Task $model)
    {
        $this->model = $model;
    }

    public function filterByStatus(string $status = null, array $columns = ['*']): Collection
    {
        return $this->model->newQuery()
            ->select($columns)
            ->when(in_array($status, ['pending', 'completed']), fn ($query) => $query->where('status', $status))
            ->get();
    }
}
