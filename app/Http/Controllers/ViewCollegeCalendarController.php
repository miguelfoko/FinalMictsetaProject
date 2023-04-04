<?php

namespace App\Http\Controllers;
use App\Models\CollegeCalendar; 

use Illuminate\Http\Request;

class ViewCollegeCalendarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response 
     */
    public function index()
    {
        $Events = array
            (
            "0" => array
                        (
                        "title" => "Event One",
                        "start" => "2023-04-05",
                        "end" => "2023-04-10",
                        ),
            "1" => array
                        (
                        "title" => "Event Two",
                        "start" => "2023-04-03",
                        )
            );
        $Events = [];
        $collegecalendar = CollegeCalendar::orderBy('id','desc')->paginate(5);

        foreach($collegecalendar as $colcalendar) {
            $Events[]=['title'=>$colcalendar->eventtitle,
                              'start'=>$colcalendar->startdate,
                              'end'=>$colcalendar->enddate];
         }

        return view('viewCollegeCalendar',compact('collegecalendar','Events'));
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
        //
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
