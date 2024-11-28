@extends('layouts.app')

@section('content')
    <!--<div class="container">
        <div class="pull-right">
            <a class="btn btn-success" href="home"> Back</a>
        </div>
    </div> -->

<!-- new content-->
    <!-- PAGE TITLE -->
    <div class="page-title">                    
    <h2><span class="fa fa-user"></span> Users</h2>
    </div>
    <!-- END PAGE TITLE -->                
    
    <!-- PAGE CONTENT WRAPPER -->
    <div class="page-content-wrap">
    
        
        
        <div class="row">
            <div class="col-md-12">
                
                <!-- START DATATABLE EXPORT -->
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">Users</h3>
                        <div class="btn-group pull-right">
                            <!--<a class="btn btn-success" href="/viewCreateUser"><i class="fa fa-plus"></i> Add User</a>-->
                        </div>                                    
                        
                    </div>
                    <div class="panel-body">
                        <div class="table-responsive">
                            @if ($message = Session::get('success'))
                                <div class="alert alert-success">
                                    <p>{{ $message }}</p>
                                </div>
                            @endif
                            @if ($message = Session::get('error'))
                                <div class="alert alert-danger">
                                    <p>{{ $message }}</p>
                                </div>
                            @endif
                            <table id="tableElements" class="table datatable">
                                <thead>
                                    <tr>
                                        <th>user ID</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>email verified Date</th>
                                        <th>User status</th>
                                        <th width="280px">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($users as $user)
                                        <tr heigh=100px>
                                            <td width=5%>{{ $user->id }}</td>
                                            <td>{{ $user->name }}</td>
                                            <td>{!! $user->email !!}</td>
                                            <td>{{$user->email_verified_at}}</td>
                                            @if($user->user_status =='Disabled')         
                                                <td><font color="red">{{$user->user_status}}</font></td>         
                                            @else
                                                <td><font color="green">{{$user->user_status}}</font></td>        
                                            @endif
                                            <td>
                                                <form action="{{ route('users.destroy',Crypt::encrypt($user->id)) }}" method="Post">
                                                    <a class="btn btn-primary" href="{{ route('users.edit',Crypt::encrypt($user->id)) }}">Edit</a>
                                                    @if($user->user_status =='Disabled' && Auth::user()->is_admin ==true) 
                                                        <a class="btn btn-success" href="/validateUser/{{Crypt::encrypt($user->id)}}">Validate</a>
                                                    @endif
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger">Delete</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody> 
                            </table>  
                            {{ $users->links() }}                                
                        </div>
                    </div>
                </div>
                <!-- END DATATABLE EXPORT -->                            
            </div>
        </div>

    </div>         
    <!-- END PAGE CONTENT WRAPPER -->
   
    <!--<div class="container">
        <div class="pull-right">
            <a class="btn btn-success" href="updateHomePage"> Back</a>
        </div>
    </div> -->

@endsection