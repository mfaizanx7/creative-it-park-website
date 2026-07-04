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
                <li>UI/UX Design</li>
            </ul>
            <a href="{{ route('admin.ui.index') }}">
                <button class="button red">Back</button>
            </a>
        </div>
    </section>

    <section class="section main-section">
        <div class="card mb-6">
            <header class="card-header">
            </header>
            <div class="card-content">
                <form method="POST" action="{{ route('admin.ui.store') }}" enctype="multipart/form-data">
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
                                    <option value="experience">Experience</option>
                                    <option value="tools">Tools</option>
                                    <option value="enterprises">Enterprises</option>
                                    <option value="design">Design</option>
                                </select>
                            </div>
                        </div>
                    </div>

                    <div id="solution" class="mb-3" style="display: none;">
                        <label id="FileType" class="form-label" for="InputIcon">{{ __('Choose file') }}</label>
                        <input class="input" type="file" name="icon" class="form-control" placeholder="Select file">
                    </div>

                    <div id="experience" class="mb-3" style="display: none;">
                        <label id="IconType" class="form-label" for="InputIcon">{{ __('Choose icon') }}</label>
                        <input class="input" type="file" name="icon" class="form-control" placeholder="Select icon">
                    </div>

                    <div id="description-field" class="mb-3" style="display: none;">
                        <label class="form-label" for="description">{{ __('Description') }}</label>
                        <div id="editor-container">
                            <div id="toolbar-container"></div>
                            <div id="editor"></div>
                        </div>
                        <textarea name="discription" id="hidden-content" style="display:none;"> {{ old('discription') }}</textarea>
                    </div>
                    <div id="sub-field" class="mb-3" style="display: none;">
                        <label class="form-label" for="sub_head">{{ __('Sub Heading') }}</label>
                        <textarea class="input" name="sub_head" class="form-control" placeholder="Enter sub heading"></textarea>
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

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
document.addEventListener('DOMContentLoaded', function() {
    const dropdown = document.getElementById('link_type_drop_downs');
    const servicesolution = document.getElementById('solution');
    const serviceApplication = document.getElementById('experience');//icon
    const descriptionField = document.getElementById('description-field');//description
    const subField = document.getElementById('sub-field');//sub_heading

    function updateFields() {
        const value = dropdown.value;
        servicesolution.style.display = 'none';
        serviceApplication.style.display = 'none';
        descriptionField.style.display = 'none';
        subField.style.display = 'none';

        if (value === 'design') {
            serviceApplication.style.display = 'block';
            descriptionField.style.display = 'block';
            subField.style.display = 'block';
        } else if (value === 'experience') {
            // servicesolution.style.display = 'block';
            serviceApplication.style.display = 'block';
            descriptionField.style.display = 'block';
        } else if (value === 'enterprises' || value === 'delivery') {
            // serviceApplication.style.display = 'block';
            descriptionField.style.display = 'block';
        } else if (value === 'tools') {
            // serviceApplication.style.display = 'block';
        }
    }

    dropdown.addEventListener('change', updateFields);
    updateFields();
});
</script>
