    <!-- subscribe-section -->
    <section class="subscribe-section">
        <div class="bg-layer"></div>
        <div class="auto-container">
            <div class="inner-box clearfix">
                <div class="left-column pull-left">
                    <div class="logo-box">
                        <div class="shape" style="background-image: url(assets/images/shape/shape-1.png);"></div>
                        <figure class="logo"><a href="index.html"><img src="assets/images/logo-3.png"
                                    alt=""></a></figure>
                    </div>
                    <div class="text">
                        <h3><i class="icon-email-open-sketched-envelope"></i>Subscribe <br />Our Newsletter</h3>
                    </div>
                </div>
                <div class="right-column pull-right clearfix">
                    <div class="form-inner">
                        <form action="{{ route('AfriChildContactUs') }}" method="get" class="subscribe-form">
                            <div class="form-group">
                                <input type="email" name="email" placeholder="Your Email Address..." required="">
                                <button type="submit">Subscribe Us</button>
                            </div>
                        </form>
                    </div>
                    <ul class="social-style-one clearfix">
                        <li>
                            <a href="https://www.facebook.com/AfriChildCentreUg/"><i class="fab fa-facebook-f"></i></a>
                        </li>
                        <li>
                            <a href="https://twitter.com/AfriChildCentre"><i class="fab fa-twitter"></i></a>
                        </li>

                        <li>
                            <a href="https://www.youtube.com/channel/UCbwiIZxQ2DrKkUuYYDUZkSA"><i
                                    class="fab fa-youtube"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!-- subscribe-section end -->


    <!-- main-footer -->
    <section class="main-footer">
        <div class="footer-top">
            <div class="auto-container">
                <div class="row clearfix">
                    <div class="col-lg-3 col-md-6 col-sm-12 footer-column">
                        <div class="footer-widget about-widget">
                            <div class="title-box">
                                <div class="icon-box"><i class="icon-hand"></i></div>
                                <span>Dedicated to Child Wellbeing</span>
                                <h3>About AfriChild</h3>
                            </div>
                            <div class="text">
                                <p>The AfriChild Center enhances children's lives in Africa through research,
                                    evidence-based policies, and innovative practices. </p>
                                <a href="{{ route('AfriChildOurWork') }}" class="theme-btn btn-one">Learn More</a>
                            </div>
                        </div>

                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12 footer-column">
                        <div class="footer-widget links-widget ml-30">
                            <div class="widget-title">
                                <h3>AfriChild Resources</h3>
                            </div>
                            <div class="widget-content">
                                <ul class="links-list clearfix">

                                    <li>
                                        <a target="_blank" href="https://hub.africhild.cloud/">Research</a>
                                    </li>
                                    <li>
                                        <a target="_blank" href="https://hub.africhild.cloud/">Ploicy Briefs</a>
                                    </li>
                                    <li>
                                        <a target="_blank" href="https://hub.africhild.cloud/">Reports</a>
                                    </li>
                                    <li>
                                        <a target="_blank" href="https://forum.africhild.cloud/">AfriChild
                                            Forum</a>
                                    </li>

                                    <li>
                                        <a target="_blank" href="https://blog.africhild.cloud/">AfriChild
                                            Blog</a>
                                    </li>

                                    <li>
                                        <a target="_blank" href="https://blog.africhild.cloud/">AfriChild
                                            Knowlegde Hub</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12 footer-column">
                        <div class="footer-widget links-widget ml-30">
                            <div class="widget-title">
                                <h3>About Us</h3>
                            </div>
                            <div class="widget-content">
                                <ul class="links-list clearfix">
                                    <li>
                                        <a href="{{ route('AfriChildOurWork') }}">Our Work</a>
                                    </li>

                                    <li>
                                        <a href="{{ route('AfriChildBoardOfDirectors') }}">Board of Directors</a>
                                    </li>

                                    <li>
                                        <a href="{{ route('AfriChildSecretariat') }}">The Secritariate</a>
                                    </li>


                                    <li>
                                        <a href="{{ asset('AfriChildCorePrograms') }}">Core Programs</a>
                                    </li>

                                    <li>
                                        <a href="{{ route('AfriChildFounders') }}">Founding Partners</a>
                                    </li>


                                    <li>
                                        <a href="{{ route('AfriChildPromotingPartners') }}">Promoting Partners</a>
                                    </li>

                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12 footer-column">
                        <div class="footer-widget contact-widget ml-30">
                            <div class="title-box">
                                <div class="icon-box"><i class="icon-donation-2"></i></div>
                                <span>AfriChild</span>
                                <h3> Enquiry</h3>
                            </div>
                            <div class="widget-content">
                                <div class="single-item">
                                    <h3><a href="tel:+256414532482">+256 414 532 482</a></h3>
                                    <p><a href="mailto:info@africhild.or.ug">info@africhild.or.ug</a></p>
                                </div>
                                <div class="single-item">
                                    <h5>Main Office</h5>
                                    <p>Plot 196 Kigobe Road - Ntinda, Kampala, Uganda.</p>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <div class="footer-bottom">
            <div class="auto-container">
                <div class="inner-box clearfix">
                    <div class="copyright pull-left">
                        <p>&copy; {{ date('Y') }} <a href="/">The AfriChild Center,</a> All Rights
                            Reserved.</p>
                    </div>
                    <ul class="footer-card pull-right clearfix">

                        <div class="nav-right-content clearfix">
                            <ul class="social-style-two clearfix">
                                <li>
                                    <a href="https://www.facebook.com/AfriChildCentreUg/"><i
                                            class="fab fa-facebook-f"></i></a>
                                </li>
                                <li>
                                    <a href="https://twitter.com/AfriChildCentre"><i class="fab fa-twitter"></i></a>
                                </li>
                                <li>
                                    <a href="https://ug.linkedin.com/company/africhild-centre"><i
                                            class="fab fa-linkedin-in"></i></a>
                                </li>
                                <li>
                                    <a href="https://www.youtube.com/channel/UCbwiIZxQ2DrKkUuYYDUZkSA"><i
                                            class="fab fa-youtube"></i></a>
                                </li>
                            </ul>

                        </div>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!-- main-footer end -->

    <!-- scroll to top -->
    <button class="scroll-top scroll-to-target" data-target="html">
        <i class="far fa-long-arrow-up"></i>
    </button>

    <script src="{{ asset('ui/assets/js/jquery.js') }}"></script>
    <script src="{{ asset('ui/assets/js/popper.min.js') }}"></script>
    <script src="{{ asset('ui/assets/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('ui/assets/js/owl.js') }}"></script>
    <script src="{{ asset('ui/assets/js/swiper.min.js') }}"></script>
    <script src="{{ asset('ui/assets/js/wow.js') }}"></script>
    <script src="{{ asset('ui/assets/js/validation.js') }}"></script>
    <script src="{{ asset('ui/assets/js/jquery.fancybox.js') }}"></script>
    <script src="{{ asset('ui/assets/js/appear.js') }}"></script>
    <script src="{{ asset('ui/assets/js/scrollbar.js') }}"></script>
    <script src="{{ asset('ui/assets/js/isotope.js') }}"></script>
    <script src="{{ asset('ui/assets/js/nav-tool.js') }}"></script>
    <script src="{{ asset('ui/assets/js/jquery.bootstrap-touchspin.js') }}"></script>
    <script src="{{ asset('ui/assets/js/countdown.js') }}"></script>
    <script src="{{ asset('ui/assets/js/plugins.js') }}"></script>
    <script src="{{ asset('ui/assets/js/text_animation.js') }}"></script>
    <script src="{{ asset('ui/assets/js/jquery.nice-select.min.js') }}"></script>

    <!-- main-js -->
    <script src="{{ asset('ui/assets/js/script.js') }}"></script>

    <!-- End of .page_wrapper -->
