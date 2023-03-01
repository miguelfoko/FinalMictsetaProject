@extends('layouts.app')

@section('content')

{{ Form::model($footer, array('route' => array('footer.update', $footer->id), 'method' => 'PUT', 'files' => true)) }}

{{Form::label('title', 'Title')}}
{{Form::text('title', null, array('class' => 'form-control'))}}
<br>


<br><br><br>

{{ Form::submit('Update Footer', array('class' => 'btn btn-success')) }}

{{Form::close()}}


@endsection