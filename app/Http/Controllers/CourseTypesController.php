<?php

namespace App\Http\Controllers;
use App\Models\CourseType;
use Auth;
use App\Models\RegionalLocations;
use App\Models\Program;

use Illuminate\Http\Request;

class CourseTypesController extends Controller
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
        $coursetype = CourseType::all();
        $regionallocations = RegionalLocations::all();
        $program=Program::all();
        return view('admin.resources.coursetypes.index', compact('coursetype','regionallocations','program'));
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
        return view('admin.resources.coursetypes.create', compact('regionallocations','programs'));
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
            'type' => 'required',
            'idprogram'=>'required',
            'description' => 'required',
            'duration' => 'required',
            'qualification' => 'required',
            'admissionRequirements' => 'required',
            'resources' => 'required',
        ]);
 
        $coursetype = new CourseType;
        $coursetype->description=$request->input('description');
        $coursetype->type=$request->input('type');
        $coursetype->idprogram=$request->input('idprogram');
        $coursetype->duration=$request->input('duration');
        $coursetype->qualification=$request->input('qualification');
        $coursetype->admissionRequirements=$request->input('admissionRequirements');
        $coursetype->resources=$request->input('resources');
        $coursetype->user_id=Auth::user()->id;
        $coursetype->save();
        return redirect()->route('coursetype.index')->with('success','Program has been created successfully.');
    
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
        $coursetype = CourseType::find($id);
        $regionallocations = RegionalLocations::all();
        $programs = Program::all();
        return view('admin.resources.coursetypes.edit',compact('coursetype','regionallocations','programs'));
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
        $coursetype = CourseType::find($id);

        $request->validate([
            'description' => 'required',
            'type' => 'required',
            'idprogram'=>'required',
            'duration' => 'required',
            'qualification' => 'required',
            'admissionRequirements' => 'required',
            'resources' => 'required',
        ]);
        $coursetype->type=$request->input('type');
        $coursetype->idprogram=$request->input('idprogram');
        $coursetype->description=$request->input('description');
        $coursetype->duration=$request->input('duration');
        $coursetype->qualification=$request->input('qualification');
        $coursetype->admissionRequirements=$request->input('admissionRequirements');
        $coursetype->resources=$request->input('resources');
        $coursetype->user_id=Auth::user()->id;

        $coursetype->save();
        
        $coursetype->fill($request->post())->save();
        return redirect()->route('coursetype.index')->with('success','Program has been updated successfully.');
   
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $coursetype = CourseType::find($id);
        $coursetype->delete();
        return redirect()->route('coursetype.index')->with('success','Program has been deleted successfully');
    
    }
}
