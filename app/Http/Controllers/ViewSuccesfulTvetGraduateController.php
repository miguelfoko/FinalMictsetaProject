<?php

namespace App\Http\Controllers;
use App\Models\SuccesfulTvetGraduates;
use Illuminate\Http\Request; 

class ViewSuccesfulTvetGraduateController extends Controller {
    public function index()
    {
        $succesfulTvetGraduates = SuccesfulTvetGraduates::orderBy('id','desc')->paginate(6);
        return view('succesfulTvetGraduates', compact('succesfulTvetGraduates'));
    }
 
    public function show($id)
    {
        $succesfulTvetGraduates = SuccesfulTvetGraduates::find($id);
        return view('specificSuccesfulTvetGraduates',compact('succesfulTvetGraduates'));
    }
}
