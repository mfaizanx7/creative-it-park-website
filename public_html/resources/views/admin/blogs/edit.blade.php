@extends('admin.layouts.app')
@section('content')
    {{-- <script src="https://cdn.ckeditor.com/ckeditor5/35.3.0/decoupled-document/ckeditor.js"></script> --}}
    {{-- <style>
    .ck-editor__editable_inline {
        min-height: 400px;
        border: 1px solid gray !important;
    }
    </style> --}}
    <section class="is-title-bar">
        <div class="flex flex-col md:flex-row items-center justify-between space-y-6 md:space-y-0">
            <ul>
                <li>Blogs</li>
                {{-- <li>App Development</li> --}}
            </ul>
            <a href="{{ route('admin.blogs.index') }}">
                <button class="button red">Back</button>
            </a>
        </div>
    </section>

    <section class="section main-section">
        <div class="card mb-6">
            <header class="card-header">
            </header>
            <div class="card-content">
                <form method="POST" action="{{ route('admin.blogs.update', ['id' => $blogs->id]) }}"
                    enctype="multipart/form-data">
                    @csrf
                    <div class="field">
                        <label class="label">Author</label>
                        <div class="control">
                            <input class="input" type="text" name="author" placeholder="" value="{{ $blogs->author }}">
                        </div>
                    </div>
                    <div class="field">
                        <label class="label">Title</label>
                        <div class="control">
                            <input class="input" type="text" name="title" placeholder="" value="{{ $blogs->title }}">
                        </div>
                    </div>
                    <div class="field">
                        <label class="label">Image</label>
                        <div class="control">
                            <input class="input" type="file" name="image" placeholder="" value="">
                        </div>
                    </div>

                    <div id="editor-container">
                        <div id="toolbar-container"></div>
                        <textarea id="editor" name="description">{{ old('description', $blogs->description) }}</textarea>
                    </div>

                    <hr>
                    <div class="field grouped">
                        <div class="control">
                            <button type="submit" class="button green">
                                Submit
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/ckeditor/4.9.2/ckeditor.js"
        integrity="sha512-OF6VwfoBrM/wE3gt0I/lTh1ElROdq3etwAquhEm2YI45Um4ird+0ZFX1IwuBDBRufdXBuYoBb0mqXrmUA2VnOA=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    {{-- <script src="https://cdn.ckeditor.com/4.16.2/standard/ckeditor.js"></script> --}}
    <script>
        document.addEventListener("DOMContentLoaded", function() {

            //CKEDITOR.replace('editor');


            CKEDITOR.replace('editor', {

                height: 300,

                language: 'en', // Set a valid language code

                filebrowserUploadUrl: "{{ route('admin.uploadMediackeditor', ['_token' => csrf_token()]) }}",

                filebrowserUploadMethod: 'form',

                removeButtons: 'Source,About,PasteFromWord,PasteText,Scayt,RemoveFormat,Strike,Subscript,Superscript',

                toolbar: [

                    ['Bold', 'Italic', 'Underline', 'Link', 'Unlink', 'Anchor'],

                    ['JustifyLeft', 'JustifyCenter', 'JustifyRight', 'JustifyBlock'],

                    ['NumberedList', 'BulletedList', 'Outdent', 'Indent', 'Blockquote'],

                    ['Maximize', 'Image', 'Table', 'Format', 'Style', 'Font', 'FontSize', 'TextColor',

                        'BGColor'

                    ]

                ]

            });

        })
    </script>
@endsection

<script></script>
