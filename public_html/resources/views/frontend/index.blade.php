@extends('frontend.layouts.app')

@section('title', 'Creative IT Park | Leading IT Solutions Company in Pakistan')
@section('meta_description', 'Creative IT Park is a top-rated IT company in Islamabad, Pakistan offering website development, mobile app development, UI/UX design, cloud computing, SEO, and digital marketing services.')

@section('content')

    <!-- top bar -->

    {{-- @include('frontend.layouts.header') --}}

    <!-- top bar end -->

    <!-- banner -->

    @include('frontend.components.home.banner')

    <!-- banner end -->



    <!-- about -->

    @include('frontend.components.home.about')

    <!-- about end -->

    {{-- <section class="upper"> --}}



    <!-- services -->

    @include('frontend.components.home.services')

    {{-- Latest Thinking --}}

    {{-- @include("frontend.components.home.latest_thinking") --}}

    {{-- @include('frontend.components.home.services-testing') --}}

    <!-- services end -->



    {{-- <div class="homepage-sections"> --}}



    <!-- partners -->

    @include('frontend.components.home.partners')


    {{-- Testimonials --}}

    @include("frontend.components.home.testimonials")

    <!-- partners end -->



    <!-- major project -->

    @include('frontend.components.home.major-projects')

    {{-- @include('frontend.components.home.test-projects-section') --}}

    <!-- major projects end -->





    <!-- icon boxes -->

    {{-- @include('frontend.components.home.icon-boxes') --}}

    <!-- icon boxes end -->



    {{-- how_we_help --}}

    @include("frontend.components.home.how_we_help")

    <!-- Events -->

    @include('frontend.components.home.events')

    <!-- courses end -->

    {{-- </section> --}}

    @include('frontend.components.home.content')

    <!-- awards -->

    @include('frontend.components.home.awards')

    <!-- awards end -->

@endsection

