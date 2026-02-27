<?php

namespace App\Modules\Company\Contracts;

use App\Modules\Company\DTOs\CompanyData;
use App\Modules\Company\Models\Company;

interface CompanyRepositoryInterface
{
    /**
     * Create a new company
     */
    public function create(CompanyData $companyData): Company;

    /**
     * Find a company by ID
     */
    public function findById(int $id): ?Company;

    /**
     * Get all companies
     */
    public function getAll();

    /**
     * Update a company
     */
    public function update(Company $company, CompanyData $companyData): Company;

    /**
     * Delete a company
     */
    public function delete(Company $company): bool;
}
