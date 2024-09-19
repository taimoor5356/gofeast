@extends('layouts.app')
@section('meta_tags')
    <!-- Meta Title -->

    <title>About Us | GoFeast.pk - Your Trusted Food and Grocery Delivery Service</title>

    <!-- Meta Description -->

    <meta name="description" content="Learn more about GoFeast.pk, your reliable source for food and groceries in Bahria Town, Lahore. Discover our mission, values, and commitment to quality and transparency in every delivery.">

    <!-- Meta Keywords -->

    <meta name="keywords" content="About GoFeast.pk, food delivery, grocery delivery, online food delivery, Bahria Town Lahore, quality food, GoFeast.pk values, food service, Lahore halal groceries, grocery shopping online">

    <!-- Meta Robots -->

    <meta name="robots" content="index, follow">

    <!-- Open Graph Tags -->

    <meta property="og:title" content="About Us | GoFeast.pk - Your Trusted Food and Grocery Delivery Service">

    <meta property="og:description" content="Learn more about GoFeast.pk, your reliable source for food and groceries in Bahria Town, Lahore. Discover our mission, values, and commitment to quality and transparency in every delivery.">

    <meta property="og:url" content="https://www.gofeast.pk/about-us">

    <meta property="og:type" content="website">

    <meta property="og:image" content="https://www.gofeast.pk/assets/images/about-us-banner.jpg">

    <!-- Twitter Card Tags -->

    <meta name="twitter:card" content="summary_large_image">

    <meta name="twitter:title" content="About Us | GoFeast.pk - Your Trusted Food and Grocery Delivery Service">

    <meta name="twitter:description" content="Learn more about GoFeast.pk, your reliable source for food and groceries in Bahria Town, Lahore. Discover our mission, values, and commitment to quality and transparency in every delivery.">

    <meta name="twitter:image" content="https://www.gofeast.pk/assets/images/about-us-banner.jpg">
@endsection
@section('content')
<section class="wrapper bg-primary text-white rounded ">
    <div class="container py-15 py-md-15 ">
        <div class="row gx-lg-0 gx-xl-8 gy-10 gy-md-10 gy-lg-0 mb-10  align-items-center">
            <div class="col-md-6 col-lg-6 offset-md-2 offset-lg-1 position-relative order-lg-2"
                data-cue="zoomIn">
                <!-- <a href="{{asset('assets/media/movie.mp4')}}" -->
                <!--<a href="https://www.youtube.com/embed/N92dLn8sxOM?rel=0"-->
                <!--    class=" btn btn-circle btn-primary btn-play ripple mx-auto mb-5 position-absolute"-->
                <!--    style="top:50%; left: 50%; transform: translate(-50%,-50%); z-index:3;" data-glightbox>-->
                <!--    <i class="icn-caret-right"></i>-->
                <!--</a>-->
                <figure class="rounded" style="justify-content: center; display: flex;"><img style="height:593px; width:300px" src="{{asset('assets/img/photos/App 1.png')}}" alt=""></figure>


            </div>
            <!--/column -->
            <div class="col-lg-5 mb-5 text-center text-lg-start" data-cues="slideInDown" data-group="page-title"
                data-delay="600">
                <h3 class="display-4 mb-5 text-white"><span class=" underline-3 style-3 yellow">GoFeast</span> -
                    Disrupting
                    the
                    Delivery
                    Industry
                </h3>
                <p style="text-align: justify;">
                    <!--<span class="text-center">-->
                    A few quick swipes on your phone, and your desired food is on its way to your doorstep from the store of your choice. Competitive prices. Customize your order. Exceptional promotions and discounts. Same-day delivery with order tracking. 24/7 customer service.
                    <br><br>
                    GoFeast is the digital marketplace connecting consumers with restaurants and stores of their choice. We offer same-day delivery services powered by the GoFeast Technology Platform.
                    <!--</span>-->
                </p>
                <!--<div class="d-flex justify-content-center justify-content-lg-start" data-cues="slideInDown"-->
                <!--    data-group="page-title-buttons" data-delay="900">-->
                <!--    <a href="https://www.youtube.com/embed/TUfZZks1Oec"-->
                <!--        class="btn btn-expand btn-yellow ripple rounded-pill mx-auto" data-glightbox>-->
                <!--        <i class="icn-caret-right"></i>-->
                <!--        <span class="text-white">Value Proposition</span>-->

                <!--    </a>-->
                <!--</div>-->
            </div>
            <!--/column -->
        </div>
    </div>
</section>
<!-- /section -->
<section class="wrapper bg-light wrapper-border">
    <div class="container py-10 py-md-10">
        <div class="row gx-lg-8 gx-xl-12 gy-10 mb-10 mb-md-10 align-items-center">
            <div class="col-lg-5 text-center">
                <!-- <figure> -->
                <img width="60%" height="auto" src="{{asset('assets/img/photos/our-mission.png')}}" alt="" />
                <!-- </figure> -->
            </div>
            <!--/column -->
            <div class="col-lg-7">
                <h3 class="display-4 mb-3 text-primary">Our Mission</h3>
                <p class="lead fs-lg lh-sm" style="text-align: justify;">GoFeast strives to be the leading digital marketplace connecting
                    consumers with restaurants and stores, offering 24/7 delivery services powered by the
                    GoFeast Technology Platform.</p>
                <!--/.row -->
            </div>
            <!--/column -->
        </div>
        <!--/.row -->

        <div class="row gx-lg-8 gx-xl-12 gy-10 mb-10 mb-md-10 align-items-center">

            <!--/column -->
            <div class="col-lg-7">
                <h3 class="display-4 mb-3 text-primary">Our Vision</h3>
                <p class="lead fs-lg lh-sm" style="text-align: justify;">Using blockchain technology, GoFeast aims to digitalize the
                    food industry by making the supply chain and certification transparent.</p>
                <!--/.row -->
            </div>
            <!--/column -->

            <div class="col-lg-5 text-center">
                <!-- <figure> -->
                <img width="90%" height="auto" src="{{asset('assets/img/photos/vision.png')}}" alt="" />
                <!-- </figure> -->
            </div>
        </div>
        <!--/.row -->

        <div class="row gx-lg-8 gx-xl-12 gy-10 mb-10 mb-md-10 align-items-center">
            <div class="col-lg-5 text-center">
                <!-- <figure> -->
                <img width="90%" height="auto" src="{{asset('assets/img/photos/business.png')}}" alt="" />
                <!-- </figure> -->
            </div>
            <!--/column -->
            <div class="col-lg-7">
                <h3 class="display-4 mb-3 text-primary">Our Business Model</h3>
                <p class="lead fs-lg lh-sm" style="text-align: justify;">Our Business Model is one of the simplest in the Tech industry
                    offering steady and consistent revenue streams with no cash collection risks and high cash
                    flows. GoFeast is a Logistics Technology Company. We are
                    providing a technology marketplace for buying and selling of food along with in-app certifications.</p>
                <!--/.row -->
            </div>
            <!--/column -->
        </div>
        <!--/.row -->
    </div>
    <!-- /.container -->
</section>
<!-- /section -->
<section class="wrapper bg-light">
    <div class="container py-10 py-md-10 text-center">
        <h3 class="display-4 mb-7 text-primary">GoFeast Operational Areas</h3>
        <div class="row gx-lg-8 gx-xl-12 gy-12 align-items-center ">

            <div id="map" style="width:100%;height:600px;"></div>

        </div>

        <!-- <hr class="my-14 my-md-17" /> -->

    </div>
    <!-- /.container -->
</section>
@endsection

<script>
    let map;

    function myMap() {
        map = new google.maps.Map(document.getElementById("map"), {
            // center: new google.maps.LatLng(37.434023736726736, -85.02125238268059),
            center: new google.maps.LatLng(31.3694884, 74.1768412),

            zoom: 4.5,
        });

        const iconBase =
            "https://gofeast.pk/assets/img/";
        // "https://gofeast.pk/assets/img/photos/";
        const icons = {
            parking: {
                icon: iconBase + "favicon.png",
            },
            library: {
                icon: iconBase + "library_maps.png",
            },
            info: {
                icon: iconBase + "gomt.png",
            },
        };

        const features = [{
            position: new google.maps.LatLng(31.3694884, 74.1768412), //bahria town lahore
            type: "info",
        }, ];

        // Create markers.
        for (let i = 0; i < features.length; i++) {
            const marker = new google.maps.Marker({
                position: features[i].position,
                icon: icons[features[i].type].icon,
                map: map,
            });
        }
    }
</script>

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBWBC1Gmu4lIoyos-1tqfTgazkj5K8ty2M&callback=myMap" async></script>