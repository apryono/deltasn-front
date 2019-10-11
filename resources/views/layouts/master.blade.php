<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="keywords" content="Bootstrap, Parallax, Template, Registration, Landing">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="author" content="Grayrids">
    <title>@yield('title')</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="public/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="public/assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="public/assets/css/line-icons.css">
    <link rel="stylesheet" href="public/assets/css/owl.carousel.css">
    <link rel="stylesheet" href="public/assets/css/owl.theme.css">
    <link rel="stylesheet" href="public/assets/css/nivo-lightbox.css">
    <link rel="stylesheet" href="public/assets/css/magnific-popup.css">
    <link rel="stylesheet" href="public/assets/css/slicknav.css">
    <link rel="stylesheet" href="public/assets/css/animate.css">
    <link rel="stylesheet" href="public/assets/css/main.css">    
    <link rel="stylesheet" href="public/assets/css/responsive.css">

  </head>
  <body>

    <!-- Header Section Start -->
    <header id="hero-area" data-stellar-background-ratio="0.5">  

      @include('layouts.nav')
      
      <div class="container">      
        <div class="row justify-content-md-center">
          <div class="col-md-10">
            <div class="contents text-center">
              <h1 class="wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="0.3s">Delta Solusi Nusantara</h1>
              <p class="lead  wow fadeIn" data-wow-duration="1000ms" data-wow-delay="400ms">Welcome To DSN Services Software Development </p>
            </div>
          </div>
        </div> 
      </div>           
    </header>
    <!-- Header Section End --> 
    @yield('content')

    @include('layouts.footer')