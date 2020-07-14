@include('partials._head')
  <!-- Body-->
  <body>
    @include('partials._header')
    <!-- Hero-->
    <section class="bg-parallax py-5"><span class="bg-overlay" style="opacity: .6;"></span>
      <div class="bg-parallax-img" data-parallax="{&quot;y&quot; : 100}"><img src="{{ url('img/pages/contacts-hero-bg.jpg') }}" alt="Parallax Background"/>
      </div>
      <div class="bg-parallax-content px-3 py-md-5 mx-auto mt-lg-5 mb-lg-5 text-center" style="max-width: 800px;">
        <h1 class="text-white pt-2">{{ __('Get in touch with us!') }}</h1>
      </div>
    </section>
    <!-- Contact Details-->
    <section class="container-fluid mb-5">
      <div class="row">
        <div class="col-md-3 col-sm-6 border-right py-2 border-bottom"><a class="scroll-to icon-box text-center mx-auto box-shadow-none px-0" href="#map">
            <div class="icon-box-icon"><i class="fe-icon-map-pin"></i></div>
            <h3 class="icon-box-title">{{ __('Find us') }}</h3>
            <p class="icon-box-text font-weight-medium">{{ __('https://martdev.info') }}</p></a></div>
        <div class="col-md-3 col-sm-6 py-2 border-right border-bottom"><a class="icon-box text-center mx-auto box-shadow-none px-0" href="tel:+254737229776">
            <div class="icon-box-icon"><i class="fe-icon-phone"></i></div>
            <h3 class="icon-box-title">{{ __('Call us') }}</h3>
            <p class="icon-box-text font-weight-medium">{{ __('+254 737 229 776 | +254 740 847 563') }}</p></a></div>
        <div class="col-md-3 col-sm-6 py-2 border-right border-bottom"><a class="icon-box text-center mx-auto box-shadow-none px-0" href="mailto:martdevelopers254@gmail.com">
            <div class="icon-box-icon"><i class="fe-icon-mail"></i></div>
            <h3 class="icon-box-title">{{ __('Email us') }}</h3>
            <p class="icon-box-text font-weight-medium">{{ __('martdevelopers254@gmail.com') }}</p></a></div>
        <div class="col-md-3 col-sm-6 py-2 border-bottom"><a class="icon-box text-center mx-auto box-shadow-none px-0" href="mailto:martdevelopers254@gmail.com">
            <div class="icon-box-icon"><i class="fe-icon-facebook"></i></div>
            <h3 class="icon-box-title">{{ __('Follow us') }}</h3>
            <p class="icon-box-text font-weight-medium">{{ __('Facebook, Twitter, LinkedIn') }}</p></a></div>
      </div>
    </section>
    <!-- Contact Form-->
    <section class="container mb-5 pb-3">
      <div class="wizard">
        <div class="wizard-body pt-3">
          <h2 class="h4 text-center">{{ __('Drop us a line') }}</h2>
          <p class="text-muted text-center">{{ __('We will get back to you as soon as possible') }}</p>
          <form class="needs-validation" >
            <div class="row pt-3">
              <div class="col-sm-6">
                <div class="form-group">
                  <label for="contact-name">{{ __('Your Name') }} <span class='text-danger font-weight-medium'>*</span></label>
                  <input class="form-control" type="text" id="contact-name" placeholder="" required>
                  <div class="invalid-feedback">{{ __('Please enter your name!') }}</div>
                </div>
              </div>
              <div class="col-sm-6">
                <div class="form-group">
                  <label for="contact-email">{{ __('Your Email') }} <span class='text-danger font-weight-medium'>*</span></label>
                  <input class="form-control" type="email" id="contact-email" placeholder="" required>
                  <div class="invalid-feedback">{{ __('Please provide a valid email address!') }}</div>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-sm-6">
                <div class="form-group">
                  <label for="contact-subject">{{ __('Subject') }}</label>
                  <input class="form-control" type="text" id="contact-subject" placeholder="Provide short title of you request">
                </div>
              </div>
              <div class="col-sm-6">
                <div class="form-group">
                  <label for="contact-file">{{ __('Attachment') }}</label>
                  <div class="custom-file">
                    <input class="custom-file-input" type="file" id="contact-file">
                    <label class="custom-file-label" for="contact-file">{{ __('Choose file...') }}</label>
                  </div>
                </div>
              </div>
            </div>
            <div class="form-group">
              <label for="contact-message">{{ __('Message') }} <span class='text-danger font-weight-medium'>*</span></label>
              <textarea class="form-control" rows="7" id="contact-message" placeholder="Let us know more what's on your mind..." required></textarea>
              <div class="invalid-feedback">{{ __('Please write a message!') }}</div>
            </div>
            <div class="text-center">
              <button class="btn btn-primary" type="submit">{{ __('Send Message') }}</button>
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