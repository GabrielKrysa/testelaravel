@extends('layouts.app')

@section('content')

<body>
<div class="container">
    <h1>Entrar em contato</h1>
    <form action="/contacts" method="post">
        {{ csrf_field() }}
        <div class="form-group">
            <label for="title">Nome</label>
            <input type="text" class="form-control" id="name" name="name">
        </div>
        <div class="form-group">
            <label for="title">Email</label>
            <input type="email" class="form-control" id="email" name="email">
        </div>
        <div class="form-group">
            <label for="description">Telefone</label>
            <input type="tel" class="form-control" id="phone" name="phone"/>
        </div>
        <div class="form-group">
            <label for="title">Assunto</label>
            <input type="text" class="form-control" id="subject" name="subject">
        </div>
        <div class="form-group">
            <label for="description">Mensagem</label>
            <textarea type="text" class="form-control" id="msg" name="msg"></textarea>
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
        <button type="submit" class="btn btn-primary">Enviar</button>
    </form>
</div>
</body>
@endsection

