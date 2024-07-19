  <!-- Service Start -->
  <section class="service-two">
      <div class="service-two__shape"
          style="
            background-image: url({{ asset('assets/images/shapes/service-shape-3.png') }});
        ">
      </div>
      <div class="container">
          <div class="sec-title text-center">
              <h6 class="sec-title__tagline bw-split-in-right">
                  <span class="sec-title__tagline__border"></span>OUR
                  Work
              </h6>
              <!-- /.sec-title__tagline -->

              <h3 class="sec-title__title bw-split-in-left">
                  Empowering Futures, One Child at a Time
              </h3>
              <!-- /.sec-title__title -->
          </div>
          <!-- /.sec-title -->
          <div class="row gutter-y-30">
              @foreach ($ourWorks as $work)
                  <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="00ms">
                      <div class="service-two__item text-center" style="--accent-color: #ffa415">
                          <div class="service-two__item__shape"
                              style="background-image: url(assets/images/shapes/service-two-shape.png);">
                          </div>
                          <div class="service-two__item__image">
                              <img style="width: 100%; height: 200px; object-fit: cover; transition: 0.5s; background-size: cover;"
                                  src="{{ asset('storage/' . $work->ThumbNail) }}" alt="{{ $work->Title }}" />
                          </div>
                          <div class="service-two__item__icon">
                              <span class="icon-generous"></span>
                          </div>
                          <!-- /.service-icon -->
                          <h3 class="service-two__item__title">
                              {{ $work->Title }}
                          </h3>
                          <!-- /.service-title -->
                          <p class="service-two__item__text">
                              {{ $work->Description }}
                          </p>
                          <!-- /.service-title -->
                          <div class="service-two__item__rm">
                              <a href="{{ route('AfriChildOurWork') }}">Read More</a>
                              <i class="icon-right-arrow"></i>
                          </div>
                      </div>
                      <!-- /.service-card-one -->
                  </div>
              @endforeach


          </div>
      </div>
  </section>
  <!-- Service End -->
