@include('partials._head')
  <!-- Body-->
  <body>
   @include('partials._header')
    <!-- Page Title-->
    <div class="page-title d-flex bg-dark" aria-label="Page title" style="background-image: url(img/pages/help-hero-bg.jpg);">
      <div class="container text-left align-self-center">
        <h1 class="page-title-heading text-white">{{ __('Nucleus ERP System Dashboard') }}</h1>
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
                <h6><a href="#collapseOne" data-toggle="collapse">{{ __('Dashboard') }}</a></h6>
              </div>
              <div class="collapse show" id="collapseOne" data-parent="#accordion" role="tabpanel">
                <div class="card-body">
                    <p>{{ __('The dashboard is the first thing you will see when entering NucleusERP. The main function of the dashboard is to give the owner an overview of how the business is performing. Dashboard reports show the accrued incomes and expenses, except Cash Flow chart. Here you can learn more about cash and accrual accounting.') }}</p>  
                    <p>{{ __('Totals and charts are displayed under the default currency. Invoices, revenues, bills, and payments created under a different currency will be converted based on the currency rate at the time they were created.') }}</p>        
                    <li><b>{{ __('Totals:') }}</b> {{ __('Sum up the income, expense and profit state of your business. They also show the upcoming (not paid) invoices/bills.') }}</li>
                    <li><b>{{ __('Cash Flow:') }}</b>{{ __('Shows the income, expense and profit in cash per day and/or month.') }}</li>
                    <li><b>{{ __('Cash Flow:') }}</b>{{ __('Shows the income, expense and profit in cash per day and/or month.') }}</li>
                    <li><b>{{__('Incomes By Category:') }}</b>{{ __('A pie chart to show the distribution of incomes. Invoices are a shown as a category of itself.') }}</li>
                    <li><b>{{ __('Expenses By Category:') }}</b>{{ __('A pie chart to show the distribution of expenses. Bills are a shown as a category of itself.') }}</li>
                    <li><b>{{ __('Account Balance:') }}</b> {{ __('It shows the balance of each account you have added.') }}</li>
                    <li><b>{{ __('Latest Incomes:') }}</b> {{__('A list that displays the last 5 incomes.') }}</li>
                    <li><b>{{ __('Latest Expenses:') }}</b> {{ __('A list that displays the last 5 expenses.') }} </li>
                </div>
              </div>
            </div>
            <div class="card">
              <div class="card-header" role="tab">
                <h6><a class="collapsed" href="#collapseTwo" data-toggle="collapse">{{ __('Menu') }}</a></h6>
              </div>
              <div class="collapse" id="collapseTwo" data-parent="#accordion" role="tabpanel">
                <div class="card-body">
                  <p>{{ __('In the left side of there is a navigation menu. You can navigate between the') }} <u><b> {{ __('Items, Incomes, Expenses, Banking, Reports, Settings and Apps') }}</u></b>.    
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