<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 0; padding: 0; }
       
      
    </style>
   <!-- Tailwind CSS CDN -->
   <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
    <!-- Navbar -->
    @include('layout.navbar')

   
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
