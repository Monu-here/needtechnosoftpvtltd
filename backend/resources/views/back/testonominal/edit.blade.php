@extends('layout')
@section('css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Dropify/0.2.2/css/dropify.min.css">
@endsection
@section('linkbar')
    / <a href="{{ route('admin.test.index') }}">Testimonial</a> / Edit
@endsection

@section('content')
    <div class="car shadow p-3 mb-3 bg-white">
        <div class="card-body">
            <form action="{{ route('admin.test.edit', ['testmonial' => $testmonial->id]) }}" method="POST"
                enctype="multipart/form-data">
                @csrf
                <div class="row">

                    <div class="col-md-9">
                        <div class="row">
                            <div class="col-md-6">
                                <label for="">Name</label>
                                <input type="text" name="name" id="name" class="form-control"
                                    value="{{ $testmonial->name }}">
                            </div>
                            <div class="col-md-6">
                                <label for="">Position</label>
                                <input type="text" name="position" id="position" class="form-control"
                                    value="{{ $testmonial->position }}">
                            </div>

                            <div class="col-12">
                                <label for="">Short Description</label>
                                <textarea name="short_desc" id="short_desc" cols="30" rows="2" class="form-control">{{ $testmonial->short_desc }}</textarea>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 small">
                        <label for="image"> Image</label>
                        <input type="file" name="image" id="image" class="form-control photo" accept="image/*"
                            data-default-file="{{ asset($testmonial->image) }}">

                        <hr class="m-1">

                        <button class="btn btn-primary">
                            Save
                        </button>
                        <a href="{{ route('admin.team.index') }} " class="btn btn-danger">Cancel</a>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
@section('js')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Dropify/0.2.2/js/dropify.min.js"
        integrity="sha512-8QFTrG0oeOiyWo/VM9Y8kgxdlCryqhIxVeRpWSezdRRAvarxVtwLnGroJgnVW9/XBRduxO/z1GblzPrMQoeuew=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script>
        $(document).ready(function() {
            $(".photo").dropify();
        });
    </script>
@endsection
