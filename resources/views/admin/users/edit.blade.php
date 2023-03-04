@extends('admin.inc.layout')
@section('dashboardAdmin', 'active')
@section('showAdmin','active')
@section('content')
<main id="js-page-content" role="main" class="page-content">
    <ol class="breadcrumb page-breadcrumb">
        <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">{{ $about->name }}</a></li>
        <li class="breadcrumb-item active">Admin</li>
        <li class="position-absolute pos-top pos-right d-none d-sm-block"><span class="js-get-date"></span></li>
    </ol>
    <div class="subheader">
        <h1 class="subheader-title">
            <i class="fal fa-user"></i> Admin
            <small>
                Menu Admin
            </small>
        </h1>
    </div>

    <div class="row">
        <div class="col-xl-12">
            <div id="panel-1" class="panel">
                <div class="panel-hdr">
                    <h2>
                        Admin
                    </h2>
                </div>
                <div class="panel-container show">
                    <div class="row justify-content-center">
                        <div class="col-xl-10 my-5">
                            <form id="js-login" method="post" action="{{ url("/dashboard/users/$user->username") }}"
                                enctype="multipart/form-data">
                                <input type="hidden" name="level" value="{{ $user->level }}">
                                <input type="hidden" name="oldImage" value="{{ $user->image }}">
                                @method('put')
                                @csrf
                                <div class=" form-group mb-3">
                                    <label class="form-label">Profile Picture</label>
                                    @if ($user->image)
                                    <img src="{{ asset('storage/' . $user->image) }}"
                                        class="preview-img img-fluid mb-3 col-sm-5 d-block w-25">
                                    @else
                                    <img class="preview-img img-fluid mb-3 col-sm-5 d-block w-25">
                                    @endif
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" id="image" name="image"
                                            onchange="previewImage()">
                                        <label class="custom-file-label" for="customFile">Choose file</label>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-xl-12 form-label" for="fname">Your Full Name</label>
                                    <div class="col-12 pr-1">
                                        <input type="text" name="name" value="{{ old('name', $user->name) }}" required
                                            autofocus class="form-control" placeholder="Full Name" required>
                                        <div class="invalid-feedback">No, you missed this one.</div>
                                        @error('name')
                                        <div class="text-danger ms-3">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-xl-12 form-label" for="fname">Username</label>
                                    <div class="col-12 pr-1">
                                        <input type="text" name="username"
                                            value="{{ old('username', $user->username) }}" required autofocus
                                            class="form-control" placeholder="Username" required>
                                        <div class="invalid-feedback">No, you missed this one.</div>
                                        @error('username')
                                        <div class="text-danger ms-3">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="form-label" for="email">Your Email</label>
                                    <input id="email" class="form-control" type="email" name="email"
                                        value="{{ old('email', $user->email) }}" required placeholder="Email Address">
                                    @error('email')
                                    <div class="text-danger ms-3">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label class="form-label" for="address">Your Address</label>
                                    <input id="address" class="form-control" type="text" name="address"
                                        value="{{ old('address', $user->address) }}" required placeholder="Address">
                                    @error('address')
                                    <div class="text-danger ms-3">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label class="form-label" for="hp">Your Phone Address</label>
                                            <div class="input-group has-validation">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><strong>+62</strong></span>
                                                </div>
                                                <input type="text" name="hp" id="hp" class="form-control" required
                                                    placeholder="Phone Number" value="{{ old('hp', $user->hp) }}">
                                                @error('hp')
                                                <div class="text-danger ms-3">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label class="form-label" for="whatsapp">Whatsapp</label>
                                            <select name="whatsapp" id="whatsapp" class="form-control">
                                                <option value="1" {{ old('whatsapp', $user->whatsapp) == '1' ??
                                                    'selected' }}>Yes</option>
                                                <option value="0" {{ old('whatsapp', $user->whatsapp) == '0' ??
                                                    'selected' }}>No</option>
                                            </select>
                                            @error('address')
                                            <div class="text-danger ms-3">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="row g-5">
                                    <div class="col-md-4 text-right">
                                        <button id="js-login-btn" type="submit"
                                            class="btn btn-block btn-danger btn-lg mt-3"><i class="fa fa-edit"></i>
                                            Ubah</button>
                                    </div>

                                    <div class="col-md-4 text-right">
                                        <button type="button" id="js-login-btn"
                                            class="btn btn-block btn-primary btn-lg mt-3" data-toggle="modal"
                                            data-target="#chagePassword">Ubah Password</button>
                                    </div>
                                </div>
                            </form>

                            <div class="modal fade" id="chagePassword" tabindex="-1" role="dialog" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title">Ubah Password</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <form method="post" action="{{ route('user.password.update') }}">
                                            @method('patch')
                                            @csrf
                                            <div class="modal-body">
                                                <div class="form-group">
                                                    <label for="old_password" class="col-form-label">Password
                                                        Lama:</label>
                                                    <input type="password" placeholder="Masukkan Password Lama"
                                                        class="form-control" name="old_password" id="old_password"
                                                        value="{{ old }}">
                                                </div>
                                                <div class="form-group">
                                                    <label for="password" class="col-form-label">{{ __('Password
                                                        Baru:') }}</label>
                                                    <input type="password" placeholder="Masukkan Password Baru"
                                                        class="form-control @error('password') is-invalid @enderror"
                                                        name="password" id="password" autocomplete="new-password"
                                                        value="{{ old('password') }}">
                                                    @error('password')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                    @enderror
                                                </div>
                                                <div class="form-group">
                                                    <label for="password_confirmation" class="col-form-label">{{
                                                        __('Konfirmasi Password Baru:') }}</label>
                                                    <input id="password_confirmation" type="password"
                                                        class="form-control" name="password_confirmation" required
                                                        autocomplete="new-password"
                                                        value="{{ old('password_confirmation') }}"
                                                        placeholder="Konfirmasi Password Baru">
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

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>

<script>
    function previewImage() {
        const image = document.querySelector('#image');
        const imgPreview = document.querySelector('.preview-img')

        imgPreview.style.display = 'block';

        const oFReader = new FileReader();
        oFReader.readAsDataURL(image.files[0])

        oFReader.onload = function(oFREvent) {
            imgPreview.src = oFREvent.target.result;
        }
    }
</script>
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