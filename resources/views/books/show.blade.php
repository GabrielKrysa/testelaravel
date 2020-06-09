@extends('layouts.app')

@section('content')
    <body>
        <div class="container">
            <div class="card">
                <h1>{{ $book->title }}</h1>
                <p class="lead">Por {{ $book->author }}</p>
                <p class="lead">Cadastrado por {{ $book->owner }} em {{ $book->created_at }}</p>
                <form action="{{ route('books.index') }}" method="get">
                    <button type="submit" class="btn btn-dark" style="margin-left: 10px; margin-bottom: 10px">
                        Voltar
                    </button>
                </form>
                <form action="{{ route('books.edit', $book) }}" method="get">
                    <button type="submit" class="btn btn-dark" style="margin-left: 10px; margin-bottom: 10px">
                        Editar
                    </button>
                </form>
                <form action="{{ route('books.destroy', $book) }}" method="post">
                    @method('delete')
                    @csrf
                    <button type="submit" class="btn btn-danger" style="margin-left: 10px; margin-bottom: 10px">
                        Excluir
                    </button>
                </form>
            </div>
        </div>
    </body>
@endsection
