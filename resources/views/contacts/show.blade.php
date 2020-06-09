@extends('layouts.app')

@section('content')
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
@endsection
