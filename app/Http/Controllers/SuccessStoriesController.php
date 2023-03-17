<?php

namespace App\Http\Controllers;
use App\Models\SuccessStories;
use File; 
use Auth;
use Illuminate\Http\Request;

class SuccessStoriesController extends Controller
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
        $successstories = SuccessStories::orderBy('id','desc')->paginate(5);
        return view('admin.resources.successstories.index', compact('successstories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.resources.successstories.create');
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

        
        $successstories = new SuccessStories;
        $successstories->title=$request->input('title');

        if ($request->hasFile('coverPage')) {
            $photo = $request->file('coverPage');
            $filename = 'Success_Stories_' . '-' . time() . '.' . $photo->getClientOriginalExtension();
            $location = public_path('images/');
            $successstories->coverPage=$filename;
            $request->file('coverPage')->move($location, $filename);
           
        }

        if (request()->hasFile('file')){
            $file = $request->file('file');
            $fileName = 'Success_Stories_' . '-' .time().'.'.$file->extension();  
            $request->file->move(public_path('files'), $fileName);
            
            $successstories->file=$fileName;
        }
        $successstories->user_id=Auth::user()->id;
        $successstories->save();
        return redirect()->route('successstories.index')->with('success','Success Stories has been created successfully.');
   
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $successstories = SuccessStories::find($id);
        return view('successstories.show',compact('successstories')); 

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $successstories = SuccessStories::find($id);
        return view('admin.resources.successstories.edit',compact('successstories'));
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
        $successstories = SuccessStories::find($id);
        $request->validate([
            'title' => 'required',
            'file' => 'required|file|mimes:pdf',
            'coverPage' => 'required|image',
        ]);

        
        $successstories = new SuccessStories;
        $successstories->title=$request->input('title');

        if (request()->hasFile('file')){
            $fileName=$successstories->file;
            $file_path = "files/$fileName";
            unlink(public_path($file_path));

            $file = $request->file('file');
            $fileName = 'Success_Stories_' . '-' .time().'.'.$file->extension();  
            $request->file->move(public_path('files'), $fileName);
            
            $successstories->file=$fileName;
        }

        if ($request->hasFile('coverPage')) {
            $fileName=$successstories->coverPage;
            $file_path = "images/$fileName";
            unlink(public_path($file_path));

            $photo = $request->file('coverPage');
            $filename = 'Success_Stories_' . '-' . time() . '.' . $photo->getClientOriginalExtension();
            $location = public_path('images/');
            $request->file('coverPage')->move($location, $filename);
            $successstories->coverPage=$fileName;
        }
       

        $successstories->user_id=Auth::user()->id;
        $successstories->save();
        
        $successstories->fill($request->post())->save();
        return redirect()->route('successstories.index')->with('success','Success Story has been updated successfully.');
    
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $successstories = SuccessStories::find($id);
        $fileName=$successstories->file;
        $file_path = "files/$fileName"; 
        unlink(public_path($file_path));

        $fileName=$successstories->coverPage;
        $file_path = "images/$fileName"; 
        unlink(public_path($file_path));

        $successstories->delete();
        return redirect()->route('successstories.index')->with('success','Success Story has been deleted successfully');
   
    }
}
