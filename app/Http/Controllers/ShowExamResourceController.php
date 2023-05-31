<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ExamResources; 
class ShowExamResourceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $cat=$request->cat;
        switch($cat){
            case 1:
                $examresources = ExamResources::where('category','Exam_Entry_Form')->paginate(5);
                break;
            case 2:
                $examresources = ExamResources::where('category','Examination_Re_Marking')->paginate(5);
                break;
            case 3:
                $examresources = ExamResources::where('category','Examination_Time_table')->paginate(5);
                break;
            case 4:
                $examresources = ExamResources::where('category','General_Items')->paginate(5);
                break;
            case 5:
                $examresources = ExamResources::where('category','Icass_Support_Documents')->paginate(5);
                break;
            case 6:
                $examresources = ExamResources::where('category','Management_Action_Planning')->paginate(5);
                break;
            case 7:
                $examresources = ExamResources::where('category','Validation_Programmes')->paginate(5);
                break;
            default:
            $examresources = ExamResources::where('category','Exam_Entry_Form')->paginate(5);
        } 
        return view('showExamResourceinformationFiles',compact('examresources','cat')); 
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
