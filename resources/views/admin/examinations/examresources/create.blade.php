@extends('layouts.app')

@section('content')
<!-- new content-->

<div class="container mt-2">
        @if(session('status'))
        <div class="alert alert-success mb-1 mt-1">
            {{ session('status') }}
        </div> 
        @endif
        <form action="{{ route('examinformationresources.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title"><strong>Add Examination Information and Resource</strong></h3>
                    <ul class="panel-controls">
                        <li><a href="/examinformationresources" class="panel-remove"><span class="fa fa-times"></span></a></li>
                    </ul>
                </div>
                <div class="panel-body">
                    <p>Fill the form below to add new examination Information and Resource.</p>
                </div>
                <div class="panel-body">
                    <div class="row"> 
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group"> 
                                <strong>Category:</strong>
                                <select  name="category" class="form-control ">
                                    <option value="Exam_Entry_Form">Exam Entry Form</option>
                                    <option value="Examination_Re_Marking">Examination Re-Marking</option>
                                    <option value="Examination_Time_table">Examination Timetable</option>
                                    <option value="General_Items">General Items</option>
                                    <option value="Icass_Support_Documents">ICASS Support Documents</option>
                                    <option value="Management_Action_Planning">Management Action Planning</option>
                                    <option value="Validation_Programmes">Validation Programmes</option>
                                </select>
                                @error('category')
                                <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>Name:</strong>
                                <input type="text" name="name" class="form-control" >
                                @error('name')
                                <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                            <strong>File:</strong>
                                <input type="file" name="file" class="form-control" >
                                @error('file')
                                <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                    </div>
                </div>
                <div class="panel-footer">
                    <label class="col-md-5 col-xs-12 control-label"></label>
                    <button type="submit" class="btn btn-success ml-3">Submit</button>
                    <a class="btn btn-danger" href="{{ route('examinformationresources.index') }}"> Cancel</a>
                </div>
            </form>
        </form>
    </div>
    <div class="container">
        <div class="pull-right">
            <a class="btn btn-success" href="{{ route('examinformationresources.index') }}"> Back</a>
        </div>
    </div> 

@endsection