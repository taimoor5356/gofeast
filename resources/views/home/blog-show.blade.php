@extends('layouts.app')
@section('meta_tags')
<title>{{ $post['title'] }} | GoFeast Blog</title>
<meta name="description" content="{{ $post['meta_description'] ?? $post['excerpt'] }}">
@endsection
@section('styles')
<style>
    .blog-hero {
        background: linear-gradient(135deg, #b4333d 0%, #8f2530 100%);
    }

    .blog-section-number {
        display: inline-flex;
        align-items: center;
        justify-content: center;
        width: 44px;
        height: 44px;
        border-radius: 50%;
        background: rgba(180, 51, 61, .1);
        color: #b4333d;
        font-weight: 700;
        font-size: 15px;
        margin-bottom: 16px;
    }

    .blog-section img {
        border-radius: 20px;
        box-shadow: 0 16px 40px rgba(0, 0, 0, .12);
        width: 100%;
        height: 320px;
        object-fit: cover;
    }

    .blog-chip {
        display: inline-flex;
        align-items: flex-start;
        gap: 10px;
        background: #faf3f3;
        border-radius: 16px;
        padding: 12px 16px;
        font-size: 13.5px;
        color: #444;
        line-height: 1.4;
    }

    .blog-chip i {
        color: #b4333d;
        font-size: 17px;
        margin-top: 1px;
        flex-shrink: 0;
    }

    .blog-chip strong {
        color: #222;
    }
</style>
@endsection
@section('content')

<section class="wrapper blog-hero text-white">
    <div class="container py-12 py-md-14 text-center">
        <div class="col-lg-9 mx-auto">
            <h1 class="display-4 fw-bold text-white mb-4">{{ $post['title'] }}</h1>
            <p class="fs-18 text-white opacity-90 mb-0">{{ $post['excerpt'] }}</p>
        </div>
    </div>
</section>

<section class="wrapper bg-light">
    <div class="container pt-10 pb-6">
        @foreach($post['sections'] as $i => $section)
        <div class="blog-section row align-items-center gy-5 {{ $i > 0 ? 'mt-10 pt-10 border-top' : '' }}">
            <div class="col-lg-6 {{ $i % 2 === 1 ? 'order-lg-2' : '' }}">
                <img src="{{ asset('assets/img/photos/banners/' . $section['image']) }}" alt="{{ $section['title'] }}">
            </div>
            <div class="col-lg-6 {{ $i % 2 === 1 ? 'order-lg-1' : '' }}">
                <span class="blog-section-number">{{ sprintf('%02d', $i + 1) }}</span>
                <h2 class="h3 mb-3">{{ $section['title'] }}</h2>
                <p class="text-muted mb-4">{{ $section['description'] }}</p>
                <div class="d-flex flex-column gap-2">
                    <div class="blog-chip">
                        <i class="uil uil-users-alt"></i>
                        <span><strong>Best For:</strong> {{ $section['best_for'] }}</span>
                    </div>
                    <div class="blog-chip">
                        <i class="uil uil-tag-alt"></i>
                        <span><strong>Featured Deals:</strong> {{ $section['featured_deals'] }}</span>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</section>

<section class="wrapper blog-hero text-white text-center">
    <div class="container py-10">
        <h2 class="text-white mb-3">Hungry Yet?</h2>
        <p class="text-white opacity-90 mb-4">Order from your favorite Lahore restaurants now on GoFeast.</p>
        <a href="{{ route('restaurants') }}" class="btn btn-light rounded-pill px-5">Order Now</a>
    </div>
</section>

<section class="wrapper bg-light">
    <div class="container py-6 text-center">
        <a href="{{ route('blog') }}" class="btn btn-outline-danger rounded-pill px-4">
            <i class="uil uil-arrow-left"></i> Back to Blog
        </a>
    </div>
</section>

@endsection
