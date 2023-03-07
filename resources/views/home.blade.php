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
<div id="carouselExampleCaptions" class="relative" data-te-carousel-init data-te-carousel-slide>
   <div class="absolute right-0 bottom-0 left-0 z-[2] mx-[15%] mb-4 flex list-none justify-center p-0"
      data-te-carousel-indicators>
      <button type="button" data-te-target="#carouselExampleCaptions" data-te-slide-to="0" data-te-carousel-active
         class="mx-[3px] box-content h-[3px] w-[30px] flex-initial cursor-pointer border-0 border-y-[10px] border-solid border-transparent bg-white bg-clip-padding p-0 -indent-[999px] opacity-50 transition-opacity duration-[600ms] ease-[cubic-bezier(0.25,0.1,0.25,1.0)] motion-reduce:transition-none"
         aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-te-target="#carouselExampleCaptions" data-te-slide-to="1"
         class="mx-[3px] box-content h-[3px] w-[30px] flex-initial cursor-pointer border-0 border-y-[10px] border-solid border-transparent bg-white bg-clip-padding p-0 -indent-[999px] opacity-50 transition-opacity duration-[600ms] ease-[cubic-bezier(0.25,0.1,0.25,1.0)] motion-reduce:transition-none"
         aria-label="Slide 2"></button>
      <button type="button" data-te-target="#carouselExampleCaptions" data-te-slide-to="2"
         class="mx-[3px] box-content h-[3px] w-[30px] flex-initial cursor-pointer border-0 border-y-[10px] border-solid border-transparent bg-white bg-clip-padding p-0 -indent-[999px] opacity-50 transition-opacity duration-[600ms] ease-[cubic-bezier(0.25,0.1,0.25,1.0)] motion-reduce:transition-none"
         aria-label="Slide 3"></button>
   </div>
   <div class="relative w-full overflow-hidden after:clear-both after:block after:content-['']">
      <div
         class="relative float-left -mr-[100%] w-full transition-transform duration-[600ms] ease-in-out motion-reduce:transition-none"
         data-te-carousel-active data-te-carousel-item style="backface-visibility: hidden">
         <img src="https://tecdn.b-cdn.net/img/Photos/Slides/img%20(15).jpg" class="block w-full" alt="..." />
         <div class="absolute inset-x-[15%] bottom-5 hidden py-5 text-center text-white md:block">
            <h5 class="text-xl">First slide label</h5>
            <p>
               Some representative placeholder content for the first slide.
            </p>
         </div>
      </div>
      <div
         class="relative float-left -mr-[100%] hidden w-full transition-transform duration-[600ms] ease-in-out motion-reduce:transition-none"
         data-te-carousel-item style="backface-visibility: hidden">
         <img src="https://tecdn.b-cdn.net/img/Photos/Slides/img%20(22).jpg" class="block w-full" alt="..." />
         <div class="absolute inset-x-[15%] bottom-5 hidden py-5 text-center text-white md:block">
            <h5 class="text-xl">Second slide label</h5>
            <p>
               Some representative placeholder content for the second slide.
            </p>
         </div>
      </div>
      <div
         class="relative float-left -mr-[100%] hidden w-full transition-transform duration-[600ms] ease-in-out motion-reduce:transition-none"
         data-te-carousel-item style="backface-visibility: hidden">
         <img src="https://tecdn.b-cdn.net/img/Photos/Slides/img%20(23).jpg" class="block w-full" alt="..." />
         <div class="absolute inset-x-[15%] bottom-5 hidden py-5 text-center text-white md:block">
            <h5 class="text-xl">Third slide label</h5>
            <p>
               Some representative placeholder content for the third slide.
            </p>
         </div>
      </div>
   </div>
   <button
      class="absolute top-0 bottom-0 left-0 z-[1] flex w-[15%] items-center justify-center border-0 bg-none p-0 text-center text-white opacity-50 transition-opacity duration-150 ease-[cubic-bezier(0.25,0.1,0.25,1.0)] hover:text-white hover:no-underline hover:opacity-90 hover:outline-none focus:text-white focus:no-underline focus:opacity-90 focus:outline-none motion-reduce:transition-none"
      type="button" data-te-target="#carouselExampleCaptions" data-te-slide="prev">
      <span class="inline-block h-8 w-8">
         <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
            stroke="currentColor" class="h-6 w-6">
            <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 19.5L8.25 12l7.5-7.5" />
         </svg>
      </span>
      <span
         class="!absolute !-m-px !h-px !w-px !overflow-hidden !whitespace-nowrap !border-0 !p-0 ![clip:rect(0,0,0,0)]">Previous</span>
   </button>
   <button
      class="absolute top-0 bottom-0 right-0 z-[1] flex w-[15%] items-center justify-center border-0 bg-none p-0 text-center text-white opacity-50 transition-opacity duration-150 ease-[cubic-bezier(0.25,0.1,0.25,1.0)] hover:text-white hover:no-underline hover:opacity-90 hover:outline-none focus:text-white focus:no-underline focus:opacity-90 focus:outline-none motion-reduce:transition-none"
      type="button" data-te-target="#carouselExampleCaptions" data-te-slide="next">
      <span class="inline-block h-8 w-8">
         <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
            stroke="currentColor" class="h-6 w-6">
            <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" />
         </svg>
      </span>
      <span
         class="!absolute !-m-px !h-px !w-px !overflow-hidden !whitespace-nowrap !border-0 !p-0 ![clip:rect(0,0,0,0)]">Next</span>
   </button>
</div>
<!-- About Section -->
<section class="text-gray-600 body-font" id="about" style="font-family: 'Inter'; margin-top: 12%;">
   <div class="container mx-auto flex py-24 lg:flex-row flex-col items-center" style="margin: auto; width: 70%;">
      <div class="lg:w-1/2 pr-4 pl-4">
         <img class="object-cover object-center rounded" alt="hero" src="{{ asset('storage/' . $about->about_img) }}">
      </div>
      <div class="lg:w-1/2 pr-4 pl-4">
         <h1 class="sec-head">About Us
         </h1>
         <div class="mb-8 leading-relaxed" style="width: auto; text-align: justify">{!! $about->short_descript !!}</div>
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