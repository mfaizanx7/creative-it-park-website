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
                <li>events</li>
                {{-- <li>App Development</li> --}}
            </ul>
            <a href="{{ route('admin.events.index') }}">
                <button class="button red">Back</button>
            </a>
        </div>
    </section>

    <section class="section main-section">
        <div class="card mb-6">
            <header class="card-header">
            </header>
            <div class="card-content">
                <form method="POST" action="{{ route('admin.events.update',['id' => $events->id]) }}" enctype="multipart/form-data">
                    @csrf
                    <div class="field">
                        <label class="label">Image</label>
                        <div class="control">
                            <input class="input" type="file" name="image" placeholder="" value="">
                        </div>
                    </div>
                    <div class="field">
                        <label class="label">Description</label>
                            {{-- <div id="editor-container">
                                <div id="toolbar-container"></div>
                                <div id="editor"> {!! old('description', $events->description) !!}</div>
                            </div> --}}
                            <textarea style="width: 100%; height: 300px; border: 1px solid rgba(156,163,175,var(--tw-border-opacity)); border-radius: 5px; padding: 6px;" name="description">{{ $events->description}}</textarea>
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
        
    </script>
@endsection


