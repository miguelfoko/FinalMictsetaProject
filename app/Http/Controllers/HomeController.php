<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Visitor;

class HomeController extends Controller
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
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $numberOfRegisteredUsers = User::count();
        $numberOfROnlineUsers = Visitor::count();
        return view('home', compact('numberOfRegisteredUsers', 'numberOfROnlineUsers'));
    }
}
