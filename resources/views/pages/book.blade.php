@extends('layouts.main')

@section('container')
<div class="container mt-20">
   <h1 class="fw-bold fs-1 d-inline-block mb-10">Booking Details</h1>
   <form action="{{ url("room_type/".$room_type->id."/book") }}"></form>
   <div class="flex justify-center">
      <div class="flex flex-col rounded-lg bg-white shadow-lg dark:bg-neutral-700 md:flex-row">
         <img class="h-96 w-full rounded-t-lg object-cover md:h-auto md:w-80 md:rounded-none md:rounded-l-lg"
            src="{{ asset('storage/' . $about->about_img) }}" alt="" style="background-position: center" />
         <div class="flex flex-col justify-start p-6">
            <h5 class="fw-bold fs-1 d-inline-block">{{ $room_type->name }}</h5>
            <div class="flex flex-wrap justify-center mt-5">
               <div class="relative mb-3 xl:w-96" data-te-input-wrapper-init>
                  <input type="number"
                     class="peer block min-h-[auto] w-full rounded border-0 bg-transparent py-[0.32rem] px-3 leading-[2.15] outline-none transition-all duration-200 ease-linear focus:placeholder:opacity-100 data-[te-input-state-active]:placeholder:opacity-100 motion-reduce:transition-none dark:text-neutral-200 dark:placeholder:text-neutral-200 [&:not([data-te-input-placeholder-active])]:placeholder:opacity-0"
                     id="exampleFormControlInput2" placeholder="Form control lg" />
                  <label for="exampleFormControlInput2"
                     class="pointer-events-none absolute top-0 left-3 mb-0 max-w-[90%] origin-[0_0] truncate pt-[0.37rem] leading-[2.15] text-neutral-500 transition-all duration-200 ease-out peer-focus:-translate-y-[1.15rem] peer-focus:scale-[0.8] peer-focus:text-primary peer-data-[te-input-state-active]:-translate-y-[1.15rem] peer-data-[te-input-state-active]:scale-[0.8] motion-reduce:transition-none dark:text-neutral-200 dark:peer-focus:text-neutral-200">No
                     of childs
                  </label>
               </div>
            </div>
            <div class="flex flex-wrap justify-center">
               <div class="relative mb-3 xl:w-96" data-te-input-wrapper-init>
                  <input type="number"
                     class="peer block min-h-[auto] w-full rounded border-0 bg-transparent py-[0.32rem] px-3 leading-[2.15] outline-none transition-all duration-200 ease-linear focus:placeholder:opacity-100 data-[te-input-state-active]:placeholder:opacity-100 motion-reduce:transition-none dark:text-neutral-200 dark:placeholder:text-neutral-200 [&:not([data-te-input-placeholder-active])]:placeholder:opacity-0"
                     id="exampleFormControlInput2" placeholder="Form control lg" />
                  <label for="exampleFormControlInput2"
                     class="pointer-events-none absolute top-0 left-3 mb-0 max-w-[90%] origin-[0_0] truncate pt-[0.37rem] leading-[2.15] text-neutral-500 transition-all duration-200 ease-out peer-focus:-translate-y-[1.15rem] peer-focus:scale-[0.8] peer-focus:text-primary peer-data-[te-input-state-active]:-translate-y-[1.15rem] peer-data-[te-input-state-active]:scale-[0.8] motion-reduce:transition-none dark:text-neutral-200 dark:peer-focus:text-neutral-200">No
                     of adults
                  </label>
               </div>
            </div>
            <div class="flex items-center justify-center">
               <div class="relative mb-3 xl:w-96" data-te-datepicker-init data-te-input-wrapper-init>
                  <input type="text"
                     class="peer block min-h-[auto] w-full rounded border-0 bg-transparent py-[0.32rem] px-3 leading-[2.15] outline-none transition-all duration-200 ease-linear focus:placeholder:opacity-100 data-[te-input-state-active]:placeholder:opacity-100 motion-reduce:transition-none dark:text-neutral-200 dark:placeholder:text-neutral-200 [&:not([data-te-input-placeholder-active])]:placeholder:opacity-0"
                     placeholder="Select a date" />
                  <label for="floatingInput"
                     class="pointer-events-none absolute top-0 left-3 mb-0 max-w-[90%] origin-[0_0] truncate pt-[0.37rem] leading-[2.15] text-neutral-500 transition-all duration-200 ease-out peer-focus:-translate-y-[1.15rem] peer-focus:scale-[0.8] peer-focus:text-primary peer-data-[te-input-state-active]:-translate-y-[1.15rem] peer-data-[te-input-state-active]:scale-[0.8] motion-reduce:transition-none dark:text-neutral-200 dark:peer-focus:text-neutral-200">Select
                     a date</label>
               </div>
            </div>
            <div class="flex items-center justify-center">
               <div class="relative mb-3 xl:w-96" data-te-datepicker-init data-te-input-wrapper-init>
                  <input type="text"
                     class="peer block min-h-[auto] w-full rounded border-0 bg-transparent py-[0.32rem] px-3 leading-[2.15] outline-none transition-all duration-200 ease-linear focus:placeholder:opacity-100 data-[te-input-state-active]:placeholder:opacity-100 motion-reduce:transition-none dark:text-neutral-200 dark:placeholder:text-neutral-200 [&:not([data-te-input-placeholder-active])]:placeholder:opacity-0"
                     placeholder="Select a date" />
                  <label for="floatingInput"
                     class="pointer-events-none absolute top-0 left-3 mb-0 max-w-[90%] origin-[0_0] truncate pt-[0.37rem] leading-[2.15] text-neutral-500 transition-all duration-200 ease-out peer-focus:-translate-y-[1.15rem] peer-focus:scale-[0.8] peer-focus:text-primary peer-data-[te-input-state-active]:-translate-y-[1.15rem] peer-data-[te-input-state-active]:scale-[0.8] motion-reduce:transition-none dark:text-neutral-200 dark:peer-focus:text-neutral-200">Select
                     a date</label>
               </div>
            </div>
            <div class="flex flex-wrap justify-center">
               <div class="xl:w-1/4 pr-4 pl-4 lg:w-1/4 pr-4 pl-4 md:w-1/4 pr-4 pl-4">
                  <button
                     class="inline align-middle text-center select-none border font-normal whitespace-no-wrap rounded py-1 px-3 leading-normal no-underline bg-blue-600 text-white hover:bg-blue-600 px-5 leading-[2.50]">Booking</button>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
@endsection