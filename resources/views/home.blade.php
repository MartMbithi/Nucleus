<!-- Head-->
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
            <div class="card-header"><a class="mobile-menu-link active" href="index.php">Home</a></div>
            
          </div>
          <!-- Portfolio-->
          <div class="card">
            <div class="card-header"><a class="mobile-menu-link " href="nucleus-erp-features.php">Features</a></div>
            
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
            <div class="card-header"><a class="mobile-menu-link" href="nucleus-erp-community.php">Community</a></div>
           
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
    <!-- Navbar: Simple Ghost-->
    @include('partials._nav')
    <!-- Page Content-->
    <!-- Hero-->
    <section class="bg-dark bg-center-top bg-no-repeat position-relative pt-5 pb-4 pb-md-5" style="background-image: url(img/homepages/theme-presentation/hero-bg-back.jpg);">
      <div class="img-cover bg-auto d-none d-md-block" style="background-image: url(img/homepages/theme-presentation/hero-bg-front.jpg);"></div>
      <div class="container bg-content py-5 my-md-5 text-center text-md-left">
        <div class="pb-md-5 mt-5 mb-md-5">
          <div class="d-inline-block h6 text-lg bg-white px-3 py-2 mt-md-4">NucleusERP </div>
          <h1 class="display-3 text-white"><span class="d-block break-word">Free</span><span class="d-block break-word">Lightweight</span><span class="d-block break-word">ERP</span></h1>
        </div>
      </div>
    </section>
    <div class="bg-dark" style="height: 250px;"></div>
    <!-- Theme Details-->
    <section class="container" style="margin-top: -250px;">
      <div class="bg-white box-shadow py-5 px-4 px-sm-5">
        <div class="row">
          <div class="col-md-6 pb-4 mb-3">
            <h5><span class='d-inline-block bg-info text-white px-2 py-1'>1 </span> The most innovative free ERP system</h5>
            <p class="text-muted pb-3">Flexible and efficient management for your company wherever you are in the world - this is what you gain by installing NucleusERP. Where? Anywhere - on your computer, tablet, or smartphone with access to the Internet. .</p>
            <hr>
          </div>
          <div class="col-md-6 pb-4 mb-3">
            <h5><span class='d-inline-block bg-warning text-white px-2 py-1'>2 </span> Flexible UI Components</h5>
            <p class="text-muted pb-3">DRY approach, modular design are the cornerstones of the modern ERP Systems. NucleusERP introduces many components and each has diffrent variations.  This gives you unlimited accounting  possibilities.</p>
            <hr>
          </div>
          <div class="col-md-6 pb-4 mb-3">
            <h5><span class='d-inline-block bg-accent text-white px-3 py-1'>3</span> NucleusERP Is OpenSource</h5>
            <p class="text-muted pb-3">Nucleus ERP is an open source system, so you can download and use it completely for free, which will help to reduce your company’s costs. In addition, the system remains free for unlimited number of users.</p>
            <hr>
          </div>
          <div class="col-md-6 pb-4 mb-3">
            <h5><span class='d-inline-block bg-accent text-white px-3 py-1'>4</span> New possibilities</h5>
            <p class="text-muted pb-3">If you are looking for software that ensures freedom of choice and almost unlimited possibilities, check out what we can offer. With additional modules, managing even a very large company becomes easier and more effective.</p>
            <hr>
          </div>
         
          
              
        </div>
        
      </div>
    </section>
   <!--
    <section class="container mt-2 pt-4 pb-5">
      <h2 class="h3 block-title text-center"><span class='font-weight-normal'>Nucleus</span>ERP<small>Features</small></h2>
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
      </div>
    </section>-->
    
    <!-- Footer + CTA-->
    @include('partials._footer')
    <!-- Back To Top Button--><a class="scroll-to-top-btn" href="#"><i class="fe-icon-chevron-up"></i></a>
    <!-- Backdrop-->
    <div class="site-backdrop"></div>
    <!-- JavaScript (jQuery) libraries, plugins and custom scripts-->
    <script src="js/vendor.min.js"></script>
    <script src="js/theme.min.js"></script>
  </body>

</html>