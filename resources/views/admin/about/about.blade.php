@extends('admin.inc.layout')
@section('title','About')
@section('about-dashboard','active')
{{-- @section('menuform_samples','active') --}}
@section('content')
    <main id="js-page-content" role="main" class="page-content">
        <ol class="breadcrumb page-breadcrumb">
            <li class="breadcrumb-item"><a href="javascript:void(0);">SmartAdmin</a></li>
            <li class="breadcrumb-item active">About</li>
            <li class="position-absolute pos-top pos-right d-none d-sm-block"><span class="js-get-date"></span></li>
        </ol>
        <div class="subheader">
            <h1 class="subheader-title"> 
                About
                <small>
                    Default input elements for forms
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
                                    <form method="post" action="/dashboard/about/1" enctype="multipart/form-data" autocomplete="off" class="d-inline">
                                        @method('put')
                                        @csrf
                                        <div class="form-group mb-3">
                                            <label class="form-label">Logo Primary</label>
                                            @if ($about->logo_primary)
                                                <img src="{{ asset('storage/' . $about->logo_primary) }}" class="logo-primary img-fluid mb-3 col-sm-5 d-block">
                                            @else
                                                <img class="logo-primary img-fluid mb-3 col-sm-5 d-block">
                                            @endif
                                            <div class="custom-file">
                                                <input type="file" class="custom-file-input" id="logo_primary" name="logo_primary" onchange="logoPrimary()">
                                                <label class="custom-file-label" for="logo_primary">Pilih Logo Primary</label>
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
                                    <form method="post" enctype="multipart/form-data" action="/dashboard/about/1" autocomplete="off" class="d-inline">
                                    @method('put')
                                    @csrf
                                        <div class="form-group mb-3">
                                            <label class="form-label">Logo Secondary</label>
                                            @if ($about->logo_secondary)
                                                <img src="{{ asset('storage/' . $about->logo_secondary) }}" class="logo-secondary img-fluid mb-3 col-sm-5 d-block">
                                            @else
                                                <img class="logo-secondary img-fluid mb-3 col-sm-5 d-block">
                                            @endif
                                            <div class="custom-file">
                                                <input type="file" class="custom-file-input" id="logo_secondary" name="logo_secondary" onchange="logoSecondary()">
                                                <label class="custom-file-label" for="logo_secondary">Pilih Logo Secondary</label>
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
                            <form method="post" action="/dashboard/about/1" enctype="multipart/form-data" autocomplete="off">
                                @method('put')
                                @csrf
                                <div class="row">
                                    <div class="col-xl-12">
                                        <div class="form-group mb-3">
                                            <label class="form-label">Icon</label>
                                            @if ($about->icon)
                                                <img src="{{ asset('storage/' . $about->icon) }}" class="icon-preview img-fluid mb-3 col-sm-5 d-block">
                                            @else
                                                <img class="icon-preview img-fluid mb-3 col-sm-5 d-block">
                                            @endif
                                            <div class="custom-file">
                                                <input type="file" class="custom-file-input" id="icon" name="icon" onchange="iconPreview()">
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
                                    <input type="text" class="form-control" id="name" name="name" placeholder="Masukan Nama Hotel" value="{{ old('name', $about->name) }}">
                                    @error('name')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="alias">Alias</label>
                                    <input type="text" class="form-control" id="alias" name="alias" placeholder="Masukan Nama Alias Hotel" value="{{ old('alias', $about->alias) }}">
                                    @error('alias')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="address">Address</label>
                                    <input type="text" class="form-control" id="address" name="address" placeholder="Masukan Alamat Hotel" value="{{ old('address', $about->address) }}">
                                    @error('address')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <input type="email" class="form-control" id="email" name="email" placeholder="Masukan Email" value="{{ old('email', $about->email) }}">
                                    @error('email')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="telp">Telp</label>
                                    <input type="tel" class="form-control" id="telp" name="telp" placeholder="Masukan Telp" value="{{ old('telp', $about->telp) }}">
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
                                    <input type="text" class="form-control" id="facebook" name="facebook" placeholder="Masukan Link Facebook" value="{{ old('facebook', $socialMedia->facebook) }}">
                                    @error('facebook')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="instagram">Instagram</label>
                                    <input type="text" class="form-control" id="instagram" name="instagram" placeholder="Masukan Link Instagram" value="{{ old('instagram', $socialMedia->instagram) }}">
                                    @error('instagram')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="whatsapp">Whatsapp</label>
                                    <input type="text" class="form-control" id="whatsapp" name="whatsapp" placeholder="Masukan Nomor Whatsapp" value="{{ old('whatsapp', $socialMedia->whatsapp) }}">
                                    @error('whatsapp')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="twitter">Twitter</label>
                                    <input type="text" class="form-control" id="twitter" name="twitter" placeholder="Masukan Link Twitter" value="{{ old('twitter', $socialMedia->twitter) }}">
                                    @error('twitter')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="youtube">Youtube</label>
                                    <input type="tel" class="form-control" id="youtube" name="youtube" placeholder="Masukan Link Youtube" value="{{ old('youtube', $socialMedia->youtube) }}">
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
                        <h2>Maps</h2>
                    </div>
                    <div class="panel-container show">
                        <div class="panel-content">

                            <iframe src="{{ $about->google_maps }}" height="450" style="border:0; width: 100%" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                            
                            <form method="post" action="/dashboard/about/1" autocomplete="off">
                                @method('put')
                                @csrf
                                <div class="form-group">
                                    <label class="form-label" for="google_maps">Google Maps</label>
                                    <textarea class="form-control" id="google_maps" name="google_maps" rows="5">{{ $about->google_maps }}</textarea>
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
</script>