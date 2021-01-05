@extends('backend.layout.main')
@section('title','| News ')
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
               <h1 class="m-0 text-dark">News</h1>
            </div>
            <!-- /.col -->
            <div class="col-sm-6">
               <ol class="breadcrumb float-sm-right">
               </ol>
            </div>
            <!-- /.col -->
         </div>
         <!-- /.row -->
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
      </div>
      <!-- /.container-fluid -->
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
                     <a href="{{url('/add-news')}}"><button class='btn btn-primary pull-right '><i class="fa fa-plus"></i> Add News</button> </a>
                  </div>
                  <div class="card-body">
                     <!--   <a href="{{url('/add-event')}}"><button class='btn btn-primary pull-right '><i class="fa fa-plus"></i> Add Event</button> </a> -->
                     <div class="table-responsive">
                        <table id="news" class="table table-bordered table-striped">
                           <thead>
                              <tr>
                                 <th>No</th>
                                 <th>News Title</th>
                                 <th>News Photo</th>
                                 <th>News Description</th>
                                 <th>News Date</th>
                                 <th>News Status</th>
                                 <th>Created</th>
                                 <th>Updated</th>
                                 <th>Action</th>
                              </tr>
                           </thead>
                           <tbody>
                              @php
                              $i = 1;
                              @endphp
                              @foreach($news as $row)
                              <tr>
                                 <td>{{$i++}}</td>
                                 <td>{{$row->name}}</td>
                                 <td><img class="direct-chat-img" src="{{(!empty($row->photo)) ?  $row->photo : url('/public/img/no-image.jpg')}}" alt="News Photo"></td>
                                 <td><a class="btn btn-sm btn-default" href="javasctipt:void(0)" onclick="show_news_desc_detail(this)" data-toggle="modal" data-target="#view_more_news_modal" title="View Detail" data-id="{{$row->id}}" data-name="{{$row->name}}"  data-description="{{$row->description}}" data-status="{{$row->status}}" data-photo="{{$row->photo}}" data-news_date="{{date('d-M-y g:i a',strtotime($row->date))}}">Read More</a></td>
                                 <td>{{date('d-M-y g:i a',strtotime($row->date))}}</td>
                                 <td>
                                    <div class="custom-control custom-switch  custom-switch-off-danger custom-switch-on-success">
                                       <input type="checkbox" class="custom-control-input news_stataus"  id="customSwitch{{$i}}" data-id="{{$row->id}}" data-status="{{ $row->status }}" <?php echo ($row->status == 'active') ? 'checked':''; ?>>
                                       <label class="custom-control-label" for="customSwitch{{$i}}"></label>
                                    </div>
                                 </td>
                                 <td> {{date('d-M-y g:i a',strtotime($row->created_at))}}</td>
                                 <td> {{!empty($row->updated_at) ? date('d-M-y g:i a',strtotime($row->updated_at)) : '' }} </td>
                                 <td>
                                    <a href="javasctipt:void(0)"  data-toggle="modal" data-target="#edit_news_modal" data-id="{{$row->id}}" data-name="{{$row->name}}"  data-description="{{$row->description}}" data-status="{{$row->status}}" data-photo="{{$row->photo}}" data-news_date="{{date('d-M-y g:i a',strtotime($row->date))}}"  onclick="set_news_data(this)" title="Edit"><button class="btn btn-sm btn-info"><i class="fas fa-edit"></i></button></a> 
                                    <a href="javasctipt:void(0)"  class="delete_news" data-id="{{$row->id}}" title="Delete"><button class="btn btn-sm btn-danger"><i class="fas fa-trash"></i></button></a>
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
      </div>
      <!-- /.container-fluid -->
   </section>
   <!-- /.content -->

<!-- /.content-wrapper -->
@endsection
@section('script')
@endsection