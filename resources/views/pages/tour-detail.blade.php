@extends('layouts.default')
<?php
    $url = $_SERVER['REQUEST_URI'];
    $ur = explode('/', $url);
    $table = $ur[1];
    $slug = $ur[2]; 
?>
@if(isset($tourDetail))
@php 
    $tourDetail = DB::table($table)->where('slug', $slug)
            ->join('tour_fotos', 'tour_fotos.code', 'tour_packages.code')
            ->select('tour_packages.*', 'tour_fotos.foto')
            ->get(); 
    $lang = $tourDetail[0]->lang ;
    App::setLocale($lang);
@endphp
@php 
    $destinasi = DB::table('destinations')->where('lang', $lang)
                ->join('destination_fotos', 'destination_fotos.code', 'destinations.code')
                ->select('destinations.*', 'destination_fotos.foto')
                ->get(); 
    $activities = DB::table('activities')->where('lang', $lang)
                ->join('activity_fotos', 'activity_fotos.code', 'activities.code')
                ->select('activities.*', 'activity_fotos.foto')
                ->get(); 
@endphp
@endif

@section('meta')
    <title>The Swand - {{ $tourDetail[0]->tour_name }}</title>
    <meta content="{!! $tourDetail[0]->itinerary !!}" name="description">
    <meta content="{{ $tourDetail[0]->slug }}" name="keywords">
@endsection
@section('content')
    
    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>Tour Detail</h2>
          <ol>
            <li><a href="/">Home</a></li>
            <li>{{ $tourDetail[0]->tour_name }}</li>
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
            
            <div class="row gy-4">
                <div class="col-lg-6 position-relative about-img" data-aos="fade-up" data-aos-delay="150">
                    
                    <div class="position-relative mt-4">
                        <h4>{{ $tourDetail[0]->tour_name }}</h4>
                        <p>{!! $tourDetail[0]->itinerary !!}</p>
                        <p>{!! $tourDetail[0]->price !!}</p>
                        <p>{!! $tourDetail[0]->pickup !!}</p>
                        <p>{!! $tourDetail[0]->payment !!}</p>
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

                        @php $gmbra = explode(";",$tourDetail[0]->foto) ; @endphp
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
                            <img src="{{ asset('assets/img/tour/'. $slider) }}" class="d-block w-100" alt="$slider">
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
                    <p>{!! $tourDetail[0]->note !!}</p>

                    <p>
                    <h5>Destinations Can be Visit</h5>
                    <!-- <p>Tour Detail </p> -->
                    </p>
                    
                    @php $fasi = explode(";",$tourDetail[0]->destination) ; @endphp
                    <div class="row">
                    @foreach($destinasi as $desti)
                        @if(in_array($desti->id, $fasi))
                            @php $gmbr = explode(";",$desti->foto) ; @endphp
                            <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="300">
                                <div class="chef-member">
                                    <a href="/destinations/{{$desti->slug}}">
                                        <div class="member-img">
                                            <img src="{{ asset('assets/img/destinasi/'.$gmbr[0] )}}" class="img-fluid" alt="{{ $desti->name }}">
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
                    
                    @php $area = $tourDetail[0]->area_tour ; @endphp
                    
                    <div class="row">
                    @foreach($activities as $actv)
                    @php $kawasan = explode(";",$actv->area) ; @endphp
                        @if(in_array($area, $kawasan))
                            @php $gmbr = explode(";",$actv->foto) ; @endphp
                            <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="300">
                                <div class="chef-member">
                                    <a href="/activities/{{$actv->slug}}">
                                        <div class="member-img">
                                            <img src="{{ asset('assets/img/activity/'.$gmbr[0] )}}" class="img-fluid" alt="{{ $actv->name }}">
                                        </div>
                                        <div class="member-info">
                                            <small>{{$actv->name}} </small>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        @endif
                    @endforeach
                    </div>
             
                    
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