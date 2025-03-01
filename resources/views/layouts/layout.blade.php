<!DOCTYPE html>
<html lang="en">
<head>
<title>KeyHome24 - Find Your Property</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
<link href="{{asset('assets/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
<link rel="stylesheet" href="{{asset('assets/css/owl.carousel.min.css')}}" />
<link rel="stylesheet" href="{{asset('assets/css/owl.theme.default.min.css')}}" />
<link href="{{asset('assets/css/stellarnav.css')}}" rel="stylesheet">
<link href="{{asset('assets/css/custom.css')}}" rel="stylesheet">
<link href="{{asset('assets/css/responsive.css')}}" rel="stylesheet">
</head>
<body>
@include('layouts.header')
@yield('content')



@include('layouts.footer')
<!-- jQuery Area -->
<script src="{{asset('assets/js/jquery.min.js')}}"></script>
<script src="{{asset('assets/js/owl.carousel.js')}}"></script>
<script src="{{asset('assets/js/owl.carousel.js')}}"></script>
<script src="{{asset('assets/js/stellarnav.js')}}"></script>
<!-- <script src="js/video.popup.js"></script>  -->
<script src="{{asset('assets/js/custom.js')}}"></script>
@yield('scripts')
</body>
</html>
