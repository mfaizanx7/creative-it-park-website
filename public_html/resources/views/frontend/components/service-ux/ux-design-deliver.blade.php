<section class="mil-deep-bg mil-p-120-0">
    <div class="container">

        <span class="mil-suptitle mil-suptitle-2 mil-mb-30">Our Enterprise</span>
        <h2 class="mil-mb-120">How We <span class="mil-accent">Deliver Our UI/UX</span> Design Services</h2>

        <div class="swiper-container mil-tabs-slider">
            <div class="swiper-wrapper">
                @foreach ($ui_design as $index => $item)
                    <div class="swiper-slide" data-hash="tab{{ $index + 1 }}">

                        <div class="row justify-content-between align-items-center" data-swiper-parallax-y="-100"
                            data-swiper-parallax-opacity="0">
                            <div class="col-lg-7">

                                <div class="mil-hori-box mil-mb-60">
                                    <h3>{{ $item->heading }}</h3>
                                </div>

                                <div class="row mil-mb-60">
                                    <div class="col-lg-6">

                                        <p style="text-align: justify;">{{ $item->description }}</p>

                                    </div>
                                    <div class="col-lg-6">

                                        <p style="text-align: justify;">{{ $item->sub_head }}</p>

                                    </div>
                                </div>

                                <a href="{{ route('career.index') }}"
                                    class="mil-button mil-border mil-mb-15 mil-mr-30"><span>Hire UI/UX
                                        Designers</span></a>

                            </div>
                            <div class="col-lg-4">

                                <div class="mil-circle-illustration mil-with-dots mil-mb-60"
                                    data-swiper-parallax-scale=".8">
                                    <div class="mil-circle-bg"></div>
                                    <div class="mil-image-frame">
                                        <img src="{{ asset('assets/uploads/ui_service/icon/' . $item->icon) }}"
                                            alt="img">
                                    </div>
                                </div>

                            </div>
                        </div>

                    </div>
                @endforeach

            </div>
        </div>

        <div class="mil-tab-buttons mil-mt-60-adapt">
            @foreach ($ui_design as $index => $item)
                <a href="#tab{{ $index + 1 }}"><span>{{ $item->heading }}</span></a>
            @endforeach
        </div>

    </div>
</section>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        var tabs = document.querySelectorAll('.mil-tabs-left-nav a');
        var tabContents = document.querySelectorAll('.mil-tab-content');

        tabs.forEach(tab => {
            tab.addEventListener('click', function(event) {
                event.preventDefault();
                var index = this.getAttribute('data-index');

                // Remove active class from all tabs and contents
                tabs.forEach(tab => tab.classList.remove('mil-active'));
                tabContents.forEach(content => content.classList.remove('active'));

                // Add active class to the clicked tab and corresponding content
                this.classList.add('mil-active');
                document.querySelector('#tab-' + (parseInt(index) + 1)).classList.add('active');
            });
        });

        // Set initial active tab and content
        tabs[0].classList.add('mil-active');
        tabContents[0].classList.add('active');
    });
</script>
