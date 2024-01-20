<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Providers extends Model
{
    use HasFactory;
    protected $fillable=['cuit_provider',
        'name_provider',
        'phone_provider',
        'county_provider',
        'state_provider',
        'city_provider',
        'postalCode_provider',
        'address_provider',
        'alias_provider',
        'contactName_provider',
        'active_provider'
];

public function products(){
    return $this->hasMany(Products::class);
}

public function setNameProviderAttribute($value){
    $this->attributes['name_provider']=strtolower($value);
}
public function getNameProviderAttribute($value){
    return ucwords($value);
}
public function setCountryProviderAttribute($value){
    $this->attributes['country_provider']=strtolower($value);
}

public function getCountryProviderAttribute($value){
    return ucwords($value);
}

public function setStateProviderAttribute($value){
    $this->attributes['state_provider']=strtolower($value);
}

public function getStateProviderAttribute($value){
    return ucwords($value);
}

public function setCityProviderAttribute($value){
    $this->attributes['city_provider']=strtolower($value);
}

public function getCityProviderAttribute($value){
    return ucwords($value);

}

public function setAddressProviderAttribute($value){
    $this->attributes['address_provider']=strtolower($value);
}

public function getAddressProviderAttribute($value){
    return ucwords($value);
}

public function setAliasProviderAttribute($value){
    $this->attributes['alias_provider']=strtolower($value);
}

public function getAliasProviderAttribute($value){
    return ucwords($value);
}

public function setContactNameProviderAttribute($value){
    $this->attributes['contactName_provider']=strtolower($value);
}

public function getContactNameProviderAttribute($value){
    return ucwords($value);
}

}