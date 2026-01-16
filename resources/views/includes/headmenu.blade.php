<header id="header" class="header d-flex align-items-center fixed-top">
    <div class="header-container container-fluid container-xl position-relative d-flex align-items-center justify-content-between">

      <a href="index.html" class="logo d-flex align-items-center me-auto me-xl-0">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <!-- <img src="assets/img/logo.webp" alt=""> -->
        <h1 class="sitename">Tour</h1>
      </a>

      <nav id="navmenu" class="navmenu">
        <ul>
          <li><a href="/" class="active">Home</a></li>
          <li><a href="/about">About</a></li>
          <li><a href="/destinations">Destinations</a></li>
          <li><a href="/tour_packages">Tours Package</a></li>
          <li><a href="/gallery">Gallery</a></li>
          <li><a href="/blog">Blog</a></li>
          <!-- <li class="dropdown"><a href="#"><span>More Pages</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
            <ul>
              <li><a href="destination-details.html">Destination Details</a></li>
              <li><a href="tour-details.html">Tour Details</a></li>
              <li><a href="booking.html">Booking</a></li>
              <li><a href="testimonials">Testimonials</a></li>
              <li><a href="faq.html">Frequently Asked Questions</a></li>
              <li><a href="blog-details.html">Blog Details</a></li>
              <li><a href="terms.html">Terms</a></li>
              <li><a href="privacy.html">Privacy</a></li>
              <li><a href="404.html">404</a></li>
            </ul>
          </li> -->
          <!-- <li class="dropdown"><a href="#"><span>Dropdown</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
            <ul>
              <li><a href="#">Dropdown 1</a></li>
              <li class="dropdown"><a href="#"><span>Deep Dropdown</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
                <ul>
                  <li><a href="#">Deep Dropdown 1</a></li>
                  <li><a href="#">Deep Dropdown 2</a></li>
                  <li><a href="#">Deep Dropdown 3</a></li>
                  <li><a href="#">Deep Dropdown 4</a></li>
                  <li><a href="#">Deep Dropdown 5</a></li>
                </ul>
              </li>
              <li><a href="#">Dropdown 2</a></li>
              <li><a href="#">Dropdown 3</a></li>
              <li><a href="#">Dropdown 4</a></li>
            </ul>
          </li> -->
          <li><a href="contact.html">Contact</a></li>
        </ul>
        <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
      </nav>


    </div>
  </header>
  <!-- Travel Hero Section -->
  <section id="travel-hero" class="travel-hero section dark-background">

    <div class="hero-background">
      <video autoplay="" muted="" loop="">
        <source src="assets/img/travel/video-2.mp4" type="video/mp4">
      </video>
      <div class="hero-overlay"></div>
    </div>

    <div class="container position-relative">
      <div class="row align-items-center">
        <div class="col-lg-7">
          <div class="hero-text" data-aos="fade-up" data-aos-delay="100">
            <h1 class="hero-title">Discover Your Perfect Journey</h1>
            <p class="hero-subtitle">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.</p>
            <div class="hero-buttons">
              <a href="#" class="btn btn-primary me-3">Start Exploring</a>
              <a href="#" class="btn btn-outline">Browse Tours</a>
            </div>
          </div>
        </div>

        <div class="col-lg-5">
          <div class="booking-form-wrapper" data-aos="fade-left" data-aos-delay="200">
            <div class="booking-form">
              <h3 class="form-title">Plan Your Adventure</h3>
              <form action="" class="">
                <div class="form-group mb-3">
                  <label for="destination">Destination</label>
                  <select name="destination" id="destination" class="form-select" required="">
                    <option value="">Choose your destination</option>
                    <option value="europe">Europe</option>
                    <option value="asia">Asia</option>
                    <option value="america">America</option>
                    <option value="africa">Africa</option>
                    <option value="oceania">Oceania</option>
                  </select>
                </div>

                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group mb-3">
                      <label for="checkin">Departure Date</label>
                      <input type="date" name="checkin" id="checkin" class="form-control" required="">
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group mb-3">
                      <label for="checkout">Return Date</label>
                      <input type="date" name="checkout" id="checkout" class="form-control" required="">
                    </div>
                  </div>
                </div>

                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group mb-3">
                      <label for="adults">Adults</label>
                      <select name="adults" id="adults" class="form-select" required="">
                        <option value="1">1 Adult</option>
                        <option value="2">2 Adults</option>
                        <option value="3">3 Adults</option>
                        <option value="4">4+ Adults</option>
                      </select>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group mb-3">
                      <label for="children">Children</label>
                      <select name="children" id="children" class="form-select">
                        <option value="0">No Children</option>
                        <option value="1">1 Child</option>
                        <option value="2">2 Children</option>
                        <option value="3">3+ Children</option>
                      </select>
                    </div>
                  </div>
                </div>

                <div class="form-group mb-3">
                  <label for="tour-type">Tour Type</label>
                  <select name="tour_type" id="tour-type" class="form-select" required="">
                    <option value="">Select tour type</option>
                    <option value="adventure">Adventure</option>
                    <option value="cultural">Cultural</option>
                    <option value="relaxation">Relaxation</option>
                    <option value="family">Family</option>
                    <option value="luxury">Luxury</option>
                  </select>
                </div>

                <button type="submit" class="btn btn-primary w-100">Find Your Perfect Trip</button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>

  </section><!-- /Travel Hero Section -->