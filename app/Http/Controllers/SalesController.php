<?php

namespace App\Http\Controllers;

use App\Models\Sales;
use App\Models\Products;
use Illuminate\Http\Request;
use App\Models\Employees;
use App\Models\Clients;



class SalesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $heads=['FECHA','ID','TIPO VENTA','VENDEDOR','CLIENTE'];
        $sales=Sales::where('active_sale',1)->get();
        return view('sales.index',compact('heads'),compact('sales'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $employees=Employees::where('active_employee',true)->get();
        $products=Products::where('active_product',true)->get();
        $clients=Clients::where('active_client',true)->get();
        return view('sales.create',[
                                        'employees'=>$employees,
                                        'products'=>$products,
                                        'clients'=>$clients
                                    ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $productos=Products::where('active_product',true)->get();
        /*$request->validate([
            'client_sale'=>'required',
            'employee_sale'=>'required',
            'type_sale'=>'required'
        ]);*/
        return dd($request->all());
        //return back()->with('insert','ok');
    }

    /**
     * Display the specified resource.
     */
    public function show(Sales $sales)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Sales $sales)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Sales $sales)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Sales $sales)
    {
        //
    }
}
