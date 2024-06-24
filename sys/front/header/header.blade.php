<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">

    <title>
        @if (isset($Title))
            {{ $Title }} | {{ $Desc }}
        @else
            The AfriChild Center | Child Focused Research |
            We are a Centre of Excellence in the study of the African child
        @endif
    </title>

    <!-- Fav Icon -->
    <link rel="icon" href="https://media.tghn.org/medialibrary/2023/12/AfriChild_Centre_Logo-removebg-preview.png"
        type="image/png">


    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Caveat:wght@400;500;600;700&display=swap') }}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300;400;500;600;700&display=swap"
        rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css2?family=Nunito+Sans:ital,wght@0,300;0,400;0,600;0,700;0,800;0,900;1,300;1,400;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">

    <!-- Stylesheets -->
    <link href="{{ asset('ui/assets/css/font-awesome-all.css') }}" rel="stylesheet">
    <link href="{{ asset('ui/assets/css/flaticon.css') }}" rel="stylesheet">
    <link href="{{ asset('ui/assets/css/owl.css') }}" rel="stylesheet">
    <link href="{{ asset('ui/assets/css/swiper.min.css') }}" rel="stylesheet">
    <link href="{{ asset('ui/assets/css/bootstrap.css') }}" rel="stylesheet">
    <link href="{{ asset('ui/assets/css/jquery.fancybox.min.css') }}" rel="stylesheet">
    <link href="{{ asset('ui/assets/css/animate.css') }}" rel="stylesheet">
    <link href="{{ asset('ui/assets/css/jquery.bootstrap-touchspin.css') }}" rel="stylesheet">
    <link href="{{ asset('ui/assets/css/color.css') }}" rel="stylesheet">
    <link href="{{ asset('ui/assets/css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('ui/assets/css/responsive.css') }}" rel="stylesheet">

    <style>
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


        .constant-height-image {
            height: 50.5vh !important;
            /* Set the desired height */
            width: auto !important;
            /* Maintain the aspect ratio */
            object-fit: cover !important;
            /* Cover the container without distortion */
        }
    </style>
</head>
