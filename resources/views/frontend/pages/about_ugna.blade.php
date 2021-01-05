@extends('frontend.layouts.masterlayout')

@section('title',' VidyapatiDham.com ')
@section('style')

@endsection

<main id="main">

<!-- ======= Breadcrumbs ======= -->
<section id="breadcrumbs" class="breadcrumbs">
  <div class="container">

    <div class="d-flex justify-content-between align-items-center">
      <h2>About Ugna</h2>
      <ol>
        <li><a href="{{url('/')}}">Home</a></li>
        <li>About Ugna</li>
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
          <h2>About Ugna</strong></h2>
        </div>

        <div class="row content">
          <div class="col-lg-6 custom-imgg" data-aos="fade-right">         
            <img src="{{asset('/img/News/ugna_2.jpg')}}">
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0" data-aos="fade-left">
            <p>
            Folklore says that he was such a great devotee of Shiva that the lord was
             really pleased with him. And once He decided to come to live in his house
              as a servant. As the servant He is said to have taken the name Ugna.
               At several places in the region, Lord Shiva is still worshipped by this
                name. It is said that the lord in form of servant had imposed a condition
                 on Vidyapati that he could not disclose his identity to anyone else or
                  else he would go away. When Vidyapati’s wife was angry at her servant
                   and started to beat him Vidyapati could not tolerate the same and asked
                    his wife not to beat Lord Shiva himself and since then the lord 
                    disappeared and never was he seen again.According to the local legend,
                     Vidyapati was an ardent devotee of Shiva. He composed several songs
                      in the form of Nacharis and Maheshbanis to please the Lord.
                      Impressed with the devotion and poetic creativity of the poet,
                       Lord Shiva came to him in a disguised form of a cowherd boy
                        called Ugna.
            </p>
            
            <p class="font-italic">
            Ugna requested the poet that as he was an orphan boy he wanted to work in
             his house as his servant. With a little hesitation, the poet assigned him
              the job of looking after his cattle. Ugna became a very charming and 
              affectionate servant to the poet within a very short period.

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