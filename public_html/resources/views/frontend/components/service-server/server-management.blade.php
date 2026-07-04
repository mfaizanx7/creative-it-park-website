@extends('frontend.layouts.app')

@section('title', 'Server Management Services | Reliable Infrastructure | Creative IT Park')
@section('meta_description', 'Creative IT Park offers professional server management services — setup, monitoring, security patching, and maintenance to keep your infrastructure running reliably 24/7.')

@section('content')

@include('frontend.components.about.about-header')
@include('frontend.components.service-server.server-banner')
@include('frontend.components.service-server.server-about')
@include('frontend.components.service-server.server-company')
@include('frontend.components.service-server.server-advantage')
@include('frontend.components.service-server.server-solutions')
@include('frontend.components.service-server.server-contact')






@endsection