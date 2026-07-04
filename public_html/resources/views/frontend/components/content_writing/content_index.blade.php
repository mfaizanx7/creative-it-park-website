@extends('frontend.layouts.app')

@section('title', 'Content Writing Services | SEO-Optimised Content | Creative IT Park')
@section('meta_description', 'Creative IT Park\'s content writing team delivers SEO-optimised, engaging content — blog posts, website copy, articles, and marketing materials tailored to your brand and audience.')

@section('json_ld')
<script type="application/ld+json">
{"@context":"https://schema.org","@type":"Service","name":"Content Writing","description":"SEO-optimised, engaging content — blog posts, website copy, articles, and marketing materials tailored to your brand and audience.","provider":{"@type":"Organization","name":"Creative IT Park","url":"https://creativeitpark.org"},"url":"https://creativeitpark.org/content_writing","areaServed":"Worldwide","serviceType":"Content Writing"}
</script>
<script type="application/ld+json">
{"@context":"https://schema.org","@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"Home","item":"https://creativeitpark.org"},{"@type":"ListItem","position":2,"name":"Services","item":"https://creativeitpark.org/services"},{"@type":"ListItem","position":3,"name":"Content Writing","item":"https://creativeitpark.org/content_writing"}]}
</script>
@endsection

@section('content')

@include('frontend.components.about.about-header')
@include('frontend.components.content_writing.app-banner')
@include('frontend.components.content_writing.app-solution')
@include('frontend.components.content_writing.app-portfolio')
@include('frontend.components.content_writing.app-end-to-end')
@include('frontend.components.content_writing.app-delivering')







@endsection