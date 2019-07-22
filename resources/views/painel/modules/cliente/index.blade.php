@extends('layout.site')
@section('titulo', 'Clientes')

@section('conteudo')
<ul class="breadcrumb-nav">
  <li>Home</li>
  <li>Cliente</li>
</ul>
<div class="container">
  <h3 class="center">Lista de Clientes</h3>
</div>
<div class="row">
  <table>
    <thead>
      <tr>
        <th>Id</th>
        <th>CPF</th>
        <th>CNPJ</th>
        <th>Email</th>
        <th>Nome Responsável</th>
        <th>Ação</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($dados as $dado)
      <tr>
        <td> {{ $dado->id }}</td>
        <td> {{ $dado->cpf }}</td>
        <td> {{ $dado->cnpj }}</td>
        <td> {{ $dado->email }}</td>
        <td> {{ $dado->nomeResponsavel }}</td>
        <td>
          <a href="{{ route('cliente.editar.index', $dado->id) }}"<i class="material-icons">mode_edit</i></a>
          <a href="{{ route('cliente.deletar', $dado->id) }}"><i class="material-icons">move_to_inbox</i></a>
          <a href="{{ route('cliente.visualizar', $dado->id) }}"><i class="material-icons">pageview</i></a>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
</div>
<div class="row" align="center" style="cursor:pointer;">
      {{$dados->links()}}
</div>
<div class="row">
  <a class="btn blue" href="{{ route('cliente.adicionar.index') }}">Adicionar</a>
</div>


@endsection
