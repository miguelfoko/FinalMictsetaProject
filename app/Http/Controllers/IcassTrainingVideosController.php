<?php

namespace App\Http\Controllers;
use App\Models\IcassTrainingVideos;
use File; 
use Auth;
use Illuminate\Http\Request;

class IcassTrainingVideosController extends Controller
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
        $icasstrainingvideos = IcassTrainingVideos::orderBy('id','desc')->paginate(5);
        return view('admin.examinations.icasstrainingvideos.index', compact('icasstrainingvideos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() 
    {
        return view('admin.examinations.icasstrainingvideos.create');
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
            'video' => 'required',
        ]);

        
        $module=$request->input('module');
        $session=$request->input('session');
        $title=$request->input("title");
        $video=$request->input('video');

        $icasstrainingvideos = new IcassTrainingVideos;
        $icasstrainingvideos->module=$module;
        $icasstrainingvideos->session=$session;
        $icasstrainingvideos->title=$title;
        $icasstrainingvideos->video=$video;
/*
        if ($request->hasFile('video')) {
            $video = $request->file('video');
            $filename = 'Icass_Video_'. time() . '.' . $video->getClientOriginalExtension();
            $location = public_path('videos/');
            $icasstrainingvideos->video=$filename;
            $request->file('video')->move($location, $filename);
           
        }
*/
        $icasstrainingvideos->user_id=Auth::user()->id;
        $icasstrainingvideos->save();
        return redirect()->route('icasstrainingvideos.index')->with('success','ICASS Training Video has been created successfully.');
   
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(IcassTrainingVideos $icasstrainingvideos)
    {
        return view('icasstrainingvideos.show',compact('icasstrainingvideos')); 

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $icasstrainingvideos = IcassTrainingVideos::find($id);
        return view('admin.examinations.icasstrainingvideos.edit',compact('icasstrainingvideos'));
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
        $icasstrainingvideos = IcassTrainingVideos::find($id);

        $request->validate([
            'session' => 'required',
            'module' => 'required',
            'title' => 'required',
            'video' => 'required',
        ]); 
        
 
        $icasstrainingvideos->module=$request->input('module');
        $icasstrainingvideos->session=$request->input('session');
        $icasstrainingvideos->title=$request->input("title");
        $icasstrainingvideos->video=$request->input("video"); 
/*
        if ($request->hasFile('video')) {
            $fileName=$icasstrainingvideos->video;
            $file_path = "videos/$fileName";
            unlink(public_path($file_path));

            $video = $request->file('video');
            $filename = 'Icass_Video_'. time() . '.' . $video->getClientOriginalExtension();
            $location = public_path('videos/');
            $icasstrainingvideos->video=$filename;
            $request->file('video')->move($location, $filename);
           
        }
*/
        $icasstrainingvideos->user_id=Auth::user()->id;
        $icasstrainingvideos->save();
        
        $icasstrainingvideos->fill($request->post())->save();
        return redirect()->route('icasstrainingvideos.index')->with('success','ICASS Training Video has been updated successfully.');
   
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $icasstrainingvideos = IcassTrainingVideos::find($id);
        //$fileName=$icasstrainingvideos->video;
        //$file_path = "videos/$fileName"; 
        //unlink(public_path($file_path));

        $icasstrainingvideos->delete();
        return redirect()->route('icasstrainingvideos.index')->with('success','ICASS Training Video has been deleted successfully');
    
    }
}
