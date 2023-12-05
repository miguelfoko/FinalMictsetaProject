@extends('layouts.app')

@section('content')
    <!--<div class="container">
        <div class="pull-right">
            <a class="btn btn-success" href="updateContactUs"> Back</a>
        </div>
    </div> -->

<!-- new content-->
    <!-- PAGE TITLE -->
    <div class="page-title">                    
    <h2><span class="fa fa-check-square"></span> Frequently Asked Questions (FAQs)</h2>
    </div>
    <!-- END PAGE TITLE -->                
    
    <!-- PAGE CONTENT WRAPPER -->
    <div class="page-content-wrap">
    
        
        
        <div class="row">
            <div class="col-md-12">
                
                <!-- START DATATABLE EXPORT -->
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">Frequently Asked Questions (FAQs)</h3>
                        <div class="btn-group pull-right">
                            <a class="btn btn-success" href="/viewCreateFaq"><i class="fa fa-plus"></i> Create FAQ</a>
                            <button class="btn btn-danger dropdown-toggle" data-toggle="dropdown"><i class="fa fa-bars"></i> Export Data</button>
                            <ul class="dropdown-menu">
                                <li><a href="#" onClick ="$('#footerElements').tableExport({type:'sql'});"><img src='adminResources/img/icons/sql.png' width="24"/> SQL</a></li>
                                <li class="divider"></li>
                                <li><a href="#" onClick ="$('#footerElements').tableExport({type:'csv',escape:'false'});"><img src='adminResources/img/icons/csv.png' width="24"/> CSV</a></li>
                                <li><a href="#" onClick ="$('#footerElements').tableExport({type:'txt',escape:'false'});"><img src='adminResources/img/icons/txt.png' width="24"/> TXT</a></li>
                                <li class="divider"></li>
                                <li><a href="#" onClick ="$('#footerElements').tableExport({type:'excel',escape:'false'});"><img src='adminResources/img/icons/xls.png' width="24"/> XLS</a></li>
                            </ul>
                        </div>                                    
                        
                    </div>
                    <div class="panel-body">
                        <div class="table-responsive">
                            @if ($message = Session::get('success'))
                                <div class="alert alert-success">
                                    <p>{{ $message }}</p>
                                </div>
                            @endif
                            <table id="footerElements" class="table datatable">
                                <thead>
                                    <tr>
                                        <th width="1%">S.No</th>
                                        <th>Title</th>
                                        <th>Content</th>
                                        <th width="200px">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($faqs as $faq)
                                        <tr heigh=100px>
                                            <td >{{ $faq->id }}</td>
                                            <td >{{ $faq->title }}</td>
                                            <td >{!! $faq->content !!}</td>
                                            
                                            <td >
                                                <form action="{{ route('faqs.destroy',$faq->id) }}" method="Post">
                                                    <a class="btn btn-primary" href="{{ route('faqs.edit',$faq->id) }}">Edit</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger">Delete</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>  
                            {{ $faqs->links() }}                                
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