<?php

namespace App\Http\Controllers;


use App\Models\Providers;
use Illuminate\Http\Request;

class ProvidersController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $heads=['ID','CUIT','NOMBRE','TELEFONO','PAIS','PROVICIA','CIUDAD','CODIGO POSTAL','DOMICILIO','ALIAS','CONTACTO','FECHA CREACION','FECHA DE ACTUALIZACION','ACTIVO','ACCIONES'];
        $providers=Providers::where('active_provider',1)->get();
        return view('providers.index',compact('heads'),compact('providers'));
        
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
    public function store(Request $request)
    {
       $request->validate([
        'cuit_provider'=>'required|min:11|max:11|numeric',
        'name_provider'=>'required|min:1|max:20'

        ]
       );
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
    public function update(Request $request, Providers $providers)
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
