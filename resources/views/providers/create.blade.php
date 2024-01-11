<form action="{{route('providers.store')}}" method="post">
    @csrf
    <div class="modal fade" id="modalCreateProvider" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalCenterTitle"><strong>Registro Nuevo Proveedor</strong></h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <div class="form-group">
              <label for="cuit_provider">CUIT:</label>
              <input type="text" class="form-control" name="cuit_provider">
              <label for="name_provider">Nombre o Razón Social:</label>
              <input type="text" name="name_provider" class="form-control">
              <br>
              @livewire('selects')
              <label for="postalCode_provider">Codigo Postal:</label>
              <input type="text" name="postalCode_provider" class="form-control">
              <label for="address_provider">Domicilio:</label>
              <input type="text" name="address_provider" class="form-control">
              <label for="phone_provider">Telefono/Celular:</label>
              <input type="text" name="phone_provider" class="form-control">
              <label for="alias_provider">Alias:</label>
              <input type="text" name="alias_provider" class="form-control">
              <label for="contactName_provider">Nombre Contacto</label>
              <input type="text" name="contactName_provider" class="form-control">
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-danger" data-dismiss="modal">
              <i class="fa fa-times" aria-hidden="true"></i>
              Cerrar
            </button>
            <button type="submit" class="btn btn-primary">
              <i class="fa fa-floppy-o" aria-hidden="true"></i>
              Guardar
            </button>
          </div>
        </div>
      </div>
    </div>
</form>
