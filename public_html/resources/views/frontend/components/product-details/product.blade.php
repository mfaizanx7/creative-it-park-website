@extends('frontend.layouts.app')

@section('title', 'CoworkIT | Coworking Space Management Platform | Creative IT Park')
@section('meta_description', 'CoworkIT by Creative IT Park is a comprehensive coworking space management platform for bookings, billing, member management, and workspace analytics.')

@section('content')
@include('frontend.components.product-details.products_banner')
@include('frontend.components.product-details.product-details')

@endsection
