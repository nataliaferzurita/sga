@php
$positions=App\Models\Position::where('active_position',1)->get();
@endphp

<form action="{{route('employees.store')}}" method="post" enctype="multipart/form-data">
  @csrf
    <div class="modal fade" id="modalCreateEmployee" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLongTitle"><strong>Registro Empleado</strong></h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col mb-4"><label for="cuil_employee">CUIL:</label></div>
                    <div class="col mb-4"><input type="text" class="form-control" name="cuil_employee" required maxlength="11"></div>
                  </div>
                  <div>
                
                  <div class="row">
                    <div class="col mb-4"><label for="name1_employee">Primer Nombre:</label></div>
                    <div class="col mb-4"><input type="text" class="form-control" name="name1_employee" required maxlength="20" autocomplete="on"></div>
                  </div>
                  <div class="row">
                    <div class="col mb-4"><label for="name2_employee">Segundo Nombre:</label></div>
                    <div class="col mb-4"><input type="text" class="form-control" name="name2_employee" maxlength="20" autocomplete="on"></div>
                  </div>
                  <div class="row">
                    <div class="col mb-4"><label for="name1_employee">Primer Apellido:</label></div>
                    <div class="col mb-4"><input type="text" class="form-control" name="lastname1_employee" required maxlength="20" autocomplete="on"></div>
                  </div>
                  <div class="row">
                    <div class="col mb-4"><label for="name2_employee">Segundo Apellido:</label></div>
                    <div class="col mb-4"><input type="text" class="form-control" name="lastname2_employee" maxlength="20" autocomplete="on"></div>
                  </div>
                  <div class="row">
                    <div class="col mb-4"><label for="dateOBirth_employee">Fecha de Nacimiento:</label></div>
                    <div class="col mb-4"><input class="form-control" type="date" name="dateOfBirth_employee" max="{{now()->toDateString('Y-m-d')}}"></div>
                  </div>
                  <div class="row">
                    <div class="col mb-4"><label for="nationality_employee">Nacionalidad:</label></div>
                    <div class="col mb-4"><input type="text" class="form-control" name="nationality_employee" maxlength="20" autocomplete="on"></div>
                  </div>
                  <div class="row">
                    <div class="col mb-4"><label for="phone_employee">Telefono/Celular:</label></div>
                    <div class="col mb-4"><input type="tel" class="form-control" name="phone_employee" maxlength="10" autocomplete="on"></div>
                  </div>
                  <div class="row">
                    <div class="col mb-4"><label for="country_employee">País:</label></div>
                    <div class="col mb-4"><input type="text" class="form-control" name="country_employee" maxlength="20" autocomplete="on"></div>
                  </div>
                  <div class="row">
                    <div class="col mb-4"><label for="state_employee">Provincia:</label></div>
                    <div class="col mb-4"><input type="text" name="state_employee" class="form-control" maxlength="20" autocomplete="on"></div>
                  </div>
                  <div class="row">
                    <div class="col mb-4"><label for="city_employee">Ciudad:</label></div>
                    <div class="col mb-4"><input type="text" class="form-control" name="city_employee" maxlength="20" autocomplete="on"></div>
                  </div>
                  <div class="row">
                    <div class="col mb-4"><label for="postalCode_employee">Codigo Postal:</label></div>
                    <div class="col mb-4"><input type="text" class="form-control" name="postalCode_employee" maxlength="10"></div>
                  </div> 
                  <div class="row">
                    <div class="col mb-4"><label class="form-contol" for="address_employee">Domicilio:</label></div>
                    <div class="col mb-4"><textarea name="address_employee" id="" cols="25" rows="2" class="form-control" maxlength="50" autocomplete="on"></textarea></div>
                  </div>
                  <div class="row">
                    <div class="col mb-4"><label for="dateOfEntry_employee">Fecha de Ingreso:</label></div>
                    <div class="col mb-4"><input class="form-control" type="date" name="dateOfEntry_employee" max="{{now()->toDateString('Y-m-d')}}"></div>
                  </div>
                  <div class="row">
                    <div class="col mb-4"><label for="position_employee">Puesto:</label></div>
                    <div class="col mb-4">
                      <select class="js-example-basic-single form-control" name="position_employee">
                        @foreach ($positions as $position)
                          <option value={{$position->id}}>{{$position->name_position}}</option>
                        @endforeach
                      </select>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col mb-4"><label for="salary_employee">Sueldo:</label></div>
                    <div class="col mb-4"><input type="number" class="form-control" name="salary_employee"></div>
                  </div>
                  <div class="row">
                    <div class="col"><label for="">Foto:</label></div>
                    <div class="col">
                      <x-adminlte-input-file-krajee name="photo_employee"/>
                    </div>
                  </div>
                </div>          
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-primary">Guardar</button>
            </div>
          </div>
        </div>
      </div>
</form>
