@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Dashboard</h1>
@stop

@section('content')
@php($empleados=App\Models\Employees::all())
<div>
    <div class="row">
        <div class="col">
            <x-adminlte-small-box title={{count($empleados)}} text="Empleados" icon="fa fa-users"
            theme="warning" url="/employees" url-text="Ver Empleados"/>
        </div>
        <div class="col">
            <x-adminlte-small-box title="528" text="Proveedores" icon="fa fa-users"
            theme="primary" url="#" url-text="Ver Proveedores"/>
        </div>
        <div class="col">
            <x-adminlte-small-box title="528" text="Clientes" icon="fas fa-users"
            theme="success" url="#" url-text="Ver Clientes"/>
        </div>
    
    </div>
    <div class="row">
        <div class="col">
                <x-adminlte-small-box title="528" text="Compras" icon="fa fa-shopping-cart"
                theme="info" url="#" url-text="Ver Compras"/>
        </div>
        <div class="col">
            <x-adminlte-small-box title="528" text="Ventas" icon="fa fa-money"
            theme="secondary" url="#" url-text="Ver Ventas"/>
        </div>
        <div class="col">
            <x-adminlte-small-box title="528" text="Gastos" icon="fa fa-pie-chart"
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
