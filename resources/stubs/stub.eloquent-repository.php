<?php

namespace {{ namespace }}\Repositories;

use {{ namespace }}\Contracts\{{ class }}RepositoryInterface;
use {{ namespace }}\DTOs\{{ class }}Data;
use {{ namespace }}\Models\{{ class }};

class Eloquent{{ class }}Repository implements {{ class }}RepositoryInterface
{
    /**
     * Create a new {{ class|lower }}
     */
    public function create({{ class }}Data ${{ class|lower }}Data): {{ class }}
    {
        return {{ class }}::create((array)${{ class|lower }}Data);
    }

    /**
     * Find a {{ class|lower }} by ID
     */
    public function findById(int $id): ?{{ class }}
    {
        return {{ class }}::find($id);
    }

    /**
     * Get all {{ class|lower }}s
     */
    public function getAll()
    {
        return {{ class }}::all();
    }

    /**
     * Update a {{ class|lower }}
     */
    public function update({{ class }} ${{ class|lower }}, {{ class }}Data ${{ class|lower }}Data): {{ class }}
    {
        ${{ class|lower }}->update((array)${{ class|lower }}Data);
        return ${{ class|lower }};
    }

    /**
     * Delete a {{ class|lower }}
     */
    public function delete({{ class }} ${{ class|lower }}): bool
    {
        return ${{ class|lower }}->delete();
    }
}
