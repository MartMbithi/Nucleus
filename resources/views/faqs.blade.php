@include('partials._head')
<!-- Body-->
  <body>
    @include('partials._header')
    
    <!-- Topics-->
    <section class="container pt-5 pb-4 mb-3">
      <h2 class="h4 block-title mb-4 text-center">{{ __('Nucleus ERP FAQs') }}</h2>
      <div class="row pt-2">
        <div class="col-lg-4 col-sm-6 mb-30 pb-2">
          <a class="card" href="{{ url('/nucleus-erp-bill-no') }}"><img class="d-block mx-auto mt-4" src="{{ url('img/pages/help-icons/02.png') }}" style="width: 80px;" alt="Managing Account">
            <div class="card-body text-center">
              <h3 class="card-title">{{ __('Bill number') }}</h3>
              <p class="card-text text-sm">{{ __('Why is not the bill number auto generated?') }}</p><span class="text-sm text-uppercase font-weight-bold"> {{ __('View answer') }}&nbsp;<i class="fe-icon-arrow-right"></i></span>
            </div>
          </a>
        </div>

        <div class="col-lg-4 col-sm-6 mb-30 pb-2">
          <a class="card" href="{{ url('/nucleus-erp-bills-payments') }}"><img class="d-block mx-auto mt-4"   src="{{ url('img/pages/help-icons/01.png') }}" style="width: 80px;" alt="Working with Dashboard">
            <div class="card-body text-center">
              <h3 class="card-title">{{ __('Bills vs Payments') }}</h3>
              <p class="card-text text-sm">{{ __('There are two types of expenses within NucleusERP: Bills vs Payments. They are totally different entries and there is no link between.') }}</p><span class="text-sm text-uppercase font-weight-bold">{{ __('View answer') }} &nbsp;<i class="fe-icon-arrow-right"></i></span>
            </div>
          </a>
        </div>

        <div class="col-lg-4 col-sm-6 mb-30 pb-2">
          <a class="card" href="{{ url('/nucleus-erp-invoices') }}"><img class="d-block mx-auto mt-4" src="{{ url('img/pages/help-icons/03.png') }}" style="width: 80px;" alt="Payment Methods">
            <div class="card-body text-center">
              <h3 class="card-title">{{ __('Invoices vs Revenues') }}</h3>
              <p class="card-text text-sm">{{ __('There are two types of incomes within NucleusERP: Invoices and Revenues. They are totally different entries and there is no link between.') }}</p><span class="text-sm text-uppercase font-weight-bold">{{ __('View answer') }}&nbsp;<i class="fe-icon-arrow-right"></i></span>
            </div>
          </a>
        </div>
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