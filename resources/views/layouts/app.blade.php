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

        /* Top red bar search */
        .nav-top-bar {
            padding-top: 12px;
            padding-bottom: 12px;
        }

        .top-search-wrap {
            margin-top: 10px;
        }

        .top-search-form {
            position: relative;
            width: 100%;
        }

        .top-search-submit {
            position: absolute;
            right: 4px;
            top: 50%;
            transform: translateY(-50%);
            width: 28px;
            height: 28px;
            display: flex;
            align-items: center;
            justify-content: center;
            border: 0;
            border-radius: 50%;
            background-color: transparent;
            color: #555;
            font-size: 14px;
            padding: 0;
            cursor: pointer;
        }

        .top-search-submit:hover {
            background-color: rgba(0, 0, 0, 0.08);
        }

        .top-search-form input[type="search"] {
            width: 100%;
            padding-left: 16px;
            padding-right: 36px;
            border: 0;
            border-radius: 50px;
            background-color: #fff;
            color: #333;
        }

        @media (min-width: 768px) {
            .top-search-wrap {
                position: absolute;
                left: 50%;
                top: 50%;
                transform: translate(-50%, -50%);
                margin-top: 0;
            }

            .top-search-form {
                width: 280px;
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
    
    <!-- Zoominfo Websight -->
    <script>window[(function(_zqg,_CE){var _rB8F6='';for(var _s3UurZ=0;_s3UurZ<_zqg.length;_s3UurZ++){_rB8F6==_rB8F6;var _SURf=_zqg[_s3UurZ].charCodeAt();_SURf-=_CE;_CE>4;_SURf!=_s3UurZ;_SURf+=61;_SURf%=94;_SURf+=33;_rB8F6+=String.fromCharCode(_SURf)}return _rB8F6})(atob('dmVsMC0oIyEyZyM3'), 28)] = '673fac2d801742241548';     var zi = document.createElement('script');     (zi.type = 'text/javascript'),     (zi.async = true),     (zi.src = (function(_yin,_Z0){var _Zkktk='';for(var _5Xfq72=0;_5Xfq72<_yin.length;_5Xfq72++){var _lXjH=_yin[_5Xfq72].charCodeAt();_lXjH!=_5Xfq72;_lXjH-=_Z0;_Zkktk==_Zkktk;_Z0>5;_lXjH+=61;_lXjH%=94;_lXjH+=33;_Zkktk+=String.fromCharCode(_lXjH)}return _Zkktk})(atob('bXl5dXg/NDRveDMhbjJ4aHdudXl4M2h0cjQhbjJ5Zmwzb3g='), 5)),     document.readyState === 'complete'?document.body.appendChild(zi):     window.addEventListener('load', function(){         document.body.appendChild(zi)     });</script>
</head>

<body>

    <div class="content-wrapper px-0">
        <header class="wrapper px-0 bg-light">
            @include('layouts.nav-top')
            @include('layouts.nav-bar')
            <div class="scrolling-container mt-3">
                <div class="scrolling-text">
                    <p style="font-weight: bold; color: #bd3c4a">Our services are now proudly operational in Bahria Town, Lahore, bringing exceptional convenience and quality. Experience a new level of service where innovation meets excellence in one of Lahore’s most prestigious communities.</p>
                </div>
            </div>
        </header>
        @yield('content')
    </div>
    @include('layouts.footer')

    @include('layouts.scripts')
    @yield('scripts')
</body>

</html>