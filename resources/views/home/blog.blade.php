@extends('layouts.app')
@section('meta_tags')

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
                        <article class="item post col-md-6 col-lg-4">
                            <div class="card">
                                <figure class="card-img-top overlay overlay-1 hover-scale">
                                    <a href="https://gofeasttoken.medium.com/gofeast-annual-performance-report-2022-key-updates-42e229422a47"
                                        target="_blank"> <img src="{{asset('assets/img/photos/blog/annual_rep_header.webp')}}"
                                            alt="" />
                                    </a>
                                    <figcaption>
                                        <h5 class="from-top mb-0">Read More</h5>
                                    </figcaption>
                                </figure>
                                <div class="card-body">
                                    <div class="post-header">
                                        <div class="post-category text-line">
                                            <a href="#" class="me-2">Medium <img
                                                    src="{{asset('assets/img/photos/gofeast_images/medium.png')}}" width="40"
                                                    height="auto"></a>
                                        </div>
                                        <!-- /.post-category -->
                                        <h2 class="post-title h3 mt-1 mb-3">
                                            <a href="https://gofeasttoken.medium.com/gofeast-annual-performance-report-2022-key-updates-42e229422a47"
                                                target="_blank" class="link-dark">
                                                GoMeat Annual Performance Report 2022 — Key Updates
                                            </a>
                                        </h2>
                                    </div>
                                    <!-- /.post-header -->
                                    <div class="post-content">
                                        <p>The GoMeat Management Team could not be prouder to present
                                            our Annual Performance Report for 2022 to all of our GoMeat “Steakholders”.
                                            <br>
                                            Read the full version of this report here:
                                            <a href="https://gofeast.io/pdf/Annual%20Performance%20Report_20221.pdf" target="_blank">Annual Report</a>
                                        </p>
                                    </div>
                                    <!-- /.post-content -->
                                </div>
                                <!--/.card-body -->
                                <div class="card-footer">
                                    <ul class="post-meta d-flex mb-0">
                                        <li class="post-date text-primary"><i
                                                class="uil uil-calendar-alt"></i><span>16 Jan
                                                2023</span></li>
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
                        <!-- /.post -->
                         
                        <article class="item post col-md-6 col-lg-4">
                            <div class="card">
                                <figure class="card-img-top overlay overlay-1 hover-scale">
                                    <a href="./gofeast-at-consensus22"> <img src="{{asset('assets/img/photos/blog/consensus-x-gomt.png')}}" alt="" />
                                    </a>
                                    <figcaption>
                                        <h5 class="from-top mb-0">Read More</h5>
                                    </figcaption>
                                </figure>
                                <div class="card-body">
                                    <div class="post-header">
                                        <!-- <div class="post-category text-line">
                                                    <a href="#" class="hover" rel="category">Coding</a>
                                                </div> -->
                                        <!-- /.post-category -->
                                        <h2 class="post-title h3 mt-1 mb-3">
                                            <a class="link-dark" href="./gofeast-at-consensus22">GoMeat at Consensus2022 by CoinDesk
                                            </a>
                                        </h2>
                                    </div>
                                    <!-- /.post-header -->
                                    <div class="post-content">
                                        <p>Consensus by CoinDesk has been a successful Crypto-focussed event for many years....</p>
                                    </div>
                                    <!-- /.post-content -->
                                </div>
                                <!--/.card-body -->
                                <div class="card-footer">
                                    <ul class="post-meta d-flex mb-0">
                                        <li class="post-date text-primary"><i
                                                class="uil uil-calendar-alt"></i><span>20 June
                                                2022</span></li>
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
                        <!-- /.post -->
                         
                        <article class="item post col-md-6 col-lg-4">
                            <div class="card">
                                <figure class="card-img-top overlay overlay-1 hover-scale">
                                    <a href="./get-to-know-gomt"> <img src="{{asset('assets/img/photos/blog/gettoknowGOMT.jpeg')}}" alt="" />
                                    </a>
                                    <figcaption>
                                        <h5 class="from-top mb-0">Read More</h5>
                                    </figcaption>
                                </figure>
                                <div class="card-body">
                                    <div class="post-header">
                                        <!-- <div class="post-category text-line">
                                                    <a href="#" class="hover" rel="category">Coding</a>
                                                </div> -->
                                        <!-- /.post-category -->
                                        <h2 class="post-title h3 mt-1 mb-3">
                                            <a class="link-dark" href="./get-to-know-gomt">Get To Know GOMT
                                            </a>
                                        </h2>
                                    </div>
                                    <!-- /.post-header -->
                                    <div class="post-content">
                                        <p>GoMeat is proud to announce the debut listing of GOMT on BitMart....</p>
                                    </div>
                                    <!-- /.post-content -->
                                </div>
                                <!--/.card-body -->
                                <div class="card-footer">
                                    <ul class="post-meta d-flex mb-0">
                                        <li class="post-date text-primary"><i
                                                class="uil uil-calendar-alt"></i><span>13 May
                                                2022</span></li>
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
                        <!-- /.post -->
                         
                        <article class="item post col-md-6 col-lg-4">
                            <div class="card">
                                <figure class="card-img-top overlay overlay-1 hover-scale">
                                    <a href="./gofeast-quterly-update-q1-2022"> <img src="{{asset('assets/img/photos/blog/q1-2022.png')}}" alt="" />
                                    </a>
                                    <figcaption>
                                        <h5 class="from-top mb-0">Read More</h5>
                                    </figcaption>
                                </figure>
                                <div class="card-body">
                                    <div class="post-header">
                                        <!-- <div class="post-category text-line">
                                                    <a href="#" class="hover" rel="category">Coding</a>
                                                </div> -->
                                        <!-- /.post-category -->
                                        <h2 class="post-title h3 mt-1 mb-3">
                                            <a class="link-dark" href="./gofeast-quterly-update-q1-2022">GoMeat Quaterly Update Q1 2022
                                            </a>
                                        </h2>
                                    </div>
                                    <!-- /.post-header -->
                                    <div class="post-content">
                                        <p>With the closure of Q1 of 2022 our GoMeat journey is just getting into full steam....</p>
                                    </div>
                                    <!-- /.post-content -->
                                </div>
                                <!--/.card-body -->
                                <div class="card-footer">
                                    <ul class="post-meta d-flex mb-0">
                                        <li class="post-date text-primary"><i
                                                class="uil uil-calendar-alt"></i><span>20 April
                                                2022</span></li>
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
                        <!-- /.post -->
                         
                        <article class="item post col-md-6 col-lg-4">
                            <div class="card">
                                <figure class="card-img-top overlay overlay-1 hover-scale">
                                    <a href="./gofeast-a-platform-for-many"> <img src="{{asset('assets/img/photos/blog/blog-10.png')}}" alt="" />
                                    </a>
                                    <figcaption>
                                        <h5 class="from-top mb-0">Read More</h5>
                                    </figcaption>
                                </figure>
                                <div class="card-body">
                                    <div class="post-header">
                                        <!-- <div class="post-category text-line">
                                                    <a href="#" class="hover" rel="category">Coding</a>
                                                </div> -->
                                        <!-- /.post-category -->
                                        <h2 class="post-title h3 mt-1 mb-3">
                                            <a class="link-dark" href="./gofeast-a-platform-for-many">What Makes GoMeat A Community-Focused Business?
                                            </a>
                                        </h2>
                                    </div>
                                    <!-- /.post-header -->
                                    <div class="post-content">
                                        <p>Wouldn’t you like to receive online meat delivery when you need it right at your doorstep? You don’t have to go out searching</p>
                                    </div>
                                    <!-- /.post-content -->
                                </div>
                                <!--/.card-body -->
                                <div class="card-footer">
                                    <ul class="post-meta d-flex mb-0">
                                        <li class="post-date text-primary"><i
                                                class="uil uil-calendar-alt"></i><span>28 Feb
                                                2022</span></li>
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
                        <!-- /.post -->
                        <article class="item post col-md-6 col-lg-4">
                            <div class="card">
                                <figure class="card-img-top overlay overlay-1 hover-scale">
                                    <a href="./gofeast-halal-meat-delivery-services-during-COVID-19-restrictions"> <img src="{{asset('assets/img/photos/blog/gofeast-high-demand.png')}}" alt="" />
                                    </a>
                                    <figcaption>
                                        <h5 class="from-top mb-0">Read More</h5>
                                    </figcaption>
                                </figure>
                                <div class="card-body">
                                    <div class="post-header">
                                        <!-- <div class="post-category text-line">
                                                    <a href="#" class="hover" rel="category">Coding</a>
                                                </div> -->
                                        <!-- /.post-category -->
                                        <h2 class="post-title h3 mt-1 mb-3">
                                            <a class="link-dark" href="./gofeast-halal-meat-delivery-services-during-COVID-19-restrictions">High Demand For GoMeat
                                                Halal Meat
                                                Delivery Services During COVID-19 Restrictions
                                            </a>
                                        </h2>
                                    </div>
                                    <!-- /.post-header -->
                                    <div class="post-content">
                                        <p>GoMeat delivery services are seeing sharp increases in month over
                                            month order volumes.</p>
                                    </div>
                                    <!-- /.post-content -->
                                </div>
                                <!--/.card-body -->
                                <div class="card-footer">
                                    <ul class="post-meta d-flex mb-0">
                                        <li class="post-date text-primary"><i
                                                class="uil uil-calendar-alt"></i><span>10 Apr
                                                2020</span></li>
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
                        <!-- /.post -->

                        <article class="item post col-md-6 col-lg-4">
                            <div class="card">
                                <figure class="card-img-top overlay overlay-1 hover-scale">
                                    <a href="./gofeast-maintains-halal-meat-free-delivery-COVID-19-Lockdown"> <img src="{{asset('assets/img/photos/blog/gofeast-maintains.png')}}" alt="" />
                                    </a>
                                    <figcaption>
                                        <h5 class="from-top mb-0">Read More</h5>
                                    </figcaption>
                                </figure>
                                <div class="card-body">
                                    <div class="post-header">
                                        <!-- <div class="post-category text-line">
                                                    <a href="#" class="hover" rel="category">Coding</a>
                                                </div> -->
                                        <!-- /.post-category -->
                                        <h2 class="post-title h3 mt-1 mb-3">
                                            <a class="link-dark" href="./gofeast-maintains-halal-meat-free-delivery-COVID-19-Lockdown">GoMeat Maintains Free
                                                Delivery Of Specialty Halal Meats Through The COVID-19 Lockdown.
                                            </a>
                                        </h2>
                                    </div>
                                    <!-- /.post-header -->
                                    <div class="post-content">
                                        <p>GoMeat has developed a stellar reputation for maintaining a
                                            community-first strategy in their business model.

                                        </p>
                                    </div>
                                    <!-- /.post-content -->
                                </div>
                                <!--/.card-body -->
                                <div class="card-footer">
                                    <ul class="post-meta d-flex mb-0">
                                        <li class="post-date text-primary"><i
                                                class="uil uil-calendar-alt"></i><span>1 Apr
                                                2020</span></li>
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
                        <!-- /.post -->
                         
                        <article class="item post col-md-6 col-lg-4">
                            <div class="card">
                                <figure class="card-img-top overlay overlay-1 hover-scale">
                                    <a href="./gofeast-assures-customers-of-continuing-halal-meat-delivery"> <img src="{{asset('assets/img/photos/blog/gofeast-assures.png')}}" alt="" />
                                    </a>
                                    <figcaption>
                                        <h5 class="from-top mb-0">Read More</h5>
                                    </figcaption>
                                </figure>
                                <div class="card-body">
                                    <div class="post-header">
                                        <!-- <div class="post-category text-line">
                                                    <a href="#" class="hover" rel="category">Coding</a>
                                                </div> -->
                                        <!-- /.post-category -->
                                        <h2 class="post-title h3 mt-1 mb-3">
                                            <a class="link-dark" href="./gofeast-assures-customers-of-continuing-halal-meat-delivery">GoMeat Assures
                                                Consumers Of Continuing Halal Meat Delivery Services During The
                                                COVID- 19 Lockdown Period.
                                            </a>
                                        </h2>
                                    </div>
                                    <!-- /.post-header -->
                                    <div class="post-content">
                                        <p>While many organizations are having trouble with supply chains,
                                            GoMeat continues to reliably deliver halal meats to consumers.

                                        </p>
                                    </div>
                                    <!-- /.post-content -->
                                </div>
                                <!--/.card-body -->
                                <div class="card-footer">
                                    <ul class="post-meta d-flex mb-0">
                                        <li class="post-date text-primary"><i
                                                class="uil uil-calendar-alt"></i><span>20 March
                                                2020</span></li>
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
                        <!-- /.post -->
                         
                        <!-- medium blogs -->
                         
                        <article class="item post col-md-6 col-lg-4">
                            <div class="card">
                                <figure class="card-img-top overlay overlay-1 hover-scale">
                                    <a href="https://gofeasttoken.medium.com/gofeast-2021-year-in-review-87300b4f2969"
                                        target="_blank"> <img src="{{asset('assets/img/photos/blog/blog-4.jpg')}}"
                                            alt="" />
                                    </a>
                                    <figcaption>
                                        <h5 class="from-top mb-0">Read More</h5>
                                    </figcaption>
                                </figure>
                                <div class="card-body">
                                    <div class="post-header">
                                        <div class="post-category text-line">
                                            <a href="#" class="me-2">Medium <img
                                                    src="{{asset('assets/img/photos/gofeast_images/medium.png')}}" width="40"
                                                    height="auto"></a>
                                        </div>
                                        <!-- /.post-category -->
                                        <h2 class="post-title h3 mt-1 mb-3">
                                            <a href="https://gofeasttoken.medium.com/gofeast-2021-year-in-review-87300b4f2969"
                                                target="_blank" class="link-dark" href="./blog-post.html">GoMeat
                                                2021 — Year in
                                                Review

                                            </a>
                                        </h2>
                                    </div>
                                    <!-- /.post-header -->
                                    <div class="post-content">
                                        <p>GOMT Token (GOMT) was launched in June 2021 with the vision to
                                            revolutionize the $1.7 trillion global (Halal + Kosher) market. With
                                            transparency and traceability as its primary goal, GoMeat set out to
                                            empower the specialty meat industry.
                                        </p>
                                    </div>
                                    <!-- /.post-content -->
                                </div>
                                <!--/.card-body -->
                                <div class="card-footer">
                                    <ul class="post-meta d-flex mb-0">
                                        <li class="post-date text-primary"><i
                                                class="uil uil-calendar-alt"></i><span>2 Jan
                                                2022</span></li>
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
                        <!-- /.post -->
                         
                        <article class="item post col-md-6 col-lg-4">
                            <div class="card">
                                <figure class="card-img-top overlay overlay-1 hover-scale">
                                    <a href="https://gofeasttoken.medium.com/gofeast-x-bitmart-listing-the-quarter-ahead-5e63202ac4ca"
                                        target="_blank"> <img src="{{asset('assets/img/photos/blog/blog-5.jpg')}}"
                                            alt="" />
                                    </a>
                                    <figcaption>
                                        <h5 class="from-top mb-0">Read More</h5>
                                    </figcaption>
                                </figure>
                                <div class="card-body">
                                    <div class="post-header">
                                        <div class="post-category text-line">
                                            <a href="#" class="me-2">Medium <img
                                                    src="{{asset('assets/img/photos/gofeast_images/medium.png')}}" width="40"
                                                    height="auto"></a>
                                        </div>
                                        <!-- /.post-category -->
                                        <h2 class="post-title h3 mt-1 mb-3">
                                            <a href="https://gofeasttoken.medium.com/gofeast-x-bitmart-listing-the-quarter-ahead-5e63202ac4ca"
                                                target="_blank" class="link-dark" href="./blog-post.html">GoMeat
                                                x BitMart Listing & the Quarter Ahead
                                            </a>
                                        </h2>
                                    </div>
                                    <!-- /.post-header -->
                                    <div class="post-content">
                                        <p>Since the conclusion of GoMeat ICO
                                        </p>
                                    </div>
                                    <!-- /.post-content -->
                                </div>
                                <!--/.card-body -->
                                <div class="card-footer">
                                    <ul class="post-meta d-flex mb-0">
                                        <li class="post-date text-primary"><i
                                                class="uil uil-calendar-alt"></i><span>2 Jan
                                                2022</span></li>
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
                        <!-- /.post -->
                         
                        <article class="item post col-md-6 col-lg-4">
                            <div class="card">
                                <figure class="card-img-top overlay overlay-1 hover-scale">
                                    <a href="https://gofeasttoken.medium.com/gofeast-news-letter-bd8a85763cdd"
                                        target="_blank"> <img
                                            src="https://miro.medium.com/max/1400/1*VGYgaG57sTjHOC4ymRZ0jg.png"
                                            alt="" />
                                    </a>
                                    <figcaption>
                                        <h5 class="from-top mb-0">Read More</h5>
                                    </figcaption>
                                </figure>
                                <div class="card-body">
                                    <div class="post-header">
                                        <div class="post-category text-line">
                                            <a href="#" class="me-2">Medium <img
                                                    src="{{asset('assets/img/photos/gofeast_images/medium.png')}}" width="40"
                                                    height="auto"></a>
                                        </div>
                                        <!-- /.post-category -->
                                        <h2 class="post-title h3 mt-1 mb-3">
                                            <a href="https://gofeasttoken.medium.com/gofeast-news-letter-bd8a85763cdd"
                                                target="_blank" class="link-dark" href="./blog-post.html">GoMeat
                                                just launched an amazing promotion for the Super Bowl week.
                                            </a>
                                        </h2>
                                    </div>
                                    <!-- /.post-header -->
                                    <div class="post-content">
                                        <p>Buy your favourite Halal/Kosher food items from your favourite
                                            specialty eateries
                                        </p>
                                    </div>
                                    <!-- /.post-content -->
                                </div>
                                <!--/.card-body -->
                                <div class="card-footer">
                                    <ul class="post-meta d-flex mb-0">
                                        <li class="post-date text-primary"><i
                                                class="uil uil-calendar-alt"></i><span>8 Feb
                                                2022</span></li>
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
                        <!-- /.post -->
                         
                        <article class="item post col-md-6 col-lg-4">
                            <div class="card">
                                <figure class="card-img-top overlay overlay-1 hover-scale">
                                    <a href="https://gofeasttoken.medium.com/gofeast-ico-a-summary-f56e3760d1f"
                                        target="_blank">
                                        <img src="https://miro.medium.com/max/1400/1*6_uaAyKdovORt_gHjBY4cw.png"
                                            alt="" />
                                    </a>
                                    <figcaption>
                                        <h5 class="from-top mb-0">Read More</h5>
                                    </figcaption>
                                </figure>
                                <div class="card-body">
                                    <div class="post-header">
                                        <div class="post-category text-line">
                                            <a href="https://gofeasttoken.medium.com/gofeast-ico-a-summary-f56e3760d1f"
                                                target="_blank" class="me-2">Medium <img
                                                    src="{{asset('assets/img/photos/gofeast_images/medium.png')}}" width="40"
                                                    height="auto"></a>
                                        </div>
                                        <!-- /.post-category -->
                                        <h2 class="post-title h3 mt-1 mb-3">
                                            <a href="https://gofeasttoken.medium.com/gofeast-ico-a-summary-f56e3760d1f"
                                                target="_blank" class="link-dark" href="./blog-post.html">GoMeat
                                                ICO — A summary
                                            </a>
                                        </h2>
                                    </div>
                                    <!-- /.post-header -->
                                    <div class="post-content">
                                        <p>GoMeat is a first-of-its-kind business endeavor catering to the $1.7
                                            trillion global (Halal+ Kosher) market
                                        </p>
                                    </div>
                                    <!-- /.post-content -->
                                </div>
                                <!--/.card-body -->
                                <div class="card-footer">
                                    <ul class="post-meta d-flex mb-0">
                                        <li class="post-date text-primary"><i
                                                class="uil uil-calendar-alt"></i><span>18 Nov
                                                2021</span></li>
                                    </ul>
                                    <!-- /.post-meta -->
                                </div>
                                <!-- /.card-footer -->
                            </div>
                            <!-- /.card -->
                        </article>
                        <!-- /.post -->

                        <article class="item post col-md-6 col-lg-4">
                            <div class="card">
                                <figure class="card-img-top overlay overlay-1 hover-scale">
                                    <a href="https://gofeasttoken.medium.com/ama-recap-gofeast-founders-78623279b456"
                                        target="_blank">
                                        <img src="https://miro.medium.com/max/1400/1*mNAl8VjN8_Lv3f4Oh3nLSA.jpeg"
                                            alt="" />
                                    </a>
                                    <figcaption>
                                        <h5 class="from-top mb-0">Read More</h5>
                                    </figcaption>
                                </figure>
                                <div class="card-body">
                                    <div class="post-header">
                                        <div class="post-category text-line">
                                            <a href="https://gofeasttoken.medium.com/ama-recap-gofeast-founders-78623279b456"
                                                target="_blank" class="me-2">Medium <img
                                                    src="{{asset('assets/img/photos/gofeast_images/medium.png')}}" width="40"
                                                    height="auto"></a>
                                        </div>
                                        <!-- /.post-category -->
                                        <h2 class="post-title h3 mt-1 mb-3">
                                            <a href="https://gofeasttoken.medium.com/ama-recap-gofeast-founders-78623279b456"
                                                target="_blank" class="link-dark" href="./blog-post.html">AMA
                                                Recap: GoMeat Founders
                                            </a>
                                        </h2>
                                    </div>
                                    <!-- /.post-header -->
                                    <div class="post-content">
                                        <p>Hello everyone, Congratulations to everyone who has received their
                                            GOMT already and to those who are still waiting.
                                        </p>
                                    </div>
                                    <!-- /.post-content -->
                                </div>
                                <!--/.card-body -->
                                <div class="card-footer">
                                    <ul class="post-meta d-flex mb-0">
                                        <li class="post-date text-primary"><i
                                                class="uil uil-calendar-alt"></i><span>04 Nov
                                                2021</span></li>
                                    </ul>
                                    <!-- /.post-meta -->
                                </div>
                                <!-- /.card-footer -->
                            </div>
                            <!-- /.card -->
                        </article>
                        <!-- /.post -->

                        <article class="item post col-md-6 col-lg-4">
                            <div class="card">
                                <figure class="card-img-top overlay overlay-1 hover-scale">
                                    <a href="https://gofeasttoken.medium.com/diversity-the-key-to-a-successful-economy-797ca4134b4e"
                                        target="_blank">
                                        <img src="https://miro.medium.com/max/1400/1*OV5dlID5wuWguNvbdpDGnw.jpeg"
                                            alt="" />
                                    </a>
                                    <figcaption>
                                        <h5 class="from-top mb-0">Read More</h5>
                                    </figcaption>
                                </figure>
                                <div class="card-body">
                                    <div class="post-header">
                                        <div class="post-category text-line">
                                            <a href="https://gofeasttoken.medium.com/diversity-the-key-to-a-successful-economy-797ca4134b4e"
                                                target="_blank" class="me-2">Medium <img
                                                    src="{{asset('assets/img/photos/gofeast_images/medium.png')}}" width="40"
                                                    height="auto"></a>
                                        </div>
                                        <!-- /.post-category -->
                                        <h2 class="post-title h3 mt-1 mb-3">
                                            <a href="https://gofeasttoken.medium.com/diversity-the-key-to-a-successful-economy-797ca4134b4e"
                                                target="_blank" class="link-dark"
                                                href="./blog-post.html">Diversity: The key to a successful
                                                economy
                                            </a>
                                        </h2>
                                    </div>
                                    <!-- /.post-header -->
                                    <div class="post-content">
                                        <p>In the world of markets, diversity is the usual — owing to the
                                            interaction of many people from various backgrounds, cultures, and
                                            races
                                        </p>
                                    </div>
                                    <!-- /.post-content -->
                                </div>
                                <!--/.card-body -->
                                <div class="card-footer">
                                    <ul class="post-meta d-flex mb-0">
                                        <li class="post-date text-primary"><i
                                                class="uil uil-calendar-alt"></i><span>04 May
                                                2021</span></li>
                                    </ul>
                                    <!-- /.post-meta -->
                                </div>
                                <!-- /.card-footer -->
                            </div>
                            <!-- /.card -->
                        </article>
                        <!-- /.post -->

                        <article class="item post col-md-6 col-lg-4">
                            <div class="card">
                                <figure class="card-img-top overlay overlay-1 hover-scale">
                                    <a href="https://gofeasttoken.medium.com/halal-kosher-verified-products-still-not-widely-accessible-72af4150c418"
                                        target="_blank">
                                        <img src="https://miro.medium.com/max/1400/1*GKY9aj50EywfSyQyycIoKw.png"
                                            alt="" />
                                    </a>
                                    <figcaption>
                                        <h5 class="from-top mb-0">Read More</h5>
                                    </figcaption>
                                </figure>
                                <div class="card-body">
                                    <div class="post-header">
                                        <div class="post-category text-line">
                                            <a href="https://gofeasttoken.medium.com/halal-kosher-verified-products-still-not-widely-accessible-72af4150c418"
                                                target="_blank" class="me-2">Medium <img
                                                    src="{{asset('assets/img/photos/gofeast_images/medium.png')}}" width="40"
                                                    height="auto"></a>
                                        </div>
                                        <!-- /.post-category -->
                                        <h2 class="post-title h3 mt-1 mb-3">
                                            <a href="https://gofeasttoken.medium.com/halal-kosher-verified-products-still-not-widely-accessible-72af4150c418"
                                                target="_blank" class="link-dark"
                                                href="./blog-post.html">Halal/Kosher verified products — still
                                                not widely accessible?
                                            </a>
                                        </h2>
                                    </div>
                                    <!-- /.post-header -->
                                    <div class="post-content">
                                        <p>Both Muslims and Jews (which make up 1.8+ Billion people) have their
                                            own separate ways and methods of sacrificing/slaughtering their
                                            animals before consuming them.
                                        </p>
                                    </div>
                                    <!-- /.post-content -->
                                </div>
                                <!--/.card-body -->
                                <div class="card-footer">
                                    <ul class="post-meta d-flex mb-0">
                                        <li class="post-date text-primary"><i
                                                class="uil uil-calendar-alt"></i><span>06 May
                                                2021</span></li>
                                    </ul>
                                    <!-- /.post-meta -->
                                </div>
                                <!-- /.card-footer -->
                            </div>
                            <!-- /.card -->
                        </article>
                        <!-- /.post -->

                        <article class="item post col-md-6 col-lg-4">
                            <div class="card">
                                <figure class="card-img-top overlay overlay-1 hover-scale">
                                    <a href="https://gofeasttoken.medium.com/health-benefits-of-specialty-meat-why-are-people-opting-for-it-118fa3fbd2da"
                                        target="_blank">
                                        <img src="https://miro.medium.com/max/1400/1*odol0G469EAvUnP9kJA3wA.png"
                                            alt="" />
                                    </a>
                                    <figcaption>
                                        <h5 class="from-top mb-0">Read More</h5>
                                    </figcaption>
                                </figure>
                                <div class="card-body">
                                    <div class="post-header">
                                        <div class="post-category text-line">
                                            <a href="https://gofeasttoken.medium.com/health-benefits-of-specialty-meat-why-are-people-opting-for-it-118fa3fbd2da"
                                                target="_blank" class="me-2">Medium <img
                                                    src="{{asset('assets/img/photos/gofeast_images/medium.png')}}" width="40"
                                                    height="auto"></a>
                                        </div>
                                        <!-- /.post-category -->
                                        <h2 class="post-title h3 mt-1 mb-3">
                                            <a href="https://gofeasttoken.medium.com/health-benefits-of-specialty-meat-why-are-people-opting-for-it-118fa3fbd2da"
                                                target="_blank" class="link-dark" href="./blog-post.html">Health
                                                benefits of specialty meat — Why are people opting for it?
                                            </a>
                                        </h2>
                                    </div>
                                    <!-- /.post-header -->
                                    <div class="post-content">
                                        <p>Many people chose to eat Halal food even though they are not Muslims
                                            because of the strict ethical requirements that food items must
                                            follow to be considered Halal.
                                        </p>
                                    </div>
                                    <!-- /.post-content -->
                                </div>
                                <!--/.card-body -->
                                <div class="card-footer">
                                    <ul class="post-meta d-flex mb-0">
                                        <li class="post-date text-primary"><i
                                                class="uil uil-calendar-alt"></i><span>11 May
                                                2021</span></li>
                                    </ul>
                                    <!-- /.post-meta -->
                                </div>
                                <!-- /.card-footer -->
                            </div>
                            <!-- /.card -->
                        </article>
                        <!-- /.post -->

                        <article class="item post col-md-6 col-lg-4">
                            <div class="card">
                                <figure class="card-img-top overlay overlay-1 hover-scale">
                                    <a href="https://gofeasttoken.medium.com/uplifting-specialty-stores-in-the-era-of-inclusivity-and-diversity-the-need-eab739af64ff"
                                        target="_blank">
                                        <img src="https://miro.medium.com/max/1400/1*OliOOb4kFDkp5xVn8W8ggA.png"
                                            alt="" />
                                    </a>
                                    <figcaption>
                                        <h5 class="from-top mb-0">Read More</h5>
                                    </figcaption>
                                </figure>
                                <div class="card-body">
                                    <div class="post-header">
                                        <div class="post-category text-line">
                                            <a href="https://gofeasttoken.medium.com/uplifting-specialty-stores-in-the-era-of-inclusivity-and-diversity-the-need-eab739af64ff"
                                                target="_blank" class="me-2">Medium <img
                                                    src="{{asset('assets/img/photos/gofeast_images/medium.png')}}" width="40"
                                                    height="auto"></a>
                                        </div>
                                        <!-- /.post-category -->
                                        <h2 class="post-title h3 mt-1 mb-3">
                                            <a href="https://gofeasttoken.medium.com/uplifting-specialty-stores-in-the-era-of-inclusivity-and-diversity-the-need-eab739af64ff"
                                                target="_blank" class="link-dark"
                                                href="./blog-post.html">Uplifting specialty stores in the era of
                                                inclusivity and diversity — The need.
                                            </a>
                                        </h2>
                                    </div>
                                    <!-- /.post-header -->
                                    <div class="post-content">
                                        <p>A specialty store specializes in a single product category instead of
                                            stores that offer a wide range of consumer products.
                                        </p>
                                    </div>
                                    <!-- /.post-content -->
                                </div>
                                <!--/.card-body -->
                                <div class="card-footer">
                                    <ul class="post-meta d-flex mb-0">
                                        <li class="post-date text-primary"><i
                                                class="uil uil-calendar-alt"></i><span>16 May
                                                2021</span></li>
                                    </ul>
                                    <!-- /.post-meta -->
                                </div>
                                <!-- /.card-footer -->
                            </div>
                            <!-- /.card -->
                        </article>
                        <!-- /.post -->

                        <article class="item post col-md-6 col-lg-4">
                            <div class="card">
                                <figure class="card-img-top overlay overlay-1 hover-scale">
                                    <a href="https://gofeasttoken.medium.com/the-consequences-of-an-untraceable-meat-supply-chain-covid-19-and-more-4260cfc04c4"
                                        target="_blank">
                                        <img src="https://miro.medium.com/max/1400/1*aRlpZB4l9cUtnAok82Ii3A.png"
                                            alt="" />
                                    </a>
                                    <figcaption>
                                        <h5 class="from-top mb-0">Read More</h5>
                                    </figcaption>
                                </figure>
                                <div class="card-body">
                                    <div class="post-header">
                                        <div class="post-category text-line">
                                            <a href="https://gofeasttoken.medium.com/the-consequences-of-an-untraceable-meat-supply-chain-covid-19-and-more-4260cfc04c4"
                                                target="_blank" class="me-2">Medium <img
                                                    src="{{asset('assets/img/photos/gofeast_images/medium.png')}}" width="40"
                                                    height="auto"></a>
                                        </div>
                                        <!-- /.post-category -->
                                        <h2 class="post-title h3 mt-1 mb-3">
                                            <a href="https://gofeasttoken.medium.com/the-consequences-of-an-untraceable-meat-supply-chain-covid-19-and-more-4260cfc04c4"
                                                target="_blank" class="link-dark" href="./blog-post.html">The
                                                consequences of an untraceable meat supply chain — COVID-19 and
                                                more
                                            </a>
                                        </h2>
                                    </div>
                                    <!-- /.post-header -->
                                    <div class="post-content">
                                        <p>The coronavirus pandemic has highlighted the fragility and
                                            unreliability of the world's meat supply chain.
                                        </p>
                                    </div>
                                    <!-- /.post-content -->
                                </div>
                                <!--/.card-body -->
                                <div class="card-footer">
                                    <ul class="post-meta d-flex mb-0">
                                        <li class="post-date text-primary"><i
                                                class="uil uil-calendar-alt"></i><span>20 May
                                                2021</span></li>
                                    </ul>
                                    <!-- /.post-meta -->
                                </div>
                                <!-- /.card-footer -->
                            </div>
                            <!-- /.card -->
                        </article>
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