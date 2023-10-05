@extends('layout')
@section('css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Dropify/0.2.2/css/dropify.min.css">
@endsection
@section('linkbar')
    / <a href="{{ route('admin.feature.index') }}">Feature</a> / Add
@endsection
@section('content')
    <div class="car shadow p-3 mb-3 bg-white">
        <div class="card-body">
            <form action="{{route('admin.feature.add')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row">

                    <div class="col-md-9">
                        <div class="row">
                            <div class="col-md-6">
                                <label for="">Title</label>
                                <input type="text" name="title" id="title" class="form-control" required>
                            </div>
                            <div class="col-md-6">
                                <label for="">Sub Title</label>
                                <input type="text" name="sub_title" id="sub_title" class="form-control" required>
                            </div>
                            <div class="col-12">
                                <label for="">Short Description</label>
                                <textarea name="short_desc" id="short_desc" cols="30" rows="2" class="form-control" required></textarea>
                            </div>
                            <div class="col-12">
                                <label for="">Sub Short Description</label>
                                <textarea name="sub_short_desc" id="sub_short_desc" cols="30" rows="2" class="form-control" required></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 small">
                        <label for="image">Feature Image</label>
                        <input type="file" name="image" id="image" class="form-control photo" accept="image/*"
                            required>
                        <hr class="m-1">

                        <button class="btn btn-primary">
                            Save
                        </button>
                        <a href=" {{route('admin.feature.index')}}" class="btn btn-danger">Cancel</a>
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
