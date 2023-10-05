@extends('layout')
@section('css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Dropify/0.2.2/css/dropify.min.css">
    <style>
        /* Chrome, Safari, Edge, Opera */
        input::-webkit-outer-spin-button,
        input::-webkit-inner-spin-button {
            -webkit-appearance: none;
            margin: 0;
        }

        /* Firefox */
        input[type=number] {
            -moz-appearance: textfield;
        }
    </style>
@endsection
@section('linkbar')
    / <a href="{{ route('admin.contact.index') }}">Contact</a> / Add
@endsection

@section('content')
    <div class="car shadow p-3 mb-3 bg-white">
        @csrf
        <div class="card-body">
                <form action="{{ route('admin.contact.add') }}" method="POST">
                    @csrf
                    <div class="row">
                        <div class="col-md-4 mb-2">
                            <div>
                                <label for="">Address</label>
                                <input type="text" name="address" id="address" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-4 mb-2">
                            <div>
                                <label for="">Phone Number</label>
                                <input type="number" name="phone" id="phone" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-4 mb-2">
                            <div>
                                <label for="">Gmail</label>
                                <input type="email" name="mail" id="mail" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-4 mb-2">
                            <div>
                                <label for="">Opening and closing time (day)</label>
                                <input type="text" name="time" id="time" class="form-control">
                            </div>
                        </div>
                        <div class="text-end" style="padding-top:2rem">
                            <button class="btn btn-primary">save</button>
                            <a href="{{ route('admin.contact.index') }}" class="btn btn-danger">Cancel</a>
                        </div>
                    </div>
                </form>
            </div>
        </form>
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
