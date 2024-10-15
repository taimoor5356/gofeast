<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
    crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"
    integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ=="
    crossorigin="anonymous"></script>
<script src="{{asset('assets/js/plugins.js')}}"></script>
<script src="{{asset('assets/js/theme.js')}}"></script>

<script>
    function getGomtValue() {
        var gomt;
        const setGomtValue = async () => {
            const response = await fetch('https://telegrambot.gofeast.pk/api/gomtValue');

            const myJson = await response.json(); //extract JSON from the http response

            gomt = 'GOMT: $'.concat(myJson.GOMT);

            console.log(gomt);

        }

        setGomtValue();

        var gomt_display = document.getElementById('gomt');

        setTimeout(function() {
            gomt_display.textContent = gomt;
            // console.log(gomt_display.textContent);
        }, 3000);
    }

    function getGomtBurnValue() {
        var gomtBurn;
        const setGomtBurnValue = async () => {
            const response = await fetch('https://telegrambot.gofeast.pk/api/gomtBurnValue');
            const myJson = await response.json(); //extract JSON from the http response

            gomtBurn = 'Burned: '.concat(myJson.GOMT_burn);

            console.log(gomtBurn);

        }

        setGomtBurnValue();

        var gomt_display = document.getElementById('gomt-burn');

        setTimeout(function() {
            gomt_display.textContent = gomtBurn;
            // console.log(gomt_display.textContent);
        }, 3000);
    }

    document.addEventListener("DOMContentLoaded", function() {
        getGomtValue();
        getGomtBurnValue();
    });
</script>

<!--Start of Tawk.to Script-->
<script type="text/javascript">
    var Tawk_API = Tawk_API || {},
        Tawk_LoadStart = new Date();
    (function() {
        var s1 = document.createElement("script"),
            s0 = document.getElementsByTagName("script")[0];
        s1.async = true;
        s1.src = 'https://embed.tawk.to/635c784adaff0e1306d48fb0/1gggjbppr';
        s1.charset = 'UTF-8';
        s1.setAttribute('crossorigin', '*');
        s0.parentNode.insertBefore(s1, s0);
    })();
</script>

<script type="application/ld+json"> 

{ 

   "@context": "https://schema.org", 

   "@type": "LocalBusiness", 

   "name": "GoFeast.pk", 

   "url": "https://www.gofeast.pk", 

   "logo": "https://www.gofeast.pk/logo.png", 

   "image": "https://www.gofeast.pk/banner.jpg", 

   "description": "GoFeast.pk is your go-to platform for food delivery in Bahria Town Lahore, offering a wide range of cuisines including Italian, desi food, and more. Fast and affordable delivery from top restaurants.", 

   "address": { 

      "@type": "PostalAddress", 

      "streetAddress": "Bahria Town Lahore", 

      "addressLocality": "Lahore", 

      "addressRegion": "Punjab", 

      "postalCode": "53720", 

      "addressCountry": "PK" 

   }, 

   "contactPoint": { 

      "@type": "ContactPoint", 

      "telephone": "03377777761", 

      "contactType": "Customer Service" 

   }, 

   "openingHours": "Mo-Su 09:00-23:00", 

   "sameAs": [ 

      "https://www.facebook.com/gofeastpk", 

      "https://www.instagram.com/gofeastpk" 

   ], 

   "potentialAction": { 

      "@type": "SearchAction", 

      "target": "https://www.gofeast.pk/search?query={search_term_string}", 

      "query-input": "required name=search_term_string" 

   }, 

   "hasOfferCatalog": { 

      "@type": "OfferCatalog", 

      "name": "Food Delivery", 

      "itemListElement": [ 

         { 

            "@type": "Offer", 

            "itemOffered": { 

               "@type": "MenuItem", 

               "name": "Italian Food", 

               "description": "Delicious pizzas, pastas, and other Italian cuisine." 

            } 

         }, 

         { 

            "@type": "Offer", 

            "itemOffered": { 

               "@type": "MenuItem", 

               "name": "Desi Food", 

               "description": "Authentic Pakistani and Indian dishes including biryani, karahi, and more." 

            } 

         }, 

         { 

            "@type": "Offer", 

            "itemOffered": { 

               "@type": "MenuItem", 

               "name": "Fast Food", 

               "description": "Burgers, sandwiches, fries, and more from top fast-food chains." 

            } 

         } 

      ] 

   }, 

   "paymentAccepted": "Cash, Credit Card, Mobile Payment", 

   "areaServed": "Bahria Town Lahore", 

   "priceRange": "$" 

} 

</script> 
<!--End of Tawk.to Script-->

<!-- Hippo Chat Widget start-->
<!--<script src="https://chat.hippochat.io/js/widget.js"></script>-->
<!--<script>-->
<!--    $(document).ready(function () {-->
<!--        setTimeout(function () {-->
<!--            $("#myModal").modal('show');-->
<!--        }, 4000);-->

<!--    });-->
<!--</script>-->
<!--<script>-->
<!--    window.initHippo({-->
<!--        appSecretKey: "f2cd28fffe972cfca59a5cc36a51feac",-->
<!--        language: "en"-->
<!--    });-->
<!--</script>-->

<!-- Hippo Chat Widget end -->



<script>
    function getOS() {
        var userAgent = window.navigator.userAgent,
            platform = window.navigator?.userAgentData?.platform || window.navigator.platform,
            macosPlatforms = ['Macintosh', 'MacIntel', 'MacPPC', 'Mac68K', 'darwin', 'macOS'],
            windowsPlatforms = ['Win32', 'Win64', 'Windows', 'WinCE'],
            iosPlatforms = ['iPhone', 'iPad', 'iPod'],
            os = null;

        if (macosPlatforms.indexOf(platform) !== -1) {
            os = 'Mac OS';
        } else if (iosPlatforms.indexOf(platform) !== -1) {
            os = 'iOS';
        } else if (windowsPlatforms.indexOf(platform) !== -1) {
            os = 'Windows';
        } else if (/Android/.test(userAgent)) {
            os = 'Android';
        } else if (/Linux/.test(platform)) {
            os = 'Linux';
        }

        console.log(/Android/.test(userAgent));
        //   return os;
    }

    getOS();
    // alert(getOS());
</script>