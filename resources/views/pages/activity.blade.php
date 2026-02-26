@extends('layouts.default')
@section('meta')
    <title>Bali Best Activity - Bali Driver Activity</title>
    <meta content="bali destinations, visit bali interesting place" name="description">
    <meta content="bali good tour, car rental bali, ubud tour, bali tour" name="keywords">
@endsection
@section('content')
    
    <!-- Page Title -->
    <div class="page-title dark-background" data-aos="fade" style="background-image: url(assets/img/banner/{{ $banner ?? 'act.webp' }});">
      <div class="container position-relative">
        <h1>Activity</h1>
        <p>Esse dolorum voluptatum ullam est sint nemo et est ipsa porro placeat quibusdam quia assumenda numquam molestias.</p>
        <nav class="breadcrumbs">
          <ol>
            <li><a href="/">Home</a></li>
            <li class="current">Activity</li>
          </ol>
        </nav>
      </div>
    </div><!-- End Page Title -->

    <!-- Travel Destinations Section -->
    <section id="travel-destinations" class="travel-destinations section">

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <!-- <div class="row">
          <div class="col-lg-8 mx-auto text-center">
            <h2>Uncover Captivating Travel Experiences</h2>
            <p class="mb-5">From the bustling energy of cosmopolitan cities to the serene embrace of untouched wilderness, embark on incredible journeys to the planet's most enchanting destinations. We're here to help you craft memories that will last a lifetime.</p>
          </div>
        </div> -->

        <div class="isotope-layout" data-default-filter="*" data-layout="masonry" data-sort="original-order">
          <ul class="destination-filters isotope-filters" data-aos="fade-up" data-aos-delay="200">
            <li data-filter="*" class="filter-active">All Activities</li>
            <li data-filter=".filter-land">Land Activity</li>
            <li data-filter=".filter-air">Air Activity</li>
            <li data-filter=".filter-water">Water Activity</li>

          </ul><!-- End Destination Filters -->

          <div class="row gy-4 isotope-container" data-aos="fade-up" data-aos-delay="300">

          @foreach ($activity as $act)
            <div class="col-lg-4 col-md-6 destination-item isotope-item filter-{{ strtolower($act->type) }}">
              <a href="{{ route('activities.detail', $act->slug) }}" class="destination-tile">
                <div class="tile-image">
                  @php $gmbr = explode(";",$act->foto) ; @endphp
                  <img src="{{asset('assets/img/activity/'.$gmbr[0] ) }}" alt="{{ $act->name }}" class="img-fluid" loading="lazy">
                  <div class="overlay-content">
                    <span class="destination-tag luxury">{{ strtoupper($act->type) }}</span>
                    <div class="destination-info">
                      <h4>{{ $act->name }}</h4>
                      <p>{!! cutText($act->deskripsi, 100, 3) !!}</p>
                      <div class="destination-stats">
                        <span class="tours-available"><i class="bi bi-map"></i> 15 Escapes</span>
                        <span class="starting-price">From $2,450</span>
                      </div>
                    </div>
                  </div>
                </div>
              </a>
            </div><!-- End Destination Item -->
          @endforeach
            

          </div><!-- End Destinations Container -->

        </div>

        <div class="row mt-5">
          <div class="col-lg-10 mx-auto text-center" data-aos="fade-up" data-aos-delay="400">
            <div class="planning-assistance">
              <div class="assistance-content">
                <h3>Let Our Team Help Curate Your Perfect Expedition</h3>
                <p>Unsure which destination aligns with your travel aspirations? Our seasoned travel advisors are poised to design a bespoke itinerary tailored just for you.</p>
                <div class="assistance-actions">
                  <a href="#" class="btn btn-primary">Receive Complimentary Consultation</a>
                  <a href="#" class="btn btn-outline">Explore All Available Tours</a>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>

    </section><!-- /Travel Destinations Section -->

    

@stop