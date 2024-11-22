@extends('layouts.app')
@section('meta_tags')

<!-- Meta Title -->

<title>Contact Us | GoFeast.pk - Get in Touch for Online Food & Grocery Delivery in Lahore</title>



<!-- Meta Description -->

<meta name="description" content="Have questions or need assistance? Contact GoFeast.pk for inquiries about our Online Food & Grocery delivery services in Bahria Town, Lahore. We're here to help!">



<!-- Meta Keywords -->

<meta name="keywords" content="GoFeast.pk contact, customer support, Online Food & Grocery inquiries, grocery delivery questions, contact GoFeast.pk, Bahria Town Lahore, GoFeast.pk help, get in touch with GoFeast.pk, Lahore grocery delivery support">



<!-- Meta Robots -->

<meta name="robots" content="index, follow">



<!-- Open Graph Tags -->

<meta property="og:title" content="Contact Us | GoFeast.pk - Get in Touch for Online Food & Grocery Delivery in Lahore">

<meta property="og:description" content="Have questions or need assistance? Contact GoFeast.pk for inquiries about our Online Food & Grocery delivery services in Bahria Town, Lahore. We're here to help!">

<meta property="og:url" content="https://www.gofeast.pk/contact-us">

<meta property="og:type" content="website">

<meta property="og:image" content="https://www.gofeast.pk/assets/images/contact-us-banner.jpg">



<!-- Twitter Card Tags -->

<meta name="twitter:card" content="summary_large_image">

<meta name="twitter:title" content="Contact Us | GoFeast.pk - Get in Touch for Online Food & Grocery Delivery in Lahore">

<meta name="twitter:description" content="Have questions or need assistance? Contact GoFeast.pk for inquiries about our Online Food & Grocery delivery services in Bahria Town, Lahore. We're here to help!">

<meta name="twitter:image" content="https://www.gofeast.pk/assets/images/contact-us-banner.jpg">

@endsection
@section('content')
<section class="wrapper bg-light ">
    <div class="container py-10 py-md-10">
        <div class="row text-center">
            <!-- <div class="col-md-10 col-lg-8 col-xl-7 col-xxl-6 mx-auto "> -->
            <h3 class="display-4 pb-5 text-primary">Contact Us!
            </h3>
            <!-- </div> -->
            <!-- /column -->
        </div>
        <div class="row gy-10 gx-lg-8 gx-xl-12 mb-16 align-items-center">
            <div class="col-lg-7 position-relative">
                <div class="row gx-md-5 gy-5">
                    <div class="col-md-6">
                        <figure class="rounded"><img src="{{asset('assets/img/photos/gofeast_images/order-delivered.png')}}" alt="">
                        </figure>
                    </div>
                    <!--/column -->
                    <div class="col-md-6">
                        <div class="row gx-md-5 gy-5">
                            <div class="col-md-12 order-md-2">
                                <figure class="rounded"><img src="{{asset('assets/img/photos/gofeast_images/store-contact.png')}}" alt="">
                                </figure>
                            </div>
                            <!--/column -->
                            <div class="col-md-10">
                                <!-- <figure class="rounded"><img src="{{asset('assets/img/photos/gofeast_images/store.png')}}" alt="">
                                        </figure> -->
                                <div class="card bg-pale-primary text-center counter-wrapper">
                                    <div class="card-body py-11">
                                        <h3 class="text-nowrap display-1">24/7</h3>
                                        <p class="mb-0">Customer Support</p>
                                    </div>
                                </div>
                                <!--/.card -->
                            </div>
                            <!--/column -->
                        </div>
                        <!--/.row -->
                    </div>
                    <!--/column -->
                </div>
                <!--/.row -->
            </div>
            <!--/column -->
            <div class="col-lg-5">
                <h2 class="display-4 mb-8">Need some help? Reach out to us</h2>
                <div class="d-flex flex-row">
                    <div>
                        <div class="icon text-primary fs-28 me-6 mt-n1"> <i class="uil uil-phone-volume"></i>
                        </div>
                    </div>
                    <div>
                        <h5 class="mb-1">Phone</h5>
                        <p>
                            <a href="tel:+19085740454">+1908-574-0454</a>
                        </p>
                    </div>
                </div>
                <div class="d-flex flex-row">
                    <div>
                        <div class="icon text-primary fs-28 me-6 mt-n1"> <i class="uil uil-envelope"></i> </div>
                    </div>
                    <div>
                        <h5 class="mb-1">E-mail</h5>
                        <p class="mb-0"><a href="mailto:cs@gofeast.io"
                                class="link-body">cs@gofeast.io</a>
                        </p>
                    </div>
                </div>
            </div>
            <!--/column -->
        </div>
        <!--/.row -->

        <!-- /.row -->
    </div>
    <!-- /.container -->
</section>
@endsection