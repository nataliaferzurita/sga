@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <div class="col-sm-12 d-flex justify-content-center"><h1 class="text-center"><strong>Registro Nuevo Empleado</strong></h1></div>
    
@stop

@php($positions=App\Models\Position::where('active_position',1)->get())

@section('content')
<form action="post" method="{{route('employees.store')}}">
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
      <div class="col-4 mb-4"><label for="phone_employee">Telefono/Celular:</label></div>
      <div class="col-4 mb-4"><input type="text" class="form-control" name="phone_employee"></div>
    </div>
    @livewire('selects')
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
        <button type="button"  class="btn btn-primary">
          <i class="fa fa-plus" aria-hidden="true"></i>
        </button>
      </div>
    </div>
    <div class="row">
      <div class="col-4 mb-4"><label for="salary_employee">Sueldo:</label></div>
      <div class="col-4 mb-4"><input type="decimal" class="form-control" name="salary_employee"></div>
    </div>
    <div class="row float-right">
      <div class="col-4 mr-4"><a href="{{route('home')}}" class="btn btn-primary">Volver</a></div>
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

@stop


