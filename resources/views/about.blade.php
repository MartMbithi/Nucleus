@include('partials._head')
  <!-- Body-->
  <body>
    @include('partials._header')

    <!-- Hero-->
    <section class="bg-parallax bg-secondary py-5 mb-5">
      <div class="bg-parallax-img" data-parallax="{&quot;y&quot; : 100}"><img src="{{ url('img/pages/about-hero-bg.png') }}" alt="Parallax Background"/>
      </div>
      <div class="container bg-parallax-content py-5 my-3 text-center">
        <h1 class="pb-4"><span class='d-block h3 font-family-body font-weight-light text-muted mb-2'>{{ __('NucleusERP is the leading') }}</span>{{ __('OpenSource ERP') }}<span class='d-block h2 font-weight-normal text-muted mt-3'><?php echo date ('Y');?></span></h1><a class="scroll-to btn btn-gradient" href="#services"> {{ __('More About Us') }}</a>
      </div>
    </section>
    <!-- Services-->
    <section class="container pt-3 pb-4 mb-5" data-offset-top="110" id="services">
      <h2 class="h3 block-title text-center mb-3">{{ __('The partner of your success') }} <small> {{ __('NucleusERP is an opensource product that keeps gaining more and more popularity abroad. Due to its rich and versatile functionalities NucleusERP helps companies reach their full potential.') }} </small></h2>
      <div class="row">
        <div class="col-lg-3 col-sm-6">
          <div class="icon-box text-center mx-auto">
            <div class="icon-box-icon"><i class="fe-icon-cloud"></i></div>
            <h3 class="icon-box-title">{{ __('Mobility') }}</h3>
            <p class="icon-box-text text-sm">{{ __('The system responsivity ensures compatibility with mobile device browsers. NucleusERP can be used anywhere in the world as long as you have access to the Internet.') }}</p>
          </div>
        </div>
        <div class="col-lg-3 col-sm-6">
          <div class="icon-box text-center mx-auto">
            <div class="icon-box-icon"><i class="fe-icon-code"></i></div>
            <h3 class="icon-box-title">{{ __('Continuous development') }}</h3>
            <p class="icon-box-text text-sm">{{ __('The NucleusERP development team introduces dozens of changes every day and regularly releases update packages that contain bug fixes, new features, and numerous improvements.') }}</p>
          </div>
        </div>
        <div class="col-lg-3 col-sm-6">
          <div class="icon-box text-center mx-auto">
            <div class="icon-box-icon"><i class="fe-icon-server"></i></div>
            <h3 class="icon-box-title">{{ __('Rich functionality') }}</h3>
            <p class="icon-box-text text-sm">{{ __('Rich features and many customizable user and administrator modules, together with well-designed widgets, provide your company with a complete set of highest quality technological tools') }}</p>
          </div>
        </div>
        <div class="col-lg-3 col-sm-6">
          <div class="icon-box text-center mx-auto">
            <div class="icon-box-icon"><i class="fe-icon-life-buoy"></i></div>
            <h3 class="icon-box-title">{{ __('Reliable support') }}</h3>
            <p class="icon-box-text text-sm">{{ __('Our qualified development team knows every inch of the system, which allows them to quickly solve all errors, improve existing features, and design new ones.') }} </p>
          </div>
        </div>
      </div>
      <hr class="mt-5">
    </section>

    <!-- Footer-->
    @include('partials._footer')
    <!-- Back To Top Button--><a class="scroll-to-top-btn" href="#"><i class="fe-icon-chevron-up"></i></a>
    <!-- Backdrop-->
    <div class="site-backdrop"></div>
    <!-- JavaScript (jQuery) libraries, plugins and custom scripts-->
    <script src="{{ url('js/vendor.min.js') }}"></script>
    <script src="{{ url('js/theme.min.js') }}"></script>
  </body>

</html>