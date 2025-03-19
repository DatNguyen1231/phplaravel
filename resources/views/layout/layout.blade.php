<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>@yield('title')</title>
    <head>
        <link rel="stylesheet" href="{{ asset('css/style.css') }}">
        <link rel="stylesheet" href="{{ asset('css/layout.css') }}">

    </head>
   {{-- <!-- Tailwind CSS CDN -->
   <script src="https://cdn.tailwindcss.com"></script> --}}
</head>
<body>
    <!-- Navbar -->
    <div class="title">
        @include('layout.navbar')
    </div>
    <div>
        @include('layout.Logout')
    </div>
    <!-- Nội dung chính -->
    <div class="mt-16" > <!-- Dịch xuống 128px -->
        
        @yield('content')
    </div>

    <!-- Footer -->
    <div class="footer">
        @include('layout.footer')
    </div>
</body>
</html>
