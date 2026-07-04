<section class="mil-services mil-p-120-90">
            <div class="mil-deco" style="bottom: 0; right: 40%; transform: rotate(180deg)"></div>
            <div class="container">
                <span class="mil-suptitle mil-suptitle-2 mil-mb-30">High Quality and Performance</span>
                <h2 class="mil-mb-90">Our Approach To <span class="mil-accent">Creative Software</span> Development</h2>
                <div class="row mil-mb-30-adapt">
                    @foreach ($web_performance as $web_perf_item)
                        
                    <div class="col-lg-6 col-xl-6">
                        <div class="mil-service-item mil-without-lines mil-mb-60">
                            <div class="mil-service-icon">
                                <div class="mil-icon-frame mil-icon-frame-md">
                                    <img src="{{ asset('assets/uploads/web_perf/icon/' . $web_perf_item->icon) }}" alt="icon">
                                </div>
                            </div>
                            <div class="mil-service-text">
                                <h5 class="mil-mb-30"><span class="mil-accent"> {{ sprintf('%02d', $loop->index + 1) }} </span> {{$web_perf_item->heading}} </h5>
                                <p style="text-align:justify;"> {{$web_perf_item->discription}} </p>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>

                <div class="row align-items-center">
                    <div class="col-md-6 col-xl-6">

                        <a href="{{ route('team') }}" class="mil-button mil-border mil-mb-30"><span>Talk To Our Creative IT Park Experts</span></a>

                    </div>
                    <!--div class="col-md-6 col-xl-6">

                        <div class="mil-adaptive-right">
                            <a href="#." class="mil-link mil-mb-30"><span>See More</span><i class="fas fa-arrow-right"></i></a>
                        </div>

                    </div-->
                </div>
            </div>
        </section>