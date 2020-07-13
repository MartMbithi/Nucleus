@include('partials._head')
  <!-- Body-->
  <body>
    @include('partials._header')
    <!-- Page Title-->
    <div class="page-title d-flex bg-dark" aria-label="Page title" style="background-image: url(img/pages/help-hero-bg.jpg);">
      <div class="container text-left align-self-center">
        <h1 class="page-title-heading text-white">{{ __('Nucleus ERP System Requirements') }}</h1>
      </div>
    </div>
    <!-- Page Content-->
    <!-- Main Container-->
    <section class="container pb-5 mb-2">
      <div class="row">
        <!-- Sidebar--
        <div class="col-xl-3 col-lg-4">
          <!-- Off-Canvas Toggle-->
          <a class="offcanvas-toggle" href="#help-sidebar" data-toggle="offcanvas"><i class="fe-icon-sidebar"></i></a>
          
        <!-- Content-->
        <div class="col-xl-9 col-lg-8">
          <div class="accordion" id="accordion" role="tablist">
            <div class="card">
              <div class="card-header" role="tab">
                <h6><a href="#collapseOne" data-toggle="collapse">{{ __('Environment') }}</a></h6>
              </div>
              <div class="collapse show" id="collapseOne" data-parent="#accordion" role="tabpanel">
                <div class="card-body">
                  <li>{{ __('PHP 5.6.4 or higher') }}</li>
                  <li>{{ __('Database (eg: MySQL, PostgreSQL, SQLite, SQL Server)') }}</li>
                  <li>{{ __('Web Server (eg: Apache, Nginx, Xampp IIS') }}</li>
                  <li>{{ __('URL Rewrite (mod_rewrite)') }}</li>
                </div>
              </div>
            </div>
            <div class="card">
              <div class="card-header" role="tab">
                <h6><a class="collapsed" href="#collapseTwo" data-toggle="collapse">{{ __('PHP Extensions') }}</a></h6>
              </div>
              <div class="collapse" id="collapseTwo" data-parent="#accordion" role="tabpanel">
                <div class="card-body">
                  <li> {{ __('PDO') }}</li>
                  <li> {{ __('OpenSSL') }}</li>
                  <li> {{ __('Mbstring') }} </li>
                  <li> {{ __('Tokenizer') }} </li>
                  <li> {{ __('XML') }} </li>
                  <li> {{ __('Zip') }} </li>
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