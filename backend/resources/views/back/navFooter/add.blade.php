@extends('layout')
@section('css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Dropify/0.2.2/css/dropify.min.css">
@endsection
@section('linkbar')
    / <a href="{{ route('admin.navFooter.index') }}">Nav Footer</a> / Add
@endsection

@section('content')
    <div class="car shadow p-3 mb-3 bg-white">
        <div class="card-body">
            <form action="{{ route('admin.navFooter.add') }}" method="POST">
                @csrf
                <div class="row">

                    <div class="col-md-12">
                        <div class="row">
                            <div class="col-md-2">
                                <label for="">Text1</label>
                                <input type="text" name="text1" id="name" class="form-control">
                            </div>
                            <div class="col-md-2">
                                <label for="">Text2</label>
                                <input type="text" name="text2" id="text2" class="form-control">
                            </div>
                            <div class="col-md-2">
                                <label for="">Text3</label>
                                <input type="text" name="text3" id="text3" class="form-control">
                            </div>
                            <div class="col-md-2">
                                <label for="">Text4</label>
                                <input type="text" name="text4" id="text4" class="form-control">
                            </div>
                            <div class="col-md-2">
                                <label for="">Text5</label>
                                <input type="text" name="text5" id="text5" class="form-control">
                            </div>
                            <div class="col-md-2">
                                <label for="">Text6</label>
                                <input type="text" name="text6" id="text6" class="form-control">
                            </div>
                            <div class="col-md-6">
                                <label for="">Social 1</label>
                                <input type="url" name="social1" id="social1" class="form-control">
                            </div>
                            <div class="col-md-6">
                                <label for="">Social 2</label>
                                <input type="url" name="social2" id="social2" class="form-control">
                            </div>
                            <div class="col-md-6">
                                <label for="">Social 3</label>
                                <input type="url" name="social3" id="social3" class="form-control">
                            </div>
                            <div class="col-md-6">
                                <label for="">Social 4</label>
                                <input type="url" name="social4" id="social4" class="form-control">
                            </div>

                            <div class="col-12">
                                <label for="">Copy Right</label>
                                <textarea name="copy" id="copy" cols="30" rows="2" class="form-control"></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 small">


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
{{-- @section('js')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Dropify/0.2.2/js/dropify.min.js"
        integrity="sha512-8QFTrG0oeOiyWo/VM9Y8kgxdlCryqhIxVeRpWSezdRRAvarxVtwLnGroJgnVW9/XBRduxO/z1GblzPrMQoeuew=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script>
        $(document).ready(function() {
            $(".photo").dropify();
        });
    </script>
@endsection --}}
