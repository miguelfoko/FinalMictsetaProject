<?php

namespace App\Http\Controllers;
use App\Models\ExamTrainingVideos;
use File; 
use Auth;
use Illuminate\Http\Request;

class ExamTrainingVideosController extends Controller
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
        $examtrainingvideos = ExamTrainingVideos::orderBy('id','desc')->paginate(6);
        return view('admin.examinations.examtrainingvideos.index', compact('examtrainingvideos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.examinations.examtrainingvideos.create');

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
            'session' => 'required',
            'module' => 'required',
            'title' => 'required',
            'video' => 'required|file|mimetypes:video/mp4,video/3gpp,video/quicktime,video/x-msvideo,video/x-ms-wmv',
        ]);

        
        $module=$request->input('module');
        $session=$request->input('session');
        $title=$request->input("title");

        $examtrainingvideos = new ExamTrainingVideos;
        $examtrainingvideos->module=$module;
        $examtrainingvideos->session=$session;
        $examtrainingvideos->title=$title;

        if ($request->hasFile('video')) {
            $video = $request->file('video');
            $filename = 'Exam_Video_'. time() . '.' . $video->getClientOriginalExtension();
            $location = public_path('videos/');
            $examtrainingvideos->video=$filename;
            $request->file('video')->move($location, $filename);
           
        }

        $examtrainingvideos->user_id=Auth::user()->id;
        $examtrainingvideos->save();
        return redirect()->route('examtrainingvideos.index')->with('success','Exam Training Video has been created successfully.');
   
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(ExamTrainingVideos $examtrainingvideos)
    {
        return view('examtrainingvideos.show',compact('examtrainingvideos')); 

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $examtrainingvideos = ExamTrainingVideos::find($id);
        return view('admin.examinations.examtrainingvideos.edit',compact('examtrainingvideos'));
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
        $examtrainingvideos = ExamTrainingVideos::find($id);

        $request->validate([
            'session' => 'required',
            'module' => 'required',
            'title' => 'required',
            'video' => 'required|file|mimetypes:video/mp4,video/3gpp,video/quicktime,video/x-msvideo,video/x-ms-wmv',
        ]); 
        
 
        $examtrainingvideos->module=$request->input('module');
        $examtrainingvideos->session=$request->input('session');
        $examtrainingvideos->title=$request->input("title");

        if ($request->hasFile('video')) {
            $fileName=$examtrainingvideos->video;
            $file_path = "videos/$fileName";
            unlink(public_path($file_path));

            $video = $request->file('video');
            $filename = 'Exam_Video_'. time() . '.' . $video->getClientOriginalExtension();
            $location = public_path('videos/');
            $examtrainingvideos->video=$filename;
            $request->file('video')->move($location, $filename);
           
        }

        $examtrainingvideos->user_id=Auth::user()->id;
        $examtrainingvideos->save();
        
        $examtrainingvideos->fill($request->post())->save();
        return redirect()->route('examtrainingvideos.index')->with('success','Exam Training Video has been updated successfully.');
   
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $examtrainingvideos = ExamTrainingVideos::find($id);
        $fileName=$examtrainingvideos->video;
        $file_path = "videos/$fileName"; 
        unlink(public_path($file_path));

        $examtrainingvideos->delete();
        return redirect()->route('examtrainingvideos.index')->with('success','Exam Training Video has been deleted successfully');
    
    }
}
