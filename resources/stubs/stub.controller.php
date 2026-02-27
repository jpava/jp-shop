<?php

namespace {{ namespace }}\Controllers;

use App\Http\Controllers\Controller;
use {{ namespace }}\Contracts\{{ class }}ServiceInterface;
use {{ namespace }}\DTOs\{{ class }}Data;
use {{ namespace }}\Models\{{ class }};
use {{ namespace }}\Requests\{{ class }}Request;
use Illuminate\Http\Request;

class {{ class }}Controller extends Controller
{
    /**
     * Constructor - Inyecta la interfaz del servicio
     */
    public function __construct(
        protected {{ class }}ServiceInterface ${{ class|lower }}Service
    )
    {}

    /**
     * Display a listing of the resource
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage
     */
    public function store({{ class }}Request $request)
    {
        //
    }

    /**
     * Display the specified resource
     */
    public function show({{ class }} ${{ class|lower }})
    {
        //
    }

    /**
     * Show the form for editing the specified resource
     */
    public function edit({{ class }} ${{ class|lower }})
    {
        //
    }

    /**
     * Update the specified resource in storage
     */
    public function update(Request $request, {{ class }} ${{ class|lower }})
    {
        //
    }

    /**
     * Remove the specified resource from storage
     */
    public function destroy({{ class }} ${{ class|lower }})
    {
        //
    }
}
