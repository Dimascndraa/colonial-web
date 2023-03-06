@extends('admin.inc.layout')
@section('dashboardRoomType', 'active open')
@section('showRoomType', 'active')
@section('content')
<main id="js-page-content" role="main" class="page-content">
    <ol class="breadcrumb page-breadcrumb">
        <li class="breadcrumb-item"><a href="javascript:void(0);">{{ $about->name }}</a></li>
        <li class="breadcrumb-item"><a href="{{ route('dashboardRoomType') }}">Tipe Kamar</a></li>
        <li class="breadcrumb-item action">Image</li>
        <li class="position-absolute pos-top pos-right d-none d-sm-block"><span class="js-get-date"></span></li>
    </ol>
    <div class="subheader">
        <h1 class="subheader-title">
            <i class="fal fa-images"></i> Image
            <small>
                Menu Image
            </small>
        </h1>
    </div>

    <div class="row">
        <div class="col-xl-12">
            <div id="panel-1" class="panel">
                <div class="panel-hdr">
                    <h2>
                        Image <span class="fw-300"><i>Web</i></span>
                    </h2>
                </div>
                <div class="panel-container show">
                    <div class="row m-3">
                        <a href="{{ url('dashboard/room_types/'.$room_type->id.'/image/create') }}"
                            class="btn btn-lg btn-outline-primary">
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
                                    <th>Image</th>
                                    <th>Caption</th>
                                    <th>Is Primary</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($room_type->images as $index => $image)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td><img src="{{ asset('storage/' . $image->image) }}" width="100" alt="Gambar">
                                    </td>
                                    <td>{!! $image->caption !!}</td>
                                    <td>{{ $image->is_primary == 1 ? 'Aktif' : 'Nonaktif' }}</td>
                                    <td>{{ $image->status == 1 ? 'Aktif' : 'Nonaktif' }}</td>
                                    <td>

                                        <a title="Ubah Gambar" class="badge mx-1 badge-success p-2 border-0"
                                            href="{{ url('dashboard/room_types/' . $room_type->id . '/image/' . $image->id . '/edit') }}">
                                            <i class="fal fa-edit"></i>
                                        </a>
                                        <form
                                            action="{{ url('dashboard/room_types/' . $room_type->id . '/image/' . $image->id ) }}"
                                            method="POST" class="d-inline">
                                            @method('delete')
                                            @csrf
                                            <input type="hidden" name="oldIcon" value="{{ $image->icon }}">
                                            <button title="Hapus" title="Hapus Gambar"
                                                class="badge mx-1 badge-danger p-2 border-0"
                                                onclick="return confirm('Anda takin?')">
                                                <i class="fas fa-trash"></i>
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
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
<script src="/js/datagrid/datatables/datatables.bundle.js"></script>
<script src="/js/datagrid/datatables/datatables.export.js"></script>
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