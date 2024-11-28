@extends('layouts.app')

@section('content')

   <!-- <div class="container">
        <div class="pull-right">
            <a class="btn btn-success" href="updateHomePage"> Back</a>
        </div>
    </div> -->

<!-- new content-->
    <!-- PAGE TITLE -->
<div class="page-title">                    
    <h2><span class="fa fa-bookmark-o"></span> Footer Elements</h2>
    </div>
    <!-- END PAGE TITLE -->                
    
    <!-- PAGE CONTENT WRAPPER -->
    <div class="page-content-wrap">
    
        
        
        <div class="row">
            <div class="col-md-12">
                
                <!-- START DATATABLE EXPORT -->
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">Footer elements</h3>
                        <div class="btn-group pull-right">
                            <a class="btn btn-success" href="/viewCreateFooter"><i class="fa fa-plus"></i>Create Footer element</a>
                           
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
                                        <th width="1%">S.No</th>
                                        <th>Purpose</th>
                                        <th>Content</th>
                                        <th>Additional Help</th>
                                        <th>List Of Accronyms</th>
                                        <th>Copyright</th>
                                        <th>Disclaimer</th>
                                        <th width="200px">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($footer as $foot)
                                        <tr heigh=100px>
                                            <td >{{ $foot->id }}</td>
                                            <td >{!! $foot->purpose !!}</td>
                                            <td >{!! $foot->content !!}</td>
                                            <td >{!! $foot->additionalHelp !!}</td>
                                            <td >{!! $foot->listOfAccronyms !!}</td>
                                            <td >{!! $foot->copyright !!}</td>
                                            <td >{!! $foot->disclaimer !!}</td>
                                            <td>
                                                <form action="{{ route('footer.destroy',$foot->id) }}" method="Post">
                                                    <a class="btn btn-primary" href="{{ route('footer.edit',$foot->id) }}">Edit</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger">Delete</button>
                                                </form>

                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>  
                            {{ $footer->links() }}                                  
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
