<?php

namespace {{ namespace }}\Services;

use {{ namespace }}\Contracts\{{ class }}RepositoryInterface;
use {{ namespace }}\Contracts\{{ class }}ServiceInterface;
use {{ namespace }}\DTOs\{{ class }}Data;
use {{ namespace }}\Models\{{ class }};

readonly class {{ class }}Service implements {{ class }}ServiceInterface
{
    /**
     * Constructor
     */
    public function __construct(
        protected {{ class }}RepositoryInterface ${{ class|lower }}Repository
    )
    {}

    /**
     * Create a new {{ class|lower }}
     */
    public function create{{ class }}({{ class }}Data ${{ class|lower }}Data): {{ class }}
    {
        return $this->{{ class|lower }}Repository->create(${{ class|lower }}Data);
    }

    /**
     * Get a {{ class|lower }} by ID
     */
    public function get{{ class }}ById(int $id): ?{{ class }}
    {
        return $this->{{ class|lower }}Repository->findById($id);
    }

    /**
     * Get all {{ class|lower }}s
     */
    public function getAll{{ class }}s()
    {
        return $this->{{ class|lower }}Repository->getAll();
    }

    /**
     * Update a {{ class|lower }}
     */
    public function update{{ class }}({{ class }} ${{ class|lower }}, {{ class }}Data ${{ class|lower }}Data): {{ class }}
    {
        return $this->{{ class|lower }}Repository->update(${{ class|lower }}, ${{ class|lower }}Data);
    }

    /**
     * Delete a {{ class|lower }}
     */
    public function delete{{ class }}({{ class }} ${{ class|lower }}): bool
    {
        return $this->{{ class|lower }}Repository->delete(${{ class|lower }});
    }
}
