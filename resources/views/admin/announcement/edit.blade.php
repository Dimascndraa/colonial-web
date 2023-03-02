@extends('admin.inc.layout')
@section('title','Gallery')
@section('gallery-dashboard','active')
{{-- @section('menuform_samples','active') --}}
@section('content')
<main id="js-page-content" role="main" class="page-content">
    <ol class="breadcrumb page-breadcrumb">
        <li class="breadcrumb-item"><a href="javascript:void(0);">{{ $about->name }}</a></li>
        <li class="breadcrumb-item active">Pengumuman</li>
        <li class="position-absolute pos-top pos-right d-none d-sm-block"><span class="js-get-date"></span></li>
    </ol>
    <div class="subheader">
        <h1 class="subheader-title">
            <i class="fal fa-bullhorn"></i> Pengumuman
            <small>
                Menu Pengumuman
            </small>
        </h1>
    </div>

    <div class="row my-3 ml-1">
        <a href="/dashboard/gallery/" class="btn btn-lg btn-outline-primary">
            <span class="fal fa-arrow-left mr-1"></span>
            Kembali
        </a>
    </div>

    <div class="row">
        <div class="col-xl-12">
            <div id="panel-1" class="panel">
                <div class="panel-hdr">
                    <h2>
                        Ubah <span class="fw-300"><i>Pengumuman</i></span>
                    </h2>
                </div>
                <div class="panel-container show">
                    <div class="panel-content">
                        <form method="post" action="/dashboard/announcement/{{ $announcement->id }}">
                            @csrf
                            @method('put')
                            <div class="form-group">
                                <label class="form-label" for="title">Judul</label>
                                <input type="text" class="form-control" id="title" name="title"
                                    value="{{ old('title', $announcement->title) }}">
                            </div>
                            <div class="mb-3">
                                <label for="body" class="form-label">Isi Pengumuman</label>
                                <input id="body" type="hidden" name="body"
                                    value="{{ old('body', $announcement->body) }}">
                                <trix-editor input="body"></trix-editor>
                                @error('body')
                                <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="form-group">
                                <div class="custom-control custom-switch">
                                    <input type="checkbox" class="custom-control-input" name="status" id="status"
                                        @if($announcement->status === 'aktif') checked @endif>
                                    <label class="custom-control-label" for="status">Status</label>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

</main>
@endsection