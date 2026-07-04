<!-- tech stack -->
<section class="mil-p-120-90">
            <div class="mil-deco" style="top: 0; right: 15%;"></div>
            <div class="container">

                <span class="mil-suptitle mil-suptitle-2 mil-mb-30">Our Tools</span>
                <h2 class="mil-mb-90">Our Design <span class="mil-accent">Technology Stack</span></h2>

                <div class="row mil-grid-lines">
                    @foreach ($ui_tool as $ui_item)                        
                        @foreach (explode(',', $ui_item->heading) as $item)
                            <div class="col-sm-6 col-md-4 col-lg-3">

                                <div class="mil-item-card">
                                    <h6>{{$item}}</h6>
                                </div>

                            </div>
                        @endforeach
                    @endforeach
                </div>
            </div>
        </section>
        <!-- tech stack end -->