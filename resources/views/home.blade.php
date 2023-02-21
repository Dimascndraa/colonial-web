@extends('layouts.main')

@section('container')
    <!-- Banner Section -->
      <section class="banner">
         <div class="content">
            <div class="title">The Glory Hotels</div>
            <div class="top-subtitle subtitle">Best Memories Start Here</div>
         </div>
         <div class="search-box">
            {{-- <div class="input-box">
               <p>Location</p>
               <input type="text" name="" id="" placeholder="Delhi">
            </div> --}}
            <div class="input-box">
               <p>Check-In Date</p>
               <input type="date" name="" id="" placeholder="01/01/2021">
            </div>
            <div class="input-box">
               <p>Check-Out Date</p>
               <input type="date" name="" id="" placeholder="01/01/2021">
            </div>
            {{-- <div class="input-box">
               <p>Guests</p>
               <input type="number" name="" id="" placeholder="100">
            </div> --}}
            <div class="input-box">
               <br>
               <span class="inline-flex rounded-md shadow-sm">
               <a href="pages/book" style="padding: 12px 15px 12px 15px; font-size: 17px; font-family: Inter;" class="inline-flex items-center justify-center px-4 py-2 text-base font-medium leading-6 text-white whitespace-no-wrap bg-blue-600 border rounded-md shadow-sm hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
               Book now
               </a>
               </span>
            </div>
         </div>
      </section>

      <!-- About Section -->
      <section class="text-gray-600 body-font" id="about" style="font-family: 'Inter'; margin-top: 12%;">
         <div class="container mx-auto flex px-5 py-24 md:flex-row flex-col items-center" style="margin: auto; width: 70%;">
            <div class="lg:max-w-lg lg:w-full md:w-1/2 w-5/6 mb-10 md:mb-0">
               <img class="object-cover object-center rounded" alt="hero" src="https://images.unsplash.com/photo-1520250497591-112f2f40a3f4?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8Nnx8bHV4dXJ5JTIwcmVzb3J0fGVufDB8fDB8fA%3D%3D&w=1000&q=80">
            </div>
            <div class="lg:flex-grow md:w-1/2 lg:pl-24 md:pl-16 flex flex-col md:items-start md:text-left items-center text-center">
               <h1 class="sec-head">About Us
               </h1>
               <p class="mb-8 leading-relaxed" style="width: auto;">Over the last 25 years, the Glory Hotels organisation has been known for dependably providing the best Indian hospitality experience. It combines modern style and comfort with the warmth of Old World hospitality. With more than 50 hotels and resorts across the world, it is one of the world's largest hotel chains. We believe in the values of Indian hospitality, and our crew is our most valuable asset, providing passionate and memorable hospitality to everyone we meet.</p>
               <div class="flex justify-center">
                  <span class="inline-flex rounded-md shadow-sm">
                  <a href="pages/team" class="button button__header focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">Know More</a>
                  </span>
               </div>
            </div>
         </div>
      </section>

      <!-- Hotels Section -->
      <section class="hotels" id="hotels">
         <h1 class="sec-head" id="hotels-head">Our Hotels</h1>
      </section>
      <div class="wrapper">
         <div class="carousel owl-carousel">
            <div class="card card-1">
            </div>
            <div class="card card-2">
            </div>
            <div class="card card-3">
            </div>
            <div class="card card-4">
            </div>
            <div class="card card-5">
            </div>
            <div class="card card-6">
            </div>
            <div class="card card-7">
            </div>
            <div class="card card-8">
            </div>
         </div>
      </div>

      <!-- Vision Section -->
      <div class='vision'>
         <div class='row'>
            <div class='column'>
               <div class='vision-column'>
                  <h1 class="sec-head">Our Vision</h1>
                  <p>The Glory Hotels shall be the world's largest and best hotel and resort chain, with upscale, mid-scale, and budget properties.
                     We will be dedicated to ensuring the well-being and self-worth of our coworkers, who are vital to our success. Making a difference in our community and in India as a whole. Our fundamental reason for being is to delight our guests, whose comfort, safety, security, and well-being are our primary concerns.
                  </p>
               </div>
            </div>
         </div>
      </div>

      <!-- Testimonials Section -->
      <h1 class="sec-head" style="text-align: center; margin: 40px; margin-top: 100px;">Testimonials</h1>
      <div class="wrapper-rev">
         <div class="box">
            <i class='bx bxs-quote-left quote' ></i>
            <p>Beyond 5 stars! Stayed last week at this wonderful hotel. Everything exceeds ones wildest dream of a hotel. On top they have the most wonderful staff, extremely kind and helpful with every wish.</p>
            <div class="content">
               <div class="info">
                  <div class="name">Oshane Smith</div>
                  <div class="stars">
                     <i class='bx bxs-star'></i>
                     <i class='bx bxs-star'></i>
                     <i class='bx bxs-star'></i>
                     <i class='bx bxs-star'></i>
                     <i class='bx bxs-star'></i>
                  </div>
               </div>
               <div class="image">
                  <img src="https://png.pngtree.com/png-vector/20190930/ourlarge/pngtree-hooded-computer-hacker-with-laptop-icon-png-image_1762179.jpg" alt="">
               </div>
            </div>
         </div>
         <div class="box">
            <i class='bx bxs-quote-left quote' ></i>
            <p>This is indeed a place you do not want to leave, and when you do it is with one hope to come back. Everything was great, staff was very helpful and we were extremely happy with the meeting!</p>
            <div class="content">
               <div class="info">
                  <div class="name">Rajesh Singh</div>
                  <div class="stars">
                     <i class='bx bxs-star'></i>
                     <i class='bx bxs-star'></i>
                     <i class='bx bxs-star'></i>
                     <i class='bx bxs-star'></i>
                     <i class='bx bx-star'></i>
                  </div>
               </div>
               <div class="image">
                  <img src="https://png.pngtree.com/png-vector/20190930/ourlarge/pngtree-hooded-computer-hacker-with-laptop-icon-png-image_1762179.jpg" alt="">
               </div>
            </div>
         </div>
         <div class="box">
            <i class='bx bxs-quote-left quote' ></i>
            <p>The service here has just been fantastic; whatever we needed was brought to us right away. The food was so delicious; the entire experience was really great. A must stay hotel for everyone.</p>
            <div class="content">
               <div class="info">
                  <div class="name">Khushi Mittal</div>
                  <div class="stars">
                     <i class='bx bxs-star'></i>
                     <i class='bx bxs-star'></i>
                     <i class='bx bxs-star'></i>
                     <i class='bx bxs-star'></i>
                     <i class='bx bxs-star-half'></i>
                  </div>
               </div>
               <div class="image">
                  <img src="https://png.pngtree.com/png-vector/20190930/ourlarge/pngtree-hooded-computer-hacker-with-laptop-icon-png-image_1762179.jpg" alt="">
               </div>
            </div>
         </div>
      </div>
      
      <!-- Contact Section -->
      <section class=" text-gray-100 px-8 py-12" style="font-family: Inter;">
         <div class="text-center w-full">
         </div>
         <div
            class="max-w-screen-xl mt-24 px-8 grid gap-8 grid-cols-1 md:grid-cols-2 md:px-12 lg:px-16 xl:px-32 py-16 mx-auto bg-gray-100 text-gray-900 rounded-lg">
            <div class="flex flex-col justify-between">
               <div>
                  <h2 class="sec-head">Contact Us</h2>
                  <img src="assets/img/contact.svg" style="margin-top: 50px; padding-right: 50px;" alt="">
               </div>
               
            </div>
            <div class="">
               <div>
                  <span class="uppercase text-sm text-gray-600 font-bold">Full Name</span>
                  <input class="w-full bg-gray-200 text-gray-900 mt-2 p-3 rounded-lg focus:outline-none focus:shadow-outline"
                     type="text" placeholder="">
               </div>
               <div class="mt-8">
                  <span class="uppercase text-sm text-gray-600 font-bold">Email</span>
                  <input class="w-full bg-gray-200 text-gray-900 mt-2 p-3 rounded-lg focus:outline-none focus:shadow-outline"
                     type="text">
               </div>
               <div class="mt-8">
                  <span class="uppercase text-sm text-gray-600 font-bold">Message</span>
                  <textarea
                     class="w-full h-32 bg-gray-200 text-gray-900 mt-2 p-3 rounded-lg focus:outline-none focus:shadow-outline"></textarea>
               </div>
               <div class="mt-8">
                  <button
                     class="uppercase text-sm font-bold tracking-wide bg-indigo-500 text-gray-100 p-3 rounded-lg w-full focus:outline-none focus:shadow-outline">
                  Send Message
                  </button>
               </div>
            </div>
         </div>
      </section>
@endsection