<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Clients extends Model
{
    use HasFactory;
    protected $fillable=['dni_client'];

    public function getFullNameAttribute(){
        return ucwords(
            $this->attributes['dni_client']." - "
            .$this->attributes['name1_client']." "
            .$this->attributes['name2_client']." "
            .$this->attributes['lastname_client']." "
            .$this->attributes['lastname2_client']
    );
    }
}
