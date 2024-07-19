@include('front.header.header')

<body class="custom-cursor">

    @include('front.loader.loader')

    <div class="page-wrapper">

        @include('front.header.top')
        @include('front.slider.slider')
        @include('front.slider.feature')
        @include('front.about.about')
        @include('front.faq.faq')
        @include('front.work.work')
        @include('front.blog.blog')


        @include('front.footer.footer')

    </div>

    @include('front.footer.scripts')

</body>
