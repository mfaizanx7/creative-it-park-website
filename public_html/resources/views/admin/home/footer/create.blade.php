@extends('admin.layouts.app')
@section('content')
<script src="https://cdn.ckeditor.com/ckeditor5/35.3.0/decoupled-document/ckeditor.js"></script>
<style>
    .container {
        display: flex;
        flex-wrap: wrap;
    }
    .input-container {
        flex: 1;
        min-width: 200px;
        box-sizing: border-box;
        padding: 10px;
    }
    .input {
        width: 100%;
        padding: 8px;
        margin-bottom: 10px;
    }
    .img-container {
        text-align: center;
        margin-top: 20px;
    }
    .img-container img {
        display: none;
        max-width: 100%;
        height: auto;
    }
</style>

    <section class="is-title-bar">
        <div class="flex flex-col md:flex-row items-center justify-between space-y-6 md:space-y-0">
            <ul>
                <li>Add</li>
                <li>Footer</li>
            </ul>
            {{-- <a href="{{ route('admin.about.index') }}">
                <button class="button red">Back</button>
            </a> --}}
        </div>
    </section>

    <section class="section main-section">
        <div class="card mb-6">
            <header class="card-header">
            </header>
            <div class="card-content">
                <form method="POST" action="{{ route('admin.footer.store') }}" enctype="multipart/form-data">
                    {{-- @dd($about[0]['value']) --}}
                    @csrf
                    <div class="field">
                        <label style="display: block; margin-bottom: 0.5rem;" >Addresses <span>(sperate for %)</span></label>
                        <div class="control">
                            <textarea class="input" name="footer_address" id="" cols="30" rows="10"> {{$footer[0]['value']}} </textarea>
                        </div>
                    </div>
                    <div style="display: flex; flex-wrap: wrap; gap: 1rem;">
                        <div style="flex: 1; min-width: 200px; box-sizing: border-box;">
                            <label style="display: block; margin-bottom: 0.5rem;">Email</label>
                            <div>
                                <input class="input" style="width: 100%;" type="email" name="footer_email" placeholder="" value="{{$footer[1]['value']}}">
                            </div>
                        </div>
                        <div style="flex: 1; min-width: 200px; box-sizing: border-box;">
                            <label style="display: block; margin-bottom: 0.5rem;">Contact No <span>(sperate for ,)</span></label>
                            <div>
                                <input class="input" style="width: 100%;" type="text" name="footer_number" placeholder="" value="{{$footer[2]['value']}}">
                            </div>
                        </div>
                    </div>
                    <div style="display: flex; flex-wrap: wrap; gap: 1rem;">
                        <div style="flex: 1; min-width: 200px; box-sizing: border-box;">
                            <div class="container">
                                <div class="input-container">
                                    <label for="footer_image">Header Logo</label>
                                    <input class="input" type="file" name="footer_image" id="footer_image" accept="footer/*">
                                </div>
                            </div>
                        </div>
                        <div style="flex: 1; min-width: 200px; box-sizing: border-box;">
                            <div class="container">
                                <div class="input-container">
                                    <label for="footer_image_dark">Footer Logo</label>
                                    <input class="input" type="file" name="footer_image_dark" id="footer_image_dark" >
                                </div>
                            </div>
                        </div>
                    </div>
                    <h1>Social Links</h1>
                    <div style="display: flex; flex-wrap: wrap; gap: 1rem;">
                        <div style="flex: 1; min-width: 200px; box-sizing: border-box;">
                            <label style="display: block; margin-bottom: 0.5rem;">Heading</label>
                            <div>
                                <input class="input" style="width: 100%;" type="text" name="footer_social" placeholder="" value="{{$footer[3]['value']}}">
                            </div>
                        </div>
                        <div style="flex: 1; min-width: 200px; box-sizing: border-box;">
                            <label style="display: block; margin-bottom: 0.5rem;">Links</label>
                            <div>
                                <input class="input" style="width: 100%;" type="text" name="footer_link" placeholder="" value="{{$footer[4]['value']}}">
                            </div>
                        </div>
                    </div>
                    <br>
                    <div style="display: flex; flex-wrap: wrap; gap: 1rem;">
                        <div style="flex: 1; min-width: 200px; box-sizing: border-box;">
                            {{-- <label style="display: block; margin-bottom: 0.5rem;">Heading</label> --}}
                            <div>
                                <input class="input" style="width: 100%;" type="text" name="footer_social1" placeholder="" value="{{$footer[10]['value']}}">
                            </div>
                        </div>
                        <div style="flex: 1; min-width: 200px; box-sizing: border-box;">
                            {{-- <label style="display: block; margin-bottom: 0.5rem;">Sub Heading</label> --}}
                            <div>
                                <input class="input" style="width: 100%;" type="text" name="footer_link1" placeholder="" value="{{$footer[5]['value']}}">
                            </div>
                        </div>
                    </div>
                    <br>
                    <div style="display: flex; flex-wrap: wrap; gap: 1rem;">
                        <div style="flex: 1; min-width: 200px; box-sizing: border-box;">
                            {{-- <label style="display: block; margin-bottom: 0.5rem;">Heading</label> --}}
                            <div>
                                <input class="input" style="width: 100%;" type="text" name="footer_social2" placeholder="" value="{{$footer[11]['value']}}">
                            </div>
                        </div>
                        <div style="flex: 1; min-width: 200px; box-sizing: border-box;">
                            {{-- <label style="display: block; margin-bottom: 0.5rem;">Sub Heading</label> --}}
                            <div>
                                <input class="input" style="width: 100%;" type="text" name="footer_link2" placeholder="" value="{{$footer[6]['value']}}">
                            </div>
                        </div>
                    </div>
                    <br>
                    <div style="display: flex; flex-wrap: wrap; gap: 1rem;">
                        <div style="flex: 1; min-width: 200px; box-sizing: border-box;">
                            {{-- <label style="display: block; margin-bottom: 0.5rem;">Heading</label> --}}
                            <div>
                                <input class="input" style="width: 100%;" type="text" name="footer_social3" placeholder="" value="{{$footer[12]['value']}}">
                            </div>
                        </div>
                        <div style="flex: 1; min-width: 200px; box-sizing: border-box;">
                            {{-- <label style="display: block; margin-bottom: 0.5rem;">Sub Heading</label> --}}
                            <div>
                                <input class="input" style="width: 100%;" type="text" name="footer_link3" placeholder="" value="{{$footer[7]['value']}}">
                            </div>
                        </div>
                    </div>
                    <br>
                    <div style="display: flex; flex-wrap: wrap; gap: 1rem;">
                        <div style="flex: 1; min-width: 200px; box-sizing: border-box;">
                            {{-- <label style="display: block; margin-bottom: 0.5rem;">Heading</label> --}}
                            <div>
                                <input class="input" style="width: 100%;" type="text" name="footer_social4" placeholder="" value="{{$footer[13]['value']}}">
                            </div>
                        </div>

                        <div style="flex: 1; min-width: 200px; box-sizing: border-box;">
                            {{-- <label style="display: block; margin-bottom: 0.5rem;">Sub Heading</label> --}}
                            <div>
                                <input class="input" style="width: 100%;" type="text" name="footer_link4" placeholder="" value="{{$footer[8]['value']}}">
                            </div>
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

