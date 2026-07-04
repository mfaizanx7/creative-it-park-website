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
                <li>Add</li>
                <li>Home-About</li>
            </ul>
        </div>
    </section>

    <section class="section main-section">
        <div class="card mb-6">
            <header class="card-header">
            </header>
            <div class="card-content">
                <form method="POST" action="" enctype="multipart/form-data">
                    @csrf
                    <div class="field">
                        <label class="label">Heading</label>
                        <div class="control">
                            <input class="input" type="text" name="home_about_heading" placeholder="" value="">
                        </div>
                    </div>
                    <div class="field">
                        <label class="label">Tags</label>
                        <div class="control">
                            <input class="input" type="text" name="home_about_tags" placeholder="" value="">
                        </div>
                    </div>
                    <div class="field">
                        <label class="label">Image</label>
                        <div class="control">
                            <input class="input" type="file" name="home_about_image" placeholder="" value="">
                        </div>
                    </div>
                    <div style="display: flex; flex-wrap: wrap; gap: 1rem;">
                        <div style="flex: 1; min-width: 200px; box-sizing: border-box;">
                            <label class="label" style="display: block; margin-bottom: 0.5rem;">Icon 1</label>
                            <div>
                                <input class="input" type="file" name="home_about_icon1" placeholder="" value="">
                            </div>
                        </div>
                        <div style="flex: 1; min-width: 200px; box-sizing: border-box;">
                            <label class="label" style="display: block; margin-bottom: 0.5rem;">Icon 2</label>
                            <div>
                                <input class="input" type="file" name="home_about_icon2" placeholder="" value="">
                            </div>
                        </div>
                        <div style="flex: 1; min-width: 200px; box-sizing: border-box;">
                            <label class="label" style="display: block; margin-bottom: 0.5rem;">Icon 3</label>
                            <div>
                                <input class="input" type="file" name="home_about_icon3" placeholder="" value="">
                            </div>
                        </div>
                        <div style="flex: 1; min-width: 200px; box-sizing: border-box;">
                            <label class="label" style="display: block; margin-bottom: 0.5rem;">Icon 4</label>
                            <div>
                                <input class="input" type="file" name="home_about_icon4" placeholder="" value="">
                            </div>
                        </div>
                    </div>
                    <div class="field">
                        <label class="label">Description</label>
                            <div id="editor-container">
                                <div id="toolbar-container"></div>
                                <div id="editor"></div>
                            </div>
                            <textarea name="home_about_description" id="hidden-content" style="display:none;"> {{ old('detail') }}</textarea>
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

