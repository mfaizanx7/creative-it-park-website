<!-- banner -->
<div class="mil-banner-sm mil-deep-bg">
    <img src="{{asset('./frontend/img/deco/map.png')}}" alt="background" class="mil-background-image">
    <div class="mil-deco mil-deco-accent" style="top: 47%; right: 10%; transform: rotate(90deg)"></div>
    <div class="mil-banner-content">
        <div class="container mil-relative">
            <ul class="mil-breadcrumbs mil-mb-30">
                <li><a href="{{url('/')}}">Home</a></li>
                <li><a href="{{url('contact')}}">Contact Us</a></li>
            </ul>
            <h2 class="mil-uppercase"> Contact Us</h2>
        </div>
    </div>
</div>
<!-- banner end -->

<!-- contact -->
    <style>
        .con-frm input,#mil-file-input,textarea,.mil-checkbox{
            color:#000 !important;
        }
        .mil-checkbox{
            color: #000 !important;
            padding-block: 2px !important;
            padding: 2px !important;
            margin: 3px 3px 3px 4px !important;
            opacity:1 !important;
    }
    </style>
<section class="mil-contact con-frm mil-gradient-bg mil-p-120-0" style='background:#fff;color:#000;'>

            <div class="mil-deco mil-deco-accent" style="top: 0; right: 10%;"></div>
            <div class="container" >
                <h2 class="mil-dark mil-mb-90">Contact <span class="mil-accent">Us</span></h2>
                <form id="" action="{{route('contact.store')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-lg-6">

                            <div class="mil-input-frame mil-mb-30">
                                <label><span class="mil-dark">Name</span><span class="mil-accent">Required</span></label>
                                <input type="text" name="name" required placeholder="Enter Your Name Here">
                            </div>
                            <div class="mil-input-frame mil-mb-30">
                                <label><span class="mil-dark">Email Address</span><span class="mil-accent">Required</span></label>
                                <input type="email" name="email" required id="email" placeholder="Your Email">
                            </div>
                            <div class="mil-input-frame mil-mb-60">
                                <label><span class="mil-dark">Phone</span><span class="mil-dark-soft">Optional</span></label>
                                <input type="number" name="phone" placeholder="Your Phone" min="0">
                            </div>
                            <div class="mil-input-frame mil-mb-60">
                                <i class="fas fa-paperclip"></i>
                                <label class="mil-custom-file-input">
                                    <span>Attach your file</span>
                                    <input type="file" name="userfile" accept="application/msword, application/vnd.ms-excel, application/vnd.ms-powerpoint,
                                    text/plain, application/pdf, image/*" id="mil-file-input">
                                </label>
                                <p class="mil-text-sm mil-dark-soft">up to 20MB</p>
                            </div>

                        </div>
                        <div class="col-lg-6">

                            <div class="mil-input-frame mil-mb-30">
                                <label><span class="mil-dark">Your Message</span><span class="mil-accent">Required</span></label>
                                <textarea placeholder="Your Message" name="description"></textarea>
                            </div>
                            <p class="mil-text-sm mil-dark-soft mil-mb-15">We will process your personal information in accordance with our Privacy Policy.</p>

                            <div class="mil-checbox-frame mil-mb-60">
                                <input class="mil-checkbox" id="checkbox-1" type="checkbox" style="color:#000 !important;" name="agree" value="1" >
                                <label for="checkbox-1" class="mil-text-sm mil-dark">I would like to be contacted with news and updates about your <a href="#." class="mil-accent">events and services</a></label>
                            </div>

                        </div>
                        <div class="col-12">

                            <button type="submit" class="mil-button mil-accent-bg mil-fw mil-mb-60"><span>Send Message Now</span></button>

                        </div>
                    </div>
                    <div class="alert-success" style="display: none;"><h5>Thanks, your message is sent successfully.</h5></div>
                    <div class="alert-error" style="display: none;"><h5>Error! Message could not be sent.</h5></div>
                </form>
            </div>
        </section>
<!-- contact end -->

<!-- map -->
<div>
    <div class="mil-map-frame">
        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d48389.289421122936!2d-74.0577166!3d40.7107384!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c250aee3ee6da7%3A0xe8a316c6c836011f!2sBuddy&#39;s%20JC!5e0!3m2!1sen!2sua!4v1682071433844!5m2!1sen!2sua" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
    <div class="container"></div>
</div>
<!-- map end -->

<!-- contact info -->
<section class="mil-p-120-60">
    <div class="container">
        <div class="row">
            <div class="col-xl-4">

                <div class="mil-mb-60">
                    <h4 class="mil-mb-30">Spain</h4>
                    <h5 class="mil-list-title mil-mb-15">València</h5>
                    <p class="mil-mb-30">Near Historic Centre, València, SPAIN</p>
                    <div class="mil-divider mil-divider-left mil-mb-30"></div>

                    <h6 class="mil-mb-15"><span class="mil-accent">+ 34</span> 631 50 85 01</h6>
                    <h6><span class="mil-accent">info</span>@creativeitpark.org</h6>
                </div>

            </div>
            <div class="col-xl-4">

                <div class="mil-mb-60">
                    <h4 class="mil-mb-30">Pakistan</h4>
                    <h5 class="mil-list-title mil-mb-15">Islamabad</h5>
                    <p class="mil-mb-30">Plot no #14E, Fazal e Haq Road, G6/2, Blue Area, Islamabad</p>
                    <div class="mil-divider mil-divider-left mil-mb-30"></div>

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
                    <h6><span class="mil-accent">info</span>@creativeitpark.org</h6>
                </div>

            </div>
        </div>
    </div>
</section>
<!-- contact info end -->