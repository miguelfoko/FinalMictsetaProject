<?php

namespace App\Http\Controllers;
use App\Models\Footer;
use App\Models\FooterContent;
use File;
use Form;

use Illuminate\Http\Request;

class FooterContentController extends Controller
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
        $footerContent = FooterContent::orderby('id', 'desc')->paginate(10);
        return view('admin.footer.indexFooterContent', compact('footerContent'));
    }

    /**
     * Show the form for creating a new resource.
     *
     *      * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $footerElement = Footer::pluck('title', 'id');
        return  view ('admin.footer.createFooterContent', compact('footerElement'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, array(
            'value'=>'required',
          ));
          $footerContent = new FooterContent;
          $footerContent->value = $request->input('value');
          $footerContent->footer_id = $request->input('footer_id');
          $footerContent->save();
          return redirect()->route('footerContent.index');
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
        $footerContent = FooterContent::findOrFail($id);
        $footerElement = Footer::pluck('title', 'id');
        return view('admin.footer.editFooterContent', compact('footerContent','footerElement'));
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
        $footerContent = FooterContent::find($id);
       $this->validate($request, array(
         'value'=>'required',
         'footer_id'=>'required',
      ));

       $footerContent = FooterContent::where('id',$id)->first();

       $footerContent->value = $request->input('value');
       $footerContent->footer_id = $request->input('footer_id');


      $footerContent->save();

      return redirect()->route('footerContent.index',
          $footerContent->id)->with('success',
          'Footer, '. $footerContent->value.' updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $footerContent = FooterContent::findOrFail($id);

        $footerContent->delete();

        return redirect()->route('footerContent.index')
                ->with('success',
                'Footer Content successfully deleted');
    }
}
