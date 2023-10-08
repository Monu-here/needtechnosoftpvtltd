@extends('layout')
@section('linkbar')
/ Form
@endsection
@section('content')
<div class="card">
    <div class="card-body">
        <div class="shadow">
            <table class="table table-bordered">
                <thead>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Subject</th>
                    <th>Message</th>

                </thead>
                <tbody>
                    @foreach ($contactsubmits as $contactsubmit)
                        <tr>
                            <td>{{ $contactsubmit->name }}</td>
                            <td>{{ $contactsubmit->email }}</td>
                            <td>{{ $contactsubmit->subject }}</td>
                            <td>{{ $contactsubmit->message }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection

