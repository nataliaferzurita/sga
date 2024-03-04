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
     public function sales(){
        return $this->hasMany(Sales::class);
     }
    public function setName1EmployeeAttribute($value){
        $this->attributes['name1_employee']=strtolower($value);
    }
    public function getName1EmployeeAttribute($value){
        return ucwords($value);
    }

    public function setName2EmployeeAttribute($value){
        $this->attributes['name2_employee']=strtolower($value);
    }

    public function getName2EmployeeAttribute($value){
        return ucwords($value);
    }

    public function setLastname1EmployeeAttribute($value){
        $this->attributes['lastname1_employee']=strtolower($value);
    }

    public function getLastname1EmployeeAttribute($value){
        return ucwords($value);
    }

    public function setLastname2EmployeeAttribute($value){
        $this->attributes['lastname2_employee']=strtolower($value);
    }

    public function getLastname2EmployeeAttribute($value){
        return ucwords($value);
    }

    public function setNationalityEmployeeAttribute($value){
        $this->attributes['nationality_employee']=strtolower($value);
    }

    public function getNationalityEmployeeAttribute($value){
        return ucwords($value);
    }

    public function setCountryEmployeeAttribute($value){
        $this->attributes['country_employee']=strtolower($value);
    }

    public function getCountryEmployeeAttribute($value){
        return ucwords($value);
    }

    public function setStateEmployeeAttribute($value){
        $this->attributes['state_employee']=strtolower($value);
    }

    public function getStateEmployeeAttribute($value){
        return ucwords($value);
    }

    public function setCityEmployeeAttribute($value){
        $this->attributes['city_employee']=strtolower($value);
    }

    public function getCityEmployeeAttribute($value){
        return ucwords($value);
    }

    public function getPositionEmployeeAttribute($value){
        return ucwords($value);
    }

    public function setAddressEmployeeAttribute($value){
        $this->attributes['address_employee']=strtolower($value);
    }

    public function getAddressEmployeeAttribute($value){
        return ucwords($value);
    }

    public function getFullNameAttribute(){
        return ucwords(
                        $this->attributes['cuil_employee']." - "
                        .$this->attributes['name1_employee']." "
                        .$this->attributes['name2_employee']." "
                        .$this->attributes['lastname1_employee']." "
                        .$this->attributes['lastname2_employee']
                    );
    }
   
}
