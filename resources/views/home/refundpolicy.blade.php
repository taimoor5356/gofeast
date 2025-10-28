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
                                        @if (!is_null($data))
                                        {!! $data !!}
                                        @else
                                        
<h2>Refund Policy</h2>

<p><strong>GoFeast</strong> is the brand name of <strong>GoFeast (Pvt) Ltd.</strong></p>

<p>GoFeast will process a refund to the user in cases where an excess amount has been charged erroneously. Restaurants are responsible for refunding or replacing any order that does not conform to the user’s provided guidelines.</p>

<h3>Order Cancellations</h3>
<p>You are entitled to a refund for a cancelled order only if the vendor has not yet accepted your order. If you decide to cancel your order after it has been accepted by the vendor, please note that no refund (whether in full or in part) will be issued, and you will forfeit the delivery of your cancelled order.</p>

<h3>Refund Eligibility</h3>
<p>If you are entitled to a refund in accordance with GoFeast policies, you agree that:</p>
<ul>
  <li>For purchases made using <strong>credit card</strong>, <strong>debit card</strong>, or <strong>cash-on-delivery</strong> payment methods, refunds will be issued to your <strong>GoFeast Wallet</strong> by default.</li>
  <li>GoFeast may also refund the amount directly to your online account.</li>
  <li>Refunds for <strong>cash-on-delivery (COD)</strong> orders will be processed through the GoFeast Wallet.</li>
</ul>

<p>GoFeast may require you to provide additional information or supporting documents before processing any refund. This may include picture proof of physical receipts for Pick-Up Orders. We may, in our sole discretion, refuse to process any refund if you fail to provide such additional information or supporting documents.</p>

<h3>Refund Status</h3>
<p>If you have not received a refund, please:</p>
<ul>
  <li>Check your bank account again.</li>
  <li>Contact your credit card company or bank, as it may take some time for your refund to be posted.</li>
</ul>
<p>If you have done all of this and still have not received your refund, please contact customer support via phone call or email.</p>

<h2>Restricted Goods and Delivery Conditions</h2>
<p>In the case of Restricted Goods, if the customer did not meet the statutory age requirements or delivery did not deem it safe or appropriate for the customer to receive the Restricted Goods, the refund may be refused.</p>

<h3>Unsuccessful Deliveries</h3>
<p>In cases where we attempt to deliver an Order but are unable to do so due to reasons caused by you, including but not limited to:</p>
<ul>
  <li>No one was present or available to receive the Order.</li>
  <li>Customer was uncontactable despite attempts to reach the customer via the phone number provided.</li>
  <li>Lack of appropriate or sufficient access to deliver the Order successfully.</li>
  <li>Lack of a suitable or secure location to leave the Order.</li>
  <li>In the case of Restricted Goods, the customer did not meet the statutory age requirements or delivery did not deem it safe or appropriate for the customer to receive the Restricted Goods.</li>
</ul>

<p>We will contact you via call, message, or email to inform you of the unsuccessful delivery and next steps.</p>
<p>In such cases, GoFeast reserves the right to cancel the Order without refund or remedy to you. If you remain uncontactable or fail to receive the Order within ten (10) minutes from the time the Order arrives at your delivery address, GoFeast reserves the right to cancel the Order without refund or remedy to you.</p>

<h2>Pick-Up Delays and Product Inspection</h2>
<p>In the event of unreasonable delays in Pick-Up attributable to you, you bear the risk of any damage, loss, deterioration in quality, or change in the condition of the Goods (e.g., changes in temperature fit for consumption). In this case, you shall not be entitled to a replacement, refund, or replacement of the Goods.</p>
<p>You alone are responsible for inspecting the Goods/Order when you pick up your Order and shall report any issues and/or defects to the Vendor before leaving the Vendor’s premises.</p>

<h2>Goods Pricing and Refund Timelines</h2>
<p>Where the prices of any Goods are subject to the definitive weight of the Goods, we will provide an initial estimate of the price for the purposes of checkout. The final price shall be indicated in your email confirmation containing your tax invoice.</p>

<ul>
  <li>For shortfalls in payment, additional amounts shall be charged to you.</li>
  <li>In the event of overpayments, excess amounts shall be refunded in accordance with our refund policy.</li>
</ul>

<p>Refunds will require time to be processed by us, your credit card company, and/or your bank. It can take anywhere from <strong>five (5) to seven (7) business days</strong> (or even up to 30 days for overseas banks) for your refund to be processed and reflected in your account.</p>

<p><strong>Note:</strong> GoDriver Tips are <strong>not refundable</strong> once the Order has been delivered by the GoDriver.</p>

<h2>Contact GoFeast Support</h2>
<p>If you have any questions regarding this Agreement, please visit our <a href="/contact-us">“Contact Us”</a> page for answers and our contact information or email us at <a href="mailto:info@gofeast.pk">info@gofeast.pk</a>.</p>

                                        @endif
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