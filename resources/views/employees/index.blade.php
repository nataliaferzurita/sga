@extends('adminlte::page')

@section('title', 'Empleados')

@section('content_header')
    <h1><strong>Nomina de Empleados</strong></h1>
    
@stop
@section('content')
<a href="{{route('employees.create')}}" class="btn btn-primary">Agregar</a>
<br>
<br>
@if ($errors->any())
    @foreach ($errors->all() as $error)
        <x-adminlte-alert theme="danger" icon="fa fa-times" title="ERROR" dismissable>
            {{ $error}}
        </x-adminlte-alert>
    @endforeach  
@endif


<x-adminlte-datatable id="employees" :heads="$heads" theme="light" striped hoverable with-buttons :config="['responsive'=>true]">
    @foreach($employees as $row)
        <tr>
            @include('employees.update')
            @include('employees.show')
            @include('employees.delete')

            <td>{{$row->id}}</td>
            <td>{{$row->cuil_employee}}</td>
            <td>{{$row->dateOfEntry_employee}}</td>
            <td>{{$row->name1_employee}}</td>
            <td>{{$row->name2_employee}}</td>
            <td>{{$row->lastname1_employee}}</td>
            <td>{{$row->lastname2_employee}}</td>
            <td>{{$row->dateOBirth_employee}}</td>
            <td>{{$row->nationality_employee}}</td>
            <td>{{$row->phone_employee}}</td>
            <td>{{$row->country_employee}}</td>
            <td>{{$row->state_employee}}</td>
            <td>{{$row->city_employee}}</td>
            <td>{{$row->address_employee}}</td>
            <td>{{$row->position->name_position}}</td>
            <td>{{$row->salary_employee}}</td>
            <td>{{$row->created_at}}</td>
            <td>{{$row->updated_at}}</td>
            <td>{{$row->active_employee}}</td>
            <td>
                <button class="btn btn-xs btn-default text-teal mx-1 shadow" data-toggle="modal" data-target="#modalShowEmployee{{$row->id}}" title="Details">
                    <i class="fa fa-lg fa-fw fa-eye"></i>
                </button>
                <button type="button" class="btn btn-xs btn-default text-primary mx-1 shadow" data-toggle="modal" data-target="#modalEditEmployee{{$row->id}}" title="Edit">
                    <i class="fa fa-lg fa-fw fa-pen"></i>
                </button>
                <button class="btn btn-xs btn-default text-danger mx-1 shadow" data-toggle="modal" data-target="#modalDeleteEmployee{{$row->id}}" title="Delete">
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
<script>
    $('#form-update').submit(function(e){
       
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
@if (session('eliminar')=='ok')
    <script>
         Swal.fire(
            '¡Eliminado!',
            '¡El registro fue eliminado correctamente!.',
            'success'
            )
    </script>
@endif

@stop