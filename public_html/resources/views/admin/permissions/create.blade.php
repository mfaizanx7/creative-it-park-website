@extends('admin.layouts.app')
@section('content')
    <section class="is-title-bar">
        <div class="flex flex-col md:flex-row items-center justify-between space-y-6 md:space-y-0">
            <ul>
                <li>Add</li>
                <li>Permission</li>
            </ul>
            <a href="{{ route('admin.permissions.index') }}">
                <button class="button blue">Back</button>
            </a>
        </div>
    </section>

    <section class="section main-section">
        <div class="card mb-6">
            <header class="card-header">
            </header>
            <div class="card-content">
                <form method="POST" action="{{ route('admin.permissions.store')}}" enctype="multipart/form-data">
                    @csrf
                    <div class="field">
                        <label class="label">Permission Name</label>
                        <div class="control">
                            <input class="input" type="text" name="name" placeholder="" value="">
                        </div>
                        <p class="help">
                            This field is required
                        </p>
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
