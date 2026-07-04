<section class="mil-deep-bg mil-p-120-60">
    <div class="mil-deco" style="top: 0; left: 35%;"></div>
    <div class="container">
        <div class="row justify-content-between align-items-center">
            <div class="col-lg-5 mil-mb-60">

                <div class="mil-circle-illustration">
                    <div class="mil-circle-bg"></div>
                    <div class="mil-image-frame">
                        {{-- <img src="{{ asset($about[10]['value'])}}" alt="img"> --}}
                        <img src="{{ asset('assets/uploads/team-images/SirUmairAbout2.png')}}" style="transform: scaleX(-1);" alt="img">
                    </div>
                </div>

            </div>
            <div class="col-lg-6">

                <span class="mil-suptitle mil-suptitle-2 mil-mb-30">{{$about[7]['value']}}</span>
                <h2 class="mil-mb-50">{{$about[6]['value']}}</h2>

                <p class="mil-mb-50" style="text-align: justify;">
                   {!!$about[8]['value']!!} </p>

                <div class="row align-items-end">

                    <div class="col-xl-7">

                        <ul class="mil-check-icon-list mil-mb-60">
                            @foreach (explode(',', $about[9]['value']) as $item)
                            <li>
                                <img src="{{asset('./frontend/img/icons/sm/12.svg')}}" alt="icon">
                                <span class="mil-dark"> {{$item}} </span>
                            </li>
                            @endforeach
                            {{-- <li>
                                <img src="{{asset('./frontend/img/icons/sm/12.svg')}}" alt="icon">
                                <span class="mil-dark">Expertise in the Digital Landscape.</span>
                            </li>
                            <li>
                                <img src="{{asset('./frontend/img/icons/sm/12.svg')}}" alt="icon">
                                <span class="mil-dark">Embrace Change and Innovation.</span>
                            </li>
                            <li>
                                <img src="{{asset('./frontend/img/icons/sm/12.svg')}}" alt="icon">
                                <span class="mil-dark">Turning Dreams into Reality</span>
                            </li> --}}
                        </ul>

                    </div>
                    <!--div class="col-xl-5">

                        <a href="team-single.html" class="mil-post-sm mil-mb-60">
                            <div class="mil-cover-frame"><img src="img/faces/1.jpg" alt="cover"></div>
                            <div class="mil-description">
                                <h4 class="mil-font-3 mil-accent">Umair Aftab</h4>
                                <p class="mil-text-sm">CEO & Co-Founder</p>
                            </div>
                        </a>

                    </div-->

                </div>

            </div>
        </div>
    </div>
</section>