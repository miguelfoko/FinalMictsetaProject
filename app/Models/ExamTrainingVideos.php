<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ExamTrainingVideos extends Model
{
    use HasFactory;
    protected $fillable = ['title','video', 'module', 'session']; 

}
 