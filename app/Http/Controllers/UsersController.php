<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;
use File;
use Auth; 
class UsersController extends Controller
{
    
    /**
     * Create a user controller instance.
     *
     * @return void
     */ 
    public function __construct()
    {
        $this->middleware('auth');
    }
     
    /**
    * Display a listing of users.
    *
    * @return \Illuminate\Http\Response
    */
    public function index()
    {
        $users = User::orderBy('id','desc')->paginate(5);
        return view('admin.users.index', compact('users'));
    }

    /**
    * Show the form for creating a user.
    *
    * @return \Illuminate\Http\Response
    */
    public function create()
    {
        return view('admin.users.create');
    }

    /**
    * Store a newly created resource in storage.
    *
    * @param  \Illuminate\Http\Request  $request
    * @return \Illuminate\Http\Response
    */
    public function store(Request $request)
    {
       
    } 

    /**
    * Display the specified resource.
    *
    * @param  \App\User  $users
    * @return \Illuminate\Http\Response
    */
    public function show(User $id)
    {
        $users = User::find($id);

        return view('users.show',compact('users'));
    }

    /**
    * Show the form for editing the specified resource.
    *
    * @param  \App\User  $users
    * @return \Illuminate\Http\Response
    */
    public function edit(User $users)
    {
        return view('admin.users.edit',compact('users')); 
    }

    /**
    * Show the form for editing the specified resource.
    *
    * @param  \App\User  $users
    * @return \Illuminate\Http\Response
    */
    public function validateUser(User $id)
    {
        return view('admin.users.index', compact('users'));
    }

    /**
    * Update the specified resource in storage.
    *
    * @param  \Illuminate\Http\Request  $request
    * @param  \App\users  $users
    * @return \Illuminate\Http\Response
    */
    public function update(Request $request, User $users)
    {
        
    }

    /**
    * Remove the specified resource from storage.
    *
    * @param  \App\User  $users
    * @return \Illuminate\Http\Response
    */
    public function destroy(User $users)
    {
        
    }
}
