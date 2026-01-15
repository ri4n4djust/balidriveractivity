@extends('layouts.default')
@section('meta')
    <title>Not Found - The Swand</title>
    <meta content="car rental for full day tour and for you avtivities" name="description">
    <meta content="bali car rental, private tour, full day tou bali, bali tour" name="keywords">
@endsection
@section('content')
    
  <div id="notfound">
    <div class="notfound">
      <div class="notfound-404">
        <h3>Oops! Page not found</h3>
        <h1><span>4</span><span>0</span><span>4</span></h1>
      </div>
      <h2>we are sorry, but the page you requested was not found</h2>
    </div>
  </div>

    

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



        </div>

        <form action="forms/contact.php" method="post" role="form" class="php-email-form p-3 p-md-4">
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
          <div class="text-center"><button type="submit">Send Message</button></div>
        </form><!--End Contact Form -->

      </div>
    </section><!-- End Contact Section -->

    <style id="" media="all">
    /* cyrillic-ext */
    @font-face {
      font-family: 'Montserrat';
      font-style: normal;
      font-weight: 900;
      font-display: swap;
      src: url(/fonts.gstatic.com/s/montserrat/v25/JTUHjIg1_i6t8kCHKm4532VJOt5-QNFgpCvC73w0aXpsog.woff2) format('woff2');
      unicode-range: U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F;
    }
 
    * {
      -webkit-box-sizing: border-box;
      box-sizing: border-box
    }
 
    body {
      padding: 0;
      margin: 0
    }
 
    #notfound {
      position: relative;
      height: 100vh
    }
 
    #notfound .notfound {
      position: absolute;
      left: 50%;
      top: 50%;
      -webkit-transform: translate(-50%, -50%);
      -ms-transform: translate(-50%, -50%);
      transform: translate(-50%, -50%)
    }
 
    .notfound {
      max-width: 520px;
      width: 100%;
      line-height: 1.4;
      text-align: center
    }
 
    .notfound .notfound-404 {
      position: relative;
      height: 240px
    }
 
    .notfound .notfound-404 h1 {
      font-family: montserrat, sans-serif;
      position: absolute;
      left: 50%;
      top: 50%;
      -webkit-transform: translate(-50%, -50%);
      -ms-transform: translate(-50%, -50%);
      transform: translate(-50%, -50%);
      font-size: 252px;
      font-weight: 900;
      margin: 0;
      color: #262626;
      text-transform: uppercase;
      letter-spacing: -40px;
      margin-left: -20px
    }
 
    .notfound .notfound-404 h1>span {
      text-shadow: -8px 0 0 #fff
    }
 
    .notfound .notfound-404 h3 {
      font-family: cabin, sans-serif;
      position: relative;
      font-size: 16px;
      font-weight: 700;
      text-transform: uppercase;
      color: #262626;
      margin: 0;
      letter-spacing: 3px;
      padding-left: 6px
    }
 
    .notfound h2 {
      font-family: cabin, sans-serif;
      font-size: 20px;
      font-weight: 400;
      text-transform: uppercase;
      color: #000;
      margin-top: 0;
      margin-bottom: 25px
    }
 
    @media only screen and (max-width: 767px) {
      .notfound .notfound-404 {
        height: 200px
      }
 
      .notfound .notfound-404 h1 {
        font-size: 200px
      }
    }
 
    @media only screen and (max-width: 480px) {
      .notfound .notfound-404 {
        height: 162px
      }
 
      .notfound .notfound-404 h1 {
        font-size: 162px;
        height: 150px;
        line-height: 162px
      }
 
      .notfound h2 {
        font-size: 16px
      }
    }
  </style>   

@stop