<?php

namespace App\Modules\Company\Repositories;

use App\Modules\Company\Contracts\CompanyRepositoryInterface;
use App\Modules\Company\DTOs\CompanyData;
use App\Modules\Company\Models\Company;

class EloquentCompanyRepository implements CompanyRepositoryInterface
{
    /**
     * Create a new company
     */
    public function create(CompanyData $companyData): Company
    {
        return Company::create((array)$companyData);
    }

    /**
     * Find a company by ID
     */
    public function findById(int $id): ?Company
    {
        return Company::find($id);
    }

    /**
     * Get all companies
     */
    public function getAll()
    {
        return Company::all();
    }

    /**
     * Update a company
     */
    public function update(Company $company, CompanyData $companyData): Company
    {
        $company->update((array)$companyData);
        return $company;
    }

    /**
     * Delete a company
     */
    public function delete(Company $company): bool
    {
        return $company->delete();
    }
}
