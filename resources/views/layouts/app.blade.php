<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Page Title -->
    @include('layouts.links')

    @yield('meta_tags')
    <!-- Canonical Tag -->

    <link rel="canonical" href="https://www.gofeast.pk/" />
    <style>
        @keyframes fadeInLeft {
            from {
                opacity: 0;
                transform: translateX(-500px);
            }

            to {
                opacity: 1;
                transform: translateX(0);
            }
        }

        @keyframes fadeInRight {
            from {
                opacity: 0;
                transform: translateX(500px);
            }

            to {
                opacity: 1;
                transform: translateX(0);
            }
        }

        .main-carousel-banner .owl-stage-outer {
            overflow: visible;
        }

        /* Hide the carousel on mobile devices (screens narrower than 768px) */
        @media (max-width: 767px) {
            .main-carousel-banner .owl-stage-outer {
                overflow: hidden !important;
            }
        }

        /* General styles for carousel items */
        .main-carousel-banner .item {
            transition: transform 0.3s ease-in-out;
        }

        .main-carousel-banner .item.center {
            opacity: 1;
        }

        /* Animation styles */
        .fade-in-left {
            animation: fadeInLeft 1.5s;
        }

        .fade-in-right {
            animation: fadeInRight 1.5s;
        }

        .scrolling-container {
            width: 100%;
            /* Adjust the height as per your need */
            overflow: hidden;
            /* Optional: Set background for visibility */
        }

        .scrolling-text {
            white-space: nowrap;
        }

        .scrolling-text p {
            display: inline-block;
            padding-left: 100%;
            animation: scrolling 50s linear infinite;
        }

        @keyframes scrolling {
            0% {
                transform: translateX(0%);
                /* Start with the text already visible */
            }

            100% {
                transform: translateX(-100%);
                /* Move completely off-screen */
            }
        }
    </style>

    @yield('styles')

    <!-- Meta Pixel Code -->
    <script>
        !function(f, b, e, v, n, t, s) {
            if (f.fbq) return;
            n = f.fbq = function() {
                n.callMethod ?
                    n.callMethod.apply(n, arguments) : n.queue.push(arguments)
            };
            if (!f._fbq) f._fbq = n;
            n.push = n;
            n.loaded = !0;
            n.version = '2.0';
            n.queue = [];
            t = b.createElement(e);
            t.async = !0;
            t.src = v;
            s = b.getElementsByTagName(e)[0];
            s.parentNode.insertBefore(t, s)
        }(window, document, 'script', 'https: //connect.facebook.net/en_US/fbevents.js');
        fbq('init', '1939984493148488'); fbq('track', 'PageView');
    </script>
    <noscript><img height="1" width="1" style="display:none" src="https://www.facebook.com/tr?id=1939984493148488&ev=PageView&noscript=1" /></noscript>
    <!-- End Meta Pixel Code -->

</head>

<body>

    <div class="content-wrapper px-0">
        <header class="wrapper px-0 bg-light">
            @include('layouts.nav-top')
            @include('layouts.nav-bar')
            {{--<div class="scrolling-container mt-3">
                <div class="scrolling-text">
                    <p style="font-weight: bold; color: #bd3c4a">Our services are now proudly operational in Bahria Town, Lahore, bringing exceptional convenience and quality. Experience a new level of service where innovation meets excellence in one of Lahore’s most prestigious communities.</p>
                </div>
            </div>--}}
        </header>
        @yield('content')
    </div>
    @include('layouts.footer')

    @include('layouts.scripts')
    @yield('scripts')
</body>

</html>