@extends('admin.inc.layout')
@section('dashboardBooking', 'active open')
@section('roomBooking', 'active')
@section('content')
@php
function tgl_indo($tanggal)
{
$bulan = array(
1 => 'Januari',
'Februari',
'Maret',
'April',
'Mei',
'Juni',
'Juli',
'Agustus',
'September',
'Oktober',
'November',
'Desember'
);
$pecahkan = explode('-', $tanggal);

// variabel pecahkan 0 = tanggal
// variabel pecahkan 1 = bulan
// variabel pecahkan 2 = tahun

return $pecahkan[2] . ' ' . $bulan[(int)$pecahkan[1]] . ' ' . $pecahkan[0];
}

@endphp

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
                    <div class="panel-content">
                        <!-- datatable start -->
                        <table id="dt-basic-example"
                            class="table table-bordered table-hover table-striped w-100 align-items-center">
                            <thead class="bg-primary-600">
                                <tr>
                                    <th>#</th>
                                    <th>Kamar Nomor</th>
                                    <th>Tipe Kamar</th>
                                    <th>Dibooking oleh</th>
                                    <th>Tanggal Check in</th>
                                    <th>Tanggal Check out</th>
                                    <th>Status</th>
                                    <th>Pembayaran</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($room_bookings as $room_booking)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    @isset($room_booking->room_id)
                                    <td>{{ $room_booking->room->room_number }}</td>
                                    @else
                                    <td>*Silahkan pilih ubah untuk mengisi nomor kamar</td>
                                    @endisset
                                    <td>{{ $room_booking->room_type->name }}</td>
                                    <td>{{ $room_booking->user->name }} <br /> <strong>Email:</strong> {{
                                        $room_booking->user->email }}</td>
                                    <td>{{ tgl_indo($room_booking->arrival_date) }}</td>
                                    <td>{{ tgl_indo($room_booking->departure_date) }}</td>
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
                                    <td style="white-space: nowrap">
                                        <div class="col-md-4 text-right">
                                            <button type="button" id="js-login-btn"
                                                class="badge mx-1 badge-success p-2 border-0" data-toggle="modal"
                                                data-target="#{{ 'a'.$room_booking->id }}">
                                                <i class="fal fa-edit"></i>
                                            </button>
                                            <form action="/dashboard/room_booking/{{ $room_booking->id }}"
                                                class="d-inline" method="post">
                                                @method('delete')
                                                @csrf
                                                <button title="Hapus" title="Hapus"
                                                    class="badge mx-1 badge-danger p-2 border-0"
                                                    onclick="return confirm('Anda takin?')">
                                                    <i class="fas fa-trash"></i>
                                                </button>
                                            </form>
                                        </div>
                                    </td>
                                </tr>
                                <!-- datatable end -->
                                @isset ($room_booking)

                                <div class="modal fade" id="{{ 'a'.$room_booking->id }}" tabindex="-1" role="dialog"
                                    aria-hidden="true">
                                    @php $rooms=$room->where('available', 1)->where('room_type_id',
                                    $room_booking->room_type_id);
                                    @endphp
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title">Ubah Booking</h5>
                                                <button type="button" class="close" data-dismiss="modal"
                                                    aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <form method="post"
                                                action="{{ route('updateRoomBooking', $room_booking->id) }}">
                                                @method('put')
                                                @csrf
                                                <div class="modal-body">
                                                    <div class="form-group">
                                                        <label for="room_id" class="col-form-label">{{ __('Nomor
                                                            Kamar:')
                                                            }}</label>
                                                        <select
                                                            class="custom-select @error('room_id') is-invalid @enderror"
                                                            name="room_id">
                                                            @if ($room_booking->status !== 'pending')
                                                            <option value="{{ $room_booking->room_id }}">{{
                                                                $room_booking->room->room_number
                                                                }}</option>
                                                            @else
                                                            <option selected disabled>Kamar Nomor</option>
                                                            @foreach ($rooms as $room)
                                                            <option value="{{ $room->id }}">{{
                                                                $room->room_number }}</option>
                                                            @endforeach
                                                            @endif
                                                        </select>
                                                        @error('status')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                        @enderror
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="password" class="col-form-label">{{ __('Status
                                                            Booking:')
                                                            }}</label>
                                                        <select
                                                            class="custom-select @error('password') is-invalid @enderror"
                                                            name="status">
                                                            <option selected disabled>Status Booking</option>
                                                            <option value="pending" {{ $room_booking->status ==
                                                                'pending'
                                                                ? 'selected' : '' }}>Pending</option>
                                                            <option value="checked_in" {{ $room_booking->status ==
                                                                'checked_in' ? 'selected' : '' }}>Checked In</option>
                                                            <option value="checked_out" {{ $room_booking->status ==
                                                                'checked_out' ? 'selected' : '' }}>Checked Out</option>
                                                            <option value="cancelled" {{ $room_booking->status ==
                                                                'cancelled'
                                                                ? 'selected' : '' }}>Cancelled</option>
                                                        </select>
                                                        @error('status')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                        @enderror
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="password" class="col-form-label">{{ __('Status
                                                            Pembayaran:')
                                                            }}</label>
                                                        <select
                                                            class="custom-select @error('password') is-invalid @enderror"
                                                            name="payment">
                                                            <option selected disabled>Status Pembayaran</option>
                                                            <option value="1" {{ $room_booking->payment == '1'
                                                                ? 'selected' : '' }}>Dibayar</option>
                                                            <option value="0" {{ $room_booking->payment ==
                                                                '0' ? 'selected' : '' }}>Belum dibayar</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary"
                                                        data-dismiss="modal">Close</button>
                                                    <button type="submit" class="btn btn-primary"> <i
                                                            class="fa fa-edit"></i>
                                                        Ubah</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                @endisset

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