<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AboutTvet;
use File;
use Auth;

class AboutTvetController extends Controller
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
        $abouttvet = AboutTvet::orderBy('id','desc')->paginate(5);
        return view('admin.abouttvet.index', compact('abouttvet'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.abouttvet.create');
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
            'whatIsTvet' => 'required',
            'tvetOverview' => 'required',
            'publicTvetColleges'=> 'required',
            'tvetCollegeAdministration'=> 'required',
            'privateTvetColleges'=> 'required',
        ]);

        $aboutTvet=new AboutTvet;
        $aboutTvet->whatIsTvet=nl2br($request->input('whatIsTvet'));
        $aboutTvet->tvetOverview=nl2br($request->input('tvetOverview'));
        $aboutTvet->publicTvetColleges=nl2br($request->input('publicTvetColleges'));
        $aboutTvet->tvetCollegeAdministration=nl2br($request->input('tvetCollegeAdministration'));
        $aboutTvet->privateTvetColleges=nl2br($request->input('privateTvetColleges'));
        $aboutTvet->user_id=Auth::user()->id;
        $aboutTvet->save();
        return redirect()->route('adminAbouttvet.index')->with('success','About Tvet has been created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(int  $id)    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)    {
        $abouttvet = AboutTvet::findOrFail($id);
        return view('admin.abouttvet.edit',compact('abouttvet'));
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
        $abouttvet = AboutTvet::find($id);
        $request->validate([
            'whatIsTvet' => 'required',
            'tvetOverview' => 'required', 
            'publicTvetColleges'=> 'required',
            'tvetCollegeAdministration'=> 'required',
            'privateTvetColleges'=> 'required',
        ]);

        $abouttvet->whatIsTvet=nl2br($request->input('whatIsTvet'));
        $abouttvet->tvetOverview=nl2br($request->input('tvetOverview'));
        $abouttvet->publicTvetColleges=nl2br($request->input('publicTvetColleges'));
        $abouttvet->tvetCollegeAdministration=nl2br($request->input('tvetCollegeAdministration'));
        $abouttvet->privateTvetColleges=nl2br($request->input('privateTvetColleges'));
        $abouttvet->save(); 

        $abouttvet->fill($request->post())->save();

        return redirect()->route('adminAbouttvet.index')->with('success','About Tvet Has Been updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Abouttvet  $abouttvet
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $abouttvet = AboutTvet::findOrFail($id);
        $abouttvet->delete();
        return redirect()->route('adminAbouttvet.index')->with('success','About Tvet has been deleted successfully');
    }
}
