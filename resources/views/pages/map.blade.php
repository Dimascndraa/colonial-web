@extends('layouts.main')
<link rel="stylesheet" href="/assets/css/map.css">

@section('container')
   <h1 class="sec-head" style="text-align: center; margin-top: 100px;">The Best Hotels</h1>
      <div style="text-align: justify; font-family: Inter; font-size: 18px; width: 60%; margin: auto; margin-top: 10px;">We have over 50 high-quality hotels and resorts around the world. Our hotels are the ultimate location for individuals who enjoy a vibrant and upmarket lifestyle, thanks to their modern design that combines elegance in form and function. Glory Hotels allows you to find more harmony every time you go with real hospitality, honest service, and clean decor.
      </div>
      <div class="distribution-map">
         <img src="../assets/img/map.svg">
         <button class="map-point" style="top:15%;left:23%">
            <div class="content">
               <div class="centered-y">
                  <h2 class="hotel-name">The Glory Hotel</h2>
                  <p><b>Location: </b>Canada</p>
               </div>
            </div>
         </button>
         <button class="map-point" style="top:37%;left:50%">
            <div class="content">
               <div class="centered-y">
                  <h2 class="hotel-name">The Glory Hotel</h2>
                  <p><b>Location: </b>Libya</p>
               </div>
            </div>
         </button>
         <button class="map-point" style="top:76%;left:82.5%">
            <div class="content">
               <div class="centered-y">
                  <h2 class="hotel-name">The Glory Hotel</h2>
                  <p><b>Location: </b>Australia</p>
               </div>
            </div>
         </button>
         <button class="map-point" style="top:35%;left:16%">
            <div class="content">
               <div class="centered-y">
                  <h2 class="hotel-name">The Glory Hotel</h2>
                  <p><b>Location: </b>Mexico</p>
               </div>
            </div>
         </button>
         <button class="map-point" style="top:60%;left:53%">
            <div class="content">
               <div class="centered-y">
                  <h2 class="hotel-name">The Glory Hotel</h2>
                  <p><b>Location: </b>Congo</p>
               </div>
            </div>
         </button>
         <button class="map-point" style="top:45%;left:67%">
            <div class="content">
               <div class="centered-y">
                  <h2 class="hotel-name">The Glory Hotel</h2>
                  <p><b>Location: </b>Telengana, India</p>
               </div>
            </div>
         </button>
         <button class="map-point" style="top:38%;left:66.7%">
            <div class="content">
               <div class="centered-y">
                  <h2 class="hotel-name">The Glory Hotel</h2>
                  <p><b>Location: </b>Delhi, India</p>
               </div>
            </div>
         </button>
         <button class="map-point" style="top:25%;left:70%">
            <div class="content">
               <div class="centered-y">
                  <h2 class="hotel-name">The Glory Hotel</h2>
                  <p><b>Location: </b>Mongolia</p>
               </div>
            </div>
         </button>
         <button class="map-point" style="top:77%;left:28%">
            <div class="content">
               <div class="centered-y">
                  <h2 class="hotel-name">The Glory Hotel</h2>
                  <p><b>Location: </b>Argentina</p>
               </div>
            </div>
         </button>
         <button class="map-point" style="top:30%;left:60%">
            <div class="content">
               <div class="centered-y">
                  <h2 class="hotel-name">The Glory Hotel</h2>
                  <p><b>Location: </b>Turkmenistan</p>
               </div>
            </div>
         </button>
         <button class="map-point" style="top:65%;left:30%">
            <div class="content">
               <div class="centered-y">
                  <h2 class="hotel-name">The Glory Hotel</h2>
                  <p> <b>Location: </b>Brazil </p>
               </div>
            </div>
         </button>
      </div>
@endsection