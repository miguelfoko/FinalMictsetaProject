<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CollegeCourseType extends Model 
{
    use HasFactory;
    protected $fillable = ['overview','industryFields', 'typeOfCourses']; 

}
