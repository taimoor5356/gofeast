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