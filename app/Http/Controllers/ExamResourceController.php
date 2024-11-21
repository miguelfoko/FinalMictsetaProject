<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ExamResources;
use File; 
use Auth;
use Illuminate\Http\UploadedFile;

class ExamResourceController extends Controller
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
        $examinformationresources = ExamResources::orderBy('id','desc')->paginate(5);
        return view('admin.examinations.examresources.index', compact('examinformationresources')); 

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.examinations.examresources.create');
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
            'category' => 'required',
            'name' => 'required',
            'file' => 'required|file|mimes:pdf|max:30600', 
        ]);

        
        $examinformationresources = new ExamResources;
        $examinformationresources->category=$request->input('category');
        $examinformationresources->name=$request->input('name');
        
        if (request()->hasFile('file')){
            $file = $request->file('file');
            $fileName = str_replace(' ','',$request->input('name')). '-' .time().'.'.$file->extension();  
            $request->file->move(public_path('files').'/'.$examinformationresources->category, $fileName);
            
            $examinformationresources->file=$fileName;
        }
        $examinformationresources->user_id=Auth::user()->id;
        $examinformationresources->save();
        return redirect()->route('examinformationresources.index')->with('success','Examination Information and Resource has been created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $examinformationresources = ExamResources::find($id);

        return view('examinformationresources.show',compact('examinformationresources')); 
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $examinformationresources = ExamResources::find($id);
        return view('admin.examinations.examresources.edit',compact('examinformationresources'));
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
        $examinformationresources = ExamResources::find($id);

        $request->validate([
            'category' => 'required',
            'name' => 'required',
            'file' => 'required|file|mimes:pdf|max:30600', 
        ]);

        $examinformationresources->category=$request->input('category');
        $examinformationresources->name=$request->input('name');
        if (request()->hasFile('file')){
            $file = $request->file('file');
            $fileName = str_replace(' ','',$request->input('name')). '-' .time().'.'.$file->extension();  
            $request->file->move(public_path('files').'/'.$examinformationresources->category, $fileName);
            
            $examinformationresources->file=$fileName;

        }

        $examinformationresources->user_id=Auth::user()->id;
        $examinformationresources->save();
        
        $examinformationresources->fill($request->post())->save();
        return redirect()->route('examinformationresources.index')->with('success','Examination Information and Resource has been Updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $examinformationresources = ExamResources::find($id);
        $fileName=$examinformationresources->file;
        $directoryName=$examinformationresources->category;
        $file_path = "files/$directoryName/$fileName"; 
        unlink(public_path($file_path));

        $examinformationresources->delete();
        return redirect()->route('examinformationresources.index')->with('success','Examination Information and Resource has been deleted successfully');
    }
}
