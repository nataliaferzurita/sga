<form action="{{route('clients.store')}}" method="post">
  @csrf
<div class="modal fade" id="modalCreateClient" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel"><strong>Cliente</strong></h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
      
          <div class="modal-body">
            <div class="row">
                <div class="col mb-4"><label for="dni_client">DNI:</label></div>
                <div class="col mb-4"><input class="form-control" type="text" name="dni_client"></div>
            </div>
            <div class="row">
                <div class="col mb-4"><label for="name1_client">Nombre:</label></div>
                <div class="col mb-4"><input type="text" class="form-control" name="name1_client"></div>
            </div>
            <div class="row">
                <div class="col mb-4"><label for="name2_client">Segundo Nombre:</label></div>
                <div class="col mb-4"><input type="text" class="form-control" name="name2_client"></div>
            </div>
            <div class="row">
                <div class="col mb-4"><label for="lastname_client">Apellido:</label></div>
                <div class="col mb-4"><input type="text" class="form-control" name="lastname_client"></div>
            </div>
            <div class="row">
                <div class="col mb-4"><label for="phone_client">Telefono:</label></div>
                <div class="col mb-4"><input type="text" class="form-control" name="phone_client"></div>
            </div>
            @livewire('selects')
            <div class="row">
              <div class="col mb-4"><label for="postalCode_client">Codigo Postal:</label></div>
              <div class="col mb-4"><input type="text" class="form-control" name="postalCode_client"></div>
            </div>
            <div class="row">
              <div class="col mb-4"><label for="address_client">Domicilio:</label></div>
              <div class="col mb-4"><input type="text" class="form-control"></div>
            </div>
        </div>
       
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary">Save changes</button>
          </div>
        
      </div>
    </div>
  </div>
</form>