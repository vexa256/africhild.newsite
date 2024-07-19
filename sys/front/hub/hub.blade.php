<section class="instagram-one">
    <div class="container-fluid">
        <div class="sec-title text-center">
            <h6 class="sec-title__tagline bw-split-in-right">
                <span class="sec-title__tagline__border"></span>Insights & Updates
            </h6>
            <!-- /.sec-title__tagline -->

            <h3 class="sec-title__title bw-split-in-left">
                Explore AfriChild's Knowledge Hub
            </h3>

            <!-- /.sec-title__title -->
        </div>
        <div class="instagram-one__carousel careox-owl__carousel owl-carousel owl-theme"
            data-owl-options='{
"items": 5,
"margin": 20,
"loop": false,
"smartSpeed": 1000,
"nav": false,
"navText": ["<span class=\"fa fa-angle-left\"></span>","<span class=\"fa fa-angle-right\"></span>"],
"dots": false,
"autoplay": true,
"responsive": {
    "0": {
        "items": 1
    },
    "575": {
        "items": 2
    },
    "992": {
        "items": 3
    },
    "1200": {
        "items": 4
    },
    "1600": {
        "items": 5
    }
}
}'>

            <!-- /.item -->
            @foreach ($resources as $resource)
                <div class="item ">
                    <a href="{{ $resource->ResourceLink ?? '#' }}">
                        <img style="height: 200px; width: 100%; object-fit: cover;"
                            src="{{ $resource->ThumbNail ? asset('storage/' . $resource->ThumbNail) : 'assets/images/placeholder.jpg' }}"
                            alt="{{ $resource->SmallTitle }}" />

                        {{-- <h5 class="instagram-one__sub-title">{{ $resource->SmallTitle }}</h5> --}}
                        <h4 class="instagram-one__title">{{ $resource->SmallDescription }}</h4>
                    </a>
                </div>
            @endforeach

        </div>
        <!-- /.slider -->
    </div>
    <!-- /.container -->
</section>
<!-- /.instagram -->

<section class="cta-two">
    <div class="cta-two__shape"
        style="
            background-image: url(assets/images/shapes/cta-2-shape-1.png);
        "></div>
    <div class="container">
        <div class="row">
            <div class="col-md-7">
                <div class="sec-title text-left">
                    <h6 class="sec-title__tagline bw-split-in-right">
                        <span class="sec-title__tagline__border"></span>EXPLORE OUR RESOURCES
                    </h6>
                    <!-- /.sec-title__tagline -->

                    <h3 class="sec-title__title bw-split-in-left">
                        Unlock a world of useful resources in our Knowlegde Hub
                    </h3>
                    <!-- /.sec-title__title -->
                </div>
                <!-- /.sec-title -->
            </div>

            <div class="col-md-5">
                <div class="cta-two__button">
                    <img src="{{ asset('assets/images/shapes/arrow-1.png') }}" alt="careox" />
                    <a href="https://hub.africhild.cloud" class="careox-btn"><span>Visit The Knowlegde Hub</span></a>
                </div>
            </div>
        </div>
    </div>
    <!-- /.container -->
</section>
<!-- /.cta-two -->
