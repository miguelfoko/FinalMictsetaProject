<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\News;
class ViewNewsController extends Controller
{
    public function index()
    {
        $news = News::orderBy('id','desc')->paginate(5);
        return view('news', compact('news'));
    }
}
