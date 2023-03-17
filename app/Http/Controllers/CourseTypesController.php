<?php

namespace App\Http\Controllers;
use App\Models\CourseType;
use Auth;

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
        $coursetype = CourseType::orderBy('id','desc')->paginate(5);
        return view('admin.resources.coursetypes.index', compact('coursetype'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.resources.coursetypes.create');
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
            'description' => 'required',
            'duration' => 'required',
            'qualification' => 'required',
            'admissionRequirements' => 'required',
            'resources' => 'required',
        ]);
 
        $coursetype = new CourseType;
        $coursetype->description=$request->input('description');
        $coursetype->type=$request->input('type');
        $coursetype->duration=$request->input('duration');
        $coursetype->qualification=$request->input('qualification');
        $coursetype->admissionRequirements=$request->input('admissionRequirements');
        $coursetype->resources=$request->input('resources');
        $coursetype->user_id=Auth::user()->id;
        $coursetype->save();
        return redirect()->route('collegecoursetype.index')->with('success','Course Type has been created successfully.');
    
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
        return view('admin.resources.coursetypes.edit',compact('coursetype'));
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
            'duration' => 'required',
            'qualification' => 'required',
            'admissionRequirements' => 'required',
            'resources' => 'required',
        ]);
        $coursetype->type=$request->input('type');
        $coursetype->description=$request->input('description');
        $coursetype->duration=$request->input('duration');
        $coursetype->qualification=$request->input('qualification');
        $coursetype->admissionRequirements=$request->input('admissionRequirements');
        $coursetype->resources=$request->input('resources');
        $coursetype->user_id=Auth::user()->id;

        $coursetype->save();
        
        $coursetype->fill($request->post())->save();
        return redirect()->route('collegecoursetype.index')->with('success','Course Type has been updated successfully.');
   
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
        return redirect()->route('coursetype.index')->with('success','Course Type has been deleted successfully');
    
    }
}
