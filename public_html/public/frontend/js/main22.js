/* -------------------------------------------

Name: 		ITSulu
Version:    1.1
Developer:	Nazar Miller (millerDigitalDesign)
Portfolio:  https://themeforest.net/user/millerdigitaldesign/portfolio?ref=MillerDigitalDesign

p.s. I am available for Freelance hire (UI design, web development). email: miller.themes@gmail.com

------------------------------------------- */

$(document).ready(function () {

    "use strict";
    let slideNo = 0
    let scroll = 0;
    let lastSliderId = 0
    let prevent = true

    $("html, body, .mil-wrapper").scrollTop(0);
    $(".mil-wrapper").removeClass("visible-none");
    // Utility function to hide loader
    function hideLoader(time) {
        setTimeout(() => {

            $(".loader").addClass("display-none");
            $(".loader").hide()
            $("#loader").addClass("display-none");
        }, time)
    }

    // Get the current path, trimming any trailing slashes
    let path = window.location.pathname.replace(/\/$/, "");
    // console.log(path)
    if (
        path === "/public" ||
        path === "/" ||
        path === "/index.php" ||
        path === "/creativeitpark" ||
        path === ""
    ) {
        if (sessionStorage.getItem("loader") !== "true") {
            // Store loader status to prevent showing it again in the session
            sessionStorage.setItem("loader", "true");

            $(window).on("load", () => {
                // console.log("Window fully loaded.");

                if ($(".loader .logo").length) {
                    // console.log("Loader logo exists.");

                    let animationsCompleted = false;

                    $(".loader .logo").on("animationend", (event) => {
                        // console.log(`Animation '${event.originalEvent.animationName}' completed.`);

                        if (event.originalEvent.animationName !== "loader-fadeoutAnimation") {
                            animationsCompleted = true;
                        }

                        if (animationsCompleted) {
                            setTimeout(() => {
                                $(".loader .logo").addClass("loader-fadeoutAnimation");
                                // console.log("Fading out loader...");
                                hideLoader(300);
                            }, 1000);
                        }
                    });

                    // Fallback: If animations don’t fire, force hide loader after max wait time
                    setTimeout(() => {
                        if (!animationsCompleted) {
                            console.warn("Animations did not complete in time. Hiding loader manually.");
                            $(".loader .logo").addClass("loader-fadeoutAnimation");
                            hideLoader(300);
                        }
                    }, 5000);
                } else {
                    console.warn("No element found for $('.loader .logo')");
                    hideLoader(300);
                }
            });
        } else {
            hideLoader(); // Hide instantly if already loaded before
        }
    } else {
        hideLoader(); // Hide loader for non-matching paths
    }



    const sliderMouseScroll = (LastBtnId, sliderClass, slider, sliderId, container) => {
        // Get the container and wrapper elements
        container = document.getElementsByClassName(container)[0];
        /*let containerWidth = container.offsetWidth;

        // Get the width of the individual slides and space between them
        const singleSlideWidth = slider.slides[1].offsetWidth;
        const spaceBetween = slider.params.spaceBetween || 0;
        // let amountToScroll =  - containerWidth;

        // Calculate the total width of all slides based on screen size
        let totalSlidesWidth = 0;
        const innerWidth = window.innerWidth;
        if (innerWidth <= 430){
            totalSlidesWidth = slider.slides.length * 0.9 * singleSlideWidth + (slider.slides.length - 1) * spaceBetween;
        }else if (innerWidth <= 786) {
            totalSlidesWidth = slider.slides.length * 0.6 * singleSlideWidth + (slider.slides.length - 1) * spaceBetween;
        } else if (innerWidth <= 1286) {
            totalSlidesWidth = slider.slides.length * 1.05 * singleSlideWidth + (slider.slides.length - 1) * spaceBetween;
        } else {
            totalSlidesWidth = slider.slides.length * 1.05 * singleSlideWidth + (slider.slides.length - 1) * spaceBetween;
        }
    
    
        // GSAP tween for scrolling the container
        // console.log(amountToScroll)

        const tween = gsap.to(slider.$wrapperEl[0], {
            x: -(amountToScroll), // Correct scroll amount
            ease: "none",
        });
    
        // ScrollTrigger setup
        const scrollTrigger = ScrollTrigger.create({
            trigger: container,
            start: innerWidth > 786 ? "top 20%" : "top 10%", // Start position based on screen size
            end: "+=" + amountToScroll, // End at the full width of the content
            pin: true, // Pin the container during scrolling
            animation: tween,
            scrub: 1, // Smooth scrub animation
            markers: true
        });
        if (LastBtnId !== null) {
            document.getElementById(LastBtnId).onclick = () => {
                scrollTrigger.scroll(scrollTrigger.end)
                // // console.log(scrollTrigger)
                setTimeout(() => {
                    slider.slideTo(slider.slides.length - 1);
                }, innerWidth > 786 ? "top 20%" : "top 10%");
            };
        }
        slider.$el[0].addEventListener("wheel", (e) => {
            e.preventDefault();
            const scrollAmount = e.deltaY > 0 ? singleSlideWidth / 5 : -singleSlideWidth / 5;
            // // console.log(slider)
            slider.$el[0].scrollBy({
                left: scrollAmount,
                behavior: "smooth",
            });
        })
        // // console.log(LastBtnId)
        $(LastBtnId).click((e)=>{
            slider.$el[0].scrollBy({
                left: slider.virtualSize,
                behavior: "smooth",
            });
        })*/
        $(LastBtnId).click((e) => {
            slider.slideTo(slider.slides.length - 1)
        })
        // // console.log(container)
        if (document.body.clientWidth > 1440) {
            const spacing = document.getElementsByClassName("spacing")
            for (let i = 0; i < spacing.length; i++) {
                spacing[i].style.width = `${(document.body.clientWidth - 1440) / 2}px`
                container.style.left = `${(document.body.clientWidth - 1440) / 2}px`
                // // console.log(container)
                // // console.log(spacing[i])
            }
            // container.style.width = `${(document.body.clientWidth + 1440) / 2}px`
            // container.style.maxWidth = `${(document.body.clientWidth + 1440) / 2}px!important`
        }
    };





    var acc = document.getElementsByClassName("mil-accordion");
    var i;

    for (i = 0; i < acc.length; i++) {
        acc[i].onclick = function () {
            this.classList.toggle("mil-active");
            var panel = this.nextElementSibling;
            if (panel.style.maxHeight) {
                panel.style.maxHeight = null;
            } else {
                panel.style.maxHeight = panel.scrollHeight + "px";
            }
        }
    }

    $(".mil-menu-btn").on("click", function () {
        $(this).toggleClass('mil-active');
        $('.mil-navigation').toggleClass('mil-active');
    });
    // // console.log(window.location.pathname)
    if (window.location.pathname === "/public/" || window.location.pathname === "/" || window.location.pathname === "/index.php/") {
        $(window).on("scroll", function () {
            var scroll = $(window).scrollTop();

            if (scroll >= 220) {
                $(".mil-top-panel.mil-animated").removeClass("mil-top-panel-transparent");
                $(".has-additional-panel").addClass("mil-hide-top");
            } else {
                $(".mil-top-panel.mil-animated").addClass("mil-top-panel-transparent");
                $(".has-additional-panel").removeClass("mil-hide-top");
            }
        });
    } else {
        $(".mil-top-panel.mil-animated").removeClass("mil-top-panel-transparent");
        $(".has-additional-panel").addClass("mil-hide-top");
    }

    var swiper = new Swiper('.mil-banner-slideshow', {
        slidesPerView: 1,
        spaceBetween: 0,
        speed: 1500,
        autoplay: true,
        effect: 'fade',
        parallax: true,
        autoplay: {
            delay: 5000,
        },
        loop: true,
        pagination: {
            el: '.mil-pagination',
            type: 'bullets',
            clickable: true,
        },
    });

    var swiper = new Swiper('.mil-banner-slider', {
        slidesPerView: 1,
        spaceBetween: 0,
        speed: 1500,
        autoplay: true,
        effect: 'fade',
        parallax: true,
        autoplay: {
            delay: 5000,
        },
        loop: true,
        navigation: {
            prevEl: '.mil-banner-prev',
            nextEl: '.mil-banner-next',
        },
    });

    var swipermain = new Swiper(".swiper-main", {
        slidesPerView: 1,
        spaceBetween: 0,
        speed: 1500,
        autoplay: true,
        direction: "vertical",
        effect: 'fade',
        parallax: true,
        autoplay: {
            delay: 2000,
        }
    })

    var swiper = new Swiper('.mil-works-slider', {
        slidesPerView: 1,
        spaceBetween: 30,
        speed: 800,
        navigation: {
            prevEl: '.mil-works-prev',
            nextEl: '.mil-works-next',
        },
        breakpoints: {
            768: {
                slidesPerView: 2,
            }
        },
    });
    var swiper = new Swiper('.mil-blog-slider', {
        spaceBetween: 30,
        speed: 800,
        slidesPerView: 1,
        navigation: {
            prevEl: '.mil-blog-prev',
            nextEl: '.mil-blog-next',
        },
        breakpoints: {
            768: {
                slidesPerView: 2,
            },
            992: {
                slidesPerView: 2,
            },
            1200: {
                slidesPerView: "auto",
            }
        },
    });
    var swiper = new Swiper('.mil-revi-slider', {
        slidesPerView: 1,
        spaceBetween: 30,
        speed: 800,
        mousewheel: true,
        mousewheelcontrol: true,
        navigation: {
            prevEl: '.mil-revi-prev',
            nextEl: '.mil-revi-next',
        },
        breakpoints: {
            768: {
                slidesPerView: 2,
            },
            992: {
                slidesPerView: 3,
            }
        },
    });

    var swiper = new Swiper('.mil-revi-slider-2', {
        slidesPerView: 1,
        spaceBetween: 30,
        speed: 800,
        autoplay: {
            delay: 5000,
        },
        loop: true,
        navigation: {
            prevEl: '.mil-revi-prev',
            nextEl: '.mil-revi-next',
        },
        breakpoints: {
            768: {
                slidesPerView: 2,
            },
        },
    });


    var swiperServices = new Swiper('.mil-services-slider', {
        slidesPerView: "auto",
        spaceBetween: 30,
        speed: 800,
        mousewheel: true,
        mousewheelcontrol: true,
        navigation: {
            prevEl: '.mil-services-prev',
            nextEl: '.mil-services-next',
        },
        breakpoints: {
            768: {
                slidesPerView: 2,
            },
            992: {
                slidesPerView: 3,
            }
        },
    });
    // const lastIndex = 9

    sliderMouseScroll("#LastCardBtn", "mil-services-slider", swiperServices, 0, "container-services")

    var swiperEvents = new Swiper('.mil-events-slider', {
        slidesPerView: 1,
        spaceBetween: 30,
        speed: 800,
        mousewheel: true,
        mousewheelcontrol: true,
        navigation: {
            prevEl: '.mil-events-prev',
            nextEl: '.mil-events-next',

        },
        breakpoints: {
            768: {
                slidesPerView: 2,
            },
            992: {
                slidesPerView: 3,
            }
        },
    });

    sliderMouseScroll("#LastEvent", "mil-events-slider", swiperEvents, 1, "container-events")

    var CourseSwiper = new Swiper('.mil-courses-slider', {
        slidesPerView: 1,
        spaceBetween: 30,
        speed: 800,
        navigation: {
            prevEl: '.mil-courses-prev',
            nextEl: '.mil-courses-next',
        },
        breakpoints: {
            768: {
                slidesPerView: 2,
            },
            992: {
                slidesPerView: 3,
            }
        },
    });

    if (document.body.clientWidth > 1440) {
        // CourseSwiper.$el[0].style.left = `${(document.body.clientWidth - 1440) / 2}px`
    }

    // sliderMouseScroll(null, ".mil-courses-slider", CourseSwiper)

    var swiper = new Swiper('.mil-banners-slider', {
        slidesPerView: 1,
        spaceBetween: 30,
        speed: 800,
        autoplay: {
            delay: 5000,
        },
        effect: 'fade',
        parallax: true,
        loop: true,
        pagination: {
            el: '.mil-banners-pagination',
            type: 'bullets',
            clickable: true,
        },
    });

    var swiperpartners = new Swiper('.mil-partners-slider', {
        slidesPerView: 1, // Default for mobile
        spaceBetween: 30,
        speed: 800,
        navigation: {
            prevEl: '.mil-partner-prev',
            nextEl: '.mil-partner-next',
        },
        loop: true,
        autoplay: {
            delay: 0,
            disableOnInteraction: false
        },
        breakpoints: {
            // When screen width is 600px or greater (tablet view)
            600: {
                slidesPerView: 2, // Show 2 slides for tablet
            },
            // When screen width is 1024px or greater (desktop view)
            1024: {
                slidesPerView: 3, // Show 3 slides for desktop
            },
        },
    });

    // setInterval(() => {
    //     swiperpartners.slideNext()
    // }, 10);


    var swiper = new Swiper('.mil-box-slider', {
        slidesPerView: 1,
        spaceBetween: 30,
        speed: 800,
        parallax: true,
        effect: 'fade',
        navigation: {
            prevEl: '.mil-box-prev',
            nextEl: '.mil-box-next',
        },
    });

    var swiper = new Swiper('.mil-tabs-slider', {
        slidesPerView: 1,
        speed: 800,
        allowTouchMove: false,
        hashNavigation: {
            watchState: true,
        },
        effect: 'fade',
        parallax: true,
    });

    $(".mil-tab-buttons a").on("click", function () {
        $('.mil-tab-buttons a').removeClass('mil-active');
        $(this).toggleClass('mil-active');
    });

    var swiper = new Swiper('.mil-tabs-slider-2', {
        slidesPerView: 1,
        speed: 800,
        allowTouchMove: false,
        hashNavigation: {
            watchState: true,
        },
        effect: 'fade',
        parallax: true,
    });

    // gsap.registerPlugin(ScrollTrigger);

    // // Alternating animation for sections
    // gsapAnimation(".container-services", "left");
    // gsapAnimation(".mil-partners", "right");
    // gsapAnimation(".about-container", "left");
    // gsapAnimation(".container-events", "right");
    // gsapAnimation(".container-latest-events", "left");

    // // Select the element to animate
    // function gsapAnimation(elemclass, direction) {
    //     const xOffset = direction === "left" ? -100 : 100; // Define direction
    //     gsap.from(elemclass, {
    //         opacity: 0,
    //         x: xOffset, // Slide in from left (-100) or right (100)
    //         duration: 1, // Animation duration in seconds
    //         scrollTrigger: {
    //             trigger: elemclass, // Element that triggers the animation
    //             start: 'top 80%', // When the top of the element reaches 80% of the viewport height
    //             toggleActions: 'play none none none', // Only play once
    //         }
    //     });
    // }



    $(".mil-tabs-left-nav a").on("click", function () {
        $('.mil-tabs-left-nav a').removeClass('mil-active');
        $(this).toggleClass('mil-active');
    });

    const input = document.getElementById('mil-file-input');
    const label = document.getElementsByClassName("mil-custom-file-input")[0];

    if (input != undefined) {
        input.addEventListener("change", () => {
            const file = input.value;
            const [fileName] = file.match(/\w+.\w+$/);

            if (fileName.trim()) {
                label.classList.add("mil-with-file");
                label.querySelector('span').innerText = fileName;
            }
        });
    }
});
$(document).ready(() => {
    const serviceIcons = [
        {
            service: "All Services",
            icon: "fas fa-cogs"  // General services icon
        },
        {
            service: "Website Development",
            icon: "fas fa-laptop"  // Icon for website development
        },
        {
            service: "Mobile App Development",
            icon: "fas fa-mobile-alt"  // Icon for mobile app development
        },
        {
            service: "UI/UX Design",
            icon: "fas fa-paint-brush"  // Icon for UI/UX design
        },
        {
            service: "Cloud Computing",
            icon: "fas fa-cloud"  // Icon for cloud computing
        },
        {
            service: "Server Management",
            icon: "fas fa-server"  // Icon for server management
        },
        {
            service: "Social Media Marketing",
            icon: "fas fa-share-alt"  // Icon for social media marketing
        },
        {
            service: "Graphic Designing",
            icon: "fas fa-vector-square"  // Icon for graphic design
        },
        {
            service: "SEO and Optimization",
            icon: "fas fa-search-dollar"  // Icon for SEO and optimization
        },
        {
            service: "Content Writing",
            icon: "fas fa-pencil-alt"  // Icon for content writing
        }
    ];
    const MegaMenuSetup = (megaMenuIconId, megaMenuItemClass, menuId, menuLink, iconList) => {
        const megaMenuIcon = document.getElementById(megaMenuIconId);
        const megaMenuItems = document.getElementsByClassName(megaMenuItemClass)
        // Add event listeners to each mega menu item
        // // console.log(megaMenuItems)
        for (const item of megaMenuItems) {
            // // console.log(item.textContent.trim())
            item.addEventListener("mouseover", () => {
                const serviceName = item.textContent.trim();
                const service = iconList.find(service => service.service === serviceName);
                if (service) {
                    megaMenuIcon.innerHTML = `<i class="${service.icon}"></i>`;

                    item.classList.add('active');
                }
            });

            item.addEventListener('mouseleave', () => {
                megaMenuIcon.innerHTML = '<i class="fas fa-cogs"></i>';

                item.classList.remove('active');
            });

        }

        $(menuId).hide()
        $(menuId).removeClass("display-none")
        $(menuLink).mouseenter(() => {
            if (window.innerWidth >= 1220) {
                // // console.log(window.innerWidth)
                $(menuId).show()
                gsap.to(menuId, {
                    duration: 0.3,
                    autoAlpha: 1, // Show with fade-in
                    y: 0,         // Slide to its original position
                    ease: "power1.out"
                });
            }
        })
        $(menuLink).mouseleave(() => {
            $(menuId).hide()
            gsap.to(menuId, {
                duration: 0.3,
                autoAlpha: 0, // Hide with fade-out
                y: -10,       // Slightly slide up
                ease: "power1.out"
            });
        })
        $(menuId).mouseenter(() => {
            $(menuId).show()
            gsap.to(menuId, {
                duration: 0.3,
                autoAlpha: 1, // Ensure it's visible while hovering
                y: 0,
                ease: "power1.out"
            });
        })
        $(menuId).mouseleave(() => {
            $(menuId).hide()
            gsap.to(menuId, {
                duration: 0.3,
                autoAlpha: 0, // Hide with fade-out
                y: -10,       // Slightly slide up
                ease: "power1.out"
            });
        })

    }
    MegaMenuSetup("megaMenuIconService", "megaMenuItem", "#ServicesMenu", "#serviceLink", serviceIcons)
    const IndustryIcons = [
        {
            service: "Educational services",
            icon: "fas fa-book"  // Icon for educational services
        },
        {
            service: "Public Sectors",
            icon: "fas fa-city"  // Icon for public sectors
        },
        {
            service: "Arts and recreation",
            icon: "fas fa-theater-masks"  // Icon for arts and recreation
        },
        {
            service: "Food services",
            icon: "fas fa-utensils"  // Icon for food services
        },
        {
            service: "Health Care",
            icon: "fas fa-hospital"  // Icon for healthcare
        },
        {
            service: "Real Estate",
            icon: "fas fa-building"  // Icon for real estate
        }
    ];
    MegaMenuSetup("megaMenuIconIndustry", "megaMenuItem", "#IndustriesMenu", "#industryLink", IndustryIcons)
})