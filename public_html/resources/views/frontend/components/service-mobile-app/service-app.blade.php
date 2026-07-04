@extends('frontend.layouts.app')

@section('title', 'Mobile App Development Services | iOS & Android | Creative IT Park')
@section('meta_description', 'Build powerful iOS and Android apps with Creative IT Park. Our mobile development team delivers scalable, user-centric applications tailored to your business needs.')

@section('json_ld')
<script type="application/ld+json">
{"@context":"https://schema.org","@type":"Service","name":"Mobile App Development","description":"Build powerful iOS and Android apps with Creative IT Park. Scalable, user-centric mobile applications tailored to your business needs.","provider":{"@type":"Organization","name":"Creative IT Park","url":"https://creativeitpark.org"},"url":"https://creativeitpark.org/service-app","areaServed":"Worldwide","serviceType":"Mobile App Development"}
</script>
<script type="application/ld+json">
{"@context":"https://schema.org","@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"Home","item":"https://creativeitpark.org"},{"@type":"ListItem","position":2,"name":"Services","item":"https://creativeitpark.org/services"},{"@type":"ListItem","position":3,"name":"Mobile App Development","item":"https://creativeitpark.org/service-app"}]}
</script>
@endsection

@section('content')

@include('frontend.components.about.about-header')
@include('frontend.components.service-mobile-app.app-banner')
@include('frontend.components.service-mobile-app.app-solution')
@include('frontend.components.service-mobile-app.app-portfolio')
@include('frontend.components.service-mobile-app.app-end-to-end')
@include('frontend.components.service-mobile-app.app-delivering')
@include('frontend.components.service-mobile-app.app-tech')







@endsection