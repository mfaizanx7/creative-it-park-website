@extends('frontend.layouts.app')

@section('title', 'UI/UX Design Services | User Experience Design | Creative IT Park')
@section('meta_description', 'Creative IT Park creates intuitive, beautiful digital experiences. Our UI/UX designers combine user research, wireframing, and modern visual design to maximise engagement.')

@section('json_ld')
<script type="application/ld+json">
{"@context":"https://schema.org","@type":"Service","name":"UI/UX Design","description":"Intuitive, beautiful digital experiences combining user research, wireframing, and modern visual design to maximise engagement.","provider":{"@type":"Organization","name":"Creative IT Park","url":"https://creativeitpark.org"},"url":"https://creativeitpark.org/service-ui-ux","areaServed":"Worldwide","serviceType":"UI/UX Design"}
</script>
<script type="application/ld+json">
{"@context":"https://schema.org","@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"Home","item":"https://creativeitpark.org"},{"@type":"ListItem","position":2,"name":"Services","item":"https://creativeitpark.org/services"},{"@type":"ListItem","position":3,"name":"UI/UX Design","item":"https://creativeitpark.org/service-ui-ux"}]}
</script>
@endsection

@section('content')

@include('frontend.components.about.about-header')
@include('frontend.components.service-ux.ux-banner')
@include('frontend.components.service-ux.ux-call-action')
@include('frontend.components.service-ux.ux-experience')
@include('frontend.components.service-ux.ui-ux-call-action')
@include('frontend.components.service-ux.ux-tools')
@include('frontend.components.service-ux.ux-enterprises')
@include('frontend.components.service-ux.ux-design-deliver')
@include('frontend.components.service-ux.ux-contact')





@endsection