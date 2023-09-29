  <!--====== PRELOader ======-->
  <div class="preloader d-flex align-items-center justify-content-center">
      <div class="cssload-container">
          <div class="cssload-loading"><i></i><i></i><i></i><i></i></div>
      </div>
  </div>

  <!--====== HEADER START ======-->
  <header class="header-absolute header-two sticky-header">
      <div class="container container-custom-one">
          <div class="nav-container d-flex align-items-center justify-content-between">
              <!-- Main Menu -->
              <div class="nav-menu d-lg-flex align-items-center">

                  <!-- Navbar Close Icon -->
                  <div class="navbar-close">
                      <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                  </div>

                  <!-- Off canvas Menu  -->
                  <div class="toggle">
                      <a href="#" id="offCanvasBtn"><i class="fal fa-bars"></i></a>
                  </div>
                  <!-- Mneu Items -->
                  <div class="menu-items">
                      <ul>
                          <li>
                              <a href="{{ route('hotel') }}">Home</a>
                          </li>
                          <li>
                              <a href="{{ route('trending') }}">Apartments</a>
                          </li>
                          <li>
                              <a href="{{ route('gallery') }}">Our Gallery</a>
                          </li>
                          <li>
                              <a href="{{ route('contact') }}">Contact Us</a>
                          </li>
                          <li>
                              <a href="{{ route('booking') }}">Anfrage</a>
                          </li>
                      </ul>
                  </div>

                  <!-- from pushed-item -->
                  <div class="nav-pushed-item"></div>
              </div>

              <!-- Site Logo -->
              <div class="site-logo">
                  <a href="{{ route('hotel') }}" class="main-logo"><img
                          src="{{ asset('WebsiteHotel/assets/img/logo.jpg') }}" alt="Logo"></a>
                  <a href="{{ route('hotel') }}" class="sticky-logo"><img
                          src="{{ asset('WebsiteHotel/assets/img/logo.jpg') }}" alt="Logo"></a>
              </div>

              <!-- Header Info Pussed To Menu Wrap -->
              <div class="nav-push-item">
                  <!-- Header Info -->
                  <div class="header-info d-lg-flex align-items-center">
                      <div class="item">
                          <i class="fal fa-phone"></i>
                          <span>Telefon Nummer</span>
                          <a href="tel:+436645146460">
                              <h5 class="title">+43 664 5146460</h5>
                          </a>
                      </div>
                      <div class="item">
                          <i class="fal fa-envelope"></i>
                          <span>E-Mail Adresse</span>
                          <a href="mailto:info@landhaus-bergzeit.at">
                              <h5 class="title">info@landhaus-bergzeit.at</h5>
                          </a>
                      </div>
                  </div>
              </div>

              <!-- Navbar Toggler -->
              <div class="navbar-toggler">
                  <span></span><span></span><span></span>
              </div>
          </div>
      </div>
  </header>
  <!--====== HEADER END ======-->

  <!--====== OFF CANVAS START ======-->
  <div class="offcanvas-wrapper">
      <div class="offcanvas-overly"></div>
      <div class="offcanvas-widget">
          <a href="#" class="offcanvas-close"><i class="fal fa-times"></i></a>
          <!-- About Widget -->
          <div class="widget about-widget">
              <h5 class="widget-title">Urlaub in Filzmoos</h5>
              <p>
                  Landhaus Bergzeit <br><br>
                  Winterurlaub im schneesicherem Filzmoos oder Sommerurlaub in der herrlichen Bergwelt
                  der Bischofsmütze.
              </p>
          </div>
          <!-- Nav Widget -->
          <div class="widget nav-widget">
              <h5 class="widget-title">Our pages</h5>
              <ul>
                  <li>
                      <a href="{{ route('hotel') }}">Home</a>
                  </li>
                  <li>
                      <a href="{{ route('trending') }}">Apartments</a>
                  </li>
                  <li>
                      <a href="{{ route('gallery') }}">Our Gallery</a>
                  </li>
                  <li>
                      <a href="{{ route('contact') }}">Contact Us</a>
                  </li>
                  <li>
                      <a href="{{ route('booking') }}">Anfrage</a>
                  </li>
                  <li>
                      <a href="{{ route('cp') }}">cp</a>
                  </li>
              </ul>
          </div>
          <!-- Social Link -->
          <div class="widget social-link">
              <h5 class="widget-title">Contact with us</h5>
              <ul>
                  <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                  <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                  <li><a href="#"><i class="fab fa-behance"></i></a></li>
                  <li><a href="#"><i class="fab fa-linkedin"></i></a></li>
                  <li><a href="#"><i class="fab fa-google"></i></a></li>
              </ul>
          </div>
      </div>
  </div>
  <!--====== OFF CANVAS END ======-->
