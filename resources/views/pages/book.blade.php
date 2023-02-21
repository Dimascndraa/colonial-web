@extends('layouts.main')
<link rel="stylesheet" href="/assets/css/book.css">

@section('container')
    <!-- Booking Form -->
      <div class="booking-form-w3layouts" style="font-family: Inter;">
         <form action="#" method="post">
            <h2 class="sub-heading-agileits">Booking Details</h2>
            <div class="main-flex-w3ls-sectns">
               <div class="field-agileinfo-spc form-w3-agile-text1">
                  <br>
                  <select class="form-control">
                     <option>From</option>
                     <option value="Lorem Ipsum">India</option>
                     <option value="Adipiscing">Dubai</option>
                     <option value="Lorem Ipsum">Mexico</option>
                     <option value="Adipiscing">Brazil</option>
                     <option value="Lorem Ipsum">Mongolia</option>
                     <option value="Adipiscing">Australia</option>
                  </select>
               </div>
               <br>
               <div class="field-agileinfo-spc form-w3-agile-text2">
                  <br>
                  <select class="form-control">
                     <option>To</option>
                     <option value="Lorem Ipsum">India</option>
                     <option value="Adipiscing">Dubai</option>
                     <option value="Lorem Ipsum">Mexico</option>
                     <option value="Adipiscing">Brazil</option>
                     <option value="Lorem Ipsum">Mongolia</option>
                     <option value="Adipiscing">Australia</option>
                  </select>
               </div>
            </div>
            <div class="main-flex-w3ls-sectns">
               <div class="field-agileinfo-spc form-w3-agile-text1">
                  <select class="form-control">
                     <option>Preferred Hotel</option>
                     <option value="American Airline">American Hotel</option>
                     <option value="Delta Airlines">Delta Hotel</option>
                     <option value="Frontier Airline">Frontier Hotel</option>
                     <option value="Jet Blue">Jet Hotel</option>
                     <option value="Southwest Airlines">Southwest Hotel</option>
                  </select>
               </div>
               <div class="field-agileinfo-spc form-w3-agile-text2">
                  <select class="form-control">
                     <option>Preferred Seating</option>
                     <option value="Window">Single</option>
                     <option value="Aisle">Family</option>
                     <option value="Special">Special (Request note below)</option>
                  </select>
               </div>
            </div>
            <div class="main-flex-w3ls-sectns">
               <div class="field-agileinfo-spc form-w3-agile-text1">
                  <input id="datepicker" name="Text" type="text" placeholder="Arrival Date" value="" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'mm/dd/yyyy';}" required="" class="hasDatepicker">
               </div>
               <div class="field-agileinfo-spc form-w3-agile-text2">
                  <input type="text" id="timepicker" name="Time" class="timepicker form-control hasWickedpicker" placeholder="Departure Time" value="" onkeypress="return false;">
               </div>
            </div>
            <div class="triple-wthree">
               <div class="field-agileinfo-spc form-w3-agile-text11">
                  <select class="form-control">
                     <option value="">Adult(12+ Yrs)</option>
                     <option value="1">1</option>
                     <option value="2">2</option>
                     <option value="3">3</option>
                     <option value="4">4</option>
                     <option value="5">5+</option>
                  </select>
               </div>
               <div class="field-agileinfo-spc form-w3-agile-text22">
                  <select class="form-control">
                     <option value="">Children(2-11 Yrs)</option>
                     <option value="1">1</option>
                     <option value="2">2</option>
                     <option value="3">3</option>
                     <option value="4">4</option>
                     <option value="5">5+</option>
                  </select>
               </div>
               <div class="field-agileinfo-spc form-w3-agile-text33">
                  <select class="form-control">
                     <option value="">Infant(under 2Yrs)</option>
                     <option value="1">1</option>
                     <option value="2">2</option>
                     <option value="3">3</option>
                     <option value="4">4</option>
                     <option value="5">5+</option>
                  </select>
               </div>
            </div>
            <div class="radio-section">
               <h6>Select your Fare</h6>
               <ul class="radio-buttons-w3-agileits">
                  <li>
                     <input type="radio" id="a-option" name="selector1">
                     <label for="a-option">One Way</label>
                     <div class="check"></div>
                  </li>
                  <li>
                     <input type="radio" id="b-option" name="selector1">
                     <label for="b-option">Round-Trip</label>
                     <div class="check">
                        <div class="inside"></div>
                     </div>
                  </li>
               </ul>
               <div class="clear"></div>
            </div>
            <div class="main-flex-w3ls-sectns">
               <div class="field-agileinfo-spc form-w3-agile-text1">
                  <input id="datepicker1" name="Text" type="text" placeholder="Return Date" value="" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'mm/dd/yyyy';}" required="" class="hasDatepicker">
               </div>
               <div class="field-agileinfo-spc form-w3-agile-text2">
                  <input type="text" id="timepicker1" name="Time" class="timepicker form-control hasWickedpicker" placeholder="Return Time" value="" onkeypress="return false;">
               </div>
            </div>
            <div class="field-agileinfo-spc form-w3-agile-text">
               <textarea name="Message" placeholder="Any Message..."></textarea>
            </div>
            <h3 class="sub-heading-agileits">Personal Details</h3>
            <div class="main-flex-w3ls-sectns">
               <div class="field-agileinfo-spc form-w3-agile-text1">
                  <input type="text" name="Name" placeholder="Full Name" required="">
               </div>
               <div class="field-agileinfo-spc form-w3-agile-text2">
                  <input type="text" name="Phone no" placeholder="Phone Number" required="">
               </div>
            </div>
            <div class="field-agileinfo-spc form-w3-agile-text">
               <input type="email" name="Email" placeholder="Email" required="">
            </div>
            <div class="clear"></div>
            <a href="login.html" class="button button__header focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500" style="width: 20%; margin: auto; text-align: center; font-size: 17px; margin-top: 40px;">Submit</a>
            <div class="clear"></div>
         </form>
      </div>
@endsection