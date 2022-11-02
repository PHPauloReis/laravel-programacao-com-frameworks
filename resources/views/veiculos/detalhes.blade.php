@extends('layout.template')
@section('main')

<h1 class="mb-5">Visualizando veículo</h1>

<ul class="list-group">
  <li class="list-group-item">Modelo: {{ $veiculo->modelo }}</li>
  <li class="list-group-item">Fabricante: {{ $veiculo->modelo }}</li>
  <li class="list-group-item">Ano Fabricação: {{ $veiculo->ano_fabricacao }}</li>
  <li class="list-group-item">Ano Modelo: {{ $veiculo->ano_modelo }}</li>
  <li class="list-group-item">Disponível em: {{ $veiculo->disponivel_em->format('d/m/Y') }}</li>
</ul>


@endsection
