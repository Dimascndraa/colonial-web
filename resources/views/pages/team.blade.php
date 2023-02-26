@extends('layouts.main')

@section('container')
<style>
   @import url('https://fonts.googleapis.com/css2?family=Mulish:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;0,1000;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900;1,1000&display=swap');

   body {
      font-family: mulish, sans-serif;
   }

   h2,
   .h2 {
      font-size: 38px;
      font-weight: 700;
   }

   h3,
   .h3 {
      font-size: 35px;
      font-weight: 700;
   }

   .content {
      font-size: 17px;
   }

   .content p {
      margin-bottom: 16px;
   }

   .content * {
      word-break: break-word;
      overflow-wrap: break-word;
   }

   .social-links {
      display: flex;
      justify-content: center;
      gap: 50px;
      margin: 2rem 0;
   }

   @media (max-width: 991px) {

      h2,
      .h2 {
         font-size: 30px;
      }

      h3,
      .h3 {
         font-size: 27px;
      }
   }
</style>

<div class="row justify-content-center mt-5">
   <div class="col-lg-10 mb-5">
      <img src="{{ asset('storage/'. $about->about_img) }}" alt="" style="border-radius: 10px">
      {{-- <picture>
         <source srcset="/images/about_hu85a58d4c3292447caa838f05a556ff33_99943_545x0_resize_q95_h2_box.webp"
            media="(max-width: 575px)">
         <source srcset="/images/about_hu85a58d4c3292447caa838f05a556ff33_99943_600x0_resize_q95_h2_box.webp"
            media="(max-width: 767px)">
         <source srcset="/images/about_hu85a58d4c3292447caa838f05a556ff33_99943_700x0_resize_q95_h2_box.webp"
            media="(max-width: 991px)">
         <source srcset="/images/about_hu85a58d4c3292447caa838f05a556ff33_99943_1110x0_resize_q95_h2_box.webp">
         <img loading="lazy" decoding="async" class="img-fluid rounded"
            src="/images/about_hu85a58d4c3292447caa838f05a556ff33_99943_1110x0_resize_q95_box.jpg" alt="about image"
            width="1200" height="670">
      </picture> --}}
   </div>
   <div class="col-lg-8 text-center">
      <h2 class="text-dark h2">
         {{ $about->name }}
      </h2>
      <div class="content mt-3">
         <p>{!! $about->short_descript !!}</p>
      </div>
      <ul class="social-links list-unstyled list-inline mt-4">
         <li class="list-inline-item d-inline"><a href="https://www.facebook.com/{{ $socialMedia->facebook }}">
               <i class="fa fa-facebook-f"></i>
            </a></li>
         <li class="list-inline-item d-inline"><a href="https://www.instagram.com/{{ $socialMedia->instagram }}">
               <i class="fa fa-instagram"></i>
            </a></li>
         <li class="list-inline-item d-inline"><a href="https://wa.me/{{ $socialMedia->whatsapp }}">
               <i class="fa fa-whatsapp"></i>
            </a></li>
         <li class="list-inline-item d-inline"><a href="https://www.twitter.com/{{ $socialMedia->twitter }}">
               <i class="fa fa-twitter"></i>
            </a></li>
         <li class="list-inline-item d-inline"><a href="https://www.youtube.com/{{ $socialMedia->youtube }}">
               <i class="fa fa-youtube"></i>
            </a></li>
      </ul>
   </div>
</div>
<div class="row justify-content-center">
   <div class="col-12 text-center">
      <h3 class="text-dark font-weight-700 mb-5">What I Do</h3>
   </div>
</div>
<div class="row justify-content-center mt-5">
   <div class="col-lg-4 mt-4 text-center">
      <i class="fa fa-pen-nib text-primary mb-4"></i>
      <h4 class="text-dark mb-3">Content Writing</h4>
      <p>Purus eget ipsum elementum venenatis, quis rutrum mi semper nonpurus eget ipsum elementum venenatis.</p>
   </div>
   <div class="col-lg-4 mt-4 text-center">
      <i class="fa fa-camera text-primary mb-4"></i>
      <h4 class="text-dark mb-3">Photography</h4>
      <p>Aenean maximus urna magna elementum venenatis, quis rutrum mi semper non purus eget ipsum elementum
         venenatis.</p>
   </div>
   <div class="col-lg-4 mt-4 text-center">
      <i class="far fa-snowflake text-primary mb-4"></i>
      <h4 class="text-dark mb-3">Web Research</h4>
      <p>Aenean maximus urna magna elementum venenatis, quis rutrum mi semper non purus eget ipsum elementum
         venenatis.</p>
   </div>
</div>
@endsection