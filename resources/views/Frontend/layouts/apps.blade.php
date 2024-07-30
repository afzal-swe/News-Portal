
@php
    $seo = DB::table('seos')->first();
@endphp


<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <meta name="csrf-token" content="{{ csrf_token() }}">
        
        @isset($seo)
            
        
        <meta property="og:type" content="Website">
        <meta property="og:title" content="{{ $seo->meta_title }}">
        <meta property="og:description" content="{{ $seo->meta_description }}">


        <meta name="author" content="{{ $seo->meta_author }}">
        <meta name="keyword" content="{{ $seo->meta_keyword }}">
        <meta name="description" content="{{ $seo->meta_description }}">
        <meta name="google-verification" content="{{ $seo->google_verification }}">
        <meta name="google-analytics" content="{{ $seo->google_analytics }}">
        <meta name="alexa-analytics" content="{{ $seo->alexa_analytics }}">
        <title>{{ $seo->meta_title }}</title>
        @endisset

        <link href="{{ asset ('Frontend/assets/css/bootstrap.min.css')}}" rel="stylesheet">
        <link href="{{ asset ('Frontend/assets/css/menu.css')}}" rel="stylesheet">
        <link href="{{ asset ('Frontend/assets/css/font-awesome.min.css')}}" rel="stylesheet">
        <link href="{{ asset ('Frontend/assets/css/font-awesome.css')}}" rel="stylesheet">
        <link href="{{ asset ('Frontend/assets/css/responsive.css')}}" rel="stylesheet">
        <link href="{{ asset ('Frontend/assets/css/owl.carousel.min.css')}}" rel="stylesheet">
        <link href="{{ asset ('Frontend/style.css')}}" rel="stylesheet">

    </head>
    <body>
        @include('Frontend.partial.header');
 
        @yield('content');

        @include('Frontend.partial.footer');
	
		<script src="{{ asset ('Frontend/assets/js/jquery.min.js')}}"></script>
		<script src="{{ asset ('Frontend/assets/js/bootstrap.min.js')}}"></script>
		<script src="{{ asset ('Frontend/assets/js/main.js')}}"></script>
		<script src="{{ asset ('Frontend/assets/js/owl.carousel.min.js')}}"></script>
	</body>
</html> 