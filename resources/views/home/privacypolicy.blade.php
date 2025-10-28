@extends('layouts.app')
@section('meta_tags')

@endsection
@section('content')
<div class="container pt-10 pb-19   text-center">

    <!-- /.row -->
</div>
<!-- /.container -->
</section>
<!-- /section -->
<section class="wrapper bg-light">
    <div class="container pb-14 pb-md-16">
        <div class="row">
            <div class="col-lg-10 mx-auto">
                <div class="blog single mt-n17">
                    <div class="card">
                        <!--<figure class="card-img-top"><img src="{{asset('assets/img/photos/blog/gettoknowGOMT.jpeg')}}" alt="" /></figure>-->
                        <div class="card-body">
                            <div class="classic-view">
                                <article class="post">
                                    <div class="post-content mb-5">
                                        {{ $data }}
                                    </div>
                                    <!-- /.post-content -->

                                </article>
                                <!-- /.post -->
                            </div>

                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
                <!-- /.blog -->
            </div>
            <!-- /column -->
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container -->
</section>
<!-- /section -->
</div>
@endsection