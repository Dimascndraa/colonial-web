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
               <a href="{{ route('facility') }}"
                  class="nav__link font-medium leading-6 text-black-600 transition duration-150 ease-out hover:text-gray-600">Facility</a>
            </li>
            <li class="nav__item">
               <a href="{{ route('posts') }}"
                  class="nav__link font-medium leading-6 text-black-600 transition duration-150 ease-out hover:text-gray-600">News</a>
            </li>

            @if (Route::has('login'))
            {{-- <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block"> --}}

               <li class="nav__item">
                  <!-- Authentication -->
                  @auth
                  @if (auth()->user()->level === "user")
                  <form class="dropdown-item m-0 w-100" method="POST" action="{{ route('logout') }}">
                     @csrf
                     <x-responsive-nav-link :href="route('logout')"
                        onclick="event.preventDefault(); this.closest('form').submit();">
                        <i class="fa fa-sign-in"></i> {{ __('Sign Out') }}
                     </x-responsive-nav-link>
                  </form>
                  @endif

                  @if (auth()->user()->level === "admin")
                  <a href="{{ url('/dashboard') }}" style="display: inline-block; width: 300%;"
                     class="nav__link font-medium leading-6 text-black-600 transition duration-150 ease-out hover:text-gray-600 link"><i
                        class="fa fa-columns"></i> Dashboard</a>
                  @endif
                  @endauth
               </li>

               <li class="nav__item">
                  @guest
                  <a href="{{ route('login') }}" style="display: inline-block; width: 300%;"
                     class="nav__link font-medium leading-6 text-black-600 transition duration-150 ease-out hover:text-gray-600 link"><i
                        class="fa fa-sign-in"></i> Sign
                     In</a>
                  @endguest
               </li>
               {{--
            </div> --}}
            @endif

         </ul>
      </div>
      <div class="nav__toggle" id="nav-toggle">
         <i class='bx bx-grid-alt'></i>
      </div>
      {{-- <a href="pages/login"
         class="button button__header focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">Sign
         in</a> --}}
      {{-- --}}
   </nav>
</header>