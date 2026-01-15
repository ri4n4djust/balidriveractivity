@extends('layouts.default')
<?php
    $url = $_SERVER['REQUEST_URI'];
    $ur = explode('/', $url);
    $table = $ur[1];
    $slug = $ur[2]; 
?>
@if(isset($activityDetail))
    @php 
        $activityDetail = DB::table($table)->where('slug', $slug)
                    ->join('activity_fotos', 'activity_fotos.code', 'activities.code')
                    ->select('activities.*', 'activity_fotos.foto')
                    ->get(); 
        $lang = $activityDetail[0]->lang ;
        App::setLocale($lang);
    @endphp
    @php 
        $product = DB::table('products')->get();
        $country = DB::table('countries')->get(); 
    @endphp
@endif

@section('meta')
    <title>{{ $activityDetail[0]->name }} -The Swand</title>
    <meta content="{!! $activityDetail[0]->deskripsi !!}" name="description">
    <meta content="{{ $activityDetail[0]->slug }}" name="keywords">
@endsection
@section('content')
@php 
$des = $activityDetail[0]->deskripsi ; 
$desk = explode("</p>", $des) ;
@endphp
    
    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>Activity Detail</h2>
          <ol>
            <li><a href="/">Home</a></li>
            <li>{{ $activityDetail[0]->name }}</li>
          </ol>
        </div>

      </div>
    </div><!-- End Breadcrumbs -->

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
        <div class="container" data-aos="fade-up">

            <!-- <div class="section-header"> -->
            <!-- <h2>About Us</h2> -->
            <!-- <p>Tour Detail </p> -->
            <!-- </div> -->
            <div class="row">
                <div class="col-lg-12 position-relative mt-0" data-aos="fade-up" data-aos-delay="150">
                    <h4>{{ $activityDetail[0]->name }}</h4>
                </div>
                <div class="col-lg-6 position-relative mt-0" data-aos="fade-up" data-aos-delay="150">
                    <p>{!! $desk[0] !!}</p>
                </div>
                <div class="col-lg-6 position-relative about-img mt-0" data-aos="fade-up" data-aos-delay="150">
                    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">

                        @php $gmbra = explode(";",$activityDetail[0]->foto) ; @endphp
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
                            <img src="{{ asset('assets/img/activity/'. $slider) }}" class="d-block w-100" alt="$slider">
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
                    
                </div>
                <div class="row mt-0">
                @php $code = $activityDetail[0]->code ; @endphp

                @foreach($products as $prod)
                @php $pr = explode(";", $prod->parent_type); @endphp
                    @if(in_array($code, $pr))

                    <!-- Menu Item -->
                    <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="300">
                        <div class="chef-member">
                        <div class="member-img">
                            @php $gmbr = explode(";",$prod->product_foto) ; @endphp
                            @php $desa = explode("</p>", $prod->product_des) ; @endphp
                            <img src="{{ asset('assets/img/products/'.$gmbr[0]) }}" class="img-fluid" alt="">
                            <div class="social">
                            </div>
                        </div>
                        <div class="member-info">
                            <h4>{{ $prod->product_name }}</h4>
                            <!-- <span>Cook</span> -->
                            <p>{!! cutText($desa[0], 300, 1) !!}</p>
                        </div>
                        <p class="price">{{ number_format($prod->price) ; }}</p>
                        <div class="col-5 form-group d-flex">
                            <a href="#" class="btn-book-a-table" id="{{ $prod->product_code }}" onclick="bookNow(this)">book Now</a>
                        </div>
                        </div>
                        
                    </div><!-- End Chefs Member -->                    
                    @endif
                
                @endforeach
                </div>
                
                @php 
                $leng = count($desk) ;
                @endphp
                @for($i = 1;$i < $leng ;$i++)
                <div class="col-lg-12 position-relative mt-0" data-aos="fade-up" data-aos-delay="150">
                    <p>{!! $desk[$i] !!}</p>
                </div>
                @endfor
            </div>
            

        </div>
    </section><!-- End About Section -->
   
        <div class="modal fade" id="trModal-booking" tabindex="-1000" aria-labelledby="trModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="trModalLabel">Form Booking</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close" onclick="closeModal()">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <h4><span id="judul_product"></span></h4>
                <form cautocomplete="off" >
                    <div class="row">
                        <div class="col-xl-6 form-group">
                            <input type="hidden" name="code" class="form-control" id="code" value="{{ $prod->product_code }}">
                        <input type="text" name="name_act" class="form-control" id="name_act" placeholder="Name" required>
                        </div>
                            <div class="col-xl-6 form-group">
                            <input type="email" class="form-control" name="email" id="email" placeholder="Email" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xl-6 form-group">
                            <input type="number" class="form-control" name="mobile" id="mobile" placeholder="mobile" required>
                            <p><small>Include the + symbol, country code, and area code.</small></p>  
                        </div>
                        <div class="col-xl-6 form-group">
                        <input type="hidden" name="nationality" class="form-control" id="nationality" required>
                        <select id="country_name" class="form-control" onchange="getComboA(this)" required>
                            <option value="">Nationality</option>
                            @foreach($country as $count)
                            <option value="{{ $count->country_code }}">{{ $count->country_name }}</option>
                            @endforeach
                        </select>
                        </div>
                    </div>
                    
                    <div class="row">
                        
                        <div class="col-xl-2 form-group">
                            Adult
                            <input type="number" name="adult" class="form-control" id="adult" placeholder="Adult" required>
                        </div>

                        <div class="col-xl-4 form-group">
                            Cek In 
                            <input class="form-control" name="datefilter" id="datefilter" required>
                            <input type="hidden" class="form-control" name="tgl_reservasi" id="tgl_reservasi" required>
                            <input type="hidden" name="room_no" id="room_no" >
                            <input type="hidden" name="rate_dolar" id="rate_dolar" required>
                        </div>
                        <div class="col-xl-6 form-group">
                            Payment Type
                            <select name="tipe_bayar" id="tipe_bayar" class="form-control" onchange="getOption()">
                                <option value="deposit">Deposit</option>
                                <option value="full">Full Payment</option>
                            </select>
                        </div>
                    </div>
                </form>

                
            </div>
            <!-- <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div> -->
            </div>
        </div>
        </div>
    

    @section('scripts')
    <script type="text/javascript">
        document.addEventListener("DOMContentLoaded",  
        
        function () { 
            console.log('page loaded');
            // Code to be executed when the DOM is ready
            // document.getElementById('adult').max = 2;
            document.getElementById('tgl_reservasi').value = moment().format('YYYY-MM-DD h:mm:ss'); // new Date(); 
            const tipe = document.getElementById('tipe_bayar').value ;

            var guestData = JSON.parse(localStorage.getItem('guest'));
            if(guestData.name !== ""){
                document.getElementById('name_act').value =  guestData.name;
                document.getElementById('email').value =  guestData.email;
                document.getElementById('mobile').value =  guestData.phone;
                document.querySelector('#nationality').value = guestData.nationality;
                document.querySelector('#country_name').value = guestData.nationality;
            }
            
            // console.log(guestData.name);
        }, false);
        let id;
        function bookNow(selectObject){
            // id = $(this).data("id");
            // console.log(selectObject.id);
            $.ajax({
                type: "POST",
                url: "/get-product",
                data: { "code": selectObject.id },
                error: function (request, error) {
                    // console.log(arguments);
                },
                success: function (result) {
                    // console.log(result.data)
                    $("#judul_product").text(result.data.product_name);
                    $('#trModal-booking').modal('show');

                },
                // dataType: "json"
            });
            
        }
        function closeModal(){
            $('#trModal-booking').modal('hide');
        }
    
    </script>
    @endsection
@stop