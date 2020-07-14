<div class="offcanvas-container is-triggered offcanvas-container-reverse" id="mobile-menu"><span class="offcanvas-close"><i class="fe-icon-x"></i></span>
      <div class="px-4 pb-4">
        <h6>{{ __('Menu') }}</h6>
        
      </div>
      <div class="offcanvas-scrollable-area border-top" style="height:calc(100% - 235px); top: 144px;">
        <!-- Mobile Menu-->
        <div class="offcanvas-scrollable-area border-top" style="height:calc(100% - 235px); top: 144px;">
        <!-- Mobile Menu-->
        <div class="accordion mobile-menu" id="accordion-menu">
          <!-- Home-->
          <div class="card">
            <div class="card-header"><a class="mobile-menu-link active" href="{{ url('/') }}">{{ __('Home') }}</a></div>
          </div>
          <!-- Portfolio-->
          <div class="card">
            <div class="card-header"><a class="mobile-menu-link " href="{{ url('/nucleus-erp-features') }}">{{ __('Features') }}</a></div>
            
          </div>
          <!-- Blog-->
          <div class="card">
            <div class="card-header"><a class="mobile-menu-link" >{{ __('Knowledge Base') }}</a><a class="collapsed" href="#blog-submenu" data-toggle="collapse"></a></div>
            <div class="collapse" id="blog-submenu" data-parent="#accordion-menu">
              <div class="card-body">
                <ul>
                  <li class="dropdown-header">{{ __('Documentation') }}</li>
                  <li class="dropdown-item">
                    <a href="{{ url('/nucleus-erp-docs') }}">{{ __('Nucleus ERP Docs') }}</a>
                    </li>
                  <li class="dropdown-header">{{ __('FAQs') }}</li>
                  <li class="dropdown-item"><a href="{{ url('/nucleus-erp-docs') }}">{{ __('Nucleus ERP fAQs') }}</a></li>
                </ul>
              </div>
            </div>
          </div>
          <!-- Shop-->
          <div class="card">
                    <!--<li class="nav-item mega-dropdown-toggle"><a class="nav-link" href="{{ url('/nucleus-erp-community') }}">{{ __('Community') }}</a> -->
          </div>
          <!-- Account-->
          <div class="card">
            <div class="card-header"><a class="mobile-menu-link" >{{ __('NucleusForce') }}</a><a class="collapsed" href="#account-submenu" data-toggle="collapse"></a></div>
            <div class="collapse" id="account-submenu" data-parent="#accordion-menu">
              <div class="card-body">
                <ul>
                <li class="dropdown-item"><a href="{{ url('/nucleus-erp-about-us') }}">{{ __('About Us') }}</a></li>
                  <li class="dropdown-item"><a href="{{ url('/nucleus-erp-licences') }}">{{ __('License') }}</a></li>
                </ul>
              </div>
            </div>
          </div>
          <!-- Pages-->
          <div class="card">
            <div class="card-header"><a class="mobile-menu-link" href="#">{{ __('Company') }}</a><a class="collapsed" href="#pages-submenu" data-toggle="collapse"></a></div>
            <div class="collapse" id="pages-submenu" data-parent="#accordion-menu">
              <div class="card-body">
                <ul>
                    <li class="dropdown-item">
                        <a href="{{ url('/nucleus-erp-contact') }}">{{ __('Contact') }}</a>
                    </li>
                  </li>
                </ul>
              </div>
            </div>
          </div>
          <!-- Components-->
        </div>
      </div>
        <div class="offcanvas-footer px-4 pt-3 pb-2 text-center">
            <a class="social-btn sb-style-3 sb-twitter" href="#">
                <i class="socicon-twitter"></i>
            </a>
            <a class="social-btn sb-style-3 sb-facebook" href="#">
                <i class="socicon-facebook"></i>
            </a>
            <a class="social-btn sb-style-3 sb-pinterest" href="#">
                <i class="socicon-pinterest"></i>
            </a>
            <a class="social-btn sb-style-3 sb-instagram" href="#">
                <i class="socicon-instagram"></i>
            </a>
        </div>
      </div>
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
            <li class="nav-item mega-dropdown-toggle">
                <a class="nav-link" href="{{ url('/') }}">{{ __('Home') }}</a>
            </li>
            <!-- Features-->
            <li class="nav-item dropdown-toggle">
                <a class="nav-link" href="{{ url('/nucleus-erp-features') }}">{{ ('Features') }}</a>
            </li>
            <!-- Knowledge Base-->
            <li class="nav-item mega-dropdown-toggle"><a class="nav-link">{{ __('Knowledge Base') }}</a>
             
                <div class="dropdown-menu mega-dropdown">
                  <div class="d-flex">
                    <div class="column">
                      <div class="widget widget-custom-menu">
                        <h4 class="widget-title">{{ __('Documentation') }}</h4>
                        <ul>
                            <li>
                                <a href="{{ url('/nucleus-erp-docs') }}">{{ __('Nucleus ERP Docs') }}</a>
                            </li>
                        </ul>
                      </div>
                    </div>
                    
                    <div class="column">
                      <div class="widget widget-custom-menu">
                        <h4 class="widget-title">{{ __('FAQs') }}</h4>
                        <ul>
                            <li>
                                <a href="{{ url('/nucleus-erp-faqs') }}">{{ __('Nucleus ERP FAQS') }}</a>
                            </li>
                         
                        </ul>
                      </div>
                    </div>
                  </div>
                </div> 
              </li>
            <!-- Community-->
            <!--<li class="nav-item mega-dropdown-toggle"><a class="nav-link" href="{{ url('/nucleus-erp-community') }}">{{ __('Community') }}</a> -->
            <!-- NucleusForce-->
            <li class="nav-item dropdown-toggle"><a class="nav-link" href="#">{{ __('NucleusForce') }}</a>
                <ul class="dropdown-menu">
                    <li class="dropdown-item">
                        <a href="{{ url('/nucleus-erp-about-us') }}">{{ __('About Us') }}</a>
                    </li>
                    <li class="dropdown-item">
                        <a href="{{ url('/nucleus-erp-licences') }}">{{ __('License') }}</a>
                    </li>
                </ul>
              </li>
            <!-- Pages-->
            <li class="nav-item dropdown-toggle"><a class="nav-link" href="#">{{ __('Company') }}</a>
                <ul class="dropdown-menu">
                    <li class="dropdown-item">
                        <a href="{{ url('/nucleus-erp-contact') }}">{{ __('Contact') }}</a>
                    </li>
                </ul>
            </li>
            @guest
              <li class="nav-item">
                  <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
              </li>
              @if (Route::has('register'))
                  <li class="nav-item">
                      <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                  </li>
              @endif
              @else
                  <li class="nav-item dropdown">
                      <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                          {{ Auth::user()->name }} <span class="caret"></span>
                      </a>

                      <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                          <a class="dropdown-item" href="{{ route('logout') }}"
                              onclick="event.preventDefault();
                                              document.getElementById('logout-form').submit();">
                              {{ __('Logout') }}
                          </a>

                          <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                              @csrf
                          </form>
                      </div>
                  </li> 
            @endguest        
          </ul>
          <!--
          <div>
              <ul class="navbar-buttons d-inline-block align-middle">
                <li class="d-block d-lg-none"><a href="#mobile-menu" data-toggle="offcanvas"><i class="fe-icon-menu"></i></a></li>
                <li><a href="#" data-toggle="search"><i class="fe-icon-search"></i></a></li>
              </ul><a class="btn btn-gradient ml-3 d-none d-xl-inline-block" href="{{ route('login') }}">{{ __('Try Nucleus') }}</a>
            </div>
        </div> -->
      </div>
    </header>