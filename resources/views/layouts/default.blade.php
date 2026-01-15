<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

<head>
@include('includes.head')
@yield('meta')
<meta name="csrf-token" content="{{ csrf_token() }}">
@yield('media')
</head>

<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-YGQ91MNY00"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());
  gtag('config', 'G-YGQ91MNY00');
</script>

<body>

  <!-- ======= Header ======= -->
  @if (Route::is('home'))
    @include('includes.headmenu')
  @elseif (Route::is('blog') || Route::is('blog.detail'))
    @include('includes.headmenudetail', ['banner' => '1.webp' ?? null, 'judul' => 'Blog' ?? null])
  @elseif (Route::is('products') || Route::is('product.detail'))
    @include('includes.headmenudetail', ['banner' => '1.webp' ?? null, 'judul' => 'Our Products' ?? null])
  @elseif (Route::is('about-us'))
    @include('includes.headmenudetail', ['banner' => '2.webp' ?? null, 'judul' => 'About Us' ?? null])
  @elseif (Route::is('service'))
    @include('includes.headmenudetail', ['banner' => '3.webp' ?? null, 'judul' => 'Our Services' ?? null])
  @elseif (Route::is('projects'))
    @include('includes.headmenudetail', ['banner' => '4.webp' ?? null, 'judul' => 'Our Projects' ?? null])
  @elseif (Route::is('project-detail'))
    @include('includes.headmenudetail', ['banner' => '4.webp' ?? null, 'judul' => 'Project Detail' ?? null])
  @elseif (Route::is('contact'))
    @include('includes.headmenudetail', ['banner' => '5.webp' ?? null, 'judul' => 'Contact us' ?? null])
  @endif 

  <main id="main">
    @include('pages.notification')
    <!-- ======= About Section ======= -->
    @yield('content')
    @yield('scripts')
    <!-- End About Section -->
      <div class="popup-container" id="popupContainer">
          <a href="https://api.whatsapp.com/send?phone=62818688114&text=Hello&source=&data=" class="whatsApp" target="_blank">
          <img src="{{asset('assets/img/whatsapp.png')}}" />
          </a>
          <div class="popup-content" id="popupContent">
              <img src="{{asset('assets/img/wa.png')}}" /><br />
              Scan Me
          </div>
      </div>
  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer position-relative dark-background">
  @include('includes.footer')

  </footer><!-- End Footer -->
  <!-- End Footer -->

  @include('includes.footerjs')

</body>

</html>