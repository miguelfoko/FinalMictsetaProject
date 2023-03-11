<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TvetCollegeTimes;
use File;
use Auth;
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
            'size' => 'required',
            'file' => 'required|file|mimes:pdf',
        ]);

        $fileName = 'tvetCollegeTimes' . '-' .time().'.'.$request->file->extension();  
        
        $request->picture->move(public_path('files'), $fileName);
        $publicationDate=$request->input('publicationMonth').' '.$request->input('publicationYear');
        $tvetcollegetimes = new TvetCollegeTimes;
        $tvetcollegetimes->volume=$request->input('volume');
        $tvetcollegetimes->title=$request->input('title');
        $tvetcollegetimes->publicationDate=$publicationDate;
        $tvetcollegetimes->title=$request->file->getSize();
        $tvetcollegetimes->file=$fileName;

        
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
    public function edit(TvetCollegeTimes $tvetcollegetimes)
    {
        return view('admin.tvetcollegetimes.edit',compact('tvetcollegetimes'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, TvetCollegeTimes $tvetcollegetimes)
    {
        $request->validate([
            'volume' => 'required',
            'publicationMonth' => 'required',
            'publicationYear' => 'required',
            'title' => 'required',
            'size' => 'required',
            'file' => 'required|file|mimes:pdf',
        ]);

        $fileName=$tvetcollegetimes->file;
        $file_path = "files/$fileName";
        unlink(public_path($file_path));

        $fileName = 'tvetCollegeTimes' . '-' .time().'.'.$request->file->extension();  
        
        $request->picture->move(public_path('files'), $fileName);
        $publicationDate=$request->input('publicationMonth').' '.$request->input('publicationYear');
        $tvetcollegetimes = new TvetCollegeTimes;
        $tvetcollegetimes->volume=$request->input('volume');
        $tvetcollegetimes->title=$request->input('title');
        $tvetcollegetimes->publicationDate=$publicationDate;
        $tvetcollegetimes->title=$request->file->getSize();
        $tvetcollegetimes->file=$fileName;

        
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
    public function destroy(TvetCollegeTimes $tvetcollegetimes)
    {
        $fileName=$news->file;
        $file_path = "files/$fileName"; 
        unlink(public_path($file_path));
        $tvetcollegetimes->delete();
        return redirect()->route('admintvetcollegetimes.index')->with('success','TVET College Times has been deleted successfully');
    }
}
