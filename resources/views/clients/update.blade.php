  <div class="modal fade" id="modalUpdateClient{{$row->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel"><strong>Actualizar Cliente</strong></h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <form id="form-update" action="{{route('clients.update',$row)}}" method="post">
                @method('put') @csrf
              <div class="row">
                <div class="col mb-3"><label for="id_cliente">Numero de Cliente:</label></div>
                <div class="col mb-3"><label for="id">{{$row->id}}</label></div>
              </div>
              <div class="row">
                <div class="col mb-3"><label for="dni_client">DNI:</label></div>
                <div class="col mb-3"><input type="text" name="dni_client" class="form-control" value="{{$row->dni_client}}"></div>
              </div>
              <div class="row">
                <div class="col mb-3"><label for="name1_client">Nombre:</label></div>
                <div class="col mb-3"><input type="text" name="name1_client" class="form-control" value="{{$row->name1_client}}"></div>
              </div>
              <div class="row">
                <div class="col mb-3"><label for="name2_client">Segundo Nombre:</label></div>
                <div class="col mb-3"><input type="text" name="name2_client" class="form-control" value="{{$row->name2_client}}"></div>
              </div>
              <div class="row">
                <div class="col mb-3"><label for="lastname_client">Apellido</label></div>
                <div class="col mb-3"><input type="text" name="lastname_client" class="form-control" value="{{$row->lastname_client}}"></div>
              </div>
              <div class="row">
                <div class="col mb-4"><label for="lastname2_client">Segundo Apellido:</label></div>
                <div class="col mb-4"><input type="text" name="lastname2_client" class="form-control" value={{$row->lastname2_client}}></div>
              </div>
              <div class="row">
                <div class="col mb-3"><label for="phone_client">Telefono:</label></div>
                <div class="col mb-3"><input type="text" name="phone_client" class="form-control" value="{{$row->phone_client}}"></div>
              </div>
              <div class="row">
                <div class="col mb-3"><label for="country_client">País:</label></div>
                <div class="col mb-3"><input type="text" name="country_client" class="form-control" value="{{$row->country_client}}"></div>
              </div>
              <div class="row">
                <div class="col mb-3"><label for="state_client">Provincia:</label></div>
                <div class="col mb-3"><input type="text" name="state_client" class="form-control" value="{{$row->state_client}}"></div>
              </div>
              <div class="row">
                <div class="col mb-3"><label for="city_client">Ciudad:</label></div>
                <div class="col mb-3"><input type="text" name="city_client" class="form-control" value="{{$row->city_client}}"></div>
              </div>
              <div class="row">
                <div class="col mb-3"><label for="postalCode_client">Codigo Postal:</label></div>
                <div class="col mb-3"><input type="text" name="postalCode_client" class="form-control" value="{{$row->postalCode_client}}"></div>
              </div>
              <div class="row">
                <div class="col"><label for="address_client">Domicilio:</label></div>
                <div class="col"><textarea name="address_client" id="address" cols="25" rows="2" style="resize: none" class="form-control"></textarea></div>
              </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
              <button type="submit" class="btn btn-primary">Guardar</button>
            </div>
          </form>
          </div>
        </div>
      </div>
    

