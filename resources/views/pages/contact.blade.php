@extends('layouts.default')
@section('meta')
    <title>The Swand - Contact US</title>
    <meta content="We are company that manage property and also rent for acomodation." name="description">
    <meta content="room booking, manage hotel, manage villa, transport, travel, tour" name="keywords">
@endsection
@section('content')

    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <!-- <h2>Hotel Detail</h2> -->
          <!-- <ol> -->
            <!-- <li><a href="index.html">Home</a></li>
            <li>Sample Inner Page</li> -->
          <!-- </ol> -->
        </div>

      </div>
    </div><!-- End Breadcrumbs -->

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2>{{ __('headmenu.about_us') }}</h2>
          <p>{{ __('headmenu.about_des') }} <span></span></p>
        </div>

        <div class="row gy-4">
          <div class="col-lg-7 position-relative about-img" style="background-image: url(assets/img/about.jpg) ;" data-aos="fade-up" data-aos-delay="150">
            <div class="call-us position-absolute">
              <h4>{{ __('headmenu.about_book') }}</h4>
              
              <a href="https://api.whatsapp.com/send?phone=+6282340064488&text=Halo" target="_blank" class="btn-book-a-table">
                  <img src="assets/img/wa.png" class="img-fluid">+62 8234 006 4488
                </a>
              
            </div>
          </div>
          <div class="col-lg-5 d-flex align-items-end" data-aos="fade-up" data-aos-delay="300">
            <div class="content ps-0 ps-lg-5">
              <p class="fst-italic">
                We are company that manage property and also rent for acomodation. 
              </p>
              <ul>
                <li><i class="bi bi-check2-all"></i> As traveller : we are your friend, family and guide as you need.</li>
                <li><i class="bi bi-check2-all"></i> As Traveller : we make your holly day to be awesome and memoriable,.</li>
                <li><i class="bi bi-check2-all"></i> As Traveller : rooms, transport, private tour as you wish or our idea.</li>
              </ul>
              <p>dont be hastitate to contact us on mobile or whatsapp number 24H/27.</p>
              <p>Or you have property still confuse to manage, don't worry sit back, take a braath and relax let our team do the best.</p>
              <ul>
                <li><i class="bi bi-check2-all"></i> As Property Owner : Increase booking from OTA.</li>
                <li><i class="bi bi-check2-all"></i> As Property Owner : Increase Revenue, neat report, </li>
                <li><i class="bi bi-check2-all"></i> As Property Owner : and also taking care all about the property.</li>
              </ul>
              <!-- <div class="position-relative mt-4">
                <img src="assets/img/about-2.jpg" class="img-fluid" alt="">
                <a href="https://www.youtube.com/watch?v=LXb3EKWsInQ" class="glightbox play-btn"></a>
              </div> -->
            </div>
          </div>
        </div>

      </div>
    </section><!-- End About Section -->
   
    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2>Contact</h2>
          <p>Need Help? <span>Contact Us</span></p>
        </div>

        <div class="mb-3">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d986.1957654155755!2d115.17408542285924!3d-8.6168148017417!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd239e1f895d5b3%3A0xad8aa8fe6cf83d1d!2sPerumahan%20Pesona%20gaji%20Dalung%20Block%204!5e0!3m2!1sid!2sid!4v1710597857163!5m2!1sid!2sid" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
        <!-- End Google Maps -->

        <div class="row gy-4">

          <!-- <div class="col-md-6">
            <div class="info-item  d-flex align-items-center">
              <i class="icon bi bi-map flex-shrink-0"></i>
              <div>
                <h3>Our Office Address</h3>
                <p>AJalan Genta Sari Blok IV Gang Amerta Sari No 7 <br>
              Dalung Badung Bali- ID 80361</p>
              </div>
            </div>
          </div> -->
          <!-- End Info Item -->

          <!-- <div class="col-md-6">
            <div class="info-item d-flex align-items-center">
              <i class="icon bi bi-envelope flex-shrink-0"></i>
              <div>
                <h3>Email Us</h3>
                <p>the.swand26@gmail.com</p>
              </div>
            </div>
          </div> -->
          <!-- End Info Item -->

          <!-- <div class="col-md-6">
            <div class="info-item  d-flex align-items-center">
              <i class="icon bi bi-telephone flex-shrink-0"></i>
              <div>
                <h3>Call Us</h3>
                <p>+62 8234 006 4488</p>
              </div>
            </div>
          </div> -->
          <!-- End Info Item -->

          <!-- <div class="col-md-6">
            <div class="info-item  d-flex align-items-center">
              <i class="icon bi bi-share flex-shrink-0"></i>
              <div>
                <h3>Opening Hours</h3>
                <div><strong>Mon-Sat:</strong> 11AM - 23PM;
                  <strong>Sunday:</strong> Closed
                </div>
              </div>
            </div>
          </div> -->
          <!-- End Info Item -->

        </div>
        
        
        @if(session()->has('message'))
            <div class="alert alert-success">
                {{ session()->get('message') }}
            </div>
        @endif
        @if ($errors->any())
            <div class="alert alert-danger" role="alert">
                <ul class="mb-0 mt-0">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="contact-us" id="contactForm" method="post" role="form" class="php-email-form p-3 p-md-4"  >
        @csrf
          <div class="row">
            <div class="col-xl-6 form-group">
              <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
            </div>
            <div class="col-xl-6 form-group">
              <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
            </div>
          </div>
          <div class="form-group">
            <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
          </div>
          <div class="form-group">
            <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
          </div>
          <div class="my-3">
            <div class="loading">Loading</div>
            <div class="error-message"></div>
            <div class="sent-message">Your message has been sent. Thank you!</div>
          </div>
          <div class="text-center">
            
          <div class="form-group{{ $errors->has('g-recaptcha-response') ? ' has-error' : '' }}">
              <div class="col-md-6">
                  {!! RecaptchaV3::field('contact') !!}
                  @if ($errors->has('g-recaptcha-response'))
                      <span class="help-block">
                          <strong>{{ $errors->first('g-recaptcha-response') }}</strong>
                      </span>
                  @endif
              </div>
          </div>

          
          <button type="submit">Send Message</button>
          <!-- <button class="g-recaptcha btn btn-primary btn-lg "
                                    data-sitekey="{{ config('services.recaptcha_v3.siteKey') }}"
                                    data-callback="onSubmit"
                                    type="submit"
                                    data-action="submitContact">Submit</button> -->
          </div>
        </form><!--End Contact Form -->

      </div>
    </section><!-- End Contact Section -->


@stop