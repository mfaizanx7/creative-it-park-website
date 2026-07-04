<!-- team -->
<section class="mil-team mil-p-120-60">
            <div class="container">
                <h3 class="mil-text-center mil-mb-120">MEET THE EXPERT TEAM <span class="mil-accent">.</span> </h3>
                <div class="row">
                    @foreach($teams as $team)
                    <div class="col-sm-6 col-lg-4">

                        <!--a href="team-single1.html" class="mil-team-card mil-mb-60"-->
                        <a href="#." class="mil-team-card mil-mb-60">
                            <div class="mil-image-frame mil-mb-30">
                                <img src="{{ asset('assets/uploads/team-images/' . $team->image) }}" alt="Team Member">
                                <div class="mil-team-circle"></div>
                            </div>
                            <h4 class="mil-mb-10">{{ $team->name }}</h4>
                            <p>{{ $team->roles->name }} </p>
                        </a>

                    </div>
                    @endforeach
                    
                </div>
            </div>
        </section>
        <!-- team end -->


        <div class="container">
            <div class="mil-divider"></div>
        </div>