@include('front.header.header')

<body class="custom-cursor">

    {{-- @include('front.loader.loader') --}}

    <div class="page-wrapper">

        @include('front.header.top')

        <section class="page-header mb-5">
            <div class="page-header__bg"></div>
            <!-- /.page-header__bg -->
            <div class="container">
                <h5 class="page-header__title bw-split-in-left" style="font-size : 38px">
                    Your search "{{ $query }}" did not yield any results
                </h5>

            </div>
            <!-- /.container -->
        </section>
        <!-- /.page-header -->


        @include('front.footer.footer')

    </div>

    @include('front.footer.scripts')

</body>
