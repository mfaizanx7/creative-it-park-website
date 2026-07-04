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
                <form method="POST" action="{{ route('admin.permissions.update',$permission->id)}}" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="field">
                        <label class="label">Permission Name</label>
                        <div class="control">
                            <input class="input" type="text" name="name" placeholder="" value="{{$permission->name}}">
                        </div>
                    </div>  
                    <div class="field grouped">
                        <div class="control">
                            <button type="submit" class="button green">
                                Update
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>  
        
        <div class="card mb-6">
            <header class="card-header">
                <p class="card-header-title">
                    Roles
                </p>
            </header>
            <div class="card-content">
                <form method="POST" action="{{ route('admin.permissions.roles',$permission->id)}}">
                    @csrf
                    <div class="field">
                        <label class="label">Roles</label>
                        <div class="control">
                            <div class="select">
                                <select type="text" name="role">
                                    @foreach ($roles as $role)
                                        <option value="{{ $role->name }}">{{ $role->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="field grouped">
                        <div class="control">
                            <button type="submit" class="button green">
                                Assign
                            </button>
                        </div>
                    </div>
                </form>                
            </div>
            <div class="flex card-content space-x-3 ">
                @if ($permission->roles)
                    @foreach ($permission->roles as $permission_role)
                    <form action="{{ route('admin.permissions.roles.remove',[$permission->id, $permission_role->id])}}" 
                        method="post" onsubmit="return confirm('Are you sure?')">
                        @csrf
                        @method('DELETE')
                        <button class="button small red --jb-modal" type="submit">
                            {{ $permission_role->name }}
                        </button>
                    </form>
                    @endforeach
                @endif
            </div>
        </div>
    </section>
@endsection
