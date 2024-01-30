@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Dashboard</h1>
@stop

@section('content')
@php
$empleados=App\Models\Employees::where('active_employee',true)->get();
$proveedores=App\Models\Providers::where('active_provider',true)->get();
$productos=App\Models\Products::where('active_product',true)->get();
$clientes=App\Models\Clients::where('active_client',true)->get();
$ventas=App\Models\Sales::where('active_sale',true)->groupBy('id')->get();
@endphp
<div>
    <div class="row">
        <div class="col">
            <x-adminlte-small-box title={{count($empleados)}} text="Empleados" icon="fa fa-users"
            theme="warning" url="/employees" url-text="Ver Empleados"/>
        </div>
        <div class="col">
            <x-adminlte-small-box title={{count($proveedores)}} text="Proveedores" icon="fa fa-users"
            theme="primary" url="/providers" url-text="Ver Proveedores"/>
        </div>
        <div class="col">
            <x-adminlte-small-box title="{{count($clientes)}}" text="Clientes" icon="fas fa-users"
            theme="success" url="/clients" url-text="Ver Clientes"/>
        </div>
    
    </div>
    <div class="row">
        <div class="col">
                <x-adminlte-small-box title="{{count($productos)}}" text="Productos" icon="fa fa-shopping-cart"
                theme="info" url="/products" url-text="Ver Productos"/>
        </div>
        <div class="col">
            <x-adminlte-small-box title="{{count($ventas)}}" text="Ventas" icon="fa fa-money"
            theme="secondary" url="/sales" url-text="Ver Ventas"/>
        </div>
        <div class="col">
            <x-adminlte-small-box title="528" text="Modista" icon="fa fa-pie-chart"
            theme="danger" url="#" url-text="Ver Ventas"/>
        </div>
    </div>
</div>

@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
