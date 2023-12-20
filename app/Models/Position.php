<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Position extends Model
{
    use HasFactory;
    protected $fillable=['name_position'];

    public function employees(){
        return $this->hasMany(Employees::class);
    }
}
