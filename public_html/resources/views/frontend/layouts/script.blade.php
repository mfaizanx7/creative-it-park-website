<!-- jQuery js -->
{{-- <script src="{{ asset('./frontend/js/plugins/jquery.min.js') }}"></script> --}}
{{-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script> --}}
<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.min.js"></script>
<!-- swiper js -->
{{-- <script src="{{ asset('./frontend/js/swiper.min.js') }}"></script> --}}

{{-- <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script> --}}
{{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/8.4.5/swiper-bundle.min.js" integrity="sha512-wdUM0BxMyMC/Yem1RWDiIiXA6ssXMoxypihVEwxDc+ftznGeRu4s9Fmxl8PthpxOh5CQ0eqjqw1Q8ScgNA1moQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script> --}}
<script src="https://cdn.jsdelivr.net/npm/swiper@8.4.5/swiper-bundle.min.js"></script>

{{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/gsap.min.js"
    integrity="sha512-7eHRwcbYkK4d9g/6tD/mhkf++eoTHwpNM9woBxtPUBWm67zeAfFC+HrdoE2GanKeocly/VxeLvIqwvCdk7qScg=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script> --}}
{{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/2.1.3/TweenLite.min.js"
    integrity="sha512-5nTpER5HrSoRPyd8szIn2QglL3A54KJs4XOcX3SdHTbLb8TO/5wLqoFYSFGNyhzZy7CFAOZf66X3ikr2v7Bfuw=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script> --}}
{{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.1/ScrollToPlugin.min.js"></script> --}}
{{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/ScrollTrigger.min.js"></script> --}}
<script src="https://cdn.jsdelivr.net/npm/gsap@3.12.5/dist/gsap.min.js"></script>
{{-- <script src="https://cdn.jsdelivr.net/npm/gsap@3.12.5/dist/Flip.min.js"></script> --}}

<script src="{{ asset('/frontend/js/animations/HeroAnimation3.js') }}"></script>
<script src="{{ asset('/frontend/js/animations/HeroAnimationMouse6.js') }}" defer></script>
<script src="{{ asset('/frontend/js/main26.js') }}" defer></script>
<script>
    // const countryToLang = {
    //     'US': 'en',
    //     'GB': 'en',
    //     'FR': 'fr',
    //     'NL': 'nl',
    //     'DE': 'de',
    //     'ES': 'es',
    //     'IT': 'it',
    //     'RU': 'ru',
    //     'CN': 'zh-CN',
    //     'JP': 'ja',
    //     'KR': 'ko',
    //     'SA': 'ar',
    //     'EG': 'ar',
    //     'AE': 'ar'
    // };

    // let userLang = 'en'; // fallback language
    // let pageDir = 'ltr'; // fallback direction

    // // Check for saved language
    // const savedLang = localStorage.getItem('selectedLang');
    // if (savedLang) {
    //     userLang = savedLang;
    // }

    // // If no saved language, try IP-based detection
    // if (!savedLang) {
    //     fetch('https://ipwhois.app/json/')
    //         .then(res => res.json())
    //         .then(data => {
    //             const countryCode = data.country_code;
    //             userLang = countryToLang[countryCode] || 'en';
    //             setPageLanguage(userLang);
    //         })
    //         .catch(err => {
    //             console.warn('Geo fetch failed:', err);
    //             setPageLanguage(userLang);
    //         });
    // } else {
    //     setPageLanguage(userLang);
    // }

    // function setPageLanguage(langCode) {
    //     const rtlLangs = ['ar', 'he', 'ur'];
    //     const dir = rtlLangs.includes(langCode) ? 'rtl' : 'ltr';
    //     document.documentElement.setAttribute('lang', langCode);
    //     document.documentElement.setAttribute('dir', dir);

    //     loadTranslateScript();
    // }

    // function toggleDropdown() {
    //     document.getElementById("languageDropdown").classList.toggle("active");
    // }

    // function selectLanguage(code, flagCode, name) {
    //     document.getElementById("languageDropdown").classList.remove("active");

    //     const rtlLangs = ['ar', 'he', 'ur'];
    //     const dir = rtlLangs.includes(code) ? 'rtl' : 'ltr';
    //     document.documentElement.setAttribute('lang', code);
    //     document.documentElement.setAttribute('dir', dir);

    //     localStorage.setItem('selectedLang', code);
    //     $("#languageText").text(code.toUpperCase())

    //     triggerTranslation(code);
    // }

    // //language text on refresh add the selected language if found in local storage
    // window.addEventListener('DOMContentLoaded', () => {
    //     const savedLang = localStorage.getItem('selectedLang') || userLang;

    //     // const rtlLangs = ['ar', 'he', 'ur'];
    //     // const dir = rtlLangs.includes(savedLang) ? 'rtl' : 'ltr';

    //     // document.documentElement.setAttribute('lang', savedLang);
    //     // document.documentElement.setAttribute('dir', dir);

    //     // Show the short uppercase language code
    //     document.getElementById("languageText").textContent = savedLang.toUpperCase();

    //     // triggerTranslation(savedLang);
    // });

    // function loadTranslateScript() {
    //     const script = document.createElement('script');
    //     script.src = "//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit";
    //     document.body.appendChild(script);
    // }

    // function googleTranslateElementInit() {
    //     new google.translate.TranslateElement({
    //         pageLanguage: 'en',
    //         autoDisplay: false
    //     }, 'google_translate_element');

    //     setTimeout(() => {
    //         triggerTranslation(userLang);
    //         hideTranslateUI();
    //     }, 2000);
    // }

    // function triggerTranslation(langCode) {
    //     const interval = setInterval(() => {
    //         const selects = document.querySelectorAll("select.goog-te-combo");
    //         if (selects.length > 0) {
    //             const select = selects[selects.length - 1]; // use the last dropdown
    //             if (select.value !== langCode) {
    //                 select.value = langCode;
    //                 select.dispatchEvent(new Event("change"));
    //             }
    //             clearInterval(interval);
    //         } else {
    //             console.log('Waiting for Google Translate dropdown...');
    //         }
    //     }, 500);
    // }



    // function hideTranslateUI() {
    //     const hideStyles = document.createElement('style');
    //     hideStyles.textContent = `
    //         .goog-te-banner-frame, 
    //         .goog-te-menu-frame, 
    //         .skiptranslate, 
    //         .goog-te-combo, 
    //         .goog-te-gadget, 
    //         .goog-te-menu-value, 
    //         .goog-te-balloon-frame, 
    //         .goog-te-spinner-pos, 
    //         .goog-tooltip, 
    //         .goog-te-ftab, 
    //         .goog-te-footer {
    //             display: none !important;
    //             visibility: hidden !important;
    //             height: 0 !important;
    //             width: 0 !important;
    //             position: absolute !important;
    //             pointer-events: none !important;
    //         }
    //         body {
    //             top: 0 !important;
    //         }
    //         .goog-text-highlight {
    //             background: none !important;
    //             border: none !important;
    //             box-shadow: none !important;
    //         }
    //     `;
    //     document.head.appendChild(hideStyles);
    // }

    // // Close dropdown on outside click
    // window.onclick = function(event) {
    //     if (!event.target.matches('.dropdown-button') && !event.target.closest('.dropdown-button')) {
    //         document.getElementById("languageDropdown").classList.remove("active");
    //     }
    // }
</script>

<script>
    
</script>

<div id="google_translate_element"></div>
