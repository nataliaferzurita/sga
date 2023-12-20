<div class="modal fade" id="modalShowPosition{{$row->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLongTitle"><strong>Detalle del Registro</strong></h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <div class="form-group">
                <div class="row"><label for="id">Id:{{$row->id}}</label></div>
                <div class="row"><label for="name_position">Nombre del Puesto:{{$row->name_position}}</label></div>
                <div class="row"><label for="fecha_creacion">Fecha de Creacion:{{$row->created_at}}</label></div>
                <div class="row"><label for="fecha_actualizacion">Fecha de Ultima Actualización:{{$row->updated_at}}</label></div> 
            </div>
        </div>
      </div>
    </div>
  </div>