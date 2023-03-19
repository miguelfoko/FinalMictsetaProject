<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class IcassTrainingVideos extends Model
{
    use HasFactory;
    protected $fillable = ['title','video', 'module', 'session']; 

}
