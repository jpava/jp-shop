<?php

namespace {{ namespace }}\Contracts;

use {{ namespace }}\DTOs\{{ class }}Data;
use {{ namespace }}\Models\{{ class }};

interface {{ class }}ServiceInterface
{
    /**
     * Create a new {{ class|lower }}
     */
    public function create{{ class }}({{ class }}Data ${{ class|lower }}Data): {{ class }};

    /**
     * Get a {{ class|lower }} by ID
     */
    public function get{{ class }}ById(int $id): ?{{ class }};

    /**
     * Get all {{ class|lower }}s
     */
    public function getAll{{ class }}s();

    /**
     * Update a {{ class|lower }}
     */
    public function update{{ class }}({{ class }} ${{ class|lower }}, {{ class }}Data ${{ class|lower }}Data): {{ class }};

    /**
     * Delete a {{ class|lower }}
     */
    public function delete{{ class }}({{ class }} ${{ class|lower }}): bool;
}
