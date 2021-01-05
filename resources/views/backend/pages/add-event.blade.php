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
               <h1 class="m-0 text-dark">Add Event</h1>
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
                        <a href="{{url('/events')}}"><button class='btn btn-primary pull-right'><i class="fa fa-arrow-left"></i>  Back</button> </a>
                     </div>
                  </div>
               </div>

               <div class="col-12">
                 <form role="form" method="post" enctype="multipart/form-data" action="{{url('/save_event')}}" class="add_event_form" >
                  <div class="card">
                     <div class="card-body">
                       
                           {{ csrf_field() }}
                           <!-- text input -->
                           <div class="form-group">
                              <label>Event Title</label>
                              <input type="text"  name="event_title" id="event_title" class="form-control" placeholder="Title" >
                              @if($errors->has('event_title'))
                              <div class="error">{{ $errors->first('event_title') }}</div>
                              @endif
                           </div>
                           <!-- textarea -->
      
                           <div class="form-group">
                        <label for="start">Write About Event</label>  
                        <textarea class="textarea about_us_text_area" name="event_description"  id="event_description"
                        placeholder="Place some text here"  ></textarea>
                        @if($errors->has('event_description'))
                           <div class="error">{{ $errors->first('event_description') }}</div>
                           @endif
                        </div>
                           <div class="form-group">
                              <label for="exampleInputFile">Event Photo</label>
                              <input type="file" name="event_photo" id="event_photo" >  
                              @if($errors->has('event_photo'))
                              <div class="error">{{ $errors->first('event_photo') }}</div>
                              @endif                
                           </div>
                           <div class="form-group">
                              <label for="start">Event Date</label>                
                              <input type="text" id="event_date" name="event_date" class="form-control" >
                              @if($errors->has('event_date'))
                              <div class="error">{{ $errors->first('event_date') }}</div>
                              @endif 
                           </div>
                           <input type="submit" id="save_event" name="save_event" class="btn btn-sm btn-primary
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