 <!-- main header -->
 <header class="main-header header-style-one">
     <!-- logo-box -->
     <div class="logo-box">
         <div class="shape"
             style="
                background-image: url(assets/images/shape/shape-1.png);
            "></div>
         <figure class="logo">
             <a href="#"><img
                     src="https://media.tghn.org/medialibrary/2023/12/AfriChild_Centre_Logo-removebg-preview.png"
                     alt="" /></a>
         </figure>
     </div>
     <!-- header-top -->
     <div class="header-top">
         {{-- <div class="outer-container">
             <div class="top-inner clearfix">
                 <div class="left-column pull-left">
                     <ul class="info-list clearfix">
                         <li>
                             <i class="icon-chat"></i>
                             <span>Helpline:</span>
                             <a href="tel:23345678901">+233 456 789 01</a>
                         </li>
                         <li>
                             <a href="mailto:example@info.com">example@info.com</a>
                         </li>
                         <li>54 Berrick St Boston MA 02115.</li>
                     </ul>
                 </div>
                 <div class="right-column pull-right">
                     <div class="update-news">
                         <p>
                             <i class="icon-megaphone"></i><span>Updates:</span> Delivers Personal
                             Protective Equipments to North Macedonia
                             . . .
                         </p>
                     </div>
                     <div class="language-box">
                         <span>En</span>
                         <ul class="language-list clearfix">
                             <li>
                                 <a href="index.html">English</a>
                             </li>
                             <li>
                                 <a href="index.html">Spanish</a>
                             </li>
                             <li><a href="index.html">Chines</a></li>
                             <li><a href="index.html">Turky</a></li>
                         </ul>
                     </div>
                 </div>
             </div>
         </div>
         <!-- donate-btn -->
         <div class="donate-btn">
             <button class="donate-box-btn theme-btn btn-one">
                 Donate Now
             </button>
         </div> --}}
     </div>
     <!-- header-lower -->
     <div class="header-lower">
         <div class="outer-container">
             <div class="outer-box">
                 <div class="text">
                     <figure class="icon-box">
                         <img src="assets/images/icons/heart-1.png" alt="" />
                     </figure>
                     <span>Become a Volunteer</span>
                 </div>
                 <div class="menu-area clearfix">
                     <!--Mobile Navigation Toggler-->
                     <div class="mobile-nav-toggler">
                         <i class="icon-bar"></i>
                         <i class="icon-bar"></i>
                         <i class="icon-bar"></i>
                     </div>
                     <nav class="main-menu navbar-expand-md navbar-light">
                         <div class="collapse navbar-collapse show clearfix" id="navbarSupportedContent">
                             <ul class="navigation clearfix">
                                 <li class="current dropdown">
                                     <a href="/">Home</a>

                                 </li>
                                 <li class="dropdown">
                                     <a href="#">About</a>
                                     <ul>
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
                                 </li>
                                 <li class="dropdown">
                                     <a href="{{ route('AfriChildGallery') }}">Gallery</a>

                                 </li>
                                 <li class="dropdown">
                                     <a href="#">Resources</a>
                                     <ul>
                                         <li>
                                             <a target="_blank" href="https://blog.africhild.cloud/">Research</a>
                                         </li>

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
                                     </ul>
                                 </li>
                                 <li class="dropdown">
                                     <a href="#">Staff Area</a>
                                     <ul>
                                         <li>
                                             <a href="http://africhild.cloud">HRM</a>
                                         </li>
                                         <li>
                                             <a href="https://africhild.or.ug/CmsHome">Web Admin</a>
                                         </li>
                                         <li>
                                             <a href="https://docs.africhild.cloud">AfriChild Cloud</a>
                                         </li>

                                         <li>
                                             <a href="#">AfriChild Analytics</a>
                                         </li>

                                         <li>
                                             <a href="#">AfriChild Projects</a>
                                         </li>
                                     </ul>
                                 </li>
                                 <li class="dropdown">
                                     <a href="https://hub.africhild.cloud/">Knowledge Hub</a>

                                 </li>
                                 <li>
                                     <a href="{{ route('AfriChildContactUs') }}">Contact</a>
                                 </li>
                             </ul>
                         </div>
                     </nav>
                 </div>
                 <div class="nav-right-content clearfix">
                     <ul class="social-style-one clearfix">
                         <li>
                             <a href="https://www.facebook.com/AfriChildCentreUg/"><i class="fab fa-facebook-f"></i></a>
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

                     {{-- <div class="nav-btn nav-toggler navSidebar-button clearfix">
                         <i class="icon-menu"></i>
                     </div> --}}
                 </div>
             </div>
         </div>
     </div>

     <!--sticky Header-->
     <div class="sticky-header">
         <div class="auto-container">
             <div class="outer-box">
                 <div class="menu-area clearfix">
                     <nav class="main-menu clearfix">
                         <!--Keep This Empty / Menu will come through Javascript-->
                     </nav>
                 </div>
                 <div class="nav-right-content clearfix">
                     <ul class="social-style-one clearfix">
                         <li>
                             <a href="https://www.facebook.com/AfriChildCentreUg/"><i class="fab fa-facebook-f"></i></a>
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
             </div>
         </div>
     </div>
 </header>
 <!-- main-header end -->
