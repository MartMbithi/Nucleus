@include('partials._head')
  <!-- Body-->
  <body>
    
    <!-- Off-Canvas Menu-->
    @include('partials._header')
    <!-- Page Title-->
    <div class="page-title d-flex" aria-label="Page title" style="background-image: url(img/page-title/portfolio-pattern.png);">
      <div class="container text-left align-self-center">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ url('/') }}">{{ __('Home') }}</a>
            </li>
            <li class="breadcrumb-item"><a href="{{ url('/nucleus-erp-features') }}">{{ __('Features') }}</a>
            </li>
          </ol>
        </nav>
        <h1 class="page-title-heading">{{ __('Nucleus ERP Features') }}</h1>
        <div class="page-title-subheading">{{ __('Some of the features that are') }} <strong>{{ __('gonna blow your mind off') }}</strong></div>
      </div>
    </div>
    <!-- Page Content-->
    <section class="container mt-2 pt-4 pb-5">
      <div class="row pt-4">
        <div class="col-lg-4 col-sm-6 mb-30"><a class="d-block bg-right-center bg-no-repeat bg-white border box-shadow p-5 text-decoration-none"  style="background-image: url(img/homepages/theme-presentation/portfolio.png);">
            <h3 class="h5">{{ __('Accounting') }}</h3>
            <p class="text-muted pb-2">{{ __('Completely Free Trial. No setup fees. No hidden charges under free trial. Not a free limited version. Free means free') }}</p>
            </a></div>

        <div class="col-lg-4 col-sm-6 mb-30"><a class="d-block bg-right-center bg-no-repeat bg-white border box-shadow p-5 text-decoration-none"  style="background-image: url(img/homepages/theme-presentation/blog.png);">
            <h3 class="h5"> {{ __('Inventory') }} </h3>
            <p class="text-muted pb-2">{{ __('Enable inventory tracking and manage goods as they come in and go out. Items also speed up invoicing.') }}</p>
            </a></div>

        <div class="col-lg-4 col-sm-6 mb-30"><a class="d-block bg-right-center bg-no-repeat bg-white border box-shadow p-5 text-decoration-none"  style="background-image: url(img/homepages/theme-presentation/shop.png);">
            <h3 class="h5">{{ __('Multi-Company') }}</h3>
            <p class="text-muted pb-2">{{ __('Manage the finances of multiple companies from one admin panel. Assign users to different companies.') }}</p>
            </a></div>

        <div class="col-lg-4 col-sm-6 mb-30"><a class="d-block bg-right-center bg-no-repeat bg-white border box-shadow p-5 text-decoration-none"  style="background-image: url(img/homepages/theme-presentation/account.png);">
            <h3 class="h5">{{ __('Easy Invoicing') }}</h3>
            <p class="text-muted pb-2">{{ __('Send professional invoices to clients and start accepting online payments, no commission/transaction fee.') }}</p>
            </a></div>

        <div class="col-lg-4 col-sm-6 mb-30"><a class="d-block bg-right-center bg-no-repeat bg-white border box-shadow p-5 text-decoration-none"  style="background-image: url(img/homepages/theme-presentation/pages.png);">
            <h3 class="h5">{{ __('Multi-Currency') }}</h3>
            <p class="text-muted pb-2">{{ __('Send invoices and add expenses in any currency and let the system convert them in your main currency.') }}</p>
            </a></div>

            <div class="col-lg-4 col-sm-6 mb-30"><a class="d-block bg-right-center bg-no-repeat bg-white border box-shadow p-5 text-decoration-none"  style="background-image: url(img/homepages/theme-presentation/docs.png);">
            <h3 class="h5">{{ __('Billable Expenses') }}</h3>
            <p class="text-muted pb-2">{{ __('Create and manage bills so your finances are always accurate and healthy. Know what and when to pay.') }}</p>
            </a></div>

            <div class="col-lg-4 col-sm-6 mb-30"><a class="d-block bg-right-center bg-no-repeat bg-white border box-shadow p-5 text-decoration-none"  style="background-image: url(img/homepages/theme-presentation/docs.png);">
            <h3 class="h5">{{ __('Powerful Reporting') }}</h3>
            <p class="text-muted pb-2">{{ __('Get detailed financial reports to help you better visualize all the information you need to improve your business.') }}</p>
            </a></div>

            <div class="col-lg-4 col-sm-6 mb-30"><a class="d-block bg-right-center bg-no-repeat bg-white border box-shadow p-5 text-decoration-none"  style="background-image: url(img/homepages/theme-presentation/account.png);">
            <h3 class="h5">{{ __('Client Portal') }}</h3>
            <p class="text-muted pb-2">{{ __('Share the transactions and invoices with your clients and accept bulk payments, online.' ) }}</p>
            </a></div>

            <div class="col-lg-4 col-sm-6 mb-30"><a class="d-block bg-right-center bg-no-repeat bg-white border box-shadow p-5 text-decoration-none"  style="background-image: url(img/homepages/theme-presentation/portfolio.png);">
            <h3 class="h5">{{ __('Customer Management') }}</h3>
            <p class="text-muted pb-2">{{ __('Create clients and send invoices to them.') }}</p>
            </a></div>

            <div class="col-lg-4 col-sm-6 mb-30"><a class="d-block bg-right-center bg-no-repeat bg-white border box-shadow p-5 text-decoration-none"  style="background-image: url(img/homepages/theme-presentation/shop.png);">
            <h3 class="h5">{{ __('Vendor Management') }}</h3>
            <p class="text-muted pb-2">{{ __('Create vendors so you could assign bills and payments to them and later filter their transactions easily.') }}</p>
            </a></div>

            <div class="col-lg-4 col-sm-6 mb-30"><a class="d-block bg-right-center bg-no-repeat bg-white border box-shadow p-5 text-decoration-none"  style="background-image: url(img/homepages/theme-presentation/account.png);">
            <h3 class="h5">{{ __('Online Accounting') }}</h3>
            <p class="text-muted pb-2">{{ __('See your financials online anytime, anywhere on your Mac, PC, tablet or mobile phone. No limits') }}</p>
            </a></div>

            <div class="col-lg-4 col-sm-6 mb-30"><a class="d-block bg-right-center bg-no-repeat bg-white border box-shadow p-5 text-decoration-none"  style="background-image: url(img/homepages/theme-presentation/docs.png);">
            <h3 class="h5">{{ __('Deposits & Transfers') }}</h3>
            <p class="text-muted pb-2">{{ __('Add deposits to and transfers between accounts and keep the balance of your bank accounts active.') }}</p>
            </a>
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