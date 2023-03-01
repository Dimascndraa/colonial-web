@extends('layouts.main')

@section('container')
<style>
   .wrapper-rev .box {
      height: 20rem;
      border: 1px solid #c3c3c3a4;
      display: flex;
      flex-direction: column;
      justify-content: space-between;
   }
</style>

<!-- Banner Section -->
<section class="banner">
   <div class="content">
      <div class="title">{{ $title }}</div>
      <div class="top-subtitle subtitle px-3">{{ $about->motto }}</div>
   </div>
   <div class="search-box" style="z-index: 1000;">
      <div class="input-box">
         <p>Check-In Date</p>
         <input type="date" name="" id="" placeholder="01/01/2021">
      </div>
      <div class="input-box">
         <p>Check-Out Date</p>
         <input type="date" name="" id="" placeholder="01/01/2021">
      </div>
      <div class="input-box guest">
         <p>Guests</p>
         <input type="number" name="" id="" placeholder="100">
      </div>
      <div class="input-box">
         <p>&nbsp;</p>
         <span class="inline-flex rounded-md shadow-sm">
            <a href="pages/book" style="padding: 12px 15px 12px 15px; font-size: 17px; font-family: Inter;"
               class="inline-flex items-center justify-center px-4 py-2 text-base font-medium leading-6 text-white whitespace-no-wrap bg-blue-600 border rounded-md shadow-sm hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
               Book now
            </a>
         </span>
      </div>
   </div>
</section>

<!-- About Section -->
<section class="text-gray-600 body-font" id="about" style="font-family: 'Inter'; margin-top: 12%;">
   <div class="container mx-auto flex py-24 lg:flex-row flex-col items-center" style="margin: auto; width: 70%;">
      <div class="lg:w-1/2 pr-4 pl-4">
         <img class="object-cover object-center rounded" alt="hero" src="{{ asset('storage/' . $about->about_img) }}">
      </div>
      <div class="lg:w-1/2 pr-4 pl-4">
         <h1 class="sec-head">About Us
         </h1>
         <div class="mb-8 leading-relaxed" style="width: auto;">{!! $about->short_descript !!}</div>
         <div class="flex justify-center">
            <span class="inline-flex rounded-md shadow-sm">
               <a href="pages/team"
                  class="button button__header focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">Know
                  More</a>
            </span>
         </div>
      </div>
   </div>
</section>

<!-- Annoucment Section -->
@if ($announcement->status === "aktif")
<div class='vision'>
   <div class='row'>
      <div class='column'>
         <div class='vision-column'>
            <h1 class=" sec-head">{{ $announcement->title }}</h1>
            <p>{!! $announcement->body !!}</p>
         </div>
      </div>
   </div>
</div>
@endif

<!-- Hotels Section -->
<section class="hotels" id="hotels">
   <h1 class="sec-head" id="hotels-head">Gallery</h1>
</section>
<div class="wrapper">
   <div class="carousel owl-carousel">
      @foreach($galleries as $gallery)
      <div class="card card-gallery"
         style="background-image: url({{ asset('storage/' . $gallery->image) }}); background-size: cover; background-position: center;">
      </div>
      @endforeach

   </div>
</div>

<!-- Testimonials Section -->
<h1 class="sec-head" style="text-align: center; margin: 40px; margin-top: 100px;">Testimonials</h1>
<div class="wrapper-rev">
   <div class="carousel owl-carousel">
      @foreach($reviews as $review)
      <div class="box">
         <p>
            <i class='bx bxs-quote-left quote'></i>
            {{ $review->body }}
         </p>
         <div class="content">
            <div class="info">
               <div class="name">{{ $review->name }}</div>
               <div class="stars">
                  <i class='bx bxs-star'></i>
                  <i class='bx bxs-star'></i>
                  <i class='bx bxs-star'></i>
                  <i class='bx bxs-star'></i>
                  <i class='bx bxs-star-half'></i>
               </div>
            </div>
            <div class="image">
               <img
                  src="https://png.pngtree.com/png-vector/20190930/ourlarge/pngtree-hooded-computer-hacker-with-laptop-icon-png-image_1762179.jpg"
                  alt="">
            </div>
         </div>
      </div>
      @endforeach
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
      <form method="post" action="/dashboard/contact">
         @csrf
         <div class="contact">
            <div>
               <span class="uppercase text-sm text-gray-600 font-bold">Full Name</span>
               <input
                  class="w-full bg-gray-200 text-gray-900 mt-2 p-3 rounded-lg focus:outline-none focus:shadow-outline"
                  type="text" name="name" value="{{ old('name') }}">
               @error('name')
               <p class="text-danger">{{ $message }}</p>
               @enderror
            </div>
            <div class="mt-8">
               <span class="uppercase text-sm text-gray-600 font-bold">Email</span>
               <input
                  class="w-full bg-gray-200 text-gray-900 mt-2 p-3 rounded-lg focus:outline-none focus:shadow-outline"
                  type="text" name="email" value="{{ old('email') }}">
               @error('email')
               <p class="text-danger">{{ $message }}</p>
               @enderror
            </div>
            <div class="mt-8">
               <span class="uppercase text-sm text-gray-600 font-bold">Message</span>
               <textarea
                  class="w-full h-32 bg-gray-200 text-gray-900 mt-2 p-3 rounded-lg focus:outline-none focus:shadow-outline"
                  name="message">{{ old('message') }}</textarea>
               @error('message')
               <p class="text-danger">{{ $message }}</p>
               @enderror
            </div>
            <div class="mt-8">
               <button type="submit"
                  class="uppercase text-sm font-bold tracking-wide bg-indigo-500 text-gray-100 p-3 rounded-lg w-full focus:outline-none focus:shadow-outline">
                  Send Message
               </button>
            </div>
         </div>
      </form>
   </div>
</section>
@endsection