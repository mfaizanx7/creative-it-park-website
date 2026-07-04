@extends('admin.layouts.app')
@section('content')
    <section class="is-title-bar">
        <div class="flex flex-col md:flex-row items-center justify-between space-y-6 md:space-y-0">
            <ul>
                <li>Client</li>
                {{-- <li>App Development</li> --}}
            </ul>
            <a href="{{ route('admin.client.index') }}">
                <button class="button red">Back</button>
            </a>
        </div>
    </section>

    <section class="section main-section">
        <div class="card mb-6">
            <header class="card-header">
            </header>
            <div class="card-content">
                <form method="POST" action="{{ route('admin.client.store') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="field">
                        <label class="label">Name</label>
                        <div class="control">
                            <input class="input" type="text" name="name" placeholder="" value="">
                        </div>
                    </div>
                    <div class="field">
                        <label class="label">Link</label>
                        <div class="control">
                            <input class="input" type="text" name="link" placeholder="" value="">
                        </div>
                    </div>
                    <div class="field">
                        <label class="label">Image</label>
                        <div class="control">
                            <input class="input" type="file" name="image" placeholder="" value="">
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
@endsection


