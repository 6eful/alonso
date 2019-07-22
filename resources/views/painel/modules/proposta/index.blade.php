@extends('layout.site')
@section('titulo', 'Propostas')

@section('conteudo')
<ul class="breadcrumb-nav">
  <li>Home</li>
  <li>Proposta</li>
</ul>
<div class="container">
  <h3 class="center">Lista de Proposta</h3>
</div>
<div class="row">
  <table>
    <thead>
      <tr>
        <th>Cliente</th>
        <th>Proposta feita em</th>
        <th>Inicio do Pagamento</th>
        <th>Quantidade de Parcelas</th>
        <th>Sinal R$</th>
        <th>Valor da parcela R$</th>
        <th>Total</th>
        <th>Status</th>
        <th>Ação</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($dado as $dados)
      <tr>
        <td> {{ $dados['nomeResponsavel'] }}</td>
        <td> {{ date('d/m/Y', strtotime($dados['created_at'])) }}</td>
        <td> {{ date('d/m/Y', strtotime($dados['data'])) }}</td>
        <td> {{ $dados['numeroparcela'] }}</td>
        <td> {{ $dados['sinal'] }}</td>
        <td> {{ $dados['vparcela'] }}</td>
        <td> {{ $dados['valor'] }}</td>
        <td><div id="statusproposta" class="{{$dados['id']}}">{{ $dados['status'] }}</div></td>
        <td>
          <a href="{{ route('proposta.editar.index', $dados['id']) }}"<i class="material-icons">mode_edit</i></a>
          <a href="{{ route('proposta.deletar', $dados['id']) }}"><i class="material-icons">move_to_inbox</i></a>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
</div>
<div class="row">
  <a class="btn green" href="#">Exportar</a>
  <a class="btn blue" href="{{ route('proposta.adicionar.index') }}">Adicionar</a>
</div>
@endsection
