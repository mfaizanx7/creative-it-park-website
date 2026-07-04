<!-- ??? -->
<section class="mil-p-120-60">
            <div class="mil-deco" style="top: 0; right: 15%;"></div>
            <div class="container">
                <div class="mil-mb-90">
                    <h2 class="mil-mb-30">Delivering <span class="mil-accent">Industry Specific</span> Content <br>Writing Solutions</h2>
                </div>
                <div class="row">
                    @foreach ($app_deleviry as $item)            
                    <div class="col-lg-4">
                        <div class="mil-mb-60">
                            <div class="mil-icon-frame mil-icon-bg mil-icon-frame-md mil-mb-30">
                                // <img src="{{ asset('assets/uploads/app_service/icon/' . $item->icon) }}" alt="icon">
                            </div>
                            <h5 class="mil-mb-20"> {{$item->heading}}</h5>
                            <p style="text-align: justify;"> {{$item->description}} </p>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </section>
        <!-- ??? end -->

        <div class="container">
            <div class="mil-divider"></div>
        </div>