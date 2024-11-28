<?php

namespace App\Http\Controllers;
use App\Models\CollegeCalendar;
use File; 
use Auth;
use Illuminate\Http\Request;

class CollegeCalendarController extends Controller
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
        $collegecalendar = CollegeCalendar::orderBy('id','desc')->paginate(5);
        return view('admin.resources.collegecalendar.index', compact('collegecalendar'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.resources.collegecalendar.create');

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
            'eventtitle' => 'required',
            'enddate' => 'required',
            'startdate' => 'required'

        ]);
 

        $collegecalendar = new CollegeCalendar;
        $collegecalendar->eventtitle=$request->input('eventtitle');
        $collegecalendar->startdate=$request->input('startdate');
        $collegecalendar->enddate=$request->input('enddate');

        $collegecalendar->user_id=Auth::user()->id;
        $collegecalendar->save();
        return redirect()->route('collegecalendar.index')->with('success','College Calendar has been created successfully.');
   
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $collegecalendar = CollegeCalendar::find($id);
        return view('collegecalendar.show',compact('collegecalendar')); 
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $collegecalendar = CollegeCalendar::find($id);
        return view('admin.resources.collegecalendar.edit',compact('collegecalendar'));
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
        

        

        
        



        $collegecalendar = CollegeCalendar::find($id);
        $request->validate([
            'eventtitle' => 'required',
            'startdate' => 'required',
            'enddate' => 'required'
        ]);

        $collegecalendar->eventtitle=$request->input('eventtitle');
        $collegecalendar->startdate=$request->input('startdate');
        $collegecalendar->enddate=$request->input('enddate');

        $collegecalendar->user_id=Auth::user()->id;
        $collegecalendar->save();
        
        $collegecalendar->fill($request->post())->save();
        return redirect()->route('collegecalendar.index')->with('success','College Calendar has been updated successfully.');
    
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $collegecalendar = CollegeCalendar::find($id);
        $collegecalendar->delete();
        return redirect()->route('collegecalendar.index')->with('success','College Calendar has been deleted successfully');
    }
}
