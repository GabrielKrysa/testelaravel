@extends('layouts.app')

@section('content')
    <body>
        <div class="container">
            <div class="card">
                <h1>{{ $book->title }}</h1>
                <p class="lead">Por {{ $book->author }}</p>
                <p class="lead">Cadastrado por {{ ($book->user)->name }} em {{ $book->created_at }}</p>
                <p class="lead">
                    {{
                    $book->available? $book->returned_at != null ? 'Devolvido em '.$book->returned_at : 'Este livro nunca foi retirado.'
                    : 'Retirado em '.$book->withdrawn_at
                    }}
                </p>
                <a class="btn btn-primary col-md-1" style="margin-left: 10px; margin-bottom: 10px" href="{{ route('books.change', $book) }}">
                    {{ $book->available? 'Retirar' : 'Devolver' }}
                </a>
                <a class="btn btn-dark col-md-1" style="margin-left: 10px; margin-bottom: 10px" href="{{ route('books.edit', $book) }}">
                    Editar
                </a>
                <a class="btn btn-dark col-md-1" style="margin-left: 10px; margin-bottom: 10px" href="{{ route('books.index') }}">
                    Voltar
                </a>
                <form action="{{ route('books.destroy', $book) }}" method="post">
                    @method('delete')
                    @csrf
                    <button type="submit" class="btn btn-danger col-md-1" style="margin-left: 10px; margin-bottom: 10px">
                        Excluir
                    </button>
                </form>
            </div>
        </div>
    </body>
@endsection
