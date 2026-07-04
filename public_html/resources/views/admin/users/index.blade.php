@extends('admin.layouts.app')
@section('content')
    <section class="is-title-bar">
        <div class="flex flex-col md:flex-row items-center justify-between space-y-6 md:space-y-0">
            <ul>
                <li>Users</li>
                <li>List</li>
            </ul>
        </div>
    </section>

    <section class="is-hero-bar">
        <div class="flex flex-col md:flex-row items-center justify-between space-y-6 md:space-y-0">
            <h1 class="title">
                Users
            </h1>
            <a href="{{ route('admin.user.create') }}">
                <button class="button blue">Create</button>
            </a>
        </div>
    </section>

    <section class="section main-section">
        <div class="card has-table">
            <header class="card-header">
                <p class="card-header-title">
                    <span class="icon"><i class="mdi mdi-account-multiple"></i></span>
                    Users
                </p>
                <a href="#" class="card-header-icon">
                    <span class="icon"><i class="mdi mdi-reload"></i></span>
                </a>
            </header>
            <div class="card-content">
                <table>
                    <thead>
                        <tr>
                            <th class="checkbox-cell">
                                <label class="checkbox">
                                    <input type="checkbox">
                                    <span class="check"></span>
                                </label>
                            </th>
                            <th class="image-cell"></th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Contact</th>
                            <th>Created</th>
                            <th>Roles</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($users as $user)
                            <tr>
                                <td class="checkbox-cell">
                                    <label class="checkbox">
                                        <input type="checkbox">
                                        <span class="check"></span>
                                    </label>
                                </td>
                                <td class="image-cell">
                                    <div class="image">
                                        <img src="" class="rounded-full">
                                    </div>
                                </td>
                                <td data-label="Name">{{ $user->name }}</td>
                                <td data-label="Email">{{ $user->email }}</td>
                                <td data-label="Phone_no">{{ $user->contact }}</td>
                                {{-- <td data-label="Progress" class="progress-cell">
                                    <progress max="100" value="79">79</progress>
                                </td> --}}
                                <td data-label="Created">
                                    <small class="text-gray-500" title="Oct 25, 2021">{{ $user->created_at }}</small>
                                </td>
                                <td data-label="role/permission">
                                    <a class="button small blue" href="{{ route('admin.users.show',$user->id)}}">Role</a>
                                </td>
                                <td class="actions-cell">
                                    <div class="buttons right nowrap">
                                        {{-- <a href="{{ route('admin.user.show', $user->id) }}"
                                            class="button small green --jb-modal">
                                            <i class="mdi mdi-eye"></i>
                                        </a> --}}
                                        <a href="{{ route('admin.user.edit', $user->id) }}" class="button small blue">
                                            <i class="mdi mdi-pencil"></i>
                                        </a>
                                        <form action="{{ route('admin.user.destroy', $user->id) }}" method="post"onsubmit="return confirm('Are you sure?')">
                                            @csrf
                                            @method('DELETE')
                                            <button class="button small red --jb-modal" type="submit">
                                                <i class="mdi mdi-trash-can"></i>
                                            </button>
                                        </form>
                                        {{-- <button class="button small red --jb-modal" data-target="sample-modal"
                                            type="button">
                                            <span class="icon"><i class="mdi mdi-trash-can"></i></span>
                                        </button> --}}
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                <div class="table-pagination">
                    <div class="flex items-center justify-between">
                        <div class="buttons">
                            <button type="button" class="button active">1</button>
                            <button type="button" class="button">2</button>
                            <button type="button" class="button">3</button>
                        </div>
                        <small>Page 1 of 3</small>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
