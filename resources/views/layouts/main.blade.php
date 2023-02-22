<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      {{-- <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests"> --}}

      <!-- Icons -->
      <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
      
      
      <!-- CSS -->
      <link rel="stylesheet" href="/assets/css/membership.css">
      <link rel="stylesheet" href="/assets/css/styles.css">

      <!-- jQuery Owl Carousel -->
      <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">

      <!-- Tailwind CDN -->
      <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">

      <!-- Fonts -->
      <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
      <link rel="preconnect" href="https://fonts.googleapis.com">
      <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

      <!-- Favicon -->
      <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('storage/' . $about->logo_secondary) }}">
      <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('storage/' . $about->logo_secondary) }}">
      
      <!-- Title -->
      <title>{{ $title }}</title>
   </head>
   <body>

      @include('partials.navbar')
      
      <!-- Banner Section -->
      @if (!Request::is('/'))
        <section class="banner" style="height: 85vh;">
            <div class="content">
                <div class="title">{{ $title }}</div>
                <div class="top-subtitle subtitle">{{ $name }}</div>
            </div>
        </section> 
      @endif
      
      @yield('container')

      @include('partials.footer')

      <!-- Scroll Up Button -->
      <a href="#" class="scrollup" id="scroll-up">
        <i class='bx bx-up-arrow-alt scrollup__icon'></i>
      </a>

      <!-- Owl Carousel JS -->
      <script>
         $(".carousel").owlCarousel({
           margin: 20,
           loop: true,
           autoplay: true,
           autoplayTimeout: 2000,
           autoplayHoverPause: true,
           responsive: {
             0:{
               items:1,
               nav: false
             },
             600:{
               items:2,
               nav: false
             },
             1000:{
               items:3,
               nav: false
             }
           }
         });
      </script>

        <!-- Page Cursor -->
        <div class="cursor" id="cursor"></div>
        <div class="cursor2" id="cursor2"></div>
        <div class="cursor3" id="cursor3"></div>

        <!-- JS -->
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>
        <script src="/assets/js/membership.js"></script>
        <script src="/assets/js/main.js"></script>
   </body>
</html>