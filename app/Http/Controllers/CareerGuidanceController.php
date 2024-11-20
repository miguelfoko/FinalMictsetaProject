<?php

namespace App\Http\Controllers;
use App\Models\CareerGuidance;
use File; 
use Auth;
use Illuminate\Http\Request;

class CareerGuidanceController extends Controller
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
        $careerguidance = CareerGuidance::orderBy('id','desc')->paginate(5);
        return view('admin.resources.careerguidance.index', compact('careerguidance'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.resources.careerguidance.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)    {
        $request->validate([
            'title' => 'required',
            'file' => 'required|file|mimes:pdf|max:30240',
            'coverPage' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:10240',
        ]); 

        
        $careerguidance = new CareerGuidance;
        $careerguidance->title=$request->input('title');

        if ($request->hasFile('coverPage')) {
            $photo = $request->file('coverPage');
            $filename = 'Career_Guidance_' . '-' . time() . '.' . $photo->getClientOriginalExtension();
            $location = public_path('images/');
            $careerguidance->coverPage=$filename;
            $request->file('coverPage')->move($location, $filename);
           
        }

        if (request()->hasFile('file')){
            $file = $request->file('file');
            $fileName = 'Career_Guidance_' . '-' .time().'.'.$file->extension();  
            $request->file->move(public_path('files'), $fileName);
            
            $careerguidance->file=$fileName;
        }
        $careerguidance->user_id=Auth::user()->id;
        $careerguidance->save();
        return redirect()->route('careerguidance.index')->with('success','Career Guidance has been created successfully.');
   
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $careerguidance = CareerGuidance::find($id);
        return view('careerguidance.show',compact('careerguidance')); 
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $careerguidance = CareerGuidance::find($id);
        return view('admin.resources.careerguidance.edit',compact('careerguidance'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)    {
        $careerguidance = CareerGuidance::find($id);
        $request->validate([
            'title' => 'required',
            'file' => 'required|file|mimes:pdf|max:30240',
            'coverPage' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:10240',
        ]);

        $careerguidance->title=$request->input('title');

        if (request()->hasFile('file')){
            $fileName=$careerguidance->file;
            $file_path = "files/$fileName";
            unlink(public_path($file_path));

            $file = $request->file('file');
            $fileName = 'Career_Guidance_' . '-' .time().'.'.$file->extension();  
            $request->file->move(public_path('files'), $fileName);
            
            $careerguidance->file=$fileName;
        }

        if ($request->hasFile('coverPage')) {
            $fileName=$careerguidance->coverPage;
            $file_path = "images/$fileName";
            unlink(public_path($file_path));

            $photo = $request->file('coverPage');
            $fileName = 'Career_Guidance_' . '-' . time() . '.' . $photo->getClientOriginalExtension();
            $location = public_path('images/');
            $careerguidance->coverPage=$fileName;
            $request->file('coverPage')->move($location, $fileName);

        }
       

        $careerguidance->user_id=Auth::user()->id;
        $careerguidance->save();
        
        $careerguidance->fill($request->post())->save();
        return redirect()->route('careerguidance.index')->with('success','Career Guidance has been updated successfully.');
    
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)    {
        $careerguidance = CareerGuidance::find($id);
        $fileName=$careerguidance->file;

        $file_path = "files/$fileName"; 
        unlink(public_path($file_path));

        $fileName=$careerguidance->coverPage;
        $file_path = "images/$fileName"; 
        unlink(public_path($file_path));

        $careerguidance->delete();
        return redirect()->route('careerguidance.index')->with('success','Carrer Guidance has been deleted successfully');
   
    }
}
