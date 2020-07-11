@include('partials._head')
  <!-- Body-->
  <body>
    
    <!-- Off-Canvas Menu-->
    <div class="offcanvas-container is-triggered offcanvas-container-reverse" id="mobile-menu"><span class="offcanvas-close"><i class="fe-icon-x"></i></span>
      <div class="px-4 pb-4">
        <h6>Menu</h6>
        <div class="d-flex justify-content-between pt-2">
          <div class="btn-group w-100 mr-2"><a class="btn btn-secondary btn-sm btn-block dropdown-toggle" href="#" data-toggle="dropdown"><img src="img/flags/en.png" alt="English"/>English</a>
            <div class="dropdown-menu" style="min-width: 150px;"><a class="dropdown-item" href="#"><img src="img/flags/fr.png" alt="Français"/>Français</a><a class="dropdown-item" href="#"><img src="img/flags/de.png" alt="Deutsch"/>Deutsch</a><a class="dropdown-item" href="#"><img src="img/flags/it.png" alt="Italiano"/>Italiano</a></div>
          </div><a class="btn btn-primary btn-sm btn-block" href="nucleus-erp-login.php"><i class="fe-icon-user"></i>&nbsp;Login</a>
        </div>
      </div>

      <div class="offcanvas-scrollable-area border-top" style="height:calc(100% - 235px); top: 144px;">
        <!-- Mobile Menu-->
        <div class="accordion mobile-menu" id="accordion-menu">
          <!-- Home-->
          <div class="card">
            <div class="card-header"><a class="mobile-menu-link" href="index.php">Home</a><a class="collapsed" href="#home-submenu" data-toggle="collapse"></a></div>
            
          </div>
          <!-- Portfolio-->
          <div class="card">
            <div class="card-header"><a class="mobile-menu-link active" href="nucleus-erp-features.php">Features</a><a class="collapsed" href="#portfolio-submenu" data-toggle="collapse"></a></div>
            
          </div>
          <!-- Blog-->
          <div class="card">
            <div class="card-header"><a class="mobile-menu-link" >Knowledge Base</a><a class="collapsed" href="#blog-submenu" data-toggle="collapse"></a></div>
            <div class="collapse" id="blog-submenu" data-parent="#accordion-menu">
              <div class="card-body">
                <ul>
                  <li class="dropdown-header">Documentation</li>
                  <li class="dropdown-item"><a href="nucleus-erp-docs.php">Nucleus ERP Docs</a></li>
                  
                  <li class="dropdown-header">FAQs</li>
                  <li class="dropdown-item"><a href="nucleus-erp-docs.php">Nucleus ERP fAQs</a></li>
                 
                </ul>
              </div>
            </div>
          </div>
          <!-- Shop-->
          <div class="card">
            <div class="card-header"><a class="mobile-menu-link" href="nucleus-erp-community.php">Community</a><a class="collapsed" href="#shop-submenu" data-toggle="collapse"></a></div>
           
          </div>
          <!-- Account-->
          <div class="card">
            <div class="card-header"><a class="mobile-menu-link" >NucleusForce</a><a class="collapsed" href="#account-submenu" data-toggle="collapse"></a></div>
            <div class="collapse" id="account-submenu" data-parent="#accordion-menu">
              <div class="card-body">
                <ul>
                <li class="dropdown-item"><a href="nucleus-erp-about-us.php">About Us</a></li>
                  <li class="dropdown-item"><a href="nucleus-erp-licences.php">License</a></li>
                  
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
                  <li class="dropdown-item"><a href="nucleus-erp-contact.php">Contact</a></li>
                    
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
    <!-- Off-Canvas Shopping Cart-->
    
    <!-- Navbar: Default-->
    <!-- Remove "navbar-sticky" class to make navigation bar scrollable with the page.-->
    <header class="navbar-wrapper ">
      <div class="d-table-cell align-middle pr-md-3"><a class="navbar-brand mr-1" href="index.php"><img src="img/logo/logo-dark.png" alt="CreateX"/></a></div>
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
            <li class="nav-item mega-dropdown-toggle"><a class="nav-link" href="index.php">Home</a>
              
            </li>
            <!-- Features-->
            <li class="nav-item dropdown-toggle active"><a class="nav-link" href="nucleus-erp-features.php">Features</a>
              
            </li>
            <!-- Knowledge Base-->
            <li class="nav-item mega-dropdown-toggle"><a class="nav-link">Knowledge Base</a>
             
                <div class="dropdown-menu mega-dropdown">
                  <div class="d-flex">
                    <div class="column">
                      <div class="widget widget-custom-menu">
                        <h4 class="widget-title">Documentation</h4>
                        <ul>
                          <li><a href="nucleus-erp-docs.php">Nucleus ERP Docs</a></li>
                        
                        </ul>
                      </div>
                    </div>
                    
                    <div class="column">
                      <div class="widget widget-custom-menu">
                        <h4 class="widget-title">FAQs</h4>
                        <ul>
                          <li><a href="nucleus-erp-faqs.php">Nucleus ERP FAQS</a></li>
                         
                        </ul>
                      </div>
                    </div>
                    
                  </div>
                </div> 
              </li>
            <!-- Community-->
            <li class="nav-item mega-dropdown-toggle"><a class="nav-link" href="nucleus-erp-community.php">Community</a>
            <!-- NucleusForce-->
            <li class="nav-item dropdown-toggle"><a class="nav-link" href="#">NucleusForce</a>
                <ul class="dropdown-menu">
                    
                  <li class="dropdown-item"><a href="nucleus-erp-about-us.php">About Us</a></li>
                  <li class="dropdown-item"><a href="nucleus-erp-licences.php">License</a></li>
                  
                  
                </ul>
              </li>
            <!-- Pages-->
            <li class="nav-item dropdown-toggle"><a class="nav-link" href="#">Company</a>
                <ul class="dropdown-menu">
                    
                  <li class="dropdown-item"><a href="nucleus-erp-contact.php">Contact</a></li>
                  
                  
                </ul>
              </li>
            
            
          </ul>
          <div>
              <ul class="navbar-buttons d-inline-block align-middle">
                <li class="d-block d-lg-none"><a href="#mobile-menu" data-toggle="offcanvas"><i class="fe-icon-menu"></i></a></li>
                <li><a href="#" data-toggle="search"><i class="fe-icon-search"></i></a></li>
              </ul><a class="btn btn-gradient ml-3 d-none d-xl-inline-block" href="nucleus-erp-login.php">Download</a>
              
            </div>
        </div>
      </div>
    </header>
    <!-- Page Title-->
    <div class="page-title d-flex" aria-label="Page title" style="background-image: url(img/page-title/portfolio-pattern.png);">
      <div class="container text-left align-self-center">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.php">Home</a>
            </li>
            <li class="breadcrumb-item"><a href="nucleus-erp-features.php">Features</a>
            </li>
          </ol>
        </nav>
        <h1 class="page-title-heading">Nucleus ERP Features</h1>
        <div class="page-title-subheading">Some of the features that are <strong>gonna blow your mind off </strong></div>
      </div>
    </div>
    <!-- Page Content-->
    <section class="container mt-2 pt-4 pb-5">
      <div class="row pt-4">
        <div class="col-lg-4 col-sm-6 mb-30"><a class="d-block bg-right-center bg-no-repeat bg-white border box-shadow p-5 text-decoration-none"  style="background-image: url(img/homepages/theme-presentation/portfolio.png);">
            <h3 class="h5">Free Accounting</h3>
            <p class="text-muted pb-2">Completely Free. No setup fees. No hidden charges. Not a free limited version. Free means free..</p>
            </a></div>

        <div class="col-lg-4 col-sm-6 mb-30"><a class="d-block bg-right-center bg-no-repeat bg-white border box-shadow p-5 text-decoration-none"  style="background-image: url(img/homepages/theme-presentation/blog.png);">
            <h3 class="h5">Inventory </h3>
            <p class="text-muted pb-2">Enable inventory tracking and manage goods as they come in and go out. Items also speed up invoicing.</p>
            </a></div>

        <div class="col-lg-4 col-sm-6 mb-30"><a class="d-block bg-right-center bg-no-repeat bg-white border box-shadow p-5 text-decoration-none"  style="background-image: url(img/homepages/theme-presentation/shop.png);">
            <h3 class="h5">Multi-Company</h3>
            <p class="text-muted pb-2">Manage the finances of multiple companies from one admin panel. Assign users to different companies.</p>
            </a></div>

        <div class="col-lg-4 col-sm-6 mb-30"><a class="d-block bg-right-center bg-no-repeat bg-white border box-shadow p-5 text-decoration-none"  style="background-image: url(img/homepages/theme-presentation/account.png);">
            <h3 class="h5">Easy Invoicing</h3>
            <p class="text-muted pb-2">Send professional invoices to clients and start accepting online payments, no commission/transaction fee.</p>
            </a></div>

        <div class="col-lg-4 col-sm-6 mb-30"><a class="d-block bg-right-center bg-no-repeat bg-white border box-shadow p-5 text-decoration-none"  style="background-image: url(img/homepages/theme-presentation/pages.png);">
            <h3 class="h5">Multi-Currency</h3>
            <p class="text-muted pb-2">Send invoices and add expenses in any currency and let the system convert them in your main currency.</p>
            </a></div>

            <div class="col-lg-4 col-sm-6 mb-30"><a class="d-block bg-right-center bg-no-repeat bg-white border box-shadow p-5 text-decoration-none"  style="background-image: url(img/homepages/theme-presentation/docs.png);">
            <h3 class="h5">Billable Expenses</h3>
            <p class="text-muted pb-2">Create and manage bills so your finances are always accurate and healthy. Know what and when to pay.</p>
            </a></div>

            <div class="col-lg-4 col-sm-6 mb-30"><a class="d-block bg-right-center bg-no-repeat bg-white border box-shadow p-5 text-decoration-none"  style="background-image: url(img/homepages/theme-presentation/docs.png);">
            <h3 class="h5">Powerful Reporting</h3>
            <p class="text-muted pb-2">Get detailed financial reports to help you better visualize all the information you need to improve your business.</p>
            </a></div>

            <div class="col-lg-4 col-sm-6 mb-30"><a class="d-block bg-right-center bg-no-repeat bg-white border box-shadow p-5 text-decoration-none"  style="background-image: url(img/homepages/theme-presentation/account.png);">
            <h3 class="h5">Client Portal</h3>
            <p class="text-muted pb-2">Share the transactions and invoices with your clients and accept bulk payments, online.</p>
            </a></div>

            <div class="col-lg-4 col-sm-6 mb-30"><a class="d-block bg-right-center bg-no-repeat bg-white border box-shadow p-5 text-decoration-none"  style="background-image: url(img/homepages/theme-presentation/portfolio.png);">
            <h3 class="h5">Customer Management</h3>
            <p class="text-muted pb-2">Create clients and send invoices to them. </p>
            </a></div>

            <div class="col-lg-4 col-sm-6 mb-30"><a class="d-block bg-right-center bg-no-repeat bg-white border box-shadow p-5 text-decoration-none"  style="background-image: url(img/homepages/theme-presentation/shop.png);">
            <h3 class="h5">Vendor Management</h3>
            <p class="text-muted pb-2">Create vendors so you could assign bills and payments to them and later filter their transactions easily.</p>
            </a></div>

            <div class="col-lg-4 col-sm-6 mb-30"><a class="d-block bg-right-center bg-no-repeat bg-white border box-shadow p-5 text-decoration-none"  style="background-image: url(img/homepages/theme-presentation/account.png);">
            <h3 class="h5">Online Accounting</h3>
            <p class="text-muted pb-2">See your financials online anytime, anywhere on your Mac, PC, tablet or mobile phone. No limits</p>
            </a></div>

            <div class="col-lg-4 col-sm-6 mb-30"><a class="d-block bg-right-center bg-no-repeat bg-white border box-shadow p-5 text-decoration-none"  style="background-image: url(img/homepages/theme-presentation/docs.png);">
            <h3 class="h5">Deposits & Transfers</h3>
            <p class="text-muted pb-2">Add deposits to and transfers between accounts and keep the balance of your bank accounts active.</p>
            </a></div>


      </div>
    </section>
    
    <!-- Footer-->
    <?php include("includes/footer.php")?>
    <!-- Back To Top Button--><a class="scroll-to-top-btn" href="#"><i class="fe-icon-chevron-up"></i></a>
    <!-- Backdrop-->
    <div class="site-backdrop"></div>
    <!-- JavaScript (jQuery) libraries, plugins and custom scripts-->
    <script src="js/vendor.min.js"></script>
    <script src="js/theme.min.js"></script>
  </body>

</html>