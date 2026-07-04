@extends('admin.layouts.app')
@section('content')
    <section class="is-title-bar">
        <div class="flex flex-col md:flex-row items-center justify-between space-y-6 md:space-y-0">
            <ul>
                <li>Add</li>
                <li>Users</li>
            </ul>
            <a href="{{ route('admin.team.index') }}">
                <button class="button red">Back</button>
            </a>
        </div>
    </section>

    <section class="section main-section">
        <div class="card mb-6">
            <header class="card-header">
            </header>
            <div class="card-content">
                <form method="POST" action="{{ route('admin.team.update',$team->id) }}" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="field">
                        <label class="label">Name</label>
                        <div class="control">
                            <input class="input" type="text" value="{{ $team->name }}" name="name" placeholder="" value="">
                        </div>
                    </div>
                    <div class="field">
                        <label class="label">Image</label>
                        <div class="control">
                            <input class="input" type="file" value="{{ $team->image }}" name="image" placeholder="" value="">
                        </div>
                    </div>
                    <div class="field">
                        <label class="label">Role</label>
                        <div class="control">
                            <select class="input" id="roll_id" name="roll_id">
                                <option value="" selected >Select Role</option>
                                @foreach ($roles as $role)
                                    <option value="{{ $role->id }}" {{ $team->roll_id == $role->id ? 'selected' : '' }}>{{ $role->name }}</option>
                                @endforeach
                            </select>
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
