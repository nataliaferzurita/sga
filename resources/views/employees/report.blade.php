<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Legajo</title>
</head>
<body>
    <div class="container">
        <h1 class="text-center">Legajo</h1>
        <h5 class="text-center"><strong>{{$row->name1_employee." ".$row->name2_employee." ".$row->lastname1_employee." ".$row->lastname2_employee}}</strong></h5>
        <div class="row align-items-center">
            <img src="{{$row->photo_employee}}" class="mx-auto d-block" alt="Foto del Empleado" width="200">
        </div>
        <div class="row">
            <label>Numero de Legajo:{{$row->id}}</label>
        </div>
        <div class="row">
            <label for="dateOfEntry_employee">Fecha de Ingreso:{{$row->dateOfEntry_employee}}</label>
        </div>
        <div class="row">
            <label>CUIL:{{$row->cuil_employee}}</label>
        </div>
        <div class="row">
            <label>Primer Nombre:{{$row->name1_employee}}</label>
        </div>
        <div class="row">
           <label>Segundo Nombre:{{$row->name2_employee}}</label>

        </div>
        <div class="row">
            <label>Primer Apellido:{{$row->lastname1_employee}}</label> 
        </div>
        <div class="row">
            <label for="lastname2_employee">Segundo Apellido:{{$row->lastname2_employee}}</label>
        </div>
        <div class="row">
            <label for="nationality_employee">Nacionalidad:{{$row->nationality_employee}}</label>
        </div>
        <div class="row">
            <label>Telefono/Celular:{{$row->phone_employee}}</label>
        </div>
        <div class="row">
           <label for="country_employee">País:{{$row->country_employee}}</label>
        </div>
        <div class="row">
            <label for="state_employee">Provincia:{{$row->state_employee}}</label>
        </div>
        <div class="row">
            <label for="city_employee">Ciudad:{{$row->city_employee}}</label>
        </div>
        <div class="row">
            <label for="address_employee">Domicilio:{{$row->address_employee}}</label>
        </div>
        <div class="row">
            <label>Puesto:{{$row->position->name_position}}</label>
        </div>
        <div class="row">
           <label>Sueldo:{{$row->salary_employee}}</label>
        </div>
        <div class="row">
            <label>Fecha de Alta:{{$row->created_at}}</label>
        </div>
        <div class="row">
            <label>Fecha de Actualizacion:{{$row->updated_at}}</label>
        </div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>