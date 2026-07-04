<section class="mil-p-120-60">
            <div class="mil-deco" style="top: 0; right: 25%;"></div>
            <div class="container">
                <span class="mil-suptitle mil-suptitle-2 mil-mb-30">High Experience</span>
                <h2 class="mil-mb-120">UI/UX <span class="mil-accent">Design Services</span> That Set Us Apart</h2>

                <div class="row">
                    @foreach ($ui_solution as $item)
                        
                    <div class="col-md-6 col-xl-4">

                        <div class="mil-icon-box-2 mil-mb-60">
                            <div class="mil-icon-frame mil-icon-frame-md mil-icon-bg mil-mb-30">
                                <img src="{{ asset('assets/uploads/ui_service/icon/' . $item->icon) }}" alt="icon">
                            </div>
                            <div class="mil-box-text">
                                <h4 class="mil-mb-30"> {{$item->heading}}</h4>
                                <p class="mil-box-text mil-mb-30" style="text-align: justify;">{{$item->description}}</p>
                            </div>
                        </div>


                    </div>
                    @endforeach
                </div>
            </div>
        </section>