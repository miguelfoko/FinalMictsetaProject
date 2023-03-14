<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TvetCollegeTimes;
use File; 
use Auth;
use Illuminate\Http\UploadedFile;

class TvetCollegeTimesController extends Controller
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
        $tvetcollegetimes = TvetCollegeTimes::orderBy('id','desc')->paginate(5);
        return view('admin.tvetcollegetimes.index', compact('tvetcollegetimes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.tvetcollegetimes.create');
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
            'volume' => 'required',
            'publicationMonth' => 'required',
            'publicationYear' => 'required',
            'title' => 'required',
            'coverPage' => 'required|image',
            'file' => 'required|file|mimes:pdf',
        ]);

        
        $publicationDate=$request->input('publicationMonth').' '.$request->input('publicationYear');
        $tvetcollegetimes = new TvetCollegeTimes;
        $tvetcollegetimes->volume="Volume ".$request->input('volume');
        $tvetcollegetimes->title=$request->input('title');
        $tvetcollegetimes->publicationDate=$publicationDate;

        if ($request->hasFile('coverPage')) {
            $photo = $request->file('coverPage');
            $filename = 'tvetCollegeTimes' . '-' . time() . '.' . $photo->getClientOriginalExtension();
            $location = public_path('images/');
            $tvetcollegetimes->coverPage=$filename;
            $request->file('coverPage')->move($location, $filename);
           
        }

        if (request()->hasFile('file')){
            $file = $request->file('file');
            $size1=number_format((float)$file->getSize()/(1024*1024), 2, '.', '');
            $tvetcollegetimes->size=$size1.' Mo';
            $fileName = 'tvetCollegeTimes' . '-' .time().'.'.$file->extension();  
            $request->file->move(public_path('files'), $fileName);
            
            $tvetcollegetimes->file=$fileName;
        }
        $tvetcollegetimes->user_id=Auth::user()->id;
        $tvetcollegetimes->save();
        return redirect()->route('admintvetcollegetimes.index')->with('success','TVET College Times has been created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(TvetCollegeTimes $tvetcollegetimes)
    {
        return view('admintvetcollegetimes.show',compact('tvetcollegetimes')); 
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $tvetcollegetimes = TvetCollegeTimes::find($id);
        return view('admin.tvetcollegetimes.edit',compact('tvetcollegetimes'));
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
        $tvetcollegetimes = TvetCollegeTimes::find($id);

        $request->validate([
            'volume' => 'required',
            'publicationMonth' => 'required',
            'publicationYear' => 'required',
            'title' => 'required',
            'coverPage' => 'required|image',
            'file' => 'required|file|mimes:pdf',
        ]); 
        
        $publicationDate=$request->input('publicationMonth').' '.$request->input('publicationYear');
        $tvetcollegetimes->volume="Volume ".$request->input('volume');
        $tvetcollegetimes->title=$request->input('title');
        $tvetcollegetimes->publicationDate=$publicationDate;

        if ($request->hasFile('coverPage')) {
            $fileName=$tvetcollegetimes->coverPage;
            $file_path = "images/$fileName";
            unlink(public_path($file_path));

            $photo = $request->file('coverPage');
            $filename = 'tvetCollegeTimes' . '-' . time() . '.' . $photo->getClientOriginalExtension();
            $location = public_path('images/');
            $request->file('coverPage')->move($location, $filename);
            $tvetcollegetimes->coverPage=$fileName;
        }

        if (request()->hasFile('file')){
            $fileName=$tvetcollegetimes->file;
            $file_path = "files/$fileName";
            unlink(public_path($file_path));

            $file = $request->file('file');
            $size1=number_format((float)$file->getSize()/(1024*1024), 2, '.', '');
            $tvetcollegetimes->size=$size1.' Mo';
            $fileName = 'tvetCollegeTimes' . '-' .time().'.'.$file->extension();  
            $request->file->move(public_path('files'), $fileName);
            $tvetcollegetimes->file=$fileName;
        }
        $tvetcollegetimes->user_id=Auth::user()->id;
        $tvetcollegetimes->save();
        
        $tvetcollegetimes->fill($request->post())->save();
        return redirect()->route('admintvetcollegetimes.index')->with('success','TVET College Times has been updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $tvetcollegetimes = TvetCollegeTimes::find($id);
        $fileName=$tvetcollegetimes->file;
        $file_path = "files/$fileName"; 
        unlink(public_path($file_path));

        $fileName=$tvetcollegetimes->coverPage;
        $file_path = "images/$fileName"; 
        unlink(public_path($file_path));

        $tvetcollegetimes->delete();
        return redirect()->route('admintvetcollegetimes.index')->with('success','TVET College Times has been deleted successfully');
    }
}
