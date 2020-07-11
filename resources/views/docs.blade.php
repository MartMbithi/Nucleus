@include('partials._head')
  <!-- Body-->
  <body>
    
    <!-- Off-Canvas Menu-->
    <div class="offcanvas-container is-triggered offcanvas-container-reverse" id="mobile-menu"><span class="offcanvas-close"><i class="fe-icon-x"></i></span>
      <div class="px-4 pb-4">
        <h6>Menu</h6>
        
      </div>
      <div class="offcanvas-scrollable-area border-top" style="height:calc(100% - 235px); top: 144px;">
        <!-- Mobile Menu-->
        <div class="accordion mobile-menu" id="accordion-menu">
          <!-- Home-->
          <div class="card">
            <div class="card-header"><a class="mobile-menu-link" href="{{ url('/') }}">Home</a><a class="collapsed" href="#home-submenu" data-toggle="collapse"></a></div>
            
          </div>
          <!-- Portfolio-->
          <div class="card">
            <div class="card-header"><a class="mobile-menu-link " href="{{ url('/nucleus-erp-features') }}">Features</a><a class="collapsed" href="#portfolio-submenu" data-toggle="collapse"></a></div>
            
          </div>
          <!-- Blog-->
          <div class="card">
            <div class="card-header"><a class="mobile-menu-link active" >Knowledge Base</a><a class="collapsed" href="#blog-submenu" data-toggle="collapse"></a></div>
            <div class="collapse" id="blog-submenu" data-parent="#accordion-menu">
              <div class="card-body">
                <ul>
                  <li class="dropdown-header">Documentation</li>
                  <li class="dropdown-item active"><a href="{{ url('/nucleus-erp-docs') }}">Nucleus ERP Docs</a></li>
                  
                  <li class="dropdown-header">FAQs</li>
                  <li class="dropdown-item"><a href="{{ url('/nucleus-erp-docs') }}">Nucleus ERP fAQs</a></li>
                 
                </ul>
              </div>
            </div>
          </div>
          <!-- Shop-->
          <div class="card">
            <div class="card-header"><a class="mobile-menu-link" href="{{ url('/nucleus-erp-community') }}">Community</a><a class="collapsed" href="#shop-submenu" data-toggle="collapse"></a></div>
           
          </div>
          <!-- Account-->
          <div class="card">
            <div class="card-header"><a class="mobile-menu-link" >NucleusForce</a><a class="collapsed" href="#account-submenu" data-toggle="collapse"></a></div>
            <div class="collapse" id="account-submenu" data-parent="#accordion-menu">
              <div class="card-body">
                <ul>
                <li class="dropdown-item"><a href="{{ url('/nucleus-erp-about-us') }}">About Us</a></li>
                  <li class="dropdown-item"><a href="{{ url('/nucleus-erp-licences') }}">License</a></li>
                  
                </ul>
              </div>
            </div>
          </div>
          <!-- Pages-->
          <div class="card">
            <div class="card-header"><a class="mobile-menu-link" href="#">Company</a><a class="collapsed" href="#pages-submenu" data-toggle="collapse"></a></div>
            <div class="collapse" id="pages-submenu" data-parent="#accordion-menu">
              <div class="card-body">
                <ul>
                  <li class="dropdown-item"><a href="{{ url('/nucleus-erp-contact') }}">Contact</a></li>
                    
                  </li>
                </ul>
              </div>
            </div>
          </div>
          <!-- Components-->
          
        </div>
      </div>
      <div class="offcanvas-footer px-4 pt-3 pb-2 text-center"><a class="social-btn sb-style-3 sb-twitter" href="#"><i class="socicon-twitter"></i></a><a class="social-btn sb-style-3 sb-facebook" href="#"><i class="socicon-facebook"></i></a><a class="social-btn sb-style-3 sb-pinterest" href="#"><i class="socicon-pinterest"></i></a><a class="social-btn sb-style-3 sb-instagram" href="#"><i class="socicon-instagram"></i></a></div>
    </div>
    <!-- Navbar: Default-->
    <!-- Remove "navbar-sticky" class to make navigation bar scrollable with the page.-->
    <header class="navbar-wrapper ">
      <div class="d-table-cell align-middle pr-md-3"><a class="navbar-brand mr-1" href="{{ url('/') }}"><img src="{{ url('img/logo/logo-dark.png') }}" alt="Logo"/></a></div>
      <div class="d-table-cell w-100 align-middle pl-md-3">
      <!--
        <div class="navbar-top d-none d-lg-flex justify-content-between align-items-center">
          <div><a class="navbar-link mr-3" href="tel:+1212477690000"><i class="fe-icon-phone"></i>+1 (212) 477 690 000</a><a class="navbar-link mr-3" href="mailto:martdevelopers254@gmail.com"><i class="fe-icon-mail"></i>support@nucleuserp.martdev.info</a><a class="social-btn sb-style-3 sb-twitter" href="#"><i class="socicon-twitter"></i></a><a class="social-btn sb-style-3 sb-facebook" href="#"><i class="socicon-facebook"></i></a><a class="social-btn sb-style-3 sb-pinterest" href="#"><i class="socicon-pinterest"></i></a><a class="social-btn sb-style-3 sb-instagram" href="#"><i class="socicon-instagram"></i></a></div>
          <div>
            <ul class="list-inline mb-0">
              <li class="dropdown-toggle mr-2"><a class="navbar-link" href="account-login.html"><i class="fe-icon-user"></i>Login or Create account</a>
                <div class="dropdown-menu right-aligned p-3 text-center" style="min-width: 200px;">
                  <p class="text-sm opacity-70">Sign in to your account or register new one to have full control over your orders, receive bonuses and more.</p><a class="btn btn-primary btn-sm btn-block" href="account-login.html">Sign In</a>
                  <p class="text-sm text-muted mt-3 mb-0">New customer? <a href='account-login.html'>Register</a></p>
                </div>
              </li>
              <li class="dropdown-toggle"><a class="navbar-link" href="#"><img src="img/flags/en.png" alt="English"/>Eng / Usd</a>
                <div class="dropdown-menu lang-dropdown right-aligned">
                  <div class="p-3">
                    <select class="form-control">
                      <option value="usd">$ USD</option>
                      <option value="eur">€ EUR</option>
                      <option value="ukp">£ UKP</option>
                      <option value="jpy">¥ JPY</option>
                    </select>
                  </div><a class="dropdown-item" href="#"><img src="img/flags/fr.png" alt="Français"/>Français</a><a class="dropdown-item" href="#"><img src="img/flags/de.png" alt="Deutsch"/>Deutsch</a><a class="dropdown-item" href="#"><img src="img/flags/it.png" alt="Italiano"/>Italiano</a>
                </div>
              </li>
            </ul>
          </div>
        </div>-->
        <div class="navbar justify-content-end justify-content-lg-between">
          <!-- Search-->
          <form class="search-box" method="get">
            <input type="text" id="site-search" placeholder="Type A or C to see suggestions"><span class="search-close"><i class="fe-icon-x"></i></span>
          </form>
          <!-- Main Menu-->
          <ul class="navbar-nav d-none d-lg-block">
            <!-- Home-->
            <li class="nav-item mega-dropdown-toggle"><a class="nav-link" href="{{ url('/') }}">Home</a>
              
            </li>
            <!-- Features-->
            <li class="nav-item dropdown-toggle "><a class="nav-link" href="{{ url('/nucleus-erp-features') }}">Features</a>
              
            </li>
            <!-- Knowledge Base-->
            <li class="nav-item mega-dropdown-toggle active"><a class="nav-link">Knowledge Base</a>
             
                <div class="dropdown-menu mega-dropdown">
                  <div class="d-flex">
                    <div class="column">
                      <div class="widget widget-custom-menu">
                        <h4 class="widget-title">Documentation</h4>
                        <ul>
                          <li class="active"><a href="{{ url('/nucleus-erp-docs') }}">Nucleus ERP Docs</a></li>
                        
                        </ul>
                      </div>
                    </div>
                    
                    <div class="column">
                      <div class="widget widget-custom-menu">
                        <h4 class="widget-title">FAQs</h4>
                        <ul>
                          <li><a href="{{ url('/nucleus-erp-faqs') }}">Nucleus ERP FAQS</a></li>
                         
                        </ul>
                      </div>
                    </div>
                    
                  </div>
                </div> 
              </li>
            <!-- Community-->
            <li class="nav-item mega-dropdown-toggle"><a class="nav-link" href="{{ url('/nucleus-erp-community') }}">Community</a>
            <!-- NucleusForce-->
            <li class="nav-item dropdown-toggle"><a class="nav-link" href="#">NucleusForce</a>
                <ul class="dropdown-menu">
                    
                  <li class="dropdown-item"><a href="{{ url('/nucleus-erp-about-us') }}">About Us</a></li>
                  <li class="dropdown-item"><a href="{{ url('/nucleus-erp-licences') }}">License</a></li>
                  
                  
                </ul>
              </li>
            <!-- Pages-->
            <li class="nav-item dropdown-toggle"><a class="nav-link" href="#">Company</a>
                <ul class="dropdown-menu">
                    
                  <li class="dropdown-item"><a href="{{ url('/nucleus-erp-contact') }}">Contact</a></li>
                  
                  
                </ul>
              </li>
            
            
          </ul>
          <div>
              <ul class="navbar-buttons d-inline-block align-middle">
                <li class="d-block d-lg-none"><a href="#mobile-menu" data-toggle="offcanvas"><i class="fe-icon-menu"></i></a></li>
                <li><a href="#" data-toggle="search"><i class="fe-icon-search"></i></a></li>
              </ul><a class="btn btn-gradient ml-3 d-none d-xl-inline-block" href="">Try Nucleus</a>
              
            </div>
        </div>
      </div>
    </header>
    <!-- Page Content-->
    <!-- Hero-->
    <section class="bg-no-repeat bg-center bg-cover" style="background-image: url(img/pages/help-hero-bg.jpg);">
      <div class="container py-5">
        <div class="row justify-content-center py-5">
          <div class="col-lg-7 col-md-8 col-sm-11">
            <div class="wizard">
              <div class="wizard-body">
                <h1 class="h3 text-center pb-2">How can we help?</h1>
                <form class="input-group mb-2" method="get">
                  <div class="input-group-prepend">
                    <div class="input-group-text bg-primary text-white"><i class="fe-icon-search"></i></div>
                  </div>
                  <input class="form-control" type="text" placeholder="Ask your question...">
                </form>
                <p class="text-center m-0 text-sm">Are you new to Nucleus and want to learn how to use it? Or you may be a developer looking for some details about NucleusERP API, stucture or app/module development. Documentation is the right place to go first.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Topics-->
    <section class="container pt-5 pb-4 mb-3">
      <h2 class="h4 block-title mb-4 text-center">Nucleus ERP Documentation</h2>
      <div class="row pt-2">
        <div class="col-lg-4 col-sm-6 mb-30 pb-2"><a class="card" href="{{ url('nucleus-erp-requirements') }}"><img class="d-block mx-auto mt-4" src="img/pages/help-icons/02.png" style="width: 80px;" alt="Managing Account">
            <div class="card-body text-center">
              <h3 class="card-title">Requirements</h3>
              <p class="card-text text-sm">When selecting a hosting company, you should check if the following requirements are provided:</p><span class="text-sm text-uppercase font-weight-bold">View Requirements&nbsp;<i class="fe-icon-arrow-right"></i></span>
            </div></a></div>
        <div class="col-lg-4 col-sm-6 mb-30 pb-2"><a class="card" href="{{ url('/nucleus-erp-downloads-docs') }}"><img class="d-block mx-auto mt-4"   src="img/pages/help-icons/01.png" style="width: 80px;" alt="Working with Dashboard">
            <div class="card-body text-center">
              <h3 class="card-title">Downloading</h3>
              <p class="card-text text-sm">Download the software and install on your own host/server for free, no restrictions.</p><span class="text-sm text-uppercase font-weight-bold">View Downloads&nbsp;<i class="fe-icon-arrow-right"></i></span>
            </div></a></div>
        <div class="col-lg-4 col-sm-6 mb-30 pb-2"><a class="card" href="{{ url('/nucleus-erp-installation-docs') }}"><img class="d-block mx-auto mt-4" src="img/pages/help-icons/03.png" style="width: 80px;" alt="Payment Methods">
            <div class="card-body text-center">
              <h3 class="card-title">Installation</h3>
              <p class="card-text text-sm">This guide will show you how to install NucleusERP in your local or remote server just in a couple of minutes.</p><span class="text-sm text-uppercase font-weight-bold">View Topic&nbsp;<i class="fe-icon-arrow-right"></i></span>
            </div></a></div>
        <div class="col-lg-4 col-sm-6 mb-30 pb-2"><a class="card" href="{{ url('/nucleus-erp-dashboard-docs') }}"><img class="d-block mx-auto mt-4" src="img/pages/help-icons/04.png" style="width: 80px;" alt="Delivery Information">
            <div class="card-body text-center">
              <h3 class="card-title">Dashboard</h3>
              <p class="card-text text-sm">This guide will show you how to use NucleusERP dashboard when running  in your local or remote server.</p><span class="text-sm text-uppercase font-weight-bold">View Topic&nbsp;<i class="fe-icon-arrow-right"></i></span>
            </div></a></div>
        <div class="col-lg-4 col-sm-6 mb-30 pb-2"><a class="card" href="{{ url('/nucleus-erp-apps-docs') }}"><img class="d-block mx-auto mt-4" src="img/pages/help-icons/05.png" style="width: 80px;" alt="Refund Policy">
            <div class="card-body text-center">
              <h3 class="card-title">Apps</h3>
              <p class="card-text text-sm">This guide will show you how to use Apps in NucleusERP when running  in your local or remote server.</p><span class="text-sm text-uppercase font-weight-bold">View Topic&nbsp;<i class="fe-icon-arrow-right"></i></span>
            </div></a></div>
        <div class="col-lg-4 col-sm-6 mb-30 pb-2"><a class="card" href="{{ url('/nucleus-erp-user-docs') }}"><img class="d-block mx-auto mt-4" src="img/pages/help-icons/06.png" style="width: 80px;" alt="Affiliate Program">
            <div class="card-body text-center">
              <h3 class="card-title">Users</h3>
              <p class="card-text text-sm">This guide will show you how to manage users in NucleusERP when running  in your local or remote server.</p><span class="text-sm text-uppercase font-weight-bold">View Topic&nbsp;<i class="fe-icon-arrow-right"></i></span>
            </div></a></div>
      </div>
    </section>
    <!-- FAQ--
    <section class="container pb-5 mb-1">
      <h2 class="h4 block-title mb-4 text-center">F.A.Q</h2>
      <div class="row pt-3">
        <div class="col-sm-6">
          <ul class="list-icon text-xl">
            <li class="border-bottom pb-2"><i class="fe-icon-file-text text-muted"></i><a class="text-lg navi-link" href="help-single-topic.html">How long will delivery take?</a></li>
            <li class="border-bottom pb-2"><i class="fe-icon-file-text text-muted"></i><a class="text-lg navi-link" href="help-single-topic.html">What payment methods do you accept?</a></li>
            <li class="border-bottom pb-2"><i class="fe-icon-file-text text-muted"></i><a class="text-lg navi-link" href="help-single-topic.html">Do you ship internationally?</a></li>
            <li class="border-bottom pb-2"><i class="fe-icon-file-text text-muted"></i><a class="text-lg navi-link" href="help-single-topic.html">Do I need an account to place an order?</a></li>
            <li class="border-bottom pb-2"><i class="fe-icon-file-text text-muted"></i><a class="text-lg navi-link" href="help-single-topic.html">How can I track my order?</a></li>
          </ul>
        </div>
        <div class="col-sm-6">
          <ul class="list-icon text-xl">
            <li class="border-bottom pb-2"><i class="fe-icon-file-text text-muted"></i><a class="text-lg navi-link" href="help-single-topic.html">What are the product refund conditions?</a></li>
            <li class="border-bottom pb-2"><i class="fe-icon-file-text text-muted"></i><a class="text-lg navi-link" href="help-single-topic.html">Do you have discounts for returning customers?</a></li>
            <li class="border-bottom pb-2"><i class="fe-icon-file-text text-muted"></i><a class="text-lg navi-link" href="help-single-topic.html">How do your referral program work?</a></li>
            <li class="border-bottom pb-2"><i class="fe-icon-file-text text-muted"></i><a class="text-lg navi-link" href="help-single-topic.html">Where I can view and download invoices for my orders?</a></li>
            <li class="border-bottom pb-2"><i class="fe-icon-file-text text-muted"></i><a class="text-lg navi-link" href="help-single-topic.html">Do you provide technical support after the purchase?</a></li>
          </ul>
        </div>
      </div>
    </section>
     Submit Request
    <section class="container pb-5 mb-3">
      <div class="alert alert-image-bg text-center py-5 px-4" style="background-image: url(img/pages/help-section-bg.jpg)">
        <h2 class="h4 block-title mb-4">Haven't found the answer? We can help.</h2>
        <p class="pb-3">Contact us and we’ll get back to you as soon as possible.</p><a class="btn btn-primary" href="help-submit-request.html">Submit a Request</a>
      </div>
    </section> -->
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