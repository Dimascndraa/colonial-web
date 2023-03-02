@extends('admin.inc.layout')
@section('title','Show Posts')
@section('dashboardPosts','active')
{{-- @section('dashboardPosts_show','active') --}}
@section('content')
<main id="js-page-content" role="main" class="page-content">
    <ol class="breadcrumb page-breadcrumb">
        <li class="breadcrumb-item"><a href="/dashboard">{{ $about->name }}</a></li>
        <li class="breadcrumb-item"><a href="/dashboard/posts">Posts</a></li>
        <li class="breadcrumb-item active">Show</li>
        <li class="position-absolute pos-top pos-right d-none d-sm-block"><span class="js-get-date"></span></li>
    </ol>
    <div class="subheader">
        <h1 class="subheader-title">
            Posts
            <small>
                Halaman Show Berita
            </small>
        </h1>
    </div>

    <div class="row my-3 ml-1">
        <a href="/dashboard/posts/" class="btn btn-lg btn-outline-primary">
            <span class="fal fa-arrow-left mr-1"></span>
            Kembali
        </a>
    </div>
    <div class="row">
        <div class="col-xl-12">
            <div id="panel-1" class="panel">
                <div class="panel-hdr">
                    <h2>
                        <strong>{{ $post->title }}</strong>
                    </h2>
                    <a href="/dashboard/posts/{{ $post->slug }}/edit" class="badge mx-1 bg-warning p-2 d-inline">
                        Ubah <i class="fas fa-edit"></i>
                    </a>

                    <form action="/dashboard/posts/{{ $post->slug }}" method="POST" class="d-inline">
                        @method('delete')
                        @csrf
                        <button class="badge mx-1 badge-danger p-2 border-0" onclick="return confirm('Anda takin?')">
                            Hapus <i class="fas fa-trash"></i>
                        </button>
                    </form>
                </div>
                <div class="panel-container show">
                    <div class="panel-content">
                        <div class="asd">

                            <div class="mb-3 row justify-content-center">
                                <img src="{{ asset('storage/' . $post->image) }}" class="img-fluid img-thumbnail w-50"
                                    alt="{{ $post->image }}">
                            </div>

                            <span class="card-text fs-4">
                                {!! $post->body !!}
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection