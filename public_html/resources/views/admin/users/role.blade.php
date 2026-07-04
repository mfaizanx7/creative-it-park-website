@extends('admin.layouts.app')
@section('content')
    <section class="is-title-bar">
        <div class="flex flex-col md:flex-row items-center justify-between space-y-6 md:space-y-0">
            <ul>
                <li>User</li>
                <li>Roles</li>
            </ul>
            <a href="{{ route('admin.user.index') }}">
                <button class="button green">User List</button>
            </a>
        </div>
    </section>

    <section class="is-hero-bar">
        <div class="flex flex-col  space-y-6 md:space-y-0">
            <h2>User Name : {{ $user->name }}</h2>
            <h2>User email : {{ $user->email }}</h2>
        </div>
    </section>

    <section class="section main-section">
        <div class="card mb-6">
            <div class="card-content">
                <form method="POST" action="{{ route('admin.users.roles', $user->id) }}">
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
            <div class="flex space-x-3 card-content">
                @if ($user->roles)
                    @foreach ($user->roles as $user_role)
                        <form action="{{ route('admin.users.roles.remove', [$user->id, $user_role->id]) }}" method="post"
                            onsubmit="return confirm('Are you sure?')">
                            @csrf
                            @method('DELETE')
                            <button class="button small red --jb-modal " type="submit">
                                {{ $user_role->name }}
                            </button>
                        </form>
                    @endforeach
                @endif
            </div>
        </div>

        <div class="card mb-6">
            <header class="card-header">
                <p class="card-header-title">
                    Permissions
                </p>
            </header>
            <div class="card-content">
                <form method="POST" action="{{ route('admin.users.permissions', $user->id) }}">
                    @csrf
                    <div class="field">
                        <label class="label">Permission</label>
                        <div class="control">
                            <div class="select">
                                <select type="text" name="permission">
                                    @foreach ($permissions as $permission)
                                        <option value="{{ $permission->name }}">{{ $permission->name }}</option>
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
            <div class="flex  space-x-3 card-content">
                @if ($user->permissions)
                    @foreach ($user->permissions as $user_permission)
                        <form action="{{ route('admin.users.permissions.revoke', [$user->id, $user_permission->id]) }}"
                            method="post" onsubmit="return confirm('Are you sure?')">
                            @csrf
                            @method('DELETE')
                            <button class="button small red --jb-modal" type="submit">
                                {{ $user_permission->name }}
                            </button>
                        </form>
                    @endforeach
                @endif
            </div>
        </div>
    </section>
@endsection
