<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\News;
use File;
use Auth;
class NewsController extends Controller
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
        $news = News::orderBy('id','desc')->paginate(5);
        return view('admin.news.index', compact('news'));
    }

    /**
    * Show the form for creating a new resource.
    *
    * @return \Illuminate\Http\Response
    */
    public function create()
    {
        return view('admin.news.create');
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
            'subtitle' => 'required',
            'content' => 'required',
            'picture' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:9000',
        ]);

        $imageName = time().'.'.$request->picture->extension();  
        
        $request->picture->move(public_path('images'), $imageName);

        $news=new News;
        $news->title=$request->input('title');
        $news->subtitle=$request->input('subtitle');
        $news->content=nl2br($request->input('content'));
        $news->picture=$imageName;
        $news->user_id=Auth::user()->id;
        $news->save();
        return redirect()->route('news.index')->with('success','News has been created successfully.')
        ->with('image',$imageName);
    } 

    /**
    * Display the specified resource.
    *
    * @param  \App\news  $news
    * @return \Illuminate\Http\Response
    */
    public function show(News $news)
    {
        return view('news.show',compact('news'));
    }

    /**
    * Show the form for editing the specified resource.
    *
    * @param  \App\News  $news
    * @return \Illuminate\Http\Response
    */
    public function edit(News $news)
    {
        return view('admin.news.edit',compact('news'));
    }

    /**
    * Update the specified resource in storage.
    *
    * @param  \Illuminate\Http\Request  $request
    * @param  \App\news  $news
    * @return \Illuminate\Http\Response
    */
    public function update(Request $request, News $news)
    {
        $request->validate([
            'title' => 'required',
            'subtitle' => 'required',
            'content' => 'required',
            'picture' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:9000',
        ]);
        $imageName=$news->picture;
        $file_path = "images/$imageName";
        unlink(public_path($file_path));

        
        $imageName = time().'.'.$request->picture->extension();
        $request->picture->move(public_path('images'), $imageName);

         
        //$news=new News;
        $news->title=$request->input('title');
        $news->subtitle=$request->input('subtitle');
        $news->content=nl2br($request->input('content'));
        $news->picture=$imageName;
        $news->save();


        
        $news->fill($request->post())->save();

        return redirect()->route('news.index')->with('success','News Has Been updated successfully')
        ->with('image',$imageName);
    }

    /**
    * Remove the specified resource from storage.
    *
    * @param  \App\News  $news
    * @return \Illuminate\Http\Response
    */
    public function destroy(News $news)
    {
        $imageName=$news->picture;
        $file_path = "images/$imageName"; 
        unlink(public_path($file_path));
        $news->delete();
        return redirect()->route('news.index')->with('success','News has been deleted successfully');
    }
}
