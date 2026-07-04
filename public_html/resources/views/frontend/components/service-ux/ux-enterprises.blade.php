<section class="mil-gradient-bg mil-p-120-60">
            <div class="container">
                <div class="mil-mb-90">
                    <span class="mil-suptitle mil-suptitle-2 mil-mb-30 mil-light">Our Enterprise</span>
                    <h2 class="mil-light">What Our <span class="mil-accent">UI/UX Design</span> <br>Company Does Best</h2>
                </div>
                <div class="row mil-mb-30-adapt">
                    @foreach ($ui_enterprises as $item)
                        
                    <div class="col-xl-4">

                        <div class="mil-mb-60">
                            <div class="mil-number-icon mil-light mil-circle mil-mb-30">
                                <span>{{ sprintf('%02d', $loop->index + 1) }}</span>
                            </div>
                            <h4 class="mil-light mil-mb-15"> {{$item->heading}} </h4>
                            <p class="mil-light-soft" style="text-align: justify;">{{$item->description}}  </p>
                        </div>

                    </div>
                    @endforeach
                </div>
            </div>
        </section>