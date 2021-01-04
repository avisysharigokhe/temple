@extends('backend.layout.main')
@section('title','| History ')
@section('style')
@endsection

@section('content')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">

        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">History</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <!-- <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Events</li> -->
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
        
        @if(Session::has('danger'))
       <div class="alert alert-danger alert-dismissible">
        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
        <strong>Danger!</strong> {{ Session::get('message') }}
      </div>
      @endif
       @if(Session::has('success'))

       <div class="alert alert-success alert-dismissible">
        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
        <strong>Success!</strong> {{ Session::get('message') }}
      </div>
      @endif
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->

         <div class="row">
          <div class="col-12">
            <div class="card custom-scroll">
              <div class="card-header">
              <a href="{{url('/add_temple_history')}}"><button class='btn btn-primary pull-right '><i class="fa fa-plus"></i> Add History</button> </a>
            </div>
              <div class="card-body">
                <div class="table-responsive">
                <table id="histories" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>No</th>
                    <th>History Title</th>
                    <th>History Photo</th>
                    <th>History Description</th>
                    <th>Created</th>
                    <th>Updated</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
                    @php
                    $i = 1;
                    @endphp
                  @foreach($history as $row)
                  <tr>
                    <td>{{$i++}}</td>
                    <td>{{$row->title}}</td>
                    <td><img class="direct-chat-img" src="{{$row->photos}}" alt="History Photo"></td>
                    <td><a class="btn btn-sm btn-default" href="javasctipt:void(0)" onclick="show_detail(this)" data-toggle="modal" data-target="#view_more_event_modal" title="View Detail" data-id="{{$row->id}}" data-title="{{$row->title}}"  data-description="{{$row->description}}" data-photo="{{$row->photos}}" >Read More</a></td>
                    
                    <td> {{date('d-M-y g:i a',strtotime($row->created_at))}}</td>
                    <td> {{!empty($row->updated_at) ? date('d-M-y g:i a',strtotime($row->updated_at)) : '' }} </td>
                    <td>
                      <a href="javasctipt:void(0)"  data-toggle="modal" data-target="#edit_event_modal" data-id="{{$row->id}}" data-title="{{$row->title}}"  data-description="{{$row->description}}" data-photo="{{$row->photos}}"  onclick="set_event_data(this)" title="Edit"><button class="btn btn-sm btn-info"><i class="fas fa-edit"></i></button></a> 
                      
                      <a href="javasctipt:void(0)"  class="delete_history" data-id="{{$row->id}}" title="Delete"><button class="btn btn-sm btn-danger"><i class="fas fa-trash"></i></button></a>
                      
                    </td>
                  </tr>

                  @endforeach
                   
                  
                </table>
              </div>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
        <!-- Main row -->
       
        <!-- /.row (main row) -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  
  <!-- /.content-wrapper -->


@endsection

@section('script')

@endsection