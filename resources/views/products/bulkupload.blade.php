@php
$proveedores=App\Models\Providers::where('active_provider',1);  
@endphp
<form id="form-create" action="{{route('products.import')}}" method="post" enctype="multipart/form-data">
  @csrf
  <div class="modal fade" id="modalBulkUploadProduct" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="modalCreateProduct"><strong>Nuevos Productos</strong></h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <x-adminlte-alert theme="info" title="Info" dismissable>
            La carga masiva intenta agilizar la carga de productos utilizando como soporte otras herramienta. <br>
            En este caso particular una planilla de excel. Para poder efectivizar la carga se porvee al usuario <br>
            una plantilla donde debera especificar las caraterísticas del producto en la columna correspondiente <br>
            como lo haría en un formulario de carga normal para luego cargar el archivo y así finalizar el proceso. 
          </x-adminlte-alert>
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