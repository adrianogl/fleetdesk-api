<?php

namespace App\Repository;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

interface RepositoryInterface
{
    public function findById(int $id): ?Model;
    public function create(array $data): Model;
    public function update(int $modelId, array $data): Model;
    public function delete(int $modelId): bool;
}
