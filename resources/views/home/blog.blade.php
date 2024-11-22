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
                                    <a href="#"
                                        target="_blank"> <img src="{{asset('assets/img/photos/banners/GoBlog.jpg')}}"
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
                                                    src="{{asset('assets/img/photos/medium.png')}}" width="40"
                                                    height="auto"></a>
                                        </div>
                                        <!-- /.post-category -->
                                        <h2 class="post-title h3 mt-1 mb-3">
                                            <!-- <a href="https://gomeattoken.medium.com/gomeat-annual-performance-report-2022-key-updates-42e229422a47"
                                                target="_blank" class="link-dark">
                                                GoFeast Annual Performance Report 2022 — Key Updates
                                            </a> -->
                                            <a href="{{asset('assets/pdf/AnnualPerformanceReport_20221.pdf')}}"
                                                target="_blank" class="link-dark">
                                                GoFeast Annual Performance Report 2022 — Key Updates
                                            </a>
                                        </h2>
                                    </div>
                                    <!-- /.post-header -->
                                    <div class="post-content">
                                        <p>The GoFeast Management Team could not be prouder to present
                                            our Annual Performance Report for 2022 to all of our GoFeast “Steakholders”.
                                            <br>
                                            Read the full version of this report here:
                                            <a href="{{asset('assets/pdf/AnnualPerformanceReport_20221.pdf')}}" target="_blank">Annual Report</a>
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