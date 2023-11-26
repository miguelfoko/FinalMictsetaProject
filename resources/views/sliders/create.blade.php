@extends('layouts.app')

@section('content')

{{ Form::open(array('route' => 'slides.store', 'files' => true, 'class' => 'form-horizontal')) }}
<div class="panel panel-default">
  <div class="panel-heading">
      <h3 class="panel-title"><strong>Add Slide</strong></h3>
      <ul class="panel-controls">
          <li><a href="/slides" class="panel-remove"><span class="fa fa-times"></span></a></li>
      </ul>
  </div>
  <div class="panel-body">
      <p>Fill the form below to add a new slide.</p>
  </div>
  <div class="panel-body"> 
    <div class="form-group">
      {{ Form::label('title', 'Title', array('class' => 'col-md-3 col-xs-12 control-label')) }}
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
      {{ Form::label('title', 'Photo', array('class' => 'col-md-3 col-xs-12 control-label')) }}
      <div class="col-md-6 col-xs-12">
        {{ Form::file('photo', array('class' => 'btn-primary')) }}
      </div>
    </div>
  </div>
  <div class="panel-footer">
      {{ Form::label('', '', array('class' => 'col-md-3 col-xs-12 control-label')) }}
      {{ Form::submit('Add', array('class' => 'col-md-3 col-xs-12 btn btn-success')) }}
  </div>
</div>
{{ Form::close() }}


@endsection