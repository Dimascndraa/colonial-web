@extends('dashboard.layout')

@section('content')

<div class="flex flex-wrap my-5 -mx-2">
    <div class="w-full lg:w-1/3 p-2">
        <a href="{{ route('profile') }}"
            class="flex items-center flex-row w-full bg-gradient-to-r dark:from-cyan-500 dark:to-blue-500 from-indigo-500 via-purple-500 to-pink-500 rounded-md p-3">
            <div
                class="flex text-indigo-500 dark:text-white items-center bg-white dark:bg-[#0F172A] p-2 md:pl-4 rounded-md flex-none w-8 h-8 md:w-12 md:h-12">
                <i class="bx bx-user"></i>
            </div>
            <div class="flex flex-col justify-around flex-grow ml-5 text-white">
                <div class="text-xs whitespace-nowrap">
                    <strong>Profile</strong>
                </div>
            </div>
            <div class=" flex items-center flex-none text-white">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" strokeWidth={1.5}
                    stroke="currentColor" class="w-6 h-6">
                    <path strokeLinecap="round" strokeLinejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" />
                </svg>

            </div>
        </a>
    </div>
    <div class="w-full md:w-1/2 lg:w-1/3 p-2 ">
        <a href="{{ route('room') }}"
            class="flex items-center flex-row w-full bg-gradient-to-r dark:from-cyan-500 dark:to-blue-500 from-indigo-500 via-purple-500 to-pink-500 rounded-md p-3">
            <div
                class="flex text-indigo-500 dark:text-white items-center bg-white dark:bg-[#0F172A] p-2 pl-4 rounded-md flex-none w-8 h-8 md:w-12 md:h-12">
                <i class='bx bxs-door-open bx-rotate-180'></i>
            </div>
            <div class="flex flex-col justify-around flex-grow ml-5 text-white">
                <div class="text-xs whitespace-nowrap">
                    <strong>Room</strong>
                </div>
            </div>
            <div class=" flex items-center flex-none text-white">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" strokeWidth={1.5}
                    stroke="currentColor" class="w-6 h-6">
                    <path strokeLinecap="round" strokeLinejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" />
                </svg>

            </div>
        </a>
    </div>
    <div class="w-full md:w-1/2 lg:w-1/3 p-2">
        <a href="{{ route('review_user') }}"
            class="flex items-center flex-row w-full bg-gradient-to-r dark:from-cyan-500 dark:to-blue-500 from-indigo-500 via-purple-500 to-pink-500 rounded-md p-3">
            <div
                class="flex text-indigo-500 dark:text-white items-center bg-white dark:bg-[#0F172A] p-2 md:pl-4 rounded-md flex-none w-8 h-8 md:w-12 md:h-12">
                <i class='bx bx-star bx-rotate-90'></i>
            </div>
            <div class="flex flex-col justify-around flex-grow ml-5 text-white">
                <div class="text-xs whitespace-nowrap">
                    <strong>Review</strong>
                </div>
            </div>
            <div class=" flex items-center flex-none text-white">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" strokeWidth={1.5}
                    stroke="currentColor" class="w-6 h-6">
                    <path strokeLinecap="round" strokeLinejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" />
                </svg>

            </div>
        </a>
    </div>
</div>
@endsection