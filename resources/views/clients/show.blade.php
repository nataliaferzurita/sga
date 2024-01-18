<div class="modal fade" id="modalShowClient{{$row->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel"><strong>Cliente</strong></h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <div class="row">
            <div class="col"><label for="id">Numero de Cliente:</label></div>
            <div class="col"><label for="id">{{$row->id}}</label></div>
          </div>
          <div class="row">
            <div class="col"><label for="name1_client">Nombre:</label></div>
            <div class="col"><label for="name1_client">{{$row->name1_client}}</label></div>
          </div>
          <div class="row">
            <div class="col"><label for="name2_client">Segundo Nombre:</label></div>
            <div class="col"><label for="name2_cliente">{{$row->name2_client}}</label></div>
          </div>
          <div class="row">
            <div class="col"><label for="lastname_client">Apellido:</label></div>
            <div class="col"><label for="lastname_client">{{$row->lastname_client}}</label></div>
          </div>
          <div class="row">
            <div class="col"><label for="phone_client">Telefono:</label></div>
            <div class="col"><label for="phone_client">{{$row->phone_client}}</label></div>
          </div>
          <div class="row">
            <div class="col"><label for="country_client">País:</label></div>
            <div class="col"><label for="country_client">{{$row->country_client}}</label></div>
          </div>
          <div class="row">
            <div class="col"><label for="state_client">Provincia:</label></div>
            <div><label for="state_client">{{$row->state_client}}</label></div>
          </div>
          <div class="row">
            <div class="col"><label for="city_client">Ciudad:</label></div>
            <div class="col"><label for="city_client">{{$row->city_client}}</label></div>
          </div>
          <div class="row">
            <div class="col"><label for="postalCode_client">Código Postal:</label></div>
            <div class="col"><label for="postalCode_client">{{$row->postalCode_client}}</label></div>
          </div>
          <div class="row">
            <div class="col"><label for="address_client">Domicilio:</label></div>
            <div class="col"><label for="address_client">{{$row->address_client}}</label></div>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">Save changes</button>
        </div>
      </div>
    </div>
  </div>
  