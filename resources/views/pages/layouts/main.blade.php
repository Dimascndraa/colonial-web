<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">

      <!-- Icons -->
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />

      <!-- CSS -->
      <link rel="stylesheet" href="/assets/css/book.css">
      <link rel="stylesheet" href="/assets/css/styles.css">

      <!-- Fonts -->
      <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
      
      <!-- Tailwind CDN -->
      <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
      
      <!-- Favicon -->
      <link rel="icon" type="image/png" sizes="32x32" href="/assets/img/favicon.ico">
      <link rel="icon" type="image/png" sizes="16x16" href="/assets/img/favicon.ico">

      <!-- Title -->
      <title>Glory Hotels | Book Now</title>
   </head>
   <body>
      @include('partials.navbar')
      <!-- Banner Section -->
      <section class="banner" style="height: 85vh;">
         <div class="content">
            <div class="title">Book Now</div>
            <div class="top-subtitle subtitle">The Glory Hotels</div>
         </div>
      </section>

      @yield('container')

      @include('partials.footer')
      
      <!-- JS -->
      <script src="/assets/js/main.js"></script>
   </body>
</html>