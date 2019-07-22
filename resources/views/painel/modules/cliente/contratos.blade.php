@extends('layout.site')
@section('titulo', 'Clientes')

@section('conteudo')
<ul class="breadcrumb-nav">
  <li>Home</li>
  <li>Cliente</li>
  <li>{{ $dadosusuario->nomefantasia }}</li>
</ul>
<div class="container">

  <h3 class="center">{{ $dadosusuario->nomefantasia }}</h3>

</div>
<div class="row">
  <table>
    <thead>
      <tr>
        <th>Id</th>
        <th>Endereço</th>
        <th>Valor</th>
        <th>Sinal</th>
        <th>Parcelas</th>
        <th>Status</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($listadecontratos as $dado)
      <tr>
        <td> {{ $dado['id'] }}</td>
        <td> {{ $dado['endereco'] }}</td>
        <td> {{ $dado['valor'] }}</td>
        <td> {{ $dado['sinal'] }}</td>
        <td> {{ $dado['numeroparcela'] }}</td>
        <td> {{ $dado['status'] }}</td>
      </tr>
      @endforeach
    </tbody>
  </table>
</div>
<div class="row">
  <a class="btn blue" href="{{ route('cliente.index') }}">Voltar</a>
</div>


@endsection
