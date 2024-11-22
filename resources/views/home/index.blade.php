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
        .promotional-text {
            font-size: 30px !important;
        }
        .top-brands-text {
            font-size: 30px !important;
        }
        .trusted-by-brands-text {
            font-size: 30px !important;
        }
        .order-from-gofeast-text {
            font-size: 30px !important;
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

        <section class="wrapper"
            style=" background: url({{asset('assets/img/photos/gofeast_images/bg-half.png')}}); background-size: 100% 100%; " data-cue="fadeIn" data-duration="1500">
            <!-- <section class="wrapper bg-light"> -->
            <div class="container  pb-8 pb-md-8 pt-8 pt-md-8">

                <!-- mobile responsive section -->
                <!-- <div class="row  gx-lg-8 gx-xl-12 gy-10 align-items-center"> -->
                <div class="row d-flex justify-content-center  text-center">
                    <div class="row ">
                        <div class=" col-12  video-hide" data-cue="bounceIn" data-group="page-title-buttons" >
                            <video width="80%" height="auto" src="{{asset('assets/img/photos/gofeast_images/App.mp4')}}" style="border-radius:42px" autoplay loop
                                playsinline muted></video>
                        </div>
                    </div>
                    <div class="row ">
                        <div class="col-12 mt-3 p-3 video-hide" data-cues="slideInDown" data-group="order-btn"
                            data-delay="500"
                            style=" background:  url({{asset('assets/img/photos/gofeast_images/bg-red.png')}}); border-radius: 7px 7px 7px 7px; background-size: 100% 100%; ">
                            <div class="text-center">
                                <img class="img-fluid rounded" src="{{asset('assets/img/photos/gofeast_images/left-top.png')}}" alt="" width="200"
                                    height="auto" >
                            </div>
                            <h1 class="text-center mt-5 text-white" data-cues="slideInDown">Digitalizing The
                                Specialty Foods Industry.
                                <br /><span class="typer text-white text-nowrap"
                                    data-words="Blockchain, Marketplace, Home-Delivery"></span><span
                                    class="cursor text-white" data-owner=" typer"></span>
                            </h1>
                            <div class="d-flex justify-content-center mt-5" data-cues="slideInDown"
                                data-group="page-title-buttons">
                                <span><a href="https://orders.gofeast.io" target="_blank"
                                        class="btn btn-lg btn-green rounded me-2">Order Now!</a></span>
                            </div>
                        </div>
                    </div>
                    <div class="row ">
                        <div class="col-12  p-3 video-hide" data-cues="slideInDown" data-group="order-btn"
                            data-delay="500"
                            style=" background: url({{asset('assets/img/photos/gofeast_images/bg-orange.png')}}); border-radius: 7px 7px 7px 7px; background-size: 100% 100%; ">
                            <div class="text-center">
                                <img class="img-fluid rounded" src="{{asset('assets/img/photos/gofeast_images/GOMT Icon.png')}}" alt=""
                                    width="200" height="auto" >
                            </div>
                            <h2 class="text-center mt-5 text-white" data-cues="slideInDown">Empowering The Specialty
                                Meat Industry
                                <br /><span class="typer text-white text-nowrap"
                                    data-words="Token, Blockchain, Marketplace"></span><span class="cursor text-white"
                                    data-owner=" typer"></span>
                            </h2>
                            <div class="d-flex justify-content-center mt-5" data-cues="slideInDown"
                                data-group="page-title-buttons">
                                <!-- TODO: GOMT Popup -->
                                <span><a href="https://www.bitmart.com/trade/en-US?symbol=GOMT_USDT&layout=basic" target="=_blank"
                                        class="btn btn-lg btn-primary rounded me-2">Buy Now</a></span>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- </div> -->
                <!-- /column -->
                <div class="col-lg-12 video-show">
                    <div class="row d-flex justify-content-center">
                        <div class="col-4 mt-12 pt-10" data-cues="slideInDown" data-group="order-btn">
                            <div class="text-center">
                                <img class="img-fluid rounded" src="{{asset('assets/img/photos/gofeast_images/left-top.png')}}" alt="" width="200"
                                    height="auto" >
                            </div>
                            <h1 class="text-center mt-5 text-white" data-cues="slideInDown">
                                Digitalizing The Specialty Foods Industry.
                                <br /><span class="typer text-white text-nowrap"
                                    data-words="Home Delivery, Same Day, Certifications"></span><span
                                    class="cursor text-white" data-owner=" typer"></span>
                            </h1>
                            <div class="d-flex justify-content-center mt-5">
                                <span><a href="https://orders.gofeast.io" target="_blank"
                                        class="btn btn-lg btn-green rounded me-2">Order Now</a></span>
                            </div>
                        </div>
                        <!-- /column -->
                        <div class="col-4 col-lg-3 col-md-4 " data-cue="bounceIn" data-duration="2000">
                            <!-- <div> -->
                            <video  width="100%" height="auto"
                                src="{{asset('assets/img/photos/gofeast_images/App.mp4')}}" style="border-radius:48px;" autoplay loop playsinline muted></video>
                            <!-- </div> -->
                        </div>
                        <!-- /column -->
                        <div class=" col-4 mt-12 pt-10" data-cues="slideInDown" data-group="order-btn" data-delay="500">
                            <div class="text-center">
                                <img class="img-fluid rounded" src="{{asset('assets/img/photos/gofeast_images/GOMT-Icon.png')}}" alt=""
                                    width="200" height="auto" >
                            </div>
                            <h2 class="text-center mt-5 text-white" data-cues="slideInDown">
                                Empowering The Specialty Meat Industry
                                <br /><span class="typer text-white text-nowrap"
                                    data-words="Token, Blockchain, Marketplace"></span><span class="cursor text-white"
                                    data-owner=" typer"></span>
                            </h2>
                            <div class="d-flex justify-content-center mt-5">
                                <!-- TODO: GOMT Popup -->
                                <span><a href="https://www.bitmart.com/trade/en-US?symbol=GOMT_USDT&layout=basic" target="_blank"
                                        class="btn btn-lg btn-primary rounded me-2">Buy Now</a></span>
                            </div>
                        </div>
                        <!-- /column -->
                    </div>
                    <!-- /.row -->
                </div>
                <!-- /column -->
            </div>
            <!-- /.row -->
            <!-- </div> -->
            <!-- /.container -->
        </section>
        <!-- /section -->

        <section class="wrapper bg-light">
            <div class="container  py-10 py-md-10">
                <div class="row">
                    <div class="col-md-10 col-lg-8 col-xl-7 col-xxl-6 mx-auto text-center">
                        <h3 class="display-4 pb-5 text-primary">Join Us!
                        </h3>
                    </div>
                    <!-- /column -->
                </div>
                <!-- /.row -->
                <div class="row gx-md-8 gy-8 text-center ">
                    <div class="col-md-6 col-lg-3">
                        <div class="mb-5">
                            <img src="{{asset('assets/img/photos/gofeast_images/store.png')}}" width="120" height="120" loading="lazy" alt="" >
                        </div>

                        <h4>GoPartner</h4>
                        <p class="mb-3">Reach out to new customers and increase your online presence, no setup costs!
                        </p>
                        <a href="./go-partner" class="more hover">Learn More</a>
                    </div>
                    <!--/column -->
                    <div class="col-md-6 col-lg-3">

                        <div class="mb-5">
                            <img src="{{asset('assets/img/photos/gofeast_images/driver.png')}}" width="120" height="120" loading="lazy" class="" alt="" >
                        </div>
                        <h4>GoDriver</h4>
                        <p class="mb-3">Deliver when you want and where you want, earn the highest payout in the
                            industry!</p>
                        <a href="./go-driver" class="more hover">Learn More</a>
                    </div>
                    <!--/column -->
                    <div class="col-md-6 col-lg-3">
                        <div class="mb-5">
                            <img src="{{asset('assets/img/photos/gofeast_images/app.png')}}" width="120" height="120" loading="lazy" class="" alt="" >
                        </div>
                        <h4>Ordering App</h4>
                        <p class="mb-2">Enjoy exclusive discounts and same-day delivery from your favorite local
                            specialty stores!
                        </p>
                        <!-- TODO: Apps Popup -->
                        <!-- <a href="#" class="more hover">Learn More</a> -->
                        <!-- <div class="d-flex flex-row align-items-center me-6 ms-auto "> -->
                        <a href="https://play.google.com/store/apps/details?id=com.gofeast.app" target="_blank"
                            class="hover text-primary me-2 fs-28"><i class="uil uil-android"></i></a>
                        <a href="https://apps.apple.com/us/app/gofeast/id1441921154" target="_blank"
                            class="hover text-primary fs-28"><i class="uil uil-apple"></i></a>
                    </div>
                    <!--/column -->
                    <div class="col-md-6 col-lg-3">
                        <div class="mb-5">
                            <img src="{{asset('assets/img/photos/gofeast_images/gomt.png')}}" width="120" height="120" loading="lazy" class="" alt="" >
                        </div>
                        <h4>GOMT Token</h4>
                        <p class="mb-3">Utility token backed by a real use-case, with a limited supply and excellent
                            burn economy!
                        </p>
                        <a href="./gomt" class="more hover">Learn More</a>
                    </div>
                    <!--/column -->
                </div>
            </div>
            <!--/.container -->
        </section>
        <!-- /section -->

        <!-- /section -->
        <section class="wrapper bg-primary">
            <div class="container py-10 ">
                <div class="row gx-lg-8 gx-xl-12 gy-10 gy-lg-0 mb-2 text-white align-items-center">
                    <div class="col-lg-4">
                        <h3 class="display-4 text-white mb-3 pe-xxl-15">GoFeast Apps,</h3>
                        <p class="lead fs-lg mb-0 pe-xxl-10">serving specialty meat consumers
                            since 2019!
                        </p>
                    </div>
                    <!-- /column -->
                    <div class="col-lg-8 mt-lg-2">
                        <div class="row align-items-center counter-wrapper gy-6 text-center">
                            <div class="col-md-4">
                                <div class="icon btn btn-circle btn-lg btn-soft-primary disabled mb-4">
                                    <i class="uil uil-chart-line"></i>
                                </div>
                                <h3 class="counter counter-lg text-white">$1.2 Mil+</h3>
                                <p>Gross Volume (since 2019)</p>
                            </div>
                            <!--/column -->
                            <div class="col-md-4">
                                <div class="icon btn btn-circle btn-lg btn-soft-primary disabled mb-4">
                                    <i class="uil uil-download-alt"></i>
                                    <!-- <i class="uil uil-presentation-check"></i> -->
                                </div>
                                <h3 class="counter counter-lg text-white">10k+</h3>
                                <p>App Downloads</p>
                            </div>
                            <!--/column -->
                            <div class="col-md-4">
                                <div class="icon btn btn-circle btn-lg btn-soft-primary disabled mb-4">
                                    <i class="uil uil-shopping-cart"></i>
                                </div>
                                <h3 class="counter counter-lg text-white">13k+</h3>
                                <p>Orders</p>
                            </div>
                            <!--/column -->
                        </div>
                        <!--/.row -->
                    </div>
                    <!-- /column -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container -->
        </section>
        <!-- /section -->

        <section class="wrapper bg-light">
            <div class="container pt-10 pt-md-10 pb-13 pb-md-15">
                <h2 class="display-4 mb-3 text-center text-primary">Testimonials</h2>
                <div class="position-relative">
                    <div class="carousel owl-carousel gap-small" data-margin="0" data-dots="true" data-autoplay="true"
                        data-loop="true" data-autoplay-timeout="5000"
                        data-responsive='{"0":{"items": "1"}, "768":{"items": "2"}, "992":{"items": "3"}, "1200":{"items": "3"}, "1400":{"items": "3"}}'>
                        <div class="item">
                            <div class="item-inner">
                                <div class="card">
                                    <div class="card-body">
                                        <span class="ratings five mb-3"></span>
                                        <blockquote class="icon mb-0">
                                            <p style="text-align: justify;">“I would definitely recommend GoFeast to anyone who hasn't tried it yet,
                                                it has been very helpful and offers same day delivery. Very reasonable
                                                rates and timely delivery. Easily accessible app, excellent interface
                                                also keeps me updated on the status of my orders. Customer service is
                                                impeccable and always responsive to calls and queries. Great service 5
                                                stars all around.”</p>
                                            <div class="blockquote-details">
                                                <img class="rounded-circle w-12" src="{{asset('assets/img/photos/gofeast_images/tcustomer.png')}}"
                                                    alt="" loading="lazy">
                                                <div class="info">
                                                    <h5 class="mb-1">Mubashir Mitra</h5>
                                                    <p class="mb-0">GoCustomer</p>
                                                </div>
                                            </div>
                                        </blockquote>
                                    </div>
                                    <!-- /.card-body -->
                                </div>
                                <!-- /.card -->
                            </div>
                            <!-- /.item-inner -->
                        </div>
                        <!-- /.item -->
                        <div class="item">
                            <div class="item-inner">
                                <div class="card">
                                    <div class="card-body">
                                        <span class="ratings five mb-3"></span>
                                        <blockquote class="icon mb-0">
                                            <p style="text-align: justify;">“The app is super easy to use and has the best rates and quality of items
                                                with quick delivery service as well as immediate responses to calls or
                                                queries, really happy with it after trying out the first time! I hope
                                                they keep doing a good job and expand more!! ”</p>
                                            <div class="blockquote-details">
                                                <img class="rounded-circle w-12"
                                                    src="{{asset('assets/img/photos/gofeast_images/testimonial-female.png')}}" alt="" loading="lazy">
                                                <div class="info">
                                                    <h5 class="mb-1">Mollie </h5>
                                                    <!-- <p class="mb-0">Love the app </p> -->
                                                    <p class="mb-0">GoCustomer</p>
                                                </div>
                                            </div>
                                        </blockquote>
                                    </div>
                                    <!-- /.card-body -->
                                </div>
                                <!-- /.card -->
                            </div>
                            <!-- /.item-inner -->
                        </div>
                        <!-- /.item -->
                        <div class="item">
                            <div class="item-inner">
                                <div class="card">
                                    <div class="card-body">
                                        <span class="ratings five mb-3"></span>
                                        <blockquote class="icon mb-0">
                                            <p style="text-align: justify;">“Very reliable people to work with. Always pay on time and solve our
                                                problems with the best solution ”</p>
                                            <div class="blockquote-details">
                                                <img class="rounded-circle w-12"
                                                    src="{{asset('assets/img/photos/gofeast_images/testimonial-driver.png')}}" alt="" loading="lazy">
                                                <div class="info">
                                                    <h5 class="mb-1">Hussain Tarik </h5>
                                                    <p class="mb-0">GoDriver</p>
                                                </div>
                                            </div>
                                        </blockquote>
                                    </div>
                                    <!-- /.card-body -->
                                </div>
                                <!-- /.card -->
                            </div>
                            <!-- /.item-inner -->
                        </div>
                        <!-- /.item -->
                        <div class="item">
                            <div class="item-inner">
                                <div class="card">
                                    <div class="card-body">
                                        <span class="ratings five mb-3"></span>
                                        <blockquote class="icon mb-0">
                                            <p style="text-align: justify;">“The delivery was pretty fast and the meat was fresh. The price was also
                                                very affordable for such high quality meat. Will definitely order
                                                again.”</p>
                                            <div class="blockquote-details">
                                                <img class="rounded-circle w-12"
                                                    src="{{asset('assets/img/photos/gofeast_images/testimonial-female.png')}}" alt="" loading="lazy">
                                                <div class="info">
                                                    <h5 class="mb-1">Maria Johar </h5>
                                                    <!-- <p class="mb-0">Happy with the delivery </p> -->
                                                    <p class="mb-0">GoCustomer</p>
                                                </div>
                                            </div>
                                        </blockquote>
                                    </div>
                                    <!-- /.card-body -->
                                </div>
                                <!-- /.card -->
                            </div>
                            <!-- /.item-inner -->
                        </div>
                        <!-- /.item -->
                        <div class="item">
                            <div class="item-inner">
                                <div class="card">
                                    <div class="card-body">
                                        <span class="ratings five mb-3"></span>
                                        <blockquote class="icon mb-0">
                                            <p style="text-align: justify;">“Excellent app by an excellent company. very happy to have work with a
                                                Muslim owned company that understands halal meat and the middle eastern
                                                community. i was worried to sign up as my employees are not good with
                                                technology so GoFeast was kind enough to offer us alternative methods to
                                                remain updated with the orders etc ”</p>
                                            <div class="blockquote-details">
                                                <img class="rounded-circle w-12"
                                                    src="{{asset('assets/img/photos/gofeast_images/testimonials-partner.png')}}" alt="" loading="lazy">
                                                <div class="info">
                                                    <h5 class="mb-1">Sneha Chandane </h5>
                                                    <!-- <p class="mb-0">Happy with the delivery </p> -->
                                                    <p class="mb-0">GoPartner</p>
                                                </div>
                                            </div>
                                        </blockquote>
                                    </div>
                                    <!-- /.card-body -->
                                </div>
                                <!-- /.card -->
                            </div>
                            <!-- /.item-inner -->
                        </div>
                        <!-- /.item -->
                        <div class="item">
                            <div class="item-inner">
                                <div class="card">
                                    <div class="card-body">
                                        <span class="ratings five mb-3"></span>
                                        <blockquote class="icon mb-0">
                                            <p style="text-align: justify;">“I'm a busy woman with one little one to take care off!! Getting meat at
                                                your doorstep beautifully packed. The convince of having the meat cut of
                                                your choice makes me never want to have the hustle of going to market 😅
                                                Great idea for creating such convince for us!!! ”</p>
                                            <div class="blockquote-details">
                                                <img class="rounded-circle w-12"
                                                    src="{{asset('assets/img/photos/gofeast_images/testimonial-female.png')}}" alt="" loading="lazy">
                                                <div class="info">
                                                    <h5 class="mb-1">Maryam Khan </h5>
                                                    <!-- <p class="mb-0">Great experience </p> -->
                                                    <p class="mb-0">GoCustomer</p>
                                                </div>
                                            </div>
                                        </blockquote>
                                    </div>
                                    <!-- /.card-body -->
                                </div>
                                <!-- /.card -->
                            </div>
                            <!-- /.item-inner -->
                        </div>
                        <!-- /.item -->
                        <div class="item">
                            <div class="item-inner">
                                <div class="card">
                                    <div class="card-body">
                                        <span class="ratings five mb-3"></span>
                                        <blockquote class="icon mb-0">
                                            <p style="text-align: justify;">“Reliable and this is what was needed and fast delivery cheap rates and
                                                most importantly fresh meat ”</p>
                                            <div class="blockquote-details">
                                                <img class="rounded-circle w-12" src="{{asset('assets/img/photos/gofeast_images/tcustomer.png')}}"
                                                    alt="" loading="lazy">
                                                <div class="info">
                                                    <h5 class="mb-1">
                                                        Ali Khan </h5>
                                                    <p class="mb-0">GoCustomer </p>
                                                </div>
                                            </div>
                                        </blockquote>
                                    </div>
                                    <!-- /.card-body -->
                                </div>
                                <!-- /.card -->
                            </div>
                            <!-- /.item-inner -->
                        </div>
                        <!-- /.item -->
                        <div class="item">
                            <div class="item-inner">
                                <div class="card">
                                    <div class="card-body">
                                        <span class="ratings five mb-3"></span>
                                        <blockquote class="icon mb-0">
                                            <p style="text-align: justify;">“App and the sign up process is very simple. once you are onboard, just
                                                keep your app online and you can see all nearby orders, good to see them
                                                expanding to new areas every day ”</p>
                                            <div class="blockquote-details">
                                                <img class="rounded-circle w-12"
                                                    src="{{asset('assets/img/photos/gofeast_images/testimonials-partner.png')}}" alt="" loading="lazy">
                                                <div class="info">
                                                    <h5 class="mb-1">
                                                        Ali Ibrar </h5>
                                                    <p class="mb-0">GoPartner </p>
                                                </div>
                                            </div>
                                        </blockquote>
                                    </div>
                                    <!-- /.card-body -->
                                </div>
                                <!-- /.card -->
                            </div>
                            <!-- /.item-inner -->
                        </div>
                        <!-- /.item -->
                    </div>
                    <!-- /.owl-carousel -->
                </div>
                <!-- /.position-relative -->
            </div>
        </section>

        <!-- /section -->
        <section class="wrapper image-wrapper bg-image bg-overlay" data-image-src="{{asset('assets/img/photos/gofeast_images/bg.jpg')}}">
            <div class="container py-15 ">
                <div class="row text-center">
                    <div class="col-lg-11 col-xl-10 col-xxl-8 mx-auto">
                        <h2 class="fs-16 text-uppercase text-white mb-3">We provide same-day delivery.
                        </h2>
                        <h3 class="display-4 mb-6 text-white px-lg-5 px-xxl-0">From your favorite local specialty stores
                            to your doorstep!
                        </h3>
                        <p>
                            <span class="typer text-white text-nowrap" data-delay="150"
                                data-words="Halal/Kosher meat, Halal/Kosher groceries, Halal/Kosher foods"></span><span
                                class="cursor text-white" data-owner=" typer"></span>
                        </p>
                        <!-- <p class="text-white">Halal/Kosher meat. Halal/Kosher groceries. Halal/Kosher foods.</p> -->
                        <!-- <a href="#" class="btn btn-white rounded mb-0 text-nowrap">Join Us</a> -->
                    </div>
                    <!-- /column -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container -->
        </section>
        <!-- /section -->

        <section class="wrapper bg-light">
            <div class="container pt-10">
                <div class="row gx-lg-8 gx-xl-10 align-items-center text-center">
                    <h3 class="display-4 mb-7 mt-lg-10 text-primary">Order from GoFeast!</h3>
                    <div class="col-lg-6 text-center">
                        <figure>
                            <img src="{{asset('assets/img/photos/gofeast_images/gofeastfeatures1.png')}}" width="90%" height="80%" alt="" loading="lazy">
                        </figure>
                    </div>
                    <div class="col-lg-6 text-center">
                        <figure>
                            <img src="{{asset('assets/img/photos/gofeast_images/gofeastfeatures2.png')}}" width="90%" height="80%" alt="" loading="lazy">
                        </figure>
                    </div>
                    <div class="d-flex justify-content-center mt-5">
                        <span><a href="https://orders.gofeast.io" target="_blank"
                                class="btn btn-lg btn-green rounded fs-28"> Order Now!</a></span>
                    </div>
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container -->
        </section>
        <!-- /section -->

        <!-- <section class="wrapper bg-light">
            <div class="container py-10 py-md-10">
                <div class="row gx-lg-8 gx-xl-10 align-items-center">
                    <div class="col-lg-6 text-center" data-cues="bounceIn" data-duration="2000">
                        <img src="{{asset('assets/img/photos/gofeast_images/app2.png')}}" width="90%" height="80%" alt="" />
                    </div>
                    <div class="col-lg-6">
                        <h3 class="display-4 mb-5 text-primary">Order from GoFeast!</h3>
                        <div class="row gy-6 gx-xxl-8 process-wrapper">
                            <div class="col-md-4"> <img src="{{asset('assets/img/icons/lineal/cloud-computing.svg')}}"
                                    class="svg-inject icon-svg icon-svg-sm text-green mb-3" alt="" />
                                <h4 class="mb-1">Cut the line </h4>
                                <p class="mb-0">Order online and save up on time and effort
                                </p>
                            </div>
                            <div class="col-md-4"> <img src="{{asset('assets/img/icons/lineal/smartphone-2.svg')}}"
                                    class="svg-inject icon-svg icon-svg-sm text-red mb-3" alt="" />
                                <h4 class="mb-1">Same-day delivery
                                </h4>
                                <p class="mb-0">Get fresh meat and food delivered to your doorstep
                                </p>
                            </div>
                            <div class="col-md-4"> <img src="{{asset('assets/img/icons/lineal/rocket.svg')}}"
                                    class="svg-inject icon-svg icon-svg-sm text-aqua mb-3" alt="" />
                                <h4 class="mb-1">Cheapest Rates
                                </h4>
                                <p class="mb-0">Avail discounts, earn loyalty points and get referral rewards
                                </p>
                            </div>
                        </div>
                        <div class="d-flex justify-content-start mt-5" data-cues="slideInDown" data-duration="2000">
                            <span><a class="btn btn-lg btn-green rounded me-2">Order Now!</a></span>
                        </div>
                    </div>
                </div>
            </div>
        </section> -->
        
        <!-- /section -->
        <section class="wrapper bg-light">
            <div class="container py-10 py-md-10 ">
                <div class="row gx-lg-8 gx-xl-12 gy-10 align-items-center d-flex justify-content-center">
                    <div class="col-lg-6 order-lg-2 text-center" data-cues="bounceIn" data-duration="2000">
                        <!-- <figure> -->
                        <img src="{{asset('assets/img/photos/gofeast_images/gomtbuy.png')}}" width="100%" height="auto" alt="" loading="lazy">
                        <!-- </figure> -->
                    </div>
                    <!--/column -->
                    <div class="col-lg-6 ">
                        <h3 class="display-4 mb-7 mt-lg-10 text-primary">Buy GOMT Token!</h3>
                        <div class="accordion accordion-wrapper" id="accordionExample">
                            <div class="card plain accordion-item">
                                <div class="card-header" id="headingOne">
                                    <button class="accordion-button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                        GOMT Utilities </button>
                                </div>
                                <!--/.card-header -->
                                <div id="collapseOne" class="accordion-collapse collapse show"
                                    aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                    <div class="card-body">
                                        <ul>
                                            <li>Place meat, grocery & food orders using GOMT</li>
                                            <li>Get 1% cashback and exclusive discounts</li>
                                            <li>Earn GOMT through our referral program </li>
                                        </ul>
                                    </div>
                                    <!--/.card-body -->
                                </div>
                                <!--/.accordion-collapse -->
                            </div>
                            <!--/.accordion-item -->
                            <div class="card plain accordion-item">
                                <div class="card-header" id="headingTwo">
                                    <button class="collapsed" data-bs-toggle="collapse" data-bs-target="#collapseTwo"
                                        aria-expanded="false" aria-controls="collapseTwo"> Burn Mechanism </button>
                                </div>
                                <!--/.card-header -->
                                <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                                    data-bs-parent="#accordionExample">
                                    <div class="card-body">
                                        <ul>
                                            <li>4% revenue in 2022 & 5% in 2023 to be burnt quarterly</li>
                                            <li>Additional 3% burnt if revenue hits $3 Million</li>
                                            <li>Additional 3% burnt for every order paid using crypto</li>
                                        </ul>
                                    </div>
                                    <!--/.card-body -->
                                </div>
                                <!--/.accordion-collapse -->
                            </div>
                            <!--/.accordion-item -->
                            <div class="card plain accordion-item">
                                <div class="card-header" id="headingThree">
                                    <button class="collapsed" data-bs-toggle="collapse" data-bs-target="#collapseThree"
                                        aria-expanded="false" aria-controls="collapseThree"> Real Use-case
                                    </button>
                                </div>
                                <!--/.card-header -->
                                <div id="collapseThree" class="accordion-collapse collapse"
                                    aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                    <div class="card-body">
                                        <ul>
                                            <li>Business operational since 2019</li>
                                            <li>2000+ stores, 13k+ orders processed</li>
                                            <li>Pioneers in the specialty domain</li>
                                        </ul>
                                    </div>
                                    <!--/.card-body -->
                                </div>
                                <!--/.accordion-collapse -->
                            </div>
                            <!--/.accordion-item -->
                            <div class="card plain accordion-item">
                                <div class="card-header" id="headingFour">
                                    <button class="collapsed" data-bs-toggle="collapse" data-bs-target="#collapseFour"
                                        aria-expanded="false" aria-controls="collapseFour"> Blockchain Certifications
                                    </button>
                                </div>
                                <!--/.card-header -->
                                <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour"
                                    data-bs-parent="#accordionExample">
                                    <div class="card-body">
                                        <ul>
                                            <li>Digitalising the $1.8 trillion global specialty market</li>
                                            <li>Providing transparency and traceability for consumers</li>
                                            <li>Empowering stores at a fraction of the cost </li>
                                        </ul>
                                    </div>
                                    <!--/.card-body -->
                                </div>
                                <!--/.accordion-collapse -->
                            </div>
                        </div>
                        <!--/.accordion -->
                        <!-- <div class="d-flex justify-content-start mt-5" data-cues="slideInDown">
                            <span><a class="btn btn-lg btn-primary rounded me-2">Buy Now!</a></span>
                        </div> -->
                    </div>
                    <!--/column -->
                </div>
                <!--/.row -->
                <div class="d-flex justify-content-center mt-5 mb-10 text-center" data-cues="slideInDown">
                    <!-- TODO: GOMT popup -->
                    <span><a href="https://www.bitmart.com/trade/en-US?symbol=GOMT_USDT&layout=basic" target="_blank"
                            class="btn btn-lg btn-primary rounded fs-28">Buy
                            Now!</a></span>
                </div>
            </div>
            <!-- /.container -->
        </section>
        <!-- /section -->
         
        <!-- /section -->
        <section class="wrapper wrapper-border bg-light">
            <div class="container py-10 py-md-10 ">
                <h3 class="display-4 mb-6 text-center text-primary">Media Mentions</h3>
                <div class="carousel owl-carousel blog grid-view" data-margin="30" data-dots="true" data-autoplay="true"
                    data-autoplay-timeout="4000" data-loop="true"
                    data-responsive='{"0":{"items": "1"}, "768":{"items": "2"}, "992":{"items": "3"}, "1200":{"items": "4"}, "1400":{"items": "4"}}'>
                    <div class="item">
                        <article>
                            <figure class="overlay overlay-1 hover-scale rounded mb-5">
                                <a href="https://news.bitcoin.com/gofeast-token-empowering-local-specialty-stores-using-blockchain/"
                                    target="_blank">
                                    <img src="{{asset('assets/img/photos/gofeast_images/mm-bitcoin.jpg')}}"
                                        alt="" loading="lazy">
                                </a>
                                <figcaption>
                                    <h5 class="from-top mb-0">Read More</h5>
                                </figcaption>
                            </figure>
                            <div class="post-header">
                                <div class="post-category ">
                                    <figure class="rounded mb-2 w-20">
                                        <a href="https://news.bitcoin.com/gofeast-token-empowering-local-specialty-stores-using-blockchain/"
                                            target="_blank">
                                            <img src="{{asset('assets/img/photos/gofeast_images/bitcoin-logo.png')}}" alt="" loading="lazy">
                                        </a>
                                    </figure>
                                </div>
                                <!-- /.post-category -->
                                <h2 class="post-title h3 mt-1 mb-3">
                                    <a class="link-dark"
                                        href="https://news.bitcoin.com/gofeast-token-empowering-local-specialty-stores-using-blockchain/"
                                        target="_blank">
                                        Empowering Local Specialty Stores Using
                                        Blockchain
                                    </a>
                                </h2>
                            </div>
                            <!-- /.post-header -->
                            <div class="post-footer">
                                <ul class="post-meta">
                                    <li class="post-date text-primary"><i class="uil uil-calendar-alt"></i><span>9 Sep
                                            2021</span>
                                    </li>
                                </ul>
                                <!-- /.post-meta -->
                            </div>
                            <!-- /.post-footer -->
                        </article>
                        <!-- /article -->
                    </div>
                    <div class="item">
                        <article>
                            <figure class="overlay overlay-1 hover-scale rounded mb-5">
                                <a href="https://finance.yahoo.com/news/gofeast-token-lists-hydra-dex-133800677.html?guccounter=1"
                                    target="_blank">
                                    <img src="{{asset('assets/img/photos/gofeast_images/hydradex.jpg')}}" alt="" loading="lazy">
                                </a>
                                <figcaption>
                                    <h5 class="from-top mb-0">Read More</h5>
                                </figcaption>
                            </figure>
                            <div class="post-header">
                                <div class="post-category ">
                                    <figure class="rounded mb-2 w-20">
                                        <a href="https://finance.yahoo.com/news/gofeast-token-lists-hydra-dex-133800677.html?guccounter=1"
                                            target="_blank">
                                            <img src="{{asset('assets/img/photos/gofeast_images/yahoo-logo.png')}}"
                                                alt="" loading="lazy">
                                        </a>
                                    </figure>
                                </div>
                                <!-- /.post-category -->
                                <h2 class="post-title h3 mt-1 mb-3">
                                    <a class="link-dark"
                                        href="https://finance.yahoo.com/news/gofeast-token-lists-hydra-dex-133800677.html?guccounter=1"
                                        target="_blank">
                                        GOMT Token Lists on Hydra DEX After a Sold Out ICO
                                    </a>
                                </h2>
                            </div>
                            <!-- /.post-header -->
                            <div class="post-footer">
                                <ul class="post-meta">
                                    <li class="post-date text-primary"><i class="uil uil-calendar-alt"></i><span>31 Jan
                                            2022</span>
                                    </li>
                                </ul>
                                <!-- /.post-meta -->
                            </div>
                            <!-- /.post-footer -->
                        </article>
                        <!-- /article -->
                    </div>
                    <div class="item">
                        <article>
                            <figure class="overlay overlay-1 hover-scale rounded mb-5">
                                <a href="https://blockonomi.com/gofeast-a-necessity-in-modern-times/" target="_blank">
                                    <img src="{{asset('assets/img/photos/gofeast_images/mm-blockonomi.jpeg')}}"
                                        alt="" loading="lazy">
                                </a>
                                <figcaption>
                                    <h5 class="from-top mb-0">Read More</h5>
                                </figcaption>
                            </figure>
                            <div class="post-header">
                                <div class="post-category ">
                                    <figure class="rounded mb-2 w-20">
                                        <a href="https://blockonomi.com/gofeast-a-necessity-in-modern-times/"
                                            target="_blank">
                                            <img src="{{asset('assets/img/photos/gofeast_images/blocknomi-logo.png')}}"
                                                alt="" loading="lazy">
                                        </a>
                                    </figure>
                                </div>
                                <!-- /.post-category -->
                                <h2 class="post-title h3 mt-1 mb-3">
                                    <a class="link-dark"
                                        href="https://blockonomi.com/gofeast-a-necessity-in-modern-times/"
                                        target="_blank">
                                        GoFeast: A Necessity in Modern Times
                                    </a>
                                </h2>
                            </div>
                            <!-- /.post-header -->
                            <div class="post-footer">
                                <ul class="post-meta">
                                    <li class="post-date text-primary"><i class="uil uil-calendar-alt"></i><span>1 Sep
                                            2021</span>
                                    </li>
                                </ul>
                                <!-- /.post-meta -->
                            </div>
                            <!-- /.post-footer -->
                        </article>
                        <!-- /article -->
                    </div>
                    <div class="item">
                        <article>
                            <figure class="overlay overlay-1 hover-scale rounded mb-5">
                                <a href="https://www.startuptofollow.com/article/gofeast-specialty-meat-from-the-store-to-your-door"
                                    target="_blank">
                                    <img src="{{asset('assets/img/photos/gofeast_images/mm-bucket.jpg')}}"
                                        alt="" loading="lazy">
                                </a>
                                <figcaption>
                                    <h5 class="from-top mb-0">Read More</h5>
                                </figcaption>
                            </figure>
                            <div class="post-header">
                                <div class="post-category ">
                                    <figure class="rounded mb-2 w-20">
                                        <a href="https://www.startuptofollow.com/article/gofeast-specialty-meat-from-the-store-to-your-door"
                                            target="_blank">
                                            <img src="{{asset('assets/img/photos/gofeast_images/startuptofollow.png')}}" alt="" loading="lazy">
                                        </a>
                                    </figure>
                                </div>
                                <!-- /.post-category -->
                                <h2 class="post-title h3 mt-1 mb-3">
                                    <a class="link-dark"
                                        href="https://www.startuptofollow.com/article/gofeast-specialty-meat-from-the-store-to-your-door"
                                        target="_blank">
                                        GoFeast, specialty meat from the store to your door
                                    </a>
                                </h2>
                            </div>
                            <!-- /.post-header -->
                            <div class="post-footer">
                                <ul class="post-meta">
                                    <li class="post-date text-primary"><i class="uil uil-calendar-alt"></i><span>26 Jan
                                            2022</span>
                                    </li>
                                </ul>
                                <!-- /.post-meta -->
                            </div>
                            <!-- /.post-footer -->
                        </article>
                        <!-- /article -->
                    </div>
                    <div class="item">
                        <article>
                            <figure class="overlay overlay-1 hover-scale rounded mb-5">
                                <a href="https://www.cryptodaily.co.uk/2021/09/GoFeast-The-revolutionary-platform-that-will-change-the-meat-industry"
                                    target="_blank">
                                    <img src="{{asset('assets/img/photos/gofeast_images/mm-ico-banner-conzilla.jpg')}}"
                                        alt="" loading="lazy">
                                </a>
                                <figcaption>
                                    <h5 class="from-top mb-0">Read More</h5>
                                </figcaption>
                            </figure>
                            <div class="post-header">
                                <div class="post-category">
                                    <figure class="rounded mb-2 w-10">
                                        <a href="https://www.cryptodaily.co.uk/2021/09/GoFeast-The-revolutionary-platform-that-will-change-the-meat-industry"
                                            target="_blank">
                                            <img src="{{asset('assets/img/photos/gofeast_images/cd-shield-logo.png')}}"
                                                alt="" loading="lazy">
                                        </a>
                                    </figure>
                                </div>
                                <!-- /.post-category -->
                                <h2 class="post-title h3 mt-1 mb-3">
                                    <a class="link-dark"
                                        href="https://www.cryptodaily.co.uk/2021/09/GoFeast-The-revolutionary-platform-that-will-change-the-meat-industry"
                                        target="_blank">
                                        GoFeast - The Revolutionary Platform That Will Change The Meat Industry
                                    </a>
                                </h2>
                            </div>
                            <!-- /.post-header -->
                            <div class="post-footer">
                                <ul class="post-meta">
                                    <li class="post-date text-primary"><i class="uil uil-calendar-alt"></i><span>8 Sep
                                            2021</span>
                                    </li>
                                </ul>
                                <!-- /.post-meta -->
                            </div>
                            <!-- /.post-footer -->
                        </article>
                        <!-- /article -->
                    </div>
                    <div class="item">
                        <article>
                            <figure class="overlay overlay-1 hover-scale rounded mb-5">
                                <a href="https://btcmanager.com/cryptocurrencies-are-making-breakthroughs-into-the-food-industry/"
                                    target="_blank">
                                    <img src="{{asset('assets/img/photos/gofeast_images/mm-bucket.jpg')}}"
                                        alt="" loading="lazy">
                                </a>
                                <figcaption>
                                    <h5 class="from-top mb-0">Read More</h5>
                                </figcaption>
                            </figure>
                            <div class="post-header">
                                <div class="post-category ">
                                    <figure class="rounded mb-2 w-20">
                                        <a href="https://btcmanager.com/cryptocurrencies-are-making-breakthroughs-into-the-food-industry/"
                                            target="_blank">
                                            <img src="{{asset('assets/img/photos/gofeast_images/crypto-news-logo.png')}}"
                                                alt="" loading="lazy">
                                        </a>
                                    </figure>
                                </div>
                                <!-- /.post-category -->
                                <h2 class="post-title h3 mt-1 mb-3">
                                    <a class="link-dark"
                                        href="https://btcmanager.com/cryptocurrencies-are-making-breakthroughs-into-the-food-industry/"
                                        target="_blank">
                                        Cryptocurrencies Are Making Breakthroughs Into the Food Industry
                                    </a>
                                </h2>
                            </div>
                            <!-- /.post-header -->
                            <div class="post-footer">
                                <ul class="post-meta">
                                    <li class="post-date text-primary"><i class="uil uil-calendar-alt"></i><span>1 Sep
                                            2021</span>
                                    </li>
                                </ul>
                                <!-- /.post-meta -->
                            </div>
                            <!-- /.post-footer -->
                        </article>
                        <!-- /article -->
                    </div>
                    <div class="item">
                        <article>
                            <figure class="overlay overlay-1 hover-scale rounded mb-5">
                                <a href="https://www.businessheraldonline.com/article/552257996-gofeast-token-launches-affiliate-program-and-ico-tier-2"
                                    target="_blank">
                                    <img src="{{asset('assets/img/photos/gofeast_images/mm-bsdl.jpg')}}" alt="" loading="lazy">
                                </a>
                                <figcaption>
                                    <h5 class="from-top mb-0">Read More</h5>
                                </figcaption>
                            </figure>
                            <div class="post-header">
                                <div class="post-category ">
                                    <figure class="rounded mb-2 w-20">
                                        <a href="https://www.businessheraldonline.com/article/552257996-gofeast-token-launches-affiliate-program-and-ico-tier-2"
                                            target="_blank">
                                            <img src="{{asset('assets/img/photos/gofeast_images/bsns.png')}}" alt="" loading="lazy">
                                        </a>
                                    </figure>
                                </div>
                                <!-- /.post-category -->
                                <h2 class="post-title h3 mt-1 mb-3">
                                    <a class="link-dark"
                                        href="https://www.businessheraldonline.com/article/552257996-gofeast-token-launches-affiliate-program-and-ico-tier-2"
                                        target="_blank">
                                        GOMT Token Launches Affiliate Program and ICO Tier 2
                                    </a>
                                </h2>
                            </div>
                            <!-- /.post-header -->
                            <div class="post-footer">
                                <ul class="post-meta">
                                    <li class="post-date text-primary"><i class="uil uil-calendar-alt"></i><span>3 Sep
                                            2021</span>
                                    </li>
                                </ul>
                                <!-- /.post-meta -->
                            </div>
                            <!-- /.post-footer -->
                        </article>
                        <!-- /article -->
                    </div>
                    <div class="item">
                        <article>
                            <figure class="overlay overlay-1 hover-scale rounded mb-5">
                                <a href="https://investornytt.no/gofeast-ett-ledande-logistikforetag-for-mattransport-ock-kvalitetssakring/"
                                    target="_blank">
                                    <img src="{{asset('assets/img/photos/gofeast_images/mm-investornytt.webp')}}"
                                        alt="" loading="lazy">
                                </a>
                                <figcaption>
                                    <h5 class="from-top mb-0">Read More</h5>
                                </figcaption>
                            </figure>
                            <div class="post-header">
                                <div class="post-category ">
                                    <figure class="rounded mb-2 w-20">
                                        <a href="https://investornytt.no/gofeast-ett-ledande-logistikforetag-for-mattransport-ock-kvalitetssakring/"
                                            target="_blank">
                                            <img src="{{asset('assets/img/photos/gofeast_images/investornytt-logo.webp')}}"
                                                alt="" loading="lazy">
                                        </a>
                                    </figure>
                                </div>
                                <!-- /.post-category -->
                                <h2 class="post-title h3 mt-1 mb-3">
                                    <a class="link-dark"
                                        href="https://investornytt.no/gofeast-ett-ledande-logistikforetag-for-mattransport-ock-kvalitetssakring/"
                                        target="_blank">
                                        Fremtidens supply chain modeller
                                    </a>
                                </h2>
                            </div>
                            <!-- /.post-header -->
                            <div class="post-footer">
                                <ul class="post-meta">
                                    <li class="post-date text-primary"><i class="uil uil-calendar-alt"></i><span>3 Sep
                                            2021</span>
                                    </li>
                                </ul>
                                <!-- /.post-meta -->
                            </div>
                            <!-- /.post-footer -->
                        </article>
                        <!-- /article -->
                    </div>
                    <div class="item">
                        <article>
                            <figure class="overlay overlay-1 hover-scale rounded mb-5">
                                <a href="https://www.newsbtc.com/press-releases/gofeast-launches-affiliate-program-and-ico-tier-2/"
                                    target="_blank">
                                    <img src="{{asset('assets/img/photos/gofeast_images/mm-newsbtc.png')}}" alt="" loading="lazy">
                                </a>
                                <figcaption>
                                    <h5 class="from-top mb-0">Read More</h5>
                                </figcaption>
                            </figure>
                            <div class="post-header">
                                <div class="post-category">
                                    <figure class="rounded mb-2 w-20">
                                        <a href="https://www.newsbtc.com/press-releases/gofeast-launches-affiliate-program-and-ico-tier-2/"
                                            target="_blank">
                                            <img src="{{asset('assets/img/photos/gofeast_images/news-btc-logo.png')}}"
                                                alt="" loading="lazy">
                                        </a>
                                    </figure>
                                </div>
                                <!-- /.post-category -->
                                <h2 class="post-title h3 mt-1 mb-3">
                                    <a class="link-dark"
                                        href="https://www.newsbtc.com/press-releases/gofeast-launches-affiliate-program-and-ico-tier-2/"
                                        target="_blank">
                                        GoFeast Launches Affiliate Program and ICO Tier 2
                                    </a>
                                </h2>
                            </div>
                            <!-- /.post-header -->
                            <div class="post-footer">
                                <ul class="post-meta">
                                    <li class="post-date text-primary"><i class="uil uil-calendar-alt"></i><span>23 Sep
                                            2021</span>
                                    </li>
                                </ul>
                                <!-- /.post-meta -->
                            </div>
                            <!-- /.post-footer -->
                        </article>
                        <!-- /article -->
                    </div>
                    <div class="item">
                        <article>
                            <figure class="overlay overlay-1 hover-scale rounded mb-5">
                                <a href="https://seekingalpha.com/pr/18650942-gofeast-token-lists-on-hydra-dex-after-sold-out-ico"
                                    target="_blank">
                                    <img src="{{asset('assets/img/photos/gofeast_images/hydradex.jpg')}}" alt="" loading="lazy">
                                </a>
                                <figcaption>
                                    <h5 class="from-top mb-0">Read More</h5>
                                </figcaption>
                            </figure>
                            <div class="post-header">
                                <div class="post-category">
                                    <figure class="rounded mb-2 w-20">
                                        <a href="https://seekingalpha.com/pr/18650942-gofeast-token-lists-on-hydra-dex-after-sold-out-ico"
                                            target="_blank">
                                            <img src="{{asset('assets/img/photos/gofeast_images/seeking.png')}}" alt="" loading="lazy">
                                        </a>
                                    </figure>
                                </div>
                                <!-- /.post-category -->
                                <h2 class="post-title h3 mt-1 mb-3">
                                    <a class="link-dark"
                                        href="https://seekingalpha.com/pr/18650942-gofeast-token-lists-on-hydra-dex-after-sold-out-ico"
                                        target="_blank">
                                        GOMT Token Lists on Hydra DEX After a Sold Out ICO
                                    </a>
                                </h2>
                            </div>
                            <!-- /.post-header -->
                            <div class="post-footer">
                                <ul class="post-meta">
                                    <li class="post-date text-primary"><i class="uil uil-calendar-alt"></i><span>31 Jan
                                            2022</span>
                                    </li>
                                </ul>
                                <!-- /.post-meta -->
                            </div>
                            <!-- /.post-footer -->
                        </article>
                        <!-- /article -->
                    </div>
                    <div class="item">
                        <article>
                            <figure class="overlay overlay-1 hover-scale rounded mb-5">
                                <a href="https://www.finanzen.net/nachricht/aktien/gofeast-token-lists-on-hydra-dex-after-a-sold-out-ico-10981062 "
                                    target="_blank">
                                    <img src="{{asset('assets/img/photos/gofeast_images/hydradex.jpg')}}" alt="" loading="lazy">
                                </a>
                                <figcaption>
                                    <h5 class="from-top mb-0">Read More</h5>
                                </figcaption>
                            </figure>
                            <div class="post-header">
                                <div class="post-category">
                                    <figure class="rounded mb-2 w-20">
                                        <a href="https://www.finanzen.net/nachricht/aktien/gofeast-token-lists-on-hydra-dex-after-a-sold-out-ico-10981062 "
                                            target="_blank">
                                            <img src="{{asset('assets/img/photos/gofeast_images/finanzen.png')}}" alt="" loading="lazy">
                                        </a>
                                    </figure>
                                </div>
                                <!-- /.post-category -->
                                <h2 class="post-title h3 mt-1 mb-3">
                                    <a class="link-dark"
                                        href="https://www.finanzen.net/nachricht/aktien/gofeast-token-lists-on-hydra-dex-after-a-sold-out-ico-10981062 "
                                        target="_blank">
                                        GOMT Token Lists on Hydra DEX After a Sold Out ICO
                                    </a>
                                </h2>
                            </div>
                            <!-- /.post-header -->
                            <div class="post-footer">
                                <ul class="post-meta">
                                    <li class="post-date text-primary"><i class="uil uil-calendar-alt"></i><span>31 Jan
                                            2022</span>
                                    </li>
                                </ul>
                                <!-- /.post-meta -->
                            </div>
                            <!-- /.post-footer -->
                        </article>
                        <!-- /article -->
                    </div>
                </div>
                <!-- /.owl-carousel -->
            </div>
        </section>
        <!-- /section -->

        <section class="wrapper bg-light  pt-8">
            <div class="container py-10 py-md-10">
                <h2 class="fs-15 text-uppercase text-primary text-center mb-6">Trusted by 2000+ Store Partners</h2>
                <div class="carousel owl-carousel clients mb-0" data-margin="30" data-loop="true" data-dots="false"
                    data-autoplay="true" data-autoplay-timeout="3000"
                    data-responsive='{"0":{"items": "2"}, "768":{"items": "4"}, "992":{"items": "5"}, "1200":{"items": "6"}, "1400":{"items": "7"}}'>
                    <div class="item px-5"><img src="{{asset('assets/img/photos/gofeast_images/Bereket.png')}}" alt="" loading="lazy"></div>
                    <div class="item px-5"><img src="{{asset('assets/img/photos/gofeast_images/Shalimar.png')}}" alt="" loading="lazy"></div>
                    <div class="item px-5"><img src="{{asset('assets/img/photos/gofeast_images/Haveli.png')}}" alt="" loading="lazy"></div>
                    <div class="item px-5"><img src="{{asset('assets/img/photos/gofeast_images/Lasani.png')}}" alt="" loading="lazy"></div>
                    <div class="item px-5"><img src="{{asset('assets/img/photos/gofeast_images/Minar.png')}}" alt="" loading="lazy"></div>
                    <div class="item px-5"><img src="{{asset('assets/img/photos/gofeast_images/Punjab.png')}}" alt="" loading="lazy"></div>
                    <div class="item px-5"><img src="{{asset('assets/img/photos/gofeast_images/Makki Mart.png')}}" alt="" loading="lazy"></div>
                </div>
                <!-- /.owl-carousel -->
            </div>
            <!-- /.container -->
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