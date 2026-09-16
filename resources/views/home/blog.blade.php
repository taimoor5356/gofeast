@extends('layouts.app')
@section('meta_tags')
<title>Food Guides, Deals & News in Lahore | GoFeast </title>
<meta name="description" content="Discover top food spots, local dining guides, restaurant reviews and exclusive GoFeast discount deals on the official GoFeast Lahore blog.">
@endsection
@section('content')
<section class="wrapper bg-light">
    <div class="container py-10 py-md-10">
        <div class="row">
            <div class="col-md-10 col-lg-8 col-xl-7 col-xxl-6 mx-auto text-center">
                <h3 class="display-4 pb-5 text-primary">Blogs
                </h3>
            </div>
            <!-- /column -->
        </div>
        <div class="row">
            <div class="col-lg-12 mx-auto">
                <div class="blog grid grid-view">
                    <div class="row isotope gx-md-8 gy-8 mb-8 justify-content-center">
                        @foreach($posts as $slug => $post)
                        <article class="item post col-md-6 col-lg-4">
                            <div class="card">
                                <figure class="card-img-top overlay overlay-1 hover-scale">
                                    <a href="{{ route('blog.show', $slug) }}">
                                        <img src="{{asset('assets/img/photos/banners/' . $post['image'])}}"
                                            alt="{{ $post['title'] }}" />
                                    </a>
                                    <figcaption>
                                        <h5 class="from-top mb-0">Read More</h5>
                                    </figcaption>
                                </figure>
                                <div class="card-body">
                                    <div class="post-header">
                                        <!-- /.post-category -->
                                        <h2 class="post-title h3 mt-1 mb-3">
                                            <a href="{{ route('blog.show', $slug) }}" class="link-dark">
                                                {{ $post['title'] }}
                                            </a>
                                        </h2>
                                    </div>
                                    <!-- /.post-header -->
                                    <div class="post-content">
                                        <p>
                                            {{ $post['description'] }}
                                            <br>
                                            • Best For: {{ $post['best_for'] }}
                                            <br>
                                            • Featured Deals: {{ $post['featured_deals'] }}
                                        </p>
                                    </div>
                                    <!-- /.post-content -->
                                </div>
                                <!--/.card-body -->
                                <div class="card-footer">
                                    <ul class="post-meta d-flex mb-0">

                                        <!-- <li class="post-comments"><a href="#"><i
                                                            class="uil uil-comment"></i>4</a></li>
                                                <li class="post-likes ms-auto"><a href="#"><i
                                                            class="uil uil-heart-alt"></i>5</a></li> -->
                                    </ul>
                                    <!-- /.post-meta -->
                                </div>
                                <!-- /.card-footer -->
                            </div>
                            <!-- /.card -->
                        </article>
                        @endforeach
                        <!-- /.post -->
                    </div>
                    <!-- /.row -->
                </div>
            </div>
            <!-- /column -->
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container -->
</section>
@endsection
