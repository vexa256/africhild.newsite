<header class="main-header main-header--two sticky-header sticky-header--normal">
    <div class="container-fluid">
        <div class="main-header__inner">
            <div class="main-header__logo">
                <a href="{{ url('/') }}">
                    <img src="https://hub.africhild.cloud/uploads/images/system/2023-11/D5DoQ4isOzQfL0RJ-africhild-centre-logo-smaller.png"
                        alt="Careox HTML" width="223" />
                </a>
            </div>
            <!-- /.main-header__logo -->

            <nav class="main-header__nav main-menu main-header__nav">
                <ul class="main-menu__list">
                    <li>
                        <a style="font-size:13px" href="{{ url('/') }}">Home</a>
                    </li>
                    <li class="dropdown">
                        <a style="font-size:13px; text-decoration: none !important;" href="#ddd">About</a>
                        <ul>
                            <li><a style="font-size:13px" href="{{ route('AfriChildOurWork') }}">Our Work</a></li>
                            <li><a style="font-size:13px" href="{{ route('AfriChildDirectors') }}">Board of
                                    Directors</a></li>
                            <li><a style="font-size:13px" href="{{ route('AfriChildTeam') }}">The Secretariat</a></li>
                            {{-- <li><a style="font-size:13px" href="{{ url('/') }}">Core Programs</a></li> --}}
                            <li><a style="font-size:13px" href="{{ route('AfriChildFounders') }}">Founding Partners</a>
                            </li>
                            <li><a style="font-size:13px" href="{{ route('AfriChildPartners') }}">Promoting Partners</a>
                            </li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a style="font-size:13px" href="{{ route('AfriChildGallery') }}">Gallery</a>
                    </li>
                    <li class="dropdown">
                        <a style="font-size:13px">Resources</a>
                        <ul class="sidebar__categories list-unstyled">
                            <li><a style="font-size:13px" href="{{ url('AfriChildBlog') }}">Blog</a></li>
                            <li><a style="font-size:13px" href="https://hub.africhild.cloud/"
                                    target="_blank">Research</a></li>
                            <li><a style="font-size:13px" href="https://hub.africhild.cloud/" target="_blank">Policy
                                    Briefs</a></li>
                            <li><a style="font-size:13px" href="https://hub.africhild.cloud/"
                                    target="_blank">Reports</a></li>
                            <li><a style="font-size:13px" href="https://forum.africhild.cloud/"
                                    target="_blank">AfriChild Forum</a></li>
                        </ul>

                    </li>
                    <li>
                        <a style="font-size:13px" href="{{ url('/AfriChildBlog') }}">Blog</a>
                    </li>
                    <li class="dropdown">
                        <a style="font-size:13px">Staff Area</a>
                        <ul>
                            <li><a style="font-size:13px" href="https://hrm.africhild.cloud">HRM</a></li>
                            <li><a style="font-size:13px" href="{{ url('/admin') }}">Web Admin</a></li>
                            <li><a style="font-size:13px" href="https://docs.africhild.cloud"> Cloud
                                    Platform</a>
                            </li>
                            <li><a style="font-size:13px" href="https://africhild.cloud">AfriChild MIS</a></li>
                            <li><a style="font-size:13px" href="https://africhild.cloud">AfriChild Analytics</a></li>
                            <li><a style="font-size:13px" href="https://dcos.africhild.cloud">Activity Calendar</a></li>
                            <li><a style="font-size:13px" href="https://africhild.cloud">AfriChild Projects</a></li>
                        </ul>
                    </li>

                    <li>
                        <a style="font-size:13px" href="#contactus">Contact</a>
                    </li>
                </ul>
            </nav>

            <!-- /.main-header__nav -->
            <div class="main-header__right">
                <div class="mobile-nav__btn mobile-nav__toggler">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
                <!-- /.mobile-nav__toggler -->

                <a style="hover:none; background-color:#03c0a8; color
                :white"
                    href="https://hub.africhild.cloud/" target="_blank" class="careox-btn">
                    <span><i class="icofont-heart"></i>Knowlegde Hub</span></a>
            </div>
            <!-- /.main-header__right -->
        </div>
        <!-- /.main-header__inner -->
    </div>
    <!-- /.container-fluid -->
</header>
