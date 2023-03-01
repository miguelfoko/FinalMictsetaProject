<?php

namespace App\Http\Controllers;
use App\Models\Footer;
use File;
use Form;
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
        $footer = Footer::orderby('id', 'desc')->paginate(10);
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
    public function store(Request $request)
    {
        $this->validate($request, array(
            'title'=>'required|max:225',
          ));
          $footer = new Footer;
          $footer->title = $request->input('title');
          $footer->save();
          return redirect()->route('footer.index');
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
         'title'=>'required|max:225',
      ));

       $footer = Footer::where('id',$id)->first();

       $footer->title = $request->input('title');


      $footer->save();

      return redirect()->route('footer.index',
          $footer->id)->with('success',
          'Footer, '. $footer->title.' updated');
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

        return redirect()->route('footer.index')
                ->with('success',
                'Footer successfully deleted');
    }

    public function updateFooterContent(Request $request){

    }

    public function editFooterContent($id){
        
    }

    public function showFooterContent($id){
        
    }

    public function storeFooterContent(Request $request){
        
    }

    public function createFooterContent(){
        return  view ('admin.footer.createFooterContent');
    }
}
