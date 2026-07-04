@extends('frontend.layouts.app')

@section('title', $blogs->title . ' | Creative IT Park Blog')
@section('meta_description', Str::limit(strip_tags($blogs->description), 155))

@section('meta_extra')
    <meta property="og:type" content="article">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:title" content="{{ $blogs->title }}">
    <meta property="og:description" content="{{ Str::limit(strip_tags($blogs->description), 150) }}">
    <meta property="og:image" content="{{ asset('assets/uploads/blogs/' . $blogs->image) }}">
    <meta property="og:site_name" content="Creative IT Park">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="{{ $blogs->title }}">
    <meta name="twitter:description" content="{{ Str::limit(strip_tags($blogs->description), 150) }}">
    <meta name="twitter:image" content="{{ asset('assets/uploads/blogs/' . $blogs->image) }}">
@endsection

@section('json_ld')
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "BlogPosting",
  "headline": {{ json_encode($blogs->title) }},
  "description": {{ json_encode(Str::limit(strip_tags($blogs->description), 200)) }},
  "image": {{ json_encode(asset('assets/uploads/blogs/' . $blogs->image)) }},
  "datePublished": {{ json_encode($blogs->created_at ? $blogs->created_at->toIso8601String() : '') }},
  "dateModified": {{ json_encode($blogs->updated_at ? $blogs->updated_at->toIso8601String() : '') }},
  "author": {
    "@type": "Organization",
    "name": "Creative IT Park",
    "url": "https://creativeitpark.org"
  },
  "publisher": {
    "@type": "Organization",
    "name": "Creative IT Park",
    "logo": {
      "@type": "ImageObject",
      "url": "{{ asset('frontend/images/images/Creative IT Park w.webp') }}"
    }
  },
  "mainEntityOfPage": {
    "@type": "WebPage",
    "@id": {{ json_encode(url()->current()) }}
  }
}
</script>
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "BreadcrumbList",
  "itemListElement": [
    {"@type": "ListItem", "position": 1, "name": "Home", "item": "https://creativeitpark.org"},
    {"@type": "ListItem", "position": 2, "name": "Blog", "item": "https://creativeitpark.org/blog"},
    {"@type": "ListItem", "position": 3, "name": {{ json_encode($blogs->title) }}, "item": {{ json_encode(url()->current()) }}}
  ]
}
</script>
@endsection

@section('styles')
@endsection

@section('content')
    @include('frontend.components.about.about-header')

    <style>
        .mil-hover-card:hover {
            box-shadow: none !important;
        }

        .post-meta {
            gap: 1rem;
            display: flex;
        }

        .mil-cover-frame {
            height: 200px;
            overflow: hidden;
            border-radius: 10px;
        }

        .mil-hover-card:hover i {
            background-color: transparent !important;
        }

        .blog-container h2 {
            font-size: 27px!important;
        }

        @media only screen and (max-width: 640px) {
            .post-meta {
                flex-direction: column;
                gap: 0rem;
            }
        }
    </style>

    <div class="mil-banner-sm mil-deep-bg">
        <img src="{{ asset('./frontend/img/deco/map.png') }}" alt="background" class="mil-background-image">
        <div class="mil-deco mil-deco-accent" style="top: 47%; right: 10%; transform: rotate(90deg)"></div>
        <div class="mil-banner-content">
            <div class="container mil-relative">
                <ul class="mil-breadcrumbs mil-mb-30">
                    <li><a href="{{ url('/') }}">Home</a></li>
                    <li><a href="{{ url('about') }}">Blog</a></li>
                    {{-- <li><a href="#">{{ $blogs->title }}</a></li> --}}
                </ul>
                <h2 class="mil-uppercase">{{ $blogs->title }}</h2>
            </div>
        </div>
    </div>

    <div class="container blog-container row " style="margin-top: 9rem; margin-inline: auto;">
        <div class=" col-md-8 col-xl-8">
            <div class="">

                <!-- HERO / FEATURED IMAGE -->
                <div class="blog-hero">
                    <img src="{{ asset('assets/uploads/blogs/' . $blogs->image) }}" alt="{{ $blogs->title }}"
                        style="width: 100%;">
                </div>

                <!-- TITLE + META -->
                <div class="mt-4 mil-mb-15">
                    <div class="post-meta" style=" display: flex;">
                        <span><i class="fas fa-user"></i> {{ ' ' }}
                            {{ $blogs->author ?? 'Creative IT Park' }}</span>
                        <span><i class="far fa-calendar-alt"></i>
                            {{ \Carbon\Carbon::parse($blogs->created_at)->format('d F, Y') }}</span>
                        <span><i class="far fa-clock"></i>
                            {{-- quick reading time estimate based on words --}}
                            @php
                                $plain = strip_tags($blogs->description);
                                $words = str_word_count($plain);
                                $mins = max(1, round($words / 200)); // 200 wpm
                            @endphp
                            {{ $mins }} min read
                        </span>
                        @if (!empty($blogs->category))
                            <span><i class="fas fa-folder"></i> {{ $blogs->category }}</span>
                        @endif
                    </div>

                    <h1 class="post-title">{{ $blogs->title }}</h1>

                    <div class="post-tags">
                        @if (!empty($blogs->tags))
                            @foreach (explode(',', $blogs->tags) as $tag)
                                <span class="post-tag">{{ trim($tag) }}</span>
                            @endforeach
                        @endif
                    </div>

                    <div class="share-buttons" style="display: flex; gap: 1rem; ">
                        {{-- simple share links; adjust URLs if you have routes --}}
                        <a href="https://www.facebook.com/sharer/sharer.php?u={{ urlencode(Request::fullUrl()) }}"
                            target="_blank"><i class="fab fa-facebook-f"></i></a>
                        <a href="https://twitter.com/intent/tweet?text={{ urlencode($blogs->title) }}&url={{ urlencode(Request::fullUrl()) }}"
                            target="_blank"><i class="fab fa-twitter"></i> </a>
                        <a href="mailto:?subject={{ urlencode($blogs->title) }}&body={{ urlencode(Request::fullUrl()) }}"><i
                                class="fas fa-envelope"></i> </a>
                    </div>
                </div>

                <!-- POST BODY (WYSIWYG - rendered as HTML) -->
                <div class="post-body mil-mb-60" style="color: black;">
                    {!! $blogs->description !!}
                </div>

                {{-- <div class="mil-divider mil-mb-60"></div> --}}

                <!-- AUTHOR CARD -->
                {{-- <div class="author-card" style="box-shadow: 1px 4px 8px 0px #00000014; padding: 10px; display: flex; gap: 1rem;">
                    <div>
                        <i class="fas fa-user" style="font-size: 50px;"></i>
                    </div>
                    <div>
                        <div><i>Posted By</i></div>
                        <div class="meta"><strong>{{ $blogs->author ?? 'Creative IT Park' }}</strong></div>
                    </div>
                </div> --}}
                {{-- <div class="mt-4">
                    <div class="author-card">
                        <img src="{{ asset('assets/uploads/authors/' . ($blogs->author_image ?? 'default-author.jpg')) }}"
                            alt="{{ $blogs->author }}">
                        <div>
                            <div class="meta"><strong>{{ $blogs->author ?? 'Creative IT Park' }}</strong></div>
                            <div class="meta" style="color:#6b7280; font-size:0.88rem;">Product Manager · Creative IT Park
                            </div>
                            @if (!empty($blogs->author_bio))
                                <div class="mt-2" style="font-size:0.95rem; color:#4b5563;">
                                    {{ $blogs->author_bio }}
                                </div>
                            @endif
                            <div class="mt-2">
                                @if (!empty($blogs->author_twitter))
                                    <a href="{{ $blogs->author_twitter }}" class="mil-link" target="_blank"
                                        style="margin-right:8px;">
                                        <i class="fab fa-twitter"></i> @{{ trim(str_replace('https://twitter.com/', '', $blogs - > author_twitter), '/') }}
                                    </a>
                                @endif
                                @if (!empty($blogs->author_linkedin))
                                    <a href="{{ $blogs->author_linkedin }}" class="mil-link" target="_blank">
                                        <i class="fab fa-linkedin"></i> LinkedIn
                                    </a>
                                @endif
                            </div>
                        </div>
                    </div>
                </div> --}}

                <!-- RELATED POSTS (optional) -->
                @if (isset($related) && $related->count())
                    <div class="mt-5">
                        <h5>Related posts</h5>
                        <div class="row">
                            @foreach ($related as $item)
                                <div class="col-md-6 col-xl-4">
                                    <a href="{{ route('blogs_details', ['id' => $item->id]) }}"
                                        class="mil-hover-card mil-box-center mil-mb-30" style="padding: 0; border: 0;">
                                        <div class="mil-cover-frame mil-mb-15">
                                            <img src="{{ asset('assets/uploads/blogs/' . $item->image) }}" class="w-full"
                                                alt="{{ $item->title }}" style="border-radius: 8px;">
                                        </div>
                                        <h6 style="margin:6px 0 4px;">{{ $item->title }}</h6>
                                        <div class="post-meta" style="font-size:0.85rem;">
                                            <span><i class="fa fa-user"></i> {{ $item->author }}</span>
                                            <span><i class="fas fa-clock"></i>
                                                {{ date('d F Y', strtotime($item->created_at)) }}</span>
                                        </div>
                                    </a>
                                </div>
                            @endforeach
                        </div>
                    </div>
                @endif

            </div>
        </div>
        <div class=" col-md-4 col-xl-4">

            @if (isset($latestblogs) && $latestblogs->count())
                <div class="">
                    <h3>Latest posts</h3>
                    <div class="row mt-4">
                        @foreach ($latestblogs as $item)
                            <div class=" mil-mb-30">
                                <a href="{{ route('blog.show', ['id' => Str::slug($item->title)]) }}"
                                    class="mil-hover-card mil-box-center " style="padding: 0; border: 0;">
                                    <div class="mil-cover-frame ">
                                        <img src="{{ asset('assets/uploads/blogs/' . $item->image) }}" class="w-full"
                                            alt="{{ $item->title }}" style="border-radius: 8px;">
                                    </div>
                                    <h6 style="margin:6px 0 4px;">{{ $item->title }}</h6>
                                    <div class="post-meta" style="font-size:0.85rem;">
                                        <span><i class="fa fa-user"></i> {{ $item->author }}</span>
                                        <span><i class="fas fa-clock"></i>
                                            {{ date('d F Y', strtotime($item->created_at)) }}</span>
                                    </div>
                                </a>
                            </div>
                        @endforeach
                    </div>
                </div>
            @endif
        </div>

        <div class="mil-divider mil-mb-60"></div>
    </div>

@endsection
