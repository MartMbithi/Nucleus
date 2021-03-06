@include('partials._head')
  <!-- Body-->
  <body>
    @include('partials._header')
    <!-- Page Title-->
    <div class="page-title d-flex bg-dark" aria-label="Page title" style="background-image: url(img/pages/help-hero-bg.jpg);">
      <div class="container text-left align-self-center">
        <h1 class="page-title-heading text-white">{{ __('Nucleus ERP Bills And Payments') }}</h1>
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
                <h6><a href="#collapseOne" data-toggle="collapse">{{ __('Bills') }}</a></h6>
              </div>
              <div class="collapse show" id="collapseOne" data-parent="#accordion" role="tabpanel">
                <div class="card-body">
                  <p> {{ __('Bill is a document received from your vendor that indicates the items (product or service) bought by you. It is generally not paid yet. You should use bills if you work with tax.') }} </p>
                </div>
              </div>
            </div>
            
            <div class="card">
              <div class="card-header" role="tab">
                <h6><a class="collapsed" href="#collapseTwo" data-toggle="collapse">{{ __('Payments') }}</a></h6>
              </div>
              <div class="collapse" id="collapseTwo" data-parent="#accordion" role="tabpanel">
                <div class="card-body">
                  <p>{{ __('Payment is a non-billable and paid expense. For example, food that you eat while on business trips. There are no items within the payments. Tax is not applicable. Do not confuse this with payments added to a bill/invoice.') }}</p>
                </div>
              </div>
            </div>       
          </div>
        </div>
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