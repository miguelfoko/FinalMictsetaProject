<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TvetCollegeTimes extends Model
{ 
    use HasFactory;
    protected $fillable = ['volume','publicationDate', 'title', 'size','file','coverPage']; 
}
