@extends('frontend.layouts.app')

@section('title', ($industry_slug ? $industry_slug->heading . ' Industry Solutions' : 'Industry Solutions') . ' | Creative IT Park')
@section('meta_description', $industry_slug ? 'Creative IT Park delivers custom digital solutions for the ' . $industry_slug->heading . ' industry — tailored software, web, and mobile services to drive your sector forward.' : 'Creative IT Park delivers tailored IT and digital solutions for your industry. Explore our sector-specific software, web, and mobile services.')

@section('content')

@include('frontend.components.about.about-header')
@include('frontend.components.industries.industry-banner')



@endsection
