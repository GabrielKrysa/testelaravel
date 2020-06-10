@extends('layouts.app')

@section('content')
    <body>
    <div class="container">
        <h1>Cadastrar novo livro.</h1>
        <form action="{{ route('books.store') }}" method="post">
            {{ csrf_field() }}
            <div class="form-group">
                <label for="title">Título</label>
                <input type="text" class="form-control" id="title" name="title">
            </div>
            <div class="form-group">
                <label for="title">Autor</label>
                <input type="text" class="form-control" id="author" name="author">
            </div>
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <button type="submit" class="btn btn-primary col-md-1">Cadastrar</button>
        </form>
        <a class="btn btn-dark col-md-1" style="margin-top: 10px" href="{{ route('books.index') }}">
            Voltar
        </a>
    </div>
    </body>
@endsection

