 <!-- blog -->
 <section class="mil-blog mil-p-120-0">
    <div class="container">
        <div class="row justify-content-between">
            <div class="col-lg-8 col-xl-8 mil-mb-120">
                @foreach ($news as $item)
                    
                    <a href="#." class="mil-card mil-mb-60">
                        <div class="mil-cover-frame" id="first">
                            <img src="{{ asset('assets/uploads/news/' . $item->image) }}" alt="project">
                        </div>
                        <div class="mil-description">
                            <div class="mil-card-title">
                                <!-- <ul class="mil-dot-list mil-text-sm mil-mb-15">
                                    <li>Management</li>
                                    <li>29 Oct. 2023</li>
                                </ul> -->
                                <h4> {{$item->title}} </h4>
                            </div>
                            <div class="mil-card-text">
                                <p> {!!$item->description!!} </p>
                            </div>
                        </div>
                    </a>
                @endforeach
{{-- 
                <a href="#." class="mil-card mil-mb-60">
                    <div class="mil-cover-frame">
                        <img src="{{asset('./frontend/images/images/resource/news-6.jpeg')}}" alt="project">
                    </div>
                    <div class="mil-description">
                        <div class="mil-card-title">
                            <!-- <ul class="mil-dot-list mil-text-sm mil-mb-15">
                                <li>Management</li>
                                <li>29 Oct. 2023</li>
                            </ul> -->
                            <h4>MICROSOFT EXECUTIVES ABOUT MICROSOFT OFFICE SPECIALIZATION TRAINING IN PAKISTAN.</h4>
                        </div>
                        <div class="mil-card-text">
                            <p>MEETING WITH MICROSOFT EXECUTIVES ABOUT MICROSOFT OFFICE SPECIALIZATION TRAINING IN PAKISTAN.</p>
                        </div>
                    </div>
                </a>

                <a href="#." class="mil-card mil-mb-60">
                    <div class="mil-cover-frame">
                        <img src="{{asset('./frontend/images/images/resource/news-1.jpg')}}" alt="project">
                    </div>
                    <div class="mil-description">
                        <div class="mil-card-title">
                            <!-- <ul class="mil-dot-list mil-text-sm mil-mb-15">
                                <li>Management</li>
                                <li>29 Oct. 2023</li>
                            </ul> -->
                            <h4>SECRETARY HIGHER EDUCATION DEPARTMENT GOAJK</h4>
                        </div>
                        <div class="mil-card-text">
                            <p>MEETING WITH THE SECRETARY OF HIGHER EDUCATION DEPARTMENT GOAJK.</p>
                        </div>
                    </div>
                </a> --}}

                <div class="mil-divider mil-mb-60"></div>

                <div class="mil-pagination mil-hidden-arrows">
                    <div class="mil-slider-nav">
                        @if ($news->onFirstPage())
                            <div class="mil-slider-btn-prev mil-blog-prev" style="visibility: hidden;">
                                {{-- <i class="fas fa-arrow-left"></i><span class="mil-h6">Prev</span> --}}
                            </div>
                        @else
                            <div class="mil-slider-btn-prev mil-blog-prev">
                                <a href="{{ $news->previousPageUrl() }}">
                                    {{-- <i class="fas fa-arrow-left"></i><span class="mil-h6">Prev</span> --}}
                                </a>
                            </div>
                        @endif
                    </div>
                
                    <ul class="mil-pagination-numbers">
                        @foreach ($news->getUrlRange(1, $news->lastPage()) as $page => $url)
                            <li class="{{ $news->currentPage() == $page ? 'mil-active' : '' }}">
                                <a href="{{ $url }}">{{ $page }}</a>
                            </li>
                        @endforeach
                    </ul>
                
                    <div class="mil-slider-nav">
                        @if ($news->hasMorePages())
                            <div class="mil-slider-btn-next mil-blog-next">
                                <a href="{{ $news->nextPageUrl() }}">
                                    {{-- <span class="mil-h6">Next</span><i class="fas fa-arrow-right"></i> --}}
                                </a>
                            </div>
                        @else
                            <div class="mil-slider-btn-next mil-blog-next" style="visibility: hidden;">
                                {{-- <span class="mil-h6">Next</span><i class="fas fa-arrow-right"></i> --}}
                            </div>
                        @endif
                    </div>
                </div>
                

            </div>
            <div class="col-lg-4 col-xl-3 mil-mb-120">

                {{-- <div class="mil-mb-60">
                    <h5 class="mil-list-title mil-mb-30">About Creative IT Park</h5>
                    <p class="mil-mb-30">Our Vision is to expand globally and provide easy solutions to people around the world.</p>
                    <a href="#." class="mil-post-sm mil-mb-15">
                        <div class="mil-cover-frame"><img src="{{asset('./frontend/img/faces/1.jpg')}}" alt="cover"></div>
                        <div class="mil-description">
                            <h4 class="mil-font-3 mil-accent">Umair Aftab</h4>
                            <p class="mil-text-sm">CEO</p>
                        </div>
                    </a>
                </div> --}}
                <!-- <div class="mil-divider mil-mb-60"></div>
                <form class="mil-sidebar-input-frame mil-mb-60">
                    <input type="text" class="mil-sidebar-input" placeholder="Search here...">
                    <button type="submit"><i class="fas fa-search"></i></button>
                </form> -->
                <!--div class="mil-divider mil-mb-60"></div-->
                <!--div class="mil-mb-60">
                    <h5 class="mil-list-title mil-mb-30">Recent Posts</h5>
                    <a href="publication.html" class="mil-post-sm mil-mb-15">
                        <div class="mil-cover-frame"><img src="img/blog/6.jpg" alt="cover"></div>
                        <div class="mil-description">
                            <h6>The World’s Fastest 2 Qubit Qate</h6>
                        </div>
                    </a>
                    <a href="publication.html" class="mil-post-sm mil-mb-15">
                        <div class="mil-cover-frame"><img src="img/blog/5.jpg" alt="cover"></div>
                        <div class="mil-description">
                            <h6>Build Your Money Machine, Take Control</h6>
                        </div>
                    </a>
                    <a href="publication.html" class="mil-post-sm mil-mb-15">
                        <div class="mil-cover-frame"><img src="img/blog/4.jpg" alt="cover"></div>
                        <div class="mil-description">
                            <h6>Android App For Shaving Products Drive</h6>
                        </div>
                    </a>
                    <a href="publication.html" class="mil-post-sm mil-mb-15">
                        <div class="mil-cover-frame"><img src="img/blog/3.jpg" alt="cover"></div>
                        <div class="mil-description">
                            <h6>Positioning Your Self As a Pro Consultant</h6>
                        </div>
                    </a>
                </div-->
                {{-- <div class="mil-divider mil-mb-60"></div> --}}
                {{-- <div class="mil-mb-60">
                    <h5 class="mil-list-title mil-mb-30">Categories</h5>
                    <ul class="mil-hover-link-list">
                        <li>
                            <a href="#.">Business</a>
                        </li>
                        <li>
                            <a href="#.">Design</a>
                        </li>
                        <li>
                            <a href="#.">Development</a>
                        </li>
                        <li>
                            <a href="#.">Management</a>
                        </li>
                        <li>
                            <a href="#.">Software</a>
                        </li>
                    </ul>
                </div>
                <div class="mil-divider mil-mb-60"></div> --}}
                {{-- <div class="mil-mb-60">
                    <h5 class="mil-list-title mil-mb-30">Tags</h5>
                    <ul class="mil-tags">
                        <li><a href="#.">Business</a></li>
                        <li><a href="#.">Design</a></li>
                        <li><a href="#.">General</a></li>
                        <li><a href="#.">Development</a></li>
                        <li><a href="#.">Learning</a></li>
                    </ul>
                </div>
                <div class="mil-divider mil-mb-60"></div> --}}
                <div class="mil-mb-60">
                    <h5 class="mil-list-title mil-mb-30">Newsletter</h5>
                    <form class="mil-sidebar-input-frame">
                        <input type="text" class="mil-sidebar-input" placeholder="Your email address">
                        <button type="submit"><i class="fas fa-arrow-right"></i></button>
                    </form>
                </div>
                <div class="mil-divider mil-mb-60"></div>
                <h5 class="mil-list-title mil-mb-30">Contact us</h5>
                <p class="mil-mb-30">Get in touch with us today and let's bring your vision to life.</p>
                <a href="{{ route('career.index') }}" class="mil-link"><span>Send</span><i class="fas fa-arrow-right"></i></a>

            </div>
        </div>
    </div>
</section>

<!-- blog end -->