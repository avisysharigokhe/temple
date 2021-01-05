@extends('frontend.layouts.masterlayout')

@section('title',' VidyapatiDham.com ')
@section('style')

@endsection


@section('content')
 <!-- ======= Hero Section ======= -->
 <section id="hero">
    <div id="heroCarousel" class="carousel slide carousel-fade" data-ride="carousel">

      <div class="carousel-inner" role="listbox">

        <!-- Slide 1 -->
        <div class="carousel-item active" style="background-image: url({{asset('/img/slide/slide-1.jpg')}});">
          <div class="carousel-container">
            <div class="carousel-content animate__animated animate__fadeInUp">
              <h2>Welcome to <span>Vidyapati Dham</span></h2>
              <p>
              Vidyapatidham is known worldwide as Nirvan Bhoomi of the celebrated Maithil
               poet Vidyapati (1352 – 1448 AD), He was polyglot and polytheist. Though 
               universally acclaimed for erotic compositions dedicated to the love sports 
               of Radha- Krishna, his devotional compositions dedicated to Shiva- Shakti,
                mother Ganges and other facets of nature are par-excellence as his literary 
                contributions.
              </p>
              
            </div>
          </div>
        </div>

        <!-- Slide 2 -->
        <div class="carousel-item" style="background-image: url({{asset('/img/slide/slide-2.jpg')}});">
          <div class="carousel-container">
            <div class="carousel-content animate__animated animate__fadeInUp">
              <h2>Vidyapati Smarak</h2>
              <p>
              Vidyapatidham Smarak is known worldwide as Nirvan Bhoomi of the celebrated Maithil
               poet Vidyapati (1352 – 1448 AD), He was polyglot and polytheist. Though 
               universally acclaimed for erotic compositions dedicated to the love sports 
              </p>
              
            </div>
          </div>
        </div>

        <!-- Slide 3 -->
        <div class="carousel-item" style="background-image: url({{asset('/img/slide/slide-3.jpg')}});">
          <div class="carousel-container">
            <div class="carousel-content animate__animated animate__fadeInUp">
              <h2>Vidyapati Ugna</h2>
              <p>
              Folklore says that he was such a great devotee of Shiva that the lord was 
              really pleased with him. And once He decided to come to live in his house
               as a servant. As the servant He is said to have taken the name Ugna. 
               At several places in the region, Lord Shiva is still worshipped by this
                name.
              </p>
              
            </div>
          </div>
        </div>

      </div>

      <a class="carousel-control-prev" href="#heroCarousel" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon icofont-simple-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>

      <a class="carousel-control-next" href="#heroCarousel" role="button" data-slide="next">
        <span class="carousel-control-next-icon icofont-simple-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>

      <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

    </div>
  </section>
  <!-- End Hero -->
  <!-- Border section Start  -->
  <div class="container-fluide">
    <div class="row">
      <div class="col-lg-12">
      <nav class="navbar navbar-expand-lg py-3 shadow rounded custom-border">
      </div>
      </div>
    </div>
</div>
  <!-- Border section End -->
  <main id="main">
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

            <p class="font-italic">

            Vidyapati asked : "Tell me how far the Ganges is and how far?" "Thakurji,
             close to quarter to two Kos." his companion responded. After this, a great
              poet filled himself with confidence and told "Stop and keep the palanquin 
              here. Ganga will come here.
              </P>
              <div  style="float: left;"><a href="{{url('/about_temple')}}" class="btn btn-sm btn-success">Read More</a></div>
                          
          </div>          
        </div>
      </div>
    </section>
    <!-- End About Us Section -->

     <!-- ======= Services Section ======= -->
     <section id="services" class="services section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Events</strong></h2>
          <p>Main Religious Events in Vidyapati Dham</p>
        </div>

        <div class="row">
          <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
            <div class="icon-box iconbox-blue">
              <div class="icon">
                <img src="{{url('/public/img/event1.jpg')}}">                
              </div>
              <h4 class="text-title"><a href="">Shivratri</a></h4>
              <p>Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi</p>           
              <button type="button" id="btn" class="btn btn-primary text-center">Read More</button>
            </div>            
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-0" data-aos="zoom-in" data-aos-delay="200">
            <div class="icon-box iconbox-orange ">
              <div class="icon">
              <img src="{{url('/public/img/event1.jpg')}}">  
              </div>
              <h4 class="text-title"><a href="">Vidyapati Jyanti</a></h4>
              <p>Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi</p>           
              <button type="button" id="btn" class="btn btn-primary text-center">Read More</button>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-lg-0" data-aos="zoom-in" data-aos-delay="300">
            <div class="icon-box iconbox-pink">
              <div class="icon">
              <img src="{{url('/public/img/event1.jpg')}}">  
              </div>
              <h4 class="text-title"><a href="">Sawan</a></h4>
              <p>Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi</p>           
              <button type="button" id="btn" class="btn btn-primary text-center">Read More</button>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4" data-aos="zoom-in" data-aos-delay="200">
            <div class="icon-box iconbox-red">
              <div class="icon">
              <img src="{{url('/public/img/event1.jpg')}}">                
              </div>
              <h4 class="text-title"><a href="">Lorem Ipsum</a></h4>
              <p>Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi</p>           
              <button type="button" id="btn" class="btn btn-primary text-center">Read More</button>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4" data-aos="zoom-in" data-aos-delay="200">
            <div class="icon-box iconbox-red">
              <div class="icon">
              <img src="{{url('/public/img/event1.jpg')}}">                
              </div>
              <h4 class="text-title"><a href="">Lorem Ipsum</a></h4>
              <p>Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi</p>           
              <button type="button" id="btn" class="btn btn-primary text-center">Read More</button>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4" data-aos="zoom-in" data-aos-delay="300">
            <div class="icon-box iconbox-teal">
              <div class="icon">
              <img src="{{url('/public/img/event1.jpg')}}">  
              </div>
              <h4 class="text-title"><a href="">Lorem Ipsum</a></h4>
              <p>Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi</p>           
              <button type="button" id="btn" class="btn btn-primary text-center">Read More</button>
            </div>
          </div>

        </div>

      </div>
    </section>
    <!-- End Services Section -->


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
              <li data-filter=".filter-app">Shivratri</li>
              <li data-filter=".filter-card">Vidyapati Jayanti</li>
              <li data-filter=".filter-web">Sawan</li>
            </ul>
          </div>
        </div>

        <div class="row portfolio-container" data-aos="fade-up">

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <img src="{{asset('/img/portfolio/portfolio-1.jpg')}}" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>App 1</h4>
              <p>App</p>
              <a href="{{asset('/img/portfolio/portfolio-1.jpg')}}" data-gall="portfolioGallery" class="venobox preview-link" title="App 1"><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <img src="{{asset('/img/portfolio/portfolio-2.jpg')}}" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Web 3</h4>
              <p>Web</p>
              <a href="{{asset('/img/portfolio/portfolio-2.jpg')}}" data-gall="portfolioGallery" class="venobox preview-link" title="Web 3"><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <img src="{{asset('/img/portfolio/portfolio-3.jpg')}}" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>App 2</h4>
              <p>App</p>
              <a href="{{asset('/img/portfolio/portfolio-3.jpg')}}" data-gall="portfolioGallery" class="venobox preview-link" title="App 2"><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <img src="{{asset('/img/portfolio/portfolio-4.jpg')}}" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Card 2</h4>
              <p>Card</p>
              <a href="{{asset('/img/portfolio/portfolio-4.jpg')}}" data-gall="portfolioGallery" class="venobox preview-link" title="Card 2"><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <img src="{{asset('/img/portfolio/portfolio-5.jpg')}}" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Web 2</h4>
              <p>Web</p>
              <a href="{{asset('/img/portfolio/portfolio-5.jpg')}}" data-gall="portfolioGallery" class="venobox preview-link" title="Web 2"><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <img src="{{asset('/img/portfolio/portfolio-6.jpg')}}" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>App 3</h4>
              <p>App</p>
              <a href="{{asset('/img/portfolio/portfolio-6.jpg')}}" data-gall="portfolioGallery" class="venobox preview-link" title="App 3"><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <img src="{{asset('/img/portfolio/portfolio-7.jpg')}}" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Card 1</h4>
              <p>Card</p>
              <a href="{{asset('/img/portfolio/portfolio-7.jpg')}}" data-gall="portfolioGallery" class="venobox preview-link" title="Card 1"><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <img src="{{asset('/img/portfolio/portfolio-8.jpg')}}" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Card 3</h4>
              <p>Card</p>
              <a href="{{asset('/img/portfolio/portfolio-8.jpg')}}" data-gall="portfolioGallery" class="venobox preview-link" title="Card 3"><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <img src="{{asset('/img/portfolio/portfolio-9.jpg')}}" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Web 3</h4>
              <p>Web</p>
              <a href="{{asset('/img/portfolio/portfolio-9.jpg')}}" data-gall="portfolioGallery" class="venobox preview-link" title="Web 3"><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>

        </div>

      </div>
    </section>
    <!-- End Portfolio Section -->

  
    </main>
    <!-- End #main -->

@endsection

@section('script')