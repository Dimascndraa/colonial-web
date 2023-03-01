@extends('admin.inc.layout')
@section('title','Posts')
@section('posts-dashboard','active')
{{-- @section('menuform_samples','active') --}}
@section('content')
<main id="js-page-content" role="main" class="page-content">
    <ol class="breadcrumb page-breadcrumb">
        <li class="breadcrumb-item"><a href="javascript:void(0);">SmartAdmin</a></li>
        <li class="breadcrumb-item active">Posts</li>
        <li class="position-absolute pos-top pos-right d-none d-sm-block"><span class="js-get-date"></span></li>
    </ol>
    <div class="subheader">
        <h1 class="subheader-title">
            Posts
            <small>
                Default input elements for forms
            </small>
        </h1>
    </div>

    <div class="row my-3 ml-1">
        <a href="/dashboard/posts/" class="btn btn-lg btn-outline-primary">
            <span class="fal fa-arrow-left mr-1"></span>
            Kembali
        </a>
    </div>

    <div class="row">
        <div class="col-xl-12">
            <div id="panel-1" class="panel">
                <div class="panel-hdr">
                    <h2>
                        Ubah <span class="fw-300"><i>Posts</i></span>
                    </h2>
                </div>
                <div class="panel-container show">
                    <div class="panel-content">
                        <form actio="post" enctype="multipart/form-data">
                            @csrf
                            <div class="row justify-content-center">
                                <div class="col-lg-8">
                                    <div class="form-group mb-3">
                                        <label class="form-label d-block">Gambar</label>
                                        <img class="preview-img img-fluid mb-3 col-sm-5 d-block">
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" id="image" name="image"
                                                onchange="previewImage()">
                                            <label class="custom-file-label" for="image">Pilih Gambar Berita</label>
                                        </div>
                                        @error('image')
                                        <p class="text-danger">{{ $message }}</p>
                                        @enderror
                                    </div>

                                    <div class="mb-3">
                                        <label for="title" class="form-label">Judul</label>
                                        <input type="password" class="form-control" id="title" name="title"
                                            placeholder="Masukan Judul Berita">
                                    </div>

                                    <div class="mb-3">
                                        <label for="slug" class="form-label">Slug</label>
                                        <input type="password" class="form-control" id="slug" name="slug"
                                            placeholder="Slug digenerate otomatis" readonly>
                                    </div>

                                    <div class="mb-3">
                                        <label for="category_id" class="form-label">Kategori</label>
                                        <select class="custom-select" aria-label="Default select example">
                                            <option selected disabled>Kategori</option>
                                            <option value="One">One</option>
                                            <option value="Two">Two</option>
                                            <option value="Three">Three</option>
                                        </select>
                                    </div>

                                    <div class="mb-3">
                                        <label for="body" class="form-label">Isi Berita</label>
                                        <input id="body" type="hidden" name="body">
                                        <trix-editor input="body"></trix-editor>
                                        @error('body')
                                        <p class="text-danger">{{ $message }}</p>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <button type="submit" class="btn btn-success btn-lg"><i class="fal fa-edit"></i>
                                            Ubah</button>
                                    </div>
                                </div>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
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
        const imgPreview = document.querySelector('.preview-img')

        imgPreview.style.display = 'block';

        const oFReader = new FileReader();
        oFReader.readAsDataURL(image.files[0])

        oFReader.onload = function(oFREvent) {
            imgPreview.src = oFREvent.target.result;
        }
    }
</script>