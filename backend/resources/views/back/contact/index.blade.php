@extends('layout')
@section('linkbar')
    / Contact
@endsection
@section('toolbar')
    <a href="{{ route('admin.contact.add') }}">Add Contact</a>
@endsection
@section('content')
    <div class="card shadow">
        <div class="card-body">
            <div class="shadow">
                <table class="table table-bordered">
                    <thead>
                        <th>Address</th>
                        <th>Phone Number</th>
                        <th>Mail</th>
                        <th>Time</th>
                        <th>Action</th>

                    </thead>
                    <tbody>
                        @foreach ($contacts as $contact)
                            <tr>
                                <td>{{ $contact->address }}</td>
                                <td>{{ $contact->phone }}</td>
                                <td>{{ $contact->mail }}</td>
                                <td>{{ $contact->time }}</td>
                                <td>
                                    <a href="{{ route('admin.contact.edit', ['contact' => $contact->id]) }}"
                                        class="btn btn-primary" onclick="return confirm('edit')">Edit</a>
                                    <a href="{{ route('admin.contact.del', ['contact' => $contact->id]) }}"
                                        class="btn btn-danger" onclick=" return confirm('delete')">Delete</a>
                                </td>
                            </tr>
                        @endforeach

                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
