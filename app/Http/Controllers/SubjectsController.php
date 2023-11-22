<?php

namespace App\Http\Controllers;
use App\Models\Subjects;
use App\Models\CourseType;
use Auth;
use Illuminate\Http\Request;

class SubjectsController extends Controller
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
        $subjects = Subjects::all();
        $coursetypes = CourseType::all();
        return view('admin.resources.coursetypes.subjects.index', compact('subjects','coursetypes'));
    }
 
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $coursetypes = CourseType::all();
        return view('admin.resources.coursetypes.subjects.create', compact('coursetypes'));
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
            'coursetype_id'=>'required',
            'level'=>'required'
        ]);
 
        $subjects = new Subjects;
        $subjects->title=$request->input('title');
        $subjects->coursetype_id=$request->input('coursetype_id');
        $subjects->level=$request->input('level');
        $subjects->user_id=Auth::user()->id;
        $subjects->save();

        return redirect()->route('subjects.index')->with('success','Subject has been created successfully.');
    
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $subjects = Subjects::find($id);
        $coursetypes = CourseType::all();
        return view('admin.resources.coursetypes.subjects.edit',compact('subjects','coursetypes'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $subjects = Subjects::find($id);
        $coursetypes = CourseType::all();
        return view('admin.resources.coursetypes.subjects.edit',compact('subjects','coursetypes'));
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
        $subjects = Subjects::find($id);

        $request->validate([
            'title' => 'required',
            'coursetype_id'=>'required',
            'level'=>'required'
        ]);

        $subjects->title=$request->input('title');
        $subjects->coursetype_id=$request->input('coursetype_id');
        $subjects->level=$request->input('level');
        $subjects->user_id=Auth::user()->id;
        $subjects->save();
        
        $subjects->fill($request->post())->save();

        return redirect()->route('subjects.index')->with('success','Subject has been updated successfully.');
   
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $subjects = Subjects::find($id);
        $subjects->delete();
        return redirect()->route('subjects.index')->with('success','Subject has been deleted successfully');
    }
}
