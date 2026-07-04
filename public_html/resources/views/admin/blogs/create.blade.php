{{-- <script src="https://cdn.ckeditor.com/ckeditor5/35.3.0/decoupled-document/ckeditor.js"></script> --}}
{{-- <script src="https://cdn.jsdelivr.net/npm/ckeditor4@4.25.1/ckeditor.min.js"></script> --}}

@extends('admin.layouts.app')
@section('content')
    <style>
        .ck-editor__editable_inline {
            min-height: 400px;
            border: 1px solid gray !important;
        }
    </style>

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
                <form method="POST" action="{{ route('admin.blogs.store') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="field">
                        <label class="label">Author</label>
                        <div class="control">
                            <input class="input" type="text" name="author" placeholder="" value="">
                        </div>
                    </div>
                    <div class="field">
                        <label class="label">Title</label>
                        <div class="control">
                            <input class="input" type="text" name="title" placeholder="" value="">
                        </div>
                    </div>
                    <div class="field">
                        <label class="label">Image</label>
                        <div class="control">
                            <input class="input" type="file" name="image" placeholder="" value="">
                        </div>
                    </div>

                    {{-- <div class="field">
                        <label class="label">Upload image to use in editor</label>
                        <div class="control">
                            <input id="editor-image-upload" type="file" accept="image/*">
                        </div>
                        <div style="margin-top:8px;">
                            <input id="editor-image-url" type="text" readonly
                                style="width:100%; padding:6px; border:1px solid #ccc; display:none;">
                        </div>
                    </div> --}}

                    <div id="editor-container">
                        <div id="toolbar-container"></div>
                        <textarea id="editor" name="description"></textarea>
                    </div>
                    {{-- <textarea name="description" id="hidden-content" style="display:none;"> {{ old('detail') }}</textarea> --}}

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



            const fileInput = document.getElementById('editor-image-upload');
            const urlField = document.getElementById('editor-image-url');

            fileInput.addEventListener('change', function(e) {
                const file = e.target.files[0];
                if (!file) return;

                const formData = new FormData();
                formData.append('editor_image', file);
                // formData.append('name', 'ala');
                console.log(formData)
                fetch("{{ route('admin.blogs.blogsUploadImage') }}", {
                        method: 'POST',
                        headers: {
                            'X-CSRF-TOKEN': '{{ csrf_token() }}'
                        },
                        body: formData
                    })
                    .then(res => res.json())
                    .then(data => {
                        if (data.url) {
                            urlField.value = data.url;
                            urlField.style.display = 'block';
                            urlField.select();
                        } else {
                            alert('Upload failed: no URL returned.');
                        }
                    })
                    .catch(err => {
                        console.error(err);
                        alert('Upload failed.');
                    });
            });
        });
    </script>
@endsection


<script>
    // DecoupledEditor
    //     .create(document.querySelector('#editor'), {
    //         toolbar: {
    //             items: [
    //                 'heading', '|', 'fontfamily', 'fontsize', 'fontColor', 'fontBackgroundColor', '|',
    //                 'bold', 'italic', 'subscript', 'superscript', 'code', 'underline', 'strikethrough', 'link',
    //                 'alignment', '|',
    //                 'bulletedList', 'numberedList', 'todoList', '|',
    //                 'outdent', 'indent', '|',
    //                 'imageUpload', 'blockQuote', 'codeBlock', 'insertTable', 'mediaEmbed', '|',
    //                 'undo', 'redo', '|', 'selectAll', '|', 'accessibilityHelp', 'Essentials'
    //             ]
    //         },
    //         language: 'en',
    //         image: {
    //             toolbar: [
    //                 'imageTextAlternative', 'imageStyle:full', 'imageStyle:side'
    //             ]
    //         },
    //         table: {
    //             contentToolbar: [
    //                 'tableColumn', 'tableRow', 'mergeTableCells'
    //             ]
    //         }
    //     })
    //     .then(editor => {
    //         const toolbarContainer = document.querySelector('#toolbar-container');
    //         toolbarContainer.appendChild(editor.ui.view.toolbar.element);

    //         editor.model.document.on('change:data', () => {
    //             document.querySelector('#hidden-content').value = editor.getData();
    //         });
    //     })
    //     .catch(error => {
    //         console.error('There was a problem initializing the editor.', error);
    //     });
</script>
