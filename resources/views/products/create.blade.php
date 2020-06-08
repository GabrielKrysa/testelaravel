<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
          integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
</head>
    <body>
    <div class="container">
        <h1>Adicionar Novo Produto</h1>
        <form action="/products" method="post">
            {{ csrf_field() }}
            <div class="form-group">
                    <label for="title">Nome do Produto</label>
                <input type="text" class="form-control" id="productName" name="name">
            </div>
            <div class="form-group">
                <label for="description">Fabricante</label>
                <select class="form-control" name="manufactory">
                    <option>Apple</option>
                    <option>Google</option>
                    <option>LG</option>
                    <option>Samsung</option>
                </select>
            </div>
            <div class="form-group">
                <label for="description">Quantidade</label>
                <input type="text" class="form-control" id="productAmount" name="amount"/>
            </div>
            <div class="form-group">
                <label for="description">Produto Diponível</label><br/>
                <label class="radio-inline"><input type="radio" name="available" value="1"> Sim</label>
                <label class="radio-inline"><input type="radio" name="available" value="0"> Não</label>
            </div>
            <div class="form-group">
                <label for="description">Descrição</label>
                <textarea type="text" class="form-control" id="description" name="description"></textarea>
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
            <button type="submit" class="btn btn-primary">Cadastrar</button>
        </form>
    </div>
    </body>
</html>
