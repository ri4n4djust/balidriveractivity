@extends('layouts.default')
@section('meta')
    <title>Bali Accommodation Rental- The Swand</title>
    <meta content="bali vacation, bali accommodation, bali hotels, hotels bali, trip to bali, luxury vacation homes, tour bali, bali tour package, luxury rental homes, bali holiday packages 
" name="description">
    <meta content="bali vacation, bali accommodation, bali hotels, hotels bali, trip to bali, luxury vacation homes, tour bali, bali tour package, luxury rental homes, bali holiday packages 
" name="keywords">
@endsection
@section('content')
    
    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>Bali Hotels</h2>
          <ol>
            <li><a href="/">Home</a></li>
            <li>All Hotels</li>
          </ol>
        </div>

      </div>
    </div><!-- End Breadcrumbs -->

    <!-- ======= Menu Section ======= -->
    <section id="menu" class="menu">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <!-- <h2>Our Menu</h2> -->
          <p>Rooms   <span>Bookings</span></p>
        </div>

          

        <div class="tab-content chefs">
         
            <div class="tab-header text-center">
              <!-- <p>Menu</p> -->
              <!-- <h3>Transport</h3> -->
            </div>
            <div class="row gy-3">
            @foreach ($hotels as $ht)
              <!-- Menu Item -->
              <div class="col-lg-3 col-md-4 d-flex align-items-stretch" >
                <div class="chef-member">
                  <div class="member-img">
                      @php $gmbr = explode(";",$ht->foto) ; @endphp
                      
                      <img src="{{asset('assets/img/rooms/'.$gmbr[0] ) }}" class="img-fluid" alt="{{ $gmbr[0] }}">
                      
                      <div class="social">
                        <!-- <a href="">Disc -50%</a> -->
                        <a href="">Feature</i></a>
                        <a href="" data-toggle="modal" data-target="#trModal{{$ht->id}}" alt="Preview">View</a>
                      </div>
                    </div>
                    <div class="member-info">
                      <h4>{{ $ht->title}}</h4>
                          @php 
                              $jml = 0;
                              $review = DB::table('review_ratings')->where('product_code', $ht->code)->sum('star_rating');
                              $count = DB::table('review_ratings')->where('product_code', $ht->code)->count('star_rating');
                          @endphp
                          <div class="rated">
                          @php 
                            $jml = $review / ($count ? $count : 1);
                          @endphp
                            @for($i=1; $i<=$jml; $i++)                                                      
                                <label class="star-rating-complete" title="text">{{$i}} stars</label>
                            @endfor
                          </div>
                          ({{$count}} Reviews)<p>
                      <h5>Top Facilities</h5>
                      <div class="row gy-4">
                        @php $fasi = explode(";",$ht->facility) ; @endphp
                        @for ($i = 1; $i < 4; $i++)
                          @foreach ($fasilitas as $fas)
                            @if($fasi[$i] == $fas->id)
                            <div class="col-1">
                            <i class="bi bi-check2-all"></i> {!! $fas->icon !!}
                            <!-- <i class="fa-sharp fa-solid fa-person-swimming"></i> -->
                            </div>
                            @endif
                          @endforeach
                        @endfor
                      </div>

                    @foreach ($rate as $rat)
                      @if($ht->code == $rat->kode_kamar)
                        IDR {{ number_format($rat->harga, 2) }} / Night <br>
                        {{ $rat->stok }} room available on our site
                      @endif
                    @endforeach

                    <p class="price">
                      <a href="/bookings/{{$ht->slug}}" class="btn-book-a-table">Book Now</a>
                    </p>
                  </div>
                </div>
              </div><!-- End Chefs Member -->
            @endforeach
            </div>
          

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