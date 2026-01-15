@extends('layouts.default')
@section('meta')
    <title>The Swand - Reservation Detail</title>
@endsection
@section('content')

    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>Reservation Detail</h2>
          <ol>
            <li><a href="/">Home</a></li>
            <li>Reservation Detail</li>
          </ol>
        </div>

      </div>
    </div><!-- End Breadcrumbs -->
   
    <!-- ======= Gallery Section ======= -->
    <section id="gallery" class="gallery section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <!-- <h2>gallery</h2> -->
          <p>Reservation <span>Detail</span></p>
        </div>

        <div class="tab-content chefs">
         
            <div class="tab-header text-center">
              <!-- <p>Menu</p> -->
              <!-- <h3>Transport</h3> -->
            </div>
            <div class="row gy-4">
                {{ $detail[0]->no_reservasi}}
            </div>
        </div>

      </div>
    </section><!-- End Gallery Section -->



@stop