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
            'title' => 'required',
            'file' => 'required|file|mimes:pdf',
            'coverPage' => 'required|image',
        ]);

        
        $collegecalendar = new CollegeCalendar;
        $collegecalendar->title=$request->input('title');

        if ($request->hasFile('coverPage')) {
            $photo = $request->file('coverPage');
            $filename = 'College_Calendar_' . '-' . time() . '.' . $photo->getClientOriginalExtension();
            $location = public_path('images/');
            $collegecalendar->coverPage=$filename;
            $request->file('coverPage')->move($location, $filename);
           
        }

        if (request()->hasFile('file')){
            $file = $request->file('file');
            $fileName = 'College_Calendar_' . '-' .time().'.'.$file->extension();  
            $request->file->move(public_path('files'), $fileName);
            
            $collegecalendar->file=$fileName;
        }
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
            'title' => 'required',
            'file' => 'required|file|mimes:pdf',
            'coverPage' => 'required|image',
        ]);

        
        $collegecalendar->title=$request->input('title');

        if (request()->hasFile('file')){
            $fileName=$collegecalendar->file;
            $file_path = "files/$fileName";
            unlink(public_path($file_path));

            $file = $request->file('file');
            $fileName = 'College_Calendar_' . '-' .time().'.'.$file->extension();  
            $request->file->move(public_path('files'), $fileName);
            
            $collegecalendar->file=$fileName;
        }

        if ($request->hasFile('coverPage')) {
            $fileName=$collegecalendar->coverPage;
            $file_path = "images/$fileName";
            unlink(public_path($file_path));

            $photo = $request->file('coverPage');
            $filename = 'College_Calendar_' . '-' . time() . '.' . $photo->getClientOriginalExtension();
            $location = public_path('images/');
            $request->file('coverPage')->move($location, $filename);
            $collegecalendar->coverPage=$fileName;
        }
       

        $collegecalendar->user_id=Auth::user()->id;
        $collegecalendar->save();
        
        $collegecalendar->fill($request->post())->save();
        return redirect()->route('successstories.index')->with('success','College Calendar has been updated successfully.');
    
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
