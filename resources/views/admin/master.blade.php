<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
    <title>General Dashboard &mdash; Stisla</title>

    <!-- General CSS Files -->
    <link rel="stylesheet"  href="{{ asset('/') }}assets/backend/admin/modules/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet"  href="{{ asset('/') }}assets/backend/admin/modules/fontawesome/css/all.min.css">

    <!-- CSS Libraries -->
    <link rel="stylesheet"  href="{{ asset('/') }}assets/backend/admin/modules/jqvmap/dist/jqvmap.min.css">
    <link rel="stylesheet"  href="{{ asset('/') }}assets/backend/admin/modules/weather-icon/css/weather-icons.min.css">
    <link rel="stylesheet"  href="{{ asset('/') }}assets/backend/admin/modules/weather-icon/css/weather-icons-wind.min.css">
    <link rel="stylesheet"  href="{{ asset('/') }}assets/backend/admin/modules/summernote/summernote-bs4.css">

    <!-- Template CSS -->
    <link rel="stylesheet"  href="{{ asset('/') }}assets/backend/admin/css/style.css">
    <link rel="stylesheet"  href="{{ asset('/') }}assets/backend/admin/css/components.css">
    <!-- Start GA -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-94034622-3"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'UA-94034622-3');
    </script>
    <!-- /END GA --></head>

<body>
<div id="app">
    <div class="main-wrapper main-wrapper-1">
        @include('admin.includes.navbar')
        @include('admin.includes.sidebar')

        <!-- Main Content -->
        <div class="main-content">
            @yield('body')
        </div>
        <footer class="main-footer">
            <div class="footer-left">
                Copyright &copy; 2018 <div class="bullet"></div> Design By <a href="https://nauval.in/">Muhamad Nauval Azhar</a>
            </div>
            <div class="footer-right">

            </div>
        </footer>
    </div>
</div>

<!-- General JS Scripts -->
<script  src="{{ asset('/') }}assets/backend/admin/modules/jquery.min.js"></script>
<script  src="{{ asset('/') }}assets/backend/admin/modules/popper.js"></script>
<script  src="{{ asset('/') }}assets/backend/admin/modules/tooltip.js"></script>
<script  src="{{ asset('/') }}assets/backend/admin/modules/bootstrap/js/bootstrap.min.js"></script>
<script  src="{{ asset('/') }}assets/backend/admin/modules/nicescroll/jquery.nicescroll.min.js"></script>
<script  src="{{ asset('/') }}assets/backend/admin/modules/moment.min.js"></script>
<script  src="{{ asset('/') }}assets/backend/admin/js/stisla.js"></script>

<!-- JS Libraies -->
<script  src="{{ asset('/') }}assets/backend/admin/modules/simple-weather/jquery.simpleWeather.min.js"></script>
<script  src="{{ asset('/') }}assets/backend/admin/modules/chart.min.js"></script>
<script  src="{{ asset('/') }}assets/backend/admin/modules/jqvmap/dist/jquery.vmap.min.js"></script>
<script  src="{{ asset('/') }}assets/backend/admin/modules/jqvmap/dist/maps/jquery.vmap.world.js"></script>
<script  src="{{ asset('/') }}assets/backend/admin/modules/summernote/summernote-bs4.js"></script>
<script  src="{{ asset('/') }}assets/backend/admin/modules/chocolat/dist/js/jquery.chocolat.min.js"></script>

<!-- Page Specific JS File -->
<script  src="{{ asset('/') }}assets/backend/admin/js/page/index-0.js"></script>

<!-- Template JS File -->
<script  src="{{ asset('/') }}assets/backend/admin/js/scripts.js"></script>
<script  src="{{ asset('/') }}assets/backend/admin/js/custom.js"></script>
</body>
</html>
