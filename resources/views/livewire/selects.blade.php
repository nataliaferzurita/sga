<div>
  <div class="row">
    <div class="col-4 mb-4"><label for="country_employee">Pais:</label></div>
    <div class="col-4 mb-4">
      <select name="country_employee" id="country" wire:model.live="selectedCountry" class="form-control select2">
        @foreach ($countries as $country)
            <option value="{{$country['country_name']}}">{{$country['country_name']}}</option>
        @endforeach
      </select>
    </div>
  </div>
  
  <div class="row">
    <div class="col-4 mb-4"><label for="state_employee">Provincia:</label></div>
    <div class="col-4 mb-4">
      <select name="state_employee" id="state" wire:model.live="selectedState" class="form-control select2">
        @foreach ($states as $state)
            <option value="{{$state['state_name']}}">{{$state['state_name']}}</option>
        @endforeach
      </select>
    </div>
  </div>

  <div class="row">
    <div class="col-4 mb-4"><label for="city_employee">Ciudad:</label></div>
    <div class="col-4 mb-4">
      <select name="city_employee" id="city" class="form-control select2">
        @foreach ($cities as $city)
            <option value="{{$city['city_name']}}">{{$city['city_name']}}</option>
        @endforeach
      </select>
    </div>
  </div>
    
</div>
