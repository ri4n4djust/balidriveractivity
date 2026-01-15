
  <!-- Scroll Top -->
  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Preloader -->
  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="{{asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{asset('assets/vendor/php-email-form/validate.js')}}"></script>
  <script src="{{asset('assets/vendor/aos/aos.js')}}"></script>
  <script src="{{asset('assets/vendor/purecounter/purecounter_vanilla.js')}}"></script>
  <script src="{{asset('assets/vendor/swiper/swiper-bundle.min.js')}}"></script>
  <script src="{{asset('assets/vendor/isotope-layout/isotope.pkgd.min.js')}}"></script>
  <script src="{{asset('assets/vendor/imagesloaded/imagesloaded.pkgd.min.js')}}"></script>
  <script src="{{asset('assets/vendor/glightbox/js/glightbox.min.js')}}"></script>

  <!-- jQuery -->

  <!-- Main JS File -->
  <script src="{{asset('assets/js/main.js')}}"></script>
  <script type="text/javascript">
    const popupContainer = document.getElementById('popupContainer');
    const popupContent =
        document.getElementById('popupContent');
        popupContainer.addEventListener
            ('mouseover', function () {
                popupContent.style.display = 'block';
            });
        popupContainer.addEventListener
            ('mouseout', function () {
                popupContent.style.display = 'none';
        });
  </script>
  