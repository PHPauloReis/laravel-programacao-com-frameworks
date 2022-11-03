@extends('layout.template')
@section('main')

<h1 class="mb-5">Listagem de veículos</h1>

<table class="table">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Modelo</th>
            <th scope="col">Fabricante</th>
            <th scope="col">Ano</th>
            <th scope="col">Modelo</th>
            <th scope="col">Lançamento</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($veiculos as $veiculo)

        <tr>
            <td>{{ $veiculo->id }}</td>
            <td><a href="{{ route('veiculos.show', $veiculo->id) }}">{{ $veiculo->modelo }}</a></td>
            <td>{{ $veiculo->fabricante }}</td>
            <td>{{ $veiculo->ano_fabricacao }}</td>
            <td>{{ $veiculo->ano_modelo }}</td>
            <td>{{ $veiculo->disponivel_em }}</td>
        </tr>

        @endforeach
    </tbody>
</table>

{{ $veiculos->links() }}

@endsection
