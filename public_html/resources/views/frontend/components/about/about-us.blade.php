@extends('frontend.layouts.app')

@section('title', 'About Us | Who We Are | Creative IT Park')
@section('meta_description', 'Learn about Creative IT Park — our mission, values, expert team, and journey as a leading software and digital solutions company based in Islamabad, Pakistan and Valencia, Spain.')

@section('json_ld')
<script type="application/ld+json">
{"@context":"https://schema.org","@type":"AboutPage","name":"About Us | Creative IT Park","url":"https://creativeitpark.org/about_us","description":"Learn about Creative IT Park — our mission, values, expert team, and journey as a leading software and digital solutions company based in Islamabad, Pakistan and Valencia, Spain.","breadcrumb":{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"Home","item":"https://creativeitpark.org"},{"@type":"ListItem","position":2,"name":"About Us","item":"https://creativeitpark.org/about_us"}]}}
</script>
@endsection

@section('content')

@include('frontend.components.about.about-header')
@include('frontend.components.about.about-banner')
@include('frontend.components.about.about-call-to-action')
@include('frontend.components.about.about-our-mission')
@include('frontend.components.about.about-software-agency')
@include('frontend.components.about.about-counters')
{{-- @include('frontend.components.home.partners') --}}
@include('frontend.components.about.about-discover-company')
@include('frontend.components.about.about-enterprises')
@include('frontend.components.about.about-contactus')


@endsection
