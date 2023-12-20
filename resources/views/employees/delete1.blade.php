<div class="modal fade" id="#modalDeleteEmployee{{$row->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLongTitle"><strong>Registro a Eliminar</strong></h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <div class="form-group">
                <div class="row">
                    <div class="col">
                        <label>Id:</label>
                    </div>
                    <div class="col">
                        <label for="id">{{$row->id}}</label>
                    </div>
                </div>
                <div class="row">
                    <div class="col"><label>CUIL:</label></div>
                    <div class="col"><label for="cuil_employee">{{$row->cuil_employee}}</label></div>
                </div>
                <div class="row">
                    <div class="col"><label>Primer Nombre:</label></div>
                    <div class="col"><label for="name1_employee">{{$row->name1_employee}}</label></div>
                </div>
                <div class="row">
                    <div class="col"><label>Segundo Nombre:</label></div>
                    <div class="col"><label  for="name2_employee">{{$row->name2_employee}}</label></div>
                </div>
                <div class="row">
                    <div class="col"><label>Primer Apellido:</label></div>
                    <div class="col"><label for="lastname1_employee">{{$row->lastname1_employee}}</label></div>
                </div>
                <div class="row">
                    <div class="col"><label for="lastname2_employee">Segundo Apellido:</label></div>
                    <div class="col"><label for="lastname2_employee">{{$row->lastname2_employee}}</label></div>
                </div>
                <div class="row">
                    <div class="col"><label>Telefono/Celular:</label></div>
                    <div class="col"><label for="phone_employee">{{$row->phone_employee}}</label></div>
                </div>
                <div class="row">
                    <div class="col"><label>Puesto:</label></div>
                    <div class="col"><label for="position_employee">{{$row->position_employee}}</label></div>
                </div>
                <div class="row">
                    <div class="col"><label>Sueldo:</label></div>
                    <div class="col"><label for="salary_employee">{{$row->salary_employee}}</label></div>
                </div>
                <div class="row">
                    <div class="col"><label>Fecha de Alta:</label></div>
                    <div class="col"><label for="created_at">{{$row->created_at}}</label></div>
                </div>
                <div class="row">
                    <div class="col"><label>Fecha de Actualizacion:</label></div>
                    <div class="col"><label for="created_at">{{$row->updated_at}}</label></div>
                </div>
            
            </div>
          </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal"><i class="fa fa-times" aria-hidden="true"></i>Cerrar</button>
          <form id="form-delete" action="{{route('employees.destroy',$row)}}" method="post">
            @csrf
            @method('delete')
            <button type="submit" class="btn btn-danger">
              <i class="fa fa-lg fa-fw fa-trash"></i> Eliminar
            </button>
          </form>   
        </div>
      </div>
    </div>
  </div>