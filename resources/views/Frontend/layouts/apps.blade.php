<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>News Smart</title>

        <link href="{{ asset ('Frontend/assets/css/bootstrap.min.css')}}" rel="stylesheet">
        <link href="{{ asset ('Frontend/assets/css/menu.css')}}" rel="stylesheet">
        <link href="{{ asset ('Frontend/assets/css/font-awesome.min.css')}}" rel="stylesheet">
        <link href="{{ asset ('Frontend/assets/css/font-awesome.css')}}" rel="stylesheet">
        <link href="{{ asset ('Frontend/assets/css/responsive.css')}}" rel="stylesheet">
        <link href="{{ asset ('Frontend/assets/css/owl.carousel.min.css')}}" rel="stylesheet">
        <link href="{{ asset ('Frontend/style.css')}}" rel="stylesheet">

    </head>
    <body>
 
        @yield('content');
	
		<script src="{{ asset ('Frontend/assets/js/jquery.min.js')}}"></script>
		<script src="{{ asset ('Frontend/assets/js/bootstrap.min.js')}}"></script>
		<script src="{{ asset ('Frontend/assets/js/main.js')}}"></script>
		<script src="{{ asset ('Frontend/assets/js/owl.carousel.min.js')}}"></script>
	</body>
</html> 