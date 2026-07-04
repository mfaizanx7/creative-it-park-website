@extends('frontend.layouts.app')

@section('title', 'Our News | Latest Updates from Creative IT Park')
@section('meta_description', 'Read the latest news and company updates from Creative IT Park — new projects, partnerships, events, and technology developments from our team.')

@section('content')

@include('frontend.components.about.about-header')
@include('frontend.components.news.news-banner')
@include('frontend.components.news.our_news_details')




@endsection
