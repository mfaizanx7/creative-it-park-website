@extends('frontend.layouts.app')

@section('title', 'Our Experts | Meet the Team | Creative IT Park')
@section('meta_description', 'Meet the talented designers, developers, and strategists at Creative IT Park. Our expert team drives digital innovation and delivers exceptional results for clients worldwide.')

@section('content')

@include('frontend.components.about.about-header')
@include('frontend.components.team.team-banner')
@include('frontend.components.team.team-members')
@include('frontend.components.team.team-lead-us')
@include('frontend.components.team.team-leadership')




@endsection


