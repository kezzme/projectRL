<x-landing-layout>

  @include('home.nav-bar')

<!-- Page Header Start -->
<div class="container-fluid page-header mb-5 p-0" style="background-image: url(img/carousel-bg-4.jpg);">
  <div class="container-fluid page-header-inner py-5">
    <div class="container text-center">
      <h1 class="display-3 text-white mb-3 animated slideInDown">New Arrival Units</h1>
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb justify-content-center text-uppercase">
          <li class="breadcrumb-item">
            <a href="#">Home</a>
          </li>
          <li class="breadcrumb-item">
            <a href="#">Pages</a>
          </li>
          <li class="breadcrumb-item text-white active" aria-current="page">New Arrival</li>
        </ol>
      </nav>
    </div>
  </div>
</div>
<!-- Page Header End -->

<!-- Testimonial Start -->
<div class="container-xxl py-5 wow fadeInUp" data-wow-delay="0.1s">
  <div class="owl-carousel testimonial-carousel position-relative"> 
    @foreach ($units as $unit) 
    <div class="testimonial-item text-center">
      <img src="img/{{ $unit->image }}">
      <h3>{{ $unit->car_year }} {{ $unit->car_make }} {{ $unit->car_model }}</h3>
      <h5>{{ $unit->car_variant }}</h5>
      <div class="price">₱{{ $unit->price }}</div>
      <p>
        <span class="fa-solid fa-microchip"></span> {{ $unit->engine }}
        <span class="fa-solid fa-gauge"></span> {{ $unit->transmission }}
        <span class="fa-solid fa-gas-pump"></span> {{ $unit->fuel }}
      </p>
      <div>
        <a class="btn btn-primary col-md-4 animated slideInDown" href="">Trade-in</a>
        <a class="btn btn-primary col-md-4 animated slideInDown" href="">View Details</a>
      </div>
    </div> 
    @endforeach 
</div>
</div>

<!-- Testimonial End --> 

@include('home.footer')

<script src="js/main.js"></script>