@extends('layouts.main')
<link rel="stylesheet" href="/assets/css/dining.css">

@section('container')
    <!-- Dining Section -->
      <h1 class="sec-head" style="text-align: center; margin-top: 100px;">Taste the difference</h1>
      <div style="text-align: justify; font-family: Inter; font-size: 18px; width: 60%; margin: auto; margin-top: 10px;">When you dine at one of our restaurants, you will be treated to great dining and "futuristic cuisine". The restaurant provides a stylish environment for your next lunch or dinner, with sumptuous seating and aesthetic details.</div>
      <div class="py-1" style="font-family: Inter; margin-top: 70px;">
         <div class="container mx-auto" style="padding-right: 100px; padding-left: 100px;">
            <div class=" lg:flex lg:-mx-4 mt-6 md:mt-12" style="margin: auto;">
               <div class=" lg:w-1/3 my-4 md:my-6 ">
                  <div style="border: 1px solid rgba(200, 200, 200, 0.712); border-radius: 9px;" class=" border-t-4 border-solid border-white text-center max-w-sm mx-auto hover:border-indigo-600 transition-colors duration-300">
                     <div class="p-6 md:py-8">
                        <h4 class="title-price font-medium leading-tight text-2xl mb-2">Chinese Cuisine</h4>
                        <p class="text-gray-600">The outside world defines as Chinese cuisine as not a true cuisine but rather a composite of distinct regional cuisines.
                        </p>
                     </div>
                  </div>
               </div>
               <div class=" lg:w-1/3 my-4 md:my-6" >
                  <div style="border: 1px solid rgba(200, 200, 200, 0.712); border-radius: 9px;" class=" border-t-4 border-solid border-white bg-white text-center max-w-sm mx-auto hover:border-indigo-600 transition-colors duration-300">
                     <div class="p-6 md:py-8">
                        <h4 class="title-price font-medium leading-tight text-2xl mb-2">French Cuisine</h4>
                        <p class="text-gray-600">Overall, the cooking of France is the best in the Western World. And its classical and regional cuisines are superb.
                        </p>
                     </div>
                  </div>
               </div>
               <div  class=" lg:w-1/3 my-4 md:my-6">
                  <div style="border: 1px solid rgba(200, 200, 200, 0.712); border-radius: 9px;" class=" border-t-4 border-solid border-white bg-white text-center max-w-sm mx-auto hover:border-indigo-600 transition-colors duration-300">
                     <div class="p-6 md:py-8">
                        <h4 class="title-price font-medium leading-tight text-2xl mb-2">Italian Cuisine</h4>
                        <p class="text-gray-600">Italian cuisine is characterized by its extreme simplicity, with many dishes having only four to eight ingredients.
                        </p>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <div class=" py-1" style="font-family: Inter;">
         <div class="container mx-auto" style="padding-right: 100px; padding-left: 100px;">
            <div class=" lg:flex lg:-mx-4 mt-6 md:mt-12" style="margin: auto;">
               <div class=" lg:w-1/3 my-4 md:my-6 ">
                  <div style="border: 1px solid rgba(200, 200, 200, 0.712); border-radius: 9px;" class=" border-t-4 border-solid border-white text-center max-w-sm mx-auto hover:border-indigo-600 transition-colors duration-300">
                     <div class="p-6 md:py-8">
                        <h4 class="title-price font-medium leading-tight text-2xl mb-2">Indian Cuisine
                        </h4>
                        <p class="text-gray-600">Indian cuisine is not a single cuisine but a collection of differing regional cuisines; each is its own distinct Indian food.
                        </p>
                     </div>
                  </div>
               </div>
               <div class=" lg:w-1/3 my-4 md:my-6" >
                  <div style="border: 1px solid rgba(200, 200, 200, 0.712); border-radius: 9px;" class=" border-t-4 border-solid border-white bg-white text-center max-w-sm mx-auto hover:border-indigo-600 transition-colors duration-300">
                     <div class="p-6 md:py-8">
                        <h4 class="title-price font-medium leading-tight text-2xl mb-2">Japanese Cuisine
                        </h4>
                        <p class="text-gray-600">Though more complex cuisines exist, none comes close to matching Japan’s culinary aesthetics.
                        </p>
                     </div>
                  </div>
               </div>
               <div  class=" lg:w-1/3 my-4 md:my-6">
                  <div style="border: 1px solid rgba(200, 200, 200, 0.712); border-radius: 9px;" class=" border-t-4 border-solid border-white bg-white text-center max-w-sm mx-auto hover:border-indigo-600 transition-colors duration-300">
                     <div class="p-6 md:py-8">
                        <h4 class="title-price font-medium leading-tight text-2xl mb-2">Turkish Cuisine
                        </h4>
                        <p class="text-gray-600">This cuisine is a Middle Eastern culinary marriage and the nation has some of the most dedicated and talented cooks.
                        </p>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>

      <!-- Order Section -->
      <h1 class="sec-head" style="text-align: center; margin-top: 100px; margin-bottom: 60px;">Order Now</h1>
      <div class="big">
         <article class="recipe">
            <div class="pizza-box">
               <img src="https://img.buzzfeed.com/thumbnailer-prod-us-east-1/video-api/assets/216054.jpg" width="1500" height="1368" alt="">
            </div>
            <div class="recipe-content">
               <h1 class="recipe-title"><a href="#"> Pepperoni Pan Pizza</a></h1>
               <p class="recipe-metadata">
                  <span class="recipe-rating">★★★★<span>☆</span></span>
                  <span class="recipe-votes">(54 votes)</span>
               </p>
               <p class="recipe-desc">This pepperoni pan pizza is made with a simple yet superlative from-scratch tomato sauce, two types of mozzarella, Parmesan cheese, pepperoni, and either store-bought or homemade dough.</p>
               <br>    
               <button class="recipe-save" type="button">
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="#000000">
                     <path d="M 6.0097656 2 C 4.9143111 2 4.0097656 2.9025988 4.0097656 3.9980469 L 4 22 L 12 19 L 20 22 L 20 20.556641 L 20 4 C 20 2.9069372 19.093063 2 18 2 L 6.0097656 2 z M 6.0097656 4 L 18 4 L 18 19.113281 L 12 16.863281 L 6.0019531 19.113281 L 6.0097656 4 z" fill="currentColor"/>
                  </svg>
                  Order
               </button>
            </div>
         </article>
         <br><br>
         <article class="recipe">
            <div class="pizza-box">
               <img src="https://media.istockphoto.com/photos/lasagna-on-a-square-white-plate-picture-id535851351?k=20&m=535851351&s=612x612&w=0&h=jdWOk9G_OOzHvPrvFrigqzk3EoucmIhUZr1-ey9NcGM=" width="1500" height="1368" alt="">
            </div>
            <div class="recipe-content">
               <h1 class="recipe-title"><a href="#"> Lasagne</a></h1>
               <p class="recipe-metadata">
                  <span class="recipe-rating">★★★★<span>☆</span></span>
                  <span class="recipe-votes">(54 votes)</span>
               </p>
               <p class="recipe-desc">Lasagne are a type of pasta, possibly one of the oldest types, made of very wide, flat sheets. Either term can also refer to an Italian dish made of stacked layers of lasagne alternating with fillings.</p>
               <br>    
               <button class="recipe-save" type="button">
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="#000000">
                     <path d="M 6.0097656 2 C 4.9143111 2 4.0097656 2.9025988 4.0097656 3.9980469 L 4 22 L 12 19 L 20 22 L 20 20.556641 L 20 4 C 20 2.9069372 19.093063 2 18 2 L 6.0097656 2 z M 6.0097656 4 L 18 4 L 18 19.113281 L 12 16.863281 L 6.0019531 19.113281 L 6.0097656 4 z" fill="currentColor"/>
                  </svg>
                  Order
               </button>
            </div>
         </article>
         <br><br>
         <article class="recipe">
            <div class="pizza-box">
               <img src="https://www.curiouscuisiniere.com/wp-content/uploads/2013/06/Japanese-Sushi-0458.450-450x270.jpg" width="1500" height="1368" alt="">
            </div>
            <div class="recipe-content">
               <h1 class="recipe-title"><a href="#"> Sushi</a></h1>
               <p class="recipe-metadata">
                  <span class="recipe-rating">★★★★<span>☆</span></span>
                  <span class="recipe-votes">(54 votes)</span>
               </p>
               <p class="recipe-desc">Sushi, a staple rice dish of Japanese cuisine, consisting of cooked rice flavoured with vinegar and a variety of vegetable, egg, or raw seafood garnishes and served cold.</p>
               <br>    
               <button class="recipe-save" type="button">
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="#000000">
                     <path d="M 6.0097656 2 C 4.9143111 2 4.0097656 2.9025988 4.0097656 3.9980469 L 4 22 L 12 19 L 20 22 L 20 20.556641 L 20 4 C 20 2.9069372 19.093063 2 18 2 L 6.0097656 2 z M 6.0097656 4 L 18 4 L 18 19.113281 L 12 16.863281 L 6.0019531 19.113281 L 6.0097656 4 z" fill="currentColor"/>
                  </svg>
                  Order
               </button>
            </div>
         </article>
         <br><br>
         <article class="recipe">
            <div class="pizza-box">
               <img src="https://lp-cms-production.imgix.net/image_browser/tacos_mexico_G.jpg" width="1500" height="1368" alt="">
            </div>
            <div class="recipe-content">
               <h1 class="recipe-title"><a href="#">Mexican Tacos</a></h1>
               <p class="recipe-metadata">
                  <span class="recipe-rating">★★★★<span>☆</span></span>
                  <span class="recipe-votes">(54 votes)</span>
               </p>
               <p class="recipe-desc">A taco is a traditional Mexican dish consisting of a small hand-sized corn or wheat tortilla topped with a filling. The tortilla is then folded around the filling and eaten by hand.</p>
               <br>    
               <button class="recipe-save" type="button">
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="#000000">
                     <path d="M 6.0097656 2 C 4.9143111 2 4.0097656 2.9025988 4.0097656 3.9980469 L 4 22 L 12 19 L 20 22 L 20 20.556641 L 20 4 C 20 2.9069372 19.093063 2 18 2 L 6.0097656 2 z M 6.0097656 4 L 18 4 L 18 19.113281 L 12 16.863281 L 6.0019531 19.113281 L 6.0097656 4 z" fill="currentColor"/>
                  </svg>
                  Order
               </button>
            </div>
         </article>
         <br><br>
      </div>
@endsection