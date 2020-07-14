@include('partials._head')
  <!-- Body-->
  <body>
   
    @include('partials._header')

    <!-- Page Title-->
    <div class="page-title d-flex bg-dark" aria-label="Page title" style="background-image: url(img/pages/help-hero-bg.jpg);">
      <div class="container text-left align-self-center">
        <h1 class="page-title-heading text-white">{{ __('Nucleus ERP System Installation') }}</h1>
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
                <h6><a href="#collapseOne" data-toggle="collapse">{{ __('Installation') }}</a></h6>
              </div>
              <div class="collapse show" id="collapseOne" data-parent="#accordion" role="tabpanel">
                <div class="card-body">
                    <p> {{ __('This guide will show you how to install Nucleus ERP in your local or remote server just in a couple of minutes.') }}</p>
                </div>
              </div>
            </div>
            <div class="card">
              <div class="card-header" role="tab">
                <h6><a class="collapsed" href="#collapseTwo" data-toggle="collapse">{{ __('Steps') }}</a></h6>
              </div>
              <div class="collapse" id="collapseTwo" data-parent="#accordion" role="tabpanel">
                <div class="card-body">
                    <li>{{ __('Download package.') }}</li>
                    <li>{{ __('Unzip it in your localserver directory (in XAMPP, LAMPP) htdocs/') }}</li>
                    <li>{{ __('Upload all the files to your remote server under public_html directory') }} </li>
                    <li>{{ __('Launch the Installer by typing http://your_dorman_address/nucleuserp example( http://127.0.0.1/nucleuserp/)') }}</li>
                    <li>{{ __('This Launches Installation wizard that prompts you to select language') }}</li>
                    <li>{{ __('After Selecting language, Configure your connection properties ie: (database username and password)') }}</li>
                    <li>{{ __('The following wizard allows you to create a currencies, tax, companies and then API token.') }}</li>
                    <li>{{ __('If all these steps are executed it will install the system in your local or remote server.') }}</li>
                    <li>{{ __('Now that installation is complete, you can log into the admin panel.') }}</li>
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