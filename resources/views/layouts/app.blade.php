<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    {{-- google fonts --}}
    <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Roboto+Mono:ital,wght@0,100;0,300;0,400;0,500;1,600&display=swap" rel="stylesheet">

    {{-- boxicons  --}}
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    {{-- font awesome icons--}}


    {{-- css --}}
    <!-- Styles -->
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    {{-- <link rel="stylesheet" href="{{asset('css/style.css')}}"> --}}
</head>
<body>
    
    @component('components.header')
        
    @endcomponent
    <main class="l-main">
    @yield('content')
</main>



{{-- scroll reveal --}}
<script src="https://unpkg.com/scrollreveal"></script>

       {{-- js --}}
   <script src="{{asset('js/app.js')}}"></script>
   <script src="{{asset('js/style.js')}}"></script>
</body>
</html>