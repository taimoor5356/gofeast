@extends('layouts.app')
@section('meta_tags')

@endsection
@section('content')

<section class="wrapper bg-light">
            <div class="container py-10 py-md-10">
                <h3 class="display-4 mb-3 text-center text-primary">FAQs</h3>
                <p class="lead text-center mb-10 px-md-16 px-lg-0">If you don't see an answer to your question, you can
                    send us an email or reach out directly to our customer support team via call or live-chat. <br> <a
                        href="./contact-us"><span class="badge bg-primary rounded-pill">Contact us</span></a></p>

                <div class="row">
                    <div class="col-lg-6 mb-0">
                        <h3 class="display-4 mb-3 text-center text-primary">GoFeast</h3>

                        <ul class="nav nav-tabs nav-pills">
                            <li class="nav-item">
                                <a class="nav-link active" data-bs-toggle="tab" href="#cutomer-tab">
                                    <i class="uil uil-phone-volume pe-1"></i>
                                    <span>Customer</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-bs-toggle="tab" href="#order-tab">
                                    <i class="uil uil-shield-exclamation pe-1"></i>
                                    <span>Orders</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-bs-toggle="tab" href="#driver-tab">
                                    <i class="uil uil-laptop-cloud pe-1"></i>
                                    <span>Driver</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-bs-toggle="tab" href="#partner-tab">
                                    <i class="uil uil-laptop-cloud pe-1"></i>
                                    <span>Partner
                                    </span>
                                </a>
                            </li>
                        </ul>
                        <!-- /.nav-tabs -->

                        <div class="tab-content ">
                            <div class="tab-pane fade show active " id="cutomer-tab">

                                <ul class="nav nav-tabs nav-pills">
                                    <li class="nav-item">
                                        <a class="nav-link active" data-bs-toggle="tab" href="#basic-tab">
                                            <i class="uil uil-phone-volume pe-1"></i>
                                            <span>Basic</span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" data-bs-toggle="tab" href="#account-tab">
                                            <i class="uil uil-shield-exclamation pe-1"></i>
                                            <span>Account</span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" data-bs-toggle="tab" href="#safety-tab">
                                            <i class="uil uil-laptop-cloud pe-1"></i>
                                            <span>Safety</span>
                                        </a>
                                    </li>
                                    <!-- <li class="nav-item">
                                        <a class="nav-link" data-bs-toggle="tab" href="#referral-tab">
                                            <i class="uil uil-laptop-cloud pe-1"></i>
                                            <span>Referral
                                            </span>
                                        </a>
                                    </li> -->
                                </ul>

                                <div class="tab-content">

                                    <div class="tab-pane fade show active bg-pale-yellow rounded" id="basic-tab">
                                        <div id="accordion-1" class="accordion-wrapper">
                                            <div class="card accordion-item">
                                                <div class="card-header" id="accordion-heading-1-1">
                                                    <button class="collapsed" data-bs-toggle="collapse"
                                                        data-bs-target="#accordion-collapse-1-1" aria-expanded="false"
                                                        aria-controls="accordion-collapse-1-1">What is GoFeast?</button>
                                                </div>
                                                <!-- /.card-header -->
                                                <div id="accordion-collapse-1-1" class="collapse"
                                                    aria-labelledby="accordion-heading-1-1"
                                                    data-bs-target="#accordion-1">
                                                    <div class="card-body">
                                                        <p>GoFeast is a marketplace leveraging blockchain technology,
                                                            connecting
                                                            consumers with specialty retail meat stores that primarily
                                                            offer
                                                            fresh Halal and Kosher meat products such as red meat,
                                                            poultry and
                                                            seafood.
                                                        </p>
                                                    </div>
                                                    <!-- /.card-body -->
                                                </div>
                                                <!-- /.collapse -->
                                            </div>
                                            <!-- /.card -->

                                            <div class="card accordion-item">
                                                <div class="card-header" id="accordion-heading-1-2">
                                                    <button class="collapsed" data-bs-toggle="collapse"
                                                        data-bs-target="#accordion-collapse-1-2" aria-expanded="false"
                                                        aria-controls="accordion-collapse-1-2">How does GoFeast
                                                        work?</button>
                                                </div>
                                                <!-- /.card-header -->
                                                <div id="accordion-collapse-1-2" class="collapse"
                                                    aria-labelledby="accordion-heading-1-2"
                                                    data-bs-target="#accordion-1">
                                                    <div class="card-body">
                                                        <p>GoFeast platform consists of the Online Ordering System which
                                                            is
                                                            accessible via world wide web (www.gofeastservices.com) and
                                                            GoFeast
                                                            mobile apps based on IOS and Android. GoFeast app users can
                                                            select
                                                            their favourite meat retailer and order meat products,
                                                            specialty
                                                            food and ethnic groceries online after selecting from the
                                                            available
                                                            menu of their store of choice. Once the products are
                                                            ordered, they
                                                            are picked up from the store by the customer or can be
                                                            requested for
                                                            delivery to arrive on their doorsteps. This is achieved by
                                                            our
                                                            GoDrivers network, drivers are signed up via the GoFeast
                                                            GoDriver
                                                            App. This eliminates any time that most consumers of halal
                                                            and
                                                            kosher meat must spend in stores waiting for their order to
                                                            be
                                                            prepared, hence addressing the biggest pain point of such
                                                            consumers.
                                                        </p>
                                                    </div>
                                                    <!-- /.card-body -->
                                                </div>
                                                <!-- /.collapse -->
                                            </div>
                                            <!-- /.card -->

                                            <div class="card accordion-item">
                                                <div class="card-header" id="accordion-heading-1-3">
                                                    <button class="collapsed" data-bs-toggle="collapse"
                                                        data-bs-target="#accordion-collapse-1-3" aria-expanded="false"
                                                        aria-controls="accordion-collapse-1-3">How do I place an order?
                                                    </button>
                                                </div>
                                                <!-- /.card-header -->
                                                <div id="accordion-collapse-1-3" class="collapse"
                                                    aria-labelledby="accordion-heading-1-3"
                                                    data-bs-target="#accordion-1">
                                                    <div class="card-body">
                                                        <ul>
                                                            <li>
                                                                Log In to your app or website
                                                            </li>
                                                            <li>
                                                                Pick the category you want to shop from
                                                            </li>
                                                            <li>
                                                                Select your favourite store
                                                            </li>
                                                            <li>
                                                                Add your preferred items to cart
                                                            </li>
                                                            <li>
                                                                Once you're on the checkout page
                                                                <ul>
                                                                    <li>
                                                                        Choose your mode of order I.e., home delivery,
                                                                        take away
                                                                        or curb side pick-up
                                                                    </li>
                                                                    <li>
                                                                        Add your address and personal details
                                                                    </li>
                                                                    <li>
                                                                        Double check your cart items
                                                                    </li>
                                                                    <li>
                                                                        Add any special instructions you have for the
                                                                        store
                                                                    </li>
                                                                </ul>
                                                            </li>
                                                            <li>
                                                                Proceed to Pay
                                                                <ul>
                                                                    <li>Review your bill summary</li>
                                                                    <li>Add a Tip</li>
                                                                    <li>Apply your loyalty points </li>
                                                                    <li>Add a promo or referral code</li>
                                                                    <li>Choose your payment method</li>
                                                                </ul>
                                                            </li>
                                                            <li>Swipe to pay and confirm </li>
                                                        </ul>
                                                        <p> <strong>And your order is on the way! </strong></p>
                                                    </div>
                                                    <!-- /.card-body -->
                                                </div>
                                                <!-- /.collapse -->
                                            </div>
                                            <!-- /.card -->

                                            <div class="card accordion-item">
                                                <div class="card-header" id="accordion-heading-1-4">
                                                    <button class="collapsed" data-bs-toggle="collapse"
                                                        data-bs-target="#accordion-collapse-1-4" aria-expanded="false"
                                                        aria-controls="accordion-collapse-1-4">What happens after I
                                                        order?</button>
                                                </div>
                                                <!-- /.card-header -->
                                                <div id="accordion-collapse-1-4" class="collapse"
                                                    aria-labelledby="accordion-heading-1-4"
                                                    data-bs-target="#accordion-1">
                                                    <div class="card-body">
                                                        <p>We send your order to the store as soon as you hit the
                                                            button. The
                                                            store tells us they’re working on the order, we email you a
                                                            receipt
                                                            and text you a confirmation.
                                                        </p>
                                                    </div>
                                                    <!-- /.card-body -->
                                                </div>
                                                <!-- /.collapse -->
                                            </div>
                                            <!-- /.card -->

                                            <div class="card accordion-item">
                                                <div class="card-header" id="accordion-heading-1-5">
                                                    <button class="collapsed" data-bs-toggle="collapse"
                                                        data-bs-target="#accordion-collapse-1-5" aria-expanded="false"
                                                        aria-controls="accordion-collapse-1-5">What happens after I
                                                        order?</button>
                                                </div>
                                                <!-- /.card-header -->
                                                <div id="accordion-collapse-1-5" class="collapse"
                                                    aria-labelledby="accordion-heading-1-5"
                                                    data-bs-target="#accordion-1">
                                                    <div class="card-body">
                                                        <p>We send your order to the store as soon as you hit the
                                                            button. The
                                                            store tells us they’re working on the order, we email you a
                                                            receipt
                                                            and text you a confirmation.
                                                        </p>
                                                    </div>
                                                    <!-- /.card-body -->
                                                </div>
                                                <!-- /.collapse -->
                                            </div>
                                            <!-- /.card -->

                                            <div class="card accordion-item">
                                                <div class="card-header" id="accordion-heading-1-6">
                                                    <button class="collapsed" data-bs-toggle="collapse"
                                                        data-bs-target="#accordion-collapse-1-6" aria-expanded="false"
                                                        aria-controls="accordion-collapse-1-6">Is there a minimum amount
                                                        I have
                                                        to spend to order? </button>
                                                </div>
                                                <!-- /.card-header -->
                                                <div id="accordion-collapse-1-6" class="collapse"
                                                    aria-labelledby="accordion-heading-1-6"
                                                    data-bs-target="#accordion-1">
                                                    <div class="card-body">
                                                        <p>There is no minimum amount for store pickup in place.
                                                            However, the
                                                            minimum order value for home delivery ranges from $15-50
                                                            depending
                                                            on the store
                                                        </p>
                                                    </div>
                                                    <!-- /.card-body -->
                                                </div>
                                                <!-- /.collapse -->
                                            </div>
                                            <!-- /.card -->

                                            <div class="card accordion-item">
                                                <div class="card-header" id="accordion-heading-1-7">
                                                    <button class="collapsed" data-bs-toggle="collapse"
                                                        data-bs-target="#accordion-collapse-1-7" aria-expanded="false"
                                                        aria-controls="accordion-collapse-1-7">How do I add a tip?
                                                    </button>
                                                </div>
                                                <!-- /.card-header -->
                                                <div id="accordion-collapse-1-7" class="collapse"
                                                    aria-labelledby="accordion-heading-1-7"
                                                    data-bs-target="#accordion-1">
                                                    <div class="card-body">
                                                        <p>Although tipping is not mandatory, we encourage tipping
                                                            drivers based
                                                            on performance, 100% of tips given go to the delivery
                                                            driver. When
                                                            checking out, you’ll see a dedicated section to tips on the
                                                            payment
                                                            page, choose your preferred amount or add a custom amount
                                                            and swipe
                                                            to pay!
                                                        </p>
                                                    </div>
                                                    <!-- /.card-body -->
                                                </div>
                                                <!-- /.collapse -->
                                            </div>
                                            <!-- /.card -->
                                            <div class="card accordion-item">
                                                <div class="card-header" id="accordion-heading-1-8">
                                                    <button class="collapsed" data-bs-toggle="collapse"
                                                        data-bs-target="#accordion-collapse-1-8" aria-expanded="false"
                                                        aria-controls="accordion-collapse-1-8">How to use promo codes?
                                                    </button>
                                                </div>
                                                <!-- /.card-header -->
                                                <div id="accordion-collapse-1-8" class="collapse"
                                                    aria-labelledby="accordion-heading-1-8"
                                                    data-bs-target="#accordion-1">
                                                    <div class="card-body">
                                                        <p>Promo codes can be entered on the “Payment” page before
                                                            checking out!
                                                        </p>
                                                    </div>
                                                    <!-- /.card-body -->
                                                </div>
                                                <!-- /.collapse -->
                                            </div>
                                            <!-- /.card -->
                                            <div class="card accordion-item">
                                                <div class="card-header" id="accordion-heading-1-9">
                                                    <button class="collapsed" data-bs-toggle="collapse"
                                                        data-bs-target="#accordion-collapse-1-9" aria-expanded="false"
                                                        aria-controls="accordion-collapse-1-9">When and Where is GoFeast
                                                        Available? </button>
                                                </div>
                                                <!-- /.card-header -->
                                                <div id="accordion-collapse-1-9" class="collapse"
                                                    aria-labelledby="accordion-heading-1-9"
                                                    data-bs-target="#accordion-1">
                                                    <div class="card-body">
                                                        <p>GoFeast is currently available in New Jersey, Illinois,
                                                            Philadelphia,
                                                            Florida, Georgia, Texas, Tennessee and New Mexico for
                                                            ordering and
                                                            food delivery.
                                                        </p>
                                                    </div>
                                                    <!-- /.card-body -->
                                                </div>
                                                <!-- /.collapse -->
                                            </div>
                                            <!-- /.card -->
                                            <div class="card accordion-item">
                                                <div class="card-header" id="accordion-heading-1-10">
                                                    <button class="collapsed" data-bs-toggle="collapse"
                                                        data-bs-target="#accordion-collapse-1-10" aria-expanded="false"
                                                        aria-controls="accordion-collapse-1-10">How do I place an order
                                                        for
                                                        Store
                                                        pickup? </button>
                                                </div>
                                                <!-- /.card-header -->
                                                <div id="accordion-collapse-1-10" class="collapse"
                                                    aria-labelledby="accordion-heading-1-10"
                                                    data-bs-target="#accordion-1">
                                                    <div class="card-body">
                                                        <p>At checkout, select "Pickup". The store will inform you when
                                                            your
                                                            order will be ready. Also, please have a picture
                                                            identification
                                                            handy. Our stores will verify the right order for the right
                                                            customer.
                                                        </p>
                                                    </div>
                                                    <!-- /.card-body -->
                                                </div>
                                                <!-- /.collapse -->
                                            </div>
                                            <!-- /.card -->
                                            <div class="card accordion-item">
                                                <div class="card-header" id="accordion-heading-1-11">
                                                    <button class="collapsed" data-bs-toggle="collapse"
                                                        data-bs-target="#accordion-collapse-1-11" aria-expanded="false"
                                                        aria-controls="accordion-collapse-1-11">Is Curbside pickup
                                                        available?
                                                    </button>
                                                </div>
                                                <!-- /.card-header -->
                                                <div id="accordion-collapse-1-11" class="collapse"
                                                    aria-labelledby="accordion-heading-1-11"
                                                    data-bs-target="#accordion-1">
                                                    <div class="card-body">
                                                        <p>Curbside pickup is available for certain stores; however, you
                                                            can try
                                                            requesting for a store pickup for the store.
                                                        </p>
                                                    </div>
                                                    <!-- /.card-body -->
                                                </div>
                                                <!-- /.collapse -->
                                            </div>
                                            <!-- /.card -->
                                            <div class="card accordion-item">
                                                <div class="card-header" id="accordion-heading-1-12">
                                                    <button class="collapsed" data-bs-toggle="collapse"
                                                        data-bs-target="#accordion-collapse-1-12" aria-expanded="false"
                                                        aria-controls="accordion-collapse-1-12">Where should I meet my
                                                        delivery
                                                        person?
                                                    </button>
                                                </div>
                                                <!-- /.card-header -->
                                                <div id="accordion-collapse-1-12" class="collapse"
                                                    aria-labelledby="accordion-heading-1-12"
                                                    data-bs-target="#accordion-1">
                                                    <div class="card-body">
                                                        <p>You can leave special delivery instructions such as:
                                                        <ol>
                                                            <li>
                                                                <strong>Leave at door: </strong>Your order will be left
                                                                at your
                                                                door.
                                                            </li>
                                                            <li>
                                                                <strong>Meet at door: </strong>The delivery person will
                                                                meet you
                                                                at your door.
                                                            </li>
                                                            <li>
                                                                <strong>Pick up outside: </strong>You'll meet your
                                                                delivery
                                                                person outside.
                                                            </li>
                                                        </ol>
                                                        </p>
                                                    </div>
                                                    <!-- /.card-body -->
                                                </div>
                                                <!-- /.collapse -->
                                            </div>
                                            <!-- /.card -->
                                            <div class="card accordion-item">
                                                <div class="card-header" id="accordion-heading-1-13">
                                                    <button class="collapsed" data-bs-toggle="collapse"
                                                        data-bs-target="#accordion-collapse-1-13" aria-expanded="false"
                                                        aria-controls="accordion-collapse-1-13">How is the delivery time
                                                        calculated?
                                                    </button>
                                                </div>
                                                <!-- /.card-header -->
                                                <div id="accordion-collapse-1-13" class="collapse"
                                                    aria-labelledby="accordion-heading-1-13"
                                                    data-bs-target="#accordion-1">
                                                    <div class="card-body">
                                                        <p>The time it takes for the restaurant to receive and prepare a
                                                            normal
                                                            order and for your meal to be delivered to your address are
                                                            both
                                                            included in the time estimate you see. <br>
                                                            The estimate we provide is only our best guess. When it
                                                            comes to
                                                            actual delivery timeframes, factors such as how busy the
                                                            restaurant
                                                            is, the size of your order and traffic conditions all come
                                                            into
                                                            play.
                                                        </p>
                                                    </div>
                                                    <!-- /.card-body -->
                                                </div>
                                                <!-- /.collapse -->
                                            </div>
                                            <!-- /.card -->
                                            <div class="card accordion-item">
                                                <div class="card-header" id="accordion-heading-1-14">
                                                    <button class="collapsed" data-bs-toggle="collapse"
                                                        data-bs-target="#accordion-collapse-1-14" aria-expanded="false"
                                                        aria-controls="accordion-collapse-1-14">How does GoFeast
                                                        calculate order
                                                        total?
                                                    </button>
                                                </div>
                                                <!-- /.card-header -->
                                                <div id="accordion-collapse-1-14" class="collapse"
                                                    aria-labelledby="accordion-heading-1-14"
                                                    data-bs-target="#accordion-1">
                                                    <div class="card-body">
                                                        <p>The bill summary includes:
                                                        </p>
                                                        <ul>
                                                            <li>Subtotal</li>
                                                            <li>Service Fee</li>
                                                            <li>Tip</li>
                                                            <li>Loyalty Points</li>
                                                            <li>Promo(s) </li>
                                                        </ul>
                                                    </div>
                                                    <!-- /.card-body -->
                                                </div>
                                                <!-- /.collapse -->
                                            </div>
                                            <!-- /.card -->
                                            <div class="card accordion-item">
                                                <div class="card-header" id="accordion-heading-1-15">
                                                    <button class="collapsed" data-bs-toggle="collapse"
                                                        data-bs-target="#accordion-collapse-1-15" aria-expanded="false"
                                                        aria-controls="accordion-collapse-1-15">How can I contact
                                                        customer
                                                        service?
                                                    </button>
                                                </div>
                                                <!-- /.card-header -->
                                                <div id="accordion-collapse-1-15" class="collapse"
                                                    aria-labelledby="accordion-heading-1-15"
                                                    data-bs-target="#accordion-1">
                                                    <div class="card-body">
                                                        <ul>
                                                            <li>You can email us at <a
                                                                    href="mailto:cs@gofeastservices.com">cs@gofeastservices.com</a>
                                                            </li>
                                                            <li>Call us on <a href="tel:19085740454">+19085740454</a>
                                                            </li>
                                                            <li>Reach-out via Live Chat </li>
                                                        </ul>
                                                    </div>
                                                    <!-- /.card-body -->
                                                </div>
                                                <!-- /.collapse -->
                                            </div>
                                            <!-- /.card -->
                                        </div>
                                    </div>



                                    <div class="tab-pane fade bg-pale-red rounded" id="account-tab">
                                        <div id="accordion-2" class="accordion-wrapper">
                                            <div class="card accordion-item">
                                                <div class="card-header" id="accordion-heading-2-1">
                                                    <button class="collapsed" data-bs-toggle="collapse"
                                                        data-bs-target="#accordion-collapse-2-1" aria-expanded="false"
                                                        aria-controls="accordion-collapse-2-1">I can't access my
                                                        account.</button>
                                                </div>
                                                <!-- /.card-header -->
                                                <div id="accordion-collapse-2-1" class="collapse"
                                                    aria-labelledby="accordion-heading-2-1"
                                                    data-bs-target="#accordion-2">
                                                    <div class="card-body">
                                                        <p>Your username is the email address you used when you
                                                            registered your account.
                                                            For your password, click the "Forgot Password?" button and
                                                            we'll email you a link to reset it.
                                                        </p>
                                                    </div>
                                                    <!-- /.card-body -->
                                                </div>
                                                <!-- /.collapse -->
                                            </div>
                                            <!-- /.card -->
                                            <div class="card accordion-item">
                                                <div class="card-header" id="accordion-heading-2-2">
                                                    <button class="collapsed" data-bs-toggle="collapse"
                                                        data-bs-target="#accordion-collapse-2-2" aria-expanded="false"
                                                        aria-controls="accordion-collapse-2-2">Can I have two GoFeast
                                                        accounts with the same email? </button>
                                                </div>
                                                <!-- /.card-header -->
                                                <div id="accordion-collapse-2-2" class="collapse"
                                                    aria-labelledby="accordion-heading-2-2"
                                                    data-bs-target="#accordion-2">
                                                    <div class="card-body">
                                                        <p>Unfortunately, no. Because your email is tied to your
                                                            account, it's not possible to have multiple accounts per
                                                            email address.
                                                        </p>
                                                    </div>
                                                    <!-- /.card-body -->
                                                </div>
                                                <!-- /.collapse -->
                                            </div>
                                            <!-- /.card -->
                                            <div class="card accordion-item">
                                                <div class="card-header" id="accordion-heading-2-3">
                                                    <button class="collapsed" data-bs-toggle="collapse"
                                                        data-bs-target="#accordion-collapse-2-3" aria-expanded="false"
                                                        aria-controls="accordion-collapse-2-3">Update or delete a
                                                        address</button>
                                                </div>
                                                <!-- /.card-header -->
                                                <div id="accordion-collapse-2-3" class="collapse"
                                                    aria-labelledby="accordion-heading-2-3"
                                                    data-bs-target="#accordion-2">
                                                    <div class="card-body">
                                                        <p>To Update your address
                                                        </p>
                                                        <ol>
                                                            <li>
                                                                Goto your profile
                                                            </li>
                                                            <li>
                                                                Goto Address Book
                                                            </li>
                                                            <li>There you will see options to add, update or delete
                                                                address</li>
                                                        </ol>
                                                    </div>
                                                    <!-- /.card-body -->
                                                </div>
                                                <!-- /.collapse -->
                                            </div>
                                            <!-- /.card -->
                                        </div>
                                    </div>




                                    <div class="tab-pane fade bg-pale-green rounded" id="safety-tab">
                                        <div id="accordion-3" class="accordion-wrapper">
                                            <div class="card accordion-item">
                                                <div class="card-header" id="accordion-heading-3-1">
                                                    <button class="collapsed" data-bs-toggle="collapse"
                                                        data-bs-target="#accordion-collapse-3-1" aria-expanded="false"
                                                        aria-controls="accordion-collapse-3-1">I want to Report an
                                                        incident with a delivery person.</button>
                                                </div>
                                                <!-- /.card-header -->
                                                <div id="accordion-collapse-3-1" class="collapse"
                                                    aria-labelledby="accordion-heading-3-1"
                                                    data-bs-target="#accordion-3">
                                                    <div class="card-body">
                                                        <p>To report an incident
                                                        </p>
                                                        <ul>
                                                            <li>
                                                                You can email us at <a
                                                                    href="mailto:cs@gofeastservices.com">cs@gofeastservices.com
                                                                </a>
                                                            </li>
                                                            <li>
                                                                Call us on <a href="tel:19085740454">+19085740454</a>
                                                            </li>
                                                            <li>Send us an in-app chat</li>
                                                        </ul>
                                                    </div>
                                                    <!-- /.card-body -->
                                                </div>
                                                <!-- /.collapse -->
                                            </div>
                                            <!-- /.card -->
                                            <div class="card accordion-item">
                                                <div class="card-header" id="accordion-heading-3-2">
                                                    <button class="collapsed" data-bs-toggle="collapse"
                                                        data-bs-target="#accordion-collapse-3-2" aria-expanded="false"
                                                        aria-controls="accordion-collapse-3-2">My order caused illness
                                                        or injury </button>
                                                </div>
                                                <!-- /.card-header -->
                                                <div id="accordion-collapse-3-2" class="collapse"
                                                    aria-labelledby="accordion-heading-3-2"
                                                    data-bs-target="#accordion-3">
                                                    <div class="card-body">
                                                        <p>GoFeast App is the medium to process and execute delivery of
                                                            online orders. Each store is responsible for maintaining the
                                                            highest level of quality. Our goal is to deliver fresh meat
                                                            from store to customer as soon as possible following State
                                                            Regulations of Meat Transportation.
                                                        </p>
                                                    </div>
                                                    <!-- /.card-body -->
                                                </div>
                                                <!-- /.collapse -->
                                            </div>
                                            <!-- /.card -->
                                            <div class="card accordion-item">
                                                <div class="card-header" id="accordion-heading-3-3">
                                                    <button class="collapsed" data-bs-toggle="collapse"
                                                        data-bs-target="#accordion-collapse-3-3" aria-expanded="false"
                                                        aria-controls="accordion-collapse-3-3">My order did not respect
                                                        my specified dietary requirements </button>
                                                </div>
                                                <!-- /.card-header -->
                                                <div id="accordion-collapse-3-3" class="collapse"
                                                    aria-labelledby="accordion-heading-3-3"
                                                    data-bs-target="#accordion-3">
                                                    <div class="card-body">
                                                        <p>TBD (same ans as prev)
                                                        </p>
                                                    </div>
                                                    <!-- /.card-body -->
                                                </div>
                                                <!-- /.collapse -->
                                            </div>
                                            <!-- /.card -->
                                            <div class="card accordion-item">
                                                <div class="card-header" id="accordion-heading-3-4">
                                                    <button class="collapsed" data-bs-toggle="collapse"
                                                        data-bs-target="#accordion-collapse-3-4" aria-expanded="false"
                                                        aria-controls="accordion-collapse-3-4">How does GoFeast help keep
                                                        my account secure? </button>
                                                </div>
                                                <!-- /.card-header -->
                                                <div id="accordion-collapse-3-4" class="collapse"
                                                    aria-labelledby="accordion-heading-3-4"
                                                    data-bs-target="#accordion-3">
                                                    <div class="card-body">
                                                        <p>We are committed to safeguarding your personal information
                                                            and care about the security of your GoFeast account. We
                                                            occasionally email restores to update and change their
                                                            account passwords as a precautionary measure for security
                                                            risks not associated with GoFeast. A number of reasons why
                                                            one of these proactive emails would be triggered includes
                                                            username and password breaches at other companies, phishing
                                                            schemes, logging into insecure sites from public Wi-Fi, and
                                                            malware attacks.
                                                        </p>
                                                    </div>
                                                    <!-- /.card-body -->
                                                </div>
                                                <!-- /.collapse -->
                                            </div>
                                            <!-- /.card -->
                                            <div class="card accordion-item">
                                                <div class="card-header" id="accordion-heading-3-5">
                                                    <button class="collapsed" data-bs-toggle="collapse"
                                                        data-bs-target="#accordion-collapse-3-5" aria-expanded="false"
                                                        aria-controls="accordion-collapse-3-5">What should i do if i
                                                        suspect fraudulent or suspicious activity on my account?
                                                    </button>
                                                </div>
                                                <!-- /.card-header -->
                                                <div id="accordion-collapse-3-5" class="collapse"
                                                    aria-labelledby="accordion-heading-3-5"
                                                    data-bs-target="#accordion-3">
                                                    <div class="card-body">
                                                        <p>We take fraud extremely serious at GoFeast. If you notice any
                                                            suspicious charges or unauthorized account activity, please
                                                            contact us immediately through one of the contact
                                                            information "here" so that we can investigate immediately.
                                                        </p>
                                                    </div>
                                                    <!-- /.card-body -->
                                                </div>
                                                <!-- /.collapse -->
                                            </div>
                                            <!-- /.card -->
                                        </div>
                                    </div>


                                    <!-- <div class="tab-pane fade" id="referral-tab">
                                        <div id="accordion-4" class="accordion-wrapper">
                                            <div class="card accordion-item">
                                                <div class="card-header" id="accordion-heading-4-1">
                                                    <button class="collapsed" data-bs-toggle="collapse"
                                                        data-bs-target="#accordion-collapse-4-1" aria-expanded="false"
                                                        aria-controls="accordion-collapse-4-1">I want to Report an
                                                        incident with a delivery person.</button>
                                                </div>
                                                
                                                <div id="accordion-collapse-4-1" class="collapse"
                                                    aria-labelledby="accordion-heading-4-1"
                                                    data-bs-target="#accordion-4">
                                                    <div class="card-body">
                                                        <p>To report an incident
                                                        </p>
                                                        <ul>
                                                            <li>
                                                                You can email us at <a
                                                                    href="mailto:cs@gofeastservices.com">cs@gofeastservices.com
                                                                </a>
                                                            </li>
                                                            <li>
                                                                Call us on <a href="tel:19085740454">+19085740454</a>
                                                            </li>
                                                            <li>Send us an in-app chat</li>
                                                        </ul>
                                                    </div>
                                                    
                                                </div>
                                                
                                            </div>
                                            
                                        </div>
                                    </div> -->
                                </div>


                            </div>
                            <!--/.tab-pane -->
                            <div class="tab-pane fade" id="order-tab">

                                <ul class="nav nav-tabs nav-pills">
                                    <li class="nav-item">
                                        <a class="nav-link active" data-bs-toggle="tab" href="#preorder-tab">
                                            <i class="uil uil-phone-volume pe-1"></i>
                                            <span>Pre Orders</span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" data-bs-toggle="tab" href="#postorder-tab">
                                            <i class="uil uil-shield-exclamation pe-1"></i>
                                            <span>Post Orders</span>
                                        </a>
                                    </li>
                                </ul>

                                <div class="tab-content">
                                    <div class="tab-pane fade show active" id="preorder-tab">

                                        <div id="accordion-5" class="accordion-wrapper">

                                            <div class="card accordion-item">
                                                <div class="card-header" id="accordion-heading-5-1">
                                                    <button class="collapsed" data-bs-toggle="collapse"
                                                        data-bs-target="#accordion-collapse-5-1" aria-expanded="false"
                                                        aria-controls="accordion-collapse-5-1">What if I didn't receive
                                                        the
                                                        order confirmation email?
                                                    </button>
                                                </div>
                                                <!-- /.card-header -->
                                                <div id="accordion-collapse-5-1" class="collapse"
                                                    aria-labelledby="accordion-heading-5-1"
                                                    data-bs-target="#accordion-5">
                                                    <div class="card-body">
                                                        <p>Check your SPAM messages to see if the email hasn't
                                                            accidentally
                                                            gone
                                                            to your SPAM folder. If you still cannot find confirmation,
                                                            reach
                                                            out to us on <a href="tel:19085740454 ">+19085740454</a></p>
                                                    </div>
                                                    <!-- /.card-body -->
                                                </div>
                                                <!-- /.collapse -->
                                            </div>
                                            <!-- /.card -->
                                            <div class="card accordion-item">
                                                <div class="card-header" id="accordion-heading-5-2">
                                                    <button class="collapsed" data-bs-toggle="collapse"
                                                        data-bs-target="#accordion-collapse-5-2" aria-expanded="false"
                                                        aria-controls="accordion-collapse-5-2">How do I check the status
                                                        of my order?
                                                    </button>
                                                </div>
                                                <!-- /.card-header -->
                                                <div id="accordion-collapse-5-2" class="collapse"
                                                    aria-labelledby="accordion-heading-5-2"
                                                    data-bs-target="#accordion-5">
                                                    <div class="card-body">
                                                        <p>You can check the status of your order real time using the
                                                            App. If you feel there is a problem with the order, you may
                                                            reach out to the Store. Check your order confirmation email
                                                            to get the store contact number. Or, you can reach out to Go
                                                            Meat Customer Care Specialist on <a
                                                                href="tel:19085740454 ">+19085740454</a>
                                                        </p>
                                                    </div>
                                                    <!-- /.card-body -->
                                                </div>
                                                <!-- /.collapse -->
                                            </div>
                                            <!-- /.card -->
                                            <div class="card accordion-item">
                                                <div class="card-header" id="accordion-heading-5-3">
                                                    <button class="collapsed" data-bs-toggle="collapse"
                                                        data-bs-target="#accordion-collapse-5-3" aria-expanded="false"
                                                        aria-controls="accordion-collapse-5-3">How do I change the items
                                                        in my order?
                                                    </button>
                                                </div>
                                                <!-- /.card-header -->
                                                <div id="accordion-collapse-5-3" class="collapse"
                                                    aria-labelledby="accordion-heading-5-3"
                                                    data-bs-target="#accordion-5">
                                                    <div class="card-body">
                                                        <p>If there is an issue with your order, you may reach out to
                                                            the store and let them know first. The phone number is
                                                            available in the order confirmation email. Or, you can reach
                                                            out to GoFeast customer Care Specialist on <a
                                                                href="tel:19085740454 ">+19085740454</a>
                                                        </p>
                                                    </div>
                                                    <!-- /.card-body -->
                                                </div>
                                                <!-- /.collapse -->
                                            </div>
                                            <!-- /.card -->
                                            <div class="card accordion-item">
                                                <div class="card-header" id="accordion-heading-5-4">
                                                    <button class="collapsed" data-bs-toggle="collapse"
                                                        data-bs-target="#accordion-collapse-5-4" aria-expanded="false"
                                                        aria-controls="accordion-collapse-5-4">I received the wrong
                                                        order
                                                    </button>
                                                </div>
                                                <!-- /.card-header -->
                                                <div id="accordion-collapse-5-4" class="collapse"
                                                    aria-labelledby="accordion-heading-5-4"
                                                    data-bs-target="#accordion-5">
                                                    <div class="card-body">
                                                        <p>We strive to provide high quality products to our customers.
                                                            We recommend you to inspect your Meat and perishable items
                                                            at the time of delivery. If you are not satisfied, these
                                                            items can be returned at the time of delivery for a full
                                                            refund. If you have additional queries, please reach to
                                                            Customer Services.
                                                        </p>

                                                    </div>
                                                    <!-- /.card-body -->
                                                </div>
                                                <!-- /.collapse -->
                                            </div>
                                            <!-- /.card -->
                                            <div class="card accordion-item">
                                                <div class="card-header" id="accordion-heading-5-5">
                                                    <button class="collapsed" data-bs-toggle="collapse"
                                                        data-bs-target="#accordion-collapse-5-5" aria-expanded="false"
                                                        aria-controls="accordion-collapse-5-5">How do I change my
                                                        delivery address?
                                                    </button>
                                                </div>
                                                <!-- /.card-header -->
                                                <div id="accordion-collapse-5-5" class="collapse"
                                                    aria-labelledby="accordion-heading-5-5"
                                                    data-bs-target="#accordion-5">
                                                    <div class="card-body">
                                                        <p>You can add a new address by going to the Delivery addresses
                                                            section in your Account or by clicking on the 'Add a New
                                                            Address' button and set address as default.
                                                        </p>
                                                    </div>
                                                    <!-- /.card-body -->
                                                </div>
                                                <!-- /.collapse -->
                                            </div>
                                            <!-- /.card -->
                                            <div class="card accordion-item">
                                                <div class="card-header" id="accordion-heading-5-6">
                                                    <button class="collapsed" data-bs-toggle="collapse"
                                                        data-bs-target="#accordion-collapse-5-6" aria-expanded="false"
                                                        aria-controls="accordion-collapse-5-6">Why is my order taking
                                                        longer than expected?
                                                    </button>
                                                </div>
                                                <!-- /.card-header -->
                                                <div id="accordion-collapse-5-6" class="collapse"
                                                    aria-labelledby="accordion-heading-5-6"
                                                    data-bs-target="#accordion-5">
                                                    <div class="card-body">
                                                        <p>Although we strive to have same day delivery, the delivery
                                                            time is subject to time order as requested, volume of order,
                                                            and store operations. You can check your order status
                                                            anytime using the App including real time tracking of
                                                            delivery drivers. Or, you can reach out to the GoFeast
                                                            Customer Care Specialist on <a
                                                                href="tel:19085740454 ">+19085740454</a></p>
                                                    </div>
                                                    <!-- /.card-body -->
                                                </div>
                                                <!-- /.collapse -->
                                            </div>
                                            <!-- /.card -->
                                            <div class="card accordion-item">
                                                <div class="card-header" id="accordion-heading-5-7">
                                                    <button class="collapsed" data-bs-toggle="collapse"
                                                        data-bs-target="#accordion-collapse-5-7" aria-expanded="false"
                                                        aria-controls="accordion-collapse-5-7">How do I cancel my order?
                                                    </button>
                                                </div>
                                                <!-- /.card-header -->
                                                <div id="accordion-collapse-5-7" class="collapse"
                                                    aria-labelledby="accordion-heading-5-7"
                                                    data-bs-target="#accordion-5">
                                                    <div class="card-body">
                                                        <p>TBD</p>
                                                    </div>
                                                    <!-- /.card-body -->
                                                </div>
                                                <!-- /.collapse -->
                                            </div>
                                            <!-- /.card -->
                                        </div>
                                    </div>

                                    <div class="tab-pane fade" id="postorder-tab">

                                        <div id="accordion-6" class="accordion-wrapper">
                                            <div class="card accordion-item">
                                                <div class="card-header" id="accordion-heading-6-1">
                                                    <button class="collapsed" data-bs-toggle="collapse"
                                                        data-bs-target="#accordion-collapse-6-1" aria-expanded="false"
                                                        aria-controls="accordion-collapse-6-1">Issue with Promo Code?
                                                    </button>
                                                </div>
                                                <!-- /.card-header -->
                                                <div id="accordion-collapse-6-1" class="collapse"
                                                    aria-labelledby="accordion-heading-6-1"
                                                    data-bs-target="#accordion-6">
                                                    <div class="card-body">
                                                        <p>Please reach out to us, </p>
                                                        <ul>
                                                            <li>You can email us at <a
                                                                    href="mailto:cs@gofeastservices.com">cs@gofeastservices.com</a>
                                                            </li>
                                                            <li>
                                                                Call us on <a href="tel:19085740454">+19085740454</a>
                                                            </li>
                                                            <li>Send us an in-app chat </li>
                                                        </ul>
                                                    </div>
                                                    <!-- /.card-body -->
                                                </div>
                                                <!-- /.collapse -->
                                            </div>
                                            <!-- /.card -->
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <!--/.tab-pane -->
                            <div class="tab-pane fade" id="driver-tab">
                                driver-tab
                            </div>
                            <!--/.tab-pane -->
                            <div class="tab-pane fade" id="partner-tab">
                                partner-tab
                            </div>
                            <!--/.tab-pane -->
                        </div>
                        <!-- /.tab-content -->



                        <!-- /.accordion-wrapper -->
                    </div>
                    <!--/column -->
                    <div class="col-lg-6">
                        <h3 class="display-4 mb-3 text-center text-primary">GOMT Token (GOMT)</h3>
                        <div id="accordion-2" class="accordion-wrapper">
                            <div class="card accordion-item">
                                <div class="card-header" id="accordion-heading-2-1">
                                    <button class="collapsed" data-bs-toggle="collapse"
                                        data-bs-target="#accordion-collapse-2-1" aria-expanded="false"
                                        aria-controls="accordion-collapse-2-1">Why is blockchain integration
                                        important?</button>
                                </div>
                                <!-- /.card-header -->
                                <div id="accordion-collapse-2-1" class="collapse"
                                    aria-labelledby="accordion-heading-2-1" data-bs-target="#accordion-2">
                                    <div class="card-body">
                                        <p>High demand for certification services in combination with a decentralized
                                            form of accreditation by Specialty Boards and inability to support the
                                            specialty industry efficiently has shown cracks in the conventional
                                            specialty certification model, which has become costly, inefficient,
                                            fraudulent and risky. The GoFeast blockchain phase 3 will be delivering the
                                            following: Digital halal certifications, integration with halal authorities'
                                            smart contracts to validate certification validity for the stores. The smart
                                            contract validated certificates will be available inside the apps under each
                                            store for the customers
                                        </p>
                                    </div>
                                    <!-- /.card-body -->
                                </div>
                                <!-- /.collapse -->
                            </div>
                            <!-- /.card -->
                            <div class="card accordion-item">
                                <div class="card-header" id="accordion-heading-2-2">
                                    <button class="collapsed" data-bs-toggle="collapse"
                                        data-bs-target="#accordion-collapse-2-2" aria-expanded="false"
                                        aria-controls="accordion-collapse-2-2">What are the requirements to buy GOMT
                                        Tokens?</button>
                                </div>
                                <!-- /.card-header -->
                                <div id="accordion-collapse-2-2" class="collapse"
                                    aria-labelledby="accordion-heading-2-2" data-bs-target="#accordion-2">
                                    <div class="card-body">
                                        <p>You will need a Hydra Wallet to receive GOMT.
                                            Due to regulation uncertainties, citizens and residents of the following
                                            countries are restricted from participating in this ICO: United States of
                                            America, China, Canada, South Korea, Afghanistan, Bahamas, Barbados,
                                            Botswana, Cambodia, Ghana, Iraq, Jamaica, Mauritius, Myanmar/Burma,
                                            Nicaragua, Panama, Syria, Trinidad and Tobago, Uganda, Vanuatu, Yemen,
                                            Zimbabwe, North Korea and Iran
                                            For KYC compliance, buyers will have to submit the following information:
                                            full name, address and a document proving their identity (e.g.
                                            passport/National ID card/driver's license). For more details head over to
                                            our KYC Compliance page:
                                        </p>
                                    </div>
                                    <!-- /.card-body -->
                                </div>
                                <!-- /.collapse -->
                            </div>
                            <!-- /.card -->
                            <div class="card accordion-item">
                                <div class="card-header" id="accordion-heading-2-3">
                                    <button class="collapsed" data-bs-toggle="collapse"
                                        data-bs-target="#accordion-collapse-2-3" aria-expanded="false"
                                        aria-controls="accordion-collapse-2-3">Is GOMT Token minable?</button>
                                </div>
                                <!-- /.card-header -->
                                <div id="accordion-collapse-2-3" class="collapse"
                                    aria-labelledby="accordion-heading-2-3" data-bs-target="#accordion-2">
                                    <div class="card-body">
                                        <p>No, GOMT is not minable. Only 1,750,000 will be in circulation to be sold and
                                            all of unsold tokens will be burnt.
                                        </p>
                                    </div>
                                    <!-- /.card-body -->
                                </div>
                                <!-- /.collapse -->
                            </div>
                            <!-- /.card -->
                            <div class="card accordion-item">
                                <div class="card-header" id="accordion-heading-2-4">
                                    <button class="collapsed" data-bs-toggle="collapse"
                                        data-bs-target="#accordion-collapse-2-4" aria-expanded="false"
                                        aria-controls="accordion-collapse-2-4">How do I reset my Account
                                        password?</button>
                                </div>
                                <!-- /.card-header -->
                                <div id="accordion-collapse-2-4" class="collapse"
                                    aria-labelledby="accordion-heading-2-4" data-bs-target="#accordion-2">
                                    <div class="card-body">
                                        <p>Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut
                                            fermentum massa justo sit amet risus. Cras mattis consectetur purus sit amet
                                            fermentum. Praesent commodo cursus magna, vel scelerisque nisl consectetur
                                            et. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur
                                            ridiculus mus. Donec sed odio dui. Cras justo odio, dapibus ac facilisis.
                                        </p>
                                    </div>
                                    <!-- /.card-body -->
                                </div>
                                <!-- /.collapse -->
                            </div>
                            <!-- /.card -->
                        </div>
                        <!-- /.accordion-wrapper -->
                    </div>
                    <!--/column -->
                </div>
                <!--/.row -->
            </div>
            <!-- /.container -->
        </section>
@endsection