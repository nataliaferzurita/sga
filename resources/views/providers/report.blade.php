<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Etiqueta</title>
</head>
<body>
        <div>
            <font size="48"><strong>{{$row->name_provider}}</strong></font><br>
            <font size="36">{{$row->address_provider}}</font><br>
            <font size="36">{{$row->state_provider}}, {{$row->city_provider}}</font><br>
            <font size="36">C.P:{{$row->postalCode_provider}}</font><br>
            <font size="36">Telefono:{{$row->phone_provider}}</font><br>
        </div>
        <br>
        <div class="container">
            <div>
               <font size="36">RTTE:CASA AMANDA</font><br>
               <font size="36">Balcarce 82</font><br>
               <font size="36">Salta, Capital</font><br>
               <font size="36">C.P.:4400</font><br>
               <font size="36">Telefono:387-2436189</font>
            </div> 
        </div>
        
    
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>