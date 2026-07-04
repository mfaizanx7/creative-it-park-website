@extends('frontend.layouts.app')

@section('title', 'Portfolio | Our Work & Case Studies | Creative IT Park')
@section('meta_description', 'Browse Creative IT Park\'s portfolio of delivered websites, mobile apps, and digital products. See how we have helped businesses across Pakistan, Spain, and beyond succeed online.')

@section('json_ld')
<script type="application/ld+json">
{"@context":"https://schema.org","@type":"CollectionPage","name":"Portfolio | Creative IT Park","url":"https://creativeitpark.org/portfolio","description":"Browse Creative IT Park's portfolio of delivered websites, mobile apps, and digital products.","breadcrumb":{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"Home","item":"https://creativeitpark.org"},{"@type":"ListItem","position":2,"name":"Portfolio","item":"https://creativeitpark.org/portfolio"}]}}
</script>
@endsection

@section('content')

@include('frontend.components.about.about-header')
@include('frontend.components.portfolio.portfolio_banner')
@include('frontend.components.portfolio.portfolio_website')
@include('frontend.components.portfolio.projectdetail')



@endsection
