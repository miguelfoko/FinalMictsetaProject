<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CourseType extends Model
{ 
    use HasFactory; 
    protected $fillable = ['type','idprogram','description','duration', 'qualification','admissionRequirements','resources']; 

    /*
    public function setCollegesAttribute($value)
    {
        $this->attributes['colleges'] = json_encode($value);
    }

    public function getCollegesAttribute($value)
    {
        return $this->attributes['colleges'] = json_decode($value);
    }
    

    public function setProgramsAttribute($value)
    {
        $this->attributes['programs'] = json_encode($value);
    }

    public function getProgramsAttribute($value)
    {
        return $this->attributes['programs'] = json_decode($value);
    }
    */
}
