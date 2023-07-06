<?php

namespace App\Http\Controllers;
use App\Models\Program;
use Auth;
use Illuminate\Http\Request;

class ProgramController extends Controller
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
        $programs = Program::all();
        return view('admin.resources.coursetypes.program.index', compact('programs'));
    }

    /**
     * Show the form for creating a new resource. 
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.resources.coursetypes.program.create');
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
            'description' => 'required'
        ]);
 
        $program = new Program;
        $program->description=$request->input('description');
        $program->title=$request->input('title');
        $program->user_id=Auth::user()->id;
        $program->save();
        return redirect()->route('programs.index')->with('success','Program has been created successfully.');
    
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $programs = Program::find($id);
        return view('admin.resources.coursetypes.program.edit',compact('programs'));
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
        $program = Program::find($id);

        $request->validate([
            'description' => 'required',
            'title' => 'required'
        ]);
        $program->title=$request->input('title');
        $program->description=$request->input('description');
        $program->user_id=Auth::user()->id;
        $program->save();
        $program->fill($request->post())->save();
        return redirect()->route('programs.index')->with('success','Program has been updated successfully.');
   
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $program = Program::find($id);
        $program->delete();
        return redirect()->route('programs.index')->with('success','Program has been deleted successfully');
    }
}
