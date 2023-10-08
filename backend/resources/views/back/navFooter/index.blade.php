@extends('layout')
@section('linkbar')
    /Nav Footer
@endsection
@section('toolbar')
    <a href="{{ route('admin.navFooter.add') }}">Nav Footer</a>
@endsection
@section('content')
    <div class="card shadow">
        <div class="card-body">
            <div class="shadow">
                <table class="table table-bordered">
                    <thead>
                        <th>Text 1</th>
                        <th>Text 2</th>
                        <th>Social 1</th>
                        <th>Social 2</th>
                        <th>Copy Right</th>
                        <th>Action</th>
                    </thead>
                    <tbody>
                        @foreach ($navFooters as $navFooter)
                            <tr>
                                <td>{{ $navFooter->text1 }}</td>
                                <td>{{ $navFooter->text2 }}</td>
                                <td>{{ $navFooter->social1 }}</td>
                                <td>{{ $navFooter->social2 }}</td>
                                <td>{{ $navFooter->copy }}</td>
                                <td>
                                    <a href="{{ route('admin.navFooter.edit', ['navFooter' => $navFooter->id]) }}"
                                        class="btn btn-primary" onclick="return confirm('edit')">Edit</a>
                                    <a href="{{ route('admin.navFooter.del', ['navFooter' => $navFooter->id]) }}"
                                        class="btn btn-danger" onclick="return confrim('delete')">Delete</a>
                                </td>
                            </tr>
                        @endforeach

                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
