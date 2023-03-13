@extends('admin.inc.layout')
@section('dashboardRoomType','active open')
@section('createRoomType','active')
@section('content')

<main id="js-page-content" role="main" class="page-content">
    <ol class="breadcrumb page-breadcrumb">
        <li class="breadcrumb-item"><a href="javascript:void(0);">{{ $about->name }}</a></li>
        <li class="breadcrumb-item"><a href="{{ url('dashboardRoomType') }}">Tipe Kamar</a></li>
        <li class="breadcrumb-item active"><a href="javascript:void(0);">Tambah</a></li>
        <li class="position-absolute pos-top pos-right d-none d-sm-block"><span class="js-get-date"></span></li>
    </ol>
    <div class="subheader">
        <h1 class="subheader-title">
            <i class="fal fa-chess-queen"></i> Tipe Kamar
            <small>
                Menu Tambah Tipe Kamar
            </small>
        </h1>
    </div>
    <div class="row my-3 ml-1">
        <a href="/dashboard/room_types/" class="btn btn-lg btn-outline-primary">
            <span class="fal fa-arrow-left mr-1"></span>
            Kembali
        </a>
    </div>
    <div class="row">
        <div class="col-xl-12">
            <form action="/dashboard/room_types" method="post" enctype="multipart/form-data">
                @csrf
                <div id="panel-1" class="panel">
                    <div class="panel-hdr">
                        <h2>
                            Tambah <span class="fw-300"><i>Tipe Kamar</i></span>
                        </h2>
                    </div>
                    <div class="panel-container show">
                        <div class="panel-content">
                            <div class="row justify-content-center">
                                <div class="col-lg-10">
                                    <div class="mb-3">
                                        <label for="name" class="form-label">Nama</label>
                                        <input id="name" type="text"
                                            class="form-control @error('name') is-invalid @enderror" name="name"
                                            placeholder="Masukan Nama Tipe Kamar" value="{{ old('name') }}">
                                        @error('name')
                                        <p class="text-danger">{{ $message }}</p>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="row justify-content-center">
                                <div class="col-lg-5">
                                    <div class="mb-3">
                                        <label for="cost_per_day" class="form-label">Harga Per Malam</label>
                                        <input id="cost_per_day" type="text"
                                            class="form-control @error('cost_per_day') is-invalid @enderror"
                                            name="cost_per_day" placeholder="Masukan Harga Permalam"
                                            value="{{ old('cost_per_day') }}">
                                        @error('cost_per_day')
                                        <p class="text-danger">{{ $message }}</p>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-lg-5">
                                    <label for="size" class="form-label">Ukuran Kamar</label>
                                    <div class="input-group mb-3">
                                        <input id="size" type="number"
                                            class="form-control @error('size') is-invalid @enderror" name="size"
                                            value="{{ old('size') }}"
                                            placeholder="Masukan Ukuran Kamar dalam satuan Meter">
                                        <div class="input-group-append">
                                            <span class="input-group-text" id="basic-addon2">Meter</span>
                                        </div>
                                    </div>
                                    @error('size')
                                    <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>
                            <div class="row justify-content-center mb-3">
                                <div class="col-lg-10">
                                    <div class="form-group">
                                        <label class="form-label" for="discount_percentage">Discount:</label>
                                        <div class="input-group mb-3">
                                            <input readonly type="number" class="form-control" placeholder="Diskon (%)"
                                                name="discount_percentage" id="discount_percentage"
                                                value="{{ old('discount_percentage') }}" min="1" max="100">
                                            <div class="input-group-append">
                                                <span class="input-group-text"
                                                    id="basic-addon2"><strong>%</strong></span>
                                            </div>
                                        </div>
                                        @error('discount_percentage')
                                        <p class="text-danger">{{ $message }}</p>
                                        @enderror
                                        <input type="range" class="form-control-range" id="diskon" min="0" max="100"
                                            oninput="tampil()" value="{{ old('discount_percentage', 0) }}">
                                    </div>
                                </div>
                            </div>
                            <div class="row justify-content-center mb-3">
                                <div class="col-lg-5">
                                    <div class="form-group">
                                        <label class="form-label" for="max_adult">Max. Dewasa:</label>
                                        <input type="number" class="form-control" placeholder="Batas Maksimal Dewasa"
                                            name="max_adult" id="max_adult" min="1">
                                        @error('max_adult')
                                        <p class="text-danger">{{ $message }}</p>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-lg-5">
                                    <div class="form-group">
                                        <label class="form-label" for="max_child">Max. Anak-Anak:</label>
                                        <input type="number" class="form-control" placeholder="Batas Maksimal Dewasa"
                                            name="max_child" id="max_child" min="1">
                                        @error('max_child')
                                        <p class="text-danger">{{ $message }}</p>
                                        @enderror
                                    </div>
                                </div>
                            </div>

                            <div class="row justify-content-center">
                                <div class="col-lg-10">
                                    <div class="mb-3">
                                        <label for="descript" class="form-label">Deskripsi</label>
                                        <input id="descript" type="hidden" name="descript">
                                        <trix-editor input="descript"></trix-editor>
                                        @error('descript')
                                        <p class="text-danger">{{ $message }}</p>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="row justify-content-center">
                                <div class="col-lg-10">
                                    <label for="facility" class="form-label">Fasilitas</label>
                                    <div class="row">
                                        @forelse($facilities as $facility)
                                        <div class="col-sm-4 mt-2">
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" id="{{$facility->id}}"
                                                    name="facility[{{$facility->id}}]" class="custom-control-input"
                                                    value="{{ $facility->name }}">
                                                <label class="custom-control-label" for="{{$facility->id}}">{{
                                                    $facility->name
                                                    }}</label>
                                            </div>
                                        </div>
                                        @empty
                                        <div class="col-lg-12">
                                            <input type="text" value="Belum ada Fasilitas di Menu Fasilitas" disabled
                                                class="form-control" />
                                        </div>
                                        @endforelse
                                    </div>
                                </div>
                            </div>
                            <div class="row justify-content-center">
                                <div class="col-lg-10">
                                    <div class="my-3">
                                        <label for="room_service" class="form-label">Layanan Kamar</label>
                                        <select class="custom-select" name="room_service">
                                            <option value="1">Tersedia</option>
                                            <option value="0">Tidak Tersedia</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row justify-content-center">
                                <div class="col-lg-10">
                                    <div class="my-3">
                                        <label for="room_service" class="form-label">Status</label>
                                        <select class="custom-select" name="status">
                                            <option value="1" {{ old('status')=='1' ?? 'selected' }}>Aktif</option>
                                            <option value="0" {{ old('status')=='0' ?? 'selected' }}>Nonaktif</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row justify-content-center my-4">
                                <div class="col-lg-10">
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-success btn-lg"><i
                                                class="fal fa-plus-circle"></i>
                                            Tambah</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</main>

@endsection
@section('plugin')
<script src="/js/formplugins/summernote/summernote.js"></script>
<script>
    var autoSave = $('#autoSave');
            var interval;
            var timer = function()
            {
                interval = setInterval(function()
                {
                    //start slide...
                    if (autoSave.prop('checked'))
                        saveToLocal();

                    clearInterval(interval);
                }, 3000);
            };

            //save
            var saveToLocal = function()
            {
                localStorage.setItem('summernoteData', $('#saveToLocal').summernote("code"));
                console.log("saved");
            }

            //delete
            var removeFromLocal = function()
            {
                localStorage.removeItem("summernoteData");
                $('#saveToLocal').summernote('reset');
            }

            $(document).ready(function()
            {
                //init default
                $('.js-summernote').summernote(
                {
                    height: 200,
                    tabsize: 2,
                    placeholder: "Type here...",
                    dialogsFade: true,
                    toolbar: [
                        ['style', ['style']],
                        ['font', ['strikethrough', 'superscript', 'subscript']],
                        ['font', ['bold', 'italic', 'underline', 'clear']],
                        ['fontsize', ['fontsize']],
                        ['fontname', ['fontname']],
                        ['color', ['color']],
                        ['para', ['ul', 'ol', 'paragraph']],
                        ['height', ['height']]
                        ['table', ['table']],
                        ['insert', ['link', 'picture', 'video']],
                        ['view', ['fullscreen', 'codeview', 'help']]
                    ],
                    callbacks:
                    {
                        //restore from localStorage
                        onInit: function(e)
                        {
                            $('.js-summernote').summernote("code", localStorage.getItem("summernoteData"));
                        },
                        onChange: function(contents, $editable)
                        {
                            clearInterval(interval);
                            timer();
                        }
                    }
                });

                //load emojis
                $.ajax(
                {
                    url: 'https://api.github.com/emojis',
                    async: false
                }).then(function(data)
                {
                    window.emojis = Object.keys(data);
                    window.emojiUrls = data;
                });

                //init emoji example
                $(".js-hint2emoji").summernote(
                {
                    height: 100,
                    toolbar: false,
                    placeholder: 'type starting with : and any alphabet',
                    hint:
                    {
                        match: /:([\-+\w]+)$/,
                        search: function(keyword, callback)
                        {
                            callback($.grep(emojis, function(item)
                            {
                                return item.indexOf(keyword) === 0;
                            }));
                        },
                        template: function(item)
                        {
                            var content = emojiUrls[item];
                            return '<img src="' + content + '" width="20" /> :' + item + ':';
                        },
                        content: function(item)
                        {
                            var url = emojiUrls[item];
                            if (url)
                            {
                                return $('<img />').attr('src', url).css('width', 20)[0];
                            }
                            return '';
                        }
                    }
                });

                //init mentions example
                $(".js-hint2mention").summernote(
                {
                    height: 100,
                    toolbar: false,
                    placeholder: "type starting with @",
                    hint:
                    {
                        mentions: ['jayden', 'sam', 'alvin', 'david'],
                        match: /\B@(\w*)$/,
                        search: function(keyword, callback)
                        {
                            callback($.grep(this.mentions, function(item)
                            {
                                return item.indexOf(keyword) == 0;
                            }));
                        },
                        content: function(item)
                        {
                            return '@' + item;
                        }
                    }
                });

            });

</script>
@endsection
<script>
    function previewImage() {
        const image = document.querySelector('#image');
        const imgPreview = document.querySelector('.image-preview')

        imgPreview.style.display = 'block';

        const oFReader = new FileReader();
        oFReader.readAsDataURL(image.files[0])

        oFReader.onload = function(oFREvent) {
            imgPreview.src = oFREvent.target.result;
        }
    }
    function tampil() {
        let diskon = document.getElementById('diskon').value;
        let input = document.getElementById('discount_percentage').value=diskon;
        // console.log(diskon)
        
    }
</script>