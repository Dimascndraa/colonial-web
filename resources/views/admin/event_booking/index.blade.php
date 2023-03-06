@extends('admin.inc.layout')
@section('dashboardBooking', 'active open')
@section('roomBooking', 'active')
@section('content')
    <main id="js-page-content" role="main" class="page-content">
        <ol class="breadcrumb page-breadcrumb">
            <li class="breadcrumb-item"><a href="javascript:void(0);">{{ $about->name }}</a></li>
            <li class="breadcrumb-item"><a href="javascript:void(0);">Booking Ruangan</a></li>
            <li class="position-absolute pos-top pos-right d-none d-sm-block"><span class="js-get-date"></span></li>
        </ol>
        <div class="subheader">
            <h1 class="subheader-title">
                <i class="fal fa-inbox"></i> Booking Ruangan
                <small>
                    Menu Booking Ruangan
                </small>
            </h1>
        </div>

        <div class="row">
            <div class="col-xl-12">
                <div id="panel-1" class="panel">
                    <div class="panel-hdr">
                        <h2>
                            Booking <span class="fw-300"><i>Ruangan</i></span>
                        </h2>
                    </div>
                    <div class="panel-container show">
                        <div class="row m-3">
                            <a href="{{ url('dashboard/room_booking/create') }}" class="btn btn-lg btn-outline-primary">
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
                                        <th>Nomor Ruang</th>
                                        <th>Tipe Kamar</th>
                                        <th>Dibooking oleh</th>
                                        <th>Status</th>
                                        <th>Pembayaran</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($event_bookings as $event_booking)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $event_booking->room->room_number }}</td>
                                            <td>{{ $event_booking->room->room_type->name }}</td>
                                            <td>{{ $room_booking->user->name }} <br /> {{ $room_booking->user->email }}</td>
                                            <td>
                                                @if ($room_booking->status == 'pending')
                                                    <button class="btn btn-success btn-xs btn-fill">Pending</button>
                                                @elseif($room_booking->status == 'checked_in')
                                                    <button class="btn btn-info btn-xs btn-fill">Checked In
                                                    </button>
                                                @elseif($room_booking->status == 'checked_out')
                                                    <button class="btn btn-primary btn-xs btn-fill">Checked Out
                                                    </button>
                                                @elseif($room_booking->status == 'canceled')
                                                    <button class="btn btn-danger btn-xs btn-fill">Canceled
                                                    </button>
                                                @endif
                                            </td>
                                            <td>
                                                @if ($room_booking->payment == 1)
                                                    <button class="btn btn-success btn-xs btn-fill">Paid</button>
                                                @else
                                                    <button class="btn btn-default btn-xs btn-fill">Not Paid
                                                    </button>
                                                @endif
                                            </td>
                                            <td>
                                                <a title="Ubah" class="badge mx-1 badge-success p-2 border-0"
                                                    href="{{ url('admin/room_booking/' . $room_booking->id . '/edit') }}">
                                                    <i class="fal fa-edit"></i>
                                                </a>
                                                <form
                                                    action="{{ url('dashboard/room_types/' . $room_booking_type->id . '/room/' . $room_booking->id) }}"
                                                    method="POST" class="d-inline">
                                                    @method('delete')
                                                    @csrf
                                                    <input type="hidden" name="oldIcon" value="{{ $room_booking->icon }}">
                                                    <button title="Hapus" title="Hapus"
                                                        class="badge mx-1 badge-danger p-2 border-0"
                                                        onclick="return confirm('Anda takin?')">
                                                        <i class="fas fa-trash"></i>
                                                    </button>
                                                </form>
                                                <div class="collapse">
                                                    {!! Form::open(['id' => 'delete-room-booking', 'url' => 'admin/room_booking/' . $room_booking->id]) !!}
                                                    {{ Form::hidden('_method', 'DELETE') }}
                                                    <button title="Hapus" title="Hapus"
                                                        class="badge mx-1 badge-danger p-2 border-0"
                                                        onclick="return confirm('Anda takin?')">
                                                        <i class="fas fa-trash"></i>
                                                    </button>
                                                    {!! Form::close() !!}
                                                </div>
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
        $(document).ready(function() {
            $('#dt-basic-example').dataTable({
                responsive: true,
                lengthChange: false,
                dom: "<'row mb-3'<'col-sm-12 col-md-6 d-flex align-items-center justify-content-start'f><'col-sm-12 col-md-6 d-flex align-items-center justify-content-end'lB>>" +
                    "<'row'<'col-sm-12'tr>>" +
                    "<'row'<'col-sm-12 col-md-5'i><'col-sm-12 col-md-7'p>>",
                buttons: [{
                        extend: 'colvis',
                        text: 'Column Visibility',
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
@extends('admin.inc.layout')
@section('dashboardBooking', 'active open')
@section('roomBooking', 'active')
@section('content')
    <main id="js-page-content" role="main" class="page-content">
        <ol class="breadcrumb page-breadcrumb">
            <li class="breadcrumb-item"><a href="javascript:void(0);">{{ $about->name }}</a></li>
            <li class="breadcrumb-item"><a href="javascript:void(0);">Booking Ruangan</a></li>
            <li class="position-absolute pos-top pos-right d-none d-sm-block"><span class="js-get-date"></span></li>
        </ol>
        <div class="subheader">
            <h1 class="subheader-title">
                <i class="fal fa-inbox"></i> Booking Ruangan
                <small>
                    Menu Booking Ruangan
                </small>
            </h1>
        </div>

        <div class="row">
            <div class="col-xl-12">
                <div id="panel-1" class="panel">
                    <div class="panel-hdr">
                        <h2>
                            Booking <span class="fw-300"><i>Ruangan</i></span>
                        </h2>
                    </div>
                    <div class="panel-container show">
                        <div class="row m-3">
                            <a href="{{ url('dashboard/room_booking/create') }}" class="btn btn-lg btn-outline-primary">
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
                                        <th>Event</th>
                                        <th>Tanggal Event</th>
                                        <th>Nomor Tiket</th>
                                        <th>Dibooking oleh</th>
                                        <th>Status</th>
                                        <th>Pembayaran</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($event_bookings as $event_booking)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $event_booking->event->name }}</td>
                                            <td>{{ $event_booking->event->date }}</td>
                                            <td>{{ $event_booking->number_of_ticket }}</td>
                                            <td>{{ $event_booking->user->name }} <br /> {{ $event_booking->user->email }}
                                            </td>
                                            <td>
                                                @if ($event_booking->status == '1')
                                                    <button class="btn btn-success btn-xs btn-fill">Aktif</button>
                                                @else
                                                    <button class="btn btn-danger btn-xs btn-fill">Dibatalkan
                                                    </button>
                                                @endif
                                            </td>
                                            <td>
                                                @if ($event_booking->payment == 1)
                                                    <button class="btn btn-success btn-xs btn-fill">Dibayar</button>
                                                @else
                                                    <button class="btn btn-default btn-xs btn-fill">Belum Dibayar
                                                    </button>
                                                @endif
                                            </td>
                                            <td>
                                                <a title="Ubah" class="badge mx-1 badge-success p-2 border-0"
                                                    href="{{ url('admin/event_booking/' . $event_booking->id . '/edit') }}">
                                                    <i class="fal fa-edit"></i>
                                                </a>
                                                <div class="collapse">
                                                    {!! Form::open(['id' => 'delete-event-booking', 'url' => 'admin/event_booking/' . $event_booking->id]) !!}
                                                    {{ Form::hidden('_method', 'DELETE') }}
                                                    @csrf
                                                    <button title="Hapus" title="Hapus"
                                                        class="badge mx-1 badge-danger p-2 border-0"
                                                        onclick="return confirm('Anda takin?')">
                                                        <i class="fas fa-trash"></i>
                                                    </button>
                                                    {!! Form::close() !!}
                                                </div>
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
        $(document).ready(function() {
            $('#dt-basic-example').dataTable({
                responsive: true,
                lengthChange: false,
                dom: "<'row mb-3'<'col-sm-12 col-md-6 d-flex align-items-center justify-content-start'f><'col-sm-12 col-md-6 d-flex align-items-center justify-content-end'lB>>" +
                    "<'row'<'col-sm-12'tr>>" +
                    "<'row'<'col-sm-12 col-md-5'i><'col-sm-12 col-md-7'p>>",
                buttons: [{
                        extend: 'colvis',
                        text: 'Column Visibility',
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
