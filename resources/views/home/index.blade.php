@extends('layouts.app')
@section('meta_tags')
    <!-- Page Title -->

    <title>GoFeast - Online Food & Grocery Delivery in Bahria Town Lahore</title>

    <!-- Meta Description -->

    <meta name="description" content=" GoFeast offers fast and reliable online food and grocery delivery services exclusively in Bahria Town Lahore. Enjoy various cuisines and quality grocery items delivered straight to your doorstep.">

    <!-- Meta Keywords -->

    <meta name="keywords" content="GoFeast, online food delivery, grocery delivery, Bahria Town Lahore food delivery, Bahria Town Lahore groceries, food delivery service, grocery delivery service, Bahria Town Lahore online delivery">

    <!-- Author -->

    <meta name="author" content="GoFeast">

    <!-- Language -->

    <meta http-equiv="Content-Language" content="en">

    <!-- Open Graph Meta Tags -->

    <meta property="og:title" content="GoFeast - Online Food & Grocery Delivery in Bahria Town Lahore">

    <meta property="og: description" content=" GoFeast offers fast and reliable online food and grocery delivery services exclusively in Bahria Town Lahore. Enjoy various cuisines and quality grocery items delivered straight to your doorstep.">

    <meta property="og:url" content="https://www.gofeast.pk">

    <meta property="og:type" content="website">

    <meta property="og:image" content="https://www.gofeast.pk/images/og-image.jpg">

    <!-- Twitter Card Meta Tags -->

    <meta name="twitter:card" content="summary_large_image">

    <meta name="twitter:title" content="GoFeast - Online Food & Grocery Delivery in Bahria Town">

    <meta name="twitter:description" content="GoFeast offers fast and reliable online food and grocery delivery services exclusively in Bahria Town Lahore. Enjoy various cuisines and quality grocery items delivered straight to your doorstep.">

    <meta name="twitter:image" content="https://www.gofeast.pk/images/twitter-image.jpg">

    <meta name="twitter:site" content="@GoFeast">
@endsection
@section('styles')

<style>
    @keyframes fadeInLeft {
        from {
            opacity: 0;
            transform: translateX(-500px);
        }

        to {
            opacity: 1;
            transform: translateX(0);
        }
    }

    @keyframes fadeInRight {
        from {
            opacity: 0;
            transform: translateX(500px);
        }

        to {
            opacity: 1;
            transform: translateX(0);
        }
    }

    .main-carousel-banner .owl-stage-outer {
        overflow: visible;
    }

    /* Hide the carousel on mobile devices (screens narrower than 768px) */
    @media (max-width: 767px) {
        .main-carousel-banner .owl-stage-outer {
            overflow: hidden !important;
        }
    }

    /* General styles for carousel items */
    .main-carousel-banner .item {
        transition: transform 0.3s ease-in-out;
    }

    .main-carousel-banner .item.center {
        opacity: 1;
    }

    /* Animation styles */
    .fade-in-left {
        animation: fadeInLeft 1.5s;
    }

    .fade-in-right {
        animation: fadeInRight 1.5s;
    }
</style>
@endsection
@section('content')

<section class="wrapper px-0" style="background-size: 100% 100%;">
    <div class="container p-0 pb-8 pb-md-8 pt-8 pt-md-8">
        <div class="container-fluid px-0">
            <div class="row d-flex justify-content-center text-center">
                <div class="carousel main-carousel-banner owl-carousel clients mb-0"
                    data-margin="30"
                    data-loop="true"
                    data-dots="false"
                    data-autoplay="true"
                    data-autoplay-timeout="8000"
                    data-responsive='{"0":{"items": "1"}, "768":{"items": "1"}, "992":{"items": "1"}, "1200":{"items": "1"}, "1400":{"items": "1"}}'>
                    <div class="item mx-10 px-0">
                        <a href="https://orders.gofeast.pk/category-item?id=1666&name=TWFpbg==">
                            <img src="{{asset('assets/img/photos/banners/1.jpg')}}" class="img-fluid" style="border-radius: 15px;" alt="" loading="lazy">
                        </a>
                    </div>
                    <div class="item mx-10 px-0">
                        <a href="{{route('godriver')}}">
                            <img src="{{asset('assets/img/photos/banners/2.jpg')}}" class="img-fluid" style="border-radius: 15px;" alt="" loading="lazy">
                        </a>
                    </div>
                    <div class="item mx-10 px-0">
                        <a href="https://orders.gofeast.pk/category-item?id=1863&name=SG90IFBpY2tz">
                            <img src="{{asset('assets/img/photos/banners/3.jpg')}}" class="img-fluid" style="border-radius: 15px;" alt="" loading="lazy">
                        </a>
                    </div>
                    <div class="item mx-10 px-0">
                        <a href="{{route('restaurants')}}">
                            <img src="{{asset('assets/img/photos/banners/4.jpg')}}" class="img-fluid" style="border-radius: 15px;" alt="" loading="lazy">
                        </a>
                    </div>
                    <div class="item mx-10 px-0">
                        <a href="{{route('gopartner')}}">
                            <img src="{{asset('assets/img/photos/banners/5.jpg')}}" class="img-fluid" style="border-radius: 15px;" alt="" loading="lazy">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- /section -->

<section class="wrapper bg-light pb-8">
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-lg-8 col-xl-7 col-xxl-6 mx-auto text-center">
                <h1 class="pb-5 text-primary" style="font-size: 55px">Promotional Products!
                </h1>
            </div>
            <!-- /column -->
        </div>
        <!-- /.row -->
        <div class="row gx-md-8 gy-8 text-center ">
            <section class="wrapper bg-light px-0">
                <div class="container px-0">
                    <div class="carousel main-carousel-banner owl-carousel clients mb-0" data-margin="30" data-loop="true" data-dots="false" data-autoplay="true" data-autoplay-timeout="3000" data-rtl="false" data-responsive='{"0":{"items": "2"}, "768":{"items": "2"}, "992":{"items": "2"}, "1200":{"items": "2"}, "1400":{"items": "3"}}'>
                        <div class="item"><a href="https://orders.gofeast.pk/popular-items?page=reviewed"><img class="rounded border border-danger" src="{{asset('assets/img/photos/items/img (1).jpeg')}}" alt="" loading="lazy"></a></div>
                        <div class="item"><a href="https://orders.gofeast.pk/popular-items?page=reviewed"><img class="rounded border border-danger" src="{{asset('assets/img/photos/items/img (2).jpeg')}}" alt="" loading="lazy"></a></div>
                        <div class="item"><a href="https://orders.gofeast.pk/popular-items?page=reviewed"><img class="rounded border border-danger" src="{{asset('assets/img/photos/items/img (3).jpeg')}}" alt="" loading="lazy"></a></div>
                        <div class="item"><a href="https://orders.gofeast.pk/popular-items?page=reviewed"><img class="rounded border border-danger" src="{{asset('assets/img/photos/items/img (4).jpeg')}}" alt="" loading="lazy"></a></div>
                        <div class="item"><a href="https://orders.gofeast.pk/popular-items?page=reviewed"><img class="rounded border border-danger" src="{{asset('assets/img/photos/items/img (5).jpeg')}}" alt="" loading="lazy"></a></div>
                        <div class="item"><a href="https://orders.gofeast.pk/popular-items?page=reviewed"><img class="rounded border border-danger" src="{{asset('assets/img/photos/items/img (6).jpeg')}}" alt="" loading="lazy"></a></div>
                        <div class="item"><a href="https://orders.gofeast.pk/popular-items?page=reviewed"><img class="rounded border border-danger" src="{{asset('assets/img/photos/items/img (7).jpeg')}}" alt="" loading="lazy"></a></div>
                        <div class="item"><a href="https://orders.gofeast.pk/popular-items?page=reviewed"><img class="rounded border border-danger" src="{{asset('assets/img/photos/items/img (8).jpeg')}}" alt="" loading="lazy"></a></div>
                        <div class="item"><a href="https://orders.gofeast.pk/popular-items?page=reviewed"><img class="rounded border border-danger" src="{{asset('assets/img/photos/items/img (9).jpeg')}}" alt="" loading="lazy"></a></div>
                        <div class="item"><a href="https://orders.gofeast.pk/popular-items?page=reviewed"><img class="rounded border border-danger" src="{{asset('assets/img/photos/items/img (10).jpeg')}}" alt="" loading="lazy"></a></div>
                        <div class="item"><a href="https://orders.gofeast.pk/popular-items?page=reviewed"><img class="rounded border border-danger" src="{{asset('assets/img/photos/items/img (11).jpeg')}}" alt="" loading="lazy"></a></div>
                        <div class="item"><a href="https://orders.gofeast.pk/popular-items?page=reviewed"><img class="rounded border border-danger" src="{{asset('assets/img/photos/items/img (12).jpeg')}}" alt="" loading="lazy"></a></div>
                        <div class="item"><a href="https://orders.gofeast.pk/popular-items?page=reviewed"><img class="rounded border border-danger" src="{{asset('assets/img/photos/items/img (13).jpeg')}}" alt="" loading="lazy"></a></div>
                        <div class="item"><a href="https://orders.gofeast.pk/popular-items?page=reviewed"><img class="rounded border border-danger" src="{{asset('assets/img/photos/items/img (14).jpeg')}}" alt="" loading="lazy"></a></div>
                        <div class="item"><a href="https://orders.gofeast.pk/popular-items?page=reviewed"><img class="rounded border border-danger" src="{{asset('assets/img/photos/items/img (15).jpeg')}}" alt="" loading="lazy"></a></div>
                        <div class="item"><a href="https://orders.gofeast.pk/popular-items?page=reviewed"><img class="rounded border border-danger" src="{{asset('assets/img/photos/items/img (16).jpeg')}}" alt="" loading="lazy"></a></div>
                        <div class="item"><a href="https://orders.gofeast.pk/popular-items?page=reviewed"><img class="rounded border border-danger" src="{{asset('assets/img/photos/items/img (17).jpeg')}}" alt="" loading="lazy"></a></div>
                        <div class="item"><a href="https://orders.gofeast.pk/popular-items?page=reviewed"><img class="rounded border border-danger" src="{{asset('assets/img/photos/items/img (18).jpeg')}}" alt="" loading="lazy"></a></div>
                        <div class="item"><a href="https://orders.gofeast.pk/popular-items?page=reviewed"><img class="rounded border border-danger" src="{{asset('assets/img/photos/items/img (19).jpeg')}}" alt="" loading="lazy"></a></div>
                        <div class="item"><a href="https://orders.gofeast.pk/popular-items?page=reviewed"><img class="rounded border border-danger" src="{{asset('assets/img/photos/items/img (20).jpeg')}}" alt="" loading="lazy"></a></div>
                    </div>
                    <!-- /.owl-carousel -->
                </div>
                <!-- /.container -->
            </section>
        </div>
    </div>
    <!--/.container -->
</section>
<!-- /section -->

<section class="wrapper bg-light px-0">
    <div class="container px-0">
        <div class="row gx-lg-8 gx-xl-10 align-items-center text-center">
            <h3 class="display-4 text-primary" style="font-size: 55px;">Top Brands!</h3>
            <section class="wrapper bg-light">
                <div class="container py-md-10">
                    <div class="carousel owl-carousel clients mb-0" data-margin="30" data-loop="true" data-dots="false" data-autoplay="true" data-autoplay-timeout="6500" data-responsive='{"0":{"items": "1"}, "768":{"items": "2"}, "992":{"items": "5"}, "1200":{"items": "5"}, "1400":{"items": "5"}}'>
                        <div class="item px-5"><img style="width:150px; height: 150px" class="rounded-circle border border-danger" src="{{asset('assets/img/photos/stores/1.JPEG')}}" alt="" loading="lazy"></div>
                        <div class="item px-5"><img style="width:150px; height: 150px" class="rounded-circle border border-danger" src="{{asset('assets/img/photos/stores/2.jpg')}}" alt="" loading="lazy"></div>
                        <div class="item px-5"><img style="width:150px; height: 150px" class="rounded-circle border border-danger" src="{{asset('assets/img/photos/stores/3.png')}}" alt="" loading="lazy"></div>
                        <div class="item px-5"><img style="width:150px; height: 150px" class="rounded-circle border border-danger" src="{{asset('assets/img/photos/stores/4.jpg')}}" alt="" loading="lazy"></div>
                        <div class="item px-5"><img style="width:150px; height: 150px" class="rounded-circle border border-danger" src="{{asset('assets/img/photos/stores/5.png')}}" alt="" loading="lazy"></div>
                        <div class="item px-5"><img style="width:150px; height: 150px" class="rounded-circle border border-danger" src="{{asset('assets/img/photos/stores/6.jpg')}}" alt="" loading="lazy"></div>
                        <div class="item px-5"><img style="width:150px; height: 150px" class="rounded-circle border border-danger" src="{{asset('assets/img/photos/stores/7.jpg')}}" alt="" loading="lazy"></div>
                        <div class="item px-5"><img style="width:150px; height: 150px" class="rounded-circle border border-danger" src="{{asset('assets/img/photos/stores/8.jpg')}}" alt="" loading="lazy"></div>
                        <div class="item px-5"><img style="width:150px; height: 150px" class="rounded-circle border border-danger" src="{{asset('assets/img/photos/stores/9.jpg')}}" alt="" loading="lazy"></div>
                    </div>
                </div>
            </section>
        </div>
    </div>
</section>

<section class="wrapper image-wrapper bg-image bg-overlay" data-image-src="{{asset('assets/img/photos/bg.jpg')}}" style="margin-top: 50px;">
    <div class="container py-15 mt-10">
        <div class="row text-center">
            <div class="col-lg-11 col-xl-10 col-xxl-8 mx-auto">
                <h2 class="fs-16 text-uppercase text-white mb-3">We provide 24/7 delivery.
                </h2>
                <h3 class="display-4 mb-6 text-white px-lg-5 px-xxl-0">From your favorite Restaurants!
                </h3>
                <p>
                    <span class="typer text-white text-nowrap" data-delay="150" data-words="Fresh! anytime at your door step"></span><span class="cursor text-white" data-owner=" typer"></span>
                </p>
            </div>
            <!-- /column -->
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container -->
</section>
<!-- /section -->

<section class="wrapper bg-light px-0" style="margin-top: 50px;">
    <div class="container px-0">
        <div class="row gx-lg-8 gx-xl-10 align-items-center text-center">
            <h3 class="display-4 text-primary" style="font-size: 55px;">Trusted by Brands!</h3>
            <section class="wrapper bg-light">
                <div class="container py-md-10">
                    <div class="carousel owl-carousel clients mb-0" data-margin="30" data-loop="true" data-dots="false" data-autoplay="true" data-autoplay-timeout="4000" data-responsive='{"0":{"items": "1"}, "768":{"items": "2"}, "992":{"items": "5"}, "1200":{"items": "5"}, "1400":{"items": "5"}}'>
                        <div class="item px-5"><img style="width:150px; height: 150px" class="rounded-circle border border-danger" src="{{asset('assets/img/photos/stores/1.JPEG')}}" alt="" loading="lazy"></div>
                        <div class="item px-5"><img style="width:150px; height: 150px" class="rounded-circle border border-danger" src="{{asset('assets/img/photos/stores/2.jpg')}}" alt="" loading="lazy"></div>
                        <div class="item px-5"><img style="width:150px; height: 150px" class="rounded-circle border border-danger" src="{{asset('assets/img/photos/stores/3.png')}}" alt="" loading="lazy"></div>
                        <div class="item px-5"><img style="width:150px; height: 150px" class="rounded-circle border border-danger" src="{{asset('assets/img/photos/stores/4.jpg')}}" alt="" loading="lazy"></div>
                        <div class="item px-5"><img style="width:150px; height: 150px" class="rounded-circle border border-danger" src="{{asset('assets/img/photos/stores/5.png')}}" alt="" loading="lazy"></div>
                        <div class="item px-5"><img style="width:150px; height: 150px" class="rounded-circle border border-danger" src="{{asset('assets/img/photos/stores/6.jpg')}}" alt="" loading="lazy"></div>
                        <div class="item px-5"><img style="width:150px; height: 150px" class="rounded-circle border border-danger" src="{{asset('assets/img/photos/stores/7.jpg')}}" alt="" loading="lazy"></div>
                        <div class="item px-5"><img style="width:150px; height: 150px" class="rounded-circle border border-danger" src="{{asset('assets/img/photos/stores/8.jpg')}}" alt="" loading="lazy"></div>
                        <div class="item px-5"><img style="width:150px; height: 150px" class="rounded-circle border border-danger" src="{{asset('assets/img/photos/stores/9.jpg')}}" alt="" loading="lazy"></div>
                    </div>
                </div>
            </section>
        </div>
    </div>
</section>
<!-- /section -->

@endsection

@section('scripts')
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const carousel = document.querySelector('.owl-carousel');

        // Initialize OwlCarousel
        const owl = $(carousel).owlCarousel({
            loop: true,
            margin: 30,
            rtl: false, // Enable right-to-left mode
            autoplay: true,
            autoplayTimeout: 8000,
            autoplayHoverPause: true,
            responsive: {
                0: {
                    items: 1
                },
                768: {
                    items: 1
                },
                992: {
                    items: 1
                },
                1200: {
                    items: 1
                },
                1400: {
                    items: 1
                }
            }
        });

        // Customize the autoplay behavior to reverse the direction
        carousel.addEventListener('translated.owl.carousel', function() {
            carousel.querySelector('.owl-item.active').style.animation = 'move-right 0.3s ease-in-out';
        });
    });
</script>
@endsection