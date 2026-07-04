<style>
    .mil-banner .mil-banner-content {
        font-style: normal;
    }

    @media only screen and (max-width: 640px) {
        .mil-button {
            height: 42px;
            width: 145px;
            font-weight: 400;
        }
        #HeroAnimation1 {
            opacity: 0.4;
        }
        .col-banner-text {
            text-align: center;
        }
        .bannerButtoncontainer {
            margin: auto;
        }
    }
</style>
<div class="mil-banner mil-top-space-0">

    <div class="mil-banner-slideshow w-100 " id="hero">

        <canvas id="HeroAnimation1"></canvas>

        <canvas id="HeroAnimationMouse"></canvas>

    </div>

    <div class="mil-banner-content">

        <div class="container">

            <div class="row align-items-center">

                <div class="col-xl-8 col-banner-text" >

                    <span class="mil-suptitle"><span class="mil-light">Welcome To</span> <span
                            class="mil-accent">Creative IT Park</span></span>

                    <h1 class="mil-mb-3"><span class="mil-uppercase mil-light">Driving Digital Innovation, <br>Scaling
                            Your Success</span></h1>

                    <div class="mil-flex-hori-center">

                        <div class="bannerButtoncontainer">

                            <a href="{{ route('career.index') }}"
                                class="mil-button mil-border mil-light banner-btn"><span>Let’s

                                    Talk</span></a>

                        </div>

                        {{-- <p class="mil-button-descr mil-light-soft">We provide excellent IT solutions for helping
                            --}}

                            {{-- your brand reach new heights.</p> --}}

                    </div>

                </div>

            </div>

        </div>

    </div>

</div>



{{-- <span class="mil-font-3 mil-accent">Creative IT Park</span> --}}