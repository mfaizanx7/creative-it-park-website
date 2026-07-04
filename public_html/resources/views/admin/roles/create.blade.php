@extends('admin.layouts.app')
@section('content')
    <section class="is-title-bar">
        <div class="flex flex-col md:flex-row items-center justify-between space-y-6 md:space-y-0">
            <ul>
                <li>Add</li>
                <li>Roles</li>
            </ul>
            <a href="{{ route('admin.roles.index') }}">
                <button class="button blue">Back</button>
            </a>
        </div>
    </section>

    <section class="section main-section">
        <div class="card mb-6">
            <header class="card-header">
            </header>
            <div class="card-content">
                <form method="POST" action="{{ route('admin.roles.store')}}" enctype="multipart/form-data">
                    @csrf
                    <div class="field">
                        <label class="label">Role Name</label>
                        <div class="control">
                            <input class="input" type="text" name="name" placeholder="" value="">
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
