@include('layouts.head')

<body>

  @include('partials.navbar')

  <!-- Banner Section -->
  @if (!Request::is('/') && !Request::is('pages/posts/*'))
  <section class="banner" style="height: 85vh;">
    <div class="content">
      <div class="title">{{ $title }}</div>
      <div class="top-subtitle subtitle">{{ $name }}</div>
    </div>
  </section>
  @endif

  @if (Request::is('pages/posts/*'))
  <section class="banner" style="height: 85vh;">
    <div class="content">
      <div class="title">{{ $post->title }}</div>
      <div class="top-subtitle subtitle">{{ $about->name }}</div>
    </div>
    <div class="content mt-24">
      <a href="/pages/posts" class="top-subtitle subtitle"><i class="fa fa-arrow-circle-left"></i> Back To
        Post</a>
    </div>
  </section>
  @endif

  @yield('container')

  @include('partials.footer')

  @include('layouts.script')
</body>

</html>