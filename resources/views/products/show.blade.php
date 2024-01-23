<div class="modal fade" id="modalShowProduct{{$row->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h2 class="modal-title d-flex justify-content-center" id="exampleModalLabel" ><strong>{{$row->name_product}}</strong></h2>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            @if ($row->photo_product!=null)
            <div>
                <img src="{{$row->photo_product}}" class="mx-auto d-block" alt="Foto del Producto" height="300px">
            </div>
          @endif
            <div class="row">
                <div class="col"><label for="typeProduct_product">Tipo de Producto:</label></div>
                <div class="col"><label for="typeProduct_product">{{$row->typeProduct_product}}</label></div>
            </div>
            <div class="row">
              <div class="col"><label for="fabric_product">Tipo de Tela:</label></div>
              <div class="col"><label for="fabric_product">{{$row->fabric_product}}</label></div>
            </div>
            <div class="row">
              <div class="col"><label for="season_product">Temporada:</label></div>
              <div class="col"><label for="season_product">{{$row->season_product}}</label></div>
            </div>
            <div class="row">
              <div class="col"><label for="color_product">Color:</label></div>
              <div class="col"><label for="color product">{{$row->color_product}}</label></div>
            </div>
            <div class="row">
              <div class="col"><label for="size_product">Talle:</label></div>
              <div class="col"><label for="size_product">{{$row->size_product}}</label></div>
            </div>
            <div class="row">
              <div class="col"><label for="stock_product">Stock:</label></div>
              <div class="col"><label for="stock_product">{{$row->stock_product}}</label></div>
            </div>
            <div class="row">
              <div class="col"><label for="cost_product">Costo:</label></div>
              <div class="col"><label for="cost_product">{{$row->cost_product}}</label></div>
            </div>
            <div class="row">
              <div class="col"><label for="price_product">Precio de Venta:</label></div>
              <div class="col"><label for="price_product">{{$row->price_product}}</label></div>
            </div>
            <div class="row">
              <div class="col"><label for="provider_product">Proveedor:</label></div>
              <div class="col"><label for="provider_product">{{$row->provider->name_provider}}</label></div>
            </div>
            <div class="row">
              <div class="col"><label for="artProvider_product">Articulo del Provedor:</label></div>
              <div class="col"><label for="artProvider_product">{{$row->artProvider_product}}</label></div>
            </div>
            <div class="row">
              <div class="col"><label for="description_product">Descripción del Producto:</label></div>
            </div>
            <div class="row"><textarea style="resize: none" class="form-control" name="description_product" id="description" cols="25" rows="2" readonly>{{$row->description_product}}</textarea></div>

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
        </div>
      </div>
    </div>
  </div>