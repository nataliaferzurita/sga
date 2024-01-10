@extends('adminlte::page')

@section('title', 'Cargos')

@section('content_header')
    <h1>Cargos</h1>
    @include('positions.create')
    <button class="btn btn-primary" data-toggle="modal" data-target="#modalCreatePosition">Agregar</button>
@stop
@section('content')

@if ($errors->any())
    @foreach ($errors->all() as $error)
        <x-adminlte-alert theme="danger" icon="fa fa-times" title="ERROR" dismissable>
            {{ $error}}
        </x-adminlte-alert>
    @endforeach  
@endif

<x-adminlte-datatable id="table5" :heads="$heads" theme="light" striped hoverable with-buttons>
    @foreach($positions as $row)
        <tr>
            @include('positions.update')
            @include('positions.show')
            @include('positions.delete')

            @foreach($row ->toArray() as $cell)
                <td>{{ $cell}}</td>
            @endforeach
            <td>
                <button class="btn btn-xs btn-default text-teal mx-1 shadow" data-toggle="modal" data-target="#modalShowPosition{{$row->id}}" title="Details">
                    <i class="fa fa-lg fa-fw fa-eye"></i>
                </button>
                <button type="button" class="btn btn-xs btn-default text-primary mx-1 shadow" data-toggle="modal" data-target="#modalEditPosition{{$row->id}}" title="Edit">
                    <i class="fa fa-lg fa-fw fa-pen"></i>
                </button>
                <button class="btn btn-xs btn-default text-danger mx-1 shadow" data-toggle="modal" data-target="#modalDeletePosition{{$row->id}}" title="Delete">
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


@stop