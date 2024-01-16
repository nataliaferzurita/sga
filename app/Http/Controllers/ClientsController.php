<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Clients;
use GuzzleHttp\Client;

class ClientsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $heads=['ID','DNI','NOMBRE','SEGUNDO NOMBRE','APELLIDO','TELEFONO','PAIS','PROVINCIA','CIUDAD','CODIGO POSTAL','DOMICILIO','ACTIVO','FECHA DE CREACION','ULTIMA ACTUALIZACION','ACCIONES'];
        $clients=Clients::where('active_client',1)->get();
        return view('clients.index',compact('heads'),compact('clients'));
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
            'dni_client'=> 'required',
            'name1_client'=> 'required|min:1|max:20',
            'name2_client'=> 'max:20',
            'lastname_client'=>'required'
        ]);
        $client=Clients::where('dni_client','like',$request->dni_client)->get();

        if($client->isEmpty()){
            $client=new Clients();
            $client->dni_client=$request->dni_client;
            $client->name1_client=$request->name1_client;
            $client->name2_client=$request->name2_client;
            $client->lastname_client=$request->lastname_client;
            $client->phone_client=$request->phone_client;
            $client->country_client=$request->country_client;
            $client->state_client=$request->state_client;
            $client->city_client=$request->city_client;
            $client->postalCode_client=$request->postalCode_client;
            $client->address_client=$request->address_client;
            $client->save();
        }
        else{
                $client->first()->active_client=1;
                $client->first()->save();
        }

        return back()->with('Ok','success');
    }

    /**
     * Display the specified resource.
     */
    public function show(Clients $clients)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Clients $clients)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Clients $clients)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Clients $clients)
    {
        //
    }
}
