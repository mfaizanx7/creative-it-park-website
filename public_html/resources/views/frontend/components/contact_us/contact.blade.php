@extends('frontend.layouts.app')

@section('title', 'Contact Us | Get in Touch | Creative IT Park')
@section('meta_description', 'Contact Creative IT Park — reach our offices in Islamabad, Rawalpindi, or Valencia, Spain. Tell us about your project and let our team help you build something great.')

@section('json_ld')
<script type="application/ld+json">
{"@context":"https://schema.org","@type":"ContactPage","name":"Contact Us | Creative IT Park","url":"https://creativeitpark.org/career","description":"Contact Creative IT Park — reach our offices in Islamabad, Rawalpindi, or Valencia, Spain. Tell us about your project.","breadcrumb":{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"Home","item":"https://creativeitpark.org"},{"@type":"ListItem","position":2,"name":"Contact","item":"https://creativeitpark.org/career"}]}}
</script>
@endsection

@section('content')

@include('frontend.components.about.about-header')
@include('frontend.components.contact_us.contact-banner')




@endsection
