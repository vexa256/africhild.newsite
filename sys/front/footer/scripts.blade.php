<div class="mobile-nav__wrapper">
    <div class="mobile-nav__overlay mobile-nav__toggler"></div>
    <!-- /.mobile-nav__overlay -->
    <div class="mobile-nav__content">
        <span class="mobile-nav__close mobile-nav__toggler"><i class="fa fa-times"></i></span>

        <div class="logo-box">
            <a href="{{ url('/') }}" aria-label="logo image"><img
                    src="https://hub.africhild.cloud/uploads/images/system/2023-11/D5DoQ4isOzQfL0RJ-africhild-centre-logo-smaller.png"
                    width="155" alt="" /></a>
        </div>
        <!-- /.logo-box -->
        <div class="mobile-nav__container"></div>
        <!-- /.mobile-nav__container -->

        <ul class="mobile-nav__contact list-unstyled">
            <li>
                <i class="fa fa-envelope"></i>
                <a href="mailto:info@africhild.or.ug">info@africhild.or.ug</a>
            </li>
            <li>
                <i class="fa fa-phone-alt"></i>
                <a href="tel:+256414532482">+256414532482</a>
            </li>
        </ul>
        <!-- /.mobile-nav__contact -->
        <div class="mobile-nav__social">
            <a href="https://facebook.com/AfriChildCentre" style="--accent-color: #ffa415">
                <i class="fab fa-facebook-f" aria-hidden="true"></i>
                <span class="sr-only">Facebook</span>
            </a>
            <a href="https://twitter.com/AfriChildCentre" style="--accent-color: #fc5528">
                <i class="fab fa-twitter" aria-hidden="true"></i>
                <span class="sr-only">Twitter</span>
            </a>
            <a href="https://pinterest.com/AfriChildCentre" style="--accent-color: #8139e7">
                <i class="fab fa-pinterest-p" aria-hidden="true"></i>
                <span class="sr-only">Pinterest</span>
            </a>
            <a href="https://instagram.com/AfriChildCentre" style="--accent-color: #44c895">
                <i class="fab fa-instagram" aria-hidden="true"></i>
                <span class="sr-only">Instagram</span>
            </a>
        </div>
        <!-- /.mobile-nav__social -->
    </div>

    <!-- /.mobile-nav__content -->
</div>
<!-- /.mobile-nav__wrapper -->
<div class="search-popup">
    <div class="search-popup__overlay search-toggler"></div>
    <!-- /.search-popup__overlay -->
    <div class="search-popup__content">
        <form role="search" method="get" class="search-popup__form" action="#">
            <input type="text" id="search" placeholder="Search Here..." />
            <button type="submit" aria-label="search submit" class="careox-btn">
                <span><i class="icon-magnifying-glass"></i></span>
            </button>
        </form>
    </div>
    <!-- /.search-popup__content -->
</div>
<!-- /.search-popup -->
<!-- Sidebar One Start -->
<aside class="sidebar-one">
    <div class="sidebar-one__overlay"></div>
    <!-- /.siderbar-ovarlay -->
    <div class="sidebar-one__content">
        <div class="sidebar-one__close">
            <i class="icofont-close-line"></i>
        </div>
        <!-- /.siderbar-close -->
        <div class="sidebar-one__logo">
            <a href="index.html" aria-label="logo image"><img src="{{ asset('assets/images/logo-light.png') }}"
                    alt="Careox HTML" width="223" /></a>
        </div>
        <!-- /.sidebar-one__logo-box -->
        <p class="sidebar-one__text">
            Mauris ut enim sit amet lacus ornare ullamcor. Praesent
            placerat nequ puru rhoncu tincidunt odio ultrices. Sed
            feugiat feugiat felis.
        </p>
        <h4 class="sidebar-one__title">Contact Info:</h4>
        <ul class="sidebar-one__info">
            <li>
                <span class="fas fa-map-marker-alt"></span>
                Plot 196 Kigobe Road - Ntinda, Kampala, Uganda
            </li>
            <li>
                <span class="fas fa-envelope"></span>
                <a href="mailto:info@africhild.or.ug">info@africhild.or.ug</a>
            </li>
            <li>
                <span class="fas fa-phone-alt"></span>
                <a href="tel:+256414532482">+256414532482</a>
            </li>
        </ul>
        <div class="sidebar-one__social">
            <a href="https://facebook.com/AfriChildCentre" style="--accent-color: #ffa415">
                <i class="fab fa-facebook-f" aria-hidden="true"></i>
                <span class="sr-only">Facebook</span>
            </a>
            <a href="https://twitter.com/AfriChildCentre" style="--accent-color: #fc5528">
                <i class="fab fa-twitter" aria-hidden="true"></i>
                <span class="sr-only">Twitter</span>
            </a>
            <a href="https://pinterest.com/AfriChildCentre" style="--accent-color: #8139e7">
                <i class="fab fa-pinterest-p" aria-hidden="true"></i>
                <span class="sr-only">Pinterest</span>
            </a>
            <a href="https://instagram.com/AfriChildCentre" style="--accent-color: #44c895">
                <i class="fab fa-instagram" aria-hidden="true"></i>
                <span class="sr-only">Instagram</span>
            </a>
        </div>
        <!-- /sidebar-one__social -->
        <h4 class="sidebar-one__title">Newsletter:</h4>
        <form action="#" data-url="MAILCHIMP_FORM_URL" class="sidebar-one__newsletter mc-form">
            <input type="text" name="EMAIL" placeholder="Email address" />
            <button type="submit" class="fas fa-paper-plane">
                <span class="sr-only">submit</span><!-- /.sr-only -->
            </button>
        </form>
        <!-- /.footer-widget__newsletter mc-form -->
    </div>
    <!-- /.sidebar__content -->
</aside>

<!-- Sidebar One Start -->

<a href="{{ url('/') }}" data-target="html" class="scroll-to-target scroll-to-top">
    <span class="scroll-to-top__text">back top</span>
    <span class="scroll-to-top__wrapper"><span class="scroll-to-top__inner"></span></span>
</a>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

<script src="{{ asset('assets/vendors/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('assets/vendors/bootstrap-select/bootstrap-select.min.js') }}"></script>
<script src="{{ asset('assets/vendors/jarallax/jarallax.min.js') }}"></script>
<script src="{{ asset('assets/vendors/jquery-ui/jquery-ui.js') }}"></script>
<script src="{{ asset('assets/vendors/jquery-ajaxchimp/jquery.ajaxchimp.min.js') }}"></script>
<script src="{{ asset('assets/vendors/jquery-appear/jquery.appear.min.js') }}"></script>
<script src="{{ asset('assets/vendors/jquery-circle-progress/jquery.circle-progress.min.js') }}"></script>
<script src="{{ asset('assets/vendors/jquery-magnific-popup/jquery.magnific-popup.min.js') }}"></script>
<script src="{{ asset('assets/vendors/jquery-validate/jquery.validate.min.js') }}"></script>
<script src="{{ asset('assets/vendors/nouislider/nouislider.min.js') }}"></script>
<script src="{{ asset('assets/vendors/tiny-slider/tiny-slider.js') }}"></script>
<script src="{{ asset('assets/vendors/wnumb/wNumb.min.js') }}"></script>
<script src="{{ asset('assets/vendors/owl-carousel/js/owl.carousel.min.js') }}"></script>
<script src="{{ asset('assets/vendors/wow/wow.js') }}"></script>
<script src="{{ asset('assets/vendors/imagesloaded/imagesloaded.min.js') }}"></script>
<script src="{{ asset('assets/vendors/isotope/isotope.js') }}"></script>
<script src="{{ asset('assets/vendors/slick/slick.min.js') }}"></script>
<script src="{{ asset('assets/vendors/countdown/countdown.min.js') }}"></script>
<script src="{{ asset('assets/vendors/jquery-circleType/jquery.circleType.js') }}"></script>
<script src="{{ asset('assets/vendors/jquery-lettering/jquery.lettering.min.js') }}"></script>
<!-- gsap js -->
<script src="{{ asset('assets/vendors/gsap/gsap.js') }}"></script>
<script src="{{ asset('assets/vendors/gsap/scrolltrigger.min.js') }}"></script>
<script src="{{ asset('assets/vendors/gsap/splittext.min.js') }}"></script>
<script src="{{ asset('assets/vendors/gsap/careox-split.js') }}"></script>
<!-- template js -->
<script src="{{ asset('assets/js/careox.js') }}"></script>

@isset($tiny)
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
@endisset

</body>

<!-- Mirrored from bracketweb.com/careox-html/index-2.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 17 Jul 2024 09:33:32 GMT -->

</html>
