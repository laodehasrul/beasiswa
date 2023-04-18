<!DOCTYPE html>
<html lang="en">

<head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta http-equiv="X-UA-Compatible" content="ie=edge">
      <!-- Fungsi dari yield('title') adalah menampilkan tag title yang dynamic  -->
      <title>Beasiswa - @yield('title')</title>

      <!--Mengambil fungsi jquery agar pemprosesan jquery berjalan -->
      <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
      <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>

      <!-- Memanggil fungsi alpine js menggunakan CDN agar pemprosesan javascript berjalan -->
      <script src="//unpkg.com/alpinejs" defer></script>

      <!-- Memanggil Asset menggunakan vite -->
      @vite('resources/css/app.css')

      <!-- Memanggil fungsi echart js menggunakan CDN agar pemprosesan javascript berjalan -->
      <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>

<body>
      <!-- Memanggil view header yang berada pada folder includes -->
      @include('includes.header')

      <!-- Fungsi dari yield('content') adalah menampilkan tag content yang dynamic  -->
      <main>
            @yield('content')
      </main>
      
</body>

<!-- Mendeklarasikan stack dengan parameter script, ini bisa sangat berguna untuk menentukan perpustakaan JavaScript apa pun yang diperlukan -->
@stack('script')

</html>