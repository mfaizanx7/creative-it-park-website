@extends('admin.layouts.app')
@section('content')

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
<link rel="stylesheet" href="https://cdn.materialdesignicons.com/5.4.55/css/materialdesignicons.min.css">
    <section class="is-title-bar">
        <div class="flex flex-col md:flex-row items-center justify-between space-y-6 md:space-y-0">
            <ul>
                <li>Faqs</li>
                <li>List</li>
            </ul>
        </div>
    </section>

    <section class="is-hero-bar">
        <div class="flex flex-col md:flex-row items-center justify-between space-y-6 md:space-y-0">
            <h1 class="title">
                Faqs
            </h1>
            <a href="{{ route('admin.faqs.create') }}">
                <button class="button blue">Create</button>
            </a>
        </div>
    </section>

    <section class="section main-section">
        <div class="card has-table">
            <header class="card-header">
                <p class="card-header-title">
                    {{-- <span class="icon"><i class="mdi mdi-account-multiple"></i></span> --}}
                    Blogs
                </p>
                <a href="#" class="card-header-icon">
                    <span class="icon"><i class="mdi mdi-reload"></i></span>
                </a>
            </header>
            <div class="card-content">
                <table>
                    <thead>
                        <tr>
                            <th>Question</th>
                            <th>Answer</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($faqs as $faq)
                            <tr>
                                <td data-label="Name">{{ $faq->question }}</td>
                                <td data-label="Phone_no" class="text-truncate-1-line">
                                    {!! $faq->answer !!}
                                </td>
                                
                                <td class="actions-cell">
                                    <div class="buttons right nowrap">
                                        <a href="{{ route('admin.faqs.edit', $faq->id) }}" class="button small blue">
                                            <i class="mdi mdi-pencil" style="font-size: 16px;"></i>
                                        </a>
                                        <form action="{{ route('admin.faqs.destroy', $faq->id) }}" method="post" onsubmit="return confirm('Are you sure?')" style="display: inline-block; margin: 0;">
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
