@php
    $season=['Otoño-Invierno','Primavera-Verano','Fiesta'];
    $providers=App\Models\Providers::all();
@endphp
<div class="modal fade" id="modalEditProduct{{$row->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel"><strong>Actualizar Producto</strong></h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <div class="row mb-3">
            <div class="col"><label for="provider_product">Proveedor:</label></div>
            <div class="col">
              <select name="provider_product" id="provider" class="form-control">
                @foreach ($providers as $provider)
                  @if ($provider->id==$row->provider->id)
                      <option value="{{$provider->id}}" selected>{{$provider->name_provider}}</option>
                  @else
                    <option value="{{$provider->id}}">{{$provider->name_provider}}</option>
                  @endif
                @endforeach
               
              </select>
            </div>
          </div>

          <div class="row mb-3">
            <div class="col"><label for="name_product">Nombre:</label></div>
            <div class="col"><input name="name_product" type="text" class="form-control" autocomplete="on" maxlength="20" value="{{$row->name_product}}" required></div>
          </div>
          <div class="row mb-3">
            <div class="col"><label for="artProvider_product">Articulo del Proveedor:</label></div>
            <div class="col"><input type="text" class="form-control" name="artProvider_product" autocomplete="on" maxlength="20" value="{{$row->artProvider_product}}" required></div>
        </div>
        <div class="row mb-3">
            <div class="col"><label for="season_product">Temporada:</label></div>
            <div class="col">
                <select name="season_producto" id="season" class="form-control">
                   @foreach ($season as $item)
                        @if ($item==$row->season_product)
                            <option value="{{$row->season_product}}" selected>{{$row->season_product}}</option>
                        @else
                        <option value="{{$row->season_product}}">{{$row->season_product}}</option>
                        @endif                       
                   @endforeach
                </select>
            </div>
        </div>
        <div class="row mb-3">
            <div class="col"><label for="typeProduct_product">Tipo de Producto:</label></div>
            <div class="col"><input type="text" class="form-control" autocomplete="on" name="typeProduct_product" maxlength="20" value="{{$row->typeProduct_product}}" required></div>
          </div>
        <div class="row mb-3">
            <div class="col"><label for="fabric_product">Tipo de Tela:</label></div>
            <div class="col"><input type="text" class="form-control" name="fabric_product" autocomplete="on" maxlength="20" value="{{$row->fabric_product}}" required></div>
        </div> 
        <div class="row mb-3">
            <div class="col"><label for="color_product">Color:</label></div>
            <div class="col"><input type="text" class="form-control" maxlength="20" autocomplete="on" name="color_product" value="{{$row->color_product}}" required></div>
        </div>
        <div class="row mb-3">
            <div class="col"><label for="size_product">Talle:</label></div>
            <div class="col"><input type="text" class="form-control" name="size_product" autocomplete="on" value="{{$row->size_product}}" maxlength="10" required></div>
        </div>
        <div class="row mb-3">
          <div class="col"><label for="cost_product">Costo:$</label></div>
          <div class="col"><input type="text" name="cost_product" class="form-control" autocomplete="on" required value="{{$row->cost_product}}"></div>
        </div>
        <div class="row mb-3">
          <div class="col"><label for="price_product">Precio:$</label></div>
          <div class="col"><input type="text" name="price_product" class="form-control" autocomplete="on" required value="{{$row->price_product}}"></div>
        </div>
        <div class="row mb-3">
          <div class="col"><label for="stock_product">Stock:</label></div>
          <div class="col"><input type="number" class="form-control" name="stock_product" autocomplete="on" required value="{{$row->stock_product}}"></div>
        </div>
        <div class="row">
          <div class="col"><label for="description_product">Descripcion:</label></div>
          <div class="col"><textarea name="description_product" id="description" cols="25" rows="4" style="resize: none" required class="form-control">{{$row->description_product}}</textarea></div>
        </div>
        <div>
          <div class="col"><label for="photo_product">Foto:</label></div>
          <div class="col"><input type="file" class="form-control"></div>
        </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">Save changes</button>
        </div>
      </div>
    </div>
  </div>