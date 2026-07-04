<!-- ??? -->
<section class="mil-p-120-60">
            <div class="container">

                <div class="row align-items-end mil-mb-60-adapt">
                    <div class="col-md-6 col-xl-6">

                        <span class="mil-suptitle mil-suptitle-2 mil-mb-30">Tech, Business and Talents</span>
                        <h2 class="mil-mb-30">Next <span class="mil-accent">Creative IT Park</span> for Mobile App Development</h2>

                    </div>
                    <div class="col-md-6 col-xl-6">

                        <div class="mil-adaptive-right">
                            <a href="#" class="mil-button mil-border mil-mb-30"><span>Learn More</span></a>
                        </div>

                    </div>
                </div>

                <div class="row">
                    @foreach ($app_tech as $item)                        
                        <div class="col-lg-3">

                            <div class="mil-box-center mil-mb-60">
                                <div class="mil-icon-frame mil-icon-bg mil-icon-frame-md mil-mb-30">
                                    <img src="{{ asset('assets/uploads/app_service/icon/' . $item->icon) }}" alt="icon">
                                </div>
                                <h6> {{$item->heading}} </h6>
                            </div>

                        </div>
                    @endforeach
                </div>
            </div>
        </section>
        <!-- ??? end -->