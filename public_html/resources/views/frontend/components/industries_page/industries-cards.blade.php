<section class="mil-p-120-60 cards">
    <div class="mil-deco" style="top: 0; right: 25%;"></div>
    <div class="container">
        <span class="mil-suptitle mil-suptitle-2 mil-mb-30">High Experience</span>
        <h2 class="mil-mb-120">Innovating Across <span class="mil-accent">Industries</span></h2>

        <div class="row">
            @foreach ($card_content as $card)
                <div class="col-md-6 col-xl-4">
                    <div class="mil-icon-box-2 mil-mb-60">
                        <div class="mil-icon-frame mil-icon-frame-md mil-icon-bg mil-mb-30">
                            <i class="fa {{ $card->icon }}"></i>
                        </div>
                        <div class="mil-box-text">
                            <h4 class="mil-mb-30">{{ $card->heading }}</h4>
                            <p class="mil-box-text mil-mb-30"></p>
                            <span class="card-detail">{!! $card->detail !!}</span>
                        </div>
                    </div>

                </div>
            @endforeach
        </div>
    </div>
</section>


<script>
    function truncateText(selector, maxLines) {
        document.querySelectorAll(selector).forEach(el => {
            let lineHeight = parseInt(window.getComputedStyle(el).lineHeight);
            let maxHeight = lineHeight * maxLines;

            if (el.scrollHeight > maxHeight) {
                el.style.height = maxHeight + "px";
                el.style.overflow = "hidden";
                el.style.textOverflow = "ellipsis";
            }
        });
    }

    document.addEventListener("DOMContentLoaded", function() {
        truncateText(".card-detail", 3);
    });
</script>
