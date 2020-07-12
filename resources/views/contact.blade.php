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
            <li class="nav-item mega-dropdown-toggle "><a class="nav-link">Knowledge Base</a>
             
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
                          <li class=""><a href="{{ url('/nucleus-erp-faqs') }}">Nucleus ERP FAQS</a></li>
                         
                        </ul>
                      </div>
                    </div>
                    
                  </div>
                </div> 
              </li>
            <!-- Community-->
            <li class=" nav-item mega-dropdown-toggle"><a class="nav-link " href="{{ url('/nucleus-erp-community') }}">Community</a>
            <!-- NucleusForce-->
            <li class="nav-item dropdown-toggle"><a class="nav-link" href="#">NucleusForce</a>
                <ul class="dropdown-menu">
                  <li class=" dropdown-item"><a href="{{ url('/nucleus-erp-about-us') }}">About Us</a></li>
                  <li class="active dropdown-item"><a href="{{ url('/nucleus-erp-licences') }}">License</a></li>                  
                </ul>
              </li>
            <!-- Pages-->
            <li class="active nav-item dropdown-toggle"><a class="nav-link" href="#">Company</a>
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
    <!-- Hero-->
    <section class="bg-parallax py-5"><span class="bg-overlay" style="opacity: .6;"></span>
      <div class="bg-parallax-img" data-parallax="{&quot;y&quot; : 100}"><img src="{{ url('img/pages/contacts-hero-bg.jpg') }}" alt="Parallax Background"/>
      </div>
      <div class="bg-parallax-content px-3 py-md-5 mx-auto mt-lg-5 mb-lg-5 text-center" style="max-width: 800px;">
        <h1 class="text-white pt-2">Get in touch with us!</h1>
      </div>
    </section>
    <!-- Contact Details-->
    <section class="container-fluid mb-5">
      <div class="row">
        <div class="col-md-3 col-sm-6 border-right py-2 border-bottom"><a class="scroll-to icon-box text-center mx-auto box-shadow-none px-0" href="#map">
            <div class="icon-box-icon"><i class="fe-icon-map-pin"></i></div>
            <h3 class="icon-box-title">Find us</h3>
            <p class="icon-box-text font-weight-medium">127.0.0.1</p></a></div>
        <div class="col-md-3 col-sm-6 py-2 border-right border-bottom"><a class="icon-box text-center mx-auto box-shadow-none px-0" href="tel:+254737229776">
            <div class="icon-box-icon"><i class="fe-icon-phone"></i></div>
            <h3 class="icon-box-title">Call us</h3>
            <p class="icon-box-text font-weight-medium">+254 737 229 776 | +254 740 847 563</p></a></div>
        <div class="col-md-3 col-sm-6 py-2 border-right border-bottom"><a class="icon-box text-center mx-auto box-shadow-none px-0" href="mailto:martdevelopers254@gmail.com">
            <div class="icon-box-icon"><i class="fe-icon-mail"></i></div>
            <h3 class="icon-box-title">Email us</h3>
            <p class="icon-box-text font-weight-medium">martdevelopers254@gmail.com</p></a></div>
        <div class="col-md-3 col-sm-6 py-2 border-bottom"><a class="icon-box text-center mx-auto box-shadow-none px-0" href="mailto:martdevelopers254@gmail.com">
            <div class="icon-box-icon"><i class="fe-icon-facebook"></i></div>
            <h3 class="icon-box-title">Follow us</h3>
            <p class="icon-box-text font-weight-medium">Facebook, Twitter, LinkedIn</p></a></div>
      </div>
    </section>
    <!-- Contact Form-->
    <section class="container mb-5 pb-3">
      <div class="wizard">
        <div class="wizard-body pt-3">
          <h2 class="h4 text-center">Drop us a line</h2>
          <p class="text-muted text-center">We will get back to you as soon as possible</p>
          <form class="needs-validation" novalidate>
            <div class="row pt-3">
              <div class="col-sm-6">
                <div class="form-group">
                  <label for="contact-name">Your Name <span class='text-danger font-weight-medium'>*</span></label>
                  <input class="form-control" type="text" id="contact-name" placeholder="" required>
                  <div class="invalid-feedback">Please enter your name!</div>
                </div>
              </div>
              <div class="col-sm-6">
                <div class="form-group">
                  <label for="contact-email">Your Email <span class='text-danger font-weight-medium'>*</span></label>
                  <input class="form-control" type="email" id="contact-email" placeholder="" required>
                  <div class="invalid-feedback">Please provide a valid email address!</div>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-sm-6">
                <div class="form-group">
                  <label for="contact-subject">Subject</label>
                  <input class="form-control" type="text" id="contact-subject" placeholder="Provide short title of you request">
                </div>
              </div>
              <div class="col-sm-6">
                <div class="form-group">
                  <label for="contact-file">Attachment</label>
                  <div class="custom-file">
                    <input class="custom-file-input" type="file" id="contact-file">
                    <label class="custom-file-label" for="contact-file">Choose file...</label>
                  </div>
                </div>
              </div>
            </div>
            <div class="form-group">
              <label for="contact-message">Message <span class='text-danger font-weight-medium'>*</span></label>
              <textarea class="form-control" rows="7" id="contact-message" placeholder="Let us know more what's on your mind..." required></textarea>
              <div class="invalid-feedback">Please write a message!</div>
            </div>
            <div class="text-center">
              <button class="btn btn-primary" type="submit">Send Message</button>
            </div>
          </form>
        </div>
      </div>
    </section>
    
    @include('partials._footer')
    <!-- Back To Top Button--><a class="scroll-to-top-btn" href="#"><i class="fe-icon-chevron-up"></i></a>
    <!-- Backdrop-->
    <div class="site-backdrop"></div>
    <!-- JavaScript (jQuery) libraries, plugins and custom scripts-->
    <script src="{{ url('js/vendor.min.js') }}"></script>
    <script src="{{ url('js/theme.min.js') }}"></script>
  </body>

</html>