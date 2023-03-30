<?php

namespace App\Http\Controllers;
use App\Models\Faqs;
use Auth;

use Illuminate\Http\Request;

class FaqsController extends Controller
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
        $faqs = Faqs::orderBy('id','desc')->paginate(5);
        return view('admin.faqs.index', compact('faqs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.faqs.create');
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
            'content' => 'required'
        ]);

        $faqs = new Faqs;
        $faqs->title=$request->input('title');
        $faqs->content=nl2br($request->input('content'));
        $faqs->user_id=Auth::user()->id;
        $faqs->save();
        return redirect()->route('faqs.index')->with('success','FAQ has been created successfully.');
    
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $faqs = Faqs::find($id);

        return view('faqs.show',compact('faqs')); 

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $faqs = Faqs::find($id);
        return view('admin.faqs.edit',compact('faqs'));

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
        $faqs = Faqs::find($id);

        $request->validate([
            'title' => 'required',
            'content' => 'required'
        ]);

        $faqs->title=$request->input('title');
        $faqs->content=nl2br($request->input('content'));
        $faqs->user_id=Auth::user()->id;
        $faqs->save();
        
        $faqs->fill($request->post())->save();
        return redirect()->route('faqs.index')->with('success','FAQ has been Updated successfully.');
    
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $faqs = Faqs::find($id);
        $faqs->delete();
        return redirect()->route('faqs.index')->with('success','FAQ has been deleted successfully');
   
    }
}
