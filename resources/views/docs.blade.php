@include('partials._head')
  <!-- Body-->
  <body>
    @include('partials._header')
    <!-- Hero-->
    <section class="bg-no-repeat bg-center bg-cover" style="background-image: url(img/pages/help-hero-bg.jpg);">
      <div class="container py-5">
        <div class="row justify-content-center py-5">
          <div class="col-lg-7 col-md-8 col-sm-11">
            <div class="wizard">
              <div class="wizard-body">
                <h1 class="h3 text-center pb-2">{{ __('How can we help?') }}</h1>
                <form class="input-group mb-2" method="get">
                  <div class="input-group-prepend">
                    <div class="input-group-text bg-primary text-white"><i class="fe-icon-search"></i></div>
                  </div>
                  <input class="form-control" type="text" placeholder="Ask your question...">
                </form>
                <p class="text-center m-0 text-sm">{{ __('Are you new to Nucleus and want to learn how to use it? Or you may be a developer looking for some details about NucleusERP API, stucture or app/module development. Documentation is the right place to go first.') }}</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Topics-->
    <section class="container pt-5 pb-4 mb-3">
      <h2 class="h4 block-title mb-4 text-center">{{ __('Nucleus ERP Documentation') }}</h2>
      <div class="row pt-2">
        <div class="col-lg-4 col-sm-6 mb-30 pb-2"><a class="card" href="{{ url('nucleus-erp-requirements') }}"><img class="d-block mx-auto mt-4" src="{{ url('img/pages/help-icons/02.png') }}" style="width: 80px;" alt="Managing Account">
            <div class="card-body text-center">
              <h3 class="card-title">{{ __('Requirements') }}</h3>
              <p class="card-text text-sm">{{ __('When selecting a hosting company, you should check if the following requirements are provided:') }}</p><span class="text-sm text-uppercase font-weight-bold">{{ __('View Requirements') }}&nbsp;<i class="fe-icon-arrow-right"></i></span>
            </div></a></div>
        <div class="col-lg-4 col-sm-6 mb-30 pb-2"><a class="card" href="{{ url('/nucleus-erp-downloads-docs') }}"><img class="d-block mx-auto mt-4"   src="{{ url('img/pages/help-icons/01.png') }}" style="width: 80px;" alt="Working with Dashboard">
            <div class="card-body text-center">
              <h3 class="card-title">{{ __('Downloading') }}</h3>
              <p class="card-text text-sm">{{ __('Download the software and install on your own host/server for free, no restrictions.') }}</p><span class="text-sm text-uppercase font-weight-bold"> {{ __('View Downloads') }}&nbsp;<i class="fe-icon-arrow-right"></i></span>
            </div></a></div>
        <div class="col-lg-4 col-sm-6 mb-30 pb-2"><a class="card" href="{{ url('/nucleus-erp-installation-docs') }}"><img class="d-block mx-auto mt-4" src="{{ url('img/pages/help-icons/03.png') }}" style="width: 80px;" alt="Payment Methods">
            <div class="card-body text-center">
              <h3 class="card-title">{{ __('Installation') }}</h3>
              <p class="card-text text-sm">{{ __('This guide will show you how to install NucleusERP in your local or remote server just in a couple of minutes.') }}</p><span class="text-sm text-uppercase font-weight-bold">{{ __('View Topic') }}&nbsp;<i class="fe-icon-arrow-right"></i></span>
            </div></a></div>
        <div class="col-lg-4 col-sm-6 mb-30 pb-2"><a class="card" href="{{ url('/nucleus-erp-dashboard-docs') }}"><img class="d-block mx-auto mt-4" src="{{ url('img/pages/help-icons/04.png') }}" style="width: 80px;" alt="Delivery Information">
            <div class="card-body text-center">
              <h3 class="card-title">{{ __('Dashboard')}}</h3>
              <p class="card-text text-sm">{{ __('This guide will show you how to use NucleusERP dashboard when running  in your local or remote server.') }}</p><span class="text-sm text-uppercase font-weight-bold">{{ __('View Topic') }} &nbsp;<i class="fe-icon-arrow-right"></i></span>
             </div></a></div>
        <div class="col-lg-4 col-sm-6 mb-30 pb-2"><a class="card" href="{{ url('/nucleus-erp-apps-docs') }}"><img class="d-block mx-auto mt-4" src="{{ url('img/pages/help-icons/05.png') }}" style="width: 80px;" alt="Refund Policy">
            <div class="card-body text-center">
              <h3 class="card-title">{{ __('Apps') }}</h3>
              <p class="card-text text-sm">{{ __('This guide will show you how to use Apps in NucleusERP when running  in your local or remote server.') }}</p><span class="text-sm text-uppercase font-weight-bold">{{ __('View Topic') }}&nbsp;<i class="fe-icon-arrow-right"></i></span>
            </div></a></div>
        <div class="col-lg-4 col-sm-6 mb-30 pb-2"><a class="card" href="{{ url('/nucleus-erp-user-docs') }}"><img class="d-block mx-auto mt-4" src="{{ url('img/pages/help-icons/06.png') }}" style="width: 80px;" alt="Affiliate Program">
            <div class="card-body text-center">
              <h3 class="card-title">{{ __('Users') }}</h3>
              <p class="card-text text-sm">{{ __('This guide will show you how to manage users in NucleusERP when running  in your local or remote server.') }}</p><span class="text-sm text-uppercase font-weight-bold">{{ __('View Topic') }}&nbsp;<i class="fe-icon-arrow-right"></i></span>
            </div></a></div>
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