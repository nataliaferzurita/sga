@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <div class="col-sm-12 d-flex justify-content-center"><h1 class="text-center"><strong>Registro Nuevo Empleado</strong></h1></div>
    
@stop
@php
$positions=App\Models\Position::where('active_position',1)->get();
@endphp
@section('content')
@if ($errors->any())
    @foreach ($errors->all() as $error)
        <x-adminlte-alert theme="danger" icon="fa fa-times" title="ERROR" dismissable>
            {{ $error}}
        </x-adminlte-alert>
    @endforeach  
@endif
@include('positions.create')
<form action="{{route('employees.store')}}" method="post" enctype="multipart/form-data">
  @csrf 
  <div class="form-group">
    <div class="row">
      <div class="col-4 mb-4"><label for="cuil_employee">CUIL:</label></div>
      <div class="col-4 mb-4"><input type="text" class="form-control" name="cuil_employee"></div>
    </div>
    <div>
  
    <div class="row">
      <div class="col-4 mb-4"><label for="name1_employee">Primer Nombre:</label></div>
      <div class="col-4 mb-4"><input type="text" class="form-control" name="name1_employee" style="text-transform:uppercase"></div>
    </div>
    <div class="row">
      <div class="col-4 mb-4"><label for="name2_employee">Segundo Nombre:</label></div>
      <div class="col-4 mb-4"><input type="text" class="form-control" name="name2_employee"></div>
    </div>
    <div class="row">
      <div class="col-4 mb-4"><label for="name1_employee">Primer Apellido:</label></div>
      <div class="col-4 mb-4"><input type="text" class="form-control" name="lastname1_employee" style="text-transform:uppercase"></div>
    </div>
    <div class="row">
      <div class="col-4 mb-4"><label for="name2_employee">Segundo Apellido:</label></div>
      <div class="col-4 mb-4"><input type="text" class="form-control" name="lastname2_employee"></div>
    </div>
    <div class="row">
      <div class="col-4 mb-4"><label for="dateOBirth_employee">Fecha de Nacimiento:</label></div>
      <div class="col-4 mb-4"><input class="form-control" type="date" name="dateOfBirth_employee" max="{{now()->toDateString('Y-m-d')}}"></div>
    </div>
    <div class="row">
      <div class="col-4 mb-4"><label for="nationality_employee">Nacionalidad:</label></div>
      <div class="col-4 mb-4"><input type="text" class="form-control" name="nationality_employee"></div>
    </div>
    <div class="row">
      <div class="col-4 mb-4"><label for="phone_employee">Telefono/Celular:</label></div>
      <div class="col-4 mb-4"><input type="text" class="form-control" name="phone_employee"></div>
    </div>
    @livewire('selects')
    <div class="row">
      <div class="col-4 mb-4"><label for="postalCode_employee">Codigo Postal:</label></div>
      <div class="col-4 mb-4"><input type="text" class="form-control"></div>
    </div> 
    <div class="row">
      <div class="col-4 mb-4"><label class="form-contol" for="address_employee">Domicilio:</label></div>
      <div class="col-4 mb-4"><input class="form-control" type="text" name="address_employee"></div>
    </div>
    <div class="row">
      <div class="col-4 mb-4"><label for="dateOfEntry_employee">Fecha de Ingreso:</label></div>
      <div class="col-4 mb-4"><input class="form-control" type="date" name="dateOfEntry_employee" max="{{now()->toDateString('Y-m-d')}}"></div>
    </div>
    <div class="row">
      <div class="col-4 mb-4"><label for="position_employee">Puesto:</label></div>
      <div class="col-3 mb-4">
        <select class="js-example-basic-single form-control" name="position_employee">
          @foreach ($positions as $position)
            <option value={{$position->id}}>{{$position->name_position}}</option>
          @endforeach
        </select>
      </div>
      <div class="col-1 mb-4">
        <button type="button"  class="btn btn-primary" data-toggle="modal" data-target="#modalCreatePosition" title="Create">
          <i class="fa fa-plus" aria-hidden="true"></i>
        </button>
      </div>
    </div>
    <div class="row">
      <div class="col-4 mb-4"><label for="salary_employee">Sueldo:</label></div>
      <div class="col-4 mb-4"><input type="decimal" class="form-control" name="salary_employee"></div>
    </div>
    <div class="row">
      <div class="col-4"><label for="">Foto:</label></div>
      <div class="col-4">
        <x-adminlte-input-file-krajee name="photo_employee"/>
      </div>
    </div>
    <div class="row float-right">
      <div class="col-4 mr-4"><a href="{{route('employees.index')}}" class="btn btn-primary">Volver</a></div>
      <div class="col-4"><button class="btn btn-success" type="submit">Guardar</button></div>
    </div>
  </div>
  
</form>

@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
   
@stop

@section('js')
<script>
  $(document).ready(function(countrySelected){
        $('.select2').select2();
      });
</script>
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


