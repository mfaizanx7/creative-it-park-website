@extends('frontend.layouts.app')

@section('title', 'Cloud Computing Services | Cloud Migration & Management | Creative IT Park')
@section('meta_description', 'Creative IT Park provides end-to-end cloud computing services including cloud migration, infrastructure management, and security solutions for businesses of all sizes.')

@section('json_ld')
<script type="application/ld+json">
{"@context":"https://schema.org","@type":"Service","name":"Cloud Computing","description":"End-to-end cloud computing services including cloud migration, infrastructure management, and security solutions for businesses of all sizes.","provider":{"@type":"Organization","name":"Creative IT Park","url":"https://creativeitpark.org"},"url":"https://creativeitpark.org/service-cloud","areaServed":"Worldwide","serviceType":"Cloud Computing"}
</script>
<script type="application/ld+json">
{"@context":"https://schema.org","@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"Home","item":"https://creativeitpark.org"},{"@type":"ListItem","position":2,"name":"Services","item":"https://creativeitpark.org/services"},{"@type":"ListItem","position":3,"name":"Cloud Computing","item":"https://creativeitpark.org/service-cloud"}]}
</script>
@endsection

@section('content')

@include('frontend.components.about.about-header')
@include('frontend.components.service-cloud.cloud-banner')
@include('frontend.components.service-cloud.cloud-about')
@include('frontend.components.service-cloud.cloud-security')
@include('frontend.components.service-cloud.cloud-advantage')
@include('frontend.components.service-cloud.cloud-call-action')
@include('frontend.components.service-cloud.cloud-contact')






@endsection