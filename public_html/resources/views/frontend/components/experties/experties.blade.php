@extends('frontend.layouts.app')

@section('title', 'Our Expertise | Technical Skills & Capabilities | Creative IT Park')
@section('meta_description', 'Discover the deep technical expertise at Creative IT Park — from full-stack development and UI/UX design to cloud infrastructure, SEO, and digital marketing strategies.')

@section('content')

@include('frontend.components.about.about-header')
@include('frontend.components.experties.experties-banner')
@include('frontend.components.experties.experties-cards')






@endsection