<!-- portfolio -->
        <!--section class="mil-works mil-deep-bg mil-p-120-90">
            <div class="mil-deco" style="top: 0; right: 40%;"></div>
            <div class="container">
                <div class="row align-items-center mil-mb-60-adapt">
                    <div class="col-md-6 col-xl-6">

                        <h2 class="mil-mb-30">Latest Projects</h2>

                    </div>
                    <div class="col-md-6 col-xl-6">

                        <div class="mil-adaptive-right">
                            <div class="mil-slider-nav mil-mb-30">
                                <div class="mil-slider-btn-prev mil-works-prev"><i class="fas fa-arrow-left"></i><span class="mil-h6">Prev</span></div>
                                <div class="mil-slider-btn-next mil-works-next"><span class="mil-h6">Next</span><i class="fas fa-arrow-right"></i></div>
                            </div>
                        </div>

                    </div>
                </div>

                <div class="swiper-container mil-works-slider mil-mb-90">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">

                            <a href="project.html" class="mil-card">
                                <div class="mil-cover-frame">
                                    <img src="img/projects/erp.svg" alt="project">
                                </div>
                                <div class="mil-description">
                                    <div class="mil-card-title">
                                        <h4 class="mil-mb-20">ERP Hosting- <br>GOVT. OF KASHMIR.</h4>

                                    </div>
                                    <div class="mil-card-text">
                                        <p>Tailored ERP hosting for the Government of Azad Jammu and Kashmir, ensuring secure and efficient management of critical operations.</p>
                                    </div>
                                </div>
                            </a>

                        </div>
                        <div class="swiper-slide">

                            <a href="project.html" class="mil-card">
                                <div class="mil-cover-frame">
                                    <img src="img/projects/sms.svg" alt="project">
                                </div>
                                <div class="mil-description">
                                    <div class="mil-card-title">
                                        <h4 class="mil-mb-20">School Management System- <br>SLS SCHOOL AND COLLAGES</h4>
                                    </div>
                                    <div class="mil-card-text">
                                        <p>Enhance SLS Schools and Colleges with our tailored management system, streamlining tasks and fostering academic success through improved communication. </p>
                                    </div>
                                </div>
                            </a>

                        </div>
                        <div class="swiper-slide">

                            <a href="project.html" class="mil-card">
                                <div class="mil-cover-frame">
                                    <img src="img/projects/3.jpg" alt="project">
                                </div>
                                <div class="mil-description">
                                    <div class="mil-card-title">
                                        <h4 class="mil-mb-20"> ITEACH- <br>for Pakistan</h4>

                                    </div>
                                    <div class="mil-card-text">
                                        <p>iTeach empowers Pakistan's workforce with tailored training programs, driving personal and professional growth nationwide through cutting-edge skills development.</p>
                                    </div>
                                </div>
                            </a>

                        </div>
                        <div class="swiper-slide">

                            <a href="project.html" class="mil-card">
                                <div class="mil-cover-frame">
                                    <img src="img/projects/4.jpg" alt="project">
                                </div>
                                <div class="mil-description">
                                    <div class="mil-card-title">
                                        <h4 class="mil-mb-20">COWORK-IT- <br> Coworking Management System</h4>
                                    </div>
                                    <div class="mil-card-text">
                                        <p>Co-working spaces offer collaborative work environments, amenities, and networking opportunities without traditional lease commitments or overhead costs.</p>
                                    </div>
                                </div>
                            </a>

                        </div>
                    </div>
                </div>
                <div class="row align-items-center">
                    <div class="col-md-6 col-xl-6">

                        <a href="portfolio.html" class="mil-link mil-mb-30"><span>View All Cases</span><i class="fas fa-arrow-right"></i></a>

                    </div>
                    <div class="col-md-6 col-xl-6">

                        <div class="mil-adaptive-right">
                            <a href="contact.html" class="mil-button mil-border mil-mb-30"><span>Start Your Innovation Journey</span></a>
                        </div>

                    </div>
                </div>
            </div>
        </section-->
        <section class="mil-events mil-deep-bg mil-p-120-120">
            <div class="mil-deco" style="top: 0; right: 20%;"></div>
            <div class="container">

                <div class="row align-items-end mil-mb-60-adapt">
                    <div class="col-md-4 col-xl-4">

                        <span class="mil-suptitle mil-suptitle-2 mil-mb-30">We Share Our Experience</span>
                        <h2 class="mil-mb-30">Major Projects</h2>

                    </div>
                    <div class="col-md-5 col-xl-5">

                        <!--p class="mil-mb-30">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p-->

                    </div>
                    <div class="col-md-3 col-xl-3">

                        <div class="mil-adaptive-right mil-mb-30">
                            <div class="mil-slider-nav">
                                <div class="mil-slider-btn-prev mil-events-prev"><i class="fas fa-arrow-left"></i><span class="mil-h6">Prev</span></div>
                                <div class="mil-slider-btn-next mil-events-next"><span class="mil-h6">Next</span><i class="fas fa-arrow-right"></i></div>
                            </div>
                        </div>

                    </div>
                </div>

                <div class="swiper-container mil-events-slider" style="overflow-x: hidden;">
                    <div class="swiper-wrapper">
                        @foreach ($app_portfolio as $portfolio)
                            
                        <div class="swiper-slide">

                            <a href="{{$portfolio->link}}" class="mil-card-2">
                                <div class="mil-cover-frame">
                                    <img src="{{ asset('/frontend/images/images/Projects/' . $portfolio->icon) }}"
                                    alt="project">
                                </div>
                                <div class="mil-description">
                                    <!-- <ul class="mil-speakers">
                                        <li class="mil-speaker">
                                            <img src="img/faces/1.jpg" alt="speaker">
                                        </li>
                                        <li class="mil-speaker">
                                            <img src="img/faces/2.jpg" alt="speaker">
                                        </li>
                                        <li class="mil-speaker">
                                            <img src="img/faces/3.jpg" alt="speaker">
                                        </li>
                                    </ul> -->
                                    <div class="mil-card-title">
                                        <p class="mil-category mil-text-sm mil-mb-15">{{ $portfolio->heading }}</p>
                                        <p>{{ $portfolio->description }}</p>
                                    </div>

                                </div> 
                            </a>

                        </div>
                        @endforeach
                    </div>
                </div>

            </div>
        </section>
        <!-- portfolio end -->