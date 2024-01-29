<?php

namespace App\Imports;

use App\Models\Products;
use App\Models\Providers;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class ProductsImport implements ToModel, WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */

    private $providers;

    public function __construct(){
        $this->providers=Providers::pluck('id','name_provider');
    }
    public function model(array $row)
    {
        return new Products([
            'color_product'=>$row['color'],
            'artProvider_product'=>$row['articulo_proveedor'],
            'name_product'=>$row['nombre'],
            'season_product'=>$row['temporada'],
            'typeProduct_product'=>$row['tipo_producto'],
            'fabric_product'=>$row['tipo_tela'],
            'size_product'=>$row['talle'],
            'stock_product'=>$row['stock'],
            'cost_product'=>$row['costo'],
            'price_product'=>$row['precio_venta'],
            'description_product'=>$row['descripcion'],
            'provider_product'=>$this->providers[$row['proveedor']]
        ]);
    }
}
