@extends('layouts.app')

@section('content')

{{ Form::open(array('route' => 'slides.store', 'files' => true)) }}

  {{ Form::label('title', 'Title') }}

  {{ Form::text('title', null, array('class' => 'form-control')) }}

  <br><br>
  <p>The image Dimensions should be as follows: 
                            <ul>
                                <li> Horizontal: 1900 px
                                <li> Vertical: 400 px 
                                <li> Size: 1 Mo Maximum
                            </ul>
              </p>
  {{ Form::label('photo', 'Photo') }}

  {{ Form::file('photo', array('class' => 'form-control')) }}

  <br><br>
  {{ Form::submit('Add', array('class' => 'pull-right btn btn-primary')) }}

{{ Form::close() }}


@endsection