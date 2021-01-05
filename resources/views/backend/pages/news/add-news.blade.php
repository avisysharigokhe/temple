@extends('backend.layout.main')
@section('title','| News')
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
               <h1 class="m-0 text-dark">Add News</h1>
            </div>
            <!-- /.col -->
            <div class="col-sm-6">
               <ol class="breadcrumb float-sm-right">
                  <!-- <li class="breadcrumb-item"><a href="#">Newss/Functions</a></li>
                     <li class="breadcrumb-item active">Add News</li> -->
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
                        <a href="{{url('/news')}}"><button class='btn btn-primary pull-right'><i class="fa fa-arrow-left"></i>  Back</button> </a>
                     </div>
                  </div>
               </div>
               <div class="col-12">
               <form role="form" method="post" enctype="multipart/form-data" action="{{url('/save_news')}}" class="add_news_form" >
               
                  <div class="card">
                     <div class="card-body">
                        
                           {{ csrf_field() }}
                           <!-- text input -->
                           <div class="form-group">
                              <label>News Title</label>
                              <input type="text"  name="news_title" id="news_title" class="form-control" placeholder="Title" >
                              @if($errors->has('news_title'))
                              <div class="error">{{ $errors->first('news_title') }}</div>
                              @endif
                           </div>
                           <!-- textarea -->
                           <div class="form-group">
                              <label>News Description</label>
                              <textarea class="textarea about_us_description" name="news_description" id="news_description" rows="3" placeholder="Description"></textarea>
                              @if($errors->has('news_description'))
                              <div class="error">{{ $errors->first('news_description') }}</div>
                              @endif
                           </div>
                           <div class="form-group">
                              <label for="exampleInputFile">News Photo</label>
                              <input type="file" name="news_photo" id="news_photo" >  
                              @if($errors->has('news_photo'))
                              <div class="error">{{ $errors->first('news_photo') }}</div>
                              @endif                
                           </div>
                           <div class="form-group">
                              <label for="start">News Date</label>                
                              <input type="text" id="news_date" name="news_date" class="form-control" >
                              @if($errors->has('news_date'))
                              <div class="error">{{ $errors->first('news_date') }}</div>
                              @endif 
                           </div>
                           <input type="submit" id="save_news" name="save_news" class="btn btn-sm btn-primary
                              " >
                                                     
                     </div>
                  </div>
                 
               
               </form>
               </div>
            </div>
      </section>
</div>
<!-- /.row -->
</section>
<!-- /.row -->
<!-- Main row -->
<!-- /.row (main row) -->


<!-- /.content -->
<!-- /.content-wrapper -->
@endsection
@section('script')
@endsection