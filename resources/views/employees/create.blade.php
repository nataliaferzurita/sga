<form action="{{route('employees.store')}}" method="post">
  @csrf
  @php($positions=App\Models\Position::all())
  <div class="modal fade" id="modalCreate" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
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
              <label for="cuil_employee">CUIL:</label>
              <input type="text" class="form-control" name="cuil_employee">
              <label for="name1_employee">Primer Nombre:</label>
              <input type="text" class="form-control" name="name1_employee" style="text-transform:uppercase">
              <label for="name2_employee">Segundo Nombre:</label>
              <input type="text" class="form-control" name="name2_employee">
              <label for="name1_employee">Primer Apellido:</label>
              <input type="text" class="form-control" name="lastname1_employee" style="text-transform:uppercase">
              <label for="name2_employee">Segundo Apellido:</label>
              <input type="text" class="form-control" name="lastname2_employee">
              <label for="phone_employee">Telefono/Celular:</label>
              <input type="text" class="form-control" name="phone_employee">
              <label for="position_employee">Puesto:</label>
              <br>
              <select class="js-example-basic-single form-control" name="position_employee">
                @foreach ($positions as $position)
                <option value={{$position->id}}>{{$position->name_position}}</option>
                @endforeach
              </select>
              <button type="button"  class="btn btn-primary">
                <i class="fa fa-plus" aria-hidden="true"></i>
              </button>
              <br>
              <label for="salary_employee">Sueldo:</label>
              <input type="decimal" class="form-control" name="salary_employee">
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
