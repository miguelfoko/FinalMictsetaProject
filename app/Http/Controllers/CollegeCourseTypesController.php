<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request; 
use App\Models\CollegeCourseType;
use Auth;


class CollegeCourseTypesController extends Controller
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
        $collegecoursetype = CollegeCourseType::orderBy('id','desc')->paginate(5);
        return view('admin.resources.index', compact('collegecoursetype'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.resources.create');
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
            'overview' => 'required',
            'industryFields' => 'required',
            'typeOfCourses' => 'required',
        ]);
 
        $collegecoursetype = new CollegeCourseType;
        $collegecoursetype->overview=$request->input('overview');
        $collegecoursetype->industryFields=$request->input('industryFields');
        $collegecoursetype->typeOfCourses=$request->input('typeOfCourses');

        $collegecoursetype->user_id=Auth::user()->id;
        $collegecoursetype->save();
        return redirect()->route('collegecoursetype.index')->with('success','College Course Type has been created successfully.');
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
        $collegecoursetype = CollegeCourseType::find($id);
        return view('admin.resources.edit',compact('collegecoursetype'));
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
        $collegecoursetype = CollegeCourseType::find($id);

        $request->validate([
            'overview' => 'required',
            'industryFields' => 'required',
            'typeOfCourses' => 'required',
        ]); 
        
        $collegecoursetype->overview=$request->input('overview');
        $collegecoursetype->industryFields=$request->input('industryFields');
        $collegecoursetype->typeOfCourses=$request->input('typeOfCourses');

        $collegecoursetype->user_id=Auth::user()->id;
        $collegecoursetype->save();
        
        $collegecoursetype->fill($request->post())->save();
        return redirect()->route('collegecoursetype.index')->with('success','College Course Type has been updated successfully.');
   
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $collegecoursetype = CollegeCourseType::find($id);
        $collegecoursetype->delete();
        return redirect()->route('collegecoursetype.index')->with('success','College Course Type has been deleted successfully');
    
    }
}
