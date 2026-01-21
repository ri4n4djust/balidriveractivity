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
            </div>
            <div class="col-lg-4">
              <div class="tour-highlights">
                <h3>Tour Highlights</h3>
                <ul>
                  <li><i class="bi bi-check-circle"></i> 4-Star Boutique Hotels</li>
                  <li><i class="bi bi-check-circle"></i> Expert Local Guides</li>
                  <li><i class="bi bi-check-circle"></i> Daily Breakfast Included</li>
                  <li><i class="bi bi-check-circle"></i> Small Group (Max 16)
                  </li>
                  <li><i class="bi bi-check-circle"></i> UNESCO World Heritage Sites</li>
                  <li><i class="bi bi-check-circle"></i> Cultural Experiences</li>
                </ul>
              </div>
            </div>
          </div>
        </div>

        <!-- Itinerary -->
        <div class="tour-itinerary" data-aos="fade-up" data-aos-delay="300">
          <h2>Day-by-Day Itinerary</h2>
          <div class="itinerary-timeline">

            <div class="itinerary-item">
              <div class="day-number">Day 1</div>
              <div class="day-content">
                <h4>Arrival in Venice</h4>
                <p>Welcome to the enchanting city of canals. Upon arrival, check into your waterfront hotel and enjoy a welcome dinner featuring fresh seafood and local Venetian specialties.</p>
                <div class="day-details">
                  <span class="accommodation"><i class="bi bi-building"></i> Hotel Palazzo Vitturi</span>
                  <span class="meals"><i class="bi bi-cup-hot"></i> Welcome Dinner</span>
                </div>
              </div>
            </div>

            <div class="itinerary-item">
              <div class="day-number">Day 2</div>
              <div class="day-content">
                <h4>Venice City Tour</h4>
                <p>Explore St. Mark's Square, visit the magnificent Basilica, and take a gondola ride through the romantic canals. Afternoon visit to Murano Island to see traditional glassblowing demonstrations.</p>
                <div class="day-details">
                  <span class="accommodation"><i class="bi bi-building"></i> Hotel Palazzo Vitturi</span>
                  <span class="meals"><i class="bi bi-cup-hot"></i> Breakfast</span>
                </div>
              </div>
            </div>

            <div class="itinerary-item">
              <div class="day-number">Day 3</div>
              <div class="day-content">
                <h4>Florence Discovery</h4>
                <p>Travel to Florence, the cradle of Renaissance. Visit the Uffizi Gallery, admire Michelangelo's David, and climb to the top of the Duomo for breathtaking city views.</p>
                <div class="day-details">
                  <span class="accommodation"><i class="bi bi-building"></i> Hotel Davanzati</span>
                  <span class="meals"><i class="bi bi-cup-hot"></i> Breakfast</span>
                </div>
              </div>
            </div>

            <div class="itinerary-item">
              <div class="day-number">Days 4-5</div>
              <div class="day-content">
                <h4>Rome Exploration</h4>
                <p>Two full days in the Eternal City. Visit the Colosseum, Roman Forum, Vatican City with the Sistine Chapel, and enjoy an authentic cooking class with a local Roman family.</p>
                <div class="day-details">
                  <span class="accommodation"><i class="bi bi-building"></i> Hotel Artemide</span>
                  <span class="meals"><i class="bi bi-cup-hot"></i> Breakfast, Cooking Class</span>
                </div>
              </div>
            </div>

            <div class="itinerary-item">
              <div class="day-number">Days 6-8</div>
              <div class="day-content">
                <h4>Santorini Paradise</h4>
                <p>Flight to Greece and arrival in Santorini. Three days to explore the iconic blue-domed churches, stunning sunsets in Oia, wine tasting, and relaxation on unique volcanic beaches.</p>
                <div class="day-details">
                  <span class="accommodation"><i class="bi bi-building"></i> Canaves Oia Hotel</span>
                  <span class="meals"><i class="bi bi-cup-hot"></i> Breakfast Daily</span>
                </div>
              </div>
            </div>

            <div class="itinerary-item">
              <div class="day-number">Days 9-11</div>
              <div class="day-content">
                <h4>Istanbul Adventure</h4>
                <p>Fly to Istanbul for three incredible days exploring where Europe meets Asia. Visit Hagia Sophia, Blue Mosque, Grand Bazaar, and enjoy a Bosphorus cruise at sunset.</p>
                <div class="day-details">
                  <span class="accommodation"><i class="bi bi-building"></i> Four Seasons Sultanahmet</span>
                  <span class="meals"><i class="bi bi-cup-hot"></i> Breakfast, Farewell Dinner</span>
                </div>
              </div>
            </div>

            <div class="itinerary-item">
              <div class="day-number">Day 12</div>
              <div class="day-content">
                <h4>Departure</h4>
                <p>Transfer to Istanbul Airport for your departure flight. Take home memories of an incredible Mediterranean adventure that will last a lifetime.</p>
                <div class="day-details">
                  <span class="meals"><i class="bi bi-cup-hot"></i> Breakfast</span>
                </div>
              </div>
            </div>

          </div>
        </div>

        <!-- Inclusions -->
        <div class="tour-inclusions" data-aos="fade-up" data-aos-delay="400">
          <div class="row">
            <div class="col-lg-6">
              <div class="included-section">
                <h3><i class="bi bi-check-circle-fill"></i> What's Included</h3>
                <ul class="inclusion-list included">
                  <li><i class="bi bi-check"></i> Round-trip flights between destinations</li>
                  <li><i class="bi bi-check"></i> 11 nights accommodation (4-star hotels)</li>
                  <li><i class="bi bi-check"></i> Daily breakfast at all hotels</li>
                  <li><i class="bi bi-check"></i> Professional English-speaking guides</li>
                  <li><i class="bi bi-check"></i> All entrance fees to attractions</li>
                  <li><i class="bi bi-check"></i> Private transportation</li>
                  <li><i class="bi bi-check"></i> Welcome and farewell dinners</li>
                  <li><i class="bi bi-check"></i> Gondola ride in Venice</li>
                  <li><i class="bi bi-check"></i> Wine tasting in Santorini</li>
                  <li><i class="bi bi-check"></i> Bosphorus cruise in Istanbul</li>
                </ul>
              </div>
            </div>
            <div class="col-lg-6">
              <div class="excluded-section">
                <h3><i class="bi bi-x-circle-fill"></i> What's Not Included</h3>
                <ul class="inclusion-list excluded">
                  <li><i class="bi bi-x"></i> International flights to/from departure city</li>
                  <li><i class="bi bi-x"></i> Lunch and dinner (except specified)</li>
                  <li><i class="bi bi-x"></i> Personal expenses and shopping</li>
                  <li><i class="bi bi-x"></i> Travel insurance (recommended)</li>
                  <li><i class="bi bi-x"></i> Tips for guides and drivers</li>
                  <li><i class="bi bi-x"></i> Optional activities and excursions</li>
                  <li><i class="bi bi-x"></i> Alcoholic beverages (except wine tasting)</li>
                  <li><i class="bi bi-x"></i> Visa fees if required</li>
                  <li><i class="bi bi-x"></i> Single supplement for solo travelers</li>
                </ul>
              </div>
            </div>
          </div>
        </div>

        <!-- Pricing -->
        <div class="tour-pricing" data-aos="fade-up" data-aos-delay="500">
          <h2>Pricing &amp; Dates</h2>
          <div class="pricing-table">
            <div class="pricing-header">
              <div class="price-item">
                <h3>Starting from</h3>
                <div class="price-amount">$3,299</div>
                <p>per person (double occupancy)</p>
              </div>
            </div>
            <div class="pricing-details">
              <div class="row">
                <div class="col-lg-4">
                  <div class="price-type">
                    <h4>Double Occupancy</h4>
                    <div class="price">$3,299</div>
                    <p>per person</p>
                  </div>
                </div>
                <div class="col-lg-4">
                  <div class="price-type">
                    <h4>Single Supplement</h4>
                    <div class="price">+$899</div>
                    <p>additional</p>
                  </div>
                </div>
                <div class="col-lg-4">
                  <div class="price-type">
                    <h4>Group Discount</h4>
                    <div class="price">-$200</div>
                    <p>for 6+ people</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="available-dates">
              <h3>2024 Departure Dates</h3>
              <div class="dates-grid">
                <div class="date-option">
                  <div class="date">May 15-26</div>
                  <div class="availability">6 spots left</div>
                </div>
                <div class="date-option">
                  <div class="date">June 12-23</div>
                  <div class="availability">Available</div>
                </div>
                <div class="date-option">
                  <div class="date">July 10-21</div>
                  <div class="availability">Almost full</div>
                </div>
                <div class="date-option">
                  <div class="date">August 14-25</div>
                  <div class="availability">Available</div>
                </div>
                <div class="date-option">
                  <div class="date">September 18-29</div>
                  <div class="availability">Available</div>
                </div>
                <div class="date-option">
                  <div class="date">October 9-20</div>
                  <div class="availability">11 spots left</div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- Booking Form -->
        <div class="booking-section" id="booking" data-aos="fade-up" data-aos-delay="600">
          <div class="booking-card">
            <h2>Book This Tour</h2>
            <form action="forms/tour-booking.php" method="post" class="php-email-form">
              <div class="row">
                <div class="col-lg-6">
                  <div class="form-group">
                    <label for="travel-date">Preferred Travel Date</label>
                    <select name="date" id="travel-date" class="form-control" required="">
                      <option value="">Select a date</option>
                      <option value="May 15-26">May 15-26, 2024</option>
                      <option value="June 12-23">June 12-23, 2024</option>
                      <option value="July 10-21">July 10-21, 2024</option>
                      <option value="August 14-25">August 14-25, 2024</option>
                      <option value="September 18-29">September 18-29, 2024</option>
                      <option value="October 9-20">October 9-20, 2024</option>
                    </select>
                  </div>
                </div>
                <div class="col-lg-6">
                  <div class="form-group">
                    <label for="travelers">Number of Travelers</label>
                    <select name="travelers" id="travelers" class="form-control" required="">
                      <option value="">Select travelers</option>
                      <option value="1">1 Traveler</option>
                      <option value="2">2 Travelers</option>
                      <option value="3">3 Travelers</option>
                      <option value="4">4 Travelers</option>
                      <option value="5">5 Travelers</option>
                      <option value="6+">6+ Travelers</option>
                    </select>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-lg-6">
                  <div class="form-group">
                    <label for="name">Full Name</label>
                    <input type="text" name="name" id="name" class="form-control" required="">
                  </div>
                </div>
                <div class="col-lg-6">
                  <div class="form-group">
                    <label for="email">Email Address</label>
                    <input type="email" name="email" id="email" class="form-control" required="">
                  </div>
                </div>
              </div>
              <div class="form-group">
                <label for="phone">Phone Number</label>
                <input type="tel" name="phone" id="phone" class="form-control">
              </div>
              <div class="form-group">
                <label for="message">Special Requests or Questions</label>
                <textarea name="message" id="message" rows="4" class="form-control" placeholder="Any dietary restrictions, accessibility needs, or special occasions..."></textarea>
              </div>
              <div class="loading">Loading</div>
              <div class="error-message"></div>
              <div class="sent-message">Your booking request has been sent. We'll contact you within 24 hours!</div>
              <button type="submit" class="btn-submit">Send Booking Request</button>
            </form>
          </div>
        </div>

        <!-- Gallery -->
        <div class="tour-gallery" data-aos="fade-up" data-aos-delay="700">
          <h2>Photo Gallery</h2>
          <div class="gallery-grid">
            <div class="gallery-item">
              <a href="assets/img/travel/destination-1.webp" class="glightbox">
                <img src="assets/img/travel/destination-1.webp" alt="Venice Canals" class="img-fluid" loading="lazy">
              </a>
            </div>
            <div class="gallery-item">
              <a href="assets/img/travel/destination-2.webp" class="glightbox">
                <img src="assets/img/travel/destination-2.webp" alt="Florence Cathedral" class="img-fluid" loading="lazy">
              </a>
            </div>
            <div class="gallery-item">
              <a href="assets/img/travel/destination-3.webp" class="glightbox">
                <img src="assets/img/travel/destination-3.webp" alt="Roman Colosseum" class="img-fluid" loading="lazy">
              </a>
            </div>
            <div class="gallery-item">
              <a href="assets/img/travel/destination-4.webp" class="glightbox">
                <img src="assets/img/travel/destination-4.webp" alt="Santorini Sunset" class="img-fluid" loading="lazy">
              </a>
            </div>
            <div class="gallery-item">
              <a href="assets/img/travel/destination-5.webp" class="glightbox">
                <img src="assets/img/travel/destination-5.webp" alt="Hagia Sophia" class="img-fluid" loading="lazy">
              </a>
            </div>
            <div class="gallery-item">
              <a href="assets/img/travel/destination-6.webp" class="glightbox">
                <img src="assets/img/travel/destination-6.webp" alt="Mediterranean Cuisine" class="img-fluid" loading="lazy">
              </a>
            </div>
          </div>
        </div>

        <!-- Final CTA -->
        <div class="final-cta" data-aos="fade-up" data-aos-delay="1000">
          <div class="cta-content">
            <h2>Ready for Your Mediterranean Adventure?</h2>
            <p>Limited spots available for 2024 departures. Book now to secure your place on this incredible journey.</p>
            <div class="cta-actions">
              <a href="booking.html" class="btn-primary">Book Now</a>
              <a href="tel:+1-555-123-4567" class="btn-secondary">Call Us: +1 (555) 123-4567</a>
            </div>
            <div class="urgency-banner">
              <i class="bi bi-clock"></i>
              <span>Next departure in 45 days - Only 6 spots remaining!</span>
            </div>
          </div>
        </div>

      </div>

    </section><!-- /Travel Tour Details Section --><!-- Page Title -->
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

        <!-- Hero Section -->
        <div class="tour-hero">
          <div class="hero-image-wrapper">
            <img src="assets/img/travel/showcase-9.webp" alt="Mediterranean Adventure Tour" class="img-fluid w-100">
            <div class="hero-overlay">
              <div class="hero-content">
                <h1>Mediterranean Adventure</h1>
                <div class="hero-meta">
                  <span class="duration"><i class="bi bi-calendar"></i> 12 Days</span>
                  <span class="destination"><i class="bi bi-geo-alt"></i> Italy, Greece &amp; Turkey</span>
                  <span class="rating"><i class="bi bi-star-fill"></i> 4.8 (124 reviews)</span>
                </div>
                <p class="hero-tagline">Experience ancient wonders, pristine beaches, and vibrant cultures across three magnificent countries</p>
                <a href="#booking" class="btn-book">Check Availability</a>
              </div>
            </div>
          </div>
        </div>

        <!-- Tour Overview -->
        <div class="tour-overview" data-aos="fade-up" data-aos-delay="200">
          <div class="row">
            <div class="col-lg-8">
              <h2>Tour Overview</h2>
              <p>Embark on an unforgettable journey through the heart of the Mediterranean, where ancient civilizations left their mark on stunning landscapes. This comprehensive tour takes you from the romantic canals of Venice to the sun-soaked islands of Santorini, culminating in the magical city of Istanbul where East meets West.</p>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
            </div>
            <div class="col-lg-4">
              <div class="tour-highlights">
                <h3>Tour Highlights</h3>
                <ul>
                  <li><i class="bi bi-check-circle"></i> 4-Star Boutique Hotels</li>
                  <li><i class="bi bi-check-circle"></i> Expert Local Guides</li>
                  <li><i class="bi bi-check-circle"></i> Daily Breakfast Included</li>
                  <li><i class="bi bi-check-circle"></i> Small Group (Max 16)
                  </li>
                  <li><i class="bi bi-check-circle"></i> UNESCO World Heritage Sites</li>
                  <li><i class="bi bi-check-circle"></i> Cultural Experiences</li>
                </ul>
              </div>
            </div>
          </div>
        </div>

        <!-- Itinerary -->
        <div class="tour-itinerary" data-aos="fade-up" data-aos-delay="300">
          <h2>Day-by-Day Itinerary</h2>
          <div class="itinerary-timeline">

            <div class="itinerary-item">
              <div class="day-number">Day 1</div>
              <div class="day-content">
                <h4>Arrival in Venice</h4>
                <p>Welcome to the enchanting city of canals. Upon arrival, check into your waterfront hotel and enjoy a welcome dinner featuring fresh seafood and local Venetian specialties.</p>
                <div class="day-details">
                  <span class="accommodation"><i class="bi bi-building"></i> Hotel Palazzo Vitturi</span>
                  <span class="meals"><i class="bi bi-cup-hot"></i> Welcome Dinner</span>
                </div>
              </div>
            </div>

            <div class="itinerary-item">
              <div class="day-number">Day 2</div>
              <div class="day-content">
                <h4>Venice City Tour</h4>
                <p>Explore St. Mark's Square, visit the magnificent Basilica, and take a gondola ride through the romantic canals. Afternoon visit to Murano Island to see traditional glassblowing demonstrations.</p>
                <div class="day-details">
                  <span class="accommodation"><i class="bi bi-building"></i> Hotel Palazzo Vitturi</span>
                  <span class="meals"><i class="bi bi-cup-hot"></i> Breakfast</span>
                </div>
              </div>
            </div>

            <div class="itinerary-item">
              <div class="day-number">Day 3</div>
              <div class="day-content">
                <h4>Florence Discovery</h4>
                <p>Travel to Florence, the cradle of Renaissance. Visit the Uffizi Gallery, admire Michelangelo's David, and climb to the top of the Duomo for breathtaking city views.</p>
                <div class="day-details">
                  <span class="accommodation"><i class="bi bi-building"></i> Hotel Davanzati</span>
                  <span class="meals"><i class="bi bi-cup-hot"></i> Breakfast</span>
                </div>
              </div>
            </div>

            <div class="itinerary-item">
              <div class="day-number">Days 4-5</div>
              <div class="day-content">
                <h4>Rome Exploration</h4>
                <p>Two full days in the Eternal City. Visit the Colosseum, Roman Forum, Vatican City with the Sistine Chapel, and enjoy an authentic cooking class with a local Roman family.</p>
                <div class="day-details">
                  <span class="accommodation"><i class="bi bi-building"></i> Hotel Artemide</span>
                  <span class="meals"><i class="bi bi-cup-hot"></i> Breakfast, Cooking Class</span>
                </div>
              </div>
            </div>

            <div class="itinerary-item">
              <div class="day-number">Days 6-8</div>
              <div class="day-content">
                <h4>Santorini Paradise</h4>
                <p>Flight to Greece and arrival in Santorini. Three days to explore the iconic blue-domed churches, stunning sunsets in Oia, wine tasting, and relaxation on unique volcanic beaches.</p>
                <div class="day-details">
                  <span class="accommodation"><i class="bi bi-building"></i> Canaves Oia Hotel</span>
                  <span class="meals"><i class="bi bi-cup-hot"></i> Breakfast Daily</span>
                </div>
              </div>
            </div>

            <div class="itinerary-item">
              <div class="day-number">Days 9-11</div>
              <div class="day-content">
                <h4>Istanbul Adventure</h4>
                <p>Fly to Istanbul for three incredible days exploring where Europe meets Asia. Visit Hagia Sophia, Blue Mosque, Grand Bazaar, and enjoy a Bosphorus cruise at sunset.</p>
                <div class="day-details">
                  <span class="accommodation"><i class="bi bi-building"></i> Four Seasons Sultanahmet</span>
                  <span class="meals"><i class="bi bi-cup-hot"></i> Breakfast, Farewell Dinner</span>
                </div>
              </div>
            </div>

            <div class="itinerary-item">
              <div class="day-number">Day 12</div>
              <div class="day-content">
                <h4>Departure</h4>
                <p>Transfer to Istanbul Airport for your departure flight. Take home memories of an incredible Mediterranean adventure that will last a lifetime.</p>
                <div class="day-details">
                  <span class="meals"><i class="bi bi-cup-hot"></i> Breakfast</span>
                </div>
              </div>
            </div>

          </div>
        </div>

        <!-- Inclusions -->
        <div class="tour-inclusions" data-aos="fade-up" data-aos-delay="400">
          <div class="row">
            <div class="col-lg-6">
              <div class="included-section">
                <h3><i class="bi bi-check-circle-fill"></i> What's Included</h3>
                <ul class="inclusion-list included">
                  <li><i class="bi bi-check"></i> Round-trip flights between destinations</li>
                  <li><i class="bi bi-check"></i> 11 nights accommodation (4-star hotels)</li>
                  <li><i class="bi bi-check"></i> Daily breakfast at all hotels</li>
                  <li><i class="bi bi-check"></i> Professional English-speaking guides</li>
                  <li><i class="bi bi-check"></i> All entrance fees to attractions</li>
                  <li><i class="bi bi-check"></i> Private transportation</li>
                  <li><i class="bi bi-check"></i> Welcome and farewell dinners</li>
                  <li><i class="bi bi-check"></i> Gondola ride in Venice</li>
                  <li><i class="bi bi-check"></i> Wine tasting in Santorini</li>
                  <li><i class="bi bi-check"></i> Bosphorus cruise in Istanbul</li>
                </ul>
              </div>
            </div>
            <div class="col-lg-6">
              <div class="excluded-section">
                <h3><i class="bi bi-x-circle-fill"></i> What's Not Included</h3>
                <ul class="inclusion-list excluded">
                  <li><i class="bi bi-x"></i> International flights to/from departure city</li>
                  <li><i class="bi bi-x"></i> Lunch and dinner (except specified)</li>
                  <li><i class="bi bi-x"></i> Personal expenses and shopping</li>
                  <li><i class="bi bi-x"></i> Travel insurance (recommended)</li>
                  <li><i class="bi bi-x"></i> Tips for guides and drivers</li>
                  <li><i class="bi bi-x"></i> Optional activities and excursions</li>
                  <li><i class="bi bi-x"></i> Alcoholic beverages (except wine tasting)</li>
                  <li><i class="bi bi-x"></i> Visa fees if required</li>
                  <li><i class="bi bi-x"></i> Single supplement for solo travelers</li>
                </ul>
              </div>
            </div>
          </div>
        </div>

        <!-- Pricing -->
        <div class="tour-pricing" data-aos="fade-up" data-aos-delay="500">
          <h2>Pricing &amp; Dates</h2>
          <div class="pricing-table">
            <div class="pricing-header">
              <div class="price-item">
                <h3>Starting from</h3>
                <div class="price-amount">$3,299</div>
                <p>per person (double occupancy)</p>
              </div>
            </div>
            <div class="pricing-details">
              <div class="row">
                <div class="col-lg-4">
                  <div class="price-type">
                    <h4>Double Occupancy</h4>
                    <div class="price">$3,299</div>
                    <p>per person</p>
                  </div>
                </div>
                <div class="col-lg-4">
                  <div class="price-type">
                    <h4>Single Supplement</h4>
                    <div class="price">+$899</div>
                    <p>additional</p>
                  </div>
                </div>
                <div class="col-lg-4">
                  <div class="price-type">
                    <h4>Group Discount</h4>
                    <div class="price">-$200</div>
                    <p>for 6+ people</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="available-dates">
              <h3>2024 Departure Dates</h3>
              <div class="dates-grid">
                <div class="date-option">
                  <div class="date">May 15-26</div>
                  <div class="availability">6 spots left</div>
                </div>
                <div class="date-option">
                  <div class="date">June 12-23</div>
                  <div class="availability">Available</div>
                </div>
                <div class="date-option">
                  <div class="date">July 10-21</div>
                  <div class="availability">Almost full</div>
                </div>
                <div class="date-option">
                  <div class="date">August 14-25</div>
                  <div class="availability">Available</div>
                </div>
                <div class="date-option">
                  <div class="date">September 18-29</div>
                  <div class="availability">Available</div>
                </div>
                <div class="date-option">
                  <div class="date">October 9-20</div>
                  <div class="availability">11 spots left</div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- Booking Form -->
        <div class="booking-section" id="booking" data-aos="fade-up" data-aos-delay="600">
          <div class="booking-card">
            <h2>Book This Tour</h2>
            <form action="forms/tour-booking.php" method="post" class="php-email-form">
              <div class="row">
                <div class="col-lg-6">
                  <div class="form-group">
                    <label for="travel-date">Preferred Travel Date</label>
                    <select name="date" id="travel-date" class="form-control" required="">
                      <option value="">Select a date</option>
                      <option value="May 15-26">May 15-26, 2024</option>
                      <option value="June 12-23">June 12-23, 2024</option>
                      <option value="July 10-21">July 10-21, 2024</option>
                      <option value="August 14-25">August 14-25, 2024</option>
                      <option value="September 18-29">September 18-29, 2024</option>
                      <option value="October 9-20">October 9-20, 2024</option>
                    </select>
                  </div>
                </div>
                <div class="col-lg-6">
                  <div class="form-group">
                    <label for="travelers">Number of Travelers</label>
                    <select name="travelers" id="travelers" class="form-control" required="">
                      <option value="">Select travelers</option>
                      <option value="1">1 Traveler</option>
                      <option value="2">2 Travelers</option>
                      <option value="3">3 Travelers</option>
                      <option value="4">4 Travelers</option>
                      <option value="5">5 Travelers</option>
                      <option value="6+">6+ Travelers</option>
                    </select>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-lg-6">
                  <div class="form-group">
                    <label for="name">Full Name</label>
                    <input type="text" name="name" id="name" class="form-control" required="">
                  </div>
                </div>
                <div class="col-lg-6">
                  <div class="form-group">
                    <label for="email">Email Address</label>
                    <input type="email" name="email" id="email" class="form-control" required="">
                  </div>
                </div>
              </div>
              <div class="form-group">
                <label for="phone">Phone Number</label>
                <input type="tel" name="phone" id="phone" class="form-control">
              </div>
              <div class="form-group">
                <label for="message">Special Requests or Questions</label>
                <textarea name="message" id="message" rows="4" class="form-control" placeholder="Any dietary restrictions, accessibility needs, or special occasions..."></textarea>
              </div>
              <div class="loading">Loading</div>
              <div class="error-message"></div>
              <div class="sent-message">Your booking request has been sent. We'll contact you within 24 hours!</div>
              <button type="submit" class="btn-submit">Send Booking Request</button>
            </form>
          </div>
        </div>

        <!-- Gallery -->
        <div class="tour-gallery" data-aos="fade-up" data-aos-delay="700">
          <h2>Photo Gallery</h2>
          <div class="gallery-grid">
            <div class="gallery-item">
              <a href="assets/img/travel/destination-1.webp" class="glightbox">
                <img src="assets/img/travel/destination-1.webp" alt="Venice Canals" class="img-fluid" loading="lazy">
              </a>
            </div>
            <div class="gallery-item">
              <a href="assets/img/travel/destination-2.webp" class="glightbox">
                <img src="assets/img/travel/destination-2.webp" alt="Florence Cathedral" class="img-fluid" loading="lazy">
              </a>
            </div>
            <div class="gallery-item">
              <a href="assets/img/travel/destination-3.webp" class="glightbox">
                <img src="assets/img/travel/destination-3.webp" alt="Roman Colosseum" class="img-fluid" loading="lazy">
              </a>
            </div>
            <div class="gallery-item">
              <a href="assets/img/travel/destination-4.webp" class="glightbox">
                <img src="assets/img/travel/destination-4.webp" alt="Santorini Sunset" class="img-fluid" loading="lazy">
              </a>
            </div>
            <div class="gallery-item">
              <a href="assets/img/travel/destination-5.webp" class="glightbox">
                <img src="assets/img/travel/destination-5.webp" alt="Hagia Sophia" class="img-fluid" loading="lazy">
              </a>
            </div>
            <div class="gallery-item">
              <a href="assets/img/travel/destination-6.webp" class="glightbox">
                <img src="assets/img/travel/destination-6.webp" alt="Mediterranean Cuisine" class="img-fluid" loading="lazy">
              </a>
            </div>
          </div>
        </div>

        <!-- Final CTA -->
        <div class="final-cta" data-aos="fade-up" data-aos-delay="1000">
          <div class="cta-content">
            <h2>Ready for Your Mediterranean Adventure?</h2>
            <p>Limited spots available for 2024 departures. Book now to secure your place on this incredible journey.</p>
            <div class="cta-actions">
              <a href="booking.html" class="btn-primary">Book Now</a>
              <a href="tel:+1-555-123-4567" class="btn-secondary">Call Us: +1 (555) 123-4567</a>
            </div>
            <div class="urgency-banner">
              <i class="bi bi-clock"></i>
              <span>Next departure in 45 days - Only 6 spots remaining!</span>
            </div>
          </div>
        </div>

      </div>

    </section><!-- /Travel Tour Details Section -->

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
        <div class="container" data-aos="fade-up">

            <!-- <div class="section-header"> -->
            <!-- <h2>About Us</h2> -->
            <!-- <p>Tour Detail </p> -->
            <!-- </div> -->
            
            <div class="row gy-4">
                <div class="col-lg-6 position-relative about-img" data-aos="fade-up" data-aos-delay="150">
                    
                    <div class="position-relative mt-4">
                        <h4>{{ $mixDetail[0]->product_name }}</h4>
                        <p>{!! $mixDetail[0]->product_des !!}</p>
                    </div>
                </div>
                <div class="col-lg-6 position-relative about-img" data-aos="fade-up" data-aos-delay="150">
                    <p>
                        <h4>Make Booking</h4>
                        <!-- <img src="/assets/img/about.jpg" class="img-fluid" alt=""> -->
                        <a href="https://api.whatsapp.com/send?phone=+6282340064488&text=Halo" target="_blank" class="btn-book-a-table">
                            <img src="{{ asset('assets/img/wa.png')}}" class="img-fluid">+62 8234 006 4488
                        </a>
                    </p>
                    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">

                        @php $gmbra = explode(";",$mixDetail[0]->product_foto) ; @endphp
                        @php $gmbr = array_slice($gmbra, 0, -1) ; @endphp
                        @foreach($gmbr as $value)
                        <li data-target=".carouselExampleCaptions" data-slide-to="{{ $loop->index }}" class="{{ $loop->first ? 'active' : '' }}"></li>
                        @endforeach
                        <!-- <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li> -->
                        
                        </ol>
                        <div class="carousel-inner">
                        
                        @foreach($gmbr as $key => $slider)
                        <!-- {{ $key }} -->
                        <div class="carousel-item {{$key == 0 ? 'active' : ''}}">
                            <img src="{{ asset('assets/img/products/'. $slider) }}" class="d-block w-100" alt="$slider">
                        </div>
                        @endforeach
                        
                        </div>
                        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                        </a>
                    </div>

                    <p>
                    <h5>Destinations Can be Visit</h5>
                    <!-- <p>Tour Detail </p> -->
                    </p>

                    @php $fasi = explode(";",$mixDetail[0]->parent_type) ; @endphp
                    <div class="row">
                    @foreach($destinasi as $desti)
                        @if(in_array($desti->id, $fasi))
                            @php $gmbr = explode(";",$desti->foto) ; @endphp
                            <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="300">
                                <div class="chef-member">
                                    <a href="/destinations/{{$desti->slug}}">
                                        <div class="member-img">
                                            <img src="{{ asset('assets/img/product/'.$gmbr[0] )}}" class="img-fluid" alt="{{ $desti->name }}">
                                        </div>
                                        <div class="member-info">
                                            <small>{{$desti->name}}</small>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        @endif
                    @endforeach
                    </div>

                    <p>
                    <h5>Some Activity</h5>
                    <!-- <p>Tour Detail </p> -->
                    </p>

                    
             
                    
                </div>
            </div>
            <!-- <div class="col-lg-5 d-flex align-items-end" data-aos="fade-up" data-aos-delay="300">
                <div class="content ps-0 ps-lg-5">

                <div class="position-relative mt-4">
                    <img src="assets/img/about-2.jpg" class="img-fluid" alt="">
                    <a href="https://www.youtube.com/watch?v=LXb3EKWsInQ" class="glightbox play-btn"></a>
                </div>


                <p class="fst-italic">
                    
                    Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
                    velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident
                    Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. 
                    Excepteur sint occaecat cupidatat non proident 
                    Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate 
                    velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident 
                </p>
                <ul>
                    <li><i class="bi bi-check2-all"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat.</li>
                    <li><i class="bi bi-check2-all"></i> Duis aute irure dolor in reprehenderit in voluptate velit.</li>
                    <li><i class="bi bi-check2-all"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate trideta storacalaperda mastiro dolore eu fugiat nulla pariatur.</li>
                </ul>
                

                
                
                </div>
            </div>
            </div> -->

        </div>
    </section><!-- End About Section -->

    

@stop