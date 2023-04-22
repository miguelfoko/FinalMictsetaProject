@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="pull-right">
            <a class="btn btn-success" href="updateContactUs"> Back</a>
        </div>
    </div> 

<!-- new content-->

<div class="container mt-2">
        <div class="row">
            <div class="col-lg-12 margin-tb">
                <div class="pull-left">
                    <h2>Regional Locations</h2>
                </div>
                <div class="pull-right mb-2">
                    <a class="btn btn-success" href="{{ route('regionallocations.create') }}"> Create Regional Location</a>
                </div>
            </div>
        </div>
        @if ($message = Session::get('success'))
            <div class="alert alert-success">
                <p>{{ $message }}</p>
            </div>
        @endif
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>S.No</th>
                    <th>Region</th>
                    <th>Principal</th>
                    <th>Principal emails</th>
                    <th>Principal Assistant</th>
                    <th>Principal Assistant Emails</th>
                    <th>Address</th>
                    <th>Website Address</th>
                    <th>City</th>
                    <th>Phone(s)</th>
                    <th>Latitude</th>
                    <th>Longitude</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($regionallocations as $regionallocation)
                    <tr heigh=100px>
                        <td >{{ $regionallocation->id }}</td>
                        <td >{{ $regionallocation->region }}</td>
                        <td >{{ $regionallocation->principal }}</td>
                        <td >{{ $regionallocation->principalEmails }}</td>
                        <td >{{ $regionallocation->principalAssistant }}</td>
                        <td >{{ $regionallocation->principalAssistantEmails }}</td>
                        <td >{{ $regionallocation->address }}</td>
                        <td >{{ $regionallocation->websiteAddress }}</td>
                        <td >{{ $regionallocation->city }}</td>
                        <td >{{ $regionallocation->phone }}</td>
                        <td >{{ $regionallocation->latitude }}</td>
                        <td >{{ $regionallocation->longitude }}</td>                        
                        <td >
                            <form action="{{ route('regionallocations.destroy',$regionallocation->id) }}" method="Post">
                                <a class="btn btn-primary" href="{{ route('regionallocations.edit',$regionallocation->id) }}">Edit</a>
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
            </tbody>
        </table>
        {{ $regionallocations->links() }}
    </div>

    <div class="container">
        <div class="pull-right">
            <a class="btn btn-success" href="updateContactUs"> Back</a>
        </div>
    </div> 
@endsection