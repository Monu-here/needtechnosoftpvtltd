@extends('layout')
@section('linkbar')
    / Service
@endsection
@section('toolbar')
    <a href="{{ route('admin.service.add') }}">Add Service</a>
@endsection
@section('content')
    <div class="card shadow">
        <div class="card-body">
            <div class="shadow">
                <table class="table table-bordered">
                    <thead>
                        <th>Title</th>
                        <th>Description</th>
                        <th>Image</th>
                        <th>Name</th>
                        <th>Sub Description </th>
                        <th>Action</th>
                    </thead>
                    <tbody>
                        @foreach ($services as $service)
                            <tr>
                                <td>{{ $service->title }}</td>
                                <td>{{ $service->short_desc }}</td>
                                <td>
                                    <img src="{{ asset($service->image) }}" alt="" width="50">
                                </td>
                                <td>{{ $service->name }}</td>
                                <td>{{ $service->sub_short_desc }}</td>
                                <td>
                                    <a href="{{ route('admin.service.edit', ['service' => $service->id]) }}"
                                        class="btn btn-primary" onclick="return confirm('edit')">Edit</a>
                                    <a href="{{ route('admin.service.del', ['service' => $service->id]) }}"
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
