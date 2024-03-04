@extends('adminlte::page')

@section('title', 'Nueva Venta')

@section('content_header')
    <h1><strong>Nueva Venta</strong></h1>
    <div class="row">
        <div class="col"><a class="btn btn-success" href="/sales">Volver</a></div>
    </div>
@stop


@section('content')
    
    <div class="container">
        <form action="{{route('sales.store')}}" id="form-create" method="post">
        <div class="card text-center">
            <div class="card-header" id="card-header">
                <div class="row">
                    <div class="col"><label for="client_sale">Cliente:</label></div>
                    <div class="col">
                        <select name="client_sale" required id="client_sale" class="form-control js-example-basic-single">
                            <option value="0" selected disabled>Seleccionar...</option>
                            @foreach ($clients as $client)
                                <option value="{{$client->id}}">{{$client->getFullNameAttribute()}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col"><label for="employee_sale">Vendedor:</label></div>
                    <div class="col">
                        <select name="employee_sale" id="employee_sale" class="form-control js-example-basic-single" required>
                            <option value="0" selected disabled>Seleccionar...</option>
                            @foreach ($employees as $employee)
                                <option value="{{$employee->id}}">{{$employee->getFullNameAttribute()}}</option>
                            @endforeach
                        </select>
                        
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col"><label for="type_sale" >Tipo Venta:</label></div>
                    <div class="col">
                        <select name="type_sale" id="type_sale" class="form-control js-example-basic-single" required>
                            <option value="0" selected disabled>Seleccionar...</option>
                            <option value="1">Normal</option>
                            <option value="2">Seña</option>
                            <option value="3">Cuenta Corriente</option>
                        </select>
                    </div>
                </div>
               
            </div>
            
                @csrf
                <div class="card-body" >
                    <br>
                    <div class="container" id="dinamic">
                        <div class="row">
                            <div class="col"><label for="line">N°</label></div>
                            <div class="col"><label for="products">Productos</label></div>
                            <div class="col"><label for="quantity">Cantidad</label></div>
                            <div class="col"><label for="price">Precio</label></div>
                            <div class="col"><label for="subtotal">Subtotal</label></div>
                            <div class="col"><label for="action"></label></div>
                            </div>
                        <div class="row" id="row_1">
                            <div class="col"><label for="numeroLinea">1 - </label></div>
                            <div class="col">    
                                <select name="product1" id="1" required onchange="val(this.id)" class="form-control js-example-basic-single" required>
                                    <option value="0" selected disabled>Seleccionar...</option>
                                        @foreach ($products as $product)
                                            <option value="{{$product->id}}">{{$product->getFullNameAttribute()}}</option>
                                        @endforeach
                                </select>
                            </div>
                            <div class="col">
                                <input type="number" name="quantity_1" id="quantity_1" onchange="quantity(this.id)" min="1" max="">
                            </div>
                            <div class="col">
                                <label for="signo">$</label>
                                <label for="price_product1" id="price_product1">0</label>
                            </div>
                            <div class="col">
                                <label for="signo">$</label>
                                <label for="subtotal_product" id="subtotal_product1">0</label>
                            </div>
                            <div class="col"><button class="btn btn-danger" onclick="eliminar(row_1)">Eliminar</button></div>
                        </div>
                    </div>
                </div>
                        
                <div class="card-footer">
                    <div class="row">
                        <div class="col"><label for="">Total:</label></div>
                        <div class="col">
                            <label for="">$</label>
                            <label for="" id="total_sale">0</label>
                        </div>
                    </div>
                </div>
                <div class="card-footer">
                    <div class="row"><button id="agregar" onclick="agregarLinea()" class="btn btn-success w-100">Agregar linea de descripción</button></div>
                </div>
                <div class="card-footer">
                    <div class="row"><button type="submit" id="confirmar" class="btn btn-primary w-100">Confirmar Venta</button></div>
                </div>
            
        
        </div>
    </form>
    </div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script>
        
        /*function forma_pago (){ 
            if(document.getElementById("type_sale").value==1){
                div=document.createElement("div");
                div.classList.add("row");
                div.innerHTML=
                '<div class="row w-100" id="row_payment">'+
                    '<div class="col"><label for="payment_sale">Forma de Pago:</label></div>'+
                    '<div class="col">'+
                        '<select name="type_sale" id="payment_sale" class="form-control js-example-basic-single" required>'+
                            '<option value="0" selected>Seleccionar...</option>'+
                            '<option value="1">Efectivo</option>'+
                            '<option value="2">Tarjeta</option>'+
                            '<option value="3">Cheque</option>'+
                            '<option value="4">Nota Credito</option>'+
                        '</select>'+
                    '</div>'+
                '</div>';
                document.getElementById("card-header").appendChild(div);
                $(document).ready(function() {
                    $('.js-example-basic-single').select2();
                });
            }
            else{
                if(document.getElementById("row_payment")!=null){
                    document.getElementById("row_payment").remove();
                }
            }
        }*/
         $(document).ready(function() {
            $('.js-example-basic-single').select2();
        });
        function quantity(id){
            let quantity = document.getElementById(id);
            let value = quantity.value;
            console.log(value)
            document.getElementById("subtotal_product"+id.split("_")[1]).innerHTML=document.getElementById("price_product"+id.split("_")[1]).textContent*value;

            t=0;
            for(let j=1;j<document.getElementById("dinamic").childElementCount;j++){
                t=t+Number(document.getElementById("subtotal_product"+j).textContent);
            }
            document.getElementById("total_sale").innerHTML=t;
        }
       function val(id) {
            d = document.getElementById(id).value;
            products=<?php echo json_encode($products); ?>;
            for(let i=0;i<products.length;i++){
                if(d==products[i].id){
                    document.getElementById("price_product"+id).innerHTML=products[i].price_product;
                    document.getElementById("subtotal_product"+id).innerHTML=products[i].price_product*document.getElementById("quantity_"+id).value;
                    document.getElementById("quantity_"+id).max=products[i].stock_product;
                }
            }
            t=0;
            for(let j=1;j<document.getElementById("dinamic").childElementCount;j++){
                t=t+Number(document.getElementById("subtotal_product"+j).textContent);
            }
            document.getElementById("total_sale").innerHTML=t;
        }  

        const contenedor=document.querySelector('#dinamic');
        const btnagregar=document.querySelector("#agregar");
        let total=1;
        
        function agregarLinea(){
            total=total+1;
            let div =document.createElement('div');
            div.setAttribute("id", "row_"+total);
            div.classList.add("row");
            div.innerHTML=
            '<div class="col"><label>' +total+ "-"+'</label></div>'+
            '<div class="col">'+
                '<select name="product'+total+'" id="'+total+'" required onchange="val(this.id)" class="form-control js-example-basic-single">'+
                    '<option value="0" selected disabled>Seleccionar...</option>'+
                    '@foreach ($products as $product)'+
                        '<option value="{{$product->id}}">'+
                            '{{$product->getFullNameAttribute()}}'+
                        '</option>'+
                    '@endforeach'+
                '</select>'+
            '</div>'+
            '<div class="col"><input type="number" name="quantity_'+total+'" id="quantity_'+total+'" onchange=quantity(this.id) min="1" max=""></div>'+
            '<div class="col">'+
                '<label for="signo">$</label>'+
                '<label for="price_product" id="price_product'+total+'">0</label>'+
            '</div>'+
            '<div class="col">'+
                '<label for="signo">$</label>'+
                '<label for="subtotal_product" id="subtotal_product'+total+'">0</label>'+
            '</div>'+
            '<div class="col"><button class="btn btn-danger" onclick="eliminar(row_'+total+')">Eliminar</button></div>';
            
            contenedor.appendChild(div);
            $(document).ready(function() {
                $('.js-example-basic-single').select2();
                });
            
        }
        form=document.getElementById("form-create");
        form.addEventListener('submit', function (event) {
            if (event.submitter.matches('#agregar')) {
                event.preventDefault();
            }
            else{
                event.preventDefault();
                k=1;
                children=document.getElementById("dinamic").childElementCount;
                while(k<children){
                    if(document.getElementById(k).value==0 || document.getElementById(k).value==null){
                        document.getElementById("row_"+k).remove();
                    }
                    k=k+1;
                }
                this.submit();
                document.getElementById(1).value=0;
                document.getElementById("client_sale").value=0;
                document.getElementById("employee_sale").value=0;
                document.getElementById("type_sale").value=0;;
                form.reset();
            }
        });
       
      
        const eliminar= (e)=>{
            document.getElementById("total_sale").innerHTML=Number(document.getElementById("total_sale").textContent)-Number(document.getElementById("subtotal_product"+e.id.split("_")[1]).textContent);
            contenedor.removeChild(e);
            actualizarContador();
            
        };  
        const actualizarContador=()=>{
            let divs=contenedor.children;
            total=0;
            for(let i=1;i<divs.length;i++){
                total=total+1;
                divs[i].children[0].innerHTML=total+' - ';
            }
        };

        
        
    </script>
    
    @if (session('insert')=='ok')
        <script>
            Swal.fire({
                icon: 'success',
                title: '¡La operación fue realizada exitosamente!',
                showConfirmButton: false,
                timer: 1500
            })
        </script>
    @endif
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
@stop