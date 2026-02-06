<?php

namespace App\Services\Company;

use App\DTOs\CompanyData;
use App\Http\Requests\CompanyRequest;
use App\Models\Company;


readonly class CompanyService
{
    public function __construct(
      
    )
    {}

    function createCompany(CompanyData $companyData):Company
    {
        return Company::create((array)$companyData);
    }
    
}