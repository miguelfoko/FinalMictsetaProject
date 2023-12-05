@extends('layouts.app')

@section('content')

{{ Form::model($slider, array('route' => array('slides.update', $slider->id, 'class' => 'form-horizontal'), 'method' => 'PUT', 'files' => true)) }}
<div class="panel panel-default">
    <div class="panel-heading">
        <h3 class="panel-title"><strong>Edit Slide</strong></h3>
    </div>
    <div class="panel-body">
        <p>Fill the form below to edit the selected slide.</p>
    </div>
    <div class="panel-body"> 
        <div class="form-group">
            {{Form::label('title', 'Title')}}
            <div class="col-md-6 col-xs-12">
                <div class="input-group">
                    <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                    {{ Form::text('title', null, array('class' => 'form-control')) }}
                </div>
                <span class="help-block"><p>The image Dimensions should be as follows: 
                    <ul>
                        <li> Horizontal: 1900 px
                        <li> Vertical: 400 px 
                        <li> Size: 1 Mo Maximum
                    </ul>
                </p></span>
            </div>
        </div>
        <div class="form-group">
            {{Form::label('photo', 'Photo', array('class' => 'col-md-3 col-xs-12 control-label'))}}
            <div class="col-md-6 col-xs-12">
                {{Form::file('photo', array('class' => 'form-control'))}}
            </div>
        </div>
        <img src="{{url('images')}}/{{$slider->photo}}" alt="image">
    </div>
    <div class="panel-footer">
        {{ Form::label('', '', array('class' => 'col-md-3 col-xs-12 control-label')) }}
        {{ Form::submit('Update Slide', array('class' => 'btn btn-success')) }}
        <a class="btn btn-danger" href="/slides"> Cancel</a>
    </div>
</div>

{{Form::close()}}


@endsection