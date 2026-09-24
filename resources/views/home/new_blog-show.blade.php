@extends('layouts.app')
@section('meta_tags')
<title>{{ $blog['title'] }} | GoFeast Blog</title>
<meta name="description" content="{{ $blog['subtitle'] ?: ($blog['paragraphs'][0] ?? '') }}">
@endsection
@section('styles')
<style>
    .blog-hero {
        background: linear-gradient(135deg, #b4333d 0%, #8f2530 100%);
    }

    .blog-hero-subtitle {
        font-size: 17px;
        opacity: .9;
        margin-top: 16px;
        margin-bottom: 0;
    }

    .blog-article-card {
        background: #fff;
        border-radius: 24px;
        box-shadow: 0 20px 50px rgba(0, 0, 0, .1);
        padding: 32px 24px;
        position: relative;
        z-index: 2;
        margin-top: -64px;
    }

    @media (min-width: 768px) {
        .blog-article-card {
            padding: 56px;
            margin-top: -90px;
        }
    }

    .blog-page-banner {
        width: 100%;
        max-height: 420px;
        object-fit: cover;
        border-radius: 18px;
        margin-bottom: 32px;
    }

    .blog-lead p {
        font-size: 17px;
        line-height: 1.85;
        color: #555;
    }

    .blog-other-image {
        width: 100%;
        max-height: 360px;
        object-fit: cover;
        border-radius: 20px;
        box-shadow: 0 16px 40px rgba(0, 0, 0, .12);
        margin-top: 32px;
    }

    .blog-cta-box {
        background: linear-gradient(135deg, #b4333d 0%, #8f2530 100%);
        border-radius: 20px;
        padding: 40px 24px;
        color: #fff;
        text-align: center;
        margin-top: 48px;
    }

    .blog-cta-box p {
        color: #fff;
        opacity: .92;
    }

    .blog-cta-box .btn {
        margin: 6px;
    }

    /* This theme's .btn-light / .btn-outline-light hover states render white
       text on a white background (invisible). These replacements keep the
       same look but with readable colors in every state. */
    .btn-solid-white {
        background-color: #fff;
        color: #b4333d;
        border: 0;
    }

    .btn-solid-white:hover {
        background-color: #f3e9ea;
        color: #b4333d;
    }

    .btn-outline-white-safe {
        background-color: transparent;
        color: #fff;
        border: 1px solid #fff;
    }

    .btn-outline-white-safe:hover {
        background-color: #fff;
        color: #b4333d;
        border-color: #fff;
    }

    .blog-link {
        color: #b4333d;
        font-weight: 700;
        text-decoration: underline;
        text-decoration-color: rgba(180, 51, 61, .35);
        text-underline-offset: 2px;
    }

    .blog-link:hover {
        color: #8f2530;
        text-decoration-color: currentColor;
    }

    .blog-cta-box .blog-link {
        color: #fff;
        text-decoration-color: rgba(255, 255, 255, .5);
    }

    .blog-cta-box .blog-link:hover {
        color: #fff;
        text-decoration-color: #fff;
    }
</style>
@endsection
@section('content')

<section class="wrapper blog-hero text-white">
    <div class="container pt-10 pt-md-12 pb-16 pb-md-20 text-center">
        <div class="col-lg-9 mx-auto">
            <h1 class="display-5 fw-bold text-white mb-0">{{ $blog['title'] }}</h1>
            @if(!empty($blog['subtitle']))
            <p class="blog-hero-subtitle">{{ $blog['subtitle'] }}</p>
            @endif
        </div>
    </div>
</section>

<section class="wrapper bg-light">
    <div class="container">
        <div class="col-lg-10 mx-auto">
            <div class="blog-article-card">
                @if(!empty($blog['page_banner']))
                <img src="{{ $blog['page_banner'] }}" referrerpolicy="no-referrer" alt="{{ $blog['title'] }}" class="blog-page-banner">
                @endif

                <div class="blog-lead">
                    @foreach($blog['paragraphs'] as $paragraph)
                    <p>{!! $paragraph !!}</p>
                    @endforeach
                </div>

                @if(!empty($blog['other_image']))
                <img src="{{ $blog['other_image'] }}" referrerpolicy="no-referrer" alt="{{ $blog['title'] }}" class="blog-other-image">
                @endif

                @if(!empty($blog['footer']))
                <div class="blog-cta-box">
                    <p class="fs-16 mb-4">{!! $blog['footer'] !!}</p>
                    <a href="https://play.google.com/store/apps/details?id=com.gomeat.app" target="_blank" class="btn btn-solid-white rounded-pill px-4">
                        <i class="uil uil-android"></i> Get it on Google Play
                    </a>
                    <a href="https://apps.apple.com/us/app/gomeat/id1441921154" target="_blank" class="btn btn-outline-white-safe rounded-pill px-4">
                        <i class="uil uil-apple"></i> Download on the App Store
                    </a>
                </div>
                @endif
            </div>
        </div>
    </div>
</section>

<section class="wrapper blog-hero text-white text-center">
    <div class="container py-10">
        <h2 class="text-white mb-3">Hungry Yet?</h2>
        <p class="text-white opacity-90 mb-4">Order from your favorite Lahore restaurants now on GoFeast.</p>
        <a href="https://order.gofeast.io" class="btn btn-solid-white rounded-pill px-5">Order Now</a>
    </div>
</section>

<section class="wrapper bg-light">
    <div class="container py-6 text-center">
        <a href="{{ route('new.blogs') }}" class="btn btn-outline-danger rounded-pill px-4">
            <i class="uil uil-arrow-left"></i> Back to Blog
        </a>
    </div>
</section>

@endsection
