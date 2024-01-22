<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Products extends Model
{
    use HasFactory;

    public function provider(){
        return $this->belongsTo(Providers::class,'provider_product','id');
    }


    public function setNameProductAttribute($value){
        $this->attributes['name_product']=strtolower($value);
    }
    public function getNameProduct($value){
        return ucwords($value);
    }

    public function setFabricProductAttribute($value){
        $this->attributes['fabric_product']=strtolower($value);
    }

    public function getFabricProductAttribute($value){
        return ucwords($value);
    }

    public function setSeasonProductAttribute($value){
        $this->attributes['season_product']=strtolower($value);
    }

    public function getSeasonProductAttribute($value){
        return ucwords($value);
    }

    public function setTypeProductAttribute($value){
        $this->attributes['typeProduct_product']=strtolower($value);
    }

    public function getTypeProductAttribute($value){
        return ucwords($value);
    }

    public function setColorProduct($value){
        $this->attributes["color_product"]=strtolower($value);
    }

    public function getColorProduct($value){
        return ucwords($value);
    }
}
