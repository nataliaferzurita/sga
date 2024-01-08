<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreProvidersRequest;
use App\Http\Requests\UpdateProvidersRequest;
use App\Models\Providers;

class ProvidersController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $heads=['ID','CUIT','FECHA CREACION','ULTIMA ACTUALIZACION','ESTADO',['label' => 'Actions', 'no-export' => true, 'width' => 15]];
        $positions=Providers::where('active_position',1)->get();
        return view('positions.index',compact('heads'),compact('positions'));
        
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
    public function store(StoreProvidersRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Providers $providers)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Providers $providers)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateProvidersRequest $request, Providers $providers)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Providers $providers)
    {
        //
    }
}
