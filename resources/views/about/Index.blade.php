@extends('layout.layout')

@section('title', 'About')

@section('content')

    <h1>This is about</h1>
    <table border="1">
        <thead>
            <tr>
                <th>ID</th>
                <th>Username</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($users as $user)
                <tr>
                    <td>{{ $user->id }}</td>
                    <td>{{ $user->username }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
