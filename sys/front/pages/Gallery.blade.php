@include('front.header.header')

<body class="custom-cursor">

    {{-- @include('front.loader.loader') --}}

    <div class="page-wrapper">

        @include('front.header.top')


        <section class="page-header">
            <div class="page-header__bg"></div>
            <!-- /.page-header__bg -->
            <div class="container">
                <h2 class="page-header__title bw-split-in-left">
                    AfriChild Gallery
                </h2>
                <ul class="careox-breadcrumb list-unstyled">
                    <li><a href="index.html">Home</a></li>
                    <li><span>AfriChild Gallery</span></li>
                </ul>
                <!-- /.thm-breadcrumb list-unstyled -->
            </div>
            <!-- /.container -->
        </section>
        <!-- /.page-header -->

        <section class="gallery-one">
            <div class="container-fluid">
                <div class="row">
                    @foreach ($Gallery as $item)
                        <div class="col-md-4">
                            <div class="gallery-one__card">
                                <a href="{{ asset('storage/' . $item->Photo) }}" class="img-popup">
                                    <img src="{{ asset('storage/' . $item->Photo) }}" alt="{{ $item->Description }}" />
                                    <div class="gallery-one__card__hover">
                                        <span class="gallery-one__card__icon"></span>
                                    </div>
                                    <div class="gallery-one__card__caption">
                                        <p>{{ $item->Description }}</p>
                                    </div>
                                </a>
                            </div>
                            <!-- /.gallery-one__card -->
                        </div>
                    @endforeach


                </div>
                <!-- /.row -->

                <div class="row">
                    <div class="col-md-12 mt-5">
                        {{ $Gallery->links('pagination::bootstrap-4') }}
                    </div>
                </div>
            </div>
            <!-- /.container-fluid -->
        </section>
        <!-- /.gallery-one -->


        @include('front.footer.footer')

    </div>

    @include('front.footer.scripts')

</body>
