<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Models\RegionalLocations;
use App\Models\Program;
use App\Models\CollegeProgram;
use App\Models\College;


class CollegeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */ 
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() 
    {
        $college = College::all();
        $regionallocations = RegionalLocations::all();
        return view('admin.resources.coursetypes.college.index', compact('college','regionallocations'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $regionallocations = RegionalLocations::all();
        $programs = Program::all();
        return view('admin.resources.coursetypes.college.create', compact('regionallocations','a'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'regional_location_id'=>'required',
            'programs'=>'required'
        ]);
 
        $college = new College;
        $college->title=$request->input('title');
        $college->regional_location_id=$request->input('regional_location_id');
        $college->user_id=Auth::user()->id;
        $college->save();
        
        $programs=$request->input('programs');
        foreach($programs as $program){
            $collegeProgram=new CollegeProgram;
            $collegeProgram->college_id=$college->id;
            $collegeProgram->program_id=$program;
            $collegeProgram->save();
        }

        return redirect()->route('college.index')->with('success','College has been created successfully.');
    
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $college = College::find($id);
        $regionallocations = RegionalLocations::all();
        $programs = Program::all();
        return view('admin.resources.coursetypes.college.edit',compact('college','regionallocations','programs'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $college = College::find($id);

        $request->validate([
            'title' => 'required',
            'regional_location_id'=>'required',
            'programs'=>'required'
        ]);

        $college->title=$request->input('title');
        $college->regional_location_id=$request->input('regional_location_id');
        $college->user_id=Auth::user()->id;
        $college->save();
        
        $college->fill($request->post())->save();

        $collegeProgram = CollegeProgram::where('college_id', $college->id)->delete();

        $programs=$request->input('programs');
        foreach($programs as $program){
            $collegeProgram=new CollegeProgram;
            $collegeProgram->college_id=$college->id;
            $collegeProgram->program_id=$program;
            $collegeProgram->save();
        }
        return redirect()->route('college.index')->with('success','College has been updated successfully.');
   
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $college = College::find($id);
        $college->delete();
        return redirect()->route('college.index')->with('success','College has been deleted successfully');
    
    }
}
