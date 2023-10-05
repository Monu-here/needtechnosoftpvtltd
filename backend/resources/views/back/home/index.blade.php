@extends('layout')
@section('linkbar')
    / Home
@endsection
@section('toolbar')
    <a href="{{ route('admin.home.add') }}">Add Home</a>
@endsection
@section('content')
    <div class="card shadow">
        <div class="card-body">
            <div class="shadow">
                <table class="table table-bordered">
                    <thead>
                        <th>Title</th>
                        <th>Image</th>
                        <th>Description</th>
                        <th>Action</th>
                    </thead>
                    <tbody>
                        @foreach ($homes as $home)
                            <tr>
                                <td>{{ $home->title }}</td>
                                <td>
                                    <img src="{{ asset($home->image) }}" alt="" width="50">
                                </td>
                                <td>{{ $home->short_desc }}</td>
                                <td>
                                    <a href="{{ route('admin.home.edit', ['home' => $home->id]) }}"
                                        class="btn btn-primary">Edit</a>
                                    <a href="{{ route('admin.home.del', ['home' => $home->id]) }}" class="btn btn-danger"
                                        onclick="return confirm('Delete')">Delete</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
