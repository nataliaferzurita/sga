@extends('adminlte::page')

@section('title', 'Proveedores')

@section('content_header')
    <h1><strong>Proveedores</strong></h1>
    @include('providers.create')
    <br>
    <button class="btn btn-primary" data-toggle="modal" data-target="#modalCreateProvider">Agregar</button>
@stop
@section('content')

@if ($errors->any())
    @foreach ($errors->all() as $error)
        <x-adminlte-alert theme="danger" icon="fa fa-times" title="ERROR" dismissable>
            {{ $error}}
        </x-adminlte-alert>
    @endforeach  
@endif

<x-adminlte-datatable id="providers" :heads="$heads" theme="light" striped hoverable with-buttons :config="['responsive'=>true]">
    @foreach($providers as $row)
        <tr>
            @include('providers.update')
            @include('providers.show')
            @include('providers.delete')
            @foreach($row ->toArray() as $cell)
                <td>{{ $cell}}</td>
            @endforeach
            <td>
                <button class="btn btn-xs btn-default text-teal mx-1 shadow" data-toggle="modal" data-target="#modalShowProvider{{$row->id}}" title="Details">
                    <i class="fa fa-lg fa-fw fa-eye"></i>
                </button>
                <button type="button" class="btn btn-xs btn-default text-primary mx-1 shadow" data-toggle="modal" data-target="#modalEditprovider{{$row->id}}" title="Edit">
                    <i class="fa fa-lg fa-fw fa-pen"></i>
                </button>
                <button class="btn btn-xs btn-default text-danger mx-1 shadow" data-toggle="modal" data-target="#modalDeleteProvider{{$row->id}}" title="Delete">
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


@if (session('insert') or session('eliminar') or session('update')=='ok')
<script>
    Swal.fire({
    icon: 'success',
    title: '¡La operación fue realizada exitosamente!',
    showConfirmButton: false,
    timer: 1500
})
</script>
@endif
@if (session('insert')=='no')
    <script>
        Swal.fire({
        icon: 'error',
        title: 'La operacion no se puedo realizar correctamente, el puesto ya existe.',
        showConfirmButton: false,
        timer: 3000
    })
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