@extends('layout')
@section('linkbar')
    / Team
@endsection
@section('toolbar')
    <a href="{{ route('admin.team.add') }}">Add Team</a>
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
                        <th>Position</th>
                        <th>Action</th>
                    </thead>
                    <tbody>
                        @foreach ($teams as $team)
                            <tr>
                                <td>{{ $team->title }}</td>
                                <td>{{ $team->short_des }}</td>
                                <td>
                                    <img src="{{ asset($team->image) }}" alt="" srcset="" width="50">
                                </td>
                                <td>{{ $team->name }}</td>
                                <td>{{ $team->position }}</td>
                                <td>
                                    <a href="{{ route('admin.team.edit', ['team' => $team->id]) }}"
                                        class="btn btn-primary">Edit</a>
                                    <a href="{{ route('admin.team.del', ['team' => $team->id]) }}" class="btn btn-danger"
                                        onclick="return confirm('delete')">Delete</a>
                                </td>
                            </tr>
                        @endforeach

                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
