@extends('layouts.main')
<link rel="stylesheet" href="/assets/css/membership.css">

@section('container')
<!-- Membership Programmes -->
<h1 class="sec-head" style="text-align: center; margin-top: 100px;">Let's see our facilities!</h1>
<div class=" py-6 md:py-12" style="font-family: Inter;">
   <div class="container mx-auto">
      <div class=" lg:flex lg:-mx-4 mt-6 md:mt-12 justify-center gap-5" style="margin: auto;">
         @foreach ($room_types as $room_type)
         <div class=" lg:w-1/3 my-4 md:my-6">
            <div style="border: 1px solid rgba(200, 200, 200, 0.712); border-radius: 9px;"
               class=" border-t-4 border-solid border-white bg-white text-center max-w-sm mx-auto hover:border-indigo-600 transition-colors duration-300">
               <div class="p-6 md:py-8">
                  <h4 class="title-price font-medium leading-tight text-3xl mb-2">{{ $room_type->name }}</h4>
                  {{-- <p class="text-gray-600">13-20 stays</p> --}}
               </div>
               <div class=" bg-blue-100 p-6 transition-colors duration-300">
                  <div class=""><span class="text-4xl font-semibold">Rp. {{ $room_type->getFinalPriceAttribute()
                        }}</span> /night
                  </div>
               </div>
               <div class="p-6">
                  <ul class="leading-loose">
                     <div class="flex flex-wrap justify-center">
                        @foreach($facilities as $facility)
                        <div class="w-1/2">
                           <li style="text-align: left; transform: translateX(35px)"><i class="fa fa-check-circle"></i>
                              {{
                              $facility->name }}</li>
                        </div>
                        @endforeach
                     </div>
                  </ul>
                  <div class="mt-6 py-4">
                     <a href="/pages/book/{{ $room_type->id }}"
                        class="button button__header focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500"
                        style="width: 50%; margin: auto;">Booking</a>
                  </div>
               </div>
            </div>
         </div>
         @endforeach
      </div>
   </div>
</div>

<!-- Rooms Info Slider -->
<div class="section" style="font-family: Inter;">
   <div class="moving-image-bg"></div>
   <ul class="case-study-wrapper">
      <li class="case-study-name">
         <a href="#" class="hover-target">General</a>
      </li>
      <li class="case-study-name">
         <a href="#" class="hover-target">Silver</a>
      </li>
      <li class="case-study-name">
         <a href="#" class="hover-target">Gold</a>
      </li>
      <li class="case-study-name">
         <a href="#" class="hover-target">Platinum</a>
      </li>
   </ul>
   <ul class="case-study-images">
      <li>
         <img src="https://ivang-design.com/svg-load/hotel/room1.jpg" alt="" />
         <p>Suite General</p>
         <div class="info">
            <img src="https://ivang-design.com/svg-load/hotel/1.svg" alt="" />
            <img src="https://ivang-design.com/svg-load/hotel/2.svg" alt="" />
            <img src="https://ivang-design.com/svg-load/hotel/3.svg" alt="" />
            <img src="https://ivang-design.com/svg-load/hotel/5.svg" alt="" />
            <a href="#" class="hover-target">full info</a>
         </div>
      </li>
      <li>
         <img src="https://ivang-design.com/svg-load/hotel/room2.jpg" alt="" />
         <p>Suite Silver</p>
         <div class="info">
            <img src="https://ivang-design.com/svg-load/hotel/1.svg" alt="" />
            <img src="https://ivang-design.com/svg-load/hotel/2.svg" alt="" />
            <img src="https://ivang-design.com/svg-load/hotel/3.svg" alt="" />
            <img src="https://ivang-design.com/svg-load/hotel/4.svg" alt="" />
            <img src="https://ivang-design.com/svg-load/hotel/6.svg" alt="" />
            <a href="#" class="hover-target">full info</a>
         </div>
      </li>
      <li>
         <img src="https://ivang-design.com/svg-load/hotel/room3.jpg" alt="" />
         <p>Suite Gold</p>
         <div class="info">
            <img src="https://ivang-design.com/svg-load/hotel/2.svg" alt="" />
            <img src="https://ivang-design.com/svg-load/hotel/3.svg" alt="" />
            <img src="https://ivang-design.com/svg-load/hotel/4.svg" alt="" />
            <img src="https://ivang-design.com/svg-load/hotel/5.svg" alt="" />
            <a href="#" class="hover-target">full info</a>
         </div>
      </li>
      <li>
         <img src="https://ivang-design.com/svg-load/hotel/room4.jpg" alt="" />
         <p>Suite Platinum</p>
         <div class="info">
            <img src="https://ivang-design.com/svg-load/hotel/1.svg" alt="" />
            <img src="https://ivang-design.com/svg-load/hotel/2.svg" alt="" />
            <img src="https://ivang-design.com/svg-load/hotel/3.svg" alt="" />
            <img src="https://ivang-design.com/svg-load/hotel/4.svg" alt="" />
            <img src="https://ivang-design.com/svg-load/hotel/6.svg" alt="" />
            <a href="#" class="hover-target">full info</a>
         </div>
      </li>
   </ul>
</div>

<!-- Page Cursor -->
<div class="cursor" id="cursor"></div>
<div class="cursor2" id="cursor2"></div>
<div class="cursor3" id="cursor3"></div>


@endsection