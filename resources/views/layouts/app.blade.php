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
            position: relative;
            z-index: 3000;
            margin-top: 10px;
        }

        .top-search-form {
            position: relative;
            width: 100%;
            display: flex;
            align-items: stretch;
            background-color: #fff;
            border-radius: 50px;
            box-shadow: 0 6px 20px rgba(0, 0, 0, 0.15);
        }

        /* Custom store/item dropdown */
        .top-search-type-dropdown {
            position: relative;
            flex: 0 0 auto;
        }

        .top-search-type-btn {
            display: flex;
            align-items: center;
            gap: 6px;
            height: 100%;
            border: 0;
            border-right: 1px solid #ececec;
            background-color: transparent;
            border-radius: 50px 0 0 50px;
            padding: 0 10px 0 6px;
            cursor: pointer;
            color: #333;
            font-size: 12.5px;
            font-weight: 600;
            transition: background-color 0.15s ease;
        }

        .top-search-type-btn:hover {
            background-color: #f7f2f2;
        }

        .top-search-type-icon-badge {
            display: flex;
            align-items: center;
            justify-content: center;
            width: 24px;
            height: 24px;
            border-radius: 50%;
            background-color: rgba(180, 51, 61, 0.1);
            color: #b4333d;
            font-size: 13px;
            flex-shrink: 0;
            transition: background-color 0.15s ease, color 0.15s ease;
        }

        .top-search-type-caret {
            font-size: 10px;
            color: #999;
            margin-left: 1px;
            transition: transform 0.2s ease;
        }

        .top-search-type-dropdown.open .top-search-type-caret {
            transform: rotate(180deg);
        }

        .top-search-type-menu {
            position: absolute;
            top: calc(100% + 10px);
            left: 0;
            display: flex;
            align-items: center;
            gap: 6px;
            width: max-content;
            margin: 0;
            padding: 6px;
            list-style: none;
            background-color: #fff;
            border-radius: 999px;
            box-shadow: 0 14px 34px rgba(0, 0, 0, 0.18), 0 4px 10px rgba(0, 0, 0, 0.08);
            opacity: 0;
            transform: translateY(-8px) scale(0.9);
            transform-origin: top left;
            pointer-events: none;
            transition: opacity 0.18s ease, transform 0.18s ease;
            z-index: 4000;
        }

        .top-search-type-dropdown.open .top-search-type-menu {
            opacity: 1;
            transform: translateY(0) scale(1);
            pointer-events: auto;
        }

        .top-search-type-menu li {
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 4px;
            border-radius: 50%;
            cursor: pointer;
            transition: background-color 0.15s ease, transform 0.15s ease;
        }

        .top-search-type-menu li:hover {
            background-color: rgba(180, 51, 61, 0.08);
            transform: scale(1.06);
        }

        .top-search-type-menu li .top-search-type-icon-badge {
            width: 38px;
            height: 38px;
            font-size: 17px;
        }

        .top-search-type-menu li.active {
            background-color: rgba(180, 51, 61, 0.1);
            color: #b4333d;
            font-weight: 700;
        }

        .top-search-type-menu li.active .top-search-type-icon-badge {
            background-color: #b4333d;
            color: #fff;
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
            transition: background-color 0.15s ease;
        }

        .top-search-submit:hover {
            background-color: rgba(0, 0, 0, 0.08);
        }

        .top-search-form input[type="search"] {
            flex: 1 1 auto;
            min-width: 0;
            width: auto;
            padding-left: 12px;
            padding-right: 36px;
            border: 0;
            background-color: transparent;
            border-radius: 0 50px 50px 0;
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
                width: 340px;
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