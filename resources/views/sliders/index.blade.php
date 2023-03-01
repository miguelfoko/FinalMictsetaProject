@extends('layouts.app')

@section('content')

<div class="container">
        <div class="pull-right">
            <a class="btn btn-success" href="updateHomePage"> Back</a>
        </div>
    </div> 
    
<div class="container mt-2">
        <div class="row">
            <div class="col-lg-12 margin-tb">
                <div class="pull-left">
                    <h2>Slider's Image</h2>
                </div>
                <div class="pull-right mb-2">
                    <a class="btn btn-success" href="{{ route('slides.create') }}"> Create Slide</a>
                </div>
            </div>
        </div>

        <div style="margin-top:30px;">

@foreach($sliders as $slider)

    <img src="{{url('images')}}/{{$slider->photo}}" alt="{{$slider->title}}" width="100%" height="300">

<a href="{{ route('slides.edit', $slider->id) }}" class="btn btn-block btn-info">Edit</a>


{!! Form::open(['method' => 'DELETE', 'route' => ['slides.destroy', $slider->id] ]) !!}
  <button class="btn btn-block btn-danger" type="submit">Delete</button>
{!! Form::close() !!}

<br>

@endforeach
</div>

</div>

    <div class="container">
        <div class="pull-right">
            <a class="btn btn-success" href="updateHomePage"> Back</a>
        </div>
    </div> 



@endsection