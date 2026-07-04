@extends('admin.layouts.app')
@section('content')
<script src="https://cdn.ckeditor.com/ckeditor5/35.3.0/decoupled-document/ckeditor.js"></script>
    <style>
    .ck-editor__editable_inline {
        min-height: 120px;
        border: 1px solid gray !important;
    }
    </style>

    <section class="is-title-bar">
        <div class="flex flex-col md:flex-row items-center justify-between space-y-6 md:space-y-0">
            <ul>
                <li>Add</li>
                <li>about</li>
            </ul>
            {{-- <a href="{{ route('admin.about.index') }}">
                <button class="button red">Back</button>
            </a> --}}
        </div>
    </section>

    <section class="section main-section">
        <div class="card mb-6">
            <header class="card-header">
            </header>
            <div class="card-content">
                <form method="POST" action="{{ route('admin.about.store') }}" enctype="multipart/form-data">
                    {{-- @dd($about[0]['value']) --}}
                    @csrf
                    <div id="editor-container">
                        <label class="label">About</label>
                        <div id="toolbar-container"></div>
                        <div id="editor">{!! old('about_detail', $about[0]['value']) !!}</div>
                    </div>
                    <textarea name="about_detail" id="hidden-content" style="display:none;"> {{ old('detail') }}</textarea>
                    <h1 class="label">Mission Section</h1>
                    <div style="display: flex; flex-wrap: wrap; gap: 1rem;">
                        <div style="flex: 1; min-width: 200px; box-sizing: border-box;">
                            <label style="display: block; margin-bottom: 0.5rem;">Heading</label>
                            <div>
                                <input class="input" style="width: 100%;" type="text" name="about_mission_heading" placeholder="" value="{{$about[1]['value']}}">
                            </div>
                        </div>
                        <div style="flex: 1; min-width: 200px; box-sizing: border-box;">
                            <label style="display: block; margin-bottom: 0.5rem;">Sub Heading</label>
                            <div>
                                <input class="input" style="width: 100%;" type="text" name="about_mission_sub_heading" placeholder="" value="{{$about[2]['value']}}">
                            </div>
                        </div>
                        <div style="flex: 1; min-width: 200px; box-sizing: border-box;">
                            <label style="display: block; margin-bottom: 0.5rem;">Image</label>
                            <div>
                                <input style="width: 100%;" type="file" name="about_mission_image" placeholder="" value="">
                            </div>
                        </div>
                    </div>
                    <div id="editor-container">
                        <label class="label"></label>
                        <div id="mission-toolbar-container"></div>
                        <div id="mission_editor">{!! old('about_mission_description', $about[4]['value']) !!}</div>
                    </div>
                    <textarea name="about_mission_description" id="hidden-mission-content" style="display:none;"> {{ old('detail') }}</textarea>

                    <div class="field">
                        <label class="label">Tags</label>
                        <div class="control">
                            <input class="input" type="text" name="about_mission_tag" placeholder="" value="{{$about[3]['value']}}">
                        </div>
                    </div>

                    <h1 class="label">Agency </h1>

                    <div style="display: flex; flex-wrap: wrap; gap: 1rem;">
                        <div style="flex: 1; min-width: 200px; box-sizing: border-box;">
                            <label style="display: block; margin-bottom: 0.5rem;">Heading</label>
                            <div>
                                <input class="input" style="width: 100%;" type="text" name="about_agency_heading" placeholder="" value="{{$about[6]['value']}}">
                            </div>
                        </div>
                        <div style="flex: 1; min-width: 200px; box-sizing: border-box;">
                            <label style="display: block; margin-bottom: 0.5rem;">Sub Heading</label>
                            <div>
                                <input class="input" style="width: 100%;" type="text" name="about_agency_sub_heading" placeholder="" value="{{$about[7]['value']}}">
                            </div>
                        </div>
                        <div style="flex: 1; min-width: 200px; box-sizing: border-box;">
                            <label style="display: block; margin-bottom: 0.5rem;">Image</label>
                            <div>
                                <input style="width: 100%;" type="file" name="about_agency_image" placeholder="" value="">
                            </div>
                        </div>
                    </div>
                    <div id="editor-container">
                        <label class="label"></label>
                        <div id="agency-toolbar-container"></div>
                        <div id="agency_editor">{!! old('about_agency_description', $about[8]['value']) !!}</div>
                    </div>
                    <textarea name="about_agency_description" id="hidden-agency-content" style="display:none;"> {{ old('about_agency_description') }}</textarea>

                    <div class="field">
                        <label class="label">Tags</label>
                        <div class="control">
                            <input class="input" type="text" name="about_agency_tag" placeholder="" value="{{$about[9]['value']}}">
                        </div>
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

<script>
    DecoupledEditor
        .create(document.querySelector('#mission_editor'), {
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
        .then(mission_editor => {
            const toolbarContainer = document.querySelector('#mission-toolbar-container');
            toolbarContainer.appendChild(mission_editor.ui.view.toolbar.element);

            mission_editor.model.document.on('change:data', () => {
                document.querySelector('#hidden-mission-content'    ).value = mission_editor.getData();
            });
        })
        .catch(error => {
            console.error('There was a problem initializing the editor.', error);
        });
</script>
<script>
    DecoupledEditor
        .create(document.querySelector('#agency_editor'), {
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
        .then(agency_editor => {
            const toolbarContainer = document.querySelector('#agency-toolbar-container');
            toolbarContainer.appendChild(agency_editor.ui.view.toolbar.element);

            agency_editor.model.document.on('change:data', () => {
                document.querySelector('#hidden-agency-content'    ).value = agency_editor.getData();
            });
        })
        .catch(error => {
            console.error('There was a problem initializing the editor.', error);
        });
</script>
@endsection

