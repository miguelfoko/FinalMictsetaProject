@extends('layouts.app')

@section('content')

{{ Form::open(array('route' => 'slides.store', 'files' => true)) }}

  {{ Form::label('title', 'Title') }}

  {{ Form::text('title', null, array('class' => 'form-control')) }}

  <br><br>
  {{ Form::label('photo', 'Photo') }}

  {{ Form::file('photo', array('class' => 'form-control')) }}

  <br><br>
  {{ Form::submit('Add', array('class' => 'pull-right btn btn-primary')) }}

{{ Form::close() }}


@endsection