@extends('admin.layouts.app')
@section('content')
<script src="https://cdn.ckeditor.com/ckeditor5/35.3.0/decoupled-document/ckeditor.js"></script>
    <style>
    .ck-editor__editable_inline {
        min-height: 400px;
        border: 1px solid gray !important;
    }
    </style>
    <section class="is-title-bar">
        <div class="flex flex-col md:flex-row items-center justify-between space-y-6 md:space-y-0">
            <ul>
                <li>News</li>
                {{-- <li>App Development</li> --}}
            </ul>
            <a href="{{ route('admin.news.index') }}">
                <button class="button red">Back</button>
            </a>
        </div>
    </section>

    <section class="section main-section">
        <div class="card mb-6">
            <header class="card-header">
            </header>
            <div class="card-content">
                <form method="POST" action="{{ route('admin.news.update',['id' => $news->id]) }}" enctype="multipart/form-data">
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
                            <input class="input" type="text" name="title" placeholder="" value="{{$news->title}}">
                        </div>
                    </div>
                    <div class="field">
                        <label class="label">Image</label>
                        <div class="control">
                            <input class="input" type="file" name="image" placeholder="" value="">
                        </div>
                    </div>
                    <div class="field">
                        <label class="label">Description</label>
                            <div id="editor-container">
                                <div id="toolbar-container"></div>
                                <div id="editor"> {!! old('description', $news->description) !!}</div>
                            </div>
                            <textarea name="description" id="hidden-content" style="display:none;"> {{ old('description') }}</textarea>
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

    <script>
        DecoupledEditor
            .create(document.querySelector('#editor'), {
                toolbar: {
                    items: [
                        'heading', '|', 'fontfamily', 'fontsize', 'fontColor', 'fontBackgroundColor','|',
                        'bold', 'italic','subscript', 'superscript', 'code', 'underline', 'strikethrough', 'link', 'alignment','|',
                        'bulletedList', 'numberedList', 'todoList', '|',
                        'outdent', 'indent', '|',
                        'imageUpload', 'blockQuote',  'codeBlock','insertTable', 'mediaEmbed', '|',
                        'undo', 'redo','|', 'selectAll','|', 'accessibilityHelp','Essentials'
                    ]
                },
                language: 'en',
                image: {
                    toolbar: [
                        'imageTextAlternative', 'imageStyle:full', 'imageStyle:side'
                    ]
                },
                table: {
                    contentToolbar: [
                        'tableColumn', 'tableRow', 'mergeTableCells'
                    ]
                }
            })
            .then(editor => {
                const toolbarContainer = document.querySelector('#toolbar-container');
                toolbarContainer.appendChild(editor.ui.view.toolbar.element);
    
                editor.model.document.on('change:data', () => {
                    document.querySelector('#hidden-content').value = editor.getData();
                });
            })
            .catch(error => {
                console.error('There was a problem initializing the editor.', error);
            });
    </script>
@endsection


