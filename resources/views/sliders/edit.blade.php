@extends('layouts.app')

@section('content')

{{ Form::model($slider, array('route' => array('slides.update', $slider->id), 'method' => 'PUT', 'files' => true)) }}

{{Form::label('title', 'Title')}}
{{Form::text('title', null, array('class' => 'form-control'))}}
<br>
<p>The image Dimensions should be as follows: 
                            <ul>
                                <li> Horizontal: 1900 px
                                <li> Vertical: 400 px 
                                <li> Size: 1 Mo Maximum
                            </ul>
              </p>
{{Form::label('photo', 'Photo')}}
{{Form::file('photo', array('class' => 'form-control'))}}

<br>
<img src="{{url('images')}}/{{$slider->photo}}" alt="image">

<br><br><br>

{{ Form::submit('Update Slide', array('class' => 'btn btn-success')) }}

{{Form::close()}}


@endsection