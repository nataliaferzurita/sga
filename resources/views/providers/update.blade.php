

<div class="modal fade" id="modalEditprovider{{$row->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="false">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="modalEditprovider{{$row->id}}"></h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form action="" method="get">
            <div class="row">
              <div class="col"><label for="cuit_provider">CUIT:</label></div>
              <div class="col"><input type="text" value={{$row->cuit_provider}} name="cuit_provider"></div>
            </div>
            <div class="row">
              <div class="col"><label for="name_provider">Nombre o Razón Social:</label></div>
              <div class="col"><input type="text" value="{{$row->name_provider}}" name="name_provider"></div>
            </div>
            <div class="row">
              <div class="col"><label for="phone_provider">Telefono/Celular:</label></div>
              <div class="col"><input type="text" value="{{$row->phone_provider}}" name="phone_provider"></div>
            </div>
            <div class="row">
              <div class="col"><label for="country_provider">País:</label></div>
              <div class="col"><input type="text" value="{{$row->country_provider}}" name="country_provider"></div>
            </div>
            <div class="row">
              <div class="col"><label for="state_country">Provincia:</label></div>
              <div class="col"><input type="text" value="{{$row->state_provider}}" name="state_provider"></div>
            </div>
            <div class="row">
              <div class="col"><label for="city_provider">Ciudad:</label></div>
              <div class="col"><input type="text" value="{{$row->city_provider}}" name="city_provider"></div>
            </div>
            <div class="row">
              <div class="col"><label for="postalCode_provider">Código Postal:</label></div>
              <div class="col"><input type="text" value="{{$row->postalCode}}" name="postalCode_provider"></div>
            </div>
            <div>
              
            </div>
          </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Save changes</button>
        </div>
      </div>
    </div>
  </div>