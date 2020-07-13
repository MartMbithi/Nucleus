<header class="navbar-wrapper navbar-sticky navbar-boxed navbar-simple-ghost">
    <div class="container-fluid">
        <div class="d-table-cell align-middle pr-md-3">
            <a class="navbar-brand mr-1" href="{{ url('/') }}">
                <img src="{{ url('img/logo/logo-light.png') }}" alt="Nucleus ERP"/>
            </a>
        </div>
        <div class="d-table-cell w-100 align-middle pl-md-3">
            <div class="navbar justify-content-end justify-content-lg-between">
                <!-- Search-->
                <form class="search-box" method="get">
                    <input type="text" id="site-search" placeholder="Type A or C to see suggestions"><span class="search-close"><i class="fe-icon-x"></i></span>
                </form>
                <!-- Main Menu-->
                <ul class="navbar-nav d-none d-lg-block">
                    <!-- Home-->
                    <li class="nav-item mega-dropdown-toggle active">
                        <a class="nav-link" href="{{ url('/') }}">{{ __('Home') }}</a> 
                    </li>
                    <!-- Features-->
                    <li class="nav-item dropdown-toggle">
                        <a class="nav-link" href="{{ url('/nucleus-erp-features') }}">{{ __('Features') }}</a>
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
                                        <h4 class="widget-title">FAQs</h4>
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
                    
                    
                    <li class="nav-item mega-dropdown-toggle"><a class="nav-link" href="{{ url('/nucleus-erp-community') }}">{{ __('Community') }}</a>
                    
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

                    <li class="nav-item dropdown-toggle"><a class="nav-link" href="#">{{ __('Company') }}</a>
                        <ul class="dropdown-menu">
                            <li class="dropdown-item">
                                <a href="{{ url('nucleus-erp-contact') }}">{{ __('Contact') }}</a>
                            </li>
                        </ul>
                    </li>               
                </ul>

                <div>
                    <ul class="navbar-buttons d-inline-block align-middle">
                        <li class="d-block d-lg-none"><a href="#mobile-menu" data-toggle="offcanvas"><i class="fe-icon-menu"></i></a></li>
                        <li><a href="#" data-toggle="search"><i class="fe-icon-search"></i></a></li>
                    </ul>
                    <a class="btn btn-gradient ml-3 d-none d-xl-inline-block" href="{{ url('/nucleus-erp-login') }}">{{ __('Free Trial') }}</a>
                </div>
            </div>
        </div>
    </div>
</header>