<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AboutTvet;


class GuestAboutTvetController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$abouttvet = AboutTvet::findOrFail(1);//The only About TVET data in the database
        $abouttvet = AboutTvet::orderBy('id','desc')->paginate(1);
        return view('about',compact('abouttvet'));
        
    }

    
}
