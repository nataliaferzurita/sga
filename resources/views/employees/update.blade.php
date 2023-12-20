@php($positions=App\Models\Position::all())


    <div class="modal fade" id="modalEditEmployee{{$row->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalCenterTitle"><strong>Actualizar Datos Empleado</strong></h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <form id="form-update" action="{{route('employees.update',$row)}}" method="post">
              @method('put') @csrf
            <div class="modal-body">
                
              <div class="form-group">
                  <label for="cuil_employee">CUIL:</label>
                  <input type="text" class="form-control" name="cuil_employee" value="{{$row->cuil_employee}}">
                  <label for="name1_employee">Primer Nombre:</label>
                  <input type="text" class="form-control" name="name1_employee" style="text-transform:uppercase" value="{{$row->name1_employee}}">
                  <label for="name2_employee">Segundo Nombre:</label>
                  <input type="text" class="form-control" name="name2_employee" value="{{$row->name2_employee}}">
                  <label for="name1_employee">Primer Apellido:</label>
                  <input type="text" class="form-control" name="lastname1_employee" value="{{$row->lastname1_employee}}" style="text-transform:uppercase">
                  <label for="name2_employee">Segundo Apellido:</label>
                  <input type="text" class="form-control" name="lastname2_employee" value="{{$row->lastname2_employee}}">
                  <label for="phone_employee">Telefono/Celular:</label>
                  <input type="text" class="form-control" name="phone_employee" value="{{$row->phone_employee}}">
                  <label for="new_position">Nueva Puesto:</label>
                  <select class="js-example-basic-single form-control" name="position_employee">
                    @foreach ($positions as $position)
                      @if ($position->id===$row->position->id)

                        <option value={{$position->id}} selected>{{$position->name_position}}</option>
                      @else
                        <option value={{$position->id}}>{{$position->name_position}}</option>
                      @endif
                     
                      
                    @endforeach
                  </select>
                  <br>
                  <label for="salary_employee">Sueldo:</label>
                  <input type="decimal" class="form-control" name="salary_employee" value="{{$row->salary_employee}}">
              </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-danger" data-dismiss="modal">
                <i class="fa fa-times" aria-hidden="true"></i>
                Cerrar
              </button>
              <button type="submit" class="btn btn-primary" id="updateEmployees">
                <i class="fa fa-floppy-o" aria-hidden="true"></i>
                Guardar
              </button>
            </div>
          </div>
        </div>
      </div>  
</form>
    