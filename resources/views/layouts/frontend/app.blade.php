<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="copyright" content="MACode ID, https://macodeid.com/">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="ico/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">
    <link rel="icon" type="image/png" sizes="16x16" href="ico/favicon-16x16.png">
    <link rel="manifest" href="ico/manifest.json">

    <title class="card-title">Website SahabatBK</title>
    <link rel="stylesheet" href="../assets/beka/css/maicons.css">
    <link rel="stylesheet" href="../assets/beka/css/bootstrap.css">
    <link rel="stylesheet" href="../assets/beka/vendor/owl-carousel/css/owl.carousel.css">
    <link rel="stylesheet" href="../assets/beka/vendor/animate/animate.css">
    <link rel="stylesheet" href="../assets/beka/css/theme.css">

    <!-- Magnific Popup core CSS file -->
    <link rel="stylesheet" href="../assets/magnific-popup/magnific.popup.css">

    <link rel="stylesheet" type="text/css" media="all" href="assets/beka/gallery/style2.css" />

    <style>
        .bk {
            color: black;
        }

        .uy {
            color: chartreuse;
        }

        .yea text {
            color: aquamarine;
        }

        .re {
            color: black;
        }

        .yu te {
            font-family: cursive;
        }

        .card-title {
            font-family: cursive;
        }
    </style>
</head>
<body>

    <!-- Back to top button -->
    <div class="back-to-top"></div>

    @include('layouts.frontend.header')

    @yield('content')

    @include('layouts.frontend.footer')

    <script src="../assets/beka/js/jquery-3.5.1.min.js"></script>
    <script src="../assets/beka/js/bootstrap.bundle.min.js"></script>
    <script src="../assets/beka/vendor/owl-carousel/js/owl.carousel.min.js"></script>
    <script src="../assets/beka/vendor/wow/wow.min.js"></script>
    <script src="../assets/beka/js/theme.js"></script>

    <script src="../assets/magnific-popup/jquery.magnific-popup.min.js"></script>

    <script>
        $(document).ready(function() {

            $('.image.popup').magnificPopup({
                type: 'image',
                closeOnContentClick: true,
                mainClass: 'mfp-img-mobile',
                image: {
                    verticalFit: true
                }

            });
        });
    </script>

</body>
</html>
