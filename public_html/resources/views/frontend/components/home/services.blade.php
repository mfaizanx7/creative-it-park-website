<section class="mil-services mil-deep-bg mil-p-120-120 white">
    <!-- <div class="mil-deco" style="top: 0; right: 20%;"></div> -->

    <style>
        .sr-only {
            position: absolute;
            width: 1px;
            height: 1px;
            padding: 0;
            margin: -1px;
            overflow: hidden;
            clip: rect(0, 0, 0, 0);
            white-space: nowrap;
            border: 0;
        }

        @media only screen and (max-width: 768px) {
            .container-services .navigation {
                padding: 0rem;
            }
        }
    </style>
    <div class="container w-100 mil-relative p-0">
        <div class="spacing bg-white"></div>
        <div class="container-services">
            {{-- <button class="LastCardBtn" id="LastCardBtn"><i class="fas fa-angle-double-right"></i></button> --}}
            <div class="column align-items-center headings">
                <div class="col-md-6 col-xl-6 headingText">
                    <span class="mil-suptitle mil-suptitle-2 mil-mb-30">Our Services and Solutions</span>
                    <h2>Business <span class="mil-accent">Success</span> With Technology</h2>
                </div>
                <div class="col-md-6 col-xl-6 navigation">

                    <div class="mil-adaptive mil-mt-60-adapt">
                        <div class="mil-slider-nav">
                            <div class="mil-slider-btn-prev mil-services-prev"><i class="fas fa-arrow-left"></i><span
                                    class="mil-h6">Prev</span></div>
                            <div class="mil-slider-btn-next mil-services-next"><span class="mil-h6">Next</span><i
                                    class="fas fa-arrow-right"></i></div>
                        </div>
                    </div>

                </div>
            </div>
            <div class="swiper-container mil-services-slider">
                <div class="swiper-wrapper">
                    <div class="swiper-slide mobile-fix"></div>
                    <div class="swiper-slide">
                        <div class="mil-hover-card" class="font">
                            <div class="mil-card-header">
                                <h4 class="mil-mb-30">Website Development</h4>
                                <p class="mil-mb-50">We create customized websites, leveraging our virtual
                                    expertise
                                    for
                                    optimal service showcasing.</p>
                                <div class="mil-divider mil-divider-left mil-mb-50"></div>
                            </div>
                            <ul class="mil-simple-list mil-mb-50">
                                <li>Analysis and WireFraming.</li>
                                <li>Designing and Development.</li>
                                <li>Deploy</li>
                                <li>Maintenance.</li>
                            </ul>
                            <a href="{{ url('services-web') }}" class="mil-link">
                                <span>Learn More</span>
                                <span class="sr-only"> about Web Development Services</span>
                                <i class="fas fa-arrow-right"></i>
                            </a>
                        </div>

                    </div>
                    <div class="swiper-slide">

                        <div class="mil-hover-card">
                            <div class="mil-card-header">
                                <h4 class="mil-mb-30"> Mobile App Development</h4>
                                <p class="mil-mb-50">We develop interactive games and responsive mobile apps for
                                    providing an amazing user experience to our clients.</p>
                                <div class="mil-divider mil-divider-left mil-mb-50"></div>
                            </div>
                            <ul class="mil-simple-list mil-mb-50">
                                <li>Responsive, Optimised & Secure.</li>
                                <li>Tech Stack.</li>
                                <li>Use APIs & Algorithms</li>
                                <li>Immersive & Engaging</li>
                            </ul>
                            <a href="{{ url('services-app') }}" class="mil-link">
                                <span>Learn More</span>
                                <span class="sr-only"> Explore Our App Development Services</span>
                                <i class="fas fa-arrow-right"></i>
                            </a>
                        </div>

                    </div>
                    <div class="swiper-slide">

                        <div class="mil-hover-card">
                            <div class="mil-card-header">
                                <h4 class="mil-mb-30">UI/UX Design</h4>
                                <p class="mil-mb-50">We excel in crafting creative mobile apps, UI, and UX
                                    designs
                                    with
                                    a passion for quality, ensuring 100% satisfaction in all tasks.</p>
                                <div class="mil-divider mil-divider-left mil-mb-50"></div>
                            </div>
                            <ul class="mil-simple-list mil-mb-50">
                                <li>Analysis.</li>
                                <li>Visualize and Organize the idea.</li>
                                <li>Creative direction.</li>
                                <li>Polished Delivery</li>
                            </ul>
                            {{-- <a href="{{ url('service-ui-ux') }}" aria-label="Discover Our UI/UX Design Services"
                                class="mil-link"><span>Learn More</span><i class="fas fa-arrow-right"></i></a> --}}
                            <a href="{{ url('services-ui-ux') }}" class="mil-link">
                                <span>Learn More</span>
                                <span class="sr-only"> Discover Our UI/UX Design Services</span>
                                <i class="fas fa-arrow-right"></i>
                            </a>
                        </div>

                    </div>
                    <div class="swiper-slide">

                        <div class="mil-hover-card">
                            <div class="mil-card-header">
                                <h4 class="mil-mb-30">Cloud Computing</h4>
                                <p class="mil-mb-50">Cloud computing provides on-demand access, scalability, and
                                    efficiency for transformative business operations worldwide.</p>
                                <div class="mil-divider mil-divider-left mil-mb-50"></div>
                            </div>
                            <ul class="mil-simple-list mil-mb-50">
                                <li>On-demand access anytime.</li>
                                <li>Business enablement.</li>
                                <li>Innovative technology.</li>
                                <li>Computing resources.</li>
                            </ul>
                            {{-- <a href="{{ url('service-cloud') }}" aria-label="Cloud Services Information"
                                class="mil-link"><span>Learn More</span><i class="fas fa-arrow-right"></i></a> --}}
                            <a href="{{ url('services-cloud') }}" class="mil-link">
                                <span>Learn More</span>
                                <span class="sr-only"> Cloud Services Information</span>
                                <i class="fas fa-arrow-right"></i>
                            </a>
                        </div>

                    </div>
                    <div class="swiper-slide">

                        <div class="mil-hover-card">
                            <div class="mil-card-header">
                                <h4 class="mil-mb-30">Server Management</h4>
                                <p class="mil-mb-50">Efficient server management for seamless operations,
                                    ensuring
                                    optimal performance, security, and reliability to meet your business's
                                    unique
                                    needs
                                </p>
                                <div class="mil-divider mil-divider-left mil-mb-50"></div>
                            </div>
                            <ul class="mil-simple-list mil-mb-50">
                                <li>Efficient server management.</li>
                                <li>Seamless operations.</li>
                                <li>Peak Operations</li>
                                <li>Customized Solutions</li>
                            </ul>
                            <a href="#!" class="mil-link"><span>Learn More</span><i class="fas fa-arrow-right"></i></a>
                        </div>

                    </div>
                    <div class="swiper-slide">

                        <div class="mil-hover-card">
                            <div class="mil-card-header">
                                <h4 class="mil-mb-30">Social Media</h4>
                                <p class="mil-mb-50">Social media connects users globally, enabling content
                                    sharing,
                                    communication, and networking for personal and professional interactions</p>
                                <div class="mil-divider mil-divider-left mil-mb-50"></div>
                            </div>
                            <ul class="mil-simple-list mil-mb-50">
                                <li>Global Connectivity Worldwide Reach </li>
                                <li>Content sharing.</li>
                                <li>Communication hub</li>
                                <li>Professional engagements</li>
                            </ul>
                            <a href="#!" class="mil-link"><span>Learn More</span><i
                                    class="fas fa-arrow-right"></i></a>
                        </div>

                    </div>

                    <div class="swiper-slide">

                        <div class="mil-hover-card">
                            <div class="mil-card-header">
                                <h4 class="mil-mb-30">Graphic Designing</h4>
                                <p class="mil-mb-50">
                                    We craft graphics for social media, websites, and high-end motion creatively
                                    conveying your message for online presence.</p>
                                <div class="mil-divider mil-divider-left mil-mb-50"></div>
                            </div>
                            <ul class="mil-simple-list mil-mb-50">
                                <li>Research the Design Ecosystem.</li>
                                <li> Refine graphic concept</li>
                                <li>Create the Design.</li>
                                <li>Deliver the Design Assets.</li>
                            </ul>
                            <a href="#!" class="mil-link"><span>Learn More</span><i
                                    class="fas fa-arrow-right"></i></a>
                        </div>

                    </div>
                    <div class="swiper-slide">

                        <div class="mil-hover-card">
                            <div class="mil-card-header">
                                <h4 class="mil-mb-30">SEO and Optimazation</h4>
                                <p class="mil-mb-50">
                                    Optimize SEO and content for website visibility, ensuring success in the
                                    digital
                                    landscape.</p>
                                <div class="mil-divider mil-divider-left mil-mb-50"></div>
                            </div>
                            <ul class="mil-simple-list mil-mb-50">
                                <li>Site Assessment,Development.</li>
                                <li>Onsite/offsite Optimization.</li>
                                <li>Citation Submission</li>
                                <li>Ongoing & Advanced SEO.</li>
                            </ul>
                            <a href="#!" class="mil-link"><span>Learn More</span><i
                                    class="fas fa-arrow-right"></i></a>
                        </div>

                    </div>
                    <div class="swiper-slide">

                        <div class="mil-hover-card">
                            <div class="mil-card-header">
                                <h4 class="mil-mb-30">Content Writing</h4>
                                <p class="mil-mb-50">Content writing crafts engaging material to enhance brand
                                    communication and connect with the audience effectively.</p>
                                <div class="mil-divider mil-divider-left mil-mb-50"></div>
                            </div>
                            <ul class="mil-simple-list mil-mb-50">
                                <li>Captivating and Engaging Content</li>
                                <li>Informative material</li>
                                <li>Brand communication</li>
                                <li>Audience connection</li>
                            </ul>
                            {{-- <a href="{{ url('content_writing') }}" aria-label="Content Writing Services"
                                class="mil-link"><span>Learn More</span><i class="fas fa-arrow-right"></i></a> --}}
                            <a href="{{ url('content_writing') }}" class="mil-link">
                                <span>Learn More</span>
                                <span class="sr-only"> Content Writing Services</span>
                                <i class="fas fa-arrow-right"></i>
                            </a>
                        </div>

                    </div>



                    <div class="swiper-slide">

                        <div class="mil-hover-card">
                            <div class="mil-card-header">
                                <h4 class="mil-mb-30">Analytics and Research</h4>
                                <p class="mil-mb-50">Tech teams innovate solutions, delivering excellence across
                                    services.</p>
                                <div class="mil-divider mil-divider-left mil-mb-50"></div>
                            </div>
                            <ul class="mil-simple-list mil-mb-50">
                                <li>Accelerate innovation.</li>
                                <li>With world-class tech teams.</li>
                                <li>Enhancing Services.</li>
                                <li>Simply drag, drop and customize.</li>
                            </ul>
                            <a href="" class="mil-link"><span>Learn More</span><i
                                    class="fas fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
