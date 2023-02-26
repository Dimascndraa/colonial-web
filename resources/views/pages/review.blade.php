@extends('layouts.main')
<link rel="stylesheet" href="/assets/css/map.css">

@section('container')
<h1 class="sec-head" style="text-align: center; margin-top: 100px;">Review</h1>
<!-- Contact Section -->
<section class=" text-gray-100 px-8 py-12" style="font-family: Inter;">
   <div class="text-center w-full">
   </div>
   <div
      class="max-w-screen-xl mt-24 px-8 grid gap-8 grid-cols-1 md:grid-cols-2 md:px-12 lg:px-16 xl:px-32 py-16 mx-auto bg-gray-100 text-gray-900 rounded-lg">
      <div class="flex flex-col justify-between">
         <div>
            <h2 class="sec-head">Review Us</h2>
            <img src="/assets/img/contact.svg" style="margin-top: 50px; padding-right: 50px;" alt="">
         </div>
      </div>
      <form method="post" action="/dashboard/review">
         @csrf
         <div class="contact">
            <div>
               <label for="input-7-xs" class="control-label uppercase text-sm text-gray-600 font-bold">Rating</label>
               <input id="input-7-xs" class="rating rating-loading" name="rating" value="{{ old('rating') }}"
                  data-min="0" data-max="5" data-step="0.5" data-size="xs">
               @error('rating')
               <p class="text-danger">{{ $message }}</p>
               @enderror
            </div>
            <div class="mt-8">
               <span class="uppercase text-sm text-gray-600 font-bold">Full Name</span>
               <input
                  class="w-full bg-gray-200 text-gray-900 mt-2 p-3 rounded-lg focus:outline-none focus:shadow-outline"
                  type="text" name="name" value="{{ old('name') }}">
               @error('name')
               <p class="text-danger">{{ $message }}</p>
               @enderror
            </div>
            <div class="mt-8">
               <span class="uppercase text-sm text-gray-600 font-bold">Message</span>
               <textarea
                  class="w-full h-32 bg-gray-200 text-gray-900 mt-2 p-3 rounded-lg focus:outline-none focus:shadow-outline"
                  name="body">{{ old('body') }}</textarea>
               @error('body')
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