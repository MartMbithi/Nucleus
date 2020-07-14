@include('partials._head')
  <!-- Body-->
  <body>
  @include('partials._header')
    <!-- Page Content-->
    <!-- Hero-->
    <section class="bg-center bg-no-repeat bg-cover py-5" style="background-image: url(img/pricing-hero-bg.jpg);">
      <div class="container py-4 py-sm-5">
        <h1 class="text-center text-white text-shadow pt-3"><span class='d-block h2 text-white'>{{ __('Have no time to download Nucleus ERP?') }}</span>{{ __('We offer solution.') }}</h1>
        <p class="lead text-center text-white text-shadow pt-2 pb-5">{{ __('You Can Have A Quick Demo!') }}</p>
      </div>
    </section>

    <section class="container pt-sm-2">
      <p class="text-muted text-center pb-3"><span class='font-weight-medium text-danger'>*</span> <b>{{ __('Email:') }}</b> {{ __('martdevelopers@nucleuserp.com') }} <b> {{ __('Password:') }}</b> {{ __('demo') }} </p>
      <div class="pricing-plans pb-5">
        <ul class="nav nav-tabs nav-tabs-style-3 pricing-tabs justify-content-center">
          <li class="nav-item"><a class="nav-link " href="https://martdev.info/nuclei/n/" target="_blank" data-toggle="price" data-period="monthly">{{ __('Demo') }}</a></li>
        </ul>
      </div>
    </section>
    
     @include('partials._footer')
    <!-- Back To Top Button--><a class="scroll-to-top-btn" href="#"><i class="fe-icon-chevron-up"></i></a>
    <!-- Backdrop-->
    <div class="site-backdrop"></div>
    <!-- JavaScript (jQuery) libraries, plugins and custom scripts-->
    <script src="{{ url('js/vendor.min.js') }}"></script>
    <script src="{{ url('js/theme.min.js') }}"></script>
  </body>

</html>