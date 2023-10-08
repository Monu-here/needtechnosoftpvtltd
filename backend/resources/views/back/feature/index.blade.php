@extends('layout')
@section('linkbar')
    / Feature
@endsection
@section('toolbar')
    <a href="{{ route('admin.feature.add') }}">Add Feature</a>
@endsection
@section('content')
    <div class="card shadow">
        <div class="card-body">
            <div class="shadow">
                <table class="table table-bordered">
                    <thead>
                        <th>Title</th>
                        <th>Short Description</th>
                        <th>Image</th>
                        <th>Sub Title</th>
                        <th>Sub Short Description</th>
                        <th>Action</th>
                    </thead>
                    <tbody>
                        @foreach ($features as $feature)
                            <tr>
                                <td>{{ $feature->title }}</td>
                                <td>{{ $feature->short_desc }}</td>
                                <td><img src="{{ asset($feature->image) }}" alt="" width="50"></td>
                                <td>{{ $feature->sub_title }}</td>
                                <td>{{ $feature->sub_short_desc }}</td>
                                <td>
                                    <a href="{{ route('admin.feature.edit', ['feature' => $feature->id]) }}"
                                        class="btn btn-primary" onclick="return confirm('edit')">Edit</a>
                                    <a href="{{ route('admin.feature.del', ['feature' => $feature->id]) }}"
                                        class="btn btn-danger">Delete</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
