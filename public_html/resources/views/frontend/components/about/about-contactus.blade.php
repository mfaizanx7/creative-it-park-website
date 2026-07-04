



<section class="mil-contact mil-p-120-0">
    <div class="container">
        <div class="row justify-content-between">
            <div class="col-lg-8 col-xl-8 mil-mb-120">

                <form id="" action="{{route('career.store')}}" method="post" enctype="multipart/form-data">
                    @csrf

                    <h4 class="mil-mb-60"><span class="mil-accent">01.</span> Tell Us About Yourself</h4>

                    <div class="row">
                        <div class="col-lg-6">

                            <div class="mil-input-frame mil-dark-input mil-mb-30">
                                <label class="mil-h6 mil-dark"><span>First Name</span></label>
                                <input type="text" name="first_name" required placeholder="John">
                            </div>

                        </div>
                        <div class="col-lg-6">

                            <div class="mil-input-frame mil-dark-input mil-mb-30">
                                <label class="mil-h6"><span>Last Name</span></label>
                                <input type="text" name="last_name" required placeholder="Jones">
                            </div>

                        </div>
                        <div class="col-lg-6">

                            <div class="mil-input-frame mil-dark-input mil-mb-30">
                                <label class="mil-h6"><span>Email Address</span></label>
                                <input type="email" name="email" required placeholder="doe@mydomain.com">
                            </div>

                        </div>
                        <div class="col-lg-6">

                            <div class="mil-input-frame mil-dark-input mil-mb-30">
                                <label class="mil-h6"><span>Phone</span></label>
                                <input type="tel" name="phone" placeholder="Enter your phone number" required>
                            </div>

                        </div>
                        <div class="col-lg-6">


                            <div class="mil-input-frame mil-dark-input mil-mb-30">
                                <label class="mil-h6 mil-dark"><span>Company</span></label>
                                <input type="text" name="company" placeholder="Your company name" required>
                            </div>

                        </div>
                        <div class="col-lg-6 mil-mb-30">

                            <div class="mil-input-frame mil-dark-input mil-mb-30">
                                <label class="mil-h6 mil-dark"><span>Role</span></label>
                                <input type="text" name="role" placeholder="Your role">
                            </div>

                        </div>
                    </div>

                    <h4 class="mil-mb-60"><span class="mil-accent">02.</span> What Can We Help You With?</h4>

                    <div class="row">
                        <div class="col-lg-6 mil-mb-30">

                            <div class="mil-input-frame mil-dark-input mil-mb-30">
                                <label class="mil-h6 mil-dark"><span>Project Category</span></label>
                                <input type="text" name="category" placeholder="Product Design">
                            </div>

                        </div>
                    </div>

                    <h4 class="mil-mb-60"><span class="mil-accent">03.</span> Tell Us About Your Project</h4>

                    <div class="row">

                        <div class="col-lg-12">

                            <div class="mil-input-frame mil-dark-input mil-mb-30">
                                <label class="mil-h6"><span>Project Description</span></label>
                                <textarea placeholder="Your Message" name="message" class="mil-shortened" required></textarea>
                            </div>

                        </div>

                        <div class="col-lg-12">
                            <div class="mil-attach-frame mil-dark mil-mb-30">
                                <i class="fas fa-paperclip"></i>
                                <label class="mil-custom-file-input">
                                    <span>Attach your file</span>
                                    <input 
                                      type="file" 
                                      name="userfile"
                                      id="mil-file-input"
                                      accept="application/msword, application/vnd.ms-excel, application/vnd.ms-powerpoint,
                                      text/plain, application/pdf, image/*"
                                    >
                                 </label>
                                <p class="mil-text-sm mil-light-soft">up to 20MB</p>
                            </div>
                        </div>

                        <div class="col-lg-6 mil-mb-30">

                            <div class="mil-input-frame mil-dark-input mil-mb-30">
                                <label class="mil-h6 mil-dark"><span>Project Budget</span></label>
                                <input type="number" name="budget" placeholder="123">
                            </div>

                        </div>

                        <div class="col-lg-12">

                            <button type="submit" class="mil-button mil-border mil-fw"><span>Submit Now</span></button>

                        </div>

                    </div>
                    
                    <div class="alert-success" style="display: none;"><h5>Thanks, your message is sent successfully.</h5></div>
                    <div class="alert-error" style="display: none;"><h5>Error! Message could not be sent.</h5></div>
                </form>

            </div>
            <div class="col-lg-4 col-xl-3 mil-mb-120">

                {{-- <div class="mil-mb-60">
                    <h5 class="mil-list-title mil-mb-30">Support Request</h5>
                    <p class="mil-mb-20">Our experts are ready to answer your questions.</p>
                    <a href="{{url('contact')}}" class="mil-link mil-link-sm"><span>Support Now</span><i class="fas fa-arrow-right"></i></a>
                </div> --}}

                {{-- <div class="mil-divider mil-mb-60"></div> --}}

                <div class="mil-mb-60">
                    <div class="mil-icon-frame mil-icon-frame-md mil-icon-bg mil-mb-30">
                        <img src="{{asset('./frontend/img/icons/md/8.svg')}}" alt="icon">
                    </div>
                    <h5 class="mil-list-title mil-mb-30">Need Help?</h5>
                    <p>For technical questions or billing questions, please contact Customer Care.</p>
                </div>
                
                <div class="mil-divider mil-mb-60"></div>

                <div class="mil-mb-60">
                    <div class="mil-icon-frame mil-icon-frame-md mil-icon-bg mil-mb-30">
                        <img src="{{asset('./frontend/img/icons/md/9.svg')}}" alt="icon">
                    </div>
                    <h5 class="mil-list-title mil-mb-30">Needs More Info?</h5>
                    <p>For technical questions or billing questions, please contact Customer Care.</p>
                </div>

                {{-- <div class="mil-divider mil-mb-60"></div> --}}

               {{-- <div class="con">
               <a href="{{url('contact')}}" class="mil-link mil-link-sm mil-mb-15"><span>Legality Guide</span><i class="fas fa-arrow-right"></i></a><br>
                <a href="{{url('contact')}}" class="mil-link mil-link-sm"><span>Security Center</span><i class="fas fa-arrow-right"></i></a>

               </div> --}}
            </div>
        </div>
    </div>