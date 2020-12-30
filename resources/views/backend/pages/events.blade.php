@extends('backend.layout.main')
@section('title','| Events ')
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
            <h1 class="m-0 text-dark">Event</h1>
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
              <a href="{{url('/add-event')}}"><button class='btn btn-primary pull-right '><i class="fa fa-plus"></i> Add Event</button> </a>
            </div>
              <div class="card-body">
               <!--   <a href="{{url('/add-event')}}"><button class='btn btn-primary pull-right '><i class="fa fa-plus"></i> Add Event</button> </a> -->
                <div class="table-responsive">
                <table id="events" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>No</th>
                    <th>Event Title</th>
                    <th>Event Description</th>
                    <th>Event Date</th>
                    <th>Event Status</th>
                    <th>Created</th>
                    <th>Updated</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
                    @php
                    $i = 1;
                    @endphp
                  @foreach($events as $row)
                  <tr>
                    <td>{{$i++}}</td>
                    <td>{{$row->name}}</td>
                    <td><a class="btn btn-sm btn-default" href="javasctipt:void(0)" onclick="show_detail(this)" data-toggle="modal" data-target="#view_more_event_modal" title="View Detail" data-id="{{$row->id}}" data-name="{{$row->name}}"  data-description="{{$row->description}}" data-status="{{$row->status}}" data-photo="{{$row->photo}}" data-event_date="{{date('d-M-y g:i a',strtotime($row->date))}}">Read More</a></td>
                    <td>{{date('d-M-y g:i a',strtotime($row->date))}}</td>
                    <td> <div class="custom-control custom-switch  custom-switch-off-danger custom-switch-on-success">
                      <input type="checkbox" class="custom-control-input event_stataus"  id="customSwitch{{$i}}" data-id="{{$row->id}}" data-status="{{ $row->status }}" <?php echo ($row->status == 'active') ? 'checked':''; ?>>
                      <label class="custom-control-label" for="customSwitch{{$i}}"></label>
                    </div> </td>
                    <td> {{date('d-M-y g:i a',strtotime($row->created_at))}}</td>
                    <td> {{date('d-M-y g:i a',strtotime($row->updated_at))}} </td>
                    <td>
                      <a href="javasctipt:void(0)"  data-toggle="modal" data-target="#edit_event_modal" data-id="{{$row->id}}" data-name="{{$row->name}}"  data-description="{{$row->description}}" data-status="{{$row->status}}" data-photo="{{$row->photo}}" data-event_date="{{date('d-M-y g:i a',strtotime($row->date))}}"  onclick="set_event_data(this)" title="Edit"><button class="btn btn-sm btn-info"><i class="fas fa-edit"></i></button></a> 
                      
                      <a href="javasctipt:void(0)"  class="delete_event" data-id="{{$row->id}}" title="Delete"><button class="btn btn-sm btn-danger"><i class="fas fa-trash"></i></button></a>
                      
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
  </div>
  <!-- /.content-wrapper -->


@endsection

@section('script')

@endsection