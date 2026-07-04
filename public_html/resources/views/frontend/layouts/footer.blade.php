<!-- footer -->
 <style>
    @media only screen and (max-width: 500px) {
        .copyright {
            flex-direction: column;
        }
    }
 </style>
<footer class="mil-dark-bg">
    <img src="{{ asset('frontend/img/deco/map.webp') }}" alt="background" class="mil-footer-bg" loading="lazy">
    <div class="container">
        <div class="mil-footer-content">
            <div class="row align-items-center mil-p-120-60">
                <div class="col-xl-6 mil-mb-60">
                    <h3 class="mil-light mil-mb-15">Join The <span class="mil-accent">Creative IT Park</span>
                        Experience</h3>

                    <p class="mil-light-soft">Let's Get Your Project Started.</p>

                </div>
                <div class="col-xl-6 mil-mb-60">

                    <form action="{{ route('subscribe.store') }}" method="POST"
                        class="mil-subscribe-form">
                        @csrf
                        <input type="email" name="email" placeholder="Your email address">
                        <button type="submit" class="mil-button mil-accent-bg">Subscribe Now</button>
                    </form>

                </div>
            </div>
            <div class="mil-divider mil-light"></div>

            <!-- Editable -->
            <div class="footer-logo">
                <img src="{{ asset('footer/1729588527.webp') }}" alt="Creative IT Park logo"
                    class="mil-logo mil-mb-60" style="width: 140px; height: 40px;" loading="lazy">
            </div>
            <div class="row justify-content-between">
                <div class="">

                    <div class="row justify-content-between">
                        <div class="col-md-4 col-lg-4 mil-mb-60 footer-section"
                            style="color: rgba(255, 255, 255, 0.6);">

                            <h4 class="mil-list-title mil-light ">Pakistan</h4>

                            <h5 style="color: rgba(255, 255, 255, 0.6);">Islamabad</h5>
                            <p> <span style="color:rgb(219, 119, 18)">&rarr;</span> Plot no #14E, Fazal e Haq
                                Road,
                                G6/2, Blue Area, Islamabad.</p>
                            <p>
                                <span>
                                    <i class="fa fa-phone" style="color:rgb(219, 119, 18); margin-right: 10px;"></i>
                                    <span class="mil-light-soft" style="color:rgb(219, 119, 18)">+92 51
                                        2000033</span>
                                        
                                </span>
                            </p>
                             <p>
                                <span>
                                    <i class="fa fa-phone" style="color:rgb(219, 119, 18); margin-right: 10px;"></i>
                                    <span class="mil-light-soft" style="color:rgb(219, 119, 18)">+92 51
                                        2000034</span>
                                        
                                </span>
                            </p>


                            <br>
                            <p>
                            <h5 style="color: rgba(255, 255, 255, 0.6);">Rawalpindi</h5>
                            <p> <span style="color:rgb(219, 119, 18)">&rarr;</span> House no 4, street no 4,
                                Arjun Nagar, Pakistan.</p>
                            </p>
                            <br>
                            <p>
                                <span>
                                    <i class="fa fa-phone" style="color:rgb(219, 119, 18); margin-right: 10px;"></i>
                                    <span class="mil-light-soft" style="color:rgb(219, 119, 18)">+92 332
                                        5525283</span>
                                </span>
                            </p>

                            <ul>
                                <h6 class="mil-list-title mil-light mil-mb-60" style="color: rgb(219, 119, 18);">
                                    info@creativeitpark.org</h6>
                            </ul>
                        </div>
                        <div class="col-md-4 col-lg-4 mil-mb-60 footer-section">

                            <h4 class="mil-list-title mil-light ">Spain</h4>
                            <h5 style="color: rgba(255, 255, 255, 0.6);">Valencia</h5>
                            <p style="color: rgba(255, 255, 255, 0.6);">
                                <span style="color:rgb(219, 119, 18)">&rarr;</span> Near Historic Centre,
                                València. Spain
                            </p>
                            <br>
                            <p>
                                <span>
                                    <i class="fa fa-phone" style="color:rgb(219, 119, 18); margin-right: 10px;"></i>
                                    <span class="mil-light-soft" style="color:rgb(219, 119, 18)">+34 631 50 85
                                        01</span>
                                </span>
                            </p>

                        </div>

                        <div class="col-md-4 col-lg-4 mil-mb-60 footer-section">

                            <h4 class="mil-list-title mil-light ">Links</h4>

                            <ul class="mil-hover-link-list mil-light">
                                <li><a href="{{ route('index') }}">Home</a></li>
                                <li><a href="{{ route('about_us') }}">Who We Are</a></li>
                                <li><a href="{{ route('team') }}">Our Experts</a></li>
                                <li><a href="{{ route('portfolio') }}">Showcase</a></li>
                                <li><a href="{{ route('blog.index') }}">Blogs</a></li>
                                <li><a href="{{ route('experties') }}">Expertise</a></li>
                                <li><a href="{{ route('news') }}">News</a></li>
                                <li><a href="{{ route('career.index') }}">Career</a></li>
                            </ul>

                        </div>


                        <div class="col-md-4 col-lg-4 mil-mb-60 footer-section">

                            <h4 class="mil-list-title mil-light ">Support</h4>

                            <ul class="mil-hover-link-list mil-light">
                                <li>
                                    <a href="pdf/project.pdf" download="project-profile.pdf">Profile</a>
                                </li>
                                <li>
                                    <a href="https://wa.me/+923325525283" target="_blank">Support</a>
                                </li>
                                <li>
                                    <a href="{{ route('faqs') }}">FAQs</a>
                                </li>
                                <!--li>
                                    <a href="#.">Download</a>
                                </li>
                                <li>
                                    <a href="#.">Sitemap</a>
                                </li-->
                                <h4 class="mil-list-title mil-light  footer-section">Social</h4>
                                <p class="iconsocial-sm mil-text-sm mil-light d-flex ">
                                    <a href="https://m.facebook.com/creativeitparkofficial/" target="_blank"
                                        class="social-icon">
                                        <i class="fab fa-facebook"></i>
                                    </a>
                                    <a href="https://www.instagram.com/creative_it_park_offical2" target="_blank"
                                        class="social-icon">
                                        <i class="fab fa-instagram"></i>
                                    </a>
                                    <a href="https://www.linkedin.com/company/creative-it-park-pvt-ltd/?originalSubdomain=pk"
                                        target="_blank" class="social-icon">
                                        <i class="fab fa-linkedin"></i>
                                    </a>
                                    <a href="https://twitter.com/CreativeIT76529" target="_blank"
                                        class="social-icon"><span class="x-icon">X</span></a>
                                    <a href="https://www.threads.net/@creative_it_park_offical" target="_blank"
                                        class="social-icon">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"
                                            class="threads-icon" width="18" height="18">
                                            <path
                                                d="M331.5 235.7c2.2 .9 4.2 1.9 6.3 2.8c29.2 14.1 50.6 35.2 61.8 61.4c15.7 36.5 17.2 95.8-30.3 143.2c-36.2 36.2-80.3 52.5-142.6 53h-.3c-70.2-.5-124.1-24.1-160.4-70.2c-32.3-41-48.9-98.1-49.5-169.6V256v-.2C17 184.3 33.6 127.2 65.9 86.2C102.2 40.1 156.2 16.5 226.4 16h.3c70.3 .5 124.9 24 162.3 69.9c18.4 22.7 32 50 40.6 81.7l-40.4 10.8c-7.1-25.8-17.8-47.8-32.2-65.4c-29.2-35.8-73-54.2-130.5-54.6c-57 .5-100.1 18.8-128.2 54.4C72.1 146.1 58.5 194.3 58 256c.5 61.7 14.1 109.9 40.3 143.3c28 35.6 71.2 53.9 128.2 54.4c51.4-.4 85.4-12.6 113.7-40.9c32.3-32.2 31.7-71.8 21.4-95.9c-6.1-14.2-17.1-26-31.9-34.9c-3.7 26.9-11.8 48.3-24.7 64.8c-17.1 21.8-41.4 33.6-72.7 35.3c-23.6 1.3-46.3-4.4-63.9-16c-20.8-13.8-33-34.8-34.3-59.3c-2.5-48.3 35.7-83 95.2-86.4c21.1-1.2 40.9-.3 59.2 2.8c-2.4-14.8-7.3-26.6-14.6-35.2c-10-11.7-25.6-17.7-46.2-17.8H227c-16.6 0-39 4.6-53.3 26.3l-34.4-23.6c19.2-29.1 50.3-45.1 87.8-45.1h.8c62.6 .4 99.9 39.5 103.7 107.7l-.2 .2zm-156 68.8c1.3 25.1 28.4 36.8 54.6 35.3c25.6-1.4 54.6-11.4 59.5-73.2c-13.2-2.9-27.8-4.4-43.4-4.4c-4.8 0-9.6 .1-14.4 .4c-42.9 2.4-57.2 23.2-56.2 41.8l-.1 .1z" />
                                        </svg>
                                    </a>

                                </p>
                            </ul>
                        </div>

                    </div>

                </div>
            </div>
        </div>

    </div>
    <div class="mil-footer-bottom">
        <div class="container p-0 copyright">
            <p class="mil-text-sm mil-light">©Copyright 2025 by Creative It Park.</p>
            <div class="d-flex justify-content-end align-items-center position-relative">
                <p class="mil-text-sm mil-light text-center mb-0">All Rights Reserved.</p>
            </div>
        </div>
    </div>
<div id="google_translate_element" style="display: none"></div>
</footer>
<!-- footer end -->
