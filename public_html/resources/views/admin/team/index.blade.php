@extends('admin.layouts.app')
@section('content')

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
<link rel="stylesheet" href="https://cdn.materialdesignicons.com/5.4.55/css/materialdesignicons.min.css">
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
            <a href="{{ route('admin.team.create') }}">
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

                            {{-- <th class="image-cell"></th> --}}
                            <th>Name</th>
                            <th>Image</th>
                            <th>Roles</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($team as $user)
                            <tr>
                                <td data-label="Name">{{ $user->name }}</td>
                                <td data-label="Name"> <img style="height:50px !important; width:60px !important;"
                                        src="{{ asset('assets/uploads/team-images/' . $user->image) }}" alt=""></td>
                                <td data-label="Phone_no"> {{ $user->roles->name }} </td>
                                <td data-label="Phone_no">
                                    @if ($user->status == 1)
                                        <span class="button small green">Active</span>
                                    @else
                                        <span class="button small red">InActive</span>
                                    @endif 
                                </td>
                                <td class="actions-cell">
                                    <div class="buttons right nowrap">
                                        <a href="{{ route('admin.team.edit', $user->id) }}" class="button small blue">
                                            <i class="mdi mdi-pencil" style="font-size: 16px;"></i>
                                        </a>
                                        @if ($user->status == 0)
                                            <form method="POST" action="{{ route('admin.team.active', ['id' => $user->id]) }}" style="display: inline-block; margin: 0;">
                                                @csrf
                                                <button type="submit" class="button small green" style="display: inline-block; font-size: 16px;">
                                                    <i class="fas fa-check" aria-hidden="true"></i>
                                                </button>
                                            </form>
                                        @else
                                            <form method="POST" action="{{ route('admin.team.inactive', ['id' => $user->id]) }}" style="display: inline-block; margin: 0;">
                                                @csrf
                                                <button type="submit" class="button small red" style="display: inline-block; font-size: 16px;">
                                                    <i class="fas fa-times"></i>
                                                </button>
                                            </form>
                                        @endif
                                        <form action="{{ route('admin.team.destroy', $user->id) }}" method="post" onsubmit="return confirm('Are you sure?')" style="display: inline-block; margin: 0;">
                                            @csrf
                                            @method('DELETE')
                                            <button class="button small red --jb-modal" type="submit" style="font-size: 16px;">
                                                <i class="mdi mdi-trash-can"></i>
                                            </button>
                                        </form>
                                    </div>
                                    
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </section>
@endsection
