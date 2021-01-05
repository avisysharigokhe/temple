@extends('frontend.layouts.masterlayout')

@section('title',' VidyapatiDham.com ')
@section('style')

@endsection

<main id="main">

<!-- ======= Breadcrumbs ======= -->
<section id="breadcrumbs" class="breadcrumbs">
  <div class="container">

    <div class="d-flex justify-content-between align-items-center">
      <h2>About Vidyapati</h2>
      <ol>
        <li><a href="{{url('/')}}">Home</a></li>
        <li>About Vidyapati</li>
      </ol>
    </div>
  </div>
</section><!-- End Breadcrumbs -->


</main><!-- End #main -->

@section('content')
 
<!-- ======= About Us Section ======= -->
<section id="about-us" class="about-us">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>About Vidyapati</strong></h2>
        </div>

        <div class="row content">
          <div class="col-lg-6 custom-imgg" data-aos="fade-right">         
            <img src="{{asset('/img/News/vidyapati11.jpg')}}">
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0" data-aos="fade-left">
            <p>
              Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
              velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
              culpa qui officia deserunt mollit anim id est laborum
              Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
              velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
              culpa qui officia deserunt mollit anim id est laborum
            </p>
            
            <p class="font-italic">
              Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
              magna aliqua.
            </p>  
            <p class="font-italic">
              Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
              magna aliqua.
            </p>  <p class="font-italic">
              Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
              magna aliqua.
            </p>  
            <p class="font-italic">
              Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
              magna aliqua.
            </p>               
          </div> 

          <div class="col-lg-12 pt-4 pt-lg-0" data-aos="fade-left">

                   
<?php 
if(!empty($about_us_list)){
  foreach($about_us_list as  $row) {
    if(!empty($row->about_photos)){
      // if image available in DB
      ?>
      <div class="row content">
        <div class="col-sm-12 col-lg-12 custom-imgg text-center" data-aos="fade-right" width="200" height="200">         
          <img src='<?php echo $row->about_photos;?>'>
        </div>                  
      </div>

        <div class="row content">
        <div class="col-sm-12 col-lg-12 custom-imgg " data-aos="fade-right">
        <p class="font-italic text-justify">
         <b><?php echo $row->about_title;?> :</b><?php echo $row->about_description;?></p> 
        </div>
        </div>                    
      <?php

    }
    // if image not available in DB
    else{
      ?> 
      <p><b><?php echo $row->about_title; ?></b><?php echo $row->about_description; ?></p> 

      <?php
    }
   ?>
   
   <?php
  }
}

?>       
</div>
                    
        </div>
      </div>
    </section>
    <!-- End About Us Section -->

@endsection

@section('script')