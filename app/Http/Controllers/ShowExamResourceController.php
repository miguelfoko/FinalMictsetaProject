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
                $category="Exam Entry Form";
                $examresources = ExamResources::where('category','Exam_Entry_Form')->paginate(500);
                break;
            case 2:
                $category="Examination Re-Marking";
                $examresources = ExamResources::where('category','Examination_Re_Marking')->paginate(500);
                break;
            case 3:
                $category="Examination Timetable";
                $examresources = ExamResources::where('category','Examination_Time_table')->paginate(500);
                break;
            case 4:
                $category="General Items";
                $examresources = ExamResources::where('category','General_Items')->paginate(500);
                break;
            case 5:
                $category="ICASS Support Documents";
                $examresources = ExamResources::where('category','Icass_Support_Documents')->paginate(500);
                break;
            case 6:
                $category="Management Action Planning";
                $examresources = ExamResources::where('category','Management_Action_Planning')->paginate(500);
                break;
            case 7:
                $category="Validation Programmes";
                $examresources = ExamResources::where('category','Validation_Programmes')->paginate(500);
                break;
            default:
                $category="Exam Entry Form";
                $examresources = ExamResources::where('category','Exam_Entry_Form')->paginate(500);
        } 
        return view('showExamResourceInformationFiles',compact('examresources','cat','category')); 
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
