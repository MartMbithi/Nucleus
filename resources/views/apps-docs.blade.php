@include('partials._head')
  <!-- Body-->
  <body>
    
    @include('partials._header')
    <!-- Page Title-->
    <div class="page-title d-flex bg-dark" aria-label="Page title" style="background-image: url(img/pages/help-hero-bg.jpg);">
      <div class="container text-left align-self-center">
        <h1 class="page-title-heading text-white">{{ __('Nucleus ERP System Apps') }}</h1>
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
                <h6><a href="#collapseOne" data-toggle="collapse">{{ __('App Store') }}</a></h6>
              </div>
              <div class="collapse show" id="collapseOne" data-parent="#accordion" role="tabpanel">
                <div class="card-body">
                    <p>{{ __('While we strongly believe that NucleusERP is the best free ERP software out there, we are very well aware that it is not perfect, just like everything in the real world. It ships with core accounting tools and ERP tools needed to manage the money. For further features, instead of creating a bloated software by adding all of them to the core, we have created a modular structure so that it could get extended easily.') }}</p>
                </div>
              </div>
            </div>
            <div class="card">
              <div class="card-header" role="tab">
                <h6><a class="collapsed" href="#collapseTwo" data-toggle="collapse">{{ __('Tokens') }}</a></h6>
              </div>
              <div class="collapse" id="collapseTwo" data-parent="#accordion" role="tabpanel">
                <div class="card-body">
                  <p>{{ __('In order to access the App Store from your Nucleus ERP software installation, and install the apps you have purchased, you will need to create an API token and enter it when you get asked for. That is the bridge between the software and other sites like akaunting.com.') }}
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
    <a class="scroll-to-top-btn" href="#">
        <i class="fe-icon-chevron-up"></i>
    </a>
    <!-- Backdrop-->
    <div class="site-backdrop"></div>
    <!-- JavaScript (jQuery) libraries, plugins and custom scripts-->
    <script src="{{ url('js/vendor.min.js') }}"></script>
    <script src="{{ url('js/theme.min.js') }}"></script>
  </body>
</html>