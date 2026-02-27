<?php

namespace App\Modules\Company\Repositories;

use App\Modules\Company\Contracts\CompanyRepository;
use App\Modules\Company\DTOs\CompanyData;
use App\Modules\Company\Models\Company;

class EloquentCompanyRepository extends CompanyRepository
{
    /**
     * Create a new company
     */
    public function create(CompanyData $companyData): Company
    {
        return $this->getModel()->create((array)$companyData);
    }

    /**
     * Update a company
     */
    public function update(Company $company, CompanyData $companyData): Company
    {
        $company->update((array)$companyData);
        return $company;
    }
}

