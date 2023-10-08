@extends('layout')
@section('toolbar')
    <a href="{{ route('admin.test.add') }}">Add Testimonial</a>
@endsection
@section('linkbar')
    / Testimonial
@endsection
@section('content')
    <div class="card">
        <div class="card-body">
            <div class="shadow">
                <table class="table table-bordered">
                    <thead>
                        <th>Name</th>
                        <th>Description</th>
                        <th>Image</th>
                        <th>Position</th>
                        <th>Action</th>
                    </thead>
                    <tbody>
                        @foreach ($testmonials as $testmonial)
                            <tr>
                                <td>{{ $testmonial->name }}</td>
                                <td>{{ $testmonial->short_desc }}</td>
                                <td>
                                    <img src="{{ asset($testmonial->image) }}" alt="" width="50">
                                </td>
                                <td>{{ $testmonial->position }}</td>
                                <td>
                                    <a href="{{ route('admin.test.edit', ['testmonial' => $testmonial->id]) }}"
                                        class="btn btn-primary" onclick="return confirm('edit')">Edit</a>
                                    <a href="{{ route('admin.test.del', ['testmonial' => $testmonial->id]) }}"
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
