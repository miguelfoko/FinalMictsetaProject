<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\News;
class ViewNewsController extends Controller
{
    public function index()
    {
        $news = News::orderBy('id','desc')->paginate(55);
        return view('news', compact('news'));
    }
 
    public function show($id)
    {
        $news = News::find($id);
        return view('specificNews',compact('news'));
    }
}
