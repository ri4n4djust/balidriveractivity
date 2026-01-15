@extends('layouts.default')
@section('meta')
    <title>The Swand - Room Booking, Travel and Management Hospitality</title>
    <meta content="we are company that acomodate room booking, tour travel and also property management" name="description">
    <meta content="bali room booking, car rental bali, bali management property" name="keywords">
@endsection
@section('content')
    

    <!-- ======= Menu Section ======= -->
    <section id="menu" class="menu">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <!-- <h2>Our Menu</h2> -->
          <p>Check Our <span>Best Booking Service</span></p>
        </div>

        <ul class="nav nav-tabs d-flex justify-content-center" data-aos="fade-up" data-aos-delay="200">

          <li class="nav-item ">
            <a class="nav-link active show" data-bs-toggle="tab" data-bs-target="#menu-bookings">
            <i class="fa-solid fa-hotel"></i>
              <h4>Bookings</h4>
            </a>
          </li><!-- End tab nav item -->

          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="tab" data-bs-target="#menu-transport">
            <i class="fa-solid fa-car"></i>
              <h4>Transport</h4>
            </a><!-- End tab nav item -->

          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="tab" data-bs-target="#menu-tour">
            <i class="fa-solid fa-person-walking-luggage"></i>
              <h4>Tour</h4>
            </a>
          </li><!-- End tab nav item -->

          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="tab" data-bs-target="#menu-package">
              <i class="fa-solid fa-people-roof"></i>
              <h4>Package</h4>
            </a>
          </li>
          <!-- End tab nav item -->

        </ul>

        <div class="tab-content chefs">

          <div class="tab-pane fade active show" id="menu-bookings">

            <div class="tab-header text-center">
              <!-- <p>Bookings</p> -->
              <!-- <h3>Rooms Booking</h3> -->
            </div>

            <div class="row gy-5">
              <!-- {{$kamar}} -->
              <form action="forms/book-a-table.php" method="post" role="form" class="php-email-form" data-aos="fade-up" data-aos-delay="100">
                <div class="row gy-4">

                  <div class="col-lg-5 input-group mb-3">
                    <div class="input-group-prepend">
                      <span class="input-group-text" id="basic-addon1">Cek In - Cek Out</span>
                    </div>
                    <input type="text" class="form-control" name="cekin" id="cekin" aria-describedby="basic-addon1">
                  </div>
                  <div class="col-lg-3 input-group mb-3">
                    <div class="input-group-prepend">
                      <span class="input-group-text" id="basic-addon1">Area</span>
                    </div>
                    <select class="form-control">
                      <option>All Area</option>
                      <option>Canggu</option>
                      <option>Seminyak</option>
                      <option>Ubud</option>
                    </select>
                  </div>
                  <!-- <div class="col-lg-2 col-md-2">
                    <input type="email" class="form-control" name="email" id="email" placeholder="cek Out" data-rule="email" data-msg="Please enter a valid email">
                    <div class="validate"></div>
                  </div> -->
                  <div class="col-lg-2 col-md-2">
                    <button type="submit" class="btn-book-a-table" data-toggle="modal" data-target="#exampleModal">
                        Seacrh
                    </button>
                  </div>
                </div>
              </form>
              <script type="text/javascript" src="https://cdn.jsdelivr.net/jquery/latest/jquery.min.js"></script>
              <script>
              $(function() {
                $('input[name="cekin"]').daterangepicker({
                  "autoApply": true,
                  "locale": {
                      "format": "MMM DD, YYYY",
                      "separator": " - ",
                      "applyLabel": "Apply",
                      "cancelLabel": "Cancel",
                      "fromLabel": "From",
                      "toLabel": "To",
                      "customRangeLabel": "Custom",
                      "weekLabel": "W",
                      "daysOfWeek": ["Su","Mo","Tu","We","Th","Fr","Sa"],
                      "monthNames": ["January","February","March","April","May","June","July","August","September","October","November","December"],
                      "firstDay": 1
                  },
                  "minDate": new Date(),
                  "startDate": new Date(),//  moment().format('MM/DD/YYYY'),
                  "endDate": new Date(Date.now() + ( 3600 * 1000 * 24)), // moment().format('MM/DD/YYYY'),
                  "opens": "center",
                  "drops": "auto"
                }, function(start, end, label) {
                  // var years = moment().diff(start, 'years');
                  console.log(moment(start).format('YYYY-MM-DD'))
                });
              });
              </script>

          <div class="row gy-4">
            @foreach ($kamar as $detail)
              <div class="col-lg-4 position-relative about-img" data-aos="fade-up" data-aos-delay="150">
                <div class="chef-member">
                  <!-- <h4>Book a Table</h4> -->
                  <div class="member-img">
                    @php $gmbr = explode(";",$detail->foto) ; @endphp
                    
                    <img src="assets/img/rooms/{{ $gmbr[1] }}" class="img-fluid" alt="">
                    
                    <div class="social">
                      <!-- <a href=""><i class="bi bi-twitter"></i></a>
                      <a href=""><i class="bi bi-facebook"></i></a>
                      <a href=""><i class="bi bi-instagram"></i></a> -->
                      <a href="" data-toggle="modal" data-target="#exampleModal{{$detail->id}}" alt="Preview"><i class="bi bi-eye"></i></a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-8 d-flex align-items-end" data-aos="fade-up" data-aos-delay="300">
                <div class="content ps-0 ps-lg-5">
                <h4>{{ $detail->title}}</h4>
                  <p class="fst-italic">
                  {!! substr($detail->desc, 0, 150) !!}
                  </p>

                  <div class="row">
                  @php $fasi = explode(";",$detail->facility) ; @endphp
                    @for ($i = 1; $i < 4; $i++)
                      @foreach ($fasilitas as $fas)
                        @if($fasi[$i] == $fas->id)
                        <div class="col-2 form-group">
                        <i class="bi bi-check2-all"></i> {!! $fas->icon !!}
                        <!-- <i class="fa-sharp fa-solid fa-person-swimming"></i> -->
                        </div>
                        @endif
                      @endforeach
                    @endfor
                        <div class="col-5 form-group d-flex" data-aos="fade-up" data-aos-delay="200">
                          
                            <a href="/bookings/{{$detail->slug}}" class="btn-book-a-table">Book Now</a>
                          
                        </div>

                  </div>
                  
                  @foreach ($rate as $rat)
                  <p>
                      @if($detail->code == $rat->kode_kamar)
                        IDR {{ number_format($rat->harga, 2) }} / Night <br>
                        {{ $rat->stok }} room available on our site
                      @endif
                    <!-- Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
                    velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident -->
                  </p>
                  @endforeach

                  
                </div>
              </div>
            @endforeach
            </div>
                        

            <!-- Modal -->
            @foreach ($kamar as $detail)
            <div class="modal fade" id="exampleModal{{$detail->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog modal-lg">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                  
                    <div class="row gy-4">
                      <div class="col-md-6">
                        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                          <ol class="carousel-indicators">

                            @php $gmbra = explode(";",$detail->foto) ; @endphp
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
                            <div class="carousel-item {{$key == 0 ? 'active' : ''}}">
                              <img src="assets/img/rooms/{{ $slider }}" class="d-block w-100" alt="">
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
                      </div><!-- End Info Item -->

                      <div class="col-md-6">
                        <div class="info-item d-flex align-items-left">
                          <div>
                            <p>{!! $detail->desc !!}</p>
                          </div>
                        </div>
                      </div><!-- End Info Item -->
                    </div>

                    
                  </div>
                  <!-- <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                  </div> -->
                </div>
              </div>
            </div>
            @endforeach

              

            </div>
          </div><!-- End Starter Menu Content -->

          <div class="tab-pane fade" id="menu-transport">

            <div class="tab-header text-center">
              <!-- <p>Menu</p> -->
              <!-- <h3>Transport</h3> -->
            </div>

            <div class="row gy-4">

            @foreach ($transport as $tr)
              <!-- Menu Item -->
              <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="300">
                <div class="chef-member">
                  <div class="member-img">
                    @php $gmbr = explode(";",$tr->foto) ; @endphp
                    
                    <img src="assets/img/transport/{{ $gmbr[0] }}" class="img-fluid" alt="">
                    {{ $gmbr[1] }}
                    
                    <div class="social">
                      <!-- <a href=""><i class="bi bi-twitter"></i></a>
                      <a href=""><i class="bi bi-facebook"></i></a>
                      <a href=""><i class="bi bi-instagram"></i></a> -->
                      <a href="" data-toggle="modal" data-target="#trModal{{$tr->id}}" alt="Preview"><i class="bi bi-eye"></i></a>
                    </div>
                  </div>
                  
                  <div class="member-info">
                    <h4>{{ $tr->nama}}</h4>
                    <!-- <span>Cook</span> -->
                    <p>{{ substr($tr->deskripsi, 0, 200)}}</p>
                    
                  <!-- </div>
                  <div class="member-info"> -->
                    <!-- <i class="bi bi-wifi"></i>
                    <i class="bi bi-twitter"></i> -->
                    @php $fs = explode(",",$tr->fasilitas) ; @endphp
                    @foreach ($fs as $fas)
                      <i class="bi bi-check2-all"></i> {{$fas}}<br>
                      <!-- <i class="bi bi-check2-all"></i> Shower
                      <i class="bi bi-check2-all"></i> Free Wifi -->
                    @endforeach
                  </div>
                  <p class="price">
                    IDR {{ number_format($tr->harga, 2) }} for {{ $tr->waktu }} Hours <br>
                    <!-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#trModal{{$tr->id}}">
                      Detail
                    </button> -->
                    <!-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#trModal{{$tr->id}}">
                      Book Now
                    </button> -->
                    <div >
                      <a href="https://api.whatsapp.com/send?phone=+62818688114&text=Halo" target="_blank" class="btn-book-a-table">
                      
                      <img src="assets/img/wa.png" > Book Now </a>
                    </div>
                  </p>
                  
                </div>
              </div><!-- End Chefs Member -->
            @endforeach

            
            </div>
          </div><!-- End Breakfast Menu Content -->

          <div class="tab-pane fade" id="menu-tour">

            <div class="tab-header text-center">
              <!-- <p>Menu</p> -->
              <h6>Our best tour</h6>
            </div>
            <div class="row gy-5">

              @foreach ($tour as $tur)
                <!-- Menu Item -->
                <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="300">
                  <div class="chef-member">
                    <div class="member-img">
                      @php $gmbr = explode(";",$tur->foto) ; @endphp
                      
                      <img src="assets/img/tour/{{ $gmbr[0] }}" class="img-fluid" alt="{{ $gmbr[0] }}">
                      
                      <div class="social">
                        <!-- <a href=""><i class="bi bi-twitter"></i></a>
                        <a href=""><i class="bi bi-facebook"></i></a>
                        <a href=""><i class="bi bi-instagram"></i></a> -->
                        <a href="" data-toggle="modal" data-target="#trModal{{$tr->id}}" alt="Preview"><i class="bi bi-eye"></i></a>
                      </div>
                    </div>
                    
                    <div class="member-info">
                      <h4>{{ $tur->tour_name}}</h4>
                      <!-- <span>Cook</span> -->
                      <!-- <p>{{ substr($tur->deskripsi, 0, 200)}}</p> -->
                      
                    <!-- </div>
                    <div class="member-info"> -->
                      <!-- <i class="bi bi-wifi"></i>
                      <i class="bi bi-twitter"></i> -->
                      <!-- @php $fs = explode(",",$tur->destination) ; @endphp -->
                      <!-- @foreach ($fs as $fas) -->
                        <!-- <i class="bi bi-check2-all"></i> {{$fas}}<br> -->
                        <!-- <i class="bi bi-check2-all"></i> Shower
                        <i class="bi bi-check2-all"></i> Free Wifi -->
                      <!-- @endforeach -->
                    </div>
                    <p class="price">
                      <!-- IDR {{ number_format($tr->harga, 2) }} for {{ $tr->waktu }} Hours <br> -->
                      <!-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#trModal{{$tr->id}}">
                        Detail
                      </button> -->
                      <a href="/tour_packages/{{$tur->slug}}" class="btn-book-a-table">Detail</a>
                    </p>
                    
                  </div>
                </div><!-- End Chefs Member -->
              @endforeach

            
            </div>
          </div><!-- End Lunch Menu Content -->

          <div class="tab-pane fade" id="menu-package">

            <div class="tab-header text-center">
              <!-- <p>Menu</p> -->
              <!-- <h3>Package</h3> -->
            </div>

            <div class="row gy-5">
            @foreach ($paket as $paket)
              <div class="col-lg-4 menu-item">
                <a href="assets/img/menu/menu-item-1.png" class="glightbox"><img src="assets/img/menu/menu-item-1.png" class="menu-img img-fluid" alt=""></a>
                <h4>{{$paket->name}}</h4>
                <p class="ingredients">
                  Lorem, deren, trataro, filede, nerada
                </p>
                <p class="price">
                  $5.95
                </p>
              </div><!-- Menu Item -->
            @endforeach
              
            </div>
          </div><!-- End Lunch Menu Content -->

          

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