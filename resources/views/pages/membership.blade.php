@extends('layouts.main')
<link rel="stylesheet" href="/assets/css/membership.css">

@section('container')
    <!-- Membership Programmes -->
      <h1 class="sec-head" style="text-align: center; margin-top: 100px;">Join our family today!</h1>
      <div class=" py-6 md:py-12" style="font-family: Inter;">
         <div class="container mx-auto" style="padding-right: 100px; padding-left: 100px;">
            <div class=" lg:flex lg:-mx-4 mt-6 md:mt-12" style="margin: auto;">
               <div class=" lg:w-1/3 my-4 md:my-6 ">
                  <div style="border: 1px solid rgba(200, 200, 200, 0.712); border-radius: 9px;" class=" border-t-4 border-solid border-white text-center max-w-sm mx-auto hover:border-indigo-600 transition-colors duration-300">
                     <div class="p-6 md:py-8">
                        <h4 class="title-price font-medium leading-tight text-3xl mb-2">Silver</h4>
                        <p class="text-gray-600">5-8 stays</p>
                     </div>
                     <div class=" bg-blue-100 p-6 transition-colors duration-300">
                        <div class=""><span class="text-4xl font-semibold">$59</span> /year</div>
                     </div>
                     <div class="p-6">
                        <ul class="leading-loose">
                           <li>3 nights voucher free</li>
                           <li>17% off on further bookings</li>
                           <li>No Food coupons</li>
                           <li>No unlimited bandwidth</li>
                           <li>Extra cost for activities</li>
                        </ul>
                        <div class="mt-6 py-4">
                           <a href="#" class="button button__header focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500" style="width: 50%; margin: auto;">Get Started</a>
                        </div>
                     </div>
                  </div>
               </div>
               <div class=" lg:w-1/3 my-4 md:my-6" >
                  <div style="border: 1px solid rgba(200, 200, 200, 0.712); border-radius: 9px;" class=" border-t-4 border-solid border-white bg-white text-center max-w-sm mx-auto hover:border-indigo-600 transition-colors duration-300">
                     <div class="p-6 md:py-8">
                        <h4 class="title-price font-medium leading-tight text-3xl mb-2">Gold</h4>
                        <p class="text-gray-600">9-12 stays </p>
                     </div>
                     <div class=" bg-blue-100 p-6 transition-colors duration-300">
                        <div><span class="text-4xl font-semibold">$109</span> /year</div>
                     </div>
                     <div class="p-6">
                        <ul class="leading-loose">
                           <li>6 nights voucher free</li>
                           <li>23% off on further bookings</li>
                           <li>Free Food coupons</li>
                           <li>Unlimited bandwidth</li>
                           <li>Free activities</li>
                        </ul>
                        <div class="mt-6 py-4">
                           <a href="#" class="button button__header focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500" style="width: 50%; margin: auto;">Get Started</a>
                        </div>
                     </div>
                  </div>
               </div>
               <div  class=" lg:w-1/3 my-4 md:my-6">
                  <div style="border: 1px solid rgba(200, 200, 200, 0.712); border-radius: 9px;" class=" border-t-4 border-solid border-white bg-white text-center max-w-sm mx-auto hover:border-indigo-600 transition-colors duration-300">
                     <div class="p-6 md:py-8">
                        <h4 class="title-price font-medium leading-tight text-3xl mb-2">Platinum</h4>
                        <p class="text-gray-600">13-20 stays</p>
                     </div>
                     <div class=" bg-blue-100 p-6 transition-colors duration-300">
                        <div class=""><span class="text-4xl font-semibold">$259</span> /year</div>
                     </div>
                     <div class="p-6">
                        <ul class="leading-loose">
                           <li>10 nights voucher free</li>
                           <li>30% off on further bookings</li>
                           <li>Free Food coupons</li>
                           <li>Unlimited bandwidth</li>
                           <li>Free activities</li>
                        </ul>
                        <div class="mt-6 py-4">
                           <a href="#" class="button button__header focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500" style="width: 50%; margin: auto;">Get Started</a>
                        </div>
                     </div>
                  </div>
               </div>
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