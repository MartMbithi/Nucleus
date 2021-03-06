@include('partials._head')
  <!-- Body-->
  <body>
   @include('partials._header')

    <!-- Page Title-->
    <div class="page-title d-flex bg-dark" aria-label="Page title" style="background-image: url(img/pages/help-hero-bg.jpg);">
      <div class="container text-left align-self-center">
        <h1 class="page-title-heading text-white">{{ __('Nucleus ERP System  Download Docs') }}</h1>
      </div>
    </div>
    <!-- Page Content-->
    <!-- Main Container-->
    <section class="container pb-5 mb-2">
      <div class="row">
        <!-- Content-->
        <div class="col-xl-9 col-lg-8">
          <div class="accordion" id="accordion" role="tablist">
            <div class="card">
              <div class="card-header" role="tab">
                <h6><a href="#collapseOne" data-toggle="collapse">{{ __('Stable Version') }}</a></h6>
              </div>
              <div class="collapse show" id="collapseOne" data-parent="#accordion" role="tabpanel">
                <div class="card-body">
                    <p>{{ __('You can download the ZIP file containing the stable version from our') }} <a href=""> {{ __('Download') }}</a> {{ __('page.') }}</p>
                </div>
              </div>
            </div>
            <div class="card">
              <div class="card-header" role="tab">
                <h6><a class="collapsed" href="#collapseTwo" data-toggle="collapse">{{ __('Development Version') }}</a></h6>
              </div>
              <div class="collapse" id="collapseTwo" data-parent="#accordion" role="tabpanel">
                <div class="card-body">
                <p>{{ __('If you are a developer and would like to contribute, Nucleus is waiting for you on GitHub') }}</p>               
                </div>
              </div>
            </div>        
          </div>
        </div>
      </div>
    </section>
    
    <!-- Footer-->
    @include('partials._footer')
    <!-- Back To Top Button-->
    <a class="scroll-to-top-btn" href="#"><i class="fe-icon-chevron-up"></i></a>
    <!-- Backdrop-->
    <div class="site-backdrop"></div>
    <!-- JavaScript (jQuery) libraries, plugins and custom scripts-->
    <script src="{{ url('js/vendor.min.js') }}"></script>
    <script src="{{ url('js/theme.min.js') }}"></script>
  </body>

</html>