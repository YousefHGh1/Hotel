<!--====== Back to Top ======-->
<a href="#" class="back-to-top" id="backToTop">
    <i class="fal fa-angle-double-up"></i>
</a>
<!--====== FOOTER START ======-->
@forelse ($footers as $footer)
    <footer class="footer-two">
        <div class="footer-widget-area pt-100 pb-50">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-sm-6 order-1">
                        <!-- Site Info Widget -->
                        <div class="widget site-info-widget mb-50">
                            <div class="footer-logo mb-50">
                                <img src="{{ asset('storage/' . $footer->logo) }}" alt="Logo">
                            </div>
                            <p>
                                Wir freuen uns auf Sie. <br> <br>
                                Monika & Harry Habersatter <br>
                                Besuchen Sie auch unser neues Restaurant im Zentrum von Filzmoos. <br><br>
                                <a href="https://www.meinlieblingsplatz.at/">www.meinlieblingsplatz.at </i></a>

                            </p>
                            <div class="social-links mt-40">
                                <a href="{{ $footer->link_facebook }}"><i class="fab fa-facebook-f"></i></a>
                                <a href="{{ $footer->link_instagram }}"><i class="fab fa-twitter"></i></a>
                                <a href="#"><i class="fab fa-behance"></i></a>
                                <a href="#"><i class="fab fa-linkedin"></i></a>
                                <a href="#"><i class="fab fa-youtube"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 order-3 order-lg-2">
                        <!-- Nav Widget -->
                        <div class="widget nav-widget" style="overflow: hidden">
                            <div>
                                <h4 class="widget-title">Appartements.</h4>
                                <ul>
                                    <li><a href="#">Appartement 1</a></li>
                                    <li><a href="#">Appartement 2</a></li>
                                    <li><a href="#">Appartement 3 </a></li>
                                    <li><a href="#">Appartement 4 </a></li>

                                </ul>
                            </div>
                        </div>
                        <div class="widget nav-widget mb-50">
                            <div>
                                <h4 class="widget-title">links</h4>
                                <ul>
                                    <li><a href="#">Datenschutz</a></li>
                                    <li><a href="#">Impressum</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 order-2 order-lg-3">
                        <!-- Contact Widget -->
                        <div class="widget contact-widget mb-50">
                            <h4 class="widget-title">Kontaktieren Sie uns!</h4>
                            <div class="contact-lists">
                                <div class="contact-box">
                                    <div class="icon">
                                        <i class="flaticon-call"></i>
                                    </div>
                                    <div class="desc">
                                        <h6 class="title">Telefon Nummer</h6>
                                        <a href="{{ $footer->phone }}">{{ $footer->phone }}</a>
                                    </div>
                                </div>
                                <div class="contact-box">
                                    <div class="icon">
                                        <i class="flaticon-message"></i>
                                    </div>
                                    <div class="desc">
                                        <h6 class="title">E-Mail Adresse</h6>
                                        <a href="{{ $footer->email }}">{{ $footer->email }}</a>
                                    </div>
                                </div>
                                <div class="contact-box">
                                    <div class="icon">
                                        <i class="flaticon-location-pin"></i>
                                    </div>
                                    <div class="desc">
                                        <h6 class="title">Landhaus Bergzeit</h6>
                                        {{ $footer->address1 }}
                                        <br>
                                        {{ $footer->address2 }}

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="copyright-area pt-30 pb-30">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6 col-md-5 order-2 order-md-1">
                        <p class="copyright-text copyright-two">Copyright By@<a href="#">Example</a> -
                            {{ date('Y') }}</p>
                    </div>
                    <div class="col-lg-6 col-md-7 order-1 order-md-2">
                        <div class="footer-menu text-center text-md-right">
                            <ul>
                                <li><a href="#">Terms of use</a></li>
                                <li><a href="#">Privacy Environmental Policy</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
@empty
    <footer class="footer-two">
        <div class="footer-widget-area pt-100 pb-50">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-sm-6 order-1">
                        <!-- Site Info Widget -->
                        <div class="widget site-info-widget mb-50">
                            <div class="footer-logo mb-50">
                                <img src="{{ asset('WebsiteHotel/assets/img/logo.jpg') }}" alt="Logo">
                            </div>
                            <p>
                                Wir freuen uns auf Sie. <br> <br>
                                Monika & Harry Habersatter <br>
                                Besuchen Sie auch unser neues Restaurant im Zentrum von Filzmoos. <br><br>
                                <a href="https://www.meinlieblingsplatz.at/">www.meinlieblingsplatz.at </i></a>

                            </p>
                            <div class="social-links mt-40">
                                <a href="#"><i class="fab fa-facebook-f"></i></a>
                                <a href="#"><i class="fab fa-twitter"></i></a>
                                <a href="#"><i class="fab fa-behance"></i></a>
                                <a href="#"><i class="fab fa-linkedin"></i></a>
                                <a href="#"><i class="fab fa-youtube"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 order-3 order-lg-2">
                        <!-- Nav Widget -->
                        <div class="widget nav-widget" style="overflow: hidden">
                            <div>
                                <h4 class="widget-title">Appartements.</h4>
                                <ul>
                                    <li><a href="#">Appartement 1</a></li>
                                    <li><a href="#">Appartement 2</a></li>
                                    <li><a href="#">Appartement 3 </a></li>
                                    <li><a href="#">Appartement 4 </a></li>

                                </ul>
                            </div>
                        </div>
                        <div class="widget nav-widget mb-50">
                            <div>
                                <h4 class="widget-title">links</h4>
                                <ul>
                                    <li><a href="#">Datenschutz</a></li>
                                    <li><a href="#">Impressum</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 order-2 order-lg-3">
                        <!-- Contact Widget -->
                        <div class="widget contact-widget mb-50">
                            <h4 class="widget-title">Kontaktieren Sie uns!</h4>
                            <div class="contact-lists">
                                <div class="contact-box">
                                    <div class="icon">
                                        <i class="flaticon-call"></i>
                                    </div>
                                    <div class="desc">
                                        <h6 class="title">Telefon Nummer</h6>
                                        <a href="tel:+436645146460">+43 (0) 664 5146460</a>
                                    </div>
                                </div>
                                <div class="contact-box">
                                    <div class="icon">
                                        <i class="flaticon-message"></i>
                                    </div>
                                    <div class="desc">
                                        <h6 class="title">E-Mail Adresse</h6>
                                        <a href="mailto:info@landhaus-bergzeit.at">info@landhaus-bergzeit.at</a>
                                    </div>
                                </div>
                                <div class="contact-box">
                                    <div class="icon">
                                        <i class="flaticon-location-pin"></i>
                                    </div>
                                    <div class="desc">
                                        <h6 class="title">Landhaus Bergzeit</h6>
                                        Wiesenegg 3, 5532 Filzmoos
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="copyright-area pt-30 pb-30">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6 col-md-5 order-2 order-md-1">
                        <p class="copyright-text copyright-two">Copyright By@<a href="#">Example</a> - {{ date('Y') }}</p>
                    </div>
                    <div class="col-lg-6 col-md-7 order-1 order-md-2">
                        <div class="footer-menu text-center text-md-right">
                            <ul>
                                <li><a href="#">Terms of use</a></li>
                                <li><a href="#">Privacy Environmental Policy</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
@endforelse

<!--====== FOOTER END ======-->
