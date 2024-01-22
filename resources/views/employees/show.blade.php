<div class="modal fade" id="modalShowEmployee{{$row->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel"><strong>Legajo</strong></h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <h5 class="d-flex justify-content-center"><strong>{{$row->name1_employee." ".$row->name2_employee." ".$row->lastname1_employee." ".$row->lastname2_employee}}</strong></h5>
          @if ($row->photo_employee!=null)
            <div>
                <img src="{{$row->photo_employee}}" class="mx-auto d-block" alt="Foto del Empleado" height="300px">
            </div>
          @endif
          <div class="row">
            <div class="col">
                <label>Numer de Legajo:</label>
            </div>
            <div class="col">
                <label for="id">{{$row->id}}</label>
            </div>
          </div>
          <div class="row">
            <div class="col"><label for="dateOfEntry_employee">Fecha de Ingreso:</label></div>
            <div class="col"><label for="">{{$row->dateOfEntry_employee}}</label></div>
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
              <div class="col"><label for="dateOfBirth_employee">Fecha de Nacimiento:</label></div>
              <div class="col"><label for="dateOfBirth_employee">{{$row->dateOfBirth_employee}}</label></div>
          </div>
          <div class="row">
              <div class="col"><label for="age_employee">Edad:</label></div>
              <div class="col"><label for="age_employee">{{Carbon\Carbon::parse($row->dateOfBirth_employee)->age}}</label></div>
          </div>
          <div class="row">
              <div class="col"><label for="nationality_employee">Nacionalidad:</label></div>
              <div class="col"><label for="nationality_employee">{{$row->nationality_employee}}</label></div>
          </div>
          <div class="row">
              <div class="col"><label>Telefono/Celular:</label></div>
              <div class="col"><label for="phone_employee">{{$row->phone_employee}}</label></div>
          </div>
          <div class="row">
              <div class="col"><label for="country_employee">Pais:</label></div>
              <div class="col"><label for="">{{$row->country_employee}}</label></div>
          </div>
          <div class="row">
              <div class="col"><label for="state_employee">Provincia:</label></div>
              <div class="col"><label for="">{{$row->state_employee}}</label></div>
          </div>
          <div class="row">
              <div class="col"><label for="city_employee">Ciudad:</label></div>
              <div class="col"><label for="">{{$row->city_employee}}</label></div>
          </div>
          <div class="row">
              <div class="col"><label for="address_employee">Domicilio:</label></div>
              <div class="col"><label for="address_employee">{{$row->address_employee}}</label></div>
          </div>
          <div class="row">
              <div class="col"><label for="antiquity_employee">Antigüedad:</label></div>
              <div class="col"><label for="antiquity_employee">{{Carbon\Carbon::parse($row->dateOfEntry_employee)->age}}</label></div>
          </div>
          <div class="row">
              <div class="col"><label>Puesto:</label></div>
              <div class="col"><label for="position_employee">{{$row->position->name_position}}</label></div>
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
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <a class="btn btn-primary" href="{{route('employees.pdf',$row)}}" target="_blank">
            <i class="fa fa-print" aria-hidden="true"></i> Imprimir
        </a> 
        </div>
      </div>
    </div>
  </div>