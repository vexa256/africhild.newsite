@include('front.header.header')

<body class="custom-cursor">

    {{-- @include('front.loader.loader') --}}

    <div class="page-wrapper">

        @include('front.header.top')

        <section class="page-header" style="height: 100px">
            <div class="page-header__bg"></div>
            <!-- /.page-header__bg -->
            <div class="container">
                <h2 class="page-header__title bw-split-in-left">
                    AfriChild Board Of Directors
                </h2>
                <ul class="careox-breadcrumb list-unstyled">
                    <li><a href="{{ url('/') }}">Home</a></li>
                    <li><span>Directors</span></li>
                </ul>
                <!-- /.thm-breadcrumb list-unstyled -->
            </div>
            <!-- /.container -->
        </section>
        <!-- /.page-header -->

        <section class="event-one event-one--page">
            <div class="container">

                <!-- /.sec-title -->
                <div class="row gutter-y-30 masonry-layout">
                    @foreach ($directors as $director)
                        <div class="col-xl-4 col-md-4">
                            <div class="event-one__item">
                                <img src="{{ asset('storage/' . $director->ThumbNail) }}"
                                    alt="{{ $director->Title }}" />
                                <a href="{{ url('/') }}" class="event-one__item__rm" data-bs-toggle="modal"
                                    data-bs-target="#modal{{ $director->id }}"><i class="icon-right-arrow"></i></a>
                                <div class="event-one__item__content">
                                    <h3 class="event-one__item__title">
                                        <a href="{{ url('/') }}" data-bs-toggle="modal"
                                            data-bs-target="#modal{{ $director->id }}">{{ $director->Title }}</a>
                                    </h3>

                                </div>
                            </div>
                        </div>

                        <!-- Modal -->

                        <!-- /.modal -->
                    @endforeach
                </div>
            </div>
        </section>


        @include('front.footer.footer')

        @foreach ($directors as $director)
            <div class="modal fade" id="modal{{ $director->id }}" tabindex="-1"
                aria-labelledby="modalLabel{{ $director->id }}" aria-hidden="true">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="modalLabel{{ $director->id }}">
                                {{ $director->Title }}</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <img src="{{ asset('storage/' . $director->ThumbNail) }}" alt="{{ $director->Title }}"
                                style="width: 100%; height: auto; object-fit: cover; margin-bottom: 15px;" />
                            {!! $director->Description !!}
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>

    @include('front.footer.scripts')

</body>
