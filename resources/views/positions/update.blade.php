<form id="form-update" action="{{route('positions.update',$row)}}" method="post">
  @method('put') @csrf
  <div class="modal fade" id="modalEditPosition{{$row->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalCenterTitle"><strong>Actualizar</strong></h5>
          <button type="button" class="close btn btn-danger" data-dismiss="modal" aria-label="Cancelar">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        
         
        <div class="modal-body">
          <div class="form-group">
            <div class="row"><label for="new_position">Nombre del Puesto:</label></div>
            
            <div class="row"><input type="text" style="text-transform:uppercase" class="form-control" name="name_position" value="{{$row->name_position}}"></div>
            
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
          <button type="submit" class="btn btn-primary">Guardar</button>
        </div>
      </div>
    </div>
  </div>
</form>

