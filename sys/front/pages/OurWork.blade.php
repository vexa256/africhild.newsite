@include('front.header.header')

<body class="custom-cursor">

    @include('front.loader.loader')

    <div class="page-wrapper">

        @include('front.header.top')
        <!-- /.main-header -->
        <section class="page-header" style="height:100px !important; overflow:hidden">
            <div class="page-header__bg"></div>
            <!-- /.page-header__bg -->
            <div class="container">
                <h2 class="page-header__title bw-split-in-left">
                    The Work We Do At AfriChild
                </h2>
                <ul class="careox-breadcrumb list-unstyled">
                    <li><a href="{{ url('/') }}">Home</a></li>
                    <li><span>OurWork</span></li>
                </ul>
                <!-- /.thm-breadcrumb list-unstyled -->
            </div>
            <!-- /.container -->
        </section>
        <!-- /.page-header -->
        <section class="donations-three donations-three--page">
            <div class="container">

                <div class="row gutter-y-30">
                    {{-- @extends('layouts.app') --}}

                    {{-- @section('content')
                        <div class="container">
                            <div class="row"> --}}



                    @foreach ($ourWorks as $work)
                        <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="00ms">
                            <a href="{{ url('/') }}" data-bs-toggle="modal"
                                data-bs-target="#modal{{ $work->id }}">
                                <div class="donations-three__item" style="--accent-color: #ffa415">
                                    <div class="donations-three__item__image">
                                        <img src="{{ asset('storage/' . $work->ThumbNail) }}" alt="{{ $work->Title }}"
                                            style="width: 100%; height: 200px; object-fit: cover;" />
                                        <a href="{{ url('/') }}" class="donations-three__item__image__link"
                                            data-bs-toggle="modal" data-bs-target="#modal{{ $work->id }}"></a>
                                        <div class="donations-three__item__category">{{ $work->PostedBy }}</div>
                                        <a class="donations-three__item__rm" href="{{ url('/') }}"
                                            data-bs-toggle="modal" data-bs-target="#modal{{ $work->id }}"><i
                                                class="icon-right-arrow"></i></a>
                                    </div>
                                    <div class="donations-three__item__content">
                                        <h3 class="donations-three__item__title">
                                            <a href="{{ url('/') }}" data-bs-toggle="modal"
                                                data-bs-target="#modal{{ $work->id }}">{{ $work->Title }}</a>
                                        </h3>
                                        <p class="donations-three__item__text"
                                            style="height: 100px; overflow-y: scroll;">
                                            {{ $work->Description }}
                                        </p>
                                    </div>
                                    <div class="donations-three__item__border"></div>
                                    <div class="donations-three__item__bottom">
                                        <div class="donations-three__item__bottom__progress">
                                            <div class="donations-three__item__bottom__progress__inner count-bar"
                                                data-percent="100%">
                                                <div class="donations-three__item__bottom__progress__number count-text">
                                                    <i class="fas fa-arrow-left"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="donations-three__item__bottom__text">
                                            <span>#AfriChild</span>
                                            <span>#OurWork</span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    @endforeach



                    <div class="col-md-12 mt-3">
                        {{ $ourWorks->links('pagination::bootstrap-4') }}
                    </div>
                    {{-- </div>
                    @endsection --}}


                </div>
                <!-- /.donations-three__slider -->
            </div>
        </section>

        @include('front.footer.footer')

    </div>

    @foreach ($ourWorks2 as $work)
        <div class="modal fade me-5" id="modal{{ $work->id }}" tabindex="-1"
            aria-labelledby="modalLabel{{ $work->id }}" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-fullscreen ">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="modalLabel{{ $work->id }}">
                            {{ $work->Title }}</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body" style="height: 300px ; overflow-y:scroll">
                        {!! $work->Content !!}
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
        {{-- </div> --}}
    @endforeach
    @include('front.footer.scripts')

</body>
