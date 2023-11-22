<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CourseType; 
use App\Models\College; 
use App\Models\Subjects; 
use App\Models\Program; 
use App\Models\CollegeProgram; 
use App\Models\RegionalLocations; 
use DB;
class ShowCollegesController extends Controller
{
    /**  
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)  
    {
            $coursetype= CourseType::find($request->input('coursetype'));
            $subjects=DB::table('subjects')
                ->join('course_types','course_types.id','=','subjects.coursetype_id')
                ->select('subjects.title','subjects.level')
                ->where('course_types.id','=',$request->input('coursetype'))
                ->get(); 

            $colleges=DB::table('colleges') 
                ->join('college_programs','colleges.id','=','college_programs.college_id')
                ->join('programs','college_programs.program_id','=','programs.id')
                ->select('colleges.title','colleges.id')
                ->where('programs.id','=',$request->input('program'))
                ->get();
            return view('showColleges',compact('subjects','coursetype','colleges')); 
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
