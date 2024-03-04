@extends('adminlte::page')

@section('title', 'Productos')

@section('content_header')
    <h1><strong>Productos</strong></h1><br>
    @include('products.create')
    @include('products.bulkupload')
@stop
@php
    $amount_cost=0;
    $amount_price=0;
@endphp
@section('content')
<div class="row float-left">
    <div class="col">
        <button class="btn btn-primary" data-toggle="modal" data-target="#modalCreateProduct">Agregar</button>
    </div>
    <div class="col-md-auto">
        <button class="btn btn-success" data-toggle="modal" data-target="#modalBulkUploadProduct">Carga Masiva</button>
    </div>
</div>
 <br><br>
@if ($errors->any())
    @foreach ($errors->all() as $error)
        <x-adminlte-alert theme="danger" icon="fa fa-times" title="ERROR" dismissable>
            {{ $error}}
        </x-adminlte-alert>
    @endforeach  
@endif


<x-adminlte-datatable id="productos" :heads="$heads" theme="light" striped hoverable with-buttons :config="['responsive'=>true]">
    @foreach($products as $row)
        <tr>
            @include('products.update')
            @include('products.show')
            @include('products.delete')
 
            <td>{{$row->id}}</td>
            <td>{{$row->provider->name_provider}}</td>
            <td>{{$row->artProvider_product}}</td>
            <td>{{$row->name_product}}</td>
            <td>{{$row->season_product}}</td>
            <td>{{$row->typeProduct_product}}</td>
            <td>{{$row->fabric_product}}</td>
            <td>{{$row->size_product}}</td>
            <td>{{$row->color_product}}</td>
            <td>{{$row->stock_product}}</td>
            <td>{{$row->cost_product}}</td>
            <td>{{$row->price_product}}</td>
            <td>{{$row->description_product}}</td>
            <td>{{$row->created_at}}</td>
            <td>{{$row->updated_at}}</td>
            <td>
                <button class="btn btn-xs btn-default text-teal mx-1 shadow" data-toggle="modal" data-target="#modalShowProduct{{$row->id}}" title="Details">
                    <i class="fa fa-lg fa-fw fa-eye"></i>
                </button>
                <button type="button" class="btn btn-xs btn-default text-primary mx-1 shadow" data-toggle="modal" data-target="#modalEditProduct{{$row->id}}" title="Edit">
                    <i class="fa fa-lg fa-fw fa-pen"></i>
                </button>
                <button class="btn btn-xs btn-default text-danger mx-1 shadow" data-toggle="modal" data-target="#modalDeleteProduct{{$row->id}}" title="Delete">
                    <i class="fa fa-lg fa-fw fa-trash"></i>
                </button>
            </td>
        </tr>
    
    @php
        $amount_cost=$amount_cost+$row->stock_product*$row->cost_product;
        $amount_price=$amount_price+$row->stock_product*$row->price_product;
    @endphp
        
   
    @endforeach
</x-adminlte-datatable>
<br>
<div class="row">
    <div class="col"><h4><strong>Capital Invertido:${{$amount_cost}}</strong></h4></div>
    <div class="col"><h4><strong>Ingreso:${{$amount_price}}</strong></h4></div>
    <div class="col"><h4><strong>Diferencia:${{$amount_price-$amount_cost}}</strong></h4></div>
</div>

<div class="row float-right">
    <div class="col"><a class="btn btn-primary" href="/home">Volver</a></div>
</div>




@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
@if (count($errors)>0)
    <script>
        Swal.fire({
        icon: 'error',
        title: 'La operacion no se puedo realizar correctamente',
        showConfirmButton: false,
        timer: 3000
    })
    </script>

@endif
@stop