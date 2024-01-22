<?php

namespace App\Http\Controllers;


use App\Models\Providers;
use Illuminate\Http\Request;
use Laravel\Socialite\Contracts\Provider;
use Barryvdh\DomPDF\Facade\Pdf;
class ProvidersController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $heads=['ID','CUIT','NOMBRE O RAZÓN SOCIAL','NOMBRE FANTASIA','TELEFONO','PAIS','PROVICIA','CIUDAD','CODIGO POSTAL','DOMICILIO','ALIAS','CONTACTO','FECHA CREACION','FECHA DE ACTUALIZACION','ACTIVO','ACCIONES'];
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
            'cuit_provider'=>'required|numeric',
            'name_provider'=>'required|min:1|max:20',
            'phone_provider'=>'max:10',
            'country_provider'=>'max:20',
            'state_provider'=>'max:20',
            'city_provider'=>'max:20',
            'postalCode_provider'=>'max:10',
            'address_provider'=>'max:100',
            'alias_provider'=>'max:20',
            'contactName_provider'=>'max:50'
        ]
       );
       $provider=Providers::where('cuit_provider','like',$request->cuit_provider)->get();

       if($provider->isEmpty()){
            $provider=new Providers();
            $provider->cuit_provider=$request->cuit_provider;
            $provider->name_provider=$request->name_provider;
            $provider->fantasyName_provider=$request->fantasyName_provider;
            $provider->phone_provider=$request->phone_provider;
            $provider->country_provider=$request->country_provider;
            $provider->state_provider=$request->state_provider;
            $provider->city_provider=$request->city_provider;
            $provider->postalCode_provider=$request->postalCode_provider;
            $provider->address_provider=$request->address_provider;
            $provider->alias_provider=$request->alias_provider;
            $provider->contactName_provider=$request->contactName_provider;
            $provider->save();
           

       }
       else{
                if($provider->first()->active_provider==false){
                    $provider->first()->active_provider=true;
                    $provider->first()->save();
                }
                else return back()->with('insert','no');
       }
       return back()->with('insert','ok');
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
    public function update(Request $request, Providers $provider)
    {
            $request->validate([
                'cuit_provider'=>'required|numeric',
                'name_provider'=>'required|min:1|max:20',
                'phone_provider'=>'max:10',
                'country_provider'=>'max:20',
                'state_provider'=>'max:20',
                'city_provider'=>'max:20',
                'postalCode_provider'=>'max:10',
                'address_provider'=>'max:100',
                'alias_provider'=>'max:20',
                'contactName_provider'=>'max:50'
            ]);
            $provider->cuit_provider=$request->cuit_provider;
            $provider->name_provider=$request->name_provider;
            $provider->phone_provider=$request->phone_provider;
            $provider->country_provider=$request->country_provider;
            $provider->state_provider=$request->state_provider;
            $provider->city_provider=$request->city_provider;
            $provider->postalCode_provider=$request->postalCode_provider;
            $provider->address_provider=$request->address_provider;
            $provider->alias_provider=$request->alias_provider;
            $provider->contactName_provider=$request->contactName_provider;
            $provider->save();
            
            return back()->with('update','ok');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Providers $provider)
    {
        $provider->active_provider=0;
        $provider->save();
        return back()->with('eliminar','ok');
       
    }

    public function pdf(Providers $provider){
        $pdf=PDF::loadView('providers/report',['row'=>$provider]);
        return $pdf->setPaper('a4','landscape')->stream('invoke.pdf');
    }
}
