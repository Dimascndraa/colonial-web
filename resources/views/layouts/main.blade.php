{{-- @dd(!Request::is('pages/post*')) --}}
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  {{--
  <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests"> --}}

  <!-- Icons -->
  <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
  {{--
  <link rel="shortcut icon" href="{{ asset('/storage/' . $about->icon ) }}" type="image/x-icon"> --}}


  <!-- CSS -->
  <link rel="stylesheet" href="/assets/css/membership.css">
  <link rel="stylesheet" href="/assets/css/styles.css">
  <link rel="stylesheet" href="/assets/css/responsive.css">

  <style>
    .banner {
      /* background-image: url("{{ asset('storage/' . $about->header_img); }}"), rgba(0,0,0,0.8); */
      background-image: linear-gradient(to right, rgba(0, 0, 0, .5), rgba(0, 0, 0, .5)),
      url("{{ asset('storage/' . $about->header_img); }}");
      background-attachment: fixed;
      background-size: cover;
      background-position: center;
    }
  </style>

  <!-- jQuery Owl Carousel -->
  <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">

  <!-- Tailwind CDN -->
  <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900&display=swap" rel="stylesheet" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tw-elements/dist/css/index.min.css" />
  <script src="https://cdn.tailwindcss.com/3.2.4"></script>
  <script>
    tailwind.config = {
      darkMode: "class",
      theme: {
        fontFamily: {
          sans: ["Roboto", "sans-serif"],
          body: ["Roboto", "sans-serif"],
          mono: ["ui-monospace", "monospace"],
        },
      },
      corePlugins: {
        preflight: false,
      },
    };
  </script>

  <!-- Fonts -->
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&display=swap"
    rel="stylesheet">

  <!-- default styles -->
  {{--
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css"> --}}
  <link href="https://cdn.jsdelivr.net/gh/kartik-v/bootstrap-star-rating@4.1.2/css/star-rating.min.css" media="all"
    rel="stylesheet" type="text/css" />

  <!-- with v4.1.0 Krajee SVG theme is used as default (and must be loaded as below) - include any of the other theme CSS files as mentioned below (and change the theme property of the plugin) -->
  <link href="https://cdn.jsdelivr.net/gh/kartik-v/bootstrap-star-rating@4.1.2/themes/krajee-svg/theme.css" media="all"
    rel="stylesheet" type="text/css" />

  <!-- important mandatory libraries -->
  {{-- <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script> --}}
  <script src="https://cdn.jsdelivr.net/gh/kartik-v/bootstrap-star-rating@4.1.2/js/star-rating.min.js"
    type="text/javascript"></script>

  <!-- with v4.1.0 Krajee SVG theme is used as default (and must be loaded as below) - include any of the other theme JS files as mentioned below (and change the theme property of the plugin) -->
  <script src="https://cdn.jsdelivr.net/gh/kartik-v/bootstrap-star-rating@4.1.2/themes/krajee-svg/theme.js"></script>

  <!-- optionally if you need translation for your language then include locale file as mentioned below (replace LANG.js with your own locale file) -->
  <script src="https://cdn.jsdelivr.net/gh/kartik-v/bootstrap-star-rating@4.1.2/js/locales/LANG.js"></script>


  {{-- SweetAlert2 --}}
  <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  {{-- Datepicker --}}
  <link rel="stylesheet" href="//code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css">
  <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
  <script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>
  <script>
    $( function() {
      $( "#datepicker" ).datepicker();
    } );
  </script>

  <!-- Favicon -->
  <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('storage/' . $about->logo_secondary) }}">
  <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('storage/' . $about->logo_secondary) }}">

  <!-- Title -->
  <title>{{ $title }}</title>
</head>

<body>

  @include('partials.navbar')

  <!-- Banner Section -->
  @if (!Request::is('/') && !Request::is('pages/posts/*'))
  <section class="banner" style="height: 85vh;">
    <div class="content">
      <div class="title">{{ $title }}</div>
      <div class="top-subtitle subtitle">{{ $name }}</div>
    </div>
  </section>
  @endif

  @if (Request::is('pages/posts/*'))
  <section class="banner" style="height: 85vh;">
    <div class="content">
      <div class="title">{{ $post->title }}</div>
      <div class="top-subtitle subtitle">{{ $about->name }}</div>
    </div>
    <div class="content mt-24">
      <a href="/pages/posts" class="top-subtitle subtitle"><i class="fa fa-arrow-circle-left"></i> Back To Post</a>
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

  @if (session()->has('success'))
  <script>
    const Toast = Swal.mixin({
      toast: true,
      position: 'top-end',
      showConfirmButton: false,
      timer: 3000,
      timerProgressBar: true,
      didOpen: (toast) => {
          toast.addEventListener('mouseenter', Swal.stopTimer)
          toast.addEventListener('mouseleave', Swal.resumeTimer)
      }
  })

  Toast.fire({
      icon: 'success',
      title: '{{ session('success') }}'
  })
  </script>
  <script>
    function konfirmasi() {
        Swal.fire({
            title: 'Are you sure?',
            text: "You won't be able to revert this!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, delete it!'
        }).then((result) => {
            if (result.isConfirmed) {
                Swal.fire(
                    'Deleted!',
                    'Your file has been deleted.',
                    'success'
                )
            }
        })
    }
  </script>
  @endif

  <script src="https://cdn.jsdelivr.net/npm/tw-elements/dist/js/index.min.js"></script>

  <!-- JS -->
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>
  <script src="/assets/js/membership.js"></script>
  <script src="/assets/js/main.js"></script>
</body>

</html>