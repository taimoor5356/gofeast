@extends('layouts.app')
@section('meta_tags')
<title>Food Guides, Deals & News in Lahore | GoFeast </title>
<meta name="description" content="Discover top food spots, local dining guides, restaurant reviews and exclusive GoFeast discount deals on the official GoFeast Lahore blog.">
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
                                        target="_blank"> <img src="{{asset('assets/img/photos/banners/Banner7.jpg')}}"
                                            alt="" />
                                    </a>
                                    <figcaption>
                                        <h5 class="from-top mb-0">Read More</h5>
                                    </figcaption>
                                </figure>
                                <div class="card-body">
                                    <div class="post-header">
                                        <!-- <div class="post-category text-line">
                                            <a href="#" class="me-2">Medium <img
                                                    src="{{asset('assets/img/photos/medium.png')}}" width="40"
                                                    height="auto"></a>
                                        </div> -->
                                        <!-- /.post-category -->
                                        <h2 class="post-title h3 mt-1 mb-3">
                                            <a href="#"
                                                target="_blank" class="link-dark">
                                                The Classic Smash Burger & Loaded Fries Combo
                                            </a>
                                        </h2>
                                    </div>
                                    <!-- /.post-header -->
                                    <div class="post-content">
                                        <p>
                                            Nothing satisfies an afternoon craving quite like a juicy double patty smash burger paired with seasoned fries and a cold drink. Local burger spots on GoFeast offer specialized lunch bundles that save you up to 20% compared to ordering individual items.
                                            <br> 
                                            • Best For: Quick lunch breaks & solo food cravings. 
                                            <br> 
                                            • Featured Deals: Exclusive burger discount deals, combo meal offers. 
                                                    
                                            
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
                        <article class="item post col-md-6 col-lg-4">
                            <div class="card">
                                <figure class="card-img-top overlay overlay-1 hover-scale">
                                    <a href="#"
                                        target="_blank"> <img src="{{asset('assets/img/photos/banners/Banner3.jpg')}}"
                                            alt="" />
                                    </a>
                                    <figcaption>
                                        <h5 class="from-top mb-0">Read More</h5>
                                    </figcaption>
                                </figure>
                                <div class="card-body">
                                    <div class="post-header">
                                        <!-- <div class="post-category text-line">
                                            <a href="#" class="me-2">Medium <img
                                                    src="{{asset('assets/img/photos/medium.png')}}" width="40"
                                                    height="auto"></a>
                                        </div> -->
                                        <!-- /.post-category -->
                                        <h2 class="post-title h3 mt-1 mb-3">
                                            <a href="#"
                                                target="_blank" class="link-dark">
                                                Crispy Fried Chicken Buckets & Wings
                                            </a>
                                        </h2>
                                    </div>
                                    <!-- /.post-header -->
                                    <div class="post-content">
                                        <p>
                                            When it comes to crispy fried chicken, more is always better. Look out for GoFeast’s value buckets featuring 6 to 12 pieces of spicy fried chicken, saucy chicken wings, dipped garlic mayo rolls, and dipping sauces. 
                                            <br> 
                                            • Best For: Sharing with family and friends.  
                                            <br> 
                                            • Featured Deals: Fried chicken bucket offers, discounted chicken wings.  
                                                    
                                            
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
                        <article class="item post col-md-6 col-lg-4">
                            <div class="card">
                                <figure class="card-img-top overlay overlay-1 hover-scale">
                                    <a href="#"
                                        target="_blank"> <img src="{{asset('assets/img/photos/banners/Banner2.jpg')}}"
                                            alt="" />
                                    </a>
                                    <figcaption>
                                        <h5 class="from-top mb-0">Read More</h5>
                                    </figcaption>
                                </figure>
                                <div class="card-body">
                                    <div class="post-header">
                                        <!-- <div class="post-category text-line">
                                            <a href="#" class="me-2">Medium <img
                                                    src="{{asset('assets/img/photos/medium.png')}}" width="40"
                                                    height="auto"></a>
                                        </div> -->
                                        <!-- /.post-category -->
                                        <h2 class="post-title h3 mt-1 mb-3">
                                            <a href="#"
                                                target="_blank" class="link-dark">
                                                Pizza Offers
                                            </a>
                                        </h2>
                                    </div>
                                    <!-- /.post-header -->
                                    <div class="post-content">
                                        <p>
                                            Host a weekend hangout without overspending. GoFeast partners with popular pizzerias to bring you pizza deals in medium and large sizes. Choose your favorite toppings from Chicken Tikka to Pepperoni Feast and get double the food for a fraction of the cost. 
                                            <br> 
                                            • Best For: Game nights, movie marathons, and weekend gatherings. 
                                            <br> 
                                            • Featured Deals: BOGO pizza discounts, cheap food delivery Lahore. 
                                                    
                                            
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
                        <article class="item post col-md-6 col-lg-4">
                            <div class="card">
                                <figure class="card-img-top overlay overlay-1 hover-scale">
                                    <a href="#"
                                        target="_blank"> <img src="{{asset('assets/img/photos/banners/Banner4.jpg')}}"
                                            alt="" />
                                    </a>
                                    <figcaption>
                                        <h5 class="from-top mb-0">Read More</h5>
                                    </figcaption>
                                </figure>
                                <div class="card-body">
                                    <div class="post-header">
                                        <!-- <div class="post-category text-line">
                                            <a href="#" class="me-2">Medium <img
                                                    src="{{asset('assets/img/photos/medium.png')}}" width="40"
                                                    height="auto"></a>
                                        </div> -->
                                        <!-- /.post-category -->
                                        <h2 class="post-title h3 mt-1 mb-3">
                                            <a href="#"
                                                target="_blank" class="link-dark">
                                                Loaded Tortilla Wraps & Paratha Roll Deals
                                            </a>
                                        </h2>
                                    </div>
                                    <!-- /.post-header -->
                                    <div class="post-content">
                                        <p>
                                            Looking for a convenient, mess-free meal on the go? Fast food wraps and crispy chicken rolls are some of the most popular items ordered on GoFeast. Take advantage of special "Duo Deals" where you can grab two signature wraps with a drink at a discounted price. 
                                            <br> 
                                            • Best For: Quick late-night meals and budget lunches. 
                                            <br> 
                                            • Featured Deals: Local food delivery vouchers, wrap meal combos.  
                                                    
                                            
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
                        <article class="item post col-md-6 col-lg-4">
                            <div class="card">
                                <figure class="card-img-top overlay overlay-1 hover-scale">
                                    <a href="#"
                                        target="_blank"> <img src="{{asset('assets/img/photos/banners/Banner5.jpg')}}"
                                            alt="" />
                                    </a>
                                    <figcaption>
                                        <h5 class="from-top mb-0">Read More</h5>
                                    </figcaption>
                                </figure>
                                <div class="card-body">
                                    <div class="post-header">
                                        <!-- /.post-category -->
                                        <h2 class="post-title h3 mt-1 mb-3">
                                            <a href="#"
                                                target="_blank" class="link-dark">
                                                Traditional Biryani & Karahi Family Platters 
                                            </a>
                                        </h2>
                                    </div>
                                    <!-- /.post-header -->
                                    <div class="post-content">
                                        <p>
                                            GoFeast isn't just about western fast food! it’s your home for authentic local Pakistani restaurant food. Enjoy heavy savings on chicken biryani deals, mutton karahi platters and fresh naan bundles from top-rated eateries in your area. 
                                            <br> 
                                            • Best For: Sunday family dinners and traditional food lovers.  
                                            <br> 
                                            • Featured Deals: Family meal platters, traditional food discounts.   
                                                    
                                            
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
                        <article class="item post col-md-6 col-lg-4">
                            <div class="card">
                                <figure class="card-img-top overlay overlay-1 hover-scale">
                                    <a href="#"
                                        target="_blank"> <img src="{{asset('assets/img/photos/banners/Banner6.jpg')}}"
                                            alt="" />
                                    </a>
                                    <figcaption>
                                        <h5 class="from-top mb-0">Read More</h5>
                                    </figcaption>
                                </figure>
                                <div class="card-body">
                                    <div class="post-header">
                                        <!-- /.post-category -->
                                        <h2 class="post-title h3 mt-1 mb-3">
                                            <a href="#"
                                                target="_blank" class="link-dark">
                                                Healthy Salad & Grilled Chicken Bowl Discounts 
                                            </a>
                                        </h2>
                                    </div>
                                    <!-- /.post-header -->
                                    <div class="post-content">
                                        <p>
                                            Eating clean doesn't have to be expensive. Find specialized discounts on grilled chicken bowls, fresh Mediterranean salads and low carb wraps from healthy food spots across the city. 
                                            <br> 
                                            • Best For: Post-workout nutrition and healthy workday lunches.  
                                            <br> 
                                            • Featured Deals: Healthy food delivery, diet meal discounts. 
                                                    
                                            
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
                        <article class="item post col-md-6 col-lg-4">
                            <div class="card">
                                <figure class="card-img-top overlay overlay-1 hover-scale">
                                    <a href="#"
                                        target="_blank"> <img src="{{asset('assets/img/photos/banners/Banner7.jpg')}}"
                                            alt="" />
                                    </a>
                                    <figcaption>
                                        <h5 class="from-top mb-0">Read More</h5>
                                    </figcaption>
                                </figure>
                                <div class="card-body">
                                    <div class="post-header">
                                        <!-- /.post-category -->
                                        <h2 class="post-title h3 mt-1 mb-3">
                                            <a href="#"
                                                target="_blank" class="link-dark">
                                                Late-Night Midnight Deals 
                                            </a>
                                        </h2>
                                    </div>
                                    <!-- /.post-header -->
                                    <div class="post-content">
                                        <p>
                                            GoFeast features dedicated midnight food deals active during late-night hours. Enjoy discounted sliders, french fries and beverages delivered fast to your location. 
                                            <br> 
                                            • Best For: Late night study sessions and late shifts.   
                                            <br> 
                                            • Featured Deals: Midnight food delivery, late night fast food. 
                                                    
                                            
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
                        <article class="item post col-md-6 col-lg-4">
                            <div class="card">
                                <figure class="card-img-top overlay overlay-1 hover-scale">
                                    <a href="#"
                                        target="_blank"> <img src="{{asset('assets/img/photos/banners/Banner8.jpg')}}"
                                            alt="" />
                                    </a>
                                    <figcaption>
                                        <h5 class="from-top mb-0">Read More</h5>
                                    </figcaption>
                                </figure>
                                <div class="card-body">
                                    <div class="post-header">
                                        <!-- /.post-category -->
                                        <h2 class="post-title h3 mt-1 mb-3">
                                            <a href="#"
                                                target="_blank" class="link-dark">
                                                Specialty Coffee & Bakery Bundles  
                                            </a>
                                        </h2>
                                    </div>
                                    <!-- /.post-header -->
                                    <div class="post-content">
                                        <p>
                                            Pair your morning or evening tea with fresh specialty bakery items, iced americanos, or pastries. Local cafes on GoFeast regularly run "Dessert" deals that give you sweet treats at half-price when ordered with a beverage. 
                                            <br> 
                                            • Best For: Evening teatime and sweet tooth cravings.  
                                            <br> 
                                            • Featured Deals: Cafe meal deals, bakery order discounts. 
                                                    
                                            
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
                        <article class="item post col-md-6 col-lg-4">
                            <div class="card">
                                <figure class="card-img-top overlay overlay-1 hover-scale">
                                    <a href="#"
                                        target="_blank"> <img src="{{asset('assets/img/photos/banners/Banner2.jpg')}}"
                                            alt="" />
                                    </a>
                                    <figcaption>
                                        <h5 class="from-top mb-0">Read More</h5>
                                    </figcaption>
                                </figure>
                                <div class="card-body">
                                    <div class="post-header">
                                        <!-- /.post-category -->
                                        <h2 class="post-title h3 mt-1 mb-3">
                                            <a href="#"
                                                target="_blank" class="link-dark">
                                                Office Lunch Box Specials  
                                            </a>
                                        </h2>
                                    </div>
                                    <!-- /.post-header -->
                                    <div class="post-content">
                                        <p>
                                            Working hard at the office? Skip the hassle of cooking and order single-serving office lunch deals. These include a balanced portion of protein, carbs, and a drink, packaged conveniently for workplace delivery. 
                                            <br> 
                                            • Best For: Corporate lunches and daily office ordering.  
                                            <br> 
                                            • Featured Deals: Workplace food delivery, daily lunch bundles.  
                                                    
                                            
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
                        <article class="item post col-md-6 col-lg-4">
                            <div class="card">
                                <figure class="card-img-top overlay overlay-1 hover-scale">
                                    <a href="#"
                                        target="_blank"> <img src="{{asset('assets/img/photos/banners/Banner2.jpg')}}"
                                            alt="" />
                                    </a>
                                    <figcaption>
                                        <h5 class="from-top mb-0">Read More</h5>
                                    </figcaption>
                                </figure>
                                <div class="card-body">
                                    <div class="post-header">
                                        <!-- /.post-category -->
                                        <h2 class="post-title h3 mt-1 mb-3">
                                            <a href="#"
                                                target="_blank" class="link-dark">
                                                First-Order App Discounts & Free Delivery  
                                            </a>
                                        </h2>
                                    </div>
                                    <!-- /.post-header -->
                                    <div class="post-content">
                                        <p>
                                            If you are new to the GoFeast app, you get access to the best deal of all: first-order promo codes and free food delivery! Keep an eye on the app banner for seasonal voucher codes that apply instant discounts at checkout. 
                                            <br> 
                                            • Best For: First-time GoFeast users. 
                                            <br> 
                                            • Featured Deals: GoFeast promo codes, free delivery deals.  
                                                    
                                            
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