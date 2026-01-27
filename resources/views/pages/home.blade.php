@extends('layouts.default')
@section('meta')
    <title>Bali Driver Activity</title>
    <meta name="description" content="Discover and book unique travel experiences in Bali with Hire Bali Driver. From cultural tours to adventure activities, find authentic local experiences at the best prices.">
    <meta name="keywords" content="Bali tours, Indonesia travel, activities Bali, tour booking, travel experiences, adventure tours, cultural tours, Bali activities">
@endsection

@section('content')
    

    <!-- Why Us Section -->
    <section id="why-us" class="why-us section">

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <!-- About Us Content -->
        <div class="row align-items-center mb-5">
          <div class="col-lg-6" data-aos="fade-right" data-aos-delay="200">
            <div class="content">
              <h3>Explore the World with Confidence</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
              <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
              <div class="stats-row">
                <div class="stat-item">
                  <span data-purecounter-start="0" data-purecounter-end="1200" data-purecounter-duration="2" class="purecounter">0</span>
                  <div class="stat-label">Happy Travelers</div>
                </div>
                <div class="stat-item">
                  <span data-purecounter-start="0" data-purecounter-end="85" data-purecounter-duration="2" class="purecounter">0</span>
                  <div class="stat-label">Countries Covered</div>
                </div>
                <div class="stat-item">
                  <span data-purecounter-start="0" data-purecounter-end="15" data-purecounter-duration="2" class="purecounter">0</span>
                  <div class="stat-label">Years Experience</div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-6" data-aos="fade-left" data-aos-delay="300">
            <div class="about-image">
              <img src="assets/img/travel/showcase-8.webp" alt="Travel Experience" class="img-fluid rounded-4">
              <div class="experience-badge">
                <div class="experience-number">15+</div>
                <div class="experience-text">Years of Excellence</div>
              </div>
            </div>
          </div>
        </div><!-- End About Us Content -->

        <!-- Featured Tours Section -->
        <section id="featured-tours" class="featured-tours section">

          <!-- Section Title -->
          <div class="container section-title" data-aos="fade-up">
            <h2>Mix Tours</h2>
            <div><span>Check Our</span> <span class="description-title">Custom Tour and Activity</span></div>
          </div><!-- End Section Title -->

          <div class="container" data-aos="fade-up" data-aos-delay="100">

            <div class="row gy-6">
              @foreach ($product as $prd)
              <div class="col-lg-3 col-md-3" data-aos="fade-up" data-aos-delay="200">
                <div class="tour-card">
                  <div class="tour-image">
                    @php $gmbr = explode(";",$prd->product_foto) ; @endphp
                    <img src="{{asset('assets/img/products/'.$gmbr[0] ) }}" alt="Serene Beach Retreat" class="img-fluid" loading="lazy">
                    <div class="tour-badge">Top Rated</div>
                    <div class="tour-price">{{ session('currency', 'USD') }} {{ number_format(convertPrice($prd->price, session('currency', 'USD')), 0) }} / Pax</div>
                    
                  </div>
                  <div class="tour-content">
                    <h4>{{ $prd->product_name }}</h4>
                    <div class="tour-meta">
                      <span class="duration"><i class="bi bi-clock"></i> 8 Days</span>
                      <span class="group-size"><i class="bi bi-people"></i> Max 6</span>
                    </div>
                    <p>{!! substr($prd->product_des, 0, 60) !!}</p>
                    <!-- @php $convertedPrice = round($prd->price * session('currency_rate', 1), 2); @endphp -->
                    
                    <!-- <x-money amount="{{ $convertedPrice }}" currency="{{ session('currency', 'USD') }}" convert /> -->
                    <div class="tour-highlights">

                     
                      @foreach ($activities as $activity)
                      @php $parentTypes = explode(';', $prd->parent_type); @endphp
                        @if (in_array($activity->code, $parentTypes))
                          <span>{{ $activity->name }}</span>
                        @endif
                      @endforeach
                    </div>
                    <div class="tour-action">
                      <a href="booking.html" class="btn-book">Book Now</a>
                      <div class="tour-rating">
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-half"></i>
                        <span>4.8 (95)</span>
                      </div>
                    </div>
                  </div>
                </div>
              </div><!-- End Tour Item -->
              @endforeach

              

            </div>

            <div class="text-center mt-5" data-aos="fade-up" data-aos-delay="500">
              <a href="tours.html" class="btn-view-all">View All Tours</a>
            </div>

          </div>

        </section><!-- /Featured Tours Section -->

        <!-- Why Choose Us -->
        <div class="why-choose-section">
          <div class="row justify-content-center">
            <div class="col-lg-8 text-center mb-5" data-aos="fade-up" data-aos-delay="100">
              <h3>Why Choose Us for Your Next Adventure</h3>
              <p>Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris.</p>
            </div>
          </div>

          <div class="row g-4">
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
              <div class="feature-card">
                <div class="feature-icon">
                  <i class="bi bi-people-fill"></i>
                </div>
                <h4>Local Experts</h4>
                <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium totam.</p>
              </div>
            </div>

            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="250">
              <div class="feature-card">
                <div class="feature-icon">
                  <i class="bi bi-shield-check"></i>
                </div>
                <h4>Safe &amp; Secure</h4>
                <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum.</p>
              </div>
            </div>

            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
              <div class="feature-card">
                <div class="feature-icon">
                  <i class="bi bi-cash"></i>
                </div>
                <h4>Best Prices</h4>
                <p>Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet consectetur adipisci velit.</p>
              </div>
            </div>

            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="350">
              <div class="feature-card">
                <div class="feature-icon">
                  <i class="bi bi-headset"></i>
                </div>
                <h4>24/7 Support</h4>
                <p>Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam nisi.</p>
              </div>
            </div>

            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="400">
              <div class="feature-card">
                <div class="feature-icon">
                  <i class="bi bi-geo-alt-fill"></i>
                </div>
                <h4>Global Destinations</h4>
                <p>Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae.</p>
              </div>
            </div>

            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="450">
              <div class="feature-card">
                <div class="feature-icon">
                  <i class="bi bi-star-fill"></i>
                </div>
                <h4>Premium Experience</h4>
                <p>Excepteur sint occaecat cupidatat non proident sunt in culpa qui officia deserunt mollit anim.</p>
              </div>
            </div>
          </div><!-- End Features Grid -->
        </div><!-- End Why Choose Us -->

      </div>

    </section><!-- /Why Us Section -->

    <!-- Featured Destinations Section -->
    <section id="featured-destinations" class="featured-destinations section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Featured Destinations</h2>
        <div><span>Check Our</span> <span class="description-title">Featured Destinations</span></div>
      </div><!-- End Section Title -->

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row">

          <div class="col-lg-6" data-aos="zoom-in" data-aos-delay="200">
            <div class="featured-destination">
              <div class="destination-overlay">
                <img src="assets/img/travel/destination-3.webp" alt="Tropical Paradise" class="img-fluid">
                <div class="destination-info">
                  <span class="destination-tag">Popular Choice</span>
                  <h3>Tropical Paradise</h3>
                  <p class="location"><i class="bi bi-geo-alt-fill"></i> Maldives</p>
                  <p class="description">Pristine beaches, crystal-clear waters, and luxury overwater villas await in this tropical paradise destination.</p>
                  <div class="destination-meta">
                    <div class="tours-count">
                      <i class="bi bi-collection"></i>
                      <span>22 Packages</span>
                    </div>
                    <div class="rating">
                      <i class="bi bi-star-fill"></i>
                      <span>4.9 (412)</span>
                    </div>
                  </div>
                  <div class="price-info">
                    <span class="starting-from">Starting from</span>
                    <span class="amount">$2,150</span>
                  </div>
                  <a href="destination-details.html" class="explore-btn">
                    <span>Explore Now</span>
                    <i class="bi bi-arrow-right"></i>
                  </a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-6">
            <div class="row g-3">

            @foreach ($destination as $dst)
              <div class="col-12" data-aos="fade-left" data-aos-delay="300">
                <div class="compact-destination">
                  <div class="destination-image">
                    @php $gmbr = explode(";",$dst->foto) ; @endphp
                    <img src="assets/img/destinasi/{{ $gmbr[0] }}" alt="Mountain Adventure" class="img-fluid">
                    <div class="badge-offer">Best Value</div>
                  </div>
                  <div class="destination-details">
                    <h4>{{ $dst->name }}</h4>
                    <p class="location"><i class="bi bi-geo-alt"></i> {{ $dst->country }}</p>
                    <p class="brief">{!! cutText($dst->deskripsi, 50, 3) !!}</p>
                    <div class="stats-row">
                      <span class="tour-count"><i class="bi bi-calendar-check"></i> 16 Tours</span>
                      <span class="rating"><i class="bi bi-star-fill"></i> 4.8</span>
                      <span class="price">from $1,420</span>
                    </div>
                    <a href="destination-details.html" class="quick-link">View Details <i class="bi bi-chevron-right"></i></a>
                  </div>
                </div>
              </div>
            @endforeach
              

            </div>
          </div>

        </div>

      </div>

    </section><!-- /Featured Destinations Section -->

    <!-- Featured Tours Section -->
    <section id="featured-tours" class="featured-tours section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Featured Tours</h2>
        <div><span>Check Our</span> <span class="description-title">Featured Tours</span></div>
      </div><!-- End Section Title -->

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row gy-4">
          @foreach ($tour as $tur)
          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
            <div class="tour-card">
              <div class="tour-image">
                @php $gmbr = explode(";",$tur->foto) ; @endphp
                <img src="{{asset('assets/img/tour/'.$gmbr[0] ) }}" alt="Serene Beach Retreat" class="img-fluid" loading="lazy">
                <div class="tour-badge">Top Rated</div>
                <div class="tour-price">$2,150</div>
              </div>
              <div class="tour-content">
                <h4>{{ $tur->tour_name }}</h4>
                <div class="tour-meta">
                  <span class="duration"><i class="bi bi-clock"></i> 8 Days</span>
                  <span class="group-size"><i class="bi bi-people"></i> Max 6</span>
                </div>
                <p>Mauris ipsum neque, cursus ac ipsum at, iaculis facilisis ligula. Suspendisse non sapien vel enim cursus semper.</p>
                <div class="tour-highlights">
                  <span>Maldives</span>
                  <span>Seychelles</span>
                  <span>Bora Bora</span>
                </div>
                <div class="tour-action">
                  <a href="booking.html" class="btn-book">Book Now</a>
                  <div class="tour-rating">
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-half"></i>
                    <span>4.8 (95)</span>
                  </div>
                </div>
              </div>
            </div>
          </div><!-- End Tour Item -->
          @endforeach

          

        </div>

        <div class="text-center mt-5" data-aos="fade-up" data-aos-delay="500">
          <a href="tours.html" class="btn-view-all">View All Tours</a>
        </div>

      </div>

    </section><!-- /Featured Tours Section -->

    <!-- Testimonials Home Section -->
    <section id="testimonials-home" class="testimonials-home section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Testimonials</h2>
        <div><span>What Our Customers</span> <span class="description-title">Are Saying</span></div>
      </div><!-- End Section Title -->

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="swiper init-swiper">
          <script type="application/json" class="swiper-config">
            {
              "loop": true,
              "speed": 600,
              "autoplay": {
                "delay": 5000
              },
              "slidesPerView": "auto",
              "pagination": {
                "el": ".swiper-pagination",
                "type": "bullets",
                "clickable": true
              },
              "breakpoints": {
                "320": {
                  "slidesPerView": 1,
                  "spaceBetween": 40
                },
                "1200": {
                  "slidesPerView": 3,
                  "spaceBetween": 1
                }
              }
            }
          </script>
          <div class="swiper-wrapper">

            <div class="swiper-slide">
              <div class="testimonial-item">
                <p>
                  <i class="bi bi-quote quote-icon-left"></i>
                  <span>Proin iaculis purus consequat sem cure digni ssim donec porttitora entum suscipit rhoncus. Accusantium quam, ultricies eget id, aliquam eget nibh et. Maecen aliquam, risus at semper.</span>
                  <i class="bi bi-quote quote-icon-right"></i>
                </p>
                <img src="assets/img/person/person-m-9.webp" class="testimonial-img" alt="">
                <h3>Saul Goodman</h3>
                <h4>Ceo &amp; Founder</h4>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <p>
                  <i class="bi bi-quote quote-icon-left"></i>
                  <span>Export tempor illum tamen malis malis eram quae irure esse labore quem cillum quid malis quorum velit fore eram velit sunt aliqua noster fugiat irure amet legam anim culpa.</span>
                  <i class="bi bi-quote quote-icon-right"></i>
                </p>
                <img src="assets/img/person/person-f-5.webp" class="testimonial-img" alt="">
                <h3>Sara Wilsson</h3>
                <h4>Designer</h4>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <p>
                  <i class="bi bi-quote quote-icon-left"></i>
                  <span>Enim nisi quem export duis labore cillum quae magna enim sint quorum nulla quem veniam duis minim tempor labore quem eram duis noster aute amet eram fore quis sint minim.</span>
                  <i class="bi bi-quote quote-icon-right"></i>
                </p>
                <img src="assets/img/person/person-f-12.webp" class="testimonial-img" alt="">
                <h3>Jena Karlis</h3>
                <h4>Store Owner</h4>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <p>
                  <i class="bi bi-quote quote-icon-left"></i>
                  <span>Fugiat enim eram quae cillum dolore dolor amet nulla culpa multos export minim fugiat dolor enim duis veniam ipsum anim magna sunt elit fore quem dolore labore illum veniam.</span>
                  <i class="bi bi-quote quote-icon-right"></i>
                </p>
                <img src="assets/img/person/person-m-12.webp" class="testimonial-img" alt="">
                <h3>Matt Brandon</h3>
                <h4>Freelancer</h4>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <p>
                  <i class="bi bi-quote quote-icon-left"></i>
                  <span>Quis quorum aliqua sint quem legam fore sunt eram irure aliqua veniam tempor noster veniam sunt culpa nulla illum cillum fugiat legam esse veniam culpa fore nisi cillum quid.</span>
                  <i class="bi bi-quote quote-icon-right"></i>
                </p>
                <img src="assets/img/person/person-m-13.webp" class="testimonial-img" alt="">
                <h3>John Larson</h3>
                <h4>Entrepreneur</h4>
              </div>
            </div><!-- End testimonial item -->

          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>

    </section><!-- /Testimonials Home Section -->

    
   

@stop