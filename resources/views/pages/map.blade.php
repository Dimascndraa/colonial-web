@extends('layouts.main')
<link rel="stylesheet" href="/assets/css/map.css">

@section('container')
<h1 class="sec-head" style="text-align: center; margin-top: 100px;">The Best Hotels</h1>
<div style="text-align: justify; font-family: Inter; font-size: 18px; width: 60%; margin: auto; margin-top: 10px;">We
   have over 50 high-quality hotels and resorts around the world. Our hotels are the ultimate location for individuals
   who enjoy a vibrant and upmarket lifestyle, thanks to their modern design that combines elegance in form and
   function. Glory Hotels allows you to find more harmony every time you go with real hospitality, honest service, and
   clean decor.
</div>
<div class="distribution-map">
   <img src="/assets/img/indo.svg">
   <button class="map-point" style="top:74%;left:29%">
      <div class="content">
         <div class="centered-y">
            <h2 class="hotel-name">{{ $about->name }}</h2>
            <p><b>Location: </b>Kadipaten</p>
         </div>
      </div>
   </button>
</div>
@endsection