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
                <li>Website Development</li>
            </ul>
            <a href="{{ route('admin.website.index') }}">
                <button class="button red">Back</button>
            </a>
        </div>
    </section>

    <section class="section main-section">
        <div class="card mb-6">
            <header class="card-header">
            </header>
            <div class="card-content">
                <form method="POST" action="{{ route('admin.website.store') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="field">
                        <label class="label">Heading</label>
                        <div class="control">
                            <input class="input" type="text" name="heading" placeholder="" value="">
                        </div>
                    </div>
                    {{-- <div class="field">
                        <label class="label">Discription</label>
                        <div class="control">
                            <textarea class="input" name="discription" id="discription" cols="30" rows="10"></textarea>
                        </div>
                    </div> --}}
                    <div class="field">
                        <label class="label">Type</label>
                        <div class="control">
                            <div class="select">
                                <select id="link_type_drop_downs" name="type">
                                    <option value="">Select Type</option>
                                    <option value="service-solution">Service Solution</option>
                                    <option value="service-performance">Service Performance</option>
                                    <option value="service-application">Service Application</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    
                    <div id="service-performance" class="mb-3" style="display: none;">
                        <label id="FileType" class="form-label" for="InputImage">{{ __('Choose') }}</label>
                        <input class="input" type="file" name="icon" class="form-control" placeholder="Select file">
                    </div>
                    
                    <div id="service-application" class="mb-3" style="display: none;">
                        <label id="IconType" class="form-label" for="InputIcon">{{ __('Choose Icon') }}</label>
                        <input class="input" type="file" name="icon" class="form-control" placeholder="Select icon">
                    </div>
                    
                    <div id="description-field" class="mb-3">
                        <label id="IconType" class="form-label" for="InputIcon">{{ __('Description') }}</label>
                        <div id="editor-container">
                            <div id="toolbar-container"></div>
                            <div id="editor"></div>
                        </div>
                        <textarea name="discription" id="hidden-content" style="display:none;"> {{ old('discription') }}</textarea>
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
    // $(document).ready(function() {
    //     $('#service-performance').hide();
    //     $('#link_type_drop_downs').on('change', function() {
    //         var selectedValue = $(this).val();
    //         $('#service-performance').hide();
    //         if (selectedValue === 'service-performance') {
    //             $('#service-performance').show();
    //         }
    //     });
    //     $('#link_type_drop_downs').trigger('change');
    // });
    document.addEventListener('DOMContentLoaded', function() {
    const dropdown = document.getElementById('link_type_drop_downs');
    const servicePerformance = document.getElementById('service-performance');
    const serviceApplication = document.getElementById('service-application');
    const descriptionField = document.getElementById('description-field');

    function updateFields() {
        const value = dropdown.value;

        // Hide all by default
        servicePerformance.style.display = 'none';
        serviceApplication.style.display = 'none';
        descriptionField.style.display = 'block';

        if (value === 'service-performance') {
            servicePerformance.style.display = 'block';
        } else if (value === 'service-application') {
            serviceApplication.style.display = 'block';
            descriptionField.style.display = 'none';
        }
    }

    dropdown.addEventListener('change', updateFields);

    // Initial call to set the correct state on page load
    updateFields();
});

</script>


