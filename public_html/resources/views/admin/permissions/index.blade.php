@extends('admin.layouts.app')
@section('content')
    <section class="is-title-bar">
        <div class="flex flex-col md:flex-row items-center justify-between space-y-6 md:space-y-0">
            <ul>
                <li>Permission</li>
                <li>List</li>
            </ul>
        </div>
    </section>

    <section class="is-hero-bar">
        <div class="flex flex-col md:flex-row items-center justify-between space-y-6 md:space-y-0">
            <h1 class="title">
                Permissions
            </h1>
            <a href="{{ route('admin.permissions.create')}}">
                <button class="button blue">Create</button>
            </a>
        </div>
    </section>
    <section class="section main-section">
        <div class="card has-table">
            <header class="card-header">
                <p class="card-header-title">
                    <span class="icon"><i class="mdi mdi-account-multiple"></i></span>
                    Permissions
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
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($permissions as $permission)
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
                                <td data-label="Name">{{$permission->name}}</td>
                                <td class="actions-cell">
                                    <div class="buttons right nowrap">
                                        {{-- <a href=""
                                            class="button small green --jb-modal">
                                            <i class="mdi mdi-eye"></i>
                                        </a> --}}
                                        <a href="{{ route('admin.permissions.edit', $permission->id)}}" class="button small blue">
                                            <i class="mdi mdi-pencil"></i>
                                        </a>
                                        <form action="{{ route('admin.permissions.destroy',$permission->id)}}" method="post" onsubmit="return confirm('Are you sure?')">
                                            @csrf
                                            @method('DELETE')
                                            <button class="button small red --jb-modal" type="submit">
                                                <i class="mdi mdi-trash-can"></i>
                                            </button>
                                        </form>
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
