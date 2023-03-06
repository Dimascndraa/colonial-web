{{-- @dd($image) --}}
@extends('admin.inc.layout')
@section('dashboardRoomType','active open')
@section('createRoomType','active')
@section('content')

<main id="js-page-content" role="main" class="page-content">
    <ol class="breadcrumb page-breadcrumb">
        <li class="breadcrumb-item"><a href="javascript:void(0);">{{ $about->name }}</a></li>
        <li class="breadcrumb-item"><a href="{{ url('dashboardRoomType') }}">Tipe Kamar</a></li>
        <li class="breadcrumb-item active"><a href="javascript:void(0);">Gambar</a></li>
        <li class="breadcrumb-item active"><a href="javascript:void(0);">Ubah</a></li>
        <li class="position-absolute pos-top pos-right d-none d-sm-block"><span class="js-get-date"></span></li>
    </ol>
    <div class="subheader">
        <h1 class="subheader-title">
            <i class="fal fa-chess-queen"></i> Tipe Kamar
            <small>
                Menu Ubah Tipe Kamar
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
            {{ Form::open(array('url' => 'dashboard/room_types/'.$room_type->id.'/image/'. $image->id .'/edit', 'id' =>
            'room_type-add-form',
            'files' => true)) }}
            {{ Form::hidden('_method', 'PUT') }}
            @csrf
            <div id="panel-1" class="panel">
                <div class="panel-hdr">
                    <h2>
                        Ubah Gambar <span class="fw-300"><i>{{ $room_type->name }}</i></span>
                    </h2>
                </div>
                <div class="panel-container show">
                    <div class="panel-show">
                        <div class="row justify-content-center">
                            <div class="col-lg-10">
                                <div class="form-group my-3">
                                    <label class="form-label d-block">Gambar</label>
                                    @if ($image->image)
                                    <img src="{{ asset('storage/' . $image->image) }}"
                                        class="image-preview img-fluid mb-3 col-sm-5 d-block">
                                    @else
                                    <img class="image-preview img-fluid mb-3 col-sm-5 d-block">
                                    @endif
                                    <div class="custom-file">
                                        <input type="file"
                                            class="custom-file-input @error('image') is-invalid @enderror" id="image"
                                            name="image" onchange="previewImage()">
                                        <label class="custom-file-label" for="image">Pilih Gambar Berita</label>
                                    </div>
                                    @error('image')
                                    <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="row justify-content-center">
                            <div class="col-lg-5">
                                <div class="mb-3">
                                    <label for="caption" class="form-label">Caption</label>
                                    <input id="caption" type="text"
                                        class="form-control @error('caption') is-invalid @enderror" name="caption"
                                        placeholder="Masukan Caption" value="{{ old('caption', $image->caption) }}">
                                </div>
                            </div>
                            <div class="col-lg-5">
                                <label for="room_service" class="form-label">Is Primary</label>
                                <select class="custom-select" name="is_primary">
                                    <option value="1" {{ old('is_primary', $image->is_primary)=='1' ?? 'selected'
                                        }}>Ya</option>
                                    <option value="0" {{ old('is_primary', $image->is_primary)=='0' ?? 'selected'
                                        }}>Tidak
                                    </option>
                                </select>
                            </div>
                        </div>
                        <div class="row justify-content-center">
                            <div class="col-lg-10">
                                <label for="room_service" class="form-label">Status</label>
                                <select class="custom-select" name="status">
                                    <option value="1" {{ old('status', $image->status)=='1' ?? 'selected' }}>Aktif
                                    </option>
                                    <option value="0" {{ old('status', $image->status)=='0' ?? 'selected' }}>Nonaktif
                                    </option>
                                </select>
                            </div>
                        </div>
                        <div class="row justify-content-center my-4">
                            <div class="col-lg-10">
                                <div class="form-group">
                                    <button type="submit" class="btn btn-success btn-lg"><i class="fal fa-edit"></i>
                                        Ubah</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            {!! Form::close() !!}
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
</script>