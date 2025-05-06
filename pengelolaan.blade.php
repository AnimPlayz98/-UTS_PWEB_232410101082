@extends('layouts.app')

@section('content')
    <h2>Pengelolaan Data</h2>
    <table>
        <thead>
            <tr><th>ID</th><th>Nama</th><th>Deskripsi</th></tr>
        </thead>
        <tbody>
        @foreach (\$dataList as \$data)
            <tr>
                <td>{{ \$data['id'] }}</td>
                <td>{{ \$data['name'] }}</td>
                <td>{{ \$data['desc'] }}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection