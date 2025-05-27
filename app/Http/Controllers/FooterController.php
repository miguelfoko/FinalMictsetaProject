<?php

namespace App\Http\Controllers;
use App\Models\Footer;
use File;
use Form; 
use Auth;
use Illuminate\Support\Facades\Storage;

use Illuminate\Http\Request;

class FooterController extends Controller
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
        $footer = Footer::orderby('id', 'desc')->paginate(1);
        return view('admin.footer.index', compact('footer'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return  view ('admin.footer.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request){
        $this->validate($request, array(
            'purpose'=>'required',
            'content'=>'required',
            'additionalHelp'=>'required',
            'listOfAccronyms'=>'required',
            'copyright'=>'required',
            'disclaimer'=>'required'
          ));
          
          $footer = new Footer;
          $footer->purpose = nl2br($request->input('purpose'));
          $footer->content = nl2br($request->input('content')); 
          $footer->additionalHelp = nl2br($request->input('additionalHelp')); 
          $footer->listOfAccronyms = nl2br($request->input('listOfAccronyms')); 
          $footer->copyright = nl2br($request->input('copyright')); 
          $footer->disclaimer = nl2br($request->input('disclaimer')); 
          $footer->user_id=Auth::user()->id;
          $footer->save();
          return redirect()->route('footer.index')->with('success','Footer Has Been updated successfully');
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
        $footer = Footer::findOrFail($id);
        return view('admin.footer.edit', compact('footer'));
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
        $footer = Footer::find($id);
       $this->validate($request, array(
        'purpose'=>'required',
        'content'=>'required',
        'additionalHelp'=>'required',
        'listOfAccronyms'=>'required',
        'copyright'=>'required',
        'disclaimer'=>'required'
      ));

       $footer = Footer::where('id',$id)->first();

        $footer->purpose = nl2br($request->input('purpose'));
        $footer->content = nl2br($request->input('content')); 
        $footer->additionalHelp = nl2br($request->input('additionalHelp')); 
        $footer->listOfAccronyms = nl2br($request->input('listOfAccronyms')); 
        $footer->copyright = nl2br($request->input('copyright')); 
        $footer->disclaimer = nl2br($request->input('disclaimer')); 
       $footer->user_id=Auth::user()->id;

      $footer->save();

      return redirect()->route('footer.index',$footer->id)->with('success','Footer Has Been updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $footer = Footer::findOrFail($id);

        $footer->delete();

        return redirect()->route('footer.index')->with('success','Footer successfully deleted');
    }

}
