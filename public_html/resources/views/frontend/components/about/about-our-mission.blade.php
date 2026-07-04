<section class="mil-deep-bg mil-p-120-60">
    <div class="mil-deco" style="top: 0; right: 15%;"></div>
    <div class="container">
        <div class="row justify-content-between align-items-center about-p">
            <div class="col-lg-5 mil-mb-60">

                <div class="mil-circle-illustration">
                    <div class="mil-circle-bg"></div>
                    <div class="mil-image-frame">
                        <img src="{{ asset($about[5]['value'])}}" alt="img">
                    </div>
                </div>

            </div>
            <div class="col-lg-6 mil-mb-60">

                <span class="mil-suptitle mil-suptitle-2 mil-mb-30">{{$about[2]['value']}}</span>
                <h2 class="mil-mb-50">{{$about[1]['value']}}</h2>

                <p class="mil-mb-50 about-p" style="text-align: justify;">
                    {!!$about[4]['value']!!}</p>

                <ul class="mil-simple-list">
                    @foreach (explode(',', $about[3]['value']) as $item)
                        <li> {{$item }}</li>
                    @endforeach
                </ul>

            </div>
        </div>
    </div>
</section>