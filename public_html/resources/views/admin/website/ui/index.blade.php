@extends('admin.layouts.app')
@section('content')

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
<link rel="stylesheet" href="https://cdn.materialdesignicons.com/5.4.55/css/materialdesignicons.min.css">
    <section class="is-title-bar">
        <div class="flex flex-col md:flex-row items-center justify-between space-y-6 md:space-y-0">
            <ul>
                <li>Services</li>
                <li>UI/UX Design</li>
            </ul>
        </div>
    </section>

    <section class="is-hero-bar">
        <div class="flex flex-col md:flex-row items-center justify-between space-y-6 md:space-y-0">
            <h1 class="title">
                UI/UX Design
            </h1>
            <a href="{{ route('admin.ui.create') }}">
                <button class="button blue">Create</button>
            </a>
        </div>
    </section>
    <section class="section main-section">
        <div class="card has-table">
            <div class="card-content">
                <table>
                    <thead>
                        <tr>

                            <th class="image-cell"></th>
                            <th>Heading</th>
                            <th>Discription</th>
                            <th>Type</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($ui_services as $value)
                            <tr>
                                <td class="image-cell">
                                    <div class="image">
                                        <img src="{{ asset('assets/uploads/ui_service/icon/' . $value->icon) }}" class="rounded-full">
                                    </div>
                                </td>
                                <td data-label="Name">{{ $value->heading }}</td>
                                <td data-label="Name" class="text-truncate-1-line">{{ Str::limit($value->description, 40, '...') }}</td>                               
                                <td data-label="Phone_no"> {{ $value->type }} </td>
                                <td class="actions-cell">
                                    <div class="buttons right nowrap">
                                        <a href="{{ route('admin.ui.edit', $value->id) }}" class="button small blue">
                                            <i class="mdi mdi-pencil" style="font-size: 16px;"></i>
                                        </a>
                                        <form action="{{ route('admin.ui.destroy', $value->id) }}" method="post" onsubmit="return confirm('Are you sure?')" style="display: inline-block; margin: 0;">
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
                <div class="admin-pagi">
                    {!! $ui_services->appends(request()->all())->links() !!}
            </div>
            </div>
        </div>
    </section>
@endsection
