<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
          integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div class="card">
            <div class="card-header">
                <h1>Contato Recebido</h1>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="">Nome:</div>
                    <div class="col">{{ $request->name }}</div>
                </div>
                <div class="row">
                    <div class="">Email:</div>
                    <div class="col">{{ $request->email }}</div>
                </div>
                <div class="row">
                    <div class="">Telefone:</div>
                    <div class="col">{{ $request->phone }}</div>
                </div>
                <div class="row">
                    <div class="">Assunto:</div>
                    <div class="col">{{ $request->subject }}</div>
                </div>
                <div class="row">
                    <div class="">Mensagem:</div>
                    <div class="col">{{ $request->msg }}</div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
