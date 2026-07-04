<style>
    @media screen and (max-width: 768px) {
        .mil-adaptive-right {
            justify-content: flex-start;
        }
    }

    .mil-reviews .swiper-container {
        overflow: visible !important;
        scrollbar-width: none;
        width: 100%;
    }
</style>

<section class="mil-reviews mil-p-120-120">

    <div class="mil-deco" style="top: 0; right: 30%;"></div>

    <div class="container">

        <div class="row align-items-center mil-mb-90">

            <div class="col-md-6 col-xl-6">



                <span class="mil-suptitle mil-suptitle-2 mil-mb-30">Testimonial</span>

                <h2>What Our <span class="mil-accent">Clients</span> Say</h2>



            </div>

            <div class="col-md-6 col-xl-6">



                <div class="mil-adaptive-right mil-mt-60-adapt">

                    <div class="mil-slider-nav">

                        <div class="mil-slider-btn-prev mil-revi-prev"><i class="fas fa-arrow-left"></i><span
                                class="mil-h6">Prev</span></div>

                        <div class="mil-slider-btn-next mil-revi-next"><span class="mil-h6">Next</span><i
                                class="fas fa-arrow-right"></i></div>

                    </div>

                </div>



            </div>

        </div>

        <div class="swiper-container mil-revi-slider">

            <div class="swiper-wrapper">

                @foreach ($app_testimonial as $testimonial)
                    <div class="swiper-slide">



                        <div class="mil-review">

                            <div class="mil-stars mil-mb-30">

                                <img src="{{ asset('/frontend/img/icons/sm/11.svg') }}" width="25" height="21" alt="quote" loading="lazy">

                                <ul>

                                    <li><i class="fas fa-star"></i></li>

                                    <li><i class="fas fa-star"></i></li>

                                    <li><i class="fas fa-star"></i></li>

                                    <li><i class="fas fa-star"></i></li>

                                    <li><i class="fas fa-star"></i></li>

                                </ul>

                            </div>

                            <p class="mil-mb-30">{{ $testimonial->detail }}</p>

                            <div class="mil-author">

                                <img src="{{ asset('/frontend/images/images/clients/avatar-male.png') }}" alt="Customer" loading="lazy">

                                <div class="mil-name">

                                    <h6 class="mil-mb-5">{{ $testimonial->name }}</h6>

                                    {{-- <span class="mil-text-sm">Agency Design</span> --}}

                                </div>

                            </div>

                        </div>



                    </div>
                @endforeach

            </div>

        </div>

    </div>

</section>