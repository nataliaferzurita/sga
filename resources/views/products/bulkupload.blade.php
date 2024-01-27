@php
$proveedores=App\Models\Providers::all();  
@endphp
<form id="form-create" action="{{route('products.import')}}" method="post" enctype="multipart/form-data">
  @csrf
  <div class="modal fade" id="modalBulkUploadProduct" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="modalCreateProduct"><strong>Nuevo Producto</strong></h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <x-adminlte-alert theme="info" title="Info" dismissable>
            La carga masiva consiste en realizar una carga de los productos de 
            forma más ágil utilizando otras herramientas. <br>
            En el formulario debera especificar las carateristicas comunes del producto
            ejemplo "pantalones de punto roma en distinto colores y talles". En el
            formulario debera detallar caracteristicas tales como el tipo de tela,
            temporada, proveedor, etcetera y en una platilla (la cual se provee en
            el link 'Descargar Plantilla') detallar caracteristicas tales como el 
            color, talle y cantidades cada una en su respectiva columna.
          </x-adminlte-alert>
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
                  <option value="Otoño-Invierno">Otoño-Invierno</option>
                  <option value="Primavera-Verano">Primavera-Verano</option>
                  <option value="Fiesta">Fiesta</option>
                </select>
              </div>
            </div>
            <div class="row">
              <div class="col mb-3"><label for="typeProduct_product">Tipo de Producto:</label></div>
              <div class="col mb-3"><input type="text" name="typeProduct_product" class="form-control" autocomplete="on" maxlength="20"></div>
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
              <textarea style="resize: none" name="description_product" id="" cols="50" rows="5" class="form-control" maxlength="100"></textarea>
            </div>
            <div class="row">
              <div class="col"><label for="document_products">Cargar Plantilla:</label></div>
              <div><input type="file" name="document_products" id="document" class="form-control-file"></div>
            </div>
            <div class="row">
                <div class="col"><a href="{{route('products.download')}}">Descargar Plantilla</a></div>
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