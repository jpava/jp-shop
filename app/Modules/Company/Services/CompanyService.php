<?php

namespace App\Modules\Company\Services;

use App\Modules\Company\Contracts\CompanyRepositoryInterface;
use App\Modules\Company\Contracts\CompanyServiceInterface;
use App\Modules\Company\DTOs\CompanyData;
use App\Modules\Company\Models\Company;

readonly class CompanyService implements CompanyServiceInterface
{
    public function __construct(
        protected CompanyRepositoryInterface $companyRepository
    )
    {}

    public function createCompany(CompanyData $companyData): Company
    {
        return $this->companyRepository->create($companyData);
    }

    public function getCompanyById(int $id): ?Company
    {
        return $this->companyRepository->findById($id);
    }

    public function getAllCompanies()
    {
        return $this->companyRepository->getAll();
    }

    public function updateCompany(Company $company, CompanyData $companyData): Company
    {
        return $this->companyRepository->update($company, $companyData);
    }

    public function deleteCompany(Company $company): bool
    {
        return $this->companyRepository->delete($company);
    }
}
