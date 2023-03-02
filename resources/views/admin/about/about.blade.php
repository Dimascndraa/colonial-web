@extends('admin.inc.layout')
@section('dashboardAbout','active open')
@section('editAbout','active')
@section('content')

<main id="js-page-content" role="main" class="page-content">
    <ol class="breadcrumb page-breadcrumb">
        <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">{{ $about->name }}</a></li>
        <li class="breadcrumb-item">Identitas</li>
        <li class="breadcrumb-item active">Edit</li>
        <li class="position-absolute pos-top pos-right d-none d-sm-block"><span class="js-get-date"></span></li>
    </ol>
    <div class="subheader">
        <h1 class="subheader-title">
            <i class="fal fa-info-circle"></i> Identitas
            <small>
                Identitas Hotel {{ $about->name }}
            </small>
        </h1>
    </div>
    <div class="row">
        <div class="col-xl-8">
            <div id="panel-2" class="panel">
                <div class="panel-hdr">
                    <h2>Logo</h2>
                </div>
                <div class="panel-container show">
                    <div class="panel-content">
                        <div class="row">
                            <div class="col-xl-6">
                                <form method="post" action="/dashboard/about/1" enctype="multipart/form-data"
                                    autocomplete="off" class="d-inline">
                                    @method('put')
                                    @csrf
                                    <div class="form-group mb-3">
                                        <label class="form-label">Logo Primary</label>
                                        <input type="hidden" name="oldImage" value="{{ $about->logo_primary }}">
                                        @if ($about->logo_primary)
                                        <img src="{{ asset('storage/' . $about->logo_primary) }}"
                                            class="logo-primary img-fluid mb-3 col-sm-5 d-block">
                                        @else
                                        <img class="logo-primary img-fluid mb-3 col-sm-5 d-block">
                                        @endif
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" id="logo_primary"
                                                name="logo_primary" onchange="logoPrimary()">
                                            <label class="custom-file-label" for="logo_primary">Pilih Logo
                                                Primary</label>
                                        </div>
                                        @error('logo_primary')
                                        <p class="text-danger">{{ $message }}</p>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-success btn-lg">Ubah</button>
                                    </div>
                                </form>
                            </div>

                            <div class="col-xl-6">
                                <form method="post" enctype="multipart/form-data" action="/dashboard/about/1"
                                    autocomplete="off" class="d-inline">
                                    @method('put')
                                    @csrf
                                    <div class="form-group mb-3">
                                        <label class="form-label">Logo Secondary</label>
                                        <input type="hidden" name="oldImage" value="{{ $about->logo_secondary }}">
                                        @if ($about->logo_secondary)
                                        <img src="{{ asset('storage/' . $about->logo_secondary) }}"
                                            class="logo-secondary img-fluid mb-3 col-sm-5 d-block">
                                        @else
                                        <img class="logo-secondary img-fluid mb-3 col-sm-5 d-block">
                                        @endif
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" id="logo_secondary"
                                                name="logo_secondary" onchange="logoSecondary()">
                                            <label class="custom-file-label" for="logo_secondary">Pilih Logo
                                                Secondary</label>
                                        </div>
                                        @error('logo_secondary')
                                        <p class="text-danger">{{ $message }}</p>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-success btn-lg">Ubah</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-4">
            <div id="panel-2" class="panel">
                <div class="panel-hdr">
                    <h2>Icon</h2>
                </div>
                <div class="panel-container show">
                    <div class="panel-content">
                        <form method="post" action="/dashboard/about/1" enctype="multipart/form-data"
                            autocomplete="off">
                            @method('put')
                            @csrf
                            <div class="row">
                                <div class="col-xl-12">
                                    <div class="form-group mb-3">
                                        <label class="form-label">Icon</label>
                                        <input type="hidden" name="oldImage" value="{{ $about->icon }}">
                                        @if ($about->icon)
                                        <img src="{{ asset('storage/' . $about->icon) }}"
                                            class="icon-preview img-fluid mb-3 col-sm-5 d-block">
                                        @else
                                        <img class="icon-preview img-fluid mb-3 col-sm-5 d-block">
                                        @endif
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" id="icon" name="icon"
                                                onchange="iconPreview()">
                                            <label class="custom-file-label" for="icon">Pilih Ikon</label>
                                        </div>
                                        @error('icon')
                                        <p class="text-danger">{{ $message }}</p>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-success btn-lg">Ubah</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-xl-12">
            <div id="panel-2" class="panel">
                <div class="panel-hdr">
                    <h2>About</h2>
                </div>
                <div class="panel-container show">
                    <div class="panel-content">
                        <div class="row">
                            <div class="col-xl-6">
                                <form method="post" enctype="multipart/form-data" action="/dashboard/about/1"
                                    autocomplete="off" class="d-inline">
                                    @method('put')
                                    @csrf
                                    <div class="form-group mb-3">
                                        <label class="form-label">Header Image</label>
                                        <input type="hidden" name="oldImage" value="{{ $about->header_img }}">
                                        @if ($about->header_img)
                                        <img src="{{ asset('storage/' . $about->header_img) }}"
                                            class="header-img img-fluid mb-3 col-sm-5 d-block">
                                        @else
                                        <img class="header-img img-fluid mb-3 col-sm-5 d-block">
                                        @endif
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" id="header_img"
                                                name="header_img" onchange="headerImg()">
                                            <label class="custom-file-label" for="header_img">Pilih gambar
                                                Header</label>
                                        </div>
                                        @error('header_img')
                                        <p class="text-danger">{{ $message }}</p>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-success btn-lg">Ubah</button>
                                    </div>
                                </form>
                            </div>

                            <div class="col-xl-6">
                                <form method="post" action="/dashboard/about/1" enctype="multipart/form-data"
                                    autocomplete="off" class="d-inline">
                                    @method('put')
                                    @csrf
                                    <div class="form-group mb-3">
                                        <label class="form-label">About Image</label>
                                        <input type="hidden" name="oldImage" value="{{ $about->about_img }}">
                                        @if ($about->about_img)
                                        <img src="{{ asset('storage/' . $about->about_img) }}"
                                            class="about-img img-fluid mb-3 col-sm-5 d-block">
                                        @else
                                        <img class="about-img img-fluid mb-3 col-sm-5 d-block">
                                        @endif
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" id="about_img" name="about_img"
                                                onchange="aboutImg()">
                                            <label class="custom-file-label" for="about_img">Pilih Gambar About</label>
                                        </div>
                                        @error('about_img')
                                        <p class="text-danger">{{ $message }}</p>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-success btn-lg">Ubah</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-xl-6">
            <div id="panel-2" class="panel">
                <div class="panel-hdr">
                    <h2>About</h2>
                </div>
                <div class="panel-container show">
                    <div class="panel-content">
                        <form method="post" action="/dashboard/about/1" autocomplete="off">
                            @method('put')
                            @csrf
                            <div class="form-group">
                                <label for="name">Name</label>
                                <input type="text" class="form-control" id="name" name="name"
                                    placeholder="Masukan Nama Hotel" value="{{ old('name', $about->name) }}">
                                @error('name')
                                <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="alias">Alias</label>
                                <input type="text" class="form-control" id="alias" name="alias"
                                    placeholder="Masukan Nama Alias Hotel" value="{{ old('alias', $about->alias) }}">
                                @error('alias')
                                <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="address">Address</label>
                                <input type="text" class="form-control" id="address" name="address"
                                    placeholder="Masukan Alamat Hotel" value="{{ old('address', $about->address) }}">
                                @error('address')
                                <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="email" class="form-control" id="email" name="email"
                                    placeholder="Masukan Email" value="{{ old('email', $about->email) }}">
                                @error('email')
                                <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="telp">Telp</label>
                                <input type="tel" class="form-control" id="telp" name="telp" placeholder="Masukan Telp"
                                    value="{{ old('telp', $about->telp) }}">
                                @error('telp')
                                <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-success btn-lg">Ubah</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-6">
            <div id="panel-2" class="panel">
                <div class="panel-hdr">
                    <h2>Social Media</h2>
                </div>
                <div class="panel-container show">
                    <div class="panel-content">
                        <form method="post" action="/dashboard/socialMedia/1" autocomplete="off">
                            @method('put')
                            @csrf
                            <div class="form-group">
                                <label for="facebook">Facebook</label>
                                <input type="text" class="form-control" id="facebook" name="facebook"
                                    placeholder="Masukan Link Facebook"
                                    value="{{ old('facebook', $socialMedia->facebook) }}">
                                @error('facebook')
                                <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="instagram">Instagram</label>
                                <input type="text" class="form-control" id="instagram" name="instagram"
                                    placeholder="Masukan Link Instagram"
                                    value="{{ old('instagram', $socialMedia->instagram) }}">
                                @error('instagram')
                                <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="whatsapp">Whatsapp</label>
                                <input type="text" class="form-control" id="whatsapp" name="whatsapp"
                                    placeholder="Masukan Nomor Whatsapp"
                                    value="{{ old('whatsapp', $socialMedia->whatsapp) }}">
                                @error('whatsapp')
                                <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="twitter">Twitter</label>
                                <input type="text" class="form-control" id="twitter" name="twitter"
                                    placeholder="Masukan Link Twitter"
                                    value="{{ old('twitter', $socialMedia->twitter) }}">
                                @error('twitter')
                                <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="youtube">Youtube</label>
                                <input type="tel" class="form-control" id="youtube" name="youtube"
                                    placeholder="Masukan Link Youtube"
                                    value="{{ old('youtube', $socialMedia->youtube) }}">
                                @error('youtube')
                                <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-success btn-lg">Ubah</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-xl-12">
            <div id="panel-2" class="panel">
                <div class="panel-hdr">
                    <h2>Deskripsi Singkat</h2>
                </div>
                <div class="panel-container show">
                    <div class="panel-content">
                        <form method="post" action="/dashboard/about/1" autocomplete="off">
                            @method('put')
                            @csrf
                            <div class="form-group">
                                <label for="motto">Motto</label>
                                <input type="text" class="form-control" id="motto" name="motto"
                                    placeholder="Masukan Motto Singkat" value="{{ old('motto', $about->motto) }}">
                                @error('motto')
                                <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="short_descript" class="form-label">Isi Pengumuman</label>
                                <input id="short_descript" type="hidden" name="short_descript"
                                    value="{{ old('short_descript', $about->short_descript) }}">
                                <trix-editor input="short_descript"></trix-editor>
                                @error('short_descript')
                                <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-success btn-lg">Ubah</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-xl-12">
            <div id="panel-2" class="panel">
                <div class="panel-hdr">
                    <h2>Maps</h2>
                </div>
                <div class="panel-container show">
                    <div class="panel-content">

                        <iframe src="{{ $about->google_maps }}" height="450" style="border:0; width: 100%"
                            allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

                        <form method="post" action="/dashboard/about/1" autocomplete="off">
                            @method('put')
                            @csrf
                            <div class="mb-3">
                                <label for="google_maps" class="form-label">Isi Pengumuman</label>
                                <input id="google_maps" type="hidden" name="google_maps"
                                    value="{{ old('google_maps', $about->google_maps) }}">
                                <trix-editor input="google_maps"></trix-editor>
                                @error('google_maps')
                                <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-success btn-lg">Ubah</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection

<script>
    function logoPrimary() {
        const image = document.querySelector('#logo_primary');
        const imgPreview = document.querySelector('.logo-primary')

        imgPreview.style.display = 'block';

        const oFReader = new FileReader();
        oFReader.readAsDataURL(image.files[0])

        oFReader.onload = function(oFREvent) {
            imgPreview.src = oFREvent.target.result;
        }
    }
    
    function logoSecondary() {
        const image = document.querySelector('#logo_secondary');
        const imgPreview = document.querySelector('.logo-secondary')

        imgPreview.style.display = 'block';

        const oFReader = new FileReader();
        oFReader.readAsDataURL(image.files[0])

        oFReader.onload = function(oFREvent) {
            imgPreview.src = oFREvent.target.result;
        }
    }
    
    function iconPreview() {
        const image = document.querySelector('#icon');
        const imgPreview = document.querySelector('.icon-preview')

        imgPreview.style.display = 'block';

        const oFReader = new FileReader();
        oFReader.readAsDataURL(image.files[0])

        oFReader.onload = function(oFREvent) {
            imgPreview.src = oFREvent.target.result;
        }
    }

    function headerImg() {
        const image = document.querySelector('#header_img');
        const imgPreview = document.querySelector('.header-img')

        imgPreview.style.display = 'block';

        const oFReader = new FileReader();
        oFReader.readAsDataURL(image.files[0])

        oFReader.onload = function(oFREvent) {
            imgPreview.src = oFREvent.target.result;
        }
    }

    function aboutImg() {
        const image = document.querySelector('#about_img');
        const imgPreview = document.querySelector('.about-img')

        imgPreview.style.display = 'block';

        const oFReader = new FileReader();
        oFReader.readAsDataURL(image.files[0])

        oFReader.onload = function(oFREvent) {
            imgPreview.src = oFREvent.target.result;
        }
    }
</script>