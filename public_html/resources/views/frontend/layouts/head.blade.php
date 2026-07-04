    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <meta name="description" content="@yield('meta_description', 'Creative IT Park is a leading IT company in Islamabad, Pakistan offering website development, mobile app development, UI/UX design, cloud computing, SEO, and digital marketing services.')">    
@hasSection('meta_extra')
    @yield('meta_extra')
@else
    <meta property="og:type" content="website">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:title" content="@yield('title', 'Creative IT Park')">
    <meta property="og:description" content="@yield('meta_description', 'Creative IT Park is a leading IT company in Islamabad, Pakistan offering website development, mobile app development, UI/UX design, cloud computing, SEO, and digital marketing services.')">
    <meta property="og:image" content="{{ asset('frontend/images/images/Creative IT Park w.webp') }}">
    <meta property="og:site_name" content="Creative IT Park">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="@yield('title', 'Creative IT Park')">
    <meta name="twitter:description" content="@yield('meta_description', 'Creative IT Park is a leading IT company in Islamabad, Pakistan offering website development, mobile app development, UI/UX design, cloud computing, SEO, and digital marketing services.')">
    <meta name="twitter:image" content="{{ asset('frontend/images/images/Creative IT Park w.webp') }}">
@endif

    <meta name="keywords"
        content="IT enterprise, website development, mobile app development, UI/UX design, cloud computing, server management, social media marketing, graphic designing, SEO, content writing, educational services, public sectors, arts and recreation, food services, health care, real estate, portfolio, news, contact us, mission statement, software agency, top expertise, accelerate innovation, customer satisfaction, agile strategies, forward-thinking, project overview, company values, digital solutions, transformation">

    <meta name="author" content="Creative IT Park">

    <meta name="robots" content="index, follow">

    <meta name="revisit-after" content="7 days">

    <meta name="language" content="English">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link
        href="https://fonts.googleapis.com/css2?family=Satisfy&family=Sora:wght@100;200;300;400;500;600;700;800&family=Syne:wght@400;500;600;700;800&display=swap"
        rel="stylesheet">

    <!-- bootstrap grid css -->

    {{-- <link rel="stylesheet" href="{{ asset('./frontend/css/plugins/bootstrap-grid.css') }}"> --}}

    <!-- font awesome css -->

    {{-- <link rel="stylesheet" href="{{ asset('./frontend/css/plugins/font-awesome.min.css') }}"> --}}

    <!-- swiper css -->

    {{-- <link rel="stylesheet" href="{{ asset('./frontend/css/plugins/swiper.min.css') }}"> --}}

    <!-- itsulu css -->

    {{-- <link rel="stylesheet" href="{{ asset('./frontend/css/style25.css') }}"> --}}

    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    <title>@yield('title', 'Creative IT Park')</title>

    <link rel="canonical" href="{{ url()->current() }}">

    {{-- owl carousel --}}



    <link rel="shortcut icon" href="{{ asset('./frontend/images/images/favicon.png') }}" type="image/x-icon">
<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-8RR79SW1L4"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-8RR79SW1L4');
</script>

<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "Organization",
  "name": "Creative IT Park",
  "url": "https://creativeitpark.org",
  "logo": "{{ asset('frontend/images/images/Creative IT Park w.webp') }}",
  "description": "Creative IT Park is a leading IT company in Islamabad, Pakistan specialising in website development, mobile app development, UI/UX design, cloud computing, SEO, and digital marketing services.",
  "address": {
    "@type": "PostalAddress",
    "addressLocality": "Islamabad",
    "addressRegion": "Islamabad Capital Territory",
    "addressCountry": "PK"
  },
  "contactPoint": {
    "@type": "ContactPoint",
    "contactType": "customer service",
    "availableLanguage": ["English", "Urdu"]
  },
  "knowsAbout": [
    "Web Development",
    "Mobile App Development",
    "UI/UX Design",
    "Cloud Computing",
    "SEO Optimization",
    "Content Writing",
    "Graphic Design",
    "Social Media Marketing",
    "Server Management"
  ],
  "hasOfferCatalog": {
    "@type": "OfferCatalog",
    "name": "IT Services",
    "itemListElement": [
      {
        "@type": "Offer",
        "itemOffered": {"@type": "Service", "name": "Website Development", "url": "https://creativeitpark.org/services-web"}
      },
      {
        "@type": "Offer",
        "itemOffered": {"@type": "Service", "name": "Mobile App Development", "url": "https://creativeitpark.org/service-app"}
      },
      {
        "@type": "Offer",
        "itemOffered": {"@type": "Service", "name": "UI/UX Design", "url": "https://creativeitpark.org/service-ui-ux"}
      },
      {
        "@type": "Offer",
        "itemOffered": {"@type": "Service", "name": "Cloud Computing", "url": "https://creativeitpark.org/service-cloud"}
      },
      {
        "@type": "Offer",
        "itemOffered": {"@type": "Service", "name": "SEO Optimization", "url": "https://creativeitpark.org/service-seo"}
      },
      {
        "@type": "Offer",
        "itemOffered": {"@type": "Service", "name": "Content Writing", "url": "https://creativeitpark.org/content_writing"}
      }
    ]
  }
}
</script>

@yield('json_ld')