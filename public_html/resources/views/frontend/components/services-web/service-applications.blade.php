<section class="mil-gradient-bg mil-deco-right mil-p-120-0">
            <div class="mil-deco mil-deco-accent" style="top: 0; left: 5%;"></div>
            <div class="container">
                <div class="mil-text-center mil-mb-90">
                    <span class="mil-suptitle  mil-light mil-suptitle-2 mil-mb-30">Always The Best</span>
                    <h2 class="mil-light mil-mb-30">Types Of <span class="mil-accent">Creative Applications</span> We Deliver</h2>
                    <p class="mil-light-soft">Explore our diverse portfolio showcasing the innovative applications we deliver.</p>
                </div>
                <div class="row mil-mb-30-adapt">
                    @foreach ($web_application as $app_item)
                        
                    <div class="col-lg-3">

                        <div class="mil-icon-box-head mil-long mil-mob-center mil-mb-60">
                            <div class="mil-icon-frame mil-icon-frame-sm mil-light">
                                <img src="{{ asset('assets/uploads/web_perf/icon/' . $app_item->icon) }}" alt="icon">
                            </div>
                            <p class="mil-light"> {{$app_item->heading}} </p>
                        </div>

                    </div>
                    @endforeach
                </div>
                <div class="mil-text-center">
                    <a href="{{ route('career.index') }}" class="mil-button mil-border mil-light mil-mb-30"><span>Talk To Our Creative IT Park Experts</span></a>
                </div>
            </div>
        </section>