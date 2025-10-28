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
                                        <h1>Privacy Policy – GoFeast</h1>

    <p><strong>GoFeast</strong> is the brand name of <strong>GoFeast Pvt Ltd.</strong> At GoFeast, we value your privacy and want you to understand how we collect, use, and disclose your Personal Information.</p>

    <p>This Privacy Policy outlines our practices regarding data privacy. It also explains the types of Personal Information we collect through our websites, including:</p>

    <ul>
        <li><a href="https://gofeast.pk">gofeast.pk</a></li>
        <li><a href="https://orders.gofeast.pk">orders.gofeast.pk</a></li>
        <li>Related mobile websites and mobile applications</li>
        <li>Any other sites and applications that reference this Privacy Policy (collectively referred to as the “Sites”)</li>
    </ul>

    <p>Unless specifically noted otherwise, this Privacy Policy does not apply to third-party websites or mobile apps that are not listed above.</p>
    <p>As used in this Privacy Policy, “GoFeast,” “we,” “us,” and “our” refer to GoFeast Pvt Ltd. and its subsidiaries and affiliates.</p>

    <h2>Your Agreement to This Policy</h2>
    <p>By accessing and/or using our Sites, you agree to the terms and conditions set forth in this Privacy Policy and our Terms of Use.</p>
    <p>If you do not agree to all terms and conditions of this Privacy Policy, please do not use our Sites.</p>

    <h2>What Types of Information Do We and Our Third-Party Service Providers Collect?</h2>

    <h3>When Do We Collect Your Information?</h3>
    <p>We, along with our third-party service providers, collect information in various situations, including but not limited to:</p>
    <ul>
        <li>When you register for our services</li>
        <li>When you sign up for our mailing list</li>
        <li>When you enter contests or sweepstakes</li>
        <li>When you communicate with us</li>
        <li>When you interact with the Sites by placing an order, posting a review, or interacting with Partner Stores</li>
        <li>When you make a payment for services</li>
        <li>When you log in using third-party services such as Facebook or Google</li>
        <li>When you grant the Sites permission to access device features like your address book or camera</li>
    </ul>

    <h3>What Kind of Information Do We Collect?</h3>
    <p>We collect Personal Information that can be used to uniquely identify you, including but not limited to:</p>
    <ul>
        <li>Full name</li>
        <li>Postal address</li>
        <li>Telephone number</li>
        <li>Email address</li>
        <li>Any other similar data</li>
    </ul>

    <h2>Information We Collect</h2>

    <h3>Personal and Sensitive Information</h3>
    <p>Personal Information includes certain sensitive information related to your finances, or for business accounts, your employer’s finances. This includes:</p>
    <ul>
        <li>Credit card numbers</li>
        <li>Other payment account numbers</li>
        <li>3–4 digit validation codes for your credit card</li>
    </ul>

    <h3>Non-Personal Information</h3>
    <p>We may also collect non-personal information such as details about your usage of our Sites. If linked to your Personal Information, we treat it as Personal Information.</p>

    <h3>Information from Third Parties</h3>
    <p>We may receive your information from:</p>
    <ul>
        <li>Other users of our Sites</li>
        <li>Delivery Partners (“drivers”)</li>
        <li>Business Partners (“Stores”)</li>
    </ul>

    <h3>Information Collected Automatically</h3>
    <p>We and our third-party service providers may automatically collect data when you visit our Sites, read our emails, or interact with our services. This helps us improve your experience and service quality.</p>

    <h3>Device and Technical Data</h3>
    <ul>
        <li>IP address</li>
        <li>Browser type</li>
        <li>Internet service provider</li>
        <li>Device type, model, and manufacturer</li>
        <li>Operating system</li>
        <li>Date and time stamp</li>
        <li>Unique identifiers (e.g., device ID, Ad ID)</li>
    </ul>

    <h3>Analytics</h3>
    <p>We may use third-party analytics tools like Google Analytics to understand user trends.</p>
    <p>Learn more: <a href="http://www.google.com/policies/privacy/partners" target="_blank">Google Privacy Policy</a></p>

    <h2>Cookies and Email Settings</h2>

    <h3>Cookie Preferences</h3>
    <p>Most browsers allow you to manage cookies by receiving alerts, disabling existing cookies, or rejecting all cookies. Disabling cookies may affect site functionality.</p>

    <h3>Email Image Settings</h3>
    <p>You can configure your email to block automatic image downloads, which may contain tracking technologies.</p>

    <h3>Location Information</h3>
    <p>With your consent, we may collect location data via GPS to improve delivery efficiency and user experience.</p>

    <h2>How We Use Your Information</h2>
    <ul>
        <li><strong>Account Management & Fulfillment:</strong> Registration, verification, order fulfillment, and payments</li>
        <li><strong>Communication:</strong> Important updates and service notifications</li>
        <li><strong>Marketing & Promotions:</strong> Sending promotional messages and offers</li>
        <li><strong>Business Operations:</strong> Analytics, fraud detection, and service improvement</li>
    </ul>

    <h2>How We Share Your Information</h2>
    <ul>
        <li><strong>With Affiliates and Service Providers:</strong> For hosting, IT, marketing, or payment services</li>
        <li><strong>With Legal Authorities:</strong> To comply with valid legal requests</li>
        <li><strong>With Restaurants and Stores:</strong> To fulfill your orders</li>
        <li><strong>For Business Transactions:</strong> In mergers, sales, or reorganizations</li>
        <li><strong>Aggregated or De-Identified Data:</strong> Shared without identifying you personally</li>
    </ul>

    <h2>Third-Party Tracking & Online Advertising</h2>
    <p>We participate in interest-based advertising using cookies, device IDs, and account identifiers to display relevant ads.</p>
    <p>You can manage your preferences via:</p>
    <ul>
        <li><a href="https://optout.networkadvertising.org/">Network Advertising Initiative (NAI)</a></li>
        <li><a href="https://optout.aboutads.info/">Digital Advertising Alliance (DAA)</a></li>
    </ul>

    <h2>Profiles and Interactive Areas</h2>
    <p>Public features such as reviews or chats may display your information publicly. Please share cautiously.</p>

    <h2>Third-Party Sites</h2>
    <p>This policy does not apply to external sites linked through our platform. Review their privacy policies before using them.</p>

    <h2>Security</h2>
    <p>We use reasonable measures to protect your data. However, no method is 100% secure. If you suspect a breach, contact us immediately.</p>

    <h2>Unsubscribe</h2>
    <p>To stop receiving marketing emails, click “unsubscribe” in any email footer. For SMS, reply “STOP.”</p>

    <h2>Control Over Your Personal Information</h2>
    <p>You may review or update your Personal Information through your account settings. Some data may not be editable due to legal or operational reasons.</p>

    <h2>Data Retention</h2>
    <p>We retain Personal Information as long as necessary to fulfill this policy’s purposes and comply with legal obligations.</p>

    <h2>Children’s Privacy</h2>
    <p>Our Sites are not intended for children under 13. If you believe a child has provided data, email us at <a href="mailto:info@gofeast.pk">info@gofeast.pk</a>.</p>

    <h2>Disclaimer</h2>
    <p>Your use of the Sites is at your own risk. By using them, you consent to the transfer of your data to countries with different privacy laws.</p>

    <h2>Changes to This Privacy Policy</h2>
    <p>We may update this Privacy Policy at any time. The latest version will always be available on our website. Continued use of the Sites indicates acceptance of updates.</p>

    <h2>Contacting Us</h2>
    <p>If you have questions about this Privacy Policy, contact us:</p>
    <ul>
        <li><strong>Email:</strong> <a href="mailto:info@gofeast.pk">info@gofeast.pk</a></li>
        <li><strong>Address:</strong><br>
            GoFeast Pvt Ltd.<br>
            Suite 209 A, Commercial Sector C,<br>
            Bahria Town, Lahore
        </li>
    </ul>

    <p><em>Important:</em> Email communication may not be secure. Do not send sensitive information like credit card details via email.</p>

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