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
              <div class="row mb-4">
                <div class="col"><label for="cuit_provider">CUIT:</label></div>
                <div class="col"><input type="text" class="form-control" name="cuit_provider" maxlength="11" autocomplete="on" required></div>
              </div>
              <div class="row mb-4">
                <div class="col"><label for="name_provider">Nombre o Razón Social:</label></div>
                <div class="col"><input type="text" name="name_provider" class="form-control" maxlength="20" autocomplete="on" required></div>
              </div>              
              <div class="row mb-4">
                <div class="col"><label for="fantasyName_provider">Nombre de Fantasia:</label></div>
                <div class="col"><input type="text" name="fantasyName_provider" class="form-control" maxlength="20" autocomplete="on"></div>
              </div>
              <div class="row mb-4">
                <div class="col"><label for="country_provider">País:</label></div>
                <div class="col"><input type="text" name="country_name" class="form-control" maxlength="20" autocomplete="on"></div>
              </div>
              <div class="row mb-4">
                <div class="col"><label for="state_provider">Provincia:</label></div>
                <div class="col"><input type="text" class="form-control" name="state_provider" autocomplete="on"></div>
              </div>
              <div class="row mb-4">
                <div class="col"><label for="city_provider">Ciudad:</label></div>
                <div class="col"><input type="text" class="form-control" name="city_provider" maxlength="20" autocomplete="on"></div>
              </div>
              <div class="row mb-4">
                <div class="col"><label for="postalCode_provider">Codigo Postal:</label></div>
                <div class="col"><input type="text" name="postalCode_provider" class="form-control" maxlength="10" autocomplete="on"></div>
              </div>
              <div class="row mb-4">
                <div class="col"><label for="address_provider">Domicilio:</label></div>
                <div class="col"><textarea name="address_provider" class="form-control" maxlength="50" autocomplete="on" cols="25" rows="2"></textarea></div>
              </div>
              <div class="row mb-4">
                <div class="col"><label for="phone_provider">Telefono/Celular:</label></div>
                <div class="col"><input type="tel" name="phone_provider" class="form-control" maxlength="10" autocomplete="on"></div>
             . </div>
              <div class="row mb-4">
                <div class="col"><label for="alias_provider">Alias:</label></div>
                <div class="col"><input type="text" name="alias_provider" class="form-control" maxlength="20" autocomplete="on"></div>
              </div>
              <div class="row mb-4">
                <div class="col"><label for="contactName_provider">Nombre Contacto</label></div>
                <div class="col"><input type="text" name="contactName_provider" class="form-control"></div>
              </div>
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
