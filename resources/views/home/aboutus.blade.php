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

    <meta property="og:image" content="https://www.gofeast.pk/assets/images/about-us-banner.jpg')}}">

    <!-- Twitter Card Tags -->

    <meta name="twitter:card" content="summary_large_image">

    <meta name="twitter:title" content="About Us | GoFeast.pk - Your Trusted Food and Grocery Delivery Service">

    <meta name="twitter:description" content="Learn more about GoFeast.pk, your reliable source for food and groceries in Bahria Town, Lahore. Discover our mission, values, and commitment to quality and transparency in every delivery.">

    <meta name="twitter:image" content="https://www.gofeast.pk/assets/images/about-us-banner.jpg')}}">
@endsection
@section('content')

        <!-- /header -->
        <section class="wrapper bg-primary text-white rounded ">
            <div class="container py-15 py-md-15 ">
                <div class="row gx-lg-0 gx-xl-8 gy-10 gy-md-10 gy-lg-0 mb-10  align-items-center">
                    <div class="col-md-6 col-lg-6 offset-md-2 offset-lg-1 position-relative order-lg-2"
                        data-cue="zoomIn">
                        <!-- <a href="./assets/media/movie.mp4" -->
                        <a href="https://www.youtube.com/embed/N92dLn8sxOM?rel=0"
                            class=" btn btn-circle btn-primary btn-play ripple mx-auto mb-5 position-absolute"
                            style="top:50%; left: 50%; transform: translate(-50%,-50%); z-index:3;" data-glightbox>
                            <i class="icn-caret-right"></i>
                        </a>
                        <figure class="rounded"><img src="{{asset('assets/img/photos/gofeast_images/gomt-proposition.jpg')}}" alt=""></figure>


                    </div>
                    <!--/column -->
                    <div class="col-lg-5 mb-5 text-center text-lg-start" data-cues="slideInDown" data-group="page-title"
                        data-delay="600">
                        <h3 class="display-4 mb-5 text-white"><span class=" underline-3 style-3 yellow">GoFeast</span> -
                            Disrupting
                            the
                            Specialty
                            Industry
                        </h3>
                        <p style="text-align: justify;">
                            <!--<span class="text-center">-->
                                Since 2019, GoFeast has been helping your local
                            halal/kosher stores go digital! Powered by the GoFeast Technology Platform, consumers can place orders for meat, grocery or food and have them delivered to their doorstep on the
                            same-day. <br>
                            Using Blockchain technology, GoFeast is revolutionizing the specialty meat supply chain and
                            certification processes by making each step transparent and traceable. Thus, paving the way
                            for a safer industry.
                            <!--</span>-->
                            </p>
                        <div class="d-flex justify-content-center justify-content-lg-start" data-cues="slideInDown"
                            data-group="page-title-buttons" data-delay="900">
                            <a href="https://www.youtube.com/embed/TUfZZks1Oec"
                                class="btn btn-expand btn-yellow ripple rounded-pill mx-auto" data-glightbox>
                                <i class="icn-caret-right"></i>
                                <span class="text-white">Value Proposition</span>
                                
                            </a>
                        </div>
                    </div>
                    <!--/column -->
                </div>
            </div>


        </section>
        <!-- /section -->
        <!-- /section -->
        <section class="wrapper bg-light wrapper-border">
            <div class="container py-10 py-md-10">
                <div class="row gx-lg-8 gx-xl-12 gy-10 mb-10 mb-md-10 align-items-center">
                    <div class="col-lg-5 text-center">
                        <!-- <figure> -->
                        <img width="60%" height="auto" src="{{asset('assets/img/photos/gofeast_images/our-mission.png')}}" alt="" />
                        <!-- </figure> -->
                    </div>
                    <!--/column -->
                    <div class="col-lg-7">
                        <h3 class="display-4 mb-3 text-primary">Our Mission</h3>
                        <p class="lead fs-lg lh-sm" style="text-align: justify;">GoFeast strives to be the leading digital marketplace connecting
                            consumers with specialty meat stores and offering same-day delivery services powered by the
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
                        <p class="lead fs-lg lh-sm" style="text-align: justify;">Using blockchain technology, GoFeast aims to digitalize the specialty
                            food industry by making the specialty meat supply chain and certification transparent.</p>
                        <!--/.row -->
                    </div>
                    <!--/column -->

                    <div class="col-lg-5 text-center">
                        <!-- <figure> -->
                        <img width="90%" height="auto" src="{{asset('assets/img/photos/gofeast_images/vision.png')}}" alt="" />
                        <!-- </figure> -->
                    </div>
                </div>
                <!--/.row -->

                <div class="row gx-lg-8 gx-xl-12 gy-10 mb-10 mb-md-10 align-items-center">
                    <div class="col-lg-5 text-center">
                        <!-- <figure> -->
                        <img width="90%" height="auto" src="{{asset('assets/img/photos/gofeast_images/business.png')}}" alt="" />
                        <!-- </figure> -->
                    </div>
                    <!--/column -->
                    <div class="col-lg-7">
                        <h3 class="display-4 mb-3 text-primary">Our Business Model</h3>
                        <p class="lead fs-lg lh-sm" style="text-align: justify;">Our Business Model is one of the simplest in the Tech industry
                            offering steady and consistent revenue streams with no cash collection risks and high cash
                            flows. GoFeast is a Logistics Technology Startup and not a meat seller. We are
                            providing a technology marketplace for the buying and selling of specialty (halal and
                            kosher) meat along with in-app specialty certifications.</p>
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
    center: new google.maps.LatLng(40.716661, -99.492550),
    
    zoom: 4.5,
  });

  const iconBase =
    "https://gofeast.io/assets/img/";
    // "https://gofeast.io/assets/img/photos/gofeast_images/";
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
  const features = [
    {
      position: new google.maps.LatLng(40.208700950948284, -89.54568423268098), //chicago
      type: "info",
    },
    {
      position: new google.maps.LatLng(31.57886742095821, -98.96702688457565), //texas
      type: "info",
    },
    {
      position: new google.maps.LatLng(27.75591460835661, -81.44337394475), //florida
      type: "info",
    },
    
    {
      position: new google.maps.LatLng(39.57240917462901, -74.7878766255564), //new jersey
      type: "info",
    },
    {
      position: new google.maps.LatLng(42.05531093763891, -93.50165413679811), //lowa
      type: "info",
    },
    {
      position: new google.maps.LatLng(35.75620015417304, -86.70603456182947), //tennesse
      type: "info",
    },
    {
      position: new google.maps.LatLng(38.53009500745463, -81.20558658240671), //west virginia
      type: "info",
    },
    {
      position: new google.maps.LatLng(37.451952243343825, -78.44536107729381), //virginia
      type: "info",
    },
    {
      position: new google.maps.LatLng(33.92165885654823, -80.54386244290009), // south carolina
      type: "info",
    },
    {
      position: new google.maps.LatLng(40.32497780056729, -82.73725550094402), //ohio
      type: "info",
    },
    {
      position: new google.maps.LatLng(43.30231991693007, -71.5666384239374), //new hamsphire
      type: "info",
    },
    {
      position: new google.maps.LatLng(35.72270994332218, -79.42391414039422), //north carolina
      type: "info",
    },
    {
      position: new google.maps.LatLng(33.527392062421, -89.52739296556034), //mississippi
      type: "info",
    },
    {
      position: new google.maps.LatLng(43.845016389670675, -84.89238400199339), //michigan
      type: "info",
    },
    {
      position: new google.maps.LatLng(46.27812073603695, -94.79530152801695), //minnesota
      type: "info",
    },
    {
      position: new google.maps.LatLng(38.352256574038364, -92.2964791391801), //missouri
      type: "info",
    },
    {
      position: new google.maps.LatLng(45.04245634802801, -68.95374485569587), //maine
      type: "info",
    },
    {
      position: new google.maps.LatLng(39.50538189133629, -76.97552185998434), //maryland
      type: "info",
    },
    {
      position: new google.maps.LatLng(42.504741488091256, -71.9418840732533), // massachusetts
      type: "info",
    },
    {
      position: new google.maps.LatLng(37.45297274496546, -85.0233989271598), //kentucky
      type: "info",
    },
    {
      position: new google.maps.LatLng(38.54615527954738, -98.57495491532445), //kansas
      type: "info",
    },
    {
      position: new google.maps.LatLng(40.23316539204531, -86.1467656514231), //indiana
      type: "info",
    },
    {
      position: new google.maps.LatLng(38.85990662542077, -75.34135246619988), //delaware
      type: "info",
    },
    {
      position: new google.maps.LatLng(34.67716486242105, -92.24363698966026), //arkansas
      type: "info",
    },
    {
      position: new google.maps.LatLng(32.97202589256023, -86.70521582848959), //alabama
      type: "info",
    },
    {
      position: new google.maps.LatLng(65.782060, -151.347282), //alaska
      type: "info",
    },
    {
      position: new google.maps.LatLng(34.560566, -111.779741), //arizona
      type: "info",
    },
    {
      position: new google.maps.LatLng(38.155801, -105.573794), //colorado
      type: "info",
    },
    {
      position: new google.maps.LatLng(41.641188, -72.691743), //connecticut
      type: "info",
    },
    {
      position: new google.maps.LatLng(32.855957, -83.503781), //georgia
      type: "info",
    },
    {
      position: new google.maps.LatLng(20.816707, -156.362513), //Hawaii
      type: "info",
    },
    {
      position: new google.maps.LatLng(44.426190, -114.545885), //Idaho
      type: "info",
    },
    {
      position: new google.maps.LatLng(40.476690, -89.165943), //Illinois
      type: "info",
    },
    {
      position: new google.maps.LatLng(30.899108, -92.359632), //Louisiana
      type: "info",
    },
    {
      position: new google.maps.LatLng(41.796081, -99.635872), //Nebraska
      type: "info",
    },
    {
      position: new google.maps.LatLng(43.606706, -71.535355), //New Hampshire
      type: "info",
    },
    {
      position: new google.maps.LatLng(34.655296, -105.974256), //New Mexico
      type: "info",
    },
    {
      position: new google.maps.LatLng(47.675761, -100.359139), //North Dakota
      type: "info",
    },
    {
      position: new google.maps.LatLng(35.476824, -97.189353), //Oklahoma
      type: "info",
    },
    {
      position: new google.maps.LatLng(44.139266, -120.541621), //Oregon
      type: "info",
    },
    {
      position: new google.maps.LatLng(41.062094, -77.738895), //Pennsylvania
      type: "info",
    },
    {
      position: new google.maps.LatLng(41.734519, -71.495322), //Rhode Island
      type: "info",
    },
    {
      position: new google.maps.LatLng(35.978376, -86.560588), //Tennessee
      type: "info",
    },
    {
      position: new google.maps.LatLng(39.386312, -111.705952), //Utah
      type: "info",
    },
    {
      position: new google.maps.LatLng(44.621335, -89.615550), //Wisconsin
      type: "info",
    },
    {
      position: new google.maps.LatLng(44.363796, -100.337215), //South Dakota
      type: "info",
    },


  ];

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