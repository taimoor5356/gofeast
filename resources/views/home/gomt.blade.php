@extends('layouts.app')
@section('meta_tags')

<!-- Meta Title -->

<title>Go-Partner for Restaurants | GoFeast.pk - Join Our Network and Boost Your Restaurant's Reach</title>

<!-- Meta Description -->

<meta name="description" content="Partner with GoFeast.pk to expand your restaurant's customer base. Enjoy seamless integration, increased visibility, and reliable delivery services across Bahria Town, Lahore.">

<!-- Meta Keywords -->

<meta name="keywords" content="GoFeast.pk restaurant partner, join GoFeast.pk, restaurant delivery partnership, expand restaurant reach, Bahria Town Lahore restaurants, GoFeast.pk for restaurants, food delivery partnership, restaurant marketing, increase restaurant sales">

<!-- Meta Robots -->

<meta name="robots" content="index, follow">

<!-- Open Graph Tags -->

<meta property="og:title" content="Go-Partner for Restaurants | GoFeast.pk - Join Our Network and Boost Your Restaurant's Reach">

<meta property="og:description" content="Partner with GoFeast.pk to expand your restaurant's customer base. Enjoy seamless integration, increased visibility, and reliable delivery services across Bahria Town, Lahore.">

<meta property="og:url" content="https://www.gofeast.pk/go-partner-restaurant">

<meta property="og:type" content="website">

<meta property="og:image" content="https://www.gofeast.pk/assets/images/partner-restaurant-banner.jpg">

<!-- Twitter Card Tags -->

<meta name="twitter:card" content="summary_large_image">

<meta name="twitter:title" content="Go-Partner for Restaurants | GoFeast.pk - Join Our Network and Boost Your Restaurant's Reach">

<meta name="twitter:description" content="Partner with GoFeast.pk to expand your restaurant's customer base. Enjoy seamless integration, increased visibility, and reliable delivery services across Bahria Town, Lahore.">

<meta name="twitter:image" content="https://www.gofeast.pk/assets/images/partner-restaurant-banner.jpg">
@endsection
@section('content')

<section class="wrapper bg-primary angled lower-start ">
    <div class="container  pt-md-11 pt-10 pb-12">
        <div class="row gx-0 gy-10 align-items-center">
            <div class="col-lg-6" data-cues="slideInDown" data-group="page-title" data-delay="600">
                <h1 class="display-1 text-white mb-4">GOMT Token <br />
                </h1>
                <p class="lead fs-24 lh-sm text-white mb-7 pe-md-18 pe-lg-0 pe-xxl-15">First of its kind
                    utility token, empowering specialty consumers and stores through digitalization. GOMT Token provides
                    traceability through blockchain certifications.</p>
                <p class="text-white fs-24">Buy Now:</p>
                <!-- TODO: gomt popup -->
                <span><a href="https://www.bitmart.com/trade/en?symbol=GOMT_USDT&layout=basic" target="_blank"
                        class="btn btn-lg btn-yellow rounded me-2 mb-1 text-primary ">BitMart</a></span>
                <span><a href="https://hydradex.org/" target="_blank"
                        class="btn btn-lg btn-green rounded me-2 mb-1">Hydra Dex</a></span>
                <!-- <span><a href="https://gomeat.io/icopanel/login" target="_blank"
                                class="btn btn-lg btn-aqua rounded mb-1">Login to Staking Panel</a></span> -->

                <br>
                <div class="d-flex flex-row mb-2 mt-2 justify-content-lg-start">
                    <div class="flex-column me-4 ">
                        <a href="{{asset('assets/docs/HowtobuyGOMTonHydraDEX.pdf')}}" class="link-white hover"
                            target="_blank">
                            <i class="uil uil-file-question"></i>
                            How to Buy?
                        </a>
                    </div>
                    <div class="flex-column me-4 ">
                        <a href="https://explorer.hydrachain.org/" class="link-white hover" target="_blank">
                            <i class="uil uil-import"></i>
                            Hydra Explorer
                        </a>
                    </div>
                    <div class="flex-column me-4">
                        <a href="https://explorer.hydrachain.org/contract/7b8dd012ec9e1f11e008376ef21d29ba4cc78e24/"
                            class="link-white hover" target="_blank">
                            <i class="uil uil-import"></i>
                            GOMT Contract Address
                        </a>
                    </div>
                </div>

            </div>
            <!-- /column -->
            <div class="col-lg-5 offset-lg-1 mb-n18" data-cues="slideInDown">
                <div class="position-relative">
                    <a href="https://www.youtube.com/embed/tzYQxCJew8Q"
                        class="btn btn-circle btn-primary btn-play ripple mx-auto mb-6 position-absolute"
                        style="top:50%; left: 50%; transform: translate(-50%,-50%); z-index:3;"
                        data-glightbox><i class="icn-caret-right"></i></a>
                    <figure class="rounded shadow-lg"><img src="{{asset('assets/img/photos/gofeast_images/gomtvideobg.png')}}" alt="">
                    </figure>
                </div>
                <!-- /div -->
            </div>
            <!-- /column -->
        </div>
        <!-- /.row -->

    </div>
    <!-- /.container -->
</section>
<!-- /section -->

<section class="wrapper bg-soft-primary">
    <div class="container pt-17 pb-10 pt-md-17 pb-md-10">
        <div class="row">
            <div class="col-xl-10 mx-auto">
                <div class="row align-items-center counter-wrapper gy-6 text-center">
                    <div class="col-md-3">
                        <a href="{{asset('assets/docs/GoFeastTokenWhitePaper.pdf')}}" target="_blank"
                            class="btn btn-outline-primary rounded "><i class="uil uil-file-alt"></i>White
                            Paper</a>

                        <!--<a href="./coming-soon" -->
                        <!--class="btn btn-outline-primary rounded "><i class="uil uil-file-alt"></i>White-->
                        <!--Paper</a>-->
                    </div>
                    <!--/column -->
                    <div class="col-md-3">
                        <a href="{{asset('assets/docs/GoFeastTokenOnePager.pdf')}}" target="_blank"
                            class="btn btn-outline-primary rounded"><i class="uil uil-file-alt"></i>
                            One Pager</a>
                    </div>
                    <!--/column -->
                    <div class="col-md-3">
                        <a href="{{asset('assets/docs/GoFeastTokenAuditReport.pdf')}}" target="_blank"
                            class="btn btn-outline-primary rounded"><i class="uil uil-file-alt"></i>
                            Audit Report</a>
                    </div>
                    <!--/column -->
                    <div class="col-md-3">
                        <a href="https://gofeasttoken.medium.com/gofeast-ico-a-summary-f56e3760d1f"
                            target="_blank" class="btn btn-outline-primary rounded"><i
                                class="uil uil-file-alt"></i>
                            ICO Summary</a>
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
<section class="wrapper bg-primary">
    <div class="container py-10 ">
        <div class="row gx-lg-8 gx-xl-12 gy-10 gy-lg-0 mb-2 text-white align-items-center">
            <div class="col-lg-4">
                <h3 class="display-4 text-white mb-3 pe-xxl-15">GOMT Token</h3>
                </p>
            </div>
            <!-- /column -->
            <div class="col-lg-8 mt-lg-2">
                <div class="row align-items-center counter-wrapper gy-6 text-center">
                    <div class="col-md-4">
                        <!-- <div class="icon btn btn-circle btn-lg btn-soft-primary disabled mb-4">
                                    <i class="uil uil-money-stack"></i>
                                </div> -->
                        <img src="{{asset('assets/img/photos/gofeast_images/GOMT-Icon.png')}}" width="90" height="auto" class="mb-4">
                        <h3 class="text-white">5 Mil Total</h3>
                    </div>
                    <!--/column -->
                    <div class="col-md-4">
                        <!-- <div class="icon btn btn-circle btn-lg btn-soft-primary disabled mb-4">
                                    <i class="uil uil-user-plus"></i>
                                </div> -->
                        <img src="{{asset('assets/img/photos/gofeast_images/deflationary.png')}}" width="80" height="auto" class="mb-4">
                        <h3 class="text-white">Deflationary Economy</h3>
                        <!-- <p>App Downloads</p> -->
                    </div>
                    <!--/column -->
                    <div class="col-md-4">
                        <!-- <div class="icon btn btn-circle btn-lg btn-soft-primary disabled mb-4">
                                    <i class="uil uil-shopping-cart"></i>
                                </div> -->
                        <img src="{{asset('assets/img/photos/gofeast_images/realcase.png')}}" width="70" height="auto" class="mb-4">
                        <h3 class="text-white">Real Use-Case</h3>
                        <!-- <p>Orders</p> -->
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


<!-- /section -->
<section class="wrapper bg-light wrapper-border">
    <div class="container py-10 py-md-10">
        <div class="row gx-lg-8 gx-xl-12 gy-12 align-items-center ">
            <div class="col-lg-6 position-relative">
                <div class="row  align-items-center">
                    <!--/column -->
                    <!-- <div class="col"> -->
                    <img src="{{asset('assets/img/photos/gofeast_images/distribution.png')}}" alt="">

                    <!-- </div> -->
                    <!--/column -->
                </div>
                <!--/.row -->
            </div>
            <!--/column -->
            <div class="col-lg-6 ">
                <h3 class="display-4 mb-7 text-primary">Token Allocation <span class="fs-18">( 5 Mil )</span>
                </h3>

                <div class="d-flex flex-row mb-2 justify-content-between px-5">
                    <div class="flex-column">
                        <h4 class="mb-1">Pre-ICO Sale</h4>
                    </div>
                    <div class="flex-column">
                        <span class="badge bg-primary rounded-pill  me-4">400,000</span>
                        <span class="icon btn btn-block btn-soft-primary disabled "><span
                                class="number fs-18">8%</span></span>
                    </div>
                </div>



                <div class="d-flex flex-row mb-2 justify-content-between px-5">
                    <div class="flex-column">
                        <h4 class="mb-1">ICO Sale</h4>
                    </div>
                    <div class="flex-column">
                        <span class="badge bg-orange rounded-pill  me-4">1,350,000</span>
                        <span class="icon btn btn-block btn-soft-primary disabled "><span
                                class="number fs-18">27%</span></span>
                    </div>
                </div>

                <div class="d-flex flex-row mb-2 justify-content-between px-5">
                    <div class="flex-column">
                        <h4 class="mb-1">Exchanges & Liquidity</h4>
                    </div>
                    <div class="flex-column">
                        <span class="badge bg-yellow rounded-pill  me-4">250,000</span>
                        <span class="icon btn btn-block btn-soft-primary disabled "><span
                                class="number fs-18">5%</span></span>
                    </div>
                </div>

                <div class="d-flex flex-row mb-2 justify-content-between px-5">
                    <div class="flex-column">
                        <h4 class="mb-1">Reward Management</h4>
                    </div>
                    <div class="flex-column">
                        <span class="badge bg-leaf rounded-pill  me-4">250,000</span>
                        <span class="icon btn btn-block btn-soft-primary disabled "><span
                                class="number fs-18">5%</span></span>
                    </div>
                </div>

                <div class="d-flex flex-row mb-2 justify-content-between px-5">
                    <div class="flex-column">
                        <h4 class="mb-1">Future Reserve for Expansion</h4>
                    </div>
                    <div class="flex-column">
                        <span class="badge bg-green rounded-pill  me-4">1,250,000</span>
                        <span class="icon btn btn-block btn-soft-primary disabled "><span
                                class="number fs-18">25%</span></span>
                    </div>
                </div>

                <div class="d-flex flex-row mb-2 justify-content-between px-5">
                    <div class="flex-column">
                        <h4 class="mb-1">Teams & Founders</h4>
                    </div>
                    <div class="flex-column">
                        <span class="badge bg-aqua rounded-pill  me-4">1,000,000</span>
                        <span class="icon btn btn-block btn-soft-primary disabled "><span
                                class="number fs-18">20%</span></span>
                    </div>
                </div>

                <div class="d-flex flex-row mb-2 justify-content-between px-5">
                    <div class="flex-column">
                        <h4 class="mb-1">Reserve for Hydra Incentive</h4>
                    </div>
                    <div class="flex-column">
                        <span class="badge bg-purple rounded-pill  me-4">500,000</span>
                        <span class="icon btn btn-block btn-soft-primary disabled "><span
                                class="number fs-18">10%</span></span>
                    </div>
                </div>
            </div>
            <!--/column -->
        </div>

        <!-- <hr class="my-14 my-md-17" /> -->

    </div>
    <!-- /.container -->
</section>
<!-- /section -->


<!-- /section -->
<section class="wrapper bg-light wrapper-border">
    <div class="container py-10 py-md-10">
        <div class="row gx-lg-8 gx-xl-12 gy-12 align-items-center ">

            <div class="col-lg-6 ">
                <!-- <h2 class="fs-16 text-uppercase text-line text-primary mb-3">How GoFeast Works</h2> -->
                <h3 class="display-4 mb-7 text-primary">Funds Allocation</h3>

                <div class="d-flex flex-row mb-2 justify-content-between px-5">
                    <div class="flex-column">
                        <h4 class="mb-1">
                            Marketing & Promotions
                        </h4>
                    </div>
                    <div class="flex-column">

                        <span class="icon btn btn-block btn-soft-primary disabled "><span
                                class="number fs-18">50%</span></span>
                    </div>
                </div>



                <div class="d-flex flex-row mb-2 justify-content-between px-5">
                    <div class="flex-column">
                        <h4 class="mb-1">GoFeast Tech Platform
                        </h4>
                    </div>
                    <div class="flex-column">
                        <span class="icon btn btn-block btn-soft-primary disabled "><span
                                class="number fs-18">10%</span></span>
                    </div>
                </div>

                <div class="d-flex flex-row mb-2 justify-content-between px-5">
                    <div class="flex-column">
                        <h4 class="mb-1">Customer Services & Operations</h4>
                    </div>
                    <div class="flex-column">
                        <span class="icon btn btn-block btn-soft-primary disabled "><span
                                class="number fs-18">15%</span></span>
                    </div>
                </div>

                <div class="d-flex flex-row mb-2 justify-content-between px-5">
                    <div class="flex-column">
                        <h4 class="mb-1">Token Exchange Listing & Adoption
                        </h4>
                    </div>
                    <div class="flex-column">
                        <span class="icon btn btn-block btn-soft-primary disabled "><span
                                class="number fs-18">15%</span></span>
                    </div>
                </div>

                <div class="d-flex flex-row mb-2 justify-content-between px-5">
                    <div class="flex-column">
                        <h4 class="mb-1">Legal & Insurance</h4>
                    </div>
                    <div class="flex-column">
                        <span class="icon btn btn-block btn-soft-primary disabled "><span
                                class="number fs-18">10%</span></span>
                    </div>
                </div>

            </div>
            <!--/column -->
            <div class="col-lg-6 position-relative">
                <div class="row  align-items-center">
                    <!--/column -->
                    <!-- <div class="col"> -->
                    <img src="{{asset('assets/img/photos/gofeast_images/funds.png')}}" alt="">

                    <!-- </div> -->
                    <!--/column -->
                </div>
                <!--/.row -->
            </div>
            <!--/column -->
        </div>

        <!-- <hr class="my-14 my-md-17" /> -->

    </div>
    <!-- /.container -->
</section>
<!-- /section -->


<section class="wrapper bg-light">
    <div class="container py-10 py-md-10 text-center">
        <h3 class="display-4 mb-7 mt-lg-10 text-primary">GoFeast Roadmap</h3>
        <div class="row gx-lg-8 gx-xl-12 gy-12 align-items-center ">

            <img src="{{asset('assets/img/photos/gofeast_images/roadmap.png')}}" alt="">

        </div>

        <!-- <hr class="my-14 my-md-17" /> -->

    </div>
    <!-- /.container -->
</section>



<!-- /section -->
<section class="wrapper bg-light">
    <div class="container py-10 py-md-10">

        <div class="row gx-lg-8 gx-xl-12 gy-8">
            <div class="col-md-6 col-lg-4">
                <div class="d-flex flex-row">
                    <div>
                        <img src="{{asset('assets/img/icons/lineal/shield.svg')}}"
                            class="svg-inject icon-svg icon-svg-sm text-green me-4" alt="" />
                    </div>
                    <div>
                        <h3 class="fs-16 text-uppercase text-line text-primary mb-1">2018</h3>
                        <h4 class="mb-1">Inception</h4>
                        <ul class="icon-list bullet-bg bullet-soft-primary mb-0">
                            <li><span><i class="uil uil-check"></i></span><span class="text-leaf">
                                    GoFeast Founded & Incorporated</span></li>
                            <li><span><i class="uil uil-check"></i></span><span class="text-leaf">
                                    Business Processes and MVP Designed
                                </span></li>
                        </ul>
                    </div>
                </div>
            </div>
            <!--/column -->
            <div class="col-md-6 col-lg-4">
                <div class="d-flex flex-row">
                    <div>
                        <img src="{{asset('assets/img/icons/lineal/shield.svg')}}"
                            class="svg-inject icon-svg icon-svg-sm text-green me-4" alt="" />
                    </div>
                    <div>
                        <h3 class="fs-16 text-uppercase text-line text-primary mb-1">2019</h3>
                        <h4 class="mb-1">Pilot Phase</h4>
                        <ul class="icon-list bullet-bg bullet-soft-primary mb-0">
                            <li>
                                <span>
                                    <i class="uil uil-check"></i>
                                </span>
                                <span class="text-leaf">
                                    MVP Built & Pilot (US) store launched
                                </span>
                            </li>
                            <li>
                                <span>
                                    <i class="uil uil-check"></i>
                                </span>
                                <span class="text-leaf">
                                    GoFeast Platform upgraded
                                </span>
                            </li>
                            <li>
                                <span>
                                    <i class="uil uil-check"></i>
                                </span>
                                <span class="text-leaf">
                                    Multiple stores added in NJ
                                </span>
                            </li>

                            <li>
                                <span>
                                    <i class="uil uil-check"></i>
                                </span>
                                <span class="text-leaf">
                                    GoFeast Team Expanded
                                </span>
                            </li>
                            <li>
                                <span>
                                    <i class="uil uil-check"></i>
                                </span>
                                <span class="text-leaf">
                                    E2E Processes Optimized
                                </span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <!--/column -->
            <div class="col-md-6 col-lg-4">
                <div class="d-flex flex-row">
                    <div>
                        <img src="{{asset('assets/img/icons/lineal/shield.svg')}}"
                            class="svg-inject icon-svg icon-svg-sm text-green me-4" alt="" />
                    </div>
                    <div>
                        <h3 class="fs-16 text-uppercase text-line text-primary mb-1">2020</h3>
                        <h4 class="mb-1">Growth</h4>
                        <ul class="icon-list bullet-bg bullet-soft-primary mb-0">
                            <li>
                                <span>
                                    <i class="uil uil-check"></i>
                                </span>
                                <span class="text-leaf">
                                    8K+ App Downloads, $300K+ gross volume
                                </span>
                            </li>
                            <li>
                                <span>
                                    <i class="uil uil-check"></i>
                                </span>
                                <span class="text-leaf">
                                    Team Expanded to 20+ members
                                </span>
                            </li>
                            <li>
                                <span>
                                    <i class="uil uil-check"></i>
                                </span>
                                <span class="text-leaf">
                                    Advanced technology platform launched
                                </span>
                            </li>

                            <li>
                                <span>
                                    <i class="uil uil-check"></i>
                                </span>
                                <span class="text-leaf">
                                    Midwest expansion, 150+ Stores
                                </span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <!--/column -->

            <div class="col-md-6 col-lg-4">
                <div class="d-flex flex-row">
                    <div>
                        <img src="{{asset('assets/img/icons/lineal/shield.svg')}}"
                            class="svg-inject icon-svg icon-svg-sm text-green me-4" alt="" />
                    </div>
                    <div>
                        <h3 class="fs-16 text-uppercase text-line text-primary mb-1">2021</h3>
                        <h4 class="mb-1">Phase 1 Expansion</h4>
                        <ul class="icon-list bullet-bg bullet-soft-primary mb-0">
                            <li>
                                <span>
                                    <i class="uil uil-check"></i>
                                </span>
                                <span class="text-leaf">
                                    600+ Stores
                                </span>
                            </li>
                            <li>
                                <span>
                                    <i class="uil uil-check"></i>
                                </span>
                                <span class="text-leaf">
                                    GoFeast Volume $630k+
                                </span>
                            </li>
                            <li>
                                <span>
                                    <i class="uil uil-check"></i>
                                </span>
                                <span class="text-leaf">
                                    GOMT introduced in Q3
                                </span>
                            </li>
                            <li>
                                <span>
                                    <i class="uil uil-check"></i>
                                </span>
                                <span class="text-leaf">
                                    GOMT ICO sold-out
                                </span>
                            </li>
                            <li>
                                <span>
                                    <i class="uil uil-check"></i>
                                </span>
                                <span class="text-leaf">
                                    GOMT listed on Hydra DEX
                                </span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <!--/column -->

            <div class="col-md-6 col-lg-4">
                <div class="d-flex flex-row">
                    <div>
                        <img src="{{asset('assets/img/icons/lineal/shield.svg')}}"
                            class="svg-inject icon-svg icon-svg-sm text-green me-4" alt="" />
                    </div>
                    <div>
                        <h3 class="fs-16 text-uppercase text-line text-primary mb-1">2022</h3>
                        <h4 class="mb-1">Phase 2 Expansion</h4>
                        <ul class="icon-list bullet-bg bullet-soft-primary mb-0">
                            <li>
                                <span>
                                    <i class="uil uil-check"></i>
                                </span>
                                <span class="text-leaf">
                                    2000+ Stores
                                </span>
                            </li>
                            <li>
                                <span>
                                    <i class="uil uil-check"></i>
                                </span>
                                <span class="text-leaf">
                                    GoFeast Volume $1.2+ Mil
                                </span>
                            </li>
                            <li>
                                <span>
                                    <i class="uil uil-check"></i>
                                </span>
                                <span class="text-leaf">
                                    GOMT listing on CEX
                                </span>
                            </li>

                            <li>
                                <span>
                                    <i class="uil uil-check"></i>
                                </span>
                                <span class="text-leaf">
                                    Crypto wallets Integration
                                </span>
                            </li>
                            <li>
                                <span>
                                    <i class="uil uil-check"></i>
                                </span>
                                <span class="text-leaf">
                                    Multiple Kosher Stores added in Q4
                                </span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <!--/column -->

            <div class="col-md-6 col-lg-4">
                <div class="d-flex flex-row">
                    <div>
                        <img src="{{asset('assets/img/icons/lineal/shield.svg')}}"
                            class="svg-inject icon-svg icon-svg-sm text-yellow me-4" alt="" />
                    </div>
                    <div>
                        <h3 class="fs-16 text-uppercase text-line text-primary mb-1">2023</h3>
                        <h4 class="mb-1">Phase 3 Expansion</h4>
                        <ul class="icon-list bullet-bg bullet-soft-primary mb-0">
                            <li>
                                <span>
                                    <i class="uil uil-check"></i>
                                </span>
                                <span>
                                    3500+ Stores
                                </span>
                            </li>
                            <li>
                                <span>
                                    <i class="uil uil-check"></i>
                                </span>
                                <span>
                                    GoFeast Volume $3+ Mil
                                </span>
                            </li>
                            <li>
                                <span>
                                    <i class="uil uil-check"></i>
                                </span>
                                <span>
                                    Launch Phase 2 Funding
                                </span>
                            </li>
                            <li>
                                <span>
                                    <i class="uil uil-check"></i>
                                </span>
                                <span>
                                    Blockchain Certification Integration
                                </span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <!--/column -->

            <div class="col-md-6 col-lg-4">
                <div class="d-flex flex-row">
                    <div>
                        <img src="{{asset('assets/img/icons/lineal/shield.svg')}}"
                            class="svg-inject icon-svg icon-svg-sm text-yellow me-4" alt="" />
                    </div>
                    <div>
                        <h3 class="fs-16 text-uppercase text-line text-primary mb-1">2024</h3>
                        <h4 class="mb-1">Horizontal Expansion</h4>
                        <ul class="icon-list bullet-bg bullet-soft-primary mb-0">
                            <li>
                                <span>
                                    <i class="uil uil-check"></i>
                                </span>
                                <span>
                                    Global Expansion
                                </span>
                            </li>
                            <li>
                                <span>
                                    <i class="uil uil-check"></i>
                                </span>
                                <span>
                                    5k+ Stores
                                </span>
                            </li>
                            <li>
                                <span>
                                    <i class="uil uil-check"></i>
                                </span>
                                <span>
                                    GoFeast Volume $4.5+ Mil
                                </span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <!--/column -->

            <div class="col-md-6 col-lg-4">
                <div class="d-flex flex-row">
                    <div>
                        <img src="{{asset('assets/img/icons/lineal/shield.svg')}}"
                            class="svg-inject icon-svg icon-svg-sm text-yellow me-4" alt="" />
                    </div>
                    <div>
                        <h3 class="fs-16 text-uppercase text-line text-primary mb-1">2025</h3>
                        <h4 class="mb-1">Autonomous Delivery</h4>
                        <ul class="icon-list bullet-bg bullet-soft-primary mb-0">
                            <li>
                                <span>
                                    <i class="uil uil-check"></i>
                                </span>
                                <span>
                                    Globally Established Business
                                </span>
                            </li>
                            <li>
                                <span>
                                    <i class="uil uil-check"></i>
                                </span>
                                <span>
                                    Modern Drone/ Self Driving Delivery Options
                                </span>
                            </li>
                            <li>
                                <span>
                                    <i class="uil uil-check"></i>
                                </span>
                                <span>
                                    7500+ Stores, 100k+ Customers
                                </span>
                            </li>

                            <li>
                                <span>
                                    <i class="uil uil-check"></i>
                                </span>
                                <span>
                                    GoFeast Volume $6.7+ Mil
                                </span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <!--/column -->
        </div>
        <!--/.row -->
    </div>
    <!-- /.container -->
</section>
<!-- /section -->
<!-- /section -->
@endsection