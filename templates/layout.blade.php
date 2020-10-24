<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="/assets/libs/@fancyapps/fancybox/dist/jquery.fancybox.min.css">
    <link rel="stylesheet" href="/assets/libs/aos/dist/aos.css">
    <link rel="stylesheet" href="/assets/libs/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="/assets/libs/flickity/dist/flickity.min.css">
    <link rel="stylesheet" href="/assets/libs/flickity-fade/flickity-fade.css">
    <link rel="stylesheet" href="/assets/libs/highlightjs/styles/vs2015.css">
    <link rel="stylesheet" href="/assets/libs/jarallax/dist/jarallax.css">
    <link rel="stylesheet" href="/assets/fonts/feather/feather.css">
    <link rel="stylesheet" href="/assets/css/theme.min.css">
    <link rel="stylesheet" href="/assets/css/custom.css">

    <title>
        @hasSection('title')
        @yield('title') - Saaze
        @else
        Saaze - An all-inclusive, flat-file CMS for simple websites and blogs
        @endif
    </title>
    <meta name="description" content="Saaze is an all-inclusive, flat-file CMS for simple websites and blogs.">
    <script src="https://cdn.usefathom.com/script.js" data-site="QBKBZKHI" defer></script>
</head>

<body class="@yield('body_class')">

    <div class="content">
        @yield('content')
    </div>

    <!-- FOOTER -->
    <footer class="footer py-8 py-md-11 bg-dark">
        <div class="container-lg">
            <div class="row">
                <div class="col text-center">

                    <!-- Brand -->
                    <h2 class="font-family-serif text-white mb-1">
                        Saaze
                    </h2>

                    <!-- Text -->
                    <p class="text-white-60">
                        Created by <a href="https://gilbitron.me" target="_blank">Gilbert Pellegrom</a> from <a
                            href="https://dev7studios.co" target="_blank">Dev7studios</a>
                    </p>

                </div>
            </div>
        </div>
    </footer>


    <!-- JAVASCRIPT -->
    <!-- Polyfills -->
    <script
        src="https://polyfill.io/v3/polyfill.min.js?features=Array.prototype.find,Array.prototype.includes,Array.from,Object.entries,Promise,Object.assign">
    </script>

    <!-- Libs JS -->
    <script src="/assets/libs/jquery/dist/jquery.min.js"></script>
    <script src="/assets/libs/@fancyapps/fancybox/dist/jquery.fancybox.min.js"></script>
    <script src="/assets/libs/@popperjs/core/dist/umd/popper.min.js"></script>
    <script src="/assets/libs/aos/dist/aos.js"></script>
    <script src="/assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="/assets/libs/countup.js/dist/countUp.min.js"></script>
    <script src="/assets/libs/flickity/dist/flickity.pkgd.min.js"></script>
    <script src="/assets/libs/flickity-fade/flickity-fade.js"></script>
    <script src="/assets/libs/highlightjs/highlight.pack.min.js"></script>
    <script src="/assets/libs/imagesloaded/imagesloaded.pkgd.min.js"></script>
    <script src="/assets/libs/isotope-layout/dist/isotope.pkgd.min.js"></script>
    <script src="/assets/libs/jarallax/dist/jarallax.min.js"></script>
    <script src="/assets/libs/jarallax/dist/jarallax-video.min.js"></script>
    <script src="/assets/libs/jarallax/dist/jarallax-element.min.js"></script>
    <script src="/assets/libs/smooth-scroll/dist/smooth-scroll.min.js"></script>
    <script src="/assets/libs/typed.js/lib/typed.min.js"></script>

    <!-- Map -->
    <script src="https://api.mapbox.com/mapbox-gl-js/v0.53.0/mapbox-gl.js"></script>

    <!-- Theme JS -->
    <script src="/assets/js/theme.min.js"></script>


</body>

</html>
