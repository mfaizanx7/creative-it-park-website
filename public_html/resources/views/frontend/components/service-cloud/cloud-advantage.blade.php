
<section class="mil-deep-bg mil-p-120-90">   
            <div class="container">
                <div class="row">
                    <div class="col-xl-7">
                        <span class="mil-suptitle mil-suptitle-2 mil-mb-30">Explore More Solutions</span>
                        <h2 class="mil-mb-90">Boost Your <span class="mil-accent">Advantage</span></h2>
                    </div>
                </div>
                <div class="row">
                    @foreach ($cloud_advantages as $item)
                        
                    <div class="col-xl-3 mil-mb-30">

                        <div class="mil-deco mil-deco-accent" style="top: -10%; right: -10%;"></div>
                        <div class="mil-icon-frame mil-icon-frame-md mil-icon-bg mil-mb-30">
                            <h3>I</h3>
                        </div>
                        <h5 class="mil-mb-30">{{ $item->heading}}</h5>
                        <p style="text-align: justify;">{{ $item->description}}</p>

                    </div>
                    @endforeach
                </div>
            </div>
        </section>