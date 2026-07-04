@extends('admin.layouts.app')
@section('content')

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
<link rel="stylesheet" href="https://cdn.materialdesignicons.com/5.4.55/css/materialdesignicons.min.css">
    <section class="is-title-bar">
        <div class="flex flex-col md:flex-row items-center justify-between space-y-6 md:space-y-0">
            <ul>
                <li>Contact</li>
                <li>List</li>
            </ul>
        </div>
    </section>

    <section class="is-hero-bar">
        <div class="flex flex-col md:flex-row items-center justify-between space-y-6 md:space-y-0">
            <h1 class="title">
                Contact
            </h1>
            {{-- <a href="{{ route('admin.industry.create') }}">
                <button class="button blue">Create</button>
            </a> --}}
        </div>
    </section>

    <section class="section main-section">
        <div class="card has-table">
            <header class="card-header">
                <p class="card-header-title">
                    <span class="icon"><i class="mdi mdi-account-multiple"></i></span>
                    Contact
                </p>
                <a href="#" class="card-header-icon">
                    <span class="icon"><i class="mdi mdi-reload"></i></span>
                </a>
            </header>
            <div class="card-content">
                <table>
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Contact No#</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($contact as $user)
                        <tr>
                            <td data-label="Name">{{ $user->name }}</td>
                            <td data-label="Phone_no">
                                {{$user->email}}
                            </td>
                            <td data-label="Phone_no">
                                {{$user->phone}}
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </section>
@endsection
