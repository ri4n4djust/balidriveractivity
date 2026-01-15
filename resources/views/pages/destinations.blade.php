@extends('layouts.default')
@section('meta')
    <title>Bali Best Place To join with us - The Swand</title>
    <meta content="we are company that acomodate room booking, tour travel and also property management, visit bali instereted place" name="description">
    <meta content="bali room booking, car rental bali, bali management property, ubud tour, bali tour" name="keywords">
@endsection
@section('content')
    
    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>Bali Destinations</h2>
          <ol>
            <li><a href="/">Home</a></li>
            <li>All Bali Destinations</li>
          </ol>
        </div>

      </div>
    </div><!-- End Breadcrumbs -->

    <!-- ======= Menu Section ======= -->
    <section id="menu" class="menu">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <!-- <h2>Our Menu</h2> -->
          <p>Best <span>Bali destinations place</span></p>
        </div>

        <ul class="nav nav-tabs d-flex justify-content-center" data-aos="fade-up" data-aos-delay="200">

          <li class="nav-item ">
            <a class="nav-link active show" data-bs-toggle="tab" data-bs-target="#menu-ubud">
              <h4>Ubud</h4>
            </a>
          </li><!-- End tab nav item -->

          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="tab" data-bs-target="#menu-south">
              <h4>South Bali Destinations</h4>
            </a><!-- End tab nav item -->

          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="tab" data-bs-target="#menu-north">
              <h4>North Bali Destinations</h4>
            </a>
          </li><!-- End tab nav item -->

          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="tab" data-bs-target="#menu-east">
              <h4>East Bali Destinations</h4>
            </a>
          </li>
          <!-- End tab nav item -->

          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="tab" data-bs-target="#menu-kintamani">
              <h4>Kintamani Bali Destinations</h4>
            </a>
          </li>
          <!-- End tab nav item -->

          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="tab" data-bs-target="#menu-west">
              <h4>West Bali Destinations</h4>
            </a>
          </li>
          <!-- End tab nav item -->

        </ul>

        <div class="tab-content chefs">
       

          <div class="tab-pane fade active show" id="menu-ubud">
            <div class="tab-header text-center">
              <!-- <p>Menu</p> -->
              <!-- <h3>Transport</h3> -->
            </div>
            <div class="row gy-3">
            @foreach ($destinasi as $tr)
            @if($tr->type == 'ubud')
              <!-- Menu Item -->
              <div class="col-lg-3 col-md-4 d-flex align-items-stretch" >
                <div class="chef-member">
                  <div class="member-img">
                    @php $gmbr = explode(";",$tr->foto) ; @endphp
                    <img src="assets/img/destinasi/{{ $gmbr[0] }}" class="img-fluid" alt="">
                    <div class="social">
                    </div>
                  </div>
                  <div class="member-info">
                    <h4>{{ $tr->name }}</h4>
                    <!-- <span>Cook</span> -->
                    <p>{!! cutText($tr->deskripsi, 300, 3) !!}</p>
                    <a href="/destinations/{{$tr->slug}}" class="btn-book-a-table">Detail</a>
                  </div>
                  
                </div>
              </div><!-- End Chefs Member -->
            @endif
            @endforeach
            </div>
          </div><!-- End Breakfast Menu Content -->
          <div class="tab-pane fade active show" id="menu-south">
            <div class="tab-header text-center">
              <!-- <p>Menu</p> -->
              <!-- <h3>Transport</h3> -->
            </div>
            <div class="row gy-3">
            @foreach ($destinasi as $tr)
            @if($tr->type == 'south')
              <!-- Menu Item -->
              <div class="col-lg-3 col-md-4 d-flex align-items-stretch" >
                <div class="chef-member">
                  <div class="member-img">
                    @php $gmbr = explode(";",$tr->foto) ; @endphp
                    <img src="assets/img/destinasi/{{ $gmbr[0] }}" class="img-fluid" alt="">
                    <div class="social">
                    </div>
                  </div>
                  <div class="member-info">
                    <h4>{{ $tr->name }}</h4>
                    <!-- <span>Cook</span> -->
                    <p>{!! cutText($tr->deskripsi, 300, 3) !!}</p>
                  </div>
                  <p class="price">
                    <div >
                      <a href="/destinations/{{$tr->slug}}" class="btn-book-a-table">Detail</a>
                    </div>
                  </p>
                </div>
              </div><!-- End Chefs Member -->
            @endif
            @endforeach
            </div>
          </div><!-- End Breakfast Menu Content -->
          <div class="tab-pane fade active show" id="menu-north">
            <div class="tab-header text-center">
              <!-- <p>Menu</p> -->
              <!-- <h3>Transport</h3> -->
            </div>
            <div class="row gy-3">
            @foreach ($destinasi as $tr)
            @if($tr->type == 'north')
              <!-- Menu Item -->
              <div class="col-lg-3 col-md-4 d-flex align-items-stretch" >
                <div class="chef-member">
                  <div class="member-img">
                    @php $gmbr = explode(";",$tr->foto) ; @endphp
                    <img src="assets/img/destinasi/{{ $gmbr[0] }}" class="img-fluid" alt="">
                    <div class="social">
                    </div>
                  </div>
                  <div class="member-info">
                    <h4>{{ $tr->name }}</h4>
                    <!-- <span>Cook</span> -->
                    <p>{!! cutText($tr->deskripsi, 300, 3) !!}</p>
                  </div>
                  <p class="price">
                    <div >
                      <a href="/destinations/{{$tr->slug}}" class="btn-book-a-table">Detail</a>
                    </div>
                  </p>
                </div>
              </div><!-- End Chefs Member -->
            @endif
            @endforeach
            </div>
          </div><!-- End Breakfast Menu Content -->
          <div class="tab-pane fade active show" id="menu-east">
            <div class="tab-header text-center">
              <!-- <p>Menu</p> -->
              <!-- <h3>Transport</h3> -->
            </div>
            <div class="row gy-3">
            @foreach ($destinasi as $tr)
            @if($tr->type == 'east')
              <!-- Menu Item -->
              <div class="col-lg-3 col-md-4 d-flex align-items-stretch" >
                <div class="chef-member">
                  <div class="member-img">
                    @php $gmbr = explode(";",$tr->foto) ; @endphp
                    <img src="assets/img/destinasi/{{ $gmbr[0] }}" class="img-fluid" alt="">
                    <div class="social">
                    </div>
                  </div>
                  <div class="member-info">
                    <h4>{{ $tr->name }}</h4>
                    <!-- <span>Cook</span> -->
                    <p>{!! cutText($tr->deskripsi, 300, 3) !!}</p>
                  </div>
                  <p class="price">
                    <div >
                      <a href="/destinations/{{$tr->slug}}" class="btn-book-a-table">Detail</a>
                    </div>
                  </p>
                </div>
              </div><!-- End Chefs Member -->
            @endif
            @endforeach
            </div>
          </div><!-- End Breakfast Menu Content -->
          <div class="tab-pane fade active show" id="menu-kintamani">
            <div class="tab-header text-center">
              <!-- <p>Menu</p> -->
              <!-- <h3>Transport</h3> -->
            </div>
            <div class="row gy-3">
            @foreach ($destinasi as $tr)
            @if($tr->type == 'kintamani')
              <!-- Menu Item -->
              <div class="col-lg-3 col-md-4 d-flex align-items-stretch" >
                <div class="chef-member">
                  <div class="member-img">
                    @php $gmbr = explode(";",$tr->foto) ; @endphp
                    <img src="assets/img/destinasi/{{ $gmbr[0] }}" class="img-fluid" alt="">
                    <div class="social">
                    </div>
                  </div>
                  <div class="member-info">
                    <h4>{{ $tr->name }}</h4>
                    <!-- <span>Cook</span> -->
                    <p>{!! cutText($tr->deskripsi, 300, 3) !!}</p>
                  </div>
                  <p class="price">
                    <div >
                      <a href="/destinations/{{$tr->slug}}" class="btn-book-a-table">Detail</a>
                    </div>
                  </p>
                </div>
              </div><!-- End Chefs Member -->
            @endif
            @endforeach
            </div>
          </div><!-- End Breakfast Menu Content -->
          <div class="tab-pane fade active show" id="menu-west">
            <div class="tab-header text-center">
              <!-- <p>Menu</p> -->
              <!-- <h3>Transport</h3> -->
            </div>
            <div class="row gy-3">
            @foreach ($destinasi as $tr)
            @if($tr->type == 'west')
              <!-- Menu Item -->
              <div class="col-lg-3 col-md-4 d-flex align-items-stretch" >
                <div class="chef-member">
                  <div class="member-img">
                    @php $gmbr = explode(";",$tr->foto) ; @endphp
                    <img src="assets/img/destinasi/{{ $gmbr[0] }}" class="img-fluid" alt="">
                    <div class="social">
                    </div>
                  </div>
                  <div class="member-info">
                    <h4>{{ $tr->name }}</h4>
                    <!-- <span>Cook</span> -->
                    <p>{!! cutText($tr->deskripsi, 300, 3) !!}</p>
                    <a href="/destinations/{{$tr->slug}}" class="btn-book-a-table">Detail</a>
                  </div>
                </div>
              </div><!-- End Chefs Member -->
            @endif
            @endforeach
            </div>
          </div><!-- End Breakfast Menu Content -->

          

          

        </div>

      </div>
    </section>
    
    <!-- End Menu Section -->

    <!-- Button trigger modal -->


    


    

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

    

@stop