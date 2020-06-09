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
            <th scope="col">Nome do Produto</th>
            <th scope="col">Descrição do Produto</th>
            <th scope="col">Fabricante</th>
            <th scope="col">Quantidade</th>
            <th scope="col">Disponível</th>
        </tr>
        </thead>
        <tbody>
        @foreach($products as $product)
            <tr>
                <th scope="row">{{$product->id}}</th>
                <td>{{$product->name}}</td>
                <td>{{$product->description}}</td>
                <td>{{$product->manufactory}}</td>
                <td>{{$product->amount}}</td>
                <td>{{$product->available ? 'Sim' : 'Não'}}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
</body>
@endsection
