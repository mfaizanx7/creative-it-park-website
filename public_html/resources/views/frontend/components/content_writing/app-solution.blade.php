<section class="mil-p-120-60">
            <div class="container">
                <div class="mil-mb-90">
                    <span class="mil-suptitle mil-suptitle-2 mil-mb-30">Our Contect Writing  Expertise</span>
                    <h2 class="mil-mb-30">Engaging, <span class="mil-accent">SEO-Optimized & High-Quality Content</span> for Your Business</h2>
                </div>
                <div class="row">
                    @foreach ($app_solution as $app_item)
                        
                    <div class="col-lg-4">
                        <div class="mil-box-center mil-mb-60">
                            <div class="mil-icon-frame mil-icon-bg mil-icon-frame-md mil-mb-30">
                                <img src="{{ asset('assets/uploads/app_service/icon/' . $app_item->icon) }}" alt="icon">
                            </div>
                            <h5 class="mil-mb-20">{{ $app_item->heading }}</h5>
                            <p class="mil-mb-30" style="text-align: justify;">{{ $app_item->description }}</p>
                            <ul class="mil-dot-list">
                                @foreach (explode(',', $app_item->sub_head) as $item)
                                    <li class="mil-text-sm mil-bold mil-dark"> {{$item}}</li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </section>