<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RegionalLocations extends Model
{
    use HasFactory;
    protected $fillable = ['region','address','city','phone','user_id','latitude','longitude','principal'
            ,'principalEmails','principalAssistant','principalAssistantEmails','websiteAddress'];

}
