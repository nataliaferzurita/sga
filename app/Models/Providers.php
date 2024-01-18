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
}
