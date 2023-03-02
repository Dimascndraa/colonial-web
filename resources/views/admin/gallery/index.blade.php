@extends('admin.inc.layout')
@section('dashboardGallery','active open')
@section('showGallery','active')
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
        <li class="breadcrumb-item"><a href="javascript:void(0);">{{ $about->name }}</a></li>
        <li class="breadcrumb-item active">Galeri</li>
        <li class="position-absolute pos-top pos-right d-none d-sm-block"><span class="js-get-date"></span></li>
    </ol>
    <div class="subheader">
        <h1 class="subheader-title">
            <i class="fal fa-images"></i> Galeri
            <small>
                Menu Galeri
            </small>
        </h1>
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
                        Detail <span class="fw-300"><i>Gallery</i></span>
                    </h2>
                </div>
                <div class="panel-container show">
                    <div class="row m-3">
                        <a href="/dashboard/gallery/create" class="btn btn-lg btn-outline-primary">
                            <span class="fal fa-plus-circle mr-1"></span>
                            Tambah
                        </a>
                    </div>
                    <div class="panel-content">
                        <!-- datatable start -->
                        <table id="dt-basic-example"
                            class="table table-bordered table-hover table-striped w-100 align-items-center">
                            <thead class="bg-primary-600">
                                <tr>
                                    <th>#</th>
                                    <th>image</th>
                                    <th>caption</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($galleries as $gallery)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td><img src="{{ asset('storage/'.$gallery->image) }}" class="img-thumbnail"
                                            width="300"></td>
                                    <td>{!! $gallery->caption !!}</td>
                                    <td>
                                        <a href="/dashboard/gallery/{{ $gallery->id }}/edit"
                                            class="badge mx-1 bg-warning p-2">
                                            <i class="fas fa-edit"></i>
                                        </a>
                                        <form action="/dashboard/gallery/{{ $gallery->id }}" method="POST"
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
                            <tfoot>
                                <tr>
                                    <th>#</th>
                                    <th>Image</th>
                                    <th>Caption</th>
                                    <th>Aksi</th>
                                </tr>
                            </tfoot>
                        </table>
                        <!-- datatable end -->
                    </div>
                </div>
            </div>
        </div>
    </div>

</main>
@endsection

@section('plugin')
<script src="/js/miscellaneous/lightgallery/lightgallery.bundle.js"></script>
<script src="/js/datagrid/datatables/datatables.bundle.js"></script>
<script src="/js/datagrid/datatables/datatables.export.js"></script>
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
        $initScope.on('onAfterOpen.lg', function(event)
        {
            $('body').addClass("overflow-hidden");
        });
        $initScope.on('onCloseAfter.lg', function(event)
        {
            $('body').removeClass("overflow-hidden");
        });
    }); 
</script>
<script>
    $(document).ready(function()
    {
        $('#dt-basic-example').dataTable(
        {
            responsive: true,
            lengthChange: false,
            dom:
                "<'row mb-3'<'col-sm-12 col-md-6 d-flex align-items-center justify-content-start'f><'col-sm-12 col-md-6 d-flex align-items-center justify-content-end'lB>>" +
                "<'row'<'col-sm-12'tr>>" +
                "<'row'<'col-sm-12 col-md-5'i><'col-sm-12 col-md-7'p>>",
            buttons: [
                {
                    extend:    'colvis',
                    text:      'Column Visibility',
                    titleAttr: 'Col visibility',
                    className: 'mr-sm-3'
                },
                {
                    extend: 'pdfHtml5',
                    text: 'PDF',
                    titleAttr: 'Generate PDF',
                    className: 'btn-outline-danger btn-sm mr-1'
                },
                {
                    extend: 'excelHtml5',
                    text: 'Excel',
                    titleAttr: 'Generate Excel',
                    className: 'btn-outline-success btn-sm mr-1'
                },
                {
                    extend: 'csvHtml5',
                    text: 'CSV',
                    titleAttr: 'Generate CSV',
                    className: 'btn-outline-primary btn-sm mr-1'
                },
                {
                    extend: 'copyHtml5',
                    text: 'Copy',
                    titleAttr: 'Copy to clipboard',
                    className: 'btn-outline-primary btn-sm mr-1'
                },
                {
                    extend: 'print',
                    text: 'Print',
                    titleAttr: 'Print Table',
                    className: 'btn-outline-primary btn-sm'
                }
            ]
        });

    });

</script>

@endsection