<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;
class Position extends Model
{
    use HasFactory;
    protected $fillable=['name_position'];

    public function employees(){
        return $this->hasMany(Employees::class);
    }

   public function setNamePositionAttribute($value){
    $this->attributes['name_position']=strtolower($value);
   }
   public function getNamePositionAttribute($value){
    return ucwords($value);
   }
}
