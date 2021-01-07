@extends('frontend.layouts.masterlayout')

@section('title',' VidyapatiDham.com ')
@section('style')

@endsection

<main id="main">

<!-- ======= Breadcrumbs ======= -->
<section id="breadcrumbs" class="breadcrumbs">
  <div class="container">

    <div class="d-flex justify-content-between align-items-center">
      <h2>Event</h2>
      <ol>
        <li><a href="{{url('/')}}">Home</a></li>
        <li>Event</li>
      </ol>
    </div>
  </div>
</section><!-- End Breadcrumbs -->


</main><!-- End #main -->

@section('content')
 
   <!-- ======= Portfolio Section ======= -->
   <section id="portfolio" class="portfolio">
      <div class="container">

        <div class="section-title" data-aos="fade-up">
          <h2>Event Media</h2>
        </div>

        <div class="row" data-aos="fade-up">
          <div class="col-lg-12 d-flex justify-content-center">
            <ul id="portfolio-flters">
              <li data-filter="*" class="filter-active">All</li>
              <?php
              if(!empty($event_media_list)) {
                foreach ($event_media_list as $row) {
                  ?>
                  
                  <li data-filter=".{{strtolower(str_replace(' ', '-', $row->name))}}">{{$row->name}}</li>
                  <?php     
                  }           
              }
               ?>
              <!-- <li data-filter=".filter-app">Shivratri</li>
              <li data-filter=".filter-card">Vidyapati Jayanti</li>
              <li data-filter=".filter-web">Sawan</li> -->
              
            </ul>
          </div>
        </div>

        <div class="row portfolio-container" data-aos="fade-up">

          <?php
              if(!empty($event_media_list)) {
                foreach ($event_media_list as $row) {
                  ?>
          <div class="col-lg-4 col-md-6 portfolio-item {{strtolower(str_replace(' ', '-', $row->name))}}">
            <img src="{{ !empty($row->photo) ? $row->photo : url('/public/img/no-image.jpg')}}" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>{{$row->name}}</h4>
              <p>{{$row->date}}</p>
              <a href="{{ !empty($row->photo) ? $row->photo : url('/public/img/no-image.jpg')}}" data-gall="portfolioGallery" class="venobox preview-link" title="{{strtolower(str_replace(' ', '-', $row->name))}}"><i class="bx bx-plus"></i></a>
              <a href="javascript:void(0)" onclick="set_event_description(this)" data-toggle="modal" data-target="#view_more_event_modal" class="details-link" data-description="{{$row->description}}" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>
           <?php     
                  }           
              }
               ?>
        

          

        </div>

      </div>
    </section>
    <!-- End Portfolio Section -->


@endsection

@section('script')