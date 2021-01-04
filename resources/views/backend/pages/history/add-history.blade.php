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
               <h1 class="m-0 text-dark">Add History</h1>
            </div>
            <!-- /.col -->
            <div class="col-sm-6">
               <ol class="breadcrumb float-sm-right">
                  <!-- <li class="breadcrumb-item"><a href="#">Events/Functions</a></li>
                     <li class="breadcrumb-item active">Add Event</li> -->
               </ol>
            </div>
            <!-- /.col -->
         </div>
         <!-- /.row -->
         @if(Session::has('message'))
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
         <section class="content">
            <div class="row">
               <div class="col-12">
                  <div class="card custom-card">
                     <div class="card-body">
                        <a href="{{url('/temple-history')}}"><button class='btn btn-primary pull-right'><i class="fa fa-arrow-left"></i>  Back</button> </a>
                     </div>
                  </div>
               </div>

               <div class="col-12">
                 <form role="form" method="post" enctype="multipart/form-data" action="{{url('/save_temple_history')}}" class="add_history_form" >
                  <div class="card">
                     <div class="card-body">
                       
                           {{ csrf_field() }}
                           <!-- text input -->
                           <div class="form-group">
                              <label>History Title</label>
                              <input type="text"  name="history_title" id="history_title" class="form-control" placeholder="Title" >
                              @if($errors->has('history_title'))
                              <div class="error">{{ $errors->first('history_title') }}</div>
                              @endif
                           </div>
                           <!-- textarea -->
                           <div class="form-group">
                              <label>History Description</label>
                              <textarea class="form-control textarea" name="history_description" id="history_description" rows="3" placeholder="Description"></textarea>
                              @if($errors->has('history_description'))
                              <div class="error">{{ $errors->first('history_description') }}</div>
                              @endif
                           </div>
                           <div class="form-group">
                              <label for="exampleInputFile">History Photos</label>
                              <input type="file" name="history_photos" id="history_photos" >  
                              @if($errors->has('history_photos'))
                              <div class="error">{{ $errors->first('history_photos') }}</div>
                              @endif                
                           </div>
                           <input type="submit" id="save_history" name="save_history" class="btn btn-sm btn-primary
                              " >
                     </div>
                  </div>
                  </form>
               </div>
            </div>
            </section>
      </div>
 </section>
<!-- /.row -->

<!-- /.row -->
<!-- Main row -->
<!-- /.row (main row) -->


<!-- /.content -->
<!-- /.content-wrapper -->
@endsection
@section('script')
@endsection