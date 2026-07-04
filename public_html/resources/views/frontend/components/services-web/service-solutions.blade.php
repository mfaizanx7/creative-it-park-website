<!-- steps -->
<section class="mil-p-120-90">
            <div class="mil-deco" style="bottom: 0; right: 35%; transform: rotate(180deg)"></div>
            <div class="container">
                <div class="row">
                    <div class="col-12 mil-mb-90">
                        <span class="mil-suptitle mil-suptitle-2 mil-mb-30">Services and Solutions</span>
                        <h2 class="mil-mb-30">Our Development Services Let You Win Big</h2>
                        <p class="mil-dark" style="text-align: justify;">We offer automated solutions for all your manual problems because we believe digitalization is the way forward. We provide a wide range of customized solutions as per the needs of our clients. We specialize in mobile applications,websites, AR-VR Development, Game Development to assist you in the process of business growth.</p>
                    </div>
                </div>
                <div class="row mil-mb-30-adapt">
                    @foreach ($web_services as $web_item)
                        
                    <div class="col-xl-4">

                        <div class="mil-mb-60">
                            <div class="mil-number-icon mil-circle mil-mb-30">
                                <span>{{ sprintf('%02d', $loop->index + 1) }}</span>
                            </div>
                            <h4 class="mil-mb-15">{{ $web_item->heading}}</h4>
                            <p style="text-align: justify;">{{ $web_item->discription}}.</p>
                        </div>

                    </div>
                    @endforeach

                </div>
                <div class="row align-items-center">
                    <div class="col-md-6 col-xl-6">

                        <a href="{{ route('products') }}" class="mil-button mil-border mil-mb-30"><span>Tell us about your project</span></a>

                    </div>
                    <!--div class="col-md-6 col-xl-6">

                        <div class="mil-adaptive-right">
                            <a href="#." class="mil-link mil-mb-30"><span>See More</span><i class="fas fa-arrow-right"></i></a>
                        </div>

                    </div-->
                </div>
            </div>
        </section>
        <!-- steps end -->


        <div class="container">
            <div class="mil-divider"></div>
        </div>