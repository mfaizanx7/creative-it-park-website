<style>
    .mil-tab-content {
    display: none;
}

.mil-tab-content.active {
    display: block;
}

</style>
<section class="mil-p-120-60">
    <div class="mil-deco" style="top: 0; right: 15%;"></div>
    <div class="container">
        <span class="mil-suptitle mil-suptitle-2 mil-mb-30">All Devices</span>
        <h2 class="mil-mb-90"><span class="mil-accent">End-to-End</span> Mobile Development Services</h2>
        <div class="row justify-content-between align-items-center">
            <div class="col-lg-5">
                <ul class="mil-tabs-left-nav mil-mb-60">
                    @foreach ($app_end as $index => $item)
                        <li><a href="#tab-{{ $index + 1 }}" class="mil-h4" data-index="{{ $index }}">{{ $item->heading }}</a></li>
                    @endforeach
                </ul>
            </div>
            <div class="col-lg-6">
                <div class="mil-tabs-content">
                    @foreach ($app_end as $index => $item)
                        <div class="mil-tab-content" id="tab-{{ $index + 1 }}" data-index="{{ $index }}">
                            <div class="mil-icon-frame mil-icon-bg mil-icon-frame-md mil-mb-30">
                                <img src="{{ asset('assets/uploads/app_service/icon/' . $item->icon) }}" alt="icon">
                            </div>
                            <div class="mil-mb-30">
                                <p style="text-align: justify;">{{ $item->description }}</p>
                            </div>
                            <!--a href="about.html" class="mil-link"><span>See More</span><i class="fas fa-arrow-right"></i></a-->
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>

<div class="container">
    <div class="mil-divider"></div>
</div>
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
