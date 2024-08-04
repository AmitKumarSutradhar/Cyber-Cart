<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no, target-densityDpi=device-dpi" />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800&display=swap"
          rel="stylesheet">
    <title>Sazao || e-Commerce HTML Template</title>
    <link rel="icon" type="image/png" href="images/favicon.png">
    <link rel="stylesheet" href="{{ asset('/') }}assets/frontend/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('/') }}assets/frontend/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('/') }}assets/frontend/css/select2.min.css">
    <link rel="stylesheet" href="{{ asset('/') }}assets/frontend/css/slick.css">
    <link rel="stylesheet" href="{{ asset('/') }}assets/frontend/css/jquery.nice-number.min.css">
    <link rel="stylesheet" href="{{ asset('/') }}assets/frontend/css/jquery.calendar.css">
    <link rel="stylesheet" href="{{ asset('/') }}assets/frontend/css/add_row_custon.css">
    <link rel="stylesheet" href="{{ asset('/') }}assets/frontend/css/mobile_menu.css">
    <link rel="stylesheet" href="{{ asset('/') }}assets/frontend/css/jquery.exzoom.css">
    <link rel="stylesheet" href="{{ asset('/') }}assets/frontend/css/multiple-image-video.css">
    <link rel="stylesheet" href="{{ asset('/') }}assets/frontend/css/ranger_style.css">
    <link rel="stylesheet" href="{{ asset('/') }}assets/frontend/css/jquery.classycountdown.css">
    <link rel="stylesheet" href="{{ asset('/') }}assets/frontend/css/venobox.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css">


    <link rel="stylesheet" href="{{ asset('/') }}assets/frontend/css/style.css">
    <link rel="stylesheet" href="{{ asset('/') }}assets/frontend/css/responsive.css">
    <!-- <link rel="stylesheet" href="{{ asset('/') }}assets/frontend/css/rtl.css"> -->
</head>

<body>
    @include('frontend.includes.header')

    @yield('content')

<!--============================
    FOOTER PART START
==============================-->
    @include('frontend.includes.footer')
<!--============================
    FOOTER PART END
==============================-->


<!--============================
    SCROLL BUTTON START
==============================-->
<div class="wsus__scroll_btn">
    <i class="fas fa-chevron-up"></i>
</div>
<!--============================
    SCROLL BUTTON  END
==============================-->


<!--jquery library js-->
<script src="{{ asset('/') }}assets/frontend/js/jquery-3.6.0.min.js"></script>
<!--bootstrap js-->
<script src="{{ asset('/') }}assets/frontend/js/bootstrap.bundle.min.js"></script>
<!--font-awesome js-->
<script src="{{ asset('/') }}assets/frontend/js/Font-Awesome.js"></script>
<!--select2 js-->
<script src="{{ asset('/') }}assets/frontend/js/select2.min.js"></script>
<!--slick slider js-->
<script src="{{ asset('/') }}assets/frontend/js/slick.min.js"></script>
<!--simplyCountdown js-->
<script src="{{ asset('/') }}assets/frontend/js/simplyCountdown.js"></script>
<!--product zoomer js-->
<script src="{{ asset('/') }}assets/frontend/js/jquery.exzoom.js"></script>
<!--nice-number js-->
<script src="{{ asset('/') }}assets/frontend/js/jquery.nice-number.min.js"></script>
<!--counter js-->
<script src="{{ asset('/') }}assets/frontend/js/jquery.waypoints.min.js"></script>
<script src="{{ asset('/') }}assets/frontend/js/jquery.countup.min.js"></script>
<!--add row js-->
<script src="{{ asset('/') }}assets/frontend/js/add_row_custon.js"></script>
<!--multiple-image-video js-->
<script src="{{ asset('/') }}assets/frontend/js/multiple-image-video.js"></script>
<!--sticky sidebar js-->
<script src="{{ asset('/') }}assets/frontend/js/sticky_sidebar.js"></script>
<!--price ranger js-->
<script src="{{ asset('/') }}assets/frontend/js/ranger_jquery-ui.min.js"></script>
<script src="{{ asset('/') }}assets/frontend/js/ranger_slider.js"></script>
<!--isotope js-->
<script src="{{ asset('/') }}assets/frontend/js/isotope.pkgd.min.js"></script>
<!--venobox js-->
<script src="{{ asset('/') }}assets/frontend/js/venobox.min.js"></script>
<!--classycountdown js-->
<script src="{{ asset('/') }}assets/frontend/js/jquery.classycountdown.js"></script>
<!--Toaster js-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

<!--main/custom js-->
<script src="{{ asset('/') }}assets/frontend/js/main.js"></script>

<script>
    @if($errors->any())
        @foreach($errors->all() as $error)
            toastr.error( "{{ $error }}" );
        @endforeach
    @endif
</script>
</body>

</html>
