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
                    AfriChild Promoting Partners
                </h2>
                <ul class="careox-breadcrumb list-unstyled">
                    <li><a href="{{ url('/') }}">Home</a></li>
                    <li><span>Promoting Partners</span></li>
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
                    @foreach ($founders as $founder)
                        <div class="col-xl-4 col-md-4">
                            <div class="event-one__item">
                                <img src="{{ asset('storage/' . $founder->Thumbnail) }}" alt="{{ $founder->Name }}"
                                    style="width: 100%; height: 300px; object-fit: cover; object-position: center;" />
                                <a href="{{ url('/') }}" class="event-one__item__rm" data-bs-toggle="modal"
                                    data-bs-target="#modal{{ $founder->id }}"><i class="icon-right-arrow"></i></a>
                                <div class="event-one__item__content">
                                    <h3 class="event-one__item__title">
                                        <a href="{{ url('/') }}" data-bs-toggle="modal"
                                            data-bs-target="#modal{{ $founder->id }}">{{ $founder->Name }}</a>
                                    </h3>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>


        @include('front.footer.footer')

        @foreach ($founders as $founder)
            <div class="modal fade" id="modal{{ $founder->id }}" tabindex="-1"
                aria-labelledby="modalLabel{{ $founder->id }}" aria-hidden="true">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="modalLabel{{ $founder->id }}">{{ $founder->Name }}</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                aria-label="Close"></button>
                        </div>
                        <div class="modal-body">

                            {!! $founder->Description !!}
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>

    @include('front.footer.scripts')

</body>
