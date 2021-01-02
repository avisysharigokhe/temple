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
               <h4 class="m-0 text-dark">Add About Vidyapati</h4>
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
         <div class="row">
            <div class="col-12">
               <div class="card custom-card">
                  <div class="card-body">
                     <a href="{{url('/about_vidyapati')}}"><button class='btn btn-primary pull-right'><i class="fa fa-arrow-left"></i>  Back</button> </a>
                  </div>
               </div>
            </div>
            <div class="col-12">
               <div class="card">
                <form role="form" method="post" enctype="multipart/form-data" action="{{url('/save_about_vidyapati')}}" class="add_about_vidyapati_form" >
                  <div class="card-body">
                        {{ csrf_field() }}
                        <!-- text input -->
                        <div class="form-group">
                           <label>About Title</label>
                           <input type="text"  name="about_title" id="about_title" class="form-control" placeholder="Title" >
                           @if($errors->has('about_title'))
                           <div class="error">{{ $errors->first('about_title') }}</div>
                           @endif
                        </div>
                        
                        <div class="form-group">
                           <label for="exampleInputFile">About Photos</label>
                           <input type="file" name="about_photo" id="about_photo" multiple="false">  
                           @if($errors->has('about_photo'))
                           <div class="error">{{ $errors->first('about_photo') }}</div>
                           @endif                
                        </div>
                        <div class="form-group">
                        <label for="start">Write About Vidyapati</label>  
                        <textarea class="textarea about_us_text_area" name="about_description"  id="about_description"
                        placeholder="Place some text here"  ></textarea>
                        @if($errors->has('about_description'))
                           <div class="error">{{ $errors->first('about_description') }}</div>
                           @endif
                        </div>
                        <input type="submit" id="save_about_vidyapati" name="save_about_vidyapati" class="btn btn-sm btn-primary
                           " >
                     
                  </div>
                  </form>
               </div>
            </div>

         </div>
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