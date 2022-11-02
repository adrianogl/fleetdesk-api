<?php

declare(strict_types=1);

namespace App\Repository\Task;

use App\Repository\RepositoryInterface;
use Illuminate\Database\Eloquent\Collection;

interface TaskRepositoryInterface extends RepositoryInterface
{
    public function filterByStatus(string $status = null): ?Collection;
}
