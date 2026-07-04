@extends('frontend.layouts.app')

@section('title', 'Our Products | Software Solutions by Creative IT Park')
@section('meta_description', 'Explore software products built by Creative IT Park — including CoworkIT, a coworking space management platform, and CreativeSuite, a real estate management solution.')

@section('content')

@include('frontend.components.about.about-header')
@include('frontend.components.products.products_banner')
@include('frontend.components.products.products_website')




@endsection
