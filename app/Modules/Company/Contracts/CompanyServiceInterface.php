<?php

namespace App\Modules\Company\Contracts;

use App\Modules\Company\DTOs\CompanyData;
use App\Modules\Company\Models\Company;

interface CompanyServiceInterface
{
    /**
     * Create a new company
     */
    public function createCompany(CompanyData $companyData): Company;

    /**
     * Get a company by ID
     */
    public function getCompanyById(int $id): ?Company;

    /**
     * Get all companies
     */
    public function getAllCompanies();

    /**
     * Update a company
     */
    public function updateCompany(Company $company, CompanyData $companyData): Company;

    /**
     * Delete a company
     */
    public function deleteCompany(Company $company): bool;
}
