<!-- Footer Section -->
<style>
   #deskripsi div {
      color: red;
   }
</style>

<div class="footer-dark" style="font-family: Inter;">
   <footer>
      <div class="bscontainer">
         <div class="bsrow">
            <div class="bscol-md-2 item">
               <h3>Pages</h3>
               <ul>
                  <li><a href="index">Home</a></li>
                  <li><a href="pages/map">Hotels</a></li>
                  <li><a href="/login">Login</a></li>
                  <li><a href="pages/book">Book Hotel</a></li>
               </ul>
            </div>
            <div class="bscol-md-2 item">
               <h3>Know More</h3>
               <ul>
                  <li><a href="pages/facility">Facility</a></li>
                  <li><a href="pages/team">Our Team</a></li>
                  <li><a href="pages/news">News</a></li>
               </ul>
            </div>
            <div class="bscol-md-2 item">
               <h3>Other Details</h3>
               <ul>
                  <li><a href="#">Privacy Policy</a></li>
                  <li><a href="#">Terms of Service</a></li>
               </ul>
            </div>
            <div class="bscol-md-6 item text">
               <h3>{{ $about->name }}</h3>
               <p id="deskripsi">{!! $about->short_descript !!}</p>
            </div>
            <div class="social_links">
               <a href="{{ $socialMedia->instagram }}">
                  <span class="fa-stack fa-lg ig combo">
                     <i class="fa fa-circle fa-stack-2x circle"></i>
                     <i class="fa fa-instagram fa-stack-1x fa-inverse icon"></i>
                  </span>
               </a>
               <a href="{{ $socialMedia->facebook }}">
                  <span class="fa-stack fa-lg fb combo">
                     <i class="fa fa-circle fa-stack-2x circle"></i>
                     <i class="fa fa-facebook fa-stack-1x fa-inverse icon"></i>
                  </span>
               </a>
               <a href="{{ $socialMedia->youtube }}">
                  <span class="fa-stack fa-lg yt combo">
                     <i class="fa fa-circle fa-stack-2x circle"></i>
                     <i class="fa fa-youtube-play fa-stack-1x fa-inverse icon"></i>
                  </span>
               </a>
               <a href="{{ $socialMedia->twitter }}">
                  <span class="fa-stack fa-lg tw combo">
                     <i class="fa fa-circle fa-stack-2x circle"></i>
                     <i class="fa fa-twitter fa-stack-1x fa-inverse icon"></i>
                  </span>
               </a>
               <a href="{{ $socialMedia->whatsapp }}">
                  <span class="fa-stack fa-lg wa combo">
                     <i class="fa fa-circle fa-stack-2x circle"></i>
                     <i class="fa fa-whatsapp fa-stack-1x fa-inverse icon"></i>
                  </span>
               </a>
            </div>
         </div>
         <p class="copyright">{{ $about->name }} © 2021</p>
      </div>
   </footer>
</div>