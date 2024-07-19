@include('front.header.header')

<body class="custom-cursor">

    {{-- @include('front.loader.loader') --}}

    <div class="page-wrapper">

        @include('front.header.top')

        <section class="page-header">
            <div class="page-header__bg"></div>
            <!-- /.page-header__bg -->
            <div class="container">
                <h5 style="font-size: 30px" class="page-header__title bw-split-in-left">
                    {{ $post->title }}
                </h5>
                <ul class="careox-breadcrumb list-unstyled">
                    <li><a href="{{ url('/') }}">Home</a></li>
                    <li><span>Blog Post Details</span></li>
                </ul>
                <!-- /.thm-breadcrumb list-unstyled -->
            </div>
            <!-- /.container -->
        </section>
        <!-- /.page-header -->

        <section class="blog-details">
            <div class="container">
                <div class="row gutter-y-60">
                    <div class="col-lg-8">

                        <!-- /.blog-details -->
                        <div class="blog-details__content">
                            <div class="blog-details__image">
                                <img src="{{ asset('storage/' . $post->image) }}" alt="{{ $post->title }}" />
                            </div>
                            <!-- /.blog-card__image -->
                            <ul class="list-unstyled blog-details__top-meta">
                                <li class="blog-details__top-meta__cats">
                                    <a
                                        href="{{ url('categories/' . $post->category_id) }}">{{ $post->category_name }}</a>
                                </li>
                                <li>
                                    <a href="{{ url('/') }}"><img
                                            src="https://blog.africhild.cloud/upload/logo.png"
                                            alt="Author" />#AfriChild</a>
                                </li>
                                <li>
                                    <i
                                        class="icofont-ui-calendar"></i>{{ \Carbon\Carbon::parse($post->created_at)->format('d M Y') }}
                                </li>
                            </ul>
                            <!-- /.list-unstyled blog-card__top-meta -->
                            <h3 class="blog-details__title">
                                {{ $post->title }}
                            </h3>
                            <p class="blog-details__text">
                                {{ $post->excerpt }}
                            </p>
                            <!-- /.blog-details__text -->
                            <div class="tinymce-content" style="height: 700px; overflow-y:scroll">
                                {!! $post->body !!}
                            </div>
                            <!-- /.blog-details__text -->

                            <!-- Social Share -->
                            <div class="blog-details__share mt-4 mb-4">
                                <a href="https://twitter.com/intent/tweet?text={{ urlencode($post->title) }}&url={{ url('posts/' . $post->slug) }}"
                                    target="_blank">
                                    <i class="fab fa-twitter"></i> Tweet
                                </a>
                                <a href="https://www.facebook.com/sharer/sharer.php?u={{ url('posts/' . $post->slug) }}"
                                    target="_blank">
                                    <i class="fab fa-facebook-f"></i> Share
                                </a>
                                <a href="https://www.linkedin.com/shareArticle?mini=true&url={{ url('posts/' . $post->slug) }}&title={{ urlencode($post->title) }}"
                                    target="_blank">
                                    <i class="fab fa-linkedin-in"></i> Share
                                </a>
                            </div>
                            <!-- /.blog-details__share -->

                            <!-- /.blog-details__meta -->
                        </div>

                        {{-- <!-- /.sidebar__single -->
                        <div class="sidebar__single">
                            <h4 class="sidebar__title">
                                Related Posts
                            </h4>
                            <!-- /.sidebar__title -->
                            <ul class="sidebar__posts list-unstyled">
                                @foreach ($ForYou as $post)
                                    <li class="sidebar__posts__item">
                                        <div class="sidebar__posts__image">
                                            <img style="width: 100px; height: auto; object-fit: cover;"
                                                src="{{ asset('storage/' . $post->image) }}"
                                                alt="{{ $post->title }}" />
                                        </div>
                                        <!-- /.sidebar__posts__image -->
                                        <div class="sidebar__posts__content">
                                            <p class="sidebar__posts__meta">
                                                <i
                                                    class="icofont-calendar"></i>{{ \Carbon\Carbon::parse($post->created_at)->format('d M Y') }}
                                            </p>
                                            <!-- /.sidebar__posts__date -->
                                            <h4 class="sidebar__posts__title">
                                                <a
                                                    href="{{ route('AfriChildBlogDetails', ['slug' => $post->slug]) }}">{{ $post->title }}</a>
                                            </h4>
                                            <!-- /.sidebar__posts__title -->
                                        </div>
                                        <!-- /.sidebar__posts__content -->
                                    </li>
                                @endforeach
                            </ul>
                            <!-- /.sidebar__posts list-unstyled -->
                        </div> --}}

                    </div>
                    <!-- /.col-lg-8 -->
                    <div class="col-lg-4">
                        <div class="sidebar">
                            <aside class="widget-area">
                                <div class="sidebar__single sidebar__single--search">
                                    <form action="{{ route('AfriChildBlog') }}" method="GET" class="sidebar__search">
                                        <input type="text" name="q" placeholder="Search Here..." />
                                        <button type="submit" aria-label="search submit">
                                            <span><i class="icon-magnifying-glass"></i></span>
                                        </button>
                                        @csrf
                                    </form>
                                    <!-- /.sidebar__search -->
                                </div>


                                <!-- /.sidebar__single -->
                                <div class="sidebar__single">
                                    <h4 class="sidebar__title">
                                        Categories
                                    </h4>
                                    <!-- /.sidebar__title -->
                                    <ul class="sidebar__categories list-unstyled">
                                        @foreach ($categories as $category)
                                            @if ($category->post_count > 0)
                                                <li>
                                                    <a
                                                        href="{{ url('AfriChildBlog?category=' . $category->slug) }}">{{ $category->name }}</a>
                                                    ({{ $category->post_count }})
                                                </li>
                                            @else
                                                <li>
                                                    <span>{{ $category->name }} ({{ $category->post_count }})</span>
                                                </li>
                                            @endif
                                        @endforeach

                                        <li>
                                            <a href="{{ url('AfriChildBlog') }}">All Categories</a>
                                        </li>
                                    </ul>
                                    <!-- /.sidebar__categories list-unstyled -->
                                </div>


                                <!-- /.sidebar__single -->
                                <div class="sidebar__single">
                                    <h4 class="sidebar__title">
                                        Recent Posts
                                    </h4>
                                    <!-- /.sidebar__title -->
                                    <ul class="sidebar__posts list-unstyled">
                                        @foreach ($Recent as $post)
                                            <li class="sidebar__posts__item">
                                                <div class="sidebar__posts__image">
                                                    <img style="width: 100px; height: auto; object-fit: cover;"
                                                        src="{{ asset('storage/' . $post->image) }}"
                                                        alt="{{ $post->title }}" />
                                                </div>
                                                <!-- /.sidebar__posts__image -->
                                                <div class="sidebar__posts__content">
                                                    <p class="sidebar__posts__meta">
                                                        <i
                                                            class="icofont-calendar"></i>{{ \Carbon\Carbon::parse($post->created_at)->format('d M Y') }}
                                                    </p>
                                                    <!-- /.sidebar__posts__date -->
                                                    <h4 class="sidebar__posts__title">
                                                        <a
                                                            href="{{ route('AfriChildBlogDetails', ['slug' => $post->slug]) }}">{{ $post->title }}</a>
                                                    </h4>
                                                    <!-- /.sidebar__posts__title -->
                                                </div>
                                                <!-- /.sidebar__posts__content -->
                                            </li>
                                        @endforeach
                                    </ul>
                                    <!-- /.sidebar__posts list-unstyled -->
                                </div>
                            </aside>
                            <!-- /.widget-area -->
                        </div>
                        <!-- /.sidebar -->
                    </div>
                    <!-- /.col-lg-4 -->
                    <div class="col-12">
                        <div class="sec-title text-center">
                            <h6 class="sec-title__tagline bw-split-in-right">
                                <span class="sec-title__tagline__border"></span>Insights & Updates
                            </h6>
                            <!-- /.sec-title__tagline -->

                            <h3 class="sec-title__title bw-split-in-left">
                                Other related posts and resources
                            </h3>

                            <!-- /.sec-title__title -->
                        </div>
                    </div>
                    @foreach ($ForYou as $post)
                        <div class="col-md-4">
                            <div class="blog-card wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="00ms"
                                style="--accent-color: #ffa415">
                                <div class="blog-card__image"
                                    style=" transition: 0.5s; background-size: cover; width: 100%; background-color: rgba(0, 0, 0, 0); /* Example with 50% opacity */
                            ">

                                    <img style="width: 100%; height: 200px; object-fit: cover;"
                                        src="{{ asset('storage/' . $post->image) }}" alt="{{ $post->title }}" />
                                    <img style="width: 100%; height: 200px; object-fit: cover;"
                                        src="{{ asset('storage/' . $post->image) }}" alt="{{ $post->title }}" />
                                    <a href="{{ route('AfriChildBlogDetails', ['slug' => $post->slug]) }}"
                                        class="blog-card__image__link">
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
                                            <a href="{{ route('AfriChildBlogDetails', ['slug' => $post->slug]) }}"><i
                                                    class="icofont-comment"></i> Latest</a>
                                        </li>
                                    </ul>
                                    <!-- /.list-unstyled blog-card__meta -->
                                    <h3 class="blog-card__title">
                                        <a
                                            href="{{ route('AfriChildBlogDetails', ['slug' => $post->slug]) }}">{{ $post->title }}</a>
                                    </h3>
                                    <!-- /.blog-card__title -->
                                    <p class="blog-card__text">
                                        {{ $post->excerpt }}
                                    </p>
                                    <!-- /.blog-card__text -->
                                    <a href="{{ route('AfriChildBlogDetails', ['slug' => $post->slug]) }}"
                                        class="blog-card__link">
                                        <span class="blog-card__link__front"><span
                                                class="icofont-double-right"></span></span>
                                        <span class="blog-card__link__back"><span
                                                class="icofont-double-right"></span>Read More</span>
                                    </a>
                                </div>
                                <!-- /.blog-card__content -->
                            </div>
                            <!-- /.blog-card -->
                        </div>
                    @endforeach

                </div>
                <!-- /.row -->
            </div>
            <!-- /.container -->
        </section>
        <!-- /.blog-details -->



        @include('front.footer.footer')

    </div>

    @include('front.footer.scripts')

</body>
