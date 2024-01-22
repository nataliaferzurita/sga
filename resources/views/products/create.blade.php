@php
$proveedores=App\Models\Providers::all();  
@endphp
<form action="{{route('products.store')}}" method="post" enctype="multipart/form-data">
  @csrf
  <div class="modal fade" id="modalCreateProduct" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="modalCreateProduct"><strong>Nuevo Producto</strong></h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <div class="row">
                <div class="col mb-3"><label for="name_product">Nombre Producto:</label></div>
                <div class="col mb-3"><input type="text" name="name_product" class="form-control" autocomplete="on" maxlength="20"></div>
            </div>
            <div class="row">
              <div class="col mb-3"><label for="provider_product">Proveedor:</label></div>
              <div class="col mb-3">
                <select name="provider_product" id="provider" class="form-control">
                  @foreach ($proveedores as $proveedor)
                    <option value="{{$proveedor->id}}">{{$proveedor->name_provider}}</option>
                  @endforeach
                </select>
              </div>
            </div>
            <div class="row">
              <div class="col mb-3"><label for="artProvider_product">Articulo del Proveedor:</label></div>
              <div class="col mb-3"><input type="text" name="artProvider_product" class="form-control" autocomplete="on" maxlength="20"></div>
            </div>
            <div class="row">
              <div class="col mb-3"><label for="fabric_product">Tipo de Tela:</label></div>
              <div class="col mb-3"><input type="text" class="form-control" name="fabric_product" autocomplete="on" maxlength="20"></div>
            </div>
            <div class="row">
              <div class="col mb-3"><label for="season_product">Temporada:</label></div>
              <div class="col mb-3">
                <select name="season_product" id="season" class="form-control">
                  <option value="1">Otoño-Invierno</option>
                  <option value="2">Primavera-Verano</option>
                  <option value="3">Fiesta</option>
                </select>
              </div>
            </div>
            <div class="row">
              <div class="col mb-3"><label for="typeProduct_product">Tipo de Producto:</label></div>
              <div class="col mb-3"><input type="text" name="typeProduct_product" class="form-control" autocomplete="on" maxlength="20"></div>
            </div>
            <div class="row">
              <div class="col mb-3"><label for="size_product">Talle:</label></div>
              <div class="col mb-3"><input type="text" name="size_product" class="form-control" autocomplete="on" maxlength="20"></div>
            </div>
            <div class="row">
              <div class="col mb-3"><label for="color_product">Color:</label></div>
              <div class="col mb-3"><input type="text" name="color_product" class="form-control" autocomplete="on" maxlength="20"></div>
            </div>
            <div class="row">
              <div class="col mb-3"><label for="stock_product">Stock:</label></div>
              <div class="col mb-3"><input type="number" name="stock_product" class="form-control" autocomplete="on"></div>
            </div>
            <div class="row">
              <div class="col mb-3"><label for="cost_product">Costo:</label></div>
              <div class="col mb-3"><input type="text" name="cost_product" class="form-control"></div>
            </div>
            <div class="row">
              <div class="col"><label for="price_product">Precio de Venta:</label></div>
              <div class="col"><input type="text" name="price_product" class="form-control"></div>
            </div>
            <div class="row mb-3">
              <div class="col"><label for="description_product">Descripcion:</label></div>
            </div>
            <div class="row mb-3">
              <textarea name="description_product" id="" cols="50" rows="5" class="form-control" maxlength="100"></textarea>
            </div>
            <div class="row">
              <div class="col"><label for="photo_product">Foto del Producto:</label></div>
              <div><input type="file" name="photo_product" id="photo" class="form-control-file"></div>
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
