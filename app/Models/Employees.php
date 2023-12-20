<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employees extends Model
{
    use HasFactory;
    protected $fillable=['cuil_employee','name1_employee','name2_employee','lastname1_employee','lastename2_employee','position_employee','salary_employee'];

    public function position(){
        return $this->belongsTo(Position::class,'position_employee','id');
    }
}
