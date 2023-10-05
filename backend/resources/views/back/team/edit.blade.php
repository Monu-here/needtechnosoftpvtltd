@extends('layout')
@section('css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Dropify/0.2.2/css/dropify.min.css">
@endsection
@section('linkbar')
    / <a href="{{ route('admin.team.index') }}">Team</a> / Edit
@endsection

@section('content')
    {{-- <div class="row">
        <div class="col-md-6 col-xl-4">
            <div class="card mb-3 widget-content bg-midnight-bloom">
                <div class="widget-content-wrapper text-white">
                    <div class="widget-content-left">
                        <div class="widget-heading">Total Orders</div>
                        <div class="widget-subheading">Last year expenses</div>
                    </div>
                    <div class="widget-content-right">
                        <div class="widget-numbers text-white"><span>1896</span></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-xl-4">
            <div class="card mb-3 widget-content bg-arielle-smile">
                <div class="widget-content-wrapper text-white">
                    <div class="widget-content-left">
                        <div class="widget-heading">Clients</div>
                        <div class="widget-subheading">Total Clients Profit</div>
                    </div>
                    <div class="widget-content-right">
                        <div class="widget-numbers text-white"><span>$ 568</span></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-xl-4">
            <div class="card mb-3 widget-content bg-grow-early">
                <div class="widget-content-wrapper text-white">
                    <div class="widget-content-left">
                        <div class="widget-heading">Followers</div>
                        <div class="widget-subheading">People Interested</div>
                    </div>
                    <div class="widget-content-right">
                        <div class="widget-numbers text-white"><span>46%</span></div>
                    </div>
                </div>
            </div>
        </div>

    </div> --}}
    <div class="car shadow p-3 mb-3 bg-white">
        <div class="card-body">
            <form action="{{ route('admin.team.edit', ['team' => $team->id]) }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row">

                    <div class="col-md-9">
                        <div class="row">
                            <div class="col-md-6">
                                <label for="">Title</label>
                                <input type="text" name="title" id="title" class="form-control"
                                    value="{{ $team->title }}">
                            </div>
                            <div class="col-md-6">
                                <label for="">Team Name</label>
                                <input type="text" name="name" id="name" class="form-control"
                                    value="{{ $team->name }}">
                            </div>
                            <div class="col-12">
                                <label for="">Team Position</label>
                                <input type="text" name="position" id="position" class="form-control"
                                    value="{{ $team->position }}">
                            </div>
                            <div class="col-12">
                                <label for="">Short Description</label>
                                <textarea name="short_des" id="short_des" cols="30" rows="2" class="form-control">{{ $team->short_des }}</textarea>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 small">
                        <label for="image">Team Image</label>
                        <input type="file" name="image" id="image" class="form-control photo" accept="image/*"
                            data-default-file="{{ asset($team->image) }}">

                        <hr class="m-1">

                        <button class="btn btn-primary">
                            Save
                        </button>
                        <a href=" {{ route('admin.team.index') }}" class="btn btn-danger">Cancel</a>
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
