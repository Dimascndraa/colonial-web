@extends('layouts.main')
<link rel="stylesheet" href="/assets/css/donate.css">

@section('container')
   <h1 class="sec-head" style="text-align: center; margin-top: 100px;">Why donate?</h1>
      <div style="text-align: justify; font-family: Inter; font-size: 18px; width: 60%; margin: auto; margin-top: 10px;">Our organisation financially and emotionally supports a variety of social causes, such as supporting local charities and organisations with their environmental and ethical campaigns. assisting in the growth of more trees and the reduction of deforestation Reducing waste, improving energy efficiency, and preserving and recycling resources are all ways to reduce our environmental effect. assisting the poor by providing them with shelter, food, and other necessities.
      </div>
      <div class="card-form">
         <form class="deposit">
            <div class="form-indicator"></div>
            <div class="form-body">
               <div class="row-d">
                  <h1 style="margin-bottom:0px;">
                  DONATE FUNDS</h2>
               </div>
               <div class="row-d" >
                  <p style="margin-top:0px;" id ="donation">$68,789 donated till now.</p>
               </div>
               <div class="row-d">
                  <div class="form-block">
                     <div class="button" id="1" onclick="setValue(this)">$5</div>
                     <div class="button" id="2" onclick="setValue(this)">$10</div>
                     <div class="button" id="3" onclick="setValue(this)">$20</div>
                     <div class="button" id="4" onclick="setValue(this)">$40</div>
                     <div class="button" id="5" onclick="setValue(this)">$100</div>
                     <div class="button" id="6" onclick="setValue(this)">$250</div>
                     <div class="button" id="7" onclick="setValue(this)">$1000</div>
                  </div>
               </div>
               <div class="row-d">
                  <input type="text" id="cc" maxlength="16" placeholder="Credit card number">
               </div>
               <div class="row-d">
                  <input type="text" id="name" placeholder="Name on card">
                  <input type="text" id ="date" maxlength="5" placeholder="MM/YY">
                  <input type="text" id ="cvc" maxlength="4" placeholder="CVC">
               </div>
            </div>
            <div class="form-footer">
               <div class="button button__header" style="text-align: center; cursor: pointer;">Donate Funds</div>
            </div>
         </form>
      </div>
@endsection