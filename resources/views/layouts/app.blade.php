<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  
  <!-- CSRF Token -->
  <meta name="csrf_token" content="{{ csrf_token() }}">
  @auth
    <meta name="api-token" content="{{ auth()->user()->api_token }}">
  @endauth


  <title>@yield('title')</title>

  <!-- Custom fonts for this template -->   
  
  
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href='https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'> 
 
  
  <!-- Custom styles for this template -->
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">

  @yield('stylesheets')


</head>

<body>

 <!-- Navigation -->

  @include('includes.nav')

    <!-- Header -->

  @include('includes.header')

    <!-- Main content -->

<!-- 
    <div class="container">
       <div class="row">
         <div class="col-lg-8 col-md-10 mx-auto">
          @yield('post')
        </div>
      </div>
    </div> 
-->
  <article>
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
        @yield('content')
        </div>
      </div>
    </div>
  </article>
     <!-- Footer -->
    @include('includes.footer')


</body>

</html>
