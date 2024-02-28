@extends('adminlte::page')

@section('title', 'Nueva Venta')

@section('content_header')
    <h1><strong>Nueva Venta</strong></h1>
@stop
@php
    $clients=App\Models\Clients::where('active_client',true)->get();
    $products=App\Models\Products::where('active_product',true)->get();
@endphp
@section('content')
    <div class="container">
        <div class="card text-center">
            <div class="card-header">
              Venta
            </div>
            <div class="card-body" >
                
                    <div class="row">
                        <div class="col"><label for="client_sale">Cliente:</label></div>
                        <div class="col">
                            <select name="clients" id="" class="form-control js-example-basic-single">
                                @foreach ($clients as $client)
                                    <option value="{{$client->id}}">{{$client->dni_client."-".$client->getFullNameAttribute()}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div>
                            @include('clients.create')
                            <button class="btn btn-primary" data-toggle="modal" data-target="#modalCreateClient">Agregar</button>
                        </div>
                      </div>
                      <br>
                      <div class="container" id="dinamic">
                            <div class="row">
                                <div class="col"><label for="numeroLinea">1 - </label></div>
                                <div class="col">    
                                    <select name="product" id="product" onchange="val()" class="form-control js-example-basic-single">
                                        @foreach ($products as $product)
                                            <option value="{{$product->id}}">{{$product->getFullNameAttribute()}}</option>
                                        @endforeach
                                        </select>
                                </div>
                                <div class="col">
                                    <input type="number" id="quantity" min="1" max="">
                                </div>
                                <div class="col"><button class="btn btn-danger">Eliminar</button></div>
                            </div>
                        </div>
            <div class="card-footer text-muted">
                <div class="row"><button  id="agregar" class="btn btn-success w-100">Agregar linea de descripción</button></div>
                
            </div>
          </div>
    </div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> 
        $(document).ready(function() {
            $('.js-example-basic-single').select2();
        });
    </script>
    <script>
        let quantity = document.getElementById("quantity");
 
        quantity.addEventListener("input",function(){
        let value = this.value;
        console.log(value)
        })
       
    </script>
    <script>
       function val() {
        d = document.getElementById("product").value;
        console.log(value)
        }  
    </script>
    <script>
        const contenedor=document.querySelector('#dinamic');
        const btnagregar=document.querySelector("#agregar");
        let total=1;
        btnagregar.addEventListener('click',e=>{
            total=total+1;
            let div =document.createElement('div');
            div.setAttribute("id", "row"+total);
            div.classList.add("row");
            div.innerHTML='<div class="col"><label>' +total+ "-"+'</label></div><div class="col"><select name="product" id="product" onchange="val()" class="form-control js-example-basic-single">@foreach ($products as $product)<option value="{{$product->id}}">{{$product->getFullNameAttribute()}}</option>@endforeach</select></div><div class="col"><input type="number" id="quantity" min="1" max=""></div><div class="col"><button class="btn btn-danger" onclick="eliminar(row'+total+')">Eliminar</button></div>';
            
            contenedor.appendChild(div);
            $(document).ready(function() {
            $('.js-example-basic-single').select2();
        });
        });
      
        const eliminar= (e)=>{
            console.log(e)
            //const divPadre=e.parentNode;
            //contenedor.removeChild(divPadre);
           
        };  
    </script>
@stop