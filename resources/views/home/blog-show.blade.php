@extends('layouts.app')
@section('meta_tags')
<title>{{ $post['title'] }} | GoFeast Blog</title>
<meta name="description" content="{{ $post['description'] }}">
@endsection
@section('content')
<section class="wrapper bg-light">
    <div class="container pt-10 pb-14 pb-md-16">
        <div class="row">
            <div class="col-lg-12 mx-auto">
                <div class="blog single">
                    <div class="card">
                        <figure class="card-img-top">
                            <img src="{{ asset('assets/img/photos/banners/' . $post['image']) }}" alt="{{ $post['title'] }}" />
                        </figure>
                        <div class="card-body">
                            <article class="post">
                                <div class="post-header">
                                    <h1 class="h2 mt-1 mb-4">{{ $post['title'] }}</h1>
                                </div>
                                <div class="post-content">
                                    <p>{{ $post['description'] }}</p>
                                    <p><strong>Best For:</strong> {{ $post['best_for'] }}</p>
                                    <p><strong>Featured Deals:</strong> {{ $post['featured_deals'] }}</p>
                                </div>
                            </article>
                        </div>
                    </div>
                </div>
                <div class="mt-6">
                    <a href="{{ route('blog') }}" class="btn btn-danger">Back to Blog</a>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
