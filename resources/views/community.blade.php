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
            <li class="active nav-item mega-dropdown-toggle"><a class="nav-link " href="{{ url('/nucleus-erp-community') }}">Community</a>
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
    <section class="bg-center bg-no-repeat bg-cover py-5" style="background-image: url(img/pricing-hero-bg.jpg);">
      <div class="container py-4 py-sm-5">
        <h1 class="text-center text-white text-shadow pt-3"><span class='d-block h2 text-white'>Have no time to download Nucleus ERP ?</span>We offer solution.</h1>
        <p class="lead text-center text-white text-shadow pt-2 pb-5">You  <strong>Can </strong>Have A  Demo <strong>FREE</strong>!</p>
      </div>
    </section>

    <section class="container pt-sm-2">
      <p class="text-muted text-center pb-3"><span class='font-weight-medium text-danger'>*</span> <b>email:</b> martdevelopers@nucleuserp.com <b> password:</b> demo </p>
      <div class="pricing-plans pb-5">
        <ul class="nav nav-tabs nav-tabs-style-3 pricing-tabs justify-content-center">
          <li class="nav-item"><a class="nav-link " href="https://martdev.info/nuclei/n/" target="_blank" data-toggle="price" data-period="monthly">Demo</a></li>
          
        </ul>
        
      </div>
    </section>
    <!-- Clients--
    <section class="py-5 bg-secondary">
      <div class="container">
        <h2 class="h3 block-title text-center mt-2 mb-5"><span class='font-weight-normal'>Our </span>clients<small>Well respected people and companies from around the world</small></h2>
        <div class="row">
          <div class="col-6 col-md-3"><a class="d-block bg-white box-shadow py-5 mb-30" href="#"><img class="d-block mx-auto" src="img/partners/01.png" width="165" alt="Partner"></a></div>
          <div class="col-6 col-md-3"><a class="d-block bg-white box-shadow py-5 mb-30" href="#"><img class="d-block mx-auto" src="img/partners/02.png" width="165" alt="Partner"></a></div>
          <div class="col-6 col-md-3"><a class="d-block bg-white box-shadow py-5 mb-30" href="#"><img class="d-block mx-auto" src="img/partners/03.png" width="165" alt="Partner"></a></div>
          <div class="col-6 col-md-3"><a class="d-block bg-white box-shadow py-5 mb-30" href="#"><img class="d-block mx-auto" src="img/partners/04.png" width="165" alt="Partner"></a></div>
          <div class="col-6 col-md-3"><a class="d-block bg-white box-shadow py-5 mb-30" href="#"><img class="d-block mx-auto" src="img/partners/07.png" width="165" alt="Partner"></a></div>
          <div class="col-6 col-md-3"><a class="d-block bg-white box-shadow py-5 mb-30" href="#"><img class="d-block mx-auto" src="img/partners/05.png" width="165" alt="Partner"></a></div>
          <div class="col-6 col-md-3"><a class="d-block bg-white box-shadow py-5 mb-30" href="#"><img class="d-block mx-auto" src="img/partners/08.png" width="165" alt="Partner"></a></div>
          <div class="col-6 col-md-3"><a class="d-block bg-white box-shadow py-5 mb-30" href="#"><img class="d-block mx-auto" src="img/partners/09.png" width="165" alt="Partner"></a></div>
        </div>
      </div>
    </section>
    <!-- Testimonials--
    <section class="py-5">
      <div class="container py-1">
        <h2 class="h3 block-title text-center mt-2 mb-5"><span class='font-weight-normal'>And here </span>what they say</h2>
        <div class="owl-carousel testimonials-carousel" data-owl-carousel="{ &quot;nav&quot;: false, &quot;dots&quot;: true, &quot;loop&quot;: true, &quot;margin&quot;: -15, &quot;autoplay&quot;: true, &quot;autoplayTimeout&quot;: 4000, &quot;responsive&quot;: {&quot;0&quot;:{&quot;items&quot;:1},&quot;630&quot;:{&quot;items&quot;:2},&quot;991&quot;:{&quot;items&quot;:2},&quot;1200&quot;:{&quot;items&quot;:3}} }">
          <div class="blockquote testimonial">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
            <footer class="testimonial-footer">
              <div class="testimonial-avatar"><img src="img/testimonials/01.jpg" alt="Testimonial Author Avatar"/>
              </div>
              <div class="d-table-cell align-middle pl-2">
                <div class="blockquote-footer">Barbara Palson
                  <cite>Graphic Designer</cite>
                </div>
              </div>
            </footer>
          </div>
          <div class="blockquote testimonial">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
            <footer class="testimonial-footer">
              <div class="testimonial-avatar"><img src="img/testimonials/02.jpg" alt="Testimonial Author Avatar"/>
              </div>
              <div class="d-table-cell align-middle pl-2">
                <div class="blockquote-footer">Hinata Nakamura
                  <cite>Financial Director</cite>
                </div>
              </div>
            </footer>
          </div>
          <div class="blockquote testimonial">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
            <footer class="testimonial-footer">
              <div class="testimonial-avatar"><img src="img/testimonials/03.jpg" alt="Testimonial Author Avatar"/>
              </div>
              <div class="d-table-cell align-middle pl-2">
                <div class="blockquote-footer">Michael Davis
                  <cite>Co-Founder, CEO</cite>
                </div>
              </div>
            </footer>
          </div>
          <div class="blockquote testimonial">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
            <footer class="testimonial-footer">
              <div class="testimonial-avatar"><img src="img/testimonials/04.jpg" alt="Testimonial Author Avatar"/>
              </div>
              <div class="d-table-cell align-middle pl-2">
                <div class="blockquote-footer">Sophia Johnson
                  <cite>Marketing Manager</cite>
                </div>
              </div>
            </footer>
          </div>
          <div class="blockquote testimonial">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
            <footer class="testimonial-footer">
              <div class="testimonial-avatar"><img src="img/testimonials/05.jpg" alt="Testimonial Author Avatar"/>
              </div>
              <div class="d-table-cell align-middle pl-2">
                <div class="blockquote-footer">Christopher Lee
                  <cite>Marketing Manager</cite>
                </div>
              </div>
            </footer>
          </div>
        </div>
      </div>
    </section>
     Footer-->
     @include('partials._footer')
    <!-- Back To Top Button--><a class="scroll-to-top-btn" href="#"><i class="fe-icon-chevron-up"></i></a>
    <!-- Backdrop-->
    <div class="site-backdrop"></div>
    <!-- JavaScript (jQuery) libraries, plugins and custom scripts-->
    <script src="{{ url('js/vendor.min.js') }}"></script>
    <script src="{{ url('js/theme.min.js') }}"></script>
  </body>

</html>