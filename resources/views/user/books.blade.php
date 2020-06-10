@extends('layouts.app')

@section('content')
    <body>
    @if(Session::has('flash_message'))
        <div class="alert alert-success">
            {{ Session::get('flash_message') }}
        </div>
    @endif
    <div class="row" style="margin-left: 10px; margin-bottom: 10px">
        <a class="btn btn-dark col-md-2" style="margin-left: 10px; margin-bottom: 10px" href="{{ route('books.create') }}">
            Cadastrar livro
        </a>
        <a class="btn btn-dark col-md-1" style="margin-left: 10px; margin-bottom: 10px" href="{{ route('books.index') }}">
            Voltar
        </a>
    </div>
    <table class="table">
        <thead class="thead-dark">
        <tr>
            <th scope="col">#</th>
            <th scope="col">Título</th>
            <th scope="col">Autor</th>
            <th scope="col">Data de cadastro</th>
            <th scope="col">Status</th>
            <th scope="col"></th>
        </tr>
        </thead>
        <tbody>
        @foreach($books as $book)
            <tr>
                <th scope="row">{{$book->id}}</th>
                <td>{{$book->title}}</td>
                <td>{{$book->author}}</td>
                <td>{{$book->created_at}}</td>
                <td>{{$book->available ? 'Disponível' : 'Emprestado' }}</td>
                <td>
                    <p>
                        <a href="{{ route('books.show', $book) }}" class="btn btn-primary">Ver</a>
                        <a href="{{ route('books.edit', $book) }}" class="btn btn-primary">Editar</a>
                    </p>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
    </body>
@endsection
