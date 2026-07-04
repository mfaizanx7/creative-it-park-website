@extends('frontend.layouts.app')

@section('title', 'Website Development Services | Custom Web Solutions | Creative IT Park')
@section('meta_description', 'Creative IT Park offers professional website development services — custom web applications, e-commerce platforms, and CMS solutions crafted for performance and scalability.')

@section('json_ld')
<script type="application/ld+json">
{"@context":"https://schema.org","@type":"Service","name":"Website Development","description":"Professional website development services — custom web applications, e-commerce platforms, and CMS solutions crafted for performance and scalability.","provider":{"@type":"Organization","name":"Creative IT Park","url":"https://creativeitpark.org"},"url":"https://creativeitpark.org/services-web","areaServed":"Worldwide","serviceType":"Website Development"}
</script>
<script type="application/ld+json">
{"@context":"https://schema.org","@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"Home","item":"https://creativeitpark.org"},{"@type":"ListItem","position":2,"name":"Services","item":"https://creativeitpark.org/services"},{"@type":"ListItem","position":3,"name":"Website Development","item":"https://creativeitpark.org/services-web"}]}
</script>
@endsection

@section('content')

@include('frontend.components.about.about-header')
@include('frontend.components.services-web.service-banner')
@include('frontend.components.services-web.service-call-action')
@include('frontend.components.services-web.service-solutions')
@include('frontend.components.services-web.service-next-step')
@include('frontend.components.services-web.service-performance')
@include('frontend.components.services-web.service-applications')








@endsection