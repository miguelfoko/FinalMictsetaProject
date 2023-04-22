<?php

namespace App\Http\Controllers;

use App\Models\Setas;
use Illuminate\Http\Request;
use Auth;

class SetasController extends Controller
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
        $setas = Setas::orderBy('id','desc')->paginate(5);
        return view('admin.abouttvet.setas.index', compact('setas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.abouttvet.setas.create');
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
            'content' => 'required'
        ]);

        $setas=new Setas;
        $setas->content=nl2br($request->input('content'));
        $setas->user_id=Auth::user()->id;
        $setas->save();
        return redirect()->route('setas.index')->with('success','Setas has been created successfully.');
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
        $setas = Setas::findOrFail($id);
        return view('admin.abouttvet.setas.edit',compact('setas'));
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
        $setas = Setas::find($id);

        $request->validate([
            'content' => 'required'
        ]);

        $setas->content=nl2br($request->input('content'));
        $setas->user_id=Auth::user()->id;
        
        $setas->save();

        $setas->fill($request->post())->save();

        return redirect()->route('setas.index')->with('success','Setas has Been updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $setas = Setas::findOrFail($id);
        $setas->delete();
        return redirect()->route('setas.index')->with('success','Setas has been deleted successfully');
    
    }
}
