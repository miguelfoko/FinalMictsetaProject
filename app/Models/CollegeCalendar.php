<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CollegeCalendar extends Model
{
    use HasFactory; 
    protected $fillable = ['title','file','coverPage'];

}
