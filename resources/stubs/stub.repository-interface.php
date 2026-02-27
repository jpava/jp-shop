<?php

namespace {{ namespace }}\Contracts;

use {{ namespace }}\DTOs\{{ class }}Data;
use {{ namespace }}\Models\{{ class }};

interface {{ class }}RepositoryInterface
{
    public function create({{ class }}Data $data): {{ class }};
    public function findById(int $id): ?{{ class }};
    public function getAll();
    public function update({{ class }} $model, {{ class }}Data $data): {{ class }};
    public function delete({{ class }} $model): bool;
}