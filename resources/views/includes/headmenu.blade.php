<header id="header" class="header d-flex align-items-center fixed-top">
    <div class="header-container container-fluid container-xl position-relative d-flex align-items-center justify-content-between">

      <a href="/" class="logo d-flex align-items-center me-auto me-xl-0">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <!-- <img src="assets/img/logo.webp" alt=""> -->
        <h1 class="sitename">Tour</h1>
      </a>
      
      <nav id="navmenu" class="navmenu">
        <ul>
          <li><a href="/" class="active">Home</a></li>
          <li><a href="/activities">{{ __('headmenu.tour_activity') }}</a></li>
          <li><a href="/destinations">{{ __('headmenu.destinations') }}</a></li>
          <li><a href="/tour_packages">{{ __('headmenu.tour_package') }}</a></li>
          <li><a href="/gallery">{{ __('headmenu.gallery') }}</a></li>
          <li><a href="/blog">Blog</a></li>
          <li><a href="/contact">{{ __('headmenu.contact') }}</a></li>
          <li class="dropdown">
            <a href="#"><span>{{ session('currency', 'USD') }}</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
            <ul>
              <li><a href="{!! route('currency', ['currency'=>'USD']) !!}">USD</a></li>
              <li><a href="{!! route('currency', ['currency'=>'IDR']) !!}">IDR</a></li>
            </ul>
          </li>
          <li class="dropdown">
            <a href="#"><span>{{ strtoupper(Lang::locale()) }}</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
            <ul>
              <li><a href="{!! route('lang', ['lang'=>'en', 'tabel'=>$tabel, 'slug' => $slug]) !!}">English</a></li>
              <li><a href="{!! route('lang', ['lang'=>'id', 'tabel'=>$tabel, 'slug' => $slug]) !!}">Indonesian</a></li>
            </ul>
          </li>
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
            <h1 class="hero-title">{{ __('headmenu.welcome_title') }}</h1>
            <p class="hero-subtitle">{{ __('headmenu.welcome_desc') }}</p>
            <div class="hero-buttons">
              <a href="#" class="btn btn-primary me-3">Start Exploring</a>
              <a href="#" class="btn btn-outline">Browse Tours</a>
            </div>
          </div>
        </div>

        <div class="col-lg-5">
          <div class="booking-form-wrapper" data-aos="fade-left" data-aos-delay="200">
            <div class="booking-form">
              <h3 class="form-title">{{ __('booking.title_planing') }}</h3>
              <form action="" class="">
                <div class="form-group mb-3">
                  <label for="destination">{{ __('booking.destination') }}</label>
                  <select name="destination" id="destination" class="form-select" required="">
                    <option value="">Choose your destination</option>
                    <option value="ubud">Ubud</option>
                    <option value="south">South Bali</option>
                    <option value="north">North Bali</option>
                    <option value="east">East Bali</option>
                    <option value="kintamani">Kintamani</option>
                    <option value="west">West Bali</option>
                  </select>
                </div>

                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group mb-3">
                      <label for="checkin">Date</label>
                      <input type="date" name="checkin" id="checkin" class="form-control" required="">
                    </div>
                  </div>
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
                </div>

                <div class="row">
                  
                  
                </div>

                <div class="form-group mb-3">
                  <label for="tour-type">{{ __('booking.type_of_tour') }}</label>
                  <select name="tour_type" id="tour-type" class="form-select" required="">
                    <option value="">Select tour type</option>
                    <option value="adventure">Activity</option>
                    <option value="cultural">Mix</option>
                    <option value="relaxation">Land</option>
                    <option value="family">Air</option>
                    <option value="luxury">Water</option>
                  </select>
                </div>

                <button type="submit" class="btn btn-primary w-100">{{ __('booking.submit') }}</button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>

  </section><!-- /Travel Hero Section -->