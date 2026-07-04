@extends('frontend.layouts.app')

@section('title', 'Blog | IT Insights & Digital Trends | Creative IT Park')
@section('meta_description', 'Read the Creative IT Park blog for expert insights on web development, mobile apps, UI/UX design, cloud computing, SEO, and digital transformation for businesses.')

<style>
    body {
        background-color: #fff;
        margin-top: 20px;
    }

    .media.media-news {
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        position: relative;
        padding-bottom: 210px;
    }

    @media (min-width: 768px) {
        .media.media-news {
            padding-bottom: 0;
            margin-bottom: 0;
        }
    }

    @media (min-width: 1200px) {
        .media.media-news {
            padding-bottom: 25px;
            margin-bottom: 0;
        }
    }

    .media.media-news .media-body {
        padding: 20px;
        box-shadow: 0 22px 28px 0 rgba(0, 0, 0, 0.06);
        background: #fff;
        position: absolute;
        width: 300px;
        height: 200px;
        right: 0;
        bottom: 0;
    }

    @media (min-width: 768px) {
        .media.media-news .media-body {
            position: relative;
            padding: 46.5px 35px;
            right: 0;
            width: 300px;
            height: 200px;
        }
    }

    @media (min-width: 992px) {
        .media.media-news .media-body {
            right: 40px;
            bottom: 0;
            width: 300px;
            height: 200px;
        }
    }

    @media (min-width: 1200px) {
        .media.media-news .media-body {
            position: absolute;
            right: 35px;
            width: 300px;
            height: 200px;
            padding: 20px;
        }
    }

    .media.media-news .media-body .media-date {
        font-family: "Open Sans", sans-serif;
        color: #848484;
        margin-bottom: 10px;
    }

    .media.media-news .media-body h5 {
        font-size: 22px;
        padding-bottom: 15px;
        /* margin-bottom: 20px; */
    }

    .media.media-news .media-body h5.small {
        font-size: 16px;
    }

    .media.media-news .media-body p {
        font-family: "Open Sans", sans-serif;
        color: #848484;
    }

    .media.media-news .media-body .common-btn {
        margin-top: 10px;
    }

    .mil-box-center {
        align-items: normal !important;
        text-align: left !important;
    }

    .mil-hover-card {
        height: 440px;
    }

    .mil-hover-card:hover {
        box-shadow: none !important;
    }

    .mil-hover-card:hover i {
        background-color: transparent !important;
    }

    .author-name {
        /* font-size: 14px; */
        display: flex;
        justify-content: space-between;
    }

    .mil-cover-frame {
        height: 230px;
        overflow: hidden;
        border-radius: 10px;
    }

    .mil-cover-frame img {
        height: 230px;
    }

    .mil-footer-bottom .container {
        height: initial!important;
    }

    .iconsocial-sm {
        align-items: center!important;
    }
    @media only screen and (max-width: 640px) {
        .blogsRow {
            gap: 3rem;
        }
    }
</style>

@section('content')
    @include('frontend.components.about.about-header')
    <div class="mil-banner-sm mil-deep-bg">
        <img src="{{ asset('./frontend/img/deco/map.png') }}" alt="background" class="mil-background-image">
        <div class="mil-deco mil-deco-accent" style="top: 47%; right: 10%; transform: rotate(90deg)"></div>
        <div class="mil-banner-content">
            <div class="container mil-relative">
                <ul class="mil-breadcrumbs mil-mb-30">
                    <li><a href="{{ url('/') }}">Home</a></li>
                    <li><a href="{{ url('about') }}">Blog</a></li>
                </ul>
                <h2 class="mil-uppercase">Blogs</h2>
            </div>
        </div>
    </div>
    <section class="mil-p-120-60">
        <div class="container">
            <div class="row no-gutters blogsRow">

                @foreach ($blogs as $item)
                    {{-- <div class="col-xl-6 col-12 mb-5 mb-xl-0">
                        <a href="{{ route('blogs_details', ['id' => $item->id]) }}" class="media-anchor"
                            style="text-decoration: none; color: inherit;">
                            <div class="media media-news mb-5">
                                <div class="media-img">
                                    <img style="max-height: 350px; max-width:300px;"
                                        src="{{ asset('assets/uploads/blogs/' . $item->image) }}"
                                        alt="Generic placeholder image">
                                </div>
                                <div class="media-body" style="max-height: 200px;">
                                    <span class="media-date">{{ date('d F Y', strtotime($item->created_at)) }}</span>
                                    <h5 class="mt-0 sep">{{ $item->title }}</h5>
                                    <p class="text-truncate-1-line">{{ Str::limit($item->description, 75, '...') }}</p>
                                    
                                    <span class="author-name">Author : {{ $item->author }}</span>
                                </div>
                            </div>
                        </a>
                    </div> --}}
                    {{-- <div class="col-xl-6 col-12 mb-5 mb-xl-0">
                        <a href="{{ route('blogs_details', ['id' => $item->id]) }}" class="media-anchor"
                            style="text-decoration: none; color: inherit;">
                            <div class="media media-news mb-5">
                                <div class="media-img">
                                    <img style="max-height: 350px; max-width:300px;"
                                        src="{{ asset('assets/uploads/blogs/' . $item->image) }}"
                                        alt="Generic placeholder image">
                                </div>
                                <div class="media-body" style="max-height: 200px;">
                                    <span class="media-date">{{ date('d F Y', strtotime($item->created_at)) }}</span>
                                    <h5 class="mt-0 sep">{{ $item->title }}</h5>
                                    <p class="text-truncate-1-line">{{ Str::limit($item->description, 75, '...') }}</p>

                                    <span class="author-name">Author : {{ $item->author }}</span>
                                </div>
                            </div>
                        </a>
                    </div> --}}
                    <div class="col-md-6 col-xl-4">
                        {{-- href="{{ route('blogs_details', ['id' => $item->id]) }}" --}}
                        <a href="{{ route('blog.show', ['id' => Str::slug($item->title)]) }}"
                            class="mil-hover-card mil-box-center mil-mb-15  " style="padding: 0; border: 0;">
                            <div class="mil-deco mil-deco-accent" style="top: -10%; right: -10%;"></div>
                            <div class="mil-cover-frame mil-mb-15" style="flex-shrink: 0;">
                                <img src="{{ asset('assets/uploads/blogs/' . $item->image) }}" class="w-full "
                                    alt="Product Image" style="border-radius: 10px;">
                            </div>
                            <span class="author-name mil-mb-15">
                                <span>
                                    <i class="fa fa-user"></i> {{ ' ' }} {{ $item->author }}
                                </span>
                                <span>
                                    <i class="fas"></i> {{ ' ' }}
                                    {{ date('d F Y', strtotime($item->created_at)) }}
                                </span>
                            </span>
                            <div class="mil-divider mil-mb-15"></div>
                            <h5 class="mil-mb-15" style="text-align: left;">{{ $item->title }}</h5>
                            <p class="mil-mb-15">
                                {!! Str::limit(strip_tags($item->description, ''), 75, '...') !!}
                            </p>

                            {{-- <div class="mil-link"><span>Read More</span><i class="fas fa-arrow-right"></i></div> --}}
                        </a>
                    </div>
                @endforeach
            </div>


            <div class="mil-divider mil-mb-60"></div>

            @if ($blogs->total() > 8)
                <div class="mil-pagination mil-hidden-arrows">
                    <div class="mil-slider-nav">
                        @if ($blogs->onFirstPage())
                            <div class="mil-slider-btn-prev mil-blog-prev" style="visibility: hidden;">
                            </div>
                        @else
                            <div class="mil-slider-btn-prev mil-blog-prev">
                                <a href="{{ $blogs->previousPageUrl() }}">
                                    {{-- <i class="fas fa-arrow-left"></i><span class="mil-h6">Prev</span> --}}
                                </a>
                            </div>
                        @endif
                    </div>

                    <ul class="mil-pagination-numbers">
                        @foreach ($blogs->getUrlRange(1, $blogs->lastPage()) as $page => $url)
                            <li class="{{ $blogs->currentPage() == $page ? 'mil-active' : '' }}">
                                <a href="{{ $url }}">{{ $page }}</a>
                            </li>
                        @endforeach
                    </ul>

                    <div class="mil-slider-nav">
                        @if ($blogs->hasMorePages())
                            <div class="mil-slider-btn-next mil-blog-next">
                                <a href="{{ $blogs->nextPageUrl() }}">
                                    {{-- <span class="mil-h6">Next</span><i class="fas fa-arrow-right"></i> --}}
                                </a>
                            </div>
                        @else
                            <div class="mil-slider-btn-next mil-blog-next" style="visibility: hidden;">
                                {{-- <span class="mil-h6">Next</span><i class="fas fa-arrow-right"></i> --}}
                            </div>
                        @endif
                    </div>
                </div>
            @endif
        </div>


    </section>
@endsection
