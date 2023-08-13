<!DOCTYPE html>
<html lang="en">
<head>

    <!-- Basic Page Needs
    ================================================== -->
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>Lab Links</title>

    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="keywords" content="">

    <!-- Mobile Specific Metas
    ================================================== -->
    <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0">
    <meta name="apple-mobile-web-app-capable" content="yes">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,600,700" rel="stylesheet">
    <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css">

    <!-- Favicon
    ================================================== -->
    <link rel="icon" type="image/x-icon" href="{{ asset('../assets/favicon.ico')}}"/>

    <!-- Stylesheets
    ================================================== -->
    <!-- Bootstrap core CSS -->
    <link href="{{ asset('../assets/css/bootstrap.min.css')}}" rel="stylesheet">


    <!-- Custom styles -->
    <link href="{{ asset('../assets/css/style.css')}}" rel="stylesheet">
    <link href="{{ asset('../assets/css/responsive.css')}}" rel="stylesheet">



</head>
<body>
@include('front2.header')

@yield('home')
@yield('portfolio')
@yield('contact')
@yield('about')
@yield('single')
@yield('service')
@yield('image')
@yield('order')
@yield('illustration')
@yield('uiux')


@include('front2.footer')
<!-- Bootstrap core JavaScript
================================================== -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script src="{{ asset('../assets/js/bootstrap.min.js')}}"></script>
<script src="{{ asset('../assets/js/bootstrap-select.min.js')}}"></script>
<script src="{{ asset('../assets/js/jquery.slicknav.min.js')}}"></script>
<script src="{{ asset('../assets/js/jquery.countTo.min.js')}}"></script>
<script src="{{ asset('../assets/js/jquery.shuffle.min.js')}}"></script>
<script src="{{ asset('../assets/js/script.js')}}"></script>

</body>
</html>
