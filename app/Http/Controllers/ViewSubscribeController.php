<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Subscribe;

class ViewSubscribeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response 
     */
    public function index()
    {
        //return view('viewSubscribe',compact('successstories'));
        return view('viewSubscribe');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
            'name' => 'required',
            'organisation' => 'required',
            'email' => 'required',
            'number' => 'required',
            'subject' => 'required',
            'message' => 'required'
        ]);

        $subscribe = new Subscribe;
        $subscribe->name=$request->input('name');
        $subscribe->organisation=$request->input('organisation');
        $subscribe->email=$request->input('email');
        $subscribe->number=$request->input('number');
        $subscribe->subject=$request->input('subject');
        $subscribe->message=nl2br($request->input('message'));

        $subscribe->save();
        return redirect()->route('viewsubscribe.index')->with('success','Subscription done successfully.');
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
