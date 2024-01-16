@extends('adminlte::page')

@section('title', 'Clientes')

@section('content_header')
    <h1><strong>Clientes</strong></h1>
    @include('clients.create')
    <br>
    <button class="btn btn-primary" data-toggle="modal" data-target="#modalCreateClient">Agregar</button>
@stop
@section('content')
@if ($errors->any())
    @foreach ($errors->all() as $error)
        <x-adminlte-alert theme="danger" icon="fa fa-times" title="ERROR" dismissable>
            {{ $error}}
        </x-adminlte-alert>
    @endforeach  
@endif

<x-adminlte-datatable id="clients" :heads="$heads" theme="light" striped hoverable with-buttons :config="['responsive'=>true]">
    @foreach($clients as $row)
        <tr>
            @include('clients.update')
            @include('clients.show')
            @include('clients.delete')
            @foreach($row ->toArray() as $cell)
                <td>{{ $cell}}</td>
            @endforeach
            <td>
                <button class="btn btn-xs btn-default text-teal mx-1 shadow" data-toggle="modal" data-target="#modalShowClient{{$row->id}}" title="Details">
                    <i class="fa fa-lg fa-fw fa-eye"></i>
                </button>
                <button type="button" class="btn btn-xs btn-default text-primary mx-1 shadow" data-toggle="modal" data-target="#modalUpdateClient{{$row->id}}" title="Edit">
                    <i class="fa fa-lg fa-fw fa-pen"></i>
                </button>
                <button class="btn btn-xs btn-default text-danger mx-1 shadow" data-toggle="modal" data-target="#modalDeleteClient{{$row->id}}" title="Delete">
                    <i class="fa fa-lg fa-fw fa-trash"></i>
                </button>
            </td>
        </tr>
        
    @endforeach
</x-adminlte-datatable>

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

@if (Session::has('Ok'))
    <script>
        Swal.fire({
        icon: 'success',
        title: '¡El registro fue realizado exitosamente!',
        showConfirmButton: false,
        timer: 1500
    })

    </script>
@endif
@if (session('eliminar')=='ok')
    <script>
         Swal.fire(
            '¡Eliminado!',
            '¡El registro fue eliminado correctamente!.',
            'success'
            )
    </script>
@endif
@if (session('update')=='ok')
    <script>
         Swal.fire(
            '¡Actualizado!',
            '¡El registro fue actualizado correctamente!.',
            'success'
            )
    </script>
@endif
<script>
    $('#form-delete').submit(function(e){
        e.preventDefault();
        Swal.fire({
        title: 'Estas segura que deseas borrar?',
        text: "Luego de ejecutar esta accion no se podra revertir los cambios",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Eliminar'
        }).then((result) => {
        if (result.isConfirmed) {
            this.submit();  
        }
        })
    })
</script>
<script>
     $('#form-update').submit(function(e){
        console.log('hi')
        e.preventDefault();
        Swal.fire({
        title: 'Estas seguro que deseas guardar los cambios?',
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: '¡Si, realiza los cambios!'
        }).then((result) => {
        if (result.isConfirmed) {
            this.submit();  
        }
        })
    })
</script>
<script>
    $(document).ready(function() {
    $('.select2').select2();
});
</script>
@stop