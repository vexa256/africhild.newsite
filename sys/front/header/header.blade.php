<!DOCTYPE html>
<html lang="en">
<!-- Mirrored from bracketweb.com/careox-html/index-2.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 17 Jul 2024 09:30:59 GMT -->

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>
        @isset($Desc)
            {{ $Desc }}
        @else
            AfriChild Centre: Leading Child Development & Advocacy in Africa
        @endisset
    </title>

    <meta name="description"
        content="Explore AfriChild Centre, a premier institution dedicated to improving child well-being across Africa through research, advocacy, and education. Discover our initiatives, research findings, and how you can get involved.">
    <meta name="keywords"
        content="AfriChild Centre, Child Development Africa, Child Advocacy, African Child Research, Child Well-being, Child Education, Child Protection, AfriChild Projects">
    <meta name="author" content="AfriChild Centre">
    <meta name="robots" content="index, follow">
    <meta name="theme-color" content="#ffffff">

    <!-- Open Graph / Facebook -->
    <meta property="og:title" content="AfriChild Centre: Leading Child Development & Advocacy in Africa">
    <meta property="og:description"
        content="Discover AfriChild Centre's impactful work in improving child well-being across Africa. Join us in our mission to foster a brighter future for every child.">
    <meta property="og:image"
        content="https://hub.africhild.cloud/uploads/images/system/2023-11/D5DoQ4isOzQfL0RJ-africhild-centre-logo-smaller.png">
    <meta property="og:url" content="https://africhild.org">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="AfriChild Centre">

    <!-- Twitter -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="AfriChild Centre: Leading Child Development & Advocacy in Africa">
    <meta name="twitter:description"
        content="Join AfriChild Centre in advocating for child well-being and development across Africa. Explore our projects and research.">
    <meta name="twitter:image"
        content="https://hub.africhild.cloud/uploads/images/system/2023-11/D5DoQ4isOzQfL0RJ-africhild-centre-logo-smaller.png">
    <meta name="twitter:site" content="@AfriChildCentre">

    <!-- Favicons -->
    <link rel="apple-touch-icon" sizes="180x180"
        href="https://hub.africhild.cloud/uploads/images/system/2023-11/D5DoQ4isOzQfL0RJ-africhild-centre-logo-smaller.png">
    <link rel="icon" type="image/png" sizes="32x32"
        href="https://hub.africhild.cloud/uploads/images/system/2023-11/D5DoQ4isOzQfL0RJ-africhild-centre-logo-smaller.png">
    <link rel="icon" type="image/png" sizes="16x16"
        href="https://hub.africhild.cloud/uploads/images/system/2023-11/D5DoQ4isOzQfL0RJ-africhild-centre-logo-smaller.png">
    <link rel="manifest" href="{{ asset('assets/images/favicons/site.webmanifest') }}">

    <!-- JSON-LD Structured Data -->
    <script type="application/ld+json">
    {
      "@context": "http://schema.org",
      "@type": "Organization",
      "name": "AfriChild Centre",
      "url": "https://africhild.org",
      "logo": "https://hub.africhild.cloud/uploads/images/system/2023-11/D5DoQ4isOzQfL0RJ-africhild-centre-logo-smaller.png",
      "sameAs": [
        "https://www.facebook.com/AfriChildCentre",
        "https://twitter.com/AfriChildCentre",
        "https://www.linkedin.com/company/africhild-centre"
      ],
      "contactPoint": {
        "@type": "ContactPoint",
        "telephone": "+256-123-456-789",
        "contactType": "Customer Service"
      },
      "description": "AfriChild Centre is dedicated to improving child well-being across Africa through research, advocacy, and education. We strive to foster a brighter future for every child."
    }
    </script>
    <!-- fonts -->
    <link rel="preconnect" href="{{ asset('https://fonts.googleapis.com/') }}" />
    <link rel="preconnect" href="{{ asset('https://fonts.gstatic.com/') }}" crossorigin />
    <link
        href="{{ asset('https://fonts.googleapis.com/css2?family=Caveat:wght@400..700&amp;family=Nunito+Sans:ital,opsz,wght@0,6..12,200..1000;1,6..12,200..1000&amp;family=Rubik:ital,wght@0,300..900;1,300..900&amp;display=swap') }}"
        rel="stylesheet" />

    <link rel="stylesheet" href="{{ asset('assets/vendors/bootstrap/css/bootstrap.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendors/bootstrap-select/bootstrap-select.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendors/animate/animate.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendors/fontawesome/css/all.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendors/icofont/icofont.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendors/jquery-ui/jquery-ui.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendors/jarallax/jarallax.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendors/jquery-magnific-popup/jquery.magnific-popup.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendors/nouislider/nouislider.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendors/nouislider/nouislider.pips.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendors/tiny-slider/tiny-slider.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendors/careox-icons/style.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendors/slick/slick.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendors/owl-carousel/css/owl.carousel.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendors/owl-carousel/css/owl.theme.default.min.css') }}" />

    <!-- template styles -->
    <link rel="stylesheet" href="{{ asset('assets/css/careox.css') }}" />

    <style>
        .main-header__nav a {
            text-decoration: none !important;
        }

        a {
            text-decoration: none !important;
        }

        footer {
            font-weight: 700 !important;
            /* Ensures all text is bold */
            color: white !important;
            /* Sets text color to white */
            text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.8) !important;
            /* Adds a slight shadow for better readability */
            transition: color 0.3s ease, text-shadow 0.3s ease !important;
            /* Smooth transition for hover effects */
        }

        footer a {
            color: white !important;
            /* Ensure links are also white */
            text-decoration: none !important;
            /* Remove underline from links */
            font-weight: inherit !important;
            /* Inherit font weight from parent */
        }

        footer a:hover {
            color: #ffa415 !important;
            /* Change link color on hover for better UX */
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.9) !important;
            /* Enhance shadow effect on hover */
        }

        footer h1,
        footer h2,
        footer h3,
        footer h4,
        footer h5,
        footer h6,
        footer p,
        footer li,
        footer span,
        footer div {
            font-weight: 700;
            font-weight: 700 !important;
            /* Ensures all text is bold */
            color: white !important;
            /* Sets text color to white */
            text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.8) !important;
            /* Adds a slight shadow for better readability */
            transition: color 0.3s ease, text-shadow 0.3s ease !important;
            /* Ensures all headings, paragraphs, list items, spans, and divs are bold */
        }

        .image-container {
            height: 300px;
            overflow: hidden;
        }

        .image-container img {
            height: 100%;
            width: auto;
            object-fit: cover;
        }

        /* Ensure that TinyMCE content is properly styled */
        .tinymce-content {
            padding: 20px;
            background: #fff;
            border: 1px solid #ddd;
            border-radius: 4px;
            margin-top: 20px;
        }

        /* Style for blog post content */
        .blog-details__content {
            font-family: Arial, sans-serif;
            line-height: 1.6;
        }

        /* Social Share Button Styles */
        .blog-details__share a {
            margin-right: 10px;
            color: #333;
            text-decoration: none;
        }

        .blog-details__share a:hover {
            text-decoration: underline;
        }


        .gallery-one__card__hover {
            position: relative;
        }

        .gallery-one__card__caption {
            position: absolute;
            bottom: 0;
            background: rgba(0, 0, 0, 0.7);
            color: white;
            width: 100%;
            text-align: center;
            padding: 10px;
            box-sizing: border-box;
        }

        html {
            scroll-behavior: smooth;
        }

        /* Custom scrollbar styles */
        ::-webkit-scrollbar {
            width: 12px;
            /* Width of the scrollbar */
        }

        ::-webkit-scrollbar-track {
            background: #f0f0f0;
            /* Background of the scrollbar track (rail) */
            border-radius: 10px;
            /* Rounded corners for the track */
        }

        ::-webkit-scrollbar-thumb {
            background-color: #f5429b;
            /* Scrollbar color */
            border-radius: 10px;
            /* Rounded corners for the scrollbar thumb */
            border: 3px solid #f0f0f0;
            /* Padding around the thumb for better contrast */
        }

        ::-webkit-scrollbar-thumb:hover {
            background-color: #e03184;
            /* Scrollbar color on hover */
        }

        /* For Firefox */
        html {
            scrollbar-width: thin;
            scrollbar-color: #f5429b #f0f0f0;
        }

        /* .main-slider-two__overlay, */
        .main-slider-two__content {
            background-color: rgba(0, 0, 0, 0.6) !important;
            padding: 15px !important;
            /* padding-right: 10px !important; */
            border-radius: 50px !important;

        }
    </style>

    @isset($tiny)
        <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    @endisset
</head>
