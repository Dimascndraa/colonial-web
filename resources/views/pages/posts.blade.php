@extends('layouts.main')
<link rel="stylesheet" href="/assets/css/news.css">

@section('container')
<h1 class="sec-head" style="text-align: center; margin-top: 100px;">Let's see our latest news!</h1>
<section class="news">
   <div class="container">
      @foreach ($posts as $post)
      <a href="/pages/posts/{{ $post->slug }}">
         <div class="card" style="font-family: Inter;">
            <div class="card-header"
               style="height: 15rem; background: url({{ asset('storage/'. $post->image) }}); background-size: cover; background-position: top center;">
               {{-- <img src="../assets/img/h2.jpg" alt="hotel" /> --}}
            </div>
            <div class="card-body">
               <span class="tag tag-pink">{{ $post->category->name }}</span>
               <h4 class="text-decoration-none">
                  {{ $post->title }}
               </h4>
               <p>
                  {{ $post->excerpt }}
               </p>
               <div class="user">
                  <img src="https://i.pinimg.com/originals/8b/16/7a/8b167af653c2399dd93b952a48740620.jpg" alt="user" />
                  <div class="user-info">
                     {{-- <h5>{{ $post->user->name }}</h5> --}}
                     <small>{{ $post->created_at->diffForHumans() }}</small>
                  </div>
               </div>
            </div>
         </div>
      </a>
      @endforeach
</section>
@endsection