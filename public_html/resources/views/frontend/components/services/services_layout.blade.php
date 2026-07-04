@extends('frontend.layouts.app')

@section('title', 'Our Services | Web, Mobile, Cloud & Digital Solutions | Creative IT Park')
@section('meta_description', 'Explore the full range of IT services at Creative IT Park: website development, mobile app development, UI/UX design, cloud computing, graphic design, SEO, and content writing.')

@section('content')
{{-- @include('frontend.components.about.about-header') --}}
{{--@include('frontend.components.industries_page.industries_banner')
@include('frontend.components.industries_page.industries_cards') --}}
@include('frontend.components.about.about-header')
@include('frontend.components.services.services_banner')
@include('frontend.components.services.service_cards')
@include('frontend.components.industries_page.call-to-action-bg')
@include('frontend.components.industries_page.industries_cards')
{{-- @include('frontend.components.home.events') --}}
@include('frontend.components.about.about-contactus')

@endsection