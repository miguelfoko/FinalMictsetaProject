<?php

namespace App\Http\Controllers;
use App\Models\CommunityColleges;
use Illuminate\Http\Request;
use Auth;

class CommunityCollegesController extends Controller
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
        $communitycolleges = CommunityColleges::orderBy('id','desc')->paginate(5);
        return view('admin.abouttvet.communitycolleges.index', compact('communitycolleges'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.abouttvet.communitycolleges.create');
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

        $communitycolleges=new CommunityColleges;
        $communitycolleges->content=nl2br($request->input('content'));
        $communitycolleges->user_id=Auth::user()->id;
        $communitycolleges->save();
        return redirect()->route('communitycolleges.index')->with('success','Community College Information has been created successfully.');
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
        $communitycolleges = CommunityColleges::findOrFail($id);
        return view('admin.abouttvet.communitycolleges.edit',compact('communitycolleges'));
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

        $communitycolleges = CommunityColleges::find($id);

        $request->validate([
            'content' => 'required'
        ]);

        $communitycolleges->content=nl2br($request->input('content'));
        $communitycolleges->user_id=Auth::user()->id;
        
        $communitycolleges->save();

        $communitycolleges->fill($request->post())->save();

        return redirect()->route('communitycolleges.index')->with('success','Community Colleges Information has Been updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $communitycolleges = CommunityColleges::findOrFail($id);
        $communitycolleges->delete();
        return redirect()->route('communitycolleges.index')->with('success','Community College Information has been deleted successfully');
    }
}
