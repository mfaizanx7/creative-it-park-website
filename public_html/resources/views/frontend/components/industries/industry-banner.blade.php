 <!-- banner -->
 <div class="mil-banner-sm mil-deep-bg">
            <img src="{{asset('./frontend/img/deco/map.png')}}" alt="background" class="mil-background-image">
            <div class="mil-deco mil-deco-accent" style="top: 47%; right: 10%; transform: rotate(90deg)"></div>
            <div class="mil-banner-content">
                <div class="container mil-relative">
                    <ul class="mil-breadcrumbs mil-mb-30">
                        <li><a href="{{('/')}}">Home</a></li>
                        <li><a href="service-1.html">Industries</a></li>
                    </ul>
                    <h2 class="mil-uppercase"> {{$industry_slug->heading}}</h2>
                </div>
            </div>
        </div>
        <!-- banner end -->

         <!-- call to action -->
         <section class="mil-p-120-90">
            <div class="mil-deco" style="bottom: 0; right: 25%; transform: rotate(180deg)"></div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="mil-hori-box mil-mb-30">
                            <div class="mil-mr-30">
                                <div class="mil-icon-frame mil-icon-frame-md mil-icon-bg">
                                    <img src="{{asset('./frontend/img/icons/md/1.svg')}}" alt="icon">
                                </div>
                            </div>
                            <h5 style="text-align: justify;">Creative IT Park is a software company for professionals who seek passion in the world of IT. Creative IT Park integrates technology and human potential to provide intelligent business solutions for entrepreneurs and enterprises.</h5>
                        </div>
                    </div>
                    <div class="col-lg-4">

                        <div class="mil-adaptive-right">
                            <a href="{{ route('career.index') }}" class="mil-button mil-border mil-mb-30"><span>Get in Touch</span></a>
                        </div>

                    </div>
                </div>
            </div>
        </section>
        <!-- call to action end -->

        <div class="container">
            <div class="mil-divider"></div>
        </div>


        <section>
            <div class="mil-deco" style="bottom: 0; right: 25%; transform: rotate(180deg)"></div>
            <div class="container" style="padding-top: 40px; padding-bottom: 70px;">
                <div class="row">
                    <div class="col-sm-4">
                            <!--div class="mil-mr-30">
                                <div class="mil-icon-frame mil-icon-frame-md mil-icon-bg">
                                    <img src="img/icons/md/1.svg" alt="icon">
                                </div>
                            </div-->
                            <div class="mil-project-cover">
                            <img class="img-responsive" style="float:left;width:360px; height: 233px;" src="{{ asset('assets/uploads/industry/' . $industry_slug->image) }}">
                            </div>
                     </div>
                            <div class="col-sm-8">
                            <p style="text-align: justify; padding-left: 30px;">
                                {{-- {!!$industry_slug->detail!!} --}}
                                {!!$industry_slug->detail!!}

                            </p>
                            </div>
                    
                </div>
            </div>
        </section>