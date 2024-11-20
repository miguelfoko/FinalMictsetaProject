<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\SuccesfulTvetGraduates;
use File;
use Auth; 

class SuccesfullTvetGraduatesController extends Controller
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
    public function index()    {
         $succesfulTvetGraduates = SuccesfulTvetGraduates::orderBy('id','desc')->paginate(3);
        return view('admin.succesfulTvetGraduates.index', compact('succesfulTvetGraduates'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(){
        return view('admin.succesfulTvetGraduates.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request){
        $request->validate([
            'title' => 'required',
            'name' => 'required',
            'content' => 'required',
            'picture' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:10240',
        ]);

        $imageName = time().'.'.$request->picture->extension();  
        
        $request->picture->move(public_path('images'), $imageName);

        $succesfulTvetGraduates=new SuccesfulTvetGraduates;
        $succesfulTvetGraduates->title=$request->input('title');
        $succesfulTvetGraduates->name=$request->input('name');
        $succesfulTvetGraduates->content=nl2br($request->input('content'));
        $succesfulTvetGraduates->picture=$imageName;
        $succesfulTvetGraduates->user_id=Auth::user()->id;
        $succesfulTvetGraduates->save();
        return redirect()->route('succesfulTvetGraduates.index')->with('success','Successful TVET Graduates has been created successfully.')
        ->with('image',$imageName);
    }

    /**
    * Display the specified resource.
    *
    * @param  int  $id
    * @return \Illuminate\Http\Response
    */
    public function show(SuccesfulTvetGraduates $id)    {
        $succesfulTvetGraduates = SuccesfulTvetGraduates::find($id);

        return view('succesfulTvetGraduates.show',compact('succesfulTvetGraduates'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id) {
        $succesfulTvetGraduates = SuccesfulTvetGraduates::findOrFail($id);
        return view('admin.succesfulTvetGraduates.edit',compact('succesfulTvetGraduates'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)    {

        $succesfulTvetGraduates = SuccesfulTvetGraduates::find($id);
        $request->validate([
            'title' => 'required',
            'name' => 'required',
            'content' => 'required',
            'picture' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:10240',
        ]);
        $imageName=$succesfulTvetGraduates->picture;
        $file_path = "images/$imageName";
        unlink(public_path($file_path)); 

        
        $imageName = time().'.'.$request->picture->extension();
        $request->picture->move(public_path('images/'), $imageName);
       
        $succesfulTvetGraduates->title=$request->input('title');
        $succesfulTvetGraduates->name=$request->input('name');
        $succesfulTvetGraduates->content=nl2br($request->input('content'));
        $succesfulTvetGraduates->picture=$imageName;
        $succesfulTvetGraduates->save();

        $succesfulTvetGraduates->fill($request->post())->save();

        return redirect()->route('succesfulTvetGraduates.index')->with('success','Successful TVET Graduates has Been updated successfully')
        ->with('image',$imageName);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id){
        $succesfulTvetGraduates = SuccesfulTvetGraduates::findOrFail($id);
        $imageName=$succesfulTvetGraduates->picture;
        $file_path = "images/$imageName"; 
        //unlink(public_path($file_path));
        $succesfulTvetGraduates->delete();
        return redirect()->route('succesfulTvetGraduates.index')->with('success','Successful TVET Graduates has been deleted successfully');
    }
}
