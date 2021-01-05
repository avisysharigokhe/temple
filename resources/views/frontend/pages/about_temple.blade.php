@extends('frontend.layouts.masterlayout')

@section('title',' VidyapatiDham.com ')
@section('style')

@endsection

<main id="main">

<!-- ======= Breadcrumbs ======= -->
<section id="breadcrumbs" class="breadcrumbs">
  <div class="container">

    <div class="d-flex justify-content-between align-items-center">
      <h2>About Temple</h2>
      <ol>
        <li><a href="{{url('/')}}">Home</a></li>
        <li>About Temple</li>
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
          <h2>About Temple</strong></h2>
        </div>

        <div class="row content">
          <div class="col-lg-6 custom-imgg" data-aos="fade-right">         
            <img src="{{asset('/img/aboutus/Background.png')}}">
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0" data-aos="fade-left">
            <p>
            Vidyapatidham is known worldwide as Nirvan Bhoomi of the celebrated Maithil
             poet Vidyapati (1352 – 1448 AD), He was polyglot and polytheist. 
             Though universally acclaimed for erotic compositions dedicated to the 
              love sports of Radha- Krishna, his devotional compositions dedicated to 
              Shiva- Shakti, mother Ganges and other facets of nature are par-excellence
               as his literary contributions. 
            </p>
            
            <p class="font-italic">
            Light myriad attributes of Vidyapati his final ‘Mundane Resort’- Vidyapatidham
             is agog with many legends for its bestowing phenomenal religious and
             intellectual fervor.
            </p>  
            <p class="font-italic">
            On attaining ripe age, he summoned his family member and expressed his wish
            to breath his last in the lap of Mother Ganges, likewise arrangements were 
            made. They (along with Family members) travelled all over the night and  
             reached at the place then known as Mow- Bazidpur at the dawn. 
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