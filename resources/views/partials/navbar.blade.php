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

               <!-- Authentication -->
               @auth
               @if (auth()->user()->level === "user")
               <div class="flex justify-center">
                  <div>
                     <div class="relative" data-te-dropdown-ref>
                        <button style="outline: none"
                           class="flex items-center whitespace-nowrap rounded px-6 pt-2.5 pb-2 text-xs font-medium uppercase leading-normal text-neutral-800 shadow-[0_4px_9px_-4px_#fbfbfb] transition duration-150 ease-in-out hover:shadow-[0_8px_9px_-4px_rgba(251,251,251,0.3),0_4px_18px_0_rgba(251,251,251,0.2)] focus:shadow-[0_8px_9px_-4px_rgba(251,251,251,0.3),0_4px_18px_0_rgba(251,251,251,0.2)] focus:outline-none focus:ring-0 active:shadow-[0_8px_9px_-4px_rgba(251,251,251,0.3),0_4px_18px_0_rgba(251,251,251,0.2)] motion-reduce:transition-none"
                           type="button" id="dropdownMenuButton1h" data-te-dropdown-toggle-ref aria-expanded="false"
                           data-te-ripple-init data-te-ripple-color="light">
                           <i class="fa fa-user"></i>
                           <span class="ml-2 w-2">
                              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                                 class="h-5 w-5">
                                 <path fill-rule="evenodd"
                                    d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z"
                                    clip-rule="evenodd" />
                              </svg>
                           </span>
                        </button>
                        <ul class="absolute z-[1000] float-left m-0 hidden min-w-max list-none overflow-hidden rounded-lg border-none bg-white bg-clip-padding text-left text-base shadow-lg [&[data-te-dropdown-show]]:block"
                           aria-labelledby="dropdownMenuButton1h" data-te-dropdown-menu-ref>
                           <h6
                              class="block w-full whitespace-nowrap bg-transparent py-2 px-4 text-sm font-semibold text-neutral-500 dark:text-neutral-800">
                              Profile
                           </h6>
                           <li>
                              <a class="block w-full whitespace-nowrap bg-transparent py-2 px-4 text-sm font-normal text-neutral-700 hover:bg-neutral-100 active:text-neutral-800 active:no-underline disabled:pointer-events-none disabled:bg-transparent disabled:text-neutral-400 dark:text-neutral-800 dark:hover:bg-neutral-600"
                                 href="#" data-te-dropdown-item-ref>Action</a>
                           </li>
                           <li>
                              <form
                                 class="block w-full whitespace-nowrap bg-transparent py-2 px-4 text-sm font-normal text-neutral-700 hover:bg-neutral-100 active:text-neutral-800 active:no-underline disabled:pointer-events-none disabled:bg-transparent disabled:text-neutral-400 dark:text-neutral-200 dark:hover:bg-neutral-600"
                                 method="POST" action="{{ route('logout') }}">
                                 @csrf
                                 <x-responsive-nav-link :href="route('logout')"
                                    onclick="event.preventDefault(); this.closest('form').submit();">
                                    <i class="fa fa-sign-in"></i> {{ __('Sign Out') }}
                                 </x-responsive-nav-link>
                              </form>
                           </li>
                        </ul>
                     </div>
                  </div>
               </div>
               @endif
               @if (auth()->user()->level === "admin")
               <a href="{{ url('/dashboard') }}" style="display: inline-block; width: 300%;"
                  class="nav__link font-medium leading-6 text-black-600 transition duration-150 ease-out hover:text-gray-600 link"><i
                     class="fa fa-columns"></i> Dashboard</a>
               @endif
               @endauth

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
   </nav>
</header>