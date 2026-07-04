<!-- Top Bar -->

<style>
    .mobile-responsive-buttons {
        display: none;
    }

    @media only screen and (max-width: 1200px) {
        .mobile-responsive-buttons {
            display: flex;
            align-items: center;
            gap: 1rem;
        }

        .languageDesktop {
            display: none;
        }
    }
</style>

<div class="mil-top-position mil-fixed" role="navigation" aria-label="Main Navigation">

    <div class="mil-top-panel mil-top-panel-transparent mil-animated">

        <div class="container" style="align-items: center">

            <!-- Logo -->

            <a href="{{ url('/') }}" class="mil-logo" style="width: 140px;" aria-label="Home"></a>



            <!-- Navigation -->

            <div class="mil-navigation" style="align-items: center">

                <nav>

                    <ul style="align-items: center">

                        {{-- <li><a href="{{ url('/') }}">Home</a></li> --}}

                        <li><a href="{{ route('about_us') }}">Who We Are</a></li>

                        <li><a href="{{ route('team') }}">Our Experts</a></li>

                        <li><a href="{{ route('products') }}">Our Products</a></li>

                        <li class="mil-has-children" id="serviceLink" aria-haspopup="true">

                            <a href="{{ route('services') }}">Services</a>

                            <ul>

                                <li><a href="{{ route('services-web') }}">Website Development</a></li>

                                <li><a href="{{ route('service-app') }}">Mobile App Development</a></li>

                                <li><a href="{{ url('service-ui-ux') }}">UI/UX Design</a></li>

                                <li><a href="{{ url('service-cloud') }}">Cloud Computing</a></li>

                                <li><a href="{{ url('server-management') }}">Server Management</a></li>

                                <li><a href="{{ url('social-media') }}">Social Media Marketing</a></li>

                                <li><a href="{{ url('service-graphic') }}">Graphic Designing</a></li>

                                <li><a href="{{ url('service-seo') }}">SEO and Optimization</a></li>

                                <li><a href="{{ url('content_writing') }}">Content Writing</a></li>

                            </ul>

                        </li>

                        <li class="mil-has-children" id="industryLink" aria-haspopup="true">

                            <a href="{{ route('industries') }}">Industries</a>

                            <ul>

                                <li><a href="{{ url('/industry/educational-services') }}">Educational Services</a></li>

                                <li><a href="{{ url('/industries/public-sector') }}">Public Sectors</a></li>

                                <li><a href="{{ url('/industries/arts') }}">Arts and Recreation</a></li>

                                <li><a href="{{ url('/industries/food-services') }}">Food Services</a></li>

                                <li><a href="{{ url('/industries/health-care') }}">Health Care</a></li>

                                <li><a href="{{ url('/industries/real-estate') }}">Real Estate</a></li>

                            </ul>

                        </li>

                        <li><a href="{{ route('portfolio') }}">Portfolio</a></li>

                        <li><a href="{{ route('news') }}">News</a></li>

                        <li><a href="{{ url('/blog') }}">Blogs</a></li>

                        <li><a href="{{ route('career.index') }}">Contact Us</a></li>



                        {{-- lang selector --}}



                        <li class="languageDesktop">

                            <div class="dropdown languageDropdown" id="languageDropdown" style="margin-left: 1.2rem;">

                                {{-- <a href=""> --}}

                                    <button class="dropdown-button" onclick="toggleDropdown(event)" style="gap: 6px;">

                                        {{-- <img id="selectedFlag" src="https://flagcdn.com/w40/gb.png" alt="English">
                                        --}}

                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
                                            stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round" style="flex-shrink: 0;">

                                            <circle cx="12" cy="12" r="10"></circle>

                                            <line x1="2" y1="12" x2="22" y2="12"></line>

                                            <path
                                                d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z">
                                            </path>

                                        </svg>

                                        <a  href="#!" class="languageText" translate="no" style="font-size: 15px;"></a>

                                    </button>

                                    <div class="dropdown-content notranslate" translate="no">

                                        <a href="#!" onclick="selectLanguage('ar', 'eg', 'العربية')">

                                            <span class="flag"><img src="https://flagcdn.com/w20/eg.png"
                                                    alt="Arabic"></span> العربية

                                        </a>

                                        <a href="#!" onclick="selectLanguage('ur', 'pk', 'اردو')">

                                            <span class="flag"><img src="https://flagcdn.com/w20/pk.png"
                                                    alt="Urdu"></span> اردو

                                        </a>

                                        <a href="#!" onclick="selectLanguage('zh', 'cn', '中文')">

                                            <span class="flag"><img src="https://flagcdn.com/w20/cn.png"
                                                    alt="Chinese"></span> 中文

                                        </a>

                                        <a href="#!" onclick="selectLanguage('nl', 'nl', 'Nederlands')">

                                            <span class="flag"><img src="https://flagcdn.com/w20/nl.png"
                                                    alt="Dutch"></span> Nederlands

                                        </a>

                                        <a href="#!" onclick="selectLanguage('en', 'gb', 'English')">

                                            <span class="flag"><img src="https://flagcdn.com/w20/gb.png"
                                                    alt="English"></span> English

                                        </a>

                                        <a href="#!" onclick="selectLanguage('fr', 'fr', 'Français')">

                                            <span class="flag"><img src="https://flagcdn.com/w20/fr.png"
                                                    alt="French"></span> Français

                                        </a>

                                        <a href="#!" onclick="selectLanguage('de', 'de', 'Deutsche')">

                                            <span class="flag"><img src="https://flagcdn.com/w20/de.png"
                                                    alt="German"></span> Deutsche

                                        </a>

                                        <a href="#!" onclick="selectLanguage('hi', 'in', 'हिंदी')">

                                            <span class="flag"><img src="https://flagcdn.com/w20/in.png"
                                                    alt="Hindi"></span> हिंदी

                                        </a>

                                        <a href="#!" onclick="selectLanguage('it', 'it', 'Italiano')">

                                            <span class="flag"><img src="https://flagcdn.com/w20/it.png"
                                                    alt="Italian"></span> Italiano

                                        </a>

                                        <a href="#!" onclick="selectLanguage('pt', 'pt', 'Português')">

                                            <span class="flag"><img src="https://flagcdn.com/w20/pt.png"
                                                    alt="Portuguese"></span> Português

                                        </a>

                                        <a href="#!" onclick="selectLanguage('ru', 'ru', 'Русский')">

                                            <span class="flag"><img src="https://flagcdn.com/w20/ru.png"
                                                    alt="Russian"></span> Русский

                                        </a>

                                        <a href="#!" onclick="selectLanguage('sv', 'se', 'Svenska')">

                                            <span class="flag"><img src="https://flagcdn.com/w20/se.png"
                                                    alt="Swedish"></span> Svenska

                                        </a>

                                    </div>

                                    {{--
                                </a> --}}

                            </div>

                        </li>



                        {{-- lang selector end --}}

                    </ul>

                </nav>

            </div>


            <!-- Mobile Menu Button -->
            <div class="mobile-responsive-buttons">

                <div class="dropdown languageDropdown" id="languageDropdown" style="margin-left: 1.2rem;">

                    {{-- <a href=""> --}}

                        <button class="dropdown-button" onclick="toggleDropdown(event)" style="gap: 6px;">

                            {{-- <img id="selectedFlag" src="https://flagcdn.com/w40/gb.png" alt="English">
                            --}}

                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
                                stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                style="flex-shrink: 0;">

                                <circle cx="12" cy="12" r="10"></circle>

                                <line x1="2" y1="12" x2="22" y2="12"></line>

                                <path
                                    d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z">
                                </path>

                            </svg>


                        </button>

                        <div class="dropdown-content notranslate" translate="no">

                            <a href="#!" onclick="selectLanguage('ar', 'eg', 'العربية')">

                                <span class="flag"><img src="https://flagcdn.com/w20/eg.png" alt="Arabic"></span>
                                العربية

                            </a>

                            <a href="#!" onclick="selectLanguage('ur', 'pk', 'اردو')">

                                <span class="flag"><img src="https://flagcdn.com/w20/pk.png" alt="Urdu"></span> اردو

                            </a>

                            <a href="#!" onclick="selectLanguage('zh', 'cn', '中文')">

                                <span class="flag"><img src="https://flagcdn.com/w20/cn.png" alt="Chinese"></span> 中文

                            </a>

                            <a href="#!" onclick="selectLanguage('nl', 'nl', 'Nederlands')">

                                <span class="flag"><img src="https://flagcdn.com/w20/nl.png" alt="Dutch"></span>
                                Nederlands

                            </a>

                            <a href="#!" onclick="selectLanguage('en', 'gb', 'English')">

                                <span class="flag"><img src="https://flagcdn.com/w20/gb.png" alt="English"></span>
                                English

                            </a>

                            <a href="#!" onclick="selectLanguage('fr', 'fr', 'Français')">

                                <span class="flag"><img src="https://flagcdn.com/w20/fr.png" alt="French"></span>
                                Français

                            </a>

                            <a href="#!" onclick="selectLanguage('de', 'de', 'Deutsche')">

                                <span class="flag"><img src="https://flagcdn.com/w20/de.png" alt="German"></span>
                                Deutsche

                            </a>

                            <a href="#!" onclick="selectLanguage('hi', 'in', 'हिंदी')">

                                <span class="flag"><img src="https://flagcdn.com/w20/in.png" alt="Hindi"></span> हिंदी

                            </a>

                            <a href="#!" onclick="selectLanguage('it', 'it', 'Italiano')">

                                <span class="flag"><img src="https://flagcdn.com/w20/it.png" alt="Italian"></span>
                                Italiano

                            </a>

                            <a href="#!" onclick="selectLanguage('pt', 'pt', 'Português')">

                                <span class="flag"><img src="https://flagcdn.com/w20/pt.png" alt="Portuguese"></span>
                                Português

                            </a>

                            <a href="#!" onclick="selectLanguage('ru', 'ru', 'Русский')">

                                <span class="flag"><img src="https://flagcdn.com/w20/ru.png" alt="Russian"></span>
                                Русский

                            </a>

                            <a href="#!" onclick="selectLanguage('sv', 'se', 'Svenska')">

                                <span class="flag"><img src="https://flagcdn.com/w20/se.png" alt="Swedish"></span>
                                Svenska

                            </a>

                        </div>

                        {{--
                    </a> --}}

                </div>

                <button class="mil-menu-btn" aria-label="Toggle Menu">

                    <span></span>

                </button>
            </div>

        </div>

    </div>



    <!-- Mega Menu for Services -->

    <div class="bg-white">

        <ul class="MegaMenu container" id="ServicesMenu">

            <div id="megaMenuIconService">

                <i class="fas fa-cogs" id="megaMenuIcon"></i>

            </div>

            <div class="parentList">

                <div>

                    {{-- <li class="megaMenuItem"><a href="{{ url('/services/all') }}">All Services</a></li> --}}

                    <li class="megaMenuItem"><a href="{{ route('services-web') }}">Website Development</a>

                    </li>

                    <li class="megaMenuItem"><a href="{{ route('service-app') }}">Mobile App

                            Development</a></li>

                    <li class="megaMenuItem"><a href="{{ url('service-ui-ux') }}">UI/UX Design</a></li>

                    <li class="megaMenuItem"><a href="{{ url('content_writing') }}">Content Writing</a></li>

                </div>

                <div>

                    <li class="megaMenuItem"><a href="{{ url('service-cloud') }}">Cloud Computing</a></li>

                    <li class="megaMenuItem"><a href="{{ url('server-management') }}">Server Management</a>

                    </li>

                    <li class="megaMenuItem"><a href="{{ url('social-media') }}">Social Media

                            Marketing</a></li>

                    <li class="megaMenuItem"><a href="{{ url('service-graphic') }}">Graphic Designing</a></li>

                </div>

                <div>

                    <li class="megaMenuItem"><a href="{{ url('service-seo') }}">SEO and Optimization</a></li>

                </div>

            </div>

        </ul>

    </div>



    <!-- Mega Menu for Industries -->

    <div class="bg-white">

        <ul class="MegaMenu container" id="IndustriesMenu">

            <div id="megaMenuIconIndustry">

                <i class="fas fa-cogs" id="megaMenuIcon"></i>

            </div>

            <div class="parentList">

                <div>

                    <li class="megaMenuItem"><a href="{{ url('/industry/educational-services') }}">Educational

                            Services</a></li>

                    <li class="megaMenuItem"><a href="{{ url('/industry/public-sectors') }}">Public Sectors</a></li>

                    <li class="megaMenuItem"><a href="{{ url('/industry/e-commerce') }}">E-Commerce</a></li>

                </div>

                <div>

                    <li class="megaMenuItem"><a href="{{ url('/industry/fashion-beauty') }}">Fashion & Beauty</a>

                    </li>

                    <li class="megaMenuItem"><a href="{{ url('/industry/health-care') }}">Health Care</a></li>

                    <li class="megaMenuItem"><a href="{{ url('/industry/legal-consulting-services') }}">Legal &

                            Consulting Services</a></li>

                </div>

            </div>

        </ul>

    </div>

</div>

<!-- Top Bar End -->