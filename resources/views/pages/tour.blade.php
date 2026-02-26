@extends('layouts.default')
@section('meta')
    <title>Bali Packages Tour- Bali Driver Activities</title>
    <meta content="package tour bali withh private service, best package tour in bali" name="description">
    <meta content="tour bali, package tour, bali driver, private driver" name="keywords">
@endsection
@section('content')

    <!-- Page Title -->
    <div class="page-title dark-background" data-aos="fade" style="background-image: url(assets/img/travel/showcase-8.webp);">
      <div class="container position-relative">
        <h1>Find Your Perfect Tour</h1>
        <p>Esse dolorum voluptatum ullam est sint nemo et est ipsa porro placeat quibusdam quia assumenda numquam molestias.</p>
        <nav class="breadcrumbs">
          <ol>
            <li><a href="/">Home</a></li>
            <li class="current">Tours</li>
          </ol>
        </nav>
      </div>
    </div><!-- End Page Title -->
    
    <!-- Travel Tours Section -->
    <section id="travel-tours" class="travel-tours section">

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <!-- <div class="row">
          <div class="col-lg-8 mx-auto text-center mb-5">
            <h2>Find Your Perfect Tour</h2>
            <p>Discover unforgettable travel experiences with our curated collection of tours. Explore by destination, travel style, or date to find the adventure that's perfect for you.</p>
          </div>
        </div> -->

        <!-- Tour Filters -->
        <!-- <div class="row mb-5" data-aos="fade-up" data-aos-delay="200">
          <div class="col-12">
            <div class="tour-filters">
              <div class="row">
                <div class="col-lg-3 col-md-6 mb-3">
                  <select class="form-select">
                    <option value="">Select Destination</option>
                    <option value="paris">Paris</option>
                    <option value="bali">Bali</option>
                    <option value="tokyo">Tokyo</option>
                    <option value="rome">Rome</option>
                    <option value="thailand">Thailand</option>
                  </select>
                </div>
                <div class="col-lg-3 col-md-6 mb-3">
                  <select class="form-select">
                    <option value="">Tour Type</option>
                    <option value="adventure">Adventure</option>
                    <option value="luxury">Luxury</option>
                    <option value="family">Family</option>
                    <option value="cultural">Cultural</option>
                    <option value="beach">Beach</option>
                  </select>
                </div>
                <div class="col-lg-3 col-md-6 mb-3">
                  <select class="form-select">
                    <option value="">Duration</option>
                    <option value="1-3">1-3 Days</option>
                    <option value="4-7">4-7 Days</option>
                    <option value="8-14">8-14 Days</option>
                    <option value="15+">15+ Days</option>
                  </select>
                </div>
              </div>
            </div>
          </div>
        </div> -->

        <!-- Tour Categories -->
        <div class="row mb-5" data-aos="fade-up" data-aos-delay="400">
          <div class="col-12">
            <h3 class="section-subtitle mb-4">Browse by Category</h3>
            <div class="row">
              <div class="col-lg-2 col-md-4 col-6 mb-3">
                <div class="category-card">
                  <div class="category-icon">
                    <i class="bi bi-compass"></i>
                  </div>
                  <h5>Adventure</h5>
                </div>
              </div>
              <div class="col-lg-2 col-md-4 col-6 mb-3">
                <div class="category-card">
                  <div class="category-icon">
                    <i class="bi bi-gem"></i>
                  </div>
                  <h5>Luxury</h5>
                </div>
              </div>
              <div class="col-lg-2 col-md-4 col-6 mb-3">
                <div class="category-card">
                  <div class="category-icon">
                    <i class="bi bi-people"></i>
                  </div>
                  <h5>Family</h5>
                </div>
              </div>
              <div class="col-lg-2 col-md-4 col-6 mb-3">
                <div class="category-card">
                  <div class="category-icon">
                    <i class="bi bi-palette"></i>
                  </div>
                  <h5>Cultural</h5>
                </div>
              </div>
              <div class="col-lg-2 col-md-4 col-6 mb-3">
                <div class="category-card">
                  <div class="category-icon">
                    <i class="bi bi-sun"></i>
                  </div>
                  <h5>Beach</h5>
                </div>
              </div>
              <div class="col-lg-2 col-md-4 col-6 mb-3">
                <div class="category-card">
                  <div class="category-icon">
                    <i class="bi bi-building"></i>
                  </div>
                  <h5>City</h5>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- Tour Grid -->
        <div class="row" data-aos="fade-up" data-aos-delay="600">
          <div class="col-12">
            <h3 class="section-subtitle mb-4">All Mix Tours</h3>
            <div class="row">
              @foreach ($product as $prd)
              <div class="col-lg-4 col-md-6 mb-4">
                <div class="tour-card">
                  <div class="tour-image">
                    @php $gmbr = explode(";",$prd->product_foto) ; @endphp
                    <img src="{{asset('assets/img/products/'.$gmbr[0] ) }}" alt="{{ $prd->product_name }}" class="img-fluid">
                    <div class="tour-price">${{ $prd->price }} / Pax</div>
                  </div>
                  <div class="tour-content">
                    <h4>{{ $prd->product_name }}</h4>
                    <p>{!! substr($prd->product_des, 0, 60) !!}</p>
                    <div class="tour-details">
                      <span><i class="bi bi-clock"></i> 6 Days</span>
                      <span><i class="bi bi-star-fill"></i> 4.8 (124 reviews)</span>
                    </div>
                    <a href="/mix-detail/{{ $prd->slug }}" class="btn btn-outline-primary">View Tour</a>
                  </div>
                </div>
              </div>
              @endforeach
              
            </div>
          </div>
        </div>
        
        <!-- Pagination 2 Section -->
        <section >
          <div class="container">
              {{ $product->links('pagination::bootstrap-5') }}
          </div>
        </section><!-- /Pagination 2 Section -->
        

        <!-- Featured Tours Slider -->
        <div class="row mb-5" data-aos="fade-up" data-aos-delay="300">
          <div class="col-12">
            <h3 class="section-subtitle mb-4">Featured Tours</h3>
            <div class="featured-tours-slider swiper init-swiper">
              <script type="application/json" class="swiper-config">
                {
                  "loop": true,
                  "speed": 600,
                  "autoplay": {
                    "delay": 5000
                  },
                  "slidesPerView": 1,
                  "spaceBetween": 30,
                  "pagination": {
                    "el": ".swiper-pagination",
                    "type": "bullets",
                    "clickable": true
                  },
                  "breakpoints": {
                    "768": {
                      "slidesPerView": 2
                    },
                    "1200": {
                      "slidesPerView": 3
                    }
                  }
                }
              </script>
              <div class="swiper-wrapper">

              @foreach ($tour as $r)
                <div class="swiper-slide">
                  <div class="featured-tour-card">
                    <div class="tour-image">
                      @php $gmbr = explode(";",$r->foto) ; @endphp
                      <img src="{{asset('assets/img/tour/'.$gmbr[0] ) }}" alt="{{ $r->product_name }}" class="img-fluid">
                      <div class="tour-badge">Best Seller</div>
                    </div>
                    <div class="tour-content">
                      <h4>{{ $r->tour_name }}</h4>
                      <p>Discover the mystical beauty of Bali with temple visits, volcano hiking, and pristine beaches.</p>
                      <div class="tour-meta">
                        <span class="duration"><i class="bi bi-clock"></i> 7 Days</span>
                        <span class="price">From $899</span>
                      </div>
                      <a href="tour-details.html" class="btn btn-primary">View Details</a>
                    </div>
                  </div>
                </div>
              @endforeach
              
              </div>
              <div class="swiper-pagination"></div>
            </div>
          </div>
        </div>

        

        <!-- Special Offers -->
        <div class="row mb-5" data-aos="fade-up" data-aos-delay="500">
          <div class="col-12">
            <div class="special-offers">
              <h3 class="section-subtitle mb-4">Last-Minute Deals</h3>
              <div class="row">
                <div class="col-lg-6 mb-4">
                  <div class="offer-banner">
                    <div class="offer-content">
                      <div class="discount-badge">30% OFF</div>
                      <h4>Mediterranean Cruise</h4>
                      <p>Explore Italy, Greece, and Spain with luxury accommodations and gourmet dining.</p>
                      <span class="urgency">Only 3 seats left!</span>
                      <a href="booking.html" class="btn btn-accent">Book Now</a>
                    </div>
                    <div class="offer-image">
                      <img src="assets/img/travel/misc-12.webp" alt="Cruise" class="img-fluid">
                    </div>
                  </div>
                </div>
                <div class="col-lg-6 mb-4">
                  <div class="offer-banner">
                    <div class="offer-content">
                      <div class="discount-badge">25% OFF</div>
                      <h4>African Safari</h4>
                      <p>Witness the great migration and encounter magnificent wildlife in their natural habitat.</p>
                      <span class="urgency">Limited time offer!</span>
                      <a href="booking.html" class="btn btn-accent">Book Now</a>
                    </div>
                    <div class="offer-image">
                      <img src="assets/img/travel/misc-8.webp" alt="Safari" class="img-fluid">
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        

        <!-- CTA Section -->
        <div class="row" data-aos="fade-up" data-aos-delay="700">
          <div class="col-12">
            <div class="cta-section text-center">
              <h3>Not Sure What to Choose?</h3>
              <p>Our travel experts are here to help you find the perfect tour based on your preferences and budget.</p>
              <div class="cta-buttons">
                <a href="#" class="btn btn-primary me-3">Contact Our Experts</a>
                <a href="#" class="btn btn-outline-primary">Take Our Travel Quiz</a>
              </div>
            </div>
          </div>
        </div>

      </div>

    </section><!-- /Travel Tours Section -->

    

@stop