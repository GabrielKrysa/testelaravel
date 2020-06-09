@extends('layouts.app')

@section('content')
    <body>
    @if (Session::has('message'))
        <div class="alert alert-info">{{ Session::get('message') }}</div>
    @endif
    <table class="table">
        <thead class="thead-dark">
        <tr>
            <th scope="col">#</th>
            <th scope="col">Título</th>
            <th scope="col">Autor</th>
            <th scope="col">Dono</th>
            <th scope="col">Data de cadastro</th>
        </tr>
        </thead>
        <tbody>
        @foreach($books as $book)
            <tr>
                <th scope="row">{{$book->id}}</th>
                <td>{{$book->title}}</td>
                <td>{{$book->author}}</td>
                <td>{{$book->owner}}</td>
                <td>{{$book->created_at}}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
    </body>
@endsection