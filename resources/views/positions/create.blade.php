<form action="{{route('positions.store')}}" method="post">
    @csrf
    <div class="modal fade" id="modalCreatePosition" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalCenterTitle"><strong>Registro Nuevo Puesto</strong></h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <div class="form-group">
              <label for="name_position">Nombre del Puesto:</label>
              <input type="text" class="form-control" name="name_position">
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

