<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Products;

class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products=Products::where('active_product',1)->get();
        $heads=['ID','PROVEEDOR','ARTICULO PROVEEDOR','NOMBRE','TEMPORADA','TIPO PRODUCTO','TIPO TELA','TALLE','COLOR','STOCK','COSTO','PRECIO VENTA','DESCRIPCIÓN','ACCIONES'];
        return view('products.index',compact('heads'),compact('products'));
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
            'name_product'=> 'required|min:1|max:20',
            'provider_product'=> 'required',
            'fabric_product'=>'required|min:1|max:20',
            'season_product'=>'required|min:1|max:20',
            'size_product'=>'required|min:1|max:10',
            'color_product'=>'required|min:1|max:20',
            'typeProduct_product'=> 'required|min:1|max:20',
            'stock_product'=>'required|numeric',
            'cost_product'=>'required|numeric',
            'price_product'=>'required|numeric',
            'description_product'=>'required|min:1|max:100'
            
        ]);
        $product=new Products();
       
        if($request->hasFile('photo_product')){

            $file=$request->file('photo_product');
            $destinationPath='images/products/';
            $filename=time()."-". $file->getClientOriginalName();
            $uploadSuccess=$request->file('photo_product')->move($destinationPath,$filename);
            $product->photo_product=$destinationPath.$filename;
        }
        $product->name_product=$request->name_product;
        $product->provider_product=$request->provider_product;
        $product->artProvider_product=$request->artProvider_product;
        $product->fabric_product=$request->fabric_product;
        $product->season_product=$request->season_product;
        $product->size_product=$request->size_product;
        $product->color_product=$request->color_product;
        $product->typeProduct_product=$request->typeProduct_product;
        $product->stock_product=$request->stock_product;
        $product->cost_product=$request->cost_product;
        $product->price_product=$request->price_product;
        $product->description_product=$request->description_product;
        $product->save();

        return back()->with('Ok','success');
    }

    /**
     * Display the specified resource.
     */
    public function show(Products $products)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Products $products)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Products $product)
    {
        $request->validate([
            'name_product'=> 'required|min:1|max:20',
            'provider_product'=> 'required',
            'fabric_product'=>'required|min:1|max:20',
            'season_product'=>'required|min:1|max:20',
            'size_product'=>'required|min:1|max:10',
            'color_product'=>'required|min:1|max:20',
            'typeProduct_product'=> 'required|min:1|max:20',
            'stock_product'=>'required|numeric',
            'cost_product'=>'required|numeric',
            'price_product'=>'required|numeric',
            'description_product'=>'required|min:1|max:100'
            
        ]);
       
        if($request->hasFile('photo_product')){

            $file=$request->file('photo_product');
            $destinationPath='images/products/';
            $filename=time()."-". $file->getClientOriginalName();
            $uploadSuccess=$request->file('photo_product')->move($destinationPath,$filename);
            $product->photo_product=$destinationPath.$filename;
        }
        $product->name_product=$request->name_product;
        $product->provider_product=$request->provider_product;
        $product->fabric_product=$request->fabric_product;
        $product->season_product=$request->season_product;
        $product->size_product=$request->size_product;
        $product->color_product=$request->color_product;
        $product->typeProduct_product=$request->typeProduct_product;
        $product->stock_product=$request->stock_product;
        $product->cost_product=$request->cost_product;
        $product->price_product=$request->price_product;
        $product->description_product=$request->description_product;
        $product->save();

        return back()->with('update','ok');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Products $product)
    {
        $product->active_position=0;
        $product->save();
        return back()->with('eliminar','ok');
    }
}
