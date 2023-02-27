<!-- Navigation Bar -->
<header class="header" id="header" style="font-family: 'Inter'; background: rgb(255, 255, 255);">
   <nav class="nav container">
      <b><a href="{{ route('beranda') }}" class="nav__logo"
            style="font-family: 'Product Sans Bold'; letter-spacing: -.5px; font-size: 1.5rem;"> {{ $about->name }}
         </a></b>
      <div class="nav__menu" id="nav-menu">
         <ul class="nav__list">
            <li class="nav__item">
               <a href="{{ route('beranda') }}"
                  class="nav__link font-medium leading-6 text-black-600 transition duration-150 ease-out hover:text-gray-600">Home</a>
            </li>
            <li class="nav__item">
               <a href="{{ url('/#about') }}"
                  class="nav__link font-medium leading-6 text-black-600 transition duration-150 ease-out hover:text-gray-600">About</a>
            </li>
            <li class="nav__item">
               <a href="{{ route('map') }}"
                  class="nav__link font-medium leading-6 text-black-600 transition duration-150 ease-out hover:text-gray-600">Hotels</a>
            </li>
            <li class="nav__item">
               <a href="{{ route('covid') }}"
                  class="nav__link font-medium leading-6 text-black-600 transition duration-150 ease-out hover:text-gray-600">COVID</a>
            </li>
            <li class="nav__item">
               <a href="{{ route('donate') }}"
                  class="nav__link font-medium leading-6 text-black-600 transition duration-150 ease-out hover:text-gray-600">Donate</a>
            </li>
            <li class="nav__item">
               <a href="{{ route('facility') }}"
                  class="nav__link font-medium leading-6 text-black-600 transition duration-150 ease-out hover:text-gray-600">Facility</a>
            </li>
            <li class="nav__item">
               <a href="{{ route('dinning') }}"
                  class="nav__link font-medium leading-6 text-black-600 transition duration-150 ease-out hover:text-gray-600">Dining</a>
            </li>
            <li class="nav__item">
               <a href="{{ route('news') }}"
                  class="nav__link font-medium leading-6 text-black-600 transition duration-150 ease-out hover:text-gray-600">News</a>
            </li>
         </ul>
      </div>
      <div class="nav__toggle" id="nav-toggle">
         <i class='bx bx-grid-alt'></i>
      </div>
      {{-- <a href="pages/login"
         class="button button__header focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">Sign
         in</a> --}}
      {{-- --}}
      @if (Route::has('login'))
      {{-- <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block"> --}}

         <!-- Authentication -->
         @auth
         <form class="dropdown-item m-0 w-100" method="POST" action="{{ route('logout') }}">
            @csrf
            <x-responsive-nav-link :href="route('logout')"
               onclick="event.preventDefault(); this.closest('form').submit();">
               {{ __('Log Out') }}
            </x-responsive-nav-link>
         </form>

         @if (auth()->user()->level === "admin")
         <a href="{{ url('/dashboard') }}"
            class="button button__header focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">Dashboard</a>
         @endif
         @endauth

         @guest
         <a href="{{ route('login') }}"
            class="button button__header focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">Sign
            In</a>
         @endguest
         {{--
      </div> --}}
      @endif
   </nav>
</header>