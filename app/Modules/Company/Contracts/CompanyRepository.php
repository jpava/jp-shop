<?php

namespace App\Modules\Company\Contracts;

use App\Modules\Company\DTOs\CompanyData;
use App\Modules\Company\Models\Company;
use Illuminate\Database\Eloquent\Collection;

abstract class CompanyRepository implements CompanyRepositoryInterface
{
    /**
     * Model instance
     */
    protected Company $model;

    /**
     * Constructor
     */
    public function __construct(Company $model)
    {
        $this->model = $model;
    }

    /**
     * Get the model
     */
    protected function getModel(): Company
    {
        return $this->model;
    }

    /**
     * Create a new company
     */
    abstract public function create(CompanyData $companyData): Company;

    /**
     * Find a company by ID
     */
    public function findById(int $id): ?Company
    {
        return $this->getModel()->find($id);
    }

    /**
     * Get all companies
     */
    public function getAll(): Collection
    {
        return $this->getModel()->all();
    }

    /**
     * Update a company
     */
    abstract public function update(Company $company, CompanyData $companyData): Company;

    /**
     * Delete a company
     */
    public function delete(Company $company): bool
    {
        return $company->delete();
    }
}
