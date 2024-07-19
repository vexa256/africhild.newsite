<section class="blog-two">
    <div class="container">
        <div class="sec-title text-center">
            <h6 class="sec-title__tagline bw-split-in-right">
                <span class="sec-title__tagline__border"></span>News,
                events & articles
            </h6>
            <!-- /.sec-title__tagline -->

            <h3 class="sec-title__title bw-split-in-left">
                Disover more about AfriChild
            </h3>
            <!-- /.sec-title__title -->
        </div>
        <!-- /.sec-title -->
        <div class="blog-one__carousel careox-owl__carousel careox-owl__carousel--with-shadow careox-owl__carousel--basic-nav owl-carousel"
            data-owl-options='{
"items": 1,
"margin": 30,
"loop": false,
"smartSpeed": 700,
"nav": false,
"navText": ["<span class=\"fa fa-angle-left\"></span>","<span class=\"fa fa-angle-right\"></span>"],
"dots": true,
"autoplay": false,
"responsive": {
    "0": {
        "items": 1
    },
    "570": {
        "items": 2
    },
    "992": {
        "items": 3
    }
}
}'>


            @foreach ($posts as $post)
                <div class="item">
                    <div class="blog-card wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="00ms"
                        style="--accent-color: #ffa415">
                        <div class="blog-card__image"
                            style=" transition: 0.5s; background-size: cover; width: 100%; background-color: rgba(0, 0, 0, 0); /* Example with 50% opacity */
">
                            <img style="width: 100%; height: 200px; object-fit: cover; transition: 0.5s; background-size: cover;"
                                src="{{ asset('storage/' . $post->image) }}" alt="{{ $post->title }}" />
                            <img style="width: 100%; height: 200px; object-fit: cover; transition: 0.5s; background-size: cover;"
                                src="{{ asset('storage/' . $post->image) }}" alt="{{ $post->title }}" />
                            <a href="{{ route('AfriChildBlog') }}" class="blog-card__image__link">
                                <span class="sr-only">{{ $post->title }}</span>
                            </a>
                            <div class="blog-card__date">
                                <i
                                    class="icofont-ui-calendar"></i>{{ \Carbon\Carbon::parse($post->created_at)->format('d M Y') }}
                            </div>
                            <!-- /.blog-card__date -->
                        </div>
                        <!-- /.blog-card__image -->
                        <div class="blog-card__content">
                            <ul class="list-unstyled blog-card__meta">
                                <li>
                                    <a href="{{ url('/') }}"><img
                                            src="https://blog.africhild.cloud/upload/logo.png"
                                            alt="Author" />#AfriChild</a>
                                </li>
                                <li>
                                    <a href="{{ route('AfriChildBlog') }}"><i class="icofont-comment"></i>
                                        Latest
                                    </a>
                                </li>
                            </ul>
                            <!-- /.list-unstyled blog-card__meta -->
                            <h3 class="blog-card__title">
                                <a href="{{ route('AfriChildBlog') }}">{{ $post->title }}</a>
                            </h3>
                            <!-- /.blog-card__title -->
                            <p class="blog-card__text">
                                {{ \Illuminate\Support\Str::limit($post->excerpt, 100) }}
                            </p>
                            <!-- /.blog-card__text -->
                            <a href="{{ route('AfriChildBlog') }}" class="blog-card__link">
                                <span class="blog-card__link__front"><span class="icofont-double-right"></span></span>
                                <span class="blog-card__link__back"><span class="icofont-double-right"></span>Read
                                    More</span>
                            </a><!-- /.blog-card__link -->
                        </div>
                        <!-- /.blog-card__content -->
                    </div>
                    <!-- /.blog-card -->
                </div>
                <!-- /.item -->
            @endforeach


        </div>
        <!-- /.row -->
    </div>
    <!-- /.container -->
</section>
<!-- /.blog-two -->
