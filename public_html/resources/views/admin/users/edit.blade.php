@extends('admin.layouts.app')
@section('content')
    <section class="is-title-bar">
        <div class="flex flex-col md:flex-row items-center justify-between space-y-6 md:space-y-0">
            <ul>
                <li>User</li>
                <li>Edit</li>
            </ul>
            <a href="{{ route('admin.user.index') }}">
                <button class="button green">Back</button>
            </a>
        </div>
    </section>

    <section class="section main-section">
        <div class="card mb-6">
            <header class="card-header">
            </header>
            <div class="card-content">
                <form method="POST" action="{{ route('admin.user.update', $user->id) }}" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="field">
                        <label class="label">Name</label>
                        <div class="control">
                            <input class="input" type="text" name="name" placeholder="" value="{{ $user->name }}">
                        </div>
                    </div>
                    <div class="field">
                        <label class="label">Email</label>
                        <div class="control">
                            <input class="input" type="email" name="email" placeholder="" value="{{ $user->email }}">
                        </div>
                    </div>
                    <div class="field">
                        <label class="label">Phone NO #</label>
                        <div class="control">
                            <input class="input" type="number" name="phone_no" placeholder=""
                                value="{{ $user->contact }}">
                        </div>
                    </div>
                    <hr>
                    <div class="field grouped">
                        <div class="control">
                            <button type="submit" class="button green">
                                Submit
                            </button>
                        </div>
                        <div class="control">
                            <button type="reset" class="button red">
                                Reset
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>
@endsection
