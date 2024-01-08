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

    protected function name_position(){
        return new Attribute(
            get: function ($value){
                return ucwords($value);
            },
            set: function ($value){
                return strtolower($value);
            }
        );
        
    }
}
