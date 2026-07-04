<!-- top bar -->
<style>
    #card-img{
        width: 98px;
        object-fit: contain;
        height: 98px;
        background-size:cover;
    }
    .menuitems li ul{
        width: 75rem;
    }
    .enterprises{
        left: -65px !important; 
        width: 15rem !important;
    }
    .goog-te-combo {
            width: 8.1rem;
        }
        .goog-te-gadget .goog-te-combo {
    margin: 4px 0;
    border: none;
    background: none;
    color: #f57c00;
}
.VIpgJd-ZVi9od-l4eHX-hSRGPd{
    display: none;
}
.table{
    display: none;
}
.skiptranslate iframe{
    display: none !important;
}
.goog-te-combo option{
    background-color: black;
    color: white
}
.VIpgJd-ZVi9od-aZ2wEe-wOHMyf-ti6hGc{
    display: none;
}
/* .mil-top-position.mil-fixed {
    top: 0;
    bottom: 0;
}
.mil-wrapper{
    top: -40px;
} */
.headd{
    margin-top: 0px !important;
}

.mil-top-panel.mil-top-panel-transparent .mil-navigation nav ul li a {
    color: black;
}
.enterprises{
    width: 89.8rem !important;
    left: -459px !important;

}
</style>


<!-- top bar end -->



<script>
    // Data for menu items: image and description
const serviceData = {
'web-dev': {
img: "{{ asset('./images/web-dev.jpg') }}",
description: 'Professional website development services, building responsive and modern websites.'
},
'mobile-dev': {
img: "{{ asset('./images/app-development.png') }}",
description: 'Mobile app development for Android and iOS platforms.'
},
'ui-ux': {
img: "{{ asset('./images/ui-ux.jpg') }}",
description: 'Creative UI/UX design to enhance user experience and interface design.'
},
'cloud': {
img: "{{ asset('./images/woman-scrolling-laptop.jpg') }}",
description: 'Cloud computing solutions for modern businesses.'
},
'server': {
img: "{{ asset('./images/server.jpg') }}",
description: 'Server management services to keep your infrastructure secure and reliable.'
},
'social-media': {
img: "{{ asset('./images/social-media-marketing.avif') }}",
description: 'Effective social media marketing strategies for growing your brand.'
},
'graphic': {
img: "{{ asset('./images/graphic-design.avif') }}",
description: 'Graphic designing services for logos, brochures, and brand identity.'
},
'seo': {
img: "{{ asset('./images/searching-engine-optimizing.avif') }}",
description: 'SEO and optimization services to improve search engine rankings.'
},
'content-writing': {
img: "{{ asset('./images/content-writing.jpg') }}",
description: 'Content writing services for blogs, websites, and marketing materials.'
}
};

// Add hover event listeners to menu items
document.querySelectorAll('.menuitems li').forEach(item => {
item.addEventListener('mouseover', function() {
console.log(item);

const menu = this.getAttribute('data-menu');

// Update card content with the appropriate image and description
if (serviceData[menu]) {
    document.getElementById('card-img').src = serviceData[menu].img;
    document.getElementById('card-description').innerText = serviceData[menu].description;
}
});
});

// Optionally, you can add a "mouseout" event listener to reset the card when not hovering
document.querySelectorAll('.menuitems li').forEach(item => {
// console.log(item.innerText);
item.addEventListener('mouseout', function() {
// console.log(item);
document.getElementById('card-img').src ='./images/9993586771696631789.jpg';
document.getElementById('card-description').innerText = '';
});
});

</script>

<!-- language -->
<script type="text/javascript">
    function googleTranslateElementInit() {
        new google.translate.TranslateElement({ pageLanguage: 'en' }, 'google_translate_element');
    }
</script>

<script type="text/javascript"
    src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>

<script>
    window.onload = function () {
        const parentDiv = document.querySelector('.skiptranslate');
        const textNode = parentDiv.childNodes[1];
        if (textNode.nodeType === Node.TEXT_NODE) {
            parentDiv.removeChild(textNode);
        }
    };

</script>
<script>
    window.onload = function() {
    // Check if the URL ends with a slash and remove it
    // console.log(window.location.pathname);
    if (window.location.pathname == '/cip/public_html/public/') {
        history.replaceState(null, null, window.location.href.slice(0, -1));
    }

    // Function to change the navigation background color
    const navElement = document.querySelector('#nav_bar');    
    const changeNavColor = () => {
    if (window.location.pathname != '/cip/public_html/public/') {
        navElement.style.background = 'white'; 
        navElement.style.text = 'black'; 
    } else {
        navElement.style.background = 'transparent'; 
    }
};
    changeNavColor();
    window.addEventListener('popstate', changeNavColor);
};
</script>



<script>
    $(document).ready(function () {
    // Always apply dark logo on page load
    $(".mil-logo").css({
        'background-image': "url('./frontend/img/logo/cip-dark-logo.png')",
        'width': '140px'
    });

    // Handle scroll event to manage the top panel's transparency
    $(window).on("scroll", function () {
        var scroll = $(window).scrollTop();

        if (scroll > 0) {
            $(".mil-top-panel.mil-animated").removeClass("mil-top-panel-transparent");
            $(".has-additional-panel").addClass("mil-hide-top");
        } else {
            $(".mil-top-panel.mil-animated").addClass("mil-top-panel-transparent");
            $(".has-additional-panel").removeClass("mil-hide-top");
        }

        // Ensure dark logo remains visible while scrolling
        $(".mil-logo").css({
            'background-image': "url('./frontend/img/logo/cip-dark-logo.png')",
            'width': '140px'
        });
    });
});

  
  </script>





