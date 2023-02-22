@extends('admin.inc.layout')
@section('title','Gallery')
@section('gallery-dashboard','active')
{{-- @section('menuform_samples','active') --}}
@section('content')

<style>
    .gallery {
        transition: ease 1s;
        overflow: visible;
    }

    .gallery:hover .tombol {
        transform: translateX(-20px)
    }

    .tombol {
        position: absolute;
        background: rgba(193, 2, 2, 0.5);
        height: 100%;
    }
</style>

<main id="js-page-content" role="main" class="page-content">
    <ol class="breadcrumb page-breadcrumb">
        <li class="breadcrumb-item"><a href="javascript:void(0);">SmartAdmin</a></li>
        <li class="breadcrumb-item active">Gallery</li>
        <li class="position-absolute pos-top pos-right d-none d-sm-block"><span class="js-get-date"></span></li>
    </ol>
    <div class="subheader">
        <h1 class="subheader-title">
            Galleries
            <small>
                Default input elements for forms
            </small>
        </h1>
    </div>

    <div class="row my-3 ml-1">
        <a href="/dashboard/gallery/create" class="btn btn-lg btn-outline-primary">
            <span class="fal fa-plus-circle mr-1"></span>
            Tambah
        </a>
    </div>

    <div class="row">
        <div class="col-xl-12">
            <div id="panel-1" class="panel">
                <div class="panel-hdr">
                    <h2>
                        Galeri <span class="fw-300"><i>Preview</i></span>
                    </h2>
                </div>
                <div class="panel-container show">
                    <div class="panel-content">
                        <div id="js-lightgallery">
                            @foreach ($galleries as $gallery)
                            <a href="{{ asset('storage/' . $gallery->image) }}" data-sub-html="{{ $gallery->caption }}">
                                <img class="img-responsive" src="{{ asset('storage/' . $gallery->image) }}" alt="image">
                            </a>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-xl-12">
            <div id="panel-1" class="panel">
                <div class="panel-hdr">
                    <h2>
                        Detail <span class="fw-300"><i>Galeri</i></span>
                    </h2>
                </div>
                <div class="panel-container show">
                    <div class="panel-content">
                        <table id="datatab" class="table table-striped table-bordered" style="width:100%;">
                            <thead>
                                <tr>
                                    <th class="scope">#</th>
                                    <th class="scope">Nama Dokter</th>
                                    <th class="scope">Jabatan</th>
                                    <th class="scope">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($galleries as $gallery)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $gallery->image }}</td>
                                    <td>{!! $gallery->caption !!}</td>
                                    <td>
                                        <a href="/dashboard/dokter/{{ $gallery->id }}" class="badge mx-1 bg-info p-2">
                                            <i class="fas fa-eye"></i>
                                        </a>
                                        <a href="/dashboard/dokter/{{ $gallery->id }}/edit"
                                            class="badge mx-1 bg-warning p-2">
                                            <i class="fas fa-edit"></i>
                                        </a>
                                        <form action="/dashboard/dokter/{{ $gallery->id }}" method="POST"
                                            class="d-inline">
                                            @method('delete')
                                            @csrf
                                            <input type="hidden" name="oldImage" value="{{ $gallery->image }}">
                                            <button class="badge mx-1 badge-danger p-2 border-0"
                                                onclick="return confirm('Anda takin?')">
                                                <i class="fas fa-trash"></i>
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

</main>
@endsection
{{-- <form style="display: inline;" action="/dashboard/gallery/{{ $gallery->id }}">
    @csrf
    @method('delete')
    <input type="hidden" name="oldImage">
    <button class="btn" style="z-index: 999; border-radius: 0; background: rgb(238, 0, 0, .6); color: #fff">
        <i class="fal fa-trash"></i>
    </button>
</form> --}}
@section('plugin')
<!-- lightgallery bundle: 
	 DOC: we added justifiedGallery for responsive thumbnail view and mousewheel.js for controlling next/prev using mousewheel  
		+ jquery.justifiedGallery.js (addon)
		+ jquery.mousewheel.js (addon)
		+ lightgallery.js (core)
		+ lg-autoplay.js (extension)
		+ lg-fullscreen.js (extension)
		+ lg-hash.js (extension)
		+ lg-pager.js (extension)
		+ lg-thumbnail.js (extension)
		+ lg-zoom.js (extension) -->
<script src="/js/miscellaneous/lightgallery/lightgallery.bundle.js"></script>
<script>
    $(document).ready(function()
            {
                var $initScope = $('#js-lightgallery');
                if ($initScope.length)
                {
                    $initScope.justifiedGallery(
                        {
                            border: -1,
                        rowHeight: 150,
                        margins: 8,
                        waitThumbnailsLoad: true,
                        randomize: false,
                    }).on('jg.complete', function()
                    {
                        $initScope.lightGallery(
                            {
                                thumbnail: true,
                                animateThumb: true,
                                showThumbByDefault: true,
                            });
                        });
                };
                // $initScope.on('onAfterOpen.lg', function(event)
                // {
                //     $('body').addClass("overflow-hidden");
                // });
                // $initScope.on('onCloseAfter.lg', function(event)
                // {
                //     $('body').removeClass("overflow-hidden");
                // });
            });
            
</script>
@endsection