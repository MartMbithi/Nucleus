<!-- Head-->
@include('partials._head')
  <!-- Body-->
  <body>
    <!-- Off-Canvas Menu-->
    <div class="offcanvas-container is-triggered offcanvas-container-reverse" id="mobile-menu">
        <span class="offcanvas-close">
            <i class="fe-icon-x"></i>
        </span>
      <div class="px-4 pb-4">
        <h6>Menu</h6>
      </div>
      <div class="offcanvas-scrollable-area border-top" style="height:calc(100% - 235px); top: 144px;">
        <!-- Mobile Menu-->
        <div class="accordion mobile-menu" id="accordion-menu">
          <!-- Home-->
          <div class="card">
            <div class="card-header"><a class="mobile-menu-link active" href="{{ url('/') }}">Home</a></div>
          </div>
          <!-- Portfolio-->
          <div class="card">
            <div class="card-header"><a class="mobile-menu-link " href="{{ url('/nucleus-erp-features') }}">Features</a></div>
            
          </div>
          <!-- Blog-->
          <div class="card">
            <div class="card-header"><a class="mobile-menu-link" >Knowledge Base</a><a class="collapsed" href="#blog-submenu" data-toggle="collapse"></a></div>
            <div class="collapse" id="blog-submenu" data-parent="#accordion-menu">
              <div class="card-body">
                <ul>
                  <li class="dropdown-header">Documentation</li>
                  <li class="dropdown-item"><a href="{{ url('/nucleus-erp-docs') }}">Nucleus ERP Docs</a></li>
                  
                  <li class="dropdown-header">FAQs</li>
                  <li class="dropdown-item"><a href="{{ url('/nucleus-erp-docs') }}">Nucleus ERP fAQs</a></li>
                 
                </ul>
              </div>
            </div>
          </div>
          <!-- Shop-->
          <div class="card">
            <div class="card-header"><a class="mobile-menu-link" href="{{ url('/nucleus-erp-community') }}">Community</a></div>
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
                    <li class="dropdown-item">
                        <a href="{{ url('/nucleus-erp-contact') }}">Contact</a>
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
    <!-- Navbar: Simple Ghost-->
    @include('partials._nav')
    <!-- Page Content-->
    <!-- Hero-->
    <section class="bg-dark bg-center-top bg-no-repeat position-relative pt-5 pb-4 pb-md-5" style="background-image: url(img/homepages/theme-presentation/hero-bg-back.jpg);">
      <div class="img-cover bg-auto d-none d-md-block" style="background-image: url(img/homepages/theme-presentation/hero-bg-front.jpg);"></div>
      <div class="container bg-content py-5 my-md-5 text-center text-md-left">
        <div class="pb-md-5 mt-5 mb-md-5">
          <div class="d-inline-block h6 text-lg bg-white px-3 py-2 mt-md-4">NucleusERP </div>
          <h1 class="display-3 text-white"><span class="d-block break-word">LightWeight</span><span class="d-block break-word">SaaS</span><span class="d-block break-word">ERP</span></h1>
        </div>
      </div>
    </section>
    <div class="bg-dark" style="height: 250px;"></div>
    <!-- Theme Details-->
    <section class="container" style="margin-top: -250px;">
      <div class="bg-white box-shadow py-5 px-4 px-sm-5">
        <div class="row">
          <div class="col-md-6 pb-4 mb-3">
            <h5><span class='d-inline-block bg-info text-white px-2 py-1'>1 </span> The most innovative SaaS ERP system</h5>
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
            <p class="text-muted pb-3">Nucleus ERP is an open source system, so you can download and use it completely for free, which will help to reduce your company’s costs. In addition, the system remains opensource for unlimited number of users.</p>
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
   
    <!-- Footer + CTA-->
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