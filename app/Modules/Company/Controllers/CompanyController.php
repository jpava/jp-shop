<?php

namespace App\Modules\Company\Controllers;

use App\Http\Controllers\Controller;
use App\Modules\Company\Contracts\CompanyServiceInterface;
use App\Modules\Company\DTOs\CompanyData;
use App\Modules\Company\Models\Company;
use App\Modules\Company\Requests\CompanyRequest;
use Illuminate\Http\Request;

class CompanyController extends Controller
{
    public function __construct(
        protected CompanyServiceInterface $companyService
    )
    {}
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CompanyRequest $request)
    {
        $companyDataDTO = CompanyData::fromRequest($request);
        $company = $this->companyService->createCompany($companyDataDTO);
        return back()->with('success', 'La empresa se creó correctamente.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Company $company)
    {
        return inertia('Admin/Companies/Show', [
            'company' => $company
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Company $company)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Company $company)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Company $company)
    {
        //
    }
}
