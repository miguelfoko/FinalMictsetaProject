@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="pull-right">
            <a class="btn btn-success" href="{{ route('collegecalendar.index') }}"> Back</a>
        </div>
    </div> 
<!-- new content-->

<div class="container mt-2">
        <div class="row">
            <div class="col-lg-12 margin-tb">
                <div class="pull-left mb-2"> 
                    <h2>Add College Calendar</h2>
                </div>
            </div>
        </div>
        @if(session('status'))
        <div class="alert alert-success mb-1 mt-1">
            {{ session('status') }}
        </div> 
        @endif
        <form action="{{ route('collegecalendar.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row"> 
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Event Title:</strong>
                        <input type="text" name="eventtitle" class="form-control" placeholder="Event title">
                        @error('eventtitle')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div>
                    Starting date: 
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <select name="startyear" >
                                {{ $last= date('Y')-120 }}
                                {{ $now = date('Y') }}
                                <option >Year</option>
                                @for ($i = $now; $i >= $last; $i--)
                                    <option value="{{ $i }}">{{ $i }}</option>
                                @endfor
                            </select>
                            @error('startyear')
                            <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                            @enderror - 
                            <select name="startmonth" >
                                <option >Start Month</option>
                                <option value="01">January</option>
                                <option value="02">February</option>
                                <option value="03">March</option>
                                <option value="04">April</option>
                                <option value="05">May</option>
                                <option value="06">June</option>
                                <option value="07">July</option>
                                <option value="08">August</option>
                                <option value="09">September</option>
                                <option value="10">October</option>
                                <option value="11">November</option>
                                <option value="12">December</option>                            
                            </select>
                            @error('startmonth')
                            <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                            @enderror -
                            <select  name="startday" >
                                {{ $last= 1 }}
                                {{ $now = 31 }}
                                <option >Start day</option>
                                @for ($i = $last; $i <= $now; $i++)
                                    <option value="{{ $i }}">{{ $i }}</option>
                                @endfor
                            </select>
                            @error('startday')
                            <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                            @enderror

                            @error('publicationYear')
                            <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                </div>
<br>

<div>
                    Ending date: 
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <select name="endyear" >
                                {{ $last= date('Y')-120 }}
                                {{ $now = date('Y') }}
                                <option >Start Year</option>
                                @for ($i = $now; $i >= $last; $i--)
                                    <option value="{{ $i }}">{{ $i }}</option>
                                @endfor
                            </select>
                            @error('endyear')
                            <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                            @enderror - 
                            <select name="endmonth" >
                                <option >End Month</option>
                                <option value="01">January</option>
                                <option value="02">February</option>
                                <option value="03">March</option>
                                <option value="04">April</option>
                                <option value="05">May</option>
                                <option value="06">June</option>
                                <option value="07">July</option>
                                <option value="08">August</option>
                                <option value="09">September</option>
                                <option value="10">October</option>
                                <option value="11">November</option>
                                <option value="12">December</option>                         
                            </select>
                            @error('endmonth')
                            <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                            @enderror -
                            <select  name="endday" >
                                {{ $last= 1 }}
                                {{ $now = 31 }}
                                <option >End day</option>
                                @for ($i = $last; $i <= $now; $i++)
                                    <option value="{{ $i }}">{{ $i }}</option>
                                @endfor
                            </select>
                            @error('endday')
                            <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                            @enderror
<br><br>
                            @error('publicationYear')
                            <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                </div>

            </div>
    
            <button type="submit" class="btn btn-primary ml-3">Submit</button>

        </form>
    </div>
    <br><br>
    <div class="container">
        <div class="pull-right">
            <a class="btn btn-success" href="{{ route('collegecalendar.index') }}"> Back</a>
        </div>
    </div> 

@endsection