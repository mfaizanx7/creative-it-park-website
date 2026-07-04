@extends('frontend.layouts.app')

@section('title', 'Industries We Serve | Sector-Specific IT Solutions | Creative IT Park')
@section('meta_description', 'Creative IT Park delivers tailored IT solutions across industries including education, healthcare, real estate, e-commerce, legal services, and the public sector.')

@section('content')
    @include('frontend.components.about.about-header')
    @include('frontend.components.industries_page.industries_banner')
    @include('frontend.components.industries_page.call-to-action')
    @include('frontend.components.industries_page.industries-cards')
    {{-- @include('frontend.components.industries_page.industries_cards') --}}
    @include('frontend.components.industries_page.call-to-action-bg')
    {{-- @include('frontend.components.home.testimonials') --}}
    {{-- @include('frontend.components.home.events') --}}
    @include('frontend.components.about.about-contactus')
@endsection
