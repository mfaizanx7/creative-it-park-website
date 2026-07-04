@extends('admin.layouts.app')
@section('content')
<style>
    .inline-fields {
        display: flex;
        flex-wrap: wrap;
        gap: 1rem;
    }
    .inline-field {
        flex: 1;
    }
    .inline-field select,
    .inline-field input {
        width: 100%;
    }
</style>
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
            <a href="{{ route('admin.team.index') }}">
                <button class="button red">back</button>
            </a>
        </div>
    </section>

    <section class="section main-section">
        <div class="card mb-6">
            <header class="card-header">
            </header>
            <div class="card-content">
                <form method="POST" action="{{ route('admin.team.store') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="container">
                        <div class="inline-fields">
                            <div class="field inline-field">
                                <label class="label">Name</label>
                                <div class="control">
                                    <input class="input" type="text" name="name" placeholder="" value="">
                                </div>
                            </div>
                            <div class="field inline-field">
                                <label class="label">Image</label>
                                <div class="control">
                                    <input class="input" type="file" name="image" placeholder="" value="">
                                </div>
                            </div>
                            <div class="field inline-field">
                                <label class="label">Role</label>
                                <div class="control">
                                    <select class="input" id="roll_id" name="roll_id">
                                        <option value="">Select Role</option>
                                        @foreach ($roles as $role)
                                            <option value="{{ $role->id }}">{{ $role->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                        {{-- <div class="modal-body"> --}}
                            {{-- <label class="label">Experience</label>
                            <div class="d-flex align-items-center mb-2">
                                <div class="input-group">
                                    <label for="" class="form-control m-input" style="margin-right: 20px;">Company</label>
                                    <label for="" class="form-control m-input" style="margin-right: 20px;">Start Date</label>
                                    <label for="" class="form-control m-input" style="margin-right: 20px;">End Date</label>
                                </div>
                                <button id="editrowAdder" type="button" class="btn btn-dark" style="display: inline-flex; align-items: center;">
                                    <span class="bi bi-plus-square-dotted" style="margin-right: 8px;"></span>
                                    <span>New</span>
                                </button>
                            </div>
                            <div id="newscheduleinput"></div> --}}
                        {{-- </div> --}}
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

    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script>
        $(document).ready(function () {
            $("#editrowAdder").click(function () {
                var newRowAdd =
        '<div id="row"> <div class="input-group m-3">' +
        '<input type="text" name="company[]" class="form-control m-input" style="margin-right: 10px;">' +
        '<input type="text" name="start_date[]" class="form-control m-input" style="margin-right: 10px;">' +
        '<input type="text" name="end_date[]" class="form-control m-input" style="margin-right: 10px;">' +
        '<div class="input-group-append">' +
        '<button class="btn btn-danger" id="DeleteRow" type="button">' +
        '<i class="bi bi-trash"></i> Delete</button> </div> </div> </div>';
    
        $('#newscheduleinput').append(newRowAdd);
                });
            $("body").on("click", "#DeleteRow", function () {
                $(this).closest("#row").remove();
            });
        });
    </script>
@endsection


