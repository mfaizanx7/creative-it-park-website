@extends('frontend.layouts.app')

@section('title', 'News & Updates | Latest IT Industry News | Creative IT Park')
@section('meta_description', 'Stay up to date with the latest news, announcements, and technology insights from Creative IT Park and the broader IT industry.')

@section('content')

@include('frontend.components.about.about-header')
@include('frontend.components.news.news-banner')
@include('frontend.components.news.news-blog')




@endsection