<?php
    $url = $_SERVER['REQUEST_URI'];
    $ur = explode('/', $url);
    $table = $ur[1];
    if($table == 'mix-detail'){
        $table = 'products';
    }
    $slug = $ur[2]; 
?>
@if(isset($mixDetail[0]))
@php 
    $mixDetail = DB::table('products')->where('slug', $slug)->get(); 
    $lang = $mixDetail[0]->lang ;
    App::setLocale($lang);
@endphp
@endif
@extends('layouts.default')
@section('meta')
    <title>Bali Best Activity - Bali Driver Activity</title>
    <meta content="bali destinations, visit bali interesting place" name="description">
    <meta content="bali good tour, car rental bali, ubud tour, bali tour" name="keywords">

    <title>BDA</title>
    <meta content="{{ $mixDetail[0]->slug }}" name="keywords">
@endsection
@section('content')
    
    <!-- Page Title -->
    <div class="page-title dark-background" data-aos="fade" style="background-image: url(assets/img/travel/showcase-8.webp);">
      <div class="container position-relative">
        <h1>Tour Details</h1>
        <p>Esse dolorum voluptatum ullam est sint nemo et est ipsa porro placeat quibusdam quia assumenda numquam molestias.</p>
        <nav class="breadcrumbs">
          <ol>
            <li><a href="index.html">Home</a></li>
            <li class="current">Tour Details</li>
          </ol>
        </nav>
      </div>
    </div><!-- End Page Title -->

    <!-- Travel Tour Details Section -->
    <section id="travel-tour-details" class="travel-tour-details section">

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <!-- Gallery Slider Section -->
    <section id="gallery-slider" class="gallery-slider section">

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="gallery-container">
          <div class="swiper init-swiper">
            <script type="application/json" class="swiper-config">
              {
                "loop": true,
                "speed": 800,
                "autoplay": {
                  "delay": 4000
                },
                "effect": "coverflow",
                "grabCursor": true,
                "centeredSlides": true,
                "slidesPerView": "auto",
                "coverflowEffect": {
                  "rotate": 50,
                  "stretch": 0,
                  "depth": 100,
                  "modifier": 1,
                  "slideShadows": true
                },
                "pagination": {
                  "el": ".swiper-pagination",
                  "type": "bullets",
                  "clickable": true
                },
                "navigation": {
                  "nextEl": ".swiper-button-next",
                  "prevEl": ".swiper-button-prev"
                },
                "breakpoints": {
                  "320": {
                    "slidesPerView": 1,
                    "spaceBetween": 10
                  },
                  "768": {
                    "slidesPerView": 2,
                    "spaceBetween": 20
                  },
                  "1024": {
                    "slidesPerView": 3,
                    "spaceBetween": 30
                  }
                }
              }
            </script>
            <div class="swiper-wrapper">
            @php $gmbra = explode(";",$mixDetail[0]->product_foto) ; @endphp
            @php $gmbr = array_slice($gmbra, 0, -1) ; @endphp
            @foreach($gmbr as $value)
              <div class="swiper-slide">
                <div class="gallery-item">
                    <div class="gallery-img">
                       
                        <a class="glightbox" data-gallery="images-gallery" href="{{ asset('assets/img/products/'. $value) }}">
                        <img src="{{ asset('assets/img/products/'. $value) }}" class="img-fluid" alt="">
                        <div class="gallery-overlay">
                            <i class="bi bi-plus-circle"></i>
                        </div>
                        </a>
                        
                    </div>
                </div>
              </div>
              @endforeach
              
            </div>
            <div class="swiper-pagination"></div>
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
          </div>
        </div>

      </div>

    </section><!-- /Gallery Slider Section -->

        <!-- Tour Overview -->
        <div class="tour-overview" data-aos="fade-up" data-aos-delay="200">
          <div class="row">


            <div class="col-lg-8">
              <h2>Tour Overview</h2>
              <p>Embark on an unforgettable journey through the heart of the Mediterranean, where ancient civilizations left their mark on stunning landscapes. This comprehensive tour takes you from the romantic canals of Venice to the sun-soaked islands of Santorini, culminating in the magical city of Istanbul where East meets West.</p>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
              <div class="tour-pricing" data-aos="fade-up" data-aos-delay="500">
                  <div class="available-dates">
                    <h3></h3>
                    <div class="dates-grid">
                      <div class="date-option">
                        <i class="bi bi-currency-dollar"></i>
                        <div class="date">May 15-26</div>
                        <div class="availability">6 spots left</div>
                      </div>
                      <div class="date-option">
                        <i class="bi bi-shield-check"></i>
                        <div class="date">June 12-23</div>
                        <div class="availability">Available</div>
                      </div>
                      <div class="date-option">
                        <i class="bi bi-calendar"></i>
                        <div class="date">July 10-21</div>
                        <div class="availability">Almost full</div>
                      </div>
                      
                    </div>
                  </div>
              </div>
            </div>
            <div class="col-lg-4">
              <div class="tour-highlights">
                <div class="booking-widget">
                  
                    <div class="booking-card-compact">
                      <h4 class="mb-3 d-none d-lg-block">Quick Booking</h4>
                      
                      <!-- Mobile: Button only -->
                      <button type="button" class="btn btn-primary w-100 d-lg-none" data-toggle="modal" data-target="#bookingModal">
                        Book Now - {{ $mixDetail[0]->price }}
                      </button>
                      
                      <!-- Desktop: Full form -->
                      <form class="booking-form-compact d-none d-lg-block">
                        <div class="form-group mb-2">
                          <label class="form-label small">Travel Date</label>
                          <input type="date" class="form-control form-control-sm" required>
                        </div>
                        <div class="form-group mb-2">
                          <label class="form-label small">Travelers</label>
                          <select class="form-control form-control-sm"">
                            <option>1 Person</option>
                            <option>2 People</option>
                            <option>3+ People</option>
                          </select>
                        </div>
                        <div class="price-display mb-3 p-2 bg-light rounded text-center">
                          <small>Starting from</small>
                          <div class="h5 mb-0">{{ $mixDetail[0]->price }}</div>
                        </div>
                        <button type="button" class="btn btn-primary btn-sm w-100" data-toggle="modal" data-target="#bookingModal">Check Availability</button>
                      </form>
                    </div>
                    <!-- Booking Modal -->
                    <div class="modal fade" id="bookingModal" tabindex="-1" aria-labelledby="bookingModalLabel" aria-hidden="true">
                      <div class="modal-dialog">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title" id="bookingModalLabel">Quick Booking</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                          </div>
                          <div class="modal-body">
                            <form>
                              <div class="mb-3">
                                <label for="bookingName" class="form-label">Your Name</label>
                                <input type="text" class="form-control" id="bookingName" required>
                              </div>
                              <div class="mb-3">
                                <label for="bookingEmail" class="form-label">Your Email</label>
                                <input type="email" class="form-control" id="bookingEmail" required>
                              </div>
                              <div class="mb-3">
                                <label for="bookingDate" class="form-label">Travel Date</label>
                                <input type="date" class="form-control" id="bookingDate" required>
                              </div>
                              <div class="mb-3">
                                <label for="bookingTravelers" class="form-label">Number of Travelers</label>
                                <select class="form-select" id="bookingTravelers" required>
                                  <option value="" disabled selected>Select number of travelers</option>
                                  <option value="1">1 Person</option>
                                  <option value="2">2 People</option>
                                  <option value="3">3+ People</option>
                                </select>
                              </div>
                            </form>
                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-primary">Submit Booking</button>
                          </div>
                        </div>
                      </div>
                    </div>
                    
                    </div>
                </div>
                <h3>Tour Highlights</h3>
                <a href="{{ route('auth.google.redirect') }}" class="btn bg-blue-100 p-3 shadow-sm border rounded-md text-blue-900">
                    Login with Google 
                </a>

                <!-- <ul>
                  <li><i class="bi bi-check-circle"></i> 4-Star Boutique Hotels</li>
                  <li><i class="bi bi-check-circle"></i> Expert Local Guides</li>
                  <li><i class="bi bi-check-circle"></i> Daily Breakfast Included</li>
                  <li><i class="bi bi-check-circle"></i> Small Group (Max 16)
                  </li>
                  <li><i class="bi bi-check-circle"></i> UNESCO World Heritage Sites</li>
                  <li><i class="bi bi-check-circle"></i> Cultural Experiences</li>
                </ul> -->
              </div>

            </div>

            <div class="col-lg-8">

              <!-- Itinerary -->
              <div class="tour-itinerary" data-aos="fade-up" data-aos-delay="300">
                <h2>Itinerary</h2>
                <div class="itinerary-timeline">

                @php $itineraries = explode(";",$mixDetail[0]->itinerary); @endphp
                @foreach($itineraries as $key => $itinerary)
                  @if(!empty(trim($itinerary)))
                    <div class="itinerary-item">
                      <div class="day-number">{{ $key + 1 }}</div>
                      <div class="day-content">
                        <p>{!! $itinerary !!}</p>
                        <div class="day-details">
                          
                        </div>
                      </div>
                    </div>
                  @endif
                @endforeach
                  
                </div>
              </div>

              <!-- Inclusions -->
              <div class="tour-inclusions" data-aos="fade-up" data-aos-delay="400">
                <div class="row">
                  <div class="col-lg-6">
                    <div class="included-section">
                      <h3><i class="bi bi-check-circle-fill"></i> What's Included</h3>
                      <p>{!! $mixDetail[0]->product_included !!}</p>
                    </div>
                  </div>
                  <div class="col-lg-6">
                    <div class="excluded-section">
                      <h3><i class="bi bi-x-circle-fill"></i> What's Not Included</h3>
                      <p>{!! $mixDetail[0]->product_excluded !!}</p>
                        
                    </div>
                  </div>
                </div>
              </div>

              <!-- Pricing -->
              
              
            </div>
            <div class="col-lg-4">
              <!-- Tour Facts -->
              
            </div>
          </div>
        </div>

        

        

        

      </div>

    </section><!-- /Travel Tour Details Section --><!-- Page Title -->

    

    

@stop