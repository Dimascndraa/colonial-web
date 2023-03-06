@extends('admin.inc.layout')
@section('dashboardRoomType','active open')
@section('createRoomType','active')
@section('content')

<main id="js-page-content" role="main" class="page-content">
    <ol class="breadcrumb page-breadcrumb">
        <li class="breadcrumb-item"><a href="javascript:void(0);">{{ $about->name }}</a></li>
        <li class="breadcrumb-item"><a href="{{ url('dashboardRoomType') }}">Fasilitas</a></li>
        <li class="breadcrumb-item active"><a href="javascript:void(0);">Ubah</a></li>
        <li class="position-absolute pos-top pos-right d-none d-sm-block"><span class="js-get-date"></span></li>
    </ol>
    <div class="subheader">
        <h1 class="subheader-title">
            <i class="fal fa-chess-queen"></i> Fasilitas
            <small>
                Menu Ubah Fasilitas
            </small>
        </h1>
    </div>
    <div class="row my-3 ml-1">
        <a href="/dashboard/facility/" class="btn btn-lg btn-outline-primary">
            <span class="fal fa-arrow-left mr-1"></span>
            Kembali
        </a>
    </div>
    <div class="row">
        <div class="col-xl-12">
            <form action="/dashboard/facility/{{ $facility->id }}" method="post" enctype="multipart/form-data">
                @method('put')
                @csrf
                <div id="panel-1" class="panel">
                    <div class="panel-hdr">
                        <h2>
                            Ubah <span class="fw-300"><i>Fasilitas</i></span>
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
                                            placeholder="Masukan Judul Fasilitas"
                                            value="{{ old('name', $facility->name) }}">
                                        @error('name')
                                        <p class="text-danger">{{ $message }}</p>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="row justify-content-center">
                                <div class="col-lg-10">
                                    <div class="form-group mb-3">
                                        <label class="form-label d-block">Ikon</label>
                                        <input type="hidden" name="oldIcon" value="{{ $facility->icon }}">
                                        @if ($facility->icon)
                                        <img src="{{ asset('storage/' . $facility->icon) }}"
                                            class="icon-preview img-fluid mb-3 col-sm-5 d-block">
                                        @else
                                        <img class="icon-preview img-fluid mb-3 col-sm-5 d-block">
                                        @endif
                                        <div class="custom-file">
                                            <input type="file"
                                                class="custom-file-input @error('icon') is-invalid @enderror" id="icon"
                                                name="icon" onchange="previewIcon()">
                                            <label class="custom-file-label" for="icon">Pilih Ikon Fasilitas</label>
                                        </div>
                                        @error('icon')
                                        <p class="text-danger">{{ $message }}</p>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="row justify-content-center">
                                <div class="col-lg-10">
                                    <div class="mb-3">
                                        <label for="descript" class="form-label">Deskripsi</label>
                                        <input id="descript" type="hidden" name="descript"
                                            value="{{ old('descript', $facility->descript) }}">
                                        <trix-editor input="descript"></trix-editor>
                                        @error('descript')
                                        <p class="text-danger">{{ $message }}</p>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="row justify-content-center">
                                <div class="col-lg-10">
                                    <div class="my-3">
                                        <label for="status" class="form-label">Status</label>
                                        <select class="custom-select" name="status" id="status">
                                            <option value="1" {{ old('status', $facility->status) == 1 }}>Aktif</option>
                                            <option value="0" {{ old('status', $facility->status) == 0 }}>Nonaktif
                                            </option>
                                        </select>
                                    </div>
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
    function previewIcon() {
        const icon = document.querySelector('#icon');
        const imgPreview = document.querySelector('.icon-preview')

        imgPreview.style.display = 'block';

        const oFReader = new FileReader();
        oFReader.readAsDataURL(icon.files[0])

        oFReader.onload = function(oFREvent) {
            imgPreview.src = oFREvent.target.result;
        }
    }
</script>