<div class="modal fade" id="modalDeleteProvider{{$row->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="false">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h2 class="modal-title" id="exampleModalLabel"><strong>Registro</strong></h2>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <div class="row">
            <div class="col"><label for="cuit_provider">CUIT:</label></div>
            <div class="col"><label for="cuit_provider">{{$row->cuit_provider}}</label></div>
          </div>
          <div class="row">
            <div class="col"><label for="name_provider">Nombre o Razón Social:</label></div>
            <div class="col"><label for="name_provider">{{$row->name_provider}}</label></div>
          </div>
          <div class="row">
            <div class="col"><label for="country_provider">País:</label></div>
            <div class="col"><label for="country_provider">{{$row->country_provider}}</label></div>
          </div>
          <div class="row">
            <div class="col"><label for="state_provider">Provincia:</label></div>
            <div class="col"><label for="state_provider">{{$row->state_provider}}</label></div>
          </div>
          <div class="row">
            <div class="col"><label for="city_provider">Ciudad:</label></div>
            <div class="col"><label for="city_provider">{{$row->city_provider}}</label></div>
          </div>
          <div class="row">
            <div class="col"><label for="postalCode_provider">Codigo Postal:</label></div>
            <div class="col"><label for="postalCode_provider">{{$row->postalCode_provider}}</label></div>
          </div>
          <div class="row">
            <div class="col"><label for="address_provider">Domicilio:</label></div>
            <div class="col"><label for="address_provider">{{$row->address_provider}}</label></div>
          </div>
          <div class="row">
            <div class="col"><label for="phone_provider">Teléfono/Celular:</label></div>
            <div class="col"><label for="phone_provider">{{$row->phone_provider}}</label></div>
          </div>
          <div class="row">
            <div class="col"><label for="contactName_provider">Nombre Contacto:</label></div>
            <div class="col"><label for="contactName_provider">{{$row->contactName_provider}}</label></div>
          </div>
          <div class="row">
            <div class="col"><label for="alias_provider">Alias:</label></div>
            <div class="col"><label for="alias_provider">{{$row->alias_provider}}</label></div>
          </div>
        </div>
        
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <form id="form-delete" action="{{route('providers.destroy',$row)}}" method="post">
              @csrf
              @method('delete')
            <button type="submit" class="btn btn-danger">Eliminar</button>
          </div>
        </form>
      </div>
    </div>
  </div>
