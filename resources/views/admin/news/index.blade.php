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
    <h2><span class="fa fa-info"></span> News</h2>
    </div>
    <!-- END PAGE TITLE -->                
    
    <!-- PAGE CONTENT WRAPPER -->
    <div class="page-content-wrap">
    
        
        
        <div class="row">
            <div class="col-md-12">
                
                <!-- START DATATABLE EXPORT -->
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">News</h3>
                        <div class="btn-group pull-right">
                            <a class="btn btn-success" href="/viewCreateNews"><i class="fa fa-plus"></i> Add News</a>
                        </div>                                    
                        
                    </div>
                    <div class="panel-body">
                        <div class="table-responsive">
                            @if ($message = Session::get('success'))
                                <div class="alert alert-success">
                                    <p>{{ $message }}</p>
                                </div>
                            @endif
                            <table id="tableElements" class="table datatable">
                                <thead>
                                    <tr>
                                        <th>S.No</th>
                                        <th>News title</th>
                                        <th>News content</th>
                                        <th>Publication Date</th>
                                        <th>Youtube link</th>
                                        <th>News picture</th>
                                        <th width="280px">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($news as $new)
                                        <tr heigh=100px>
                                            <td width=5%>{{ $new->id }}</td>
                                            <td>{{ $new->title }}</td>
                                            <td>{!! $new->content !!}</td>
                                            <td>{{$new->publicationDate}}</td>
                                            <td><a href="{!! $new->link !!}">{!! $new->link !!}</a></td>
                                            <td>
                                                <a href="{{ asset('/images/'.$new->picture) }}" target="_blank">View File</a>
                                            </td>
                                            <!--<td width="20%"><img src="{{ asset('/images/'.$new->picture) }}" alt="" class="img-fluid"> </td>-->
                                            <td>
                                                <form action="{{ route('news.destroy',$new->id) }}" method="Post">
                                                    <a class="btn btn-primary" href="{{ route('news.edit',$new->id) }}">Edit</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger">Delete</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody> 
                            </table>  
                            {{ $news->links() }}                                
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