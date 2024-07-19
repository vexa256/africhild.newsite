<section class="faq-one">
    <div class="container">
        <div class="row">
            <div class="col-xl-6">
                <div class="faq-one__content">
                    <div class="sec-title text-left">
                        <h6 class="sec-title__tagline bw-split-in-right">
                            <span class="sec-title__tagline__border"></span>OUR FAQ NOW
                        </h6>
                        <!-- /.sec-title__tagline -->

                        <h3 class="sec-title__title bw-split-in-left">
                            Common Questions about AfriChild Centre.
                        </h3>
                        <!-- /.sec-title__title -->
                    </div>
                    <!-- /.sec-title -->
                    <p class="faq-one__content__text">
                        AfriChild Centre is dedicated to enhancing the well-being of children in Africa through
                        innovative research and advocacy. Below are some frequently asked questions to help you
                        understand our work better.
                    </p>

                    <div class="faq-one__accordion careox-accrodion" data-grp-name="careox-accrodion">
                        @foreach ($faqs as $faq)
                            <div class="accrodion" style="--accent-color: #ffa415">
                                <div class="accrodion-title">
                                    <h4>
                                        {{-- <span class="accrodion-title__number">{{ $loop->iteration }}</span> --}}
                                        {{ $faq->Question }}
                                        <span class="accrodion-title__icon"></span><!-- /.accrodion-title__icon -->
                                    </h4>
                                </div>
                                <!-- /.accordian-title -->
                                <div class="accrodion-content">
                                    <div class="inner">
                                        <p>
                                            {{ $faq->Answer }}
                                        </p>
                                    </div>
                                    <!-- /.accordian-content -->
                                </div>
                            </div>
                        @endforeach
                        {{-- @endsection --}}

                    </div>
                </div>
                <!-- /.faq-one__contact -->
            </div>
            <!-- /.col-xl-6 -->
            <div class="col-xl-6">
                <div class="faq-one__image wow fadeInUp">
                    <img src="{{ asset('storage/gallery/July2024/Ii4W8B5N2c2Y3DhAWGO2.jpg') }}" alt="careox" />
                    <div class="faq-one__image__left wow fadeInLeft" data-wow-delay="200ms">
                        <img src="{{ asset('storage/gallery/July2024/BI6E3eqKTC72ckgA70VH.jpg') }}" alt="careox" />
                    </div>
                    <div class="faq-one__image__right wow fadeInRight" data-wow-delay="100ms">
                        <img src="{{ asset('storage/gallery/July2024/7uQImtttpWL8fa2Yy1ba.jpg') }}" alt="careox" />
                    </div>
                    <div class="faq-one__image__shape-top">
                        <img src="{{ asset('assets/images/shapes/faq-1-shape-1.png') }}" alt="careox" />
                    </div>
                    <div class="faq-one__image__shape-bottom">
                        <img src="{{ asset('assets/images/shapes/faq-1-shape-2.png') }}" alt="careox" />
                    </div>
                </div>
            </div>
            <!-- /.col-xl-6 -->
        </div>
        <!-- /.row -->
        <div class="faq-one__text wow fadeInUp">
            <span>#</span> All about the African Child
            {{-- <a href="{{ url('/') }}" class="careox-btn"><span>More About Us</span></a> --}}
        </div>
    </div>
    <!-- /.container -->
</section>
