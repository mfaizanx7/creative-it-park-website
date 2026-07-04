<!-- Events -->

<section class="mil-courses mil-deep-bg mil-p-120-120 white">

    <div class="container-latest-events container">



        <div class="row align-items-center latestHeading">

            <div class="col-md-6 col-xl-6 headingText">

                <h2 class="mil-mb-30">Latest Events</h2>

            </div>

            <div class="col-md-6 col-xl-6">



                <div class="mil-adaptive-right headingText">

                    <div class="mil-slider-nav mil-mb-30">

                        <div class="mil-slider-btn-prev mil-courses-prev"><i class="fas fa-arrow-left"></i><span

                                class="mil-p">Prev</span></div>

                        <div class="mil-slider-btn-next mil-courses-next"><span class="mil-p">Next</span><i

                                class="fas fa-arrow-right"></i></div>

                    </div>

                </div>



            </div>

        </div>



        <div class="swiper-container mil-courses-slider mil-mb-90">

            <div class="swiper-wrapper swiper-wrapper-events">

                @foreach ($app_events as $event)

                    <div class="swiper-slide">



                        <a href="#!" class="mil-card">

                            <div class="mil-cover-frame mil-mb-15">

                                <img loading="lazy" src="{{ asset('/frontend/images/images/events/' . $event->picture) }}"

                                    alt="project">

                            </div>

                            <div class="mil-description">

                                <div class="mil-fw-descr">

                                    <div class="mil-divider mil-divider-left mil-mb-20"></div>

                                    <p class="mil-mb-15" style="text-align: justify;">{{ $event->description }}</p>

                                    <!-- <p class="mil-text-sm mil-mb-15">John Stone</p>

                                        <div class="mil-text-lg mil-bold mil-accent">Free</div> -->

                                </div>



                            </div>

                        </a>



                    </div>

                @endforeach

            </div>

        </div>

        <div class="row align-items-center" style="padding-block: 2.5rem;">

            <div class="col-md-6 col-xl-6">

                <a href="{{ route('news') }}" class="mil-link"><span>See Events</span><i

                        class="fas fa-arrow-right"></i></a>

            </div>

        </div>

    </div>

</section>

