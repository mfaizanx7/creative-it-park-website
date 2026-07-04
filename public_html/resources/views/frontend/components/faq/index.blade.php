@extends('frontend.layouts.app')

@section('title', 'Frequently Asked Questions | Creative IT Park')
@section('meta_description', 'Find answers to common questions about Creative IT Park\'s services, processes, pricing, and support. Can\'t find what you need? Contact our team directly.')

@section('json_ld')
@if($faqs->isNotEmpty())
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "FAQPage",
  "mainEntity": [
    @foreach($faqs as $faq)
    {
      "@type": "Question",
      "name": {{ json_encode(strip_tags($faq->question)) }},
      "acceptedAnswer": {
        "@type": "Answer",
        "text": {{ json_encode(strip_tags($faq->answer)) }}
      }
    }{{ !$loop->last ? ',' : '' }}
    @endforeach
  ]
}
</script>
@endif
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "BreadcrumbList",
  "itemListElement": [
    {"@type": "ListItem", "position": 1, "name": "Home", "item": "https://creativeitpark.org"},
    {"@type": "ListItem", "position": 2, "name": "FAQs", "item": "https://creativeitpark.org/faqs"}
  ]
}
</script>
@endsection

<link rel="stylesheet" href="style.css">
<!-- Font -->
<link href="https://api.fontshare.com/v2/css?f[]=satoshi@400,500,700&display=swap" rel="stylesheet">
<!-- Remix Icon -->
<link href="https://cdn.jsdelivr.net/npm/remixicon@4.2.0/fonts/remixicon.css" rel="stylesheet"
/>
<style>
.accordion {
    border-bottom: 0.1rem solid var(--color-border);
    padding-bottom: 2rem;
    /* margin-bottom: 3rem; */
}

.accordion__header {
    display: flex;
    justify-content: space-between;
    align-items: center;
    gap: 1rem;
    cursor: pointer;
}

.accordion__icon {
    background-color:rgb(245, 124, 0);
    width: 2.2rem;
    height: 2.2rem;
    display: flex;
    justify-content: center;
    align-items: center;
    border-radius: 50%;
    color: var(--color-white);
    flex-shrink: 0;
}

.accordion__question {
    font-size: var(--fs-md);
    font-weight: var(--fw-medium);
    color: #000;
}

.accordion__answer {
    padding: 2rem 0;
    color: #000;
}

.accordion__content {
    overflow: hidden;
    height: 0;
    transition: var(--transition);
}

@media screen and (min-width: 580px) {
    .accordion__wrapper {
        padding: 5rem 8rem;
    }
}

</style>

@section('content')
    @include('frontend.components.about.about-header')
    <div class="mil-banner-sm mil-deep-bg">
        <img src="{{ asset('./frontend/img/deco/map.png') }}" alt="background" class="mil-background-image">
        <div class="mil-deco mil-deco-accent" style="top: 47%; right: 10%; transform: rotate(90deg)"></div>
        <div class="mil-banner-content">
            <div class="container mil-relative">
                <ul class="mil-breadcrumbs mil-mb-30">
                    <li><a href="{{ url('/') }}">Home</a></li>
                    <li><a href="{{ url('about') }}">Faqs</a></li>
                </ul>
                <h2 class="mil-uppercase">Creative IT Park</h2>
            </div>
        </div>
    </div>
    <section class="mil-blog mil-p-120-0">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-lg-8 col-xl-8 mil-mb-120">
                        
                    <h1 class="accordion__title">Frequently Asked Questions</h1>
    
                    <!-- Accordion 1  -->
                    @foreach ($faqs as $item)
                    <div class="accordion">
                        
                            <div class="accordion__header">
                                <h2 class="accordion__question">{{ $item->question}}</h2>
                                <span class="accordion__icon">
                                    <i id="accordion-icon" class="ri-add-line"></i>
                                </span>
                            </div>
                            <div class="accordion__content">
                                <p class="accordion__answer"> {!!$item->answer!!} </p>
                            </div>
                        </div>
                        @endforeach
                </div>
            </div>
        </div>
    </section>

    <script>
            document.querySelectorAll(".accordion").forEach((accordion) => {
        const header = accordion.querySelector(".accordion__header");
        const content = accordion.querySelector(".accordion__content");
        const icon = accordion.querySelector(".accordion__icon i");

        header.addEventListener("click", () => {
            const isOpen = content.style.height === `${content.scrollHeight}px`;

            document.querySelectorAll(".accordion").forEach((a) => {
            const c = a.querySelector(".accordion__content");
            const ic = a.querySelector(".accordion__icon i");

            c.style.height = a === accordion && !isOpen ? `${c.scrollHeight}px` : "0px";
            ic.classList.toggle("ri-add-line", a !== accordion || !isOpen);
            ic.classList.toggle("ri-subtract-fill", a === accordion && !isOpen);
            });
        });
        });
    </script>
@endsection
