<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subjects extends Model
{
    use HasFactory; 
    protected $fillable = ['title','coursetype_id','user_id','level']; 

    /*
    public function setLevelAttribute($value){
        $this->attributes['level'] = json_encode($value);
    }

    public function getLevelAttribute($value){
        return $this->attributes['level'] = json_decode($value);
    }
    */
}
