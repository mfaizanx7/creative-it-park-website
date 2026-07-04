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
                <li>Services</li>
                <li>Cloud computing</li>
            </ul>
            <a href="{{ route('admin.cloud.index') }}">
                <button class="button red">Back</button>
            </a>
        </div>
    </section>

    <section class="section main-section">
        <div class="card mb-6">
            <header class="card-header">
            </header>
            <div class="card-content">
                <form method="POST" action="{{ route('admin.cloud.store') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="field">
                        <label class="label">Heading</label>
                        <div class="control">
                            <input class="input" type="text" name="heading" placeholder="" value="">
                        </div>
                    </div>
                    <div class="field">
                        <label class="label">Type</label>
                        <div class="control">
                            <div class="select">
                                <select id="link_type_drop_downs" name="type">
                                    <option value="">Select Type</option>
                                    <option value="security">Security</option>
                                    <option value="advantages">Advantages</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="field">
                        <label class="label">Discription</label>
                        <div id="editor-container">
                            <div id="toolbar-container"></div>
                            <div id="editor"></div>
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
