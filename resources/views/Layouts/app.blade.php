<!DOCTYPE html>
<html lang="en">
<head>
    <title>@yield('title')</title>
    <meta name="keywords" content="Portfolio" />
    <meta name="description" content="Portfolio" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <!-- FavIcon CSS -->
    <link rel="icon" href="{{asset("assets/img/favicon.png" )}}"type="image/gif" sizes="16x16">
    <!--Google Fonts CSS-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <!--Font Awesome Icon CSS-->
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <!--Bootstrap CSS-->
    <link rel="stylesheet" type="text/css" href="{{asset("assets/css/bootstrap.min.css")}}">
    <!-- Carousel Slider CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.css" />
    <!-- Carousel Slider CSS -->
    <link rel="stylesheet" type="text/css" href="{{asset("assets/css/owl.carousel.min.css")}}">
    <link rel="stylesheet" type="text/css" href="{{asset("assets/css/owl.theme.default.min.css")}}">
    <!-- Main Style CSS  -->
    <link rel="stylesheet" type="text/css" href="{{asset("assets/css/style.css")}}">
</head>
<body>

<!-- hearer-area start -->
@include('Layouts.header')
<!-- hearer-area end -->

@yield('content')

@include('Layouts.footer')

<!-- footer-area end -->
<!-- Modal -->

<!-- Jquery JS Link -->
<script src="{{asset("assets/js/jquery.min.js")}}"></script>
<!-- Bootstrap JS Link -->
<script src="{{asset("assets/js/popper.min.js")}}"></script>
<!-- carousel slider JS -->
<script src="{{asset("assets/js/bootstrap.min.js")}}"></script>
<script src="{{asset("assets/js/owl.carousel.min.js")}}"></script>
<script src="{{asset("assets/js/wow.min.js")}}"></script>
<script src="{{asset("assets/js/waypoints.min.js")}}"></script>
<script src="{{asset("assets/js/isotope.pkgd.min.js")}}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.js"></script>
<script src="{{asset("assets/js/counterup.min.js")}}"></script>
<!-- Custom JS Link -->
<script src="{{asset("assets/js/custom.js")}}"></script>
</body>
</html>
