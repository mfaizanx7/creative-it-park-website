@extends('frontend.layouts.app')

@section('title', 'CreativeSuite | Real Estate Management Software | Creative IT Park')
@section('meta_description', 'CreativeSuite is Creative IT Park\'s real estate management software — streamlining property listings, client management, and transactions for real estate businesses.')

@section('content')
@include('frontend.components.product-details.products_banner')
@include('frontend.components.product-details.realstate-details')

@endsection
