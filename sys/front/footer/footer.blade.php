@include('front.hub.hub')
@include('front.footer.contact')


<footer class="main-footer background-black">
    <div class="main-footer__bg background-black"
        style="background: linear-gradient(rgba(0, 0, 0, 0.7), rgba(245, 66, 155, 2)), url('https://images.unsplash.com/photo-1548102249-acdce64fffbd?q=80&w=1632&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D'); background-size: cover;">
    </div>


    <!-- /.main-footer__bg -->
    <div class="container">
        <div class="main-footer__top">
            <div class="row">
                <div class="col-md-6 wow fadeInUp" data-wow-delay="00ms">
                    <div class="main-footer__top__left">
                        <div class="main-footer__top__left__icon">
                            <i class="icon-messages"></i>
                        </div>
                        <h5 class="main-footer__top__left__title">
                            Newsletter
                        </h5>
                        <p class="main-footer__top__left__text">
                            Subscribe to our newsletter for the latest updates.
                        </p>
                    </div>
                </div>
                <div class="col-md-6 wow fadeInUp" data-wow-delay="100ms">
                    <form action="#" data-url="MAILCHIMP_FORM_URL" class="main-footer__newsletter mc-form">
                        <input type="text" name="EMAIL" placeholder="Enter email address" />
                        <button type="submit" class="fas fa-paper-plane">
                            <span class="sr-only">submit</span><!-- /.sr-only -->
                        </button>
                    </form>
                    <!-- /.footer-widget__newsletter mc-form -->
                    <div class="mc-form__response"></div>
                    <!-- /.mc-form__response -->
                </div>
            </div>
        </div>
    </div>
    <!-- /.main-footer__top -->
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-xl-4 wow fadeInUp" data-wow-delay="100ms">
                <div class="footer-widget footer-widget--about">
                    <a href="index.html" class="footer-widget__logo">
                        <img src="https://hub.africhild.cloud/uploads/images/system/2023-11/D5DoQ4isOzQfL0RJ-africhild-centre-logo-smaller.png"
                            width="223" alt="AfriChild Logo" />
                    </a>
                    <p class="footer-widget__text">
                        AfriChild Centre improves child well-being across Africa through research, advocacy, and
                        education.
                    </p>
                    <div class="footer-widget__box">
                        <div class="footer-widget__box__icon">
                            <i class="icon-phone-call"></i>
                        </div>
                        <p class="footer-widget__box__text">
                            Hotline 24/7
                            <a href="tel:+256123456789">(+256) 123 456 789</a>
                        </p>
                    </div>
                </div>
                <!-- /.footer-widget -->
            </div>
            <!-- /.col-md-6 -->
            <div class="col-md-6 col-xl-2 wow fadeInUp" data-wow-delay="150ms">
                <div class="footer-widget footer-widget--links">
                    <h2 class="footer-widget__title">About</h2>
                    <!-- /.footer-widget__title -->
                    <ul class="list-unstyled footer-widget__links">
                        <li><a href="{{ route('AfriChildOurWork') }}">Our Work</a></li>
                        <li><a href="{{ route('AfriChildDirectors') }}">Board of Directors</a></li>
                        <li><a href="{{ route('AfriChildTeam') }}">The Secretariat</a></li>
                        <li><a href="{{ route('AfriChildFounders') }}">Founding Partners</a></li>
                        <li><a href="{{ route('AfriChildPartners') }}">Promoting Partners</a></li>
                    </ul>
                    <!-- /.list-unstyled footer-widget__links -->
                </div>
                <!-- /.footer-widget -->
            </div>
            <!-- /.col-md-6 -->

            <div class="col-md-6 col-xl-3 wow fadeInUp" data-wow-delay="200ms">
                <div class="footer-widget footer-widget--links-two">
                    <h2 class="footer-widget__title">Resources</h2>
                    <!-- /.footer-widget__title -->
                    <ul class="list-unstyled footer-widget__links">
                        <li><a href="{{ url('AfriChildBlog') }}">Blog</a></li>
                        <li><a href="https://hub.africhild.cloud/" target="_blank">Research</a></li>
                        <li><a href="https://hub.africhild.cloud/" target="_blank">Policy Briefs</a></li>
                        <li><a href="https://hub.africhild.cloud/" target="_blank">Reports</a></li>
                        <li><a href="https://forum.africhild.cloud/" target="_blank">AfriChild Forum</a></li>
                    </ul>
                    <!-- /.list-unstyled footer-widget__links -->
                </div>
                <!-- /.footer-widget -->
            </div>

            <!-- /.col-md-6 -->
            <div class="col-md-6 col-xl-3 wow fadeInUp" data-wow-delay="250ms">
                <div class="footer-widget footer-widget--contact">
                    <h2 class="footer-widget__title">Contact Info</h2>
                    <!-- /.footer-widget__title -->
                    <ul class="list-unstyled footer-widget__info">
                        <li style="--accent-color: #ffa415">
                            <span class="footer-widget__info__icon"><i class="icofont-clock-time"></i></span>
                            Open Hours: Mon - Fri: 8.00 am - 6.00 pm
                        </li>
                        <li style="--accent-color: #ff5528">
                            <span class="footer-widget__info__icon"><i class="icofont-location-pin"></i></span>
                            Plot 196 Kigobe Road - Ntinda, Kampala, Uganda
                        </li>
                        <li style="--accent-color: #8139e7">
                            <span class="footer-widget__info__icon"><i class="icofont-email"></i></span>
                            <a href="mailto:info@africhild.or.ug">info@africhild.or.ug</a>
                        </li>
                        <li style="--accent-color: #44c895">
                            <span class="footer-widget__info__icon"><i class="icofont-phone"></i></span>
                            <a href="tel:+256414532482">+256414532482</a>
                        </li>
                    </ul>
                    <!-- /.list-unstyled -->
                    <div class="footer-widget__social">
                        <a href="https://facebook.com/AfriChildCentre" style="--accent-color: #ffa415">
                            <i class="fab fa-facebook-f" aria-hidden="true"></i>
                            <span class="sr-only">Facebook</span>
                        </a>
                        <a href="https://twitter.com/AfriChildCentre" style="--accent-color: #fc5528">
                            <i class="fab fa-twitter" aria-hidden="true"></i>
                            <span class="sr-only">Twitter</span>
                        </a>

                        <a href="https://instagram.com/AfriChildCentre" style="--accent-color: #44c895">
                            <i class="fab fa-instagram" aria-hidden="true"></i>
                            <span class="sr-only">Instagram</span>
                        </a>
                    </div>
                    <!-- /.footer-widget__social -->
                </div>

                <!-- /.footer-widget -->
            </div>
            <!-- /.col-md-6 -->
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container -->
    <div class="main-footer__bottom wow fadeInUp" data-wow-delay="300ms">
        <div class="container">
            <div class="main-footer__bottom__inner">
                <p class="main-footer__copyright">
                    &copy; Copyright <span class="dynamic-year"></span> by AfriChild Centre.
                </p>
            </div>
            <!-- /.main-footer__inner -->
        </div>
        <!-- /.container -->
    </div>
    <!-- /.main-footer__bottom -->
</footer>
