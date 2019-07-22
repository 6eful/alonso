@extends('layout.site')
@section('titulo', 'Novo Cliente')

@section('conteudo')
<ul class="breadcrumb-nav">
  <li>Home</li>
  <li>Cliente</li>
  <li>Adicionar novo cliente</li>
</ul>
<div class="row">
  <div class="container">
    <h3 class="center">Adicionar cliente</h3>
  </div>
  <form class="col s12" method="post" action="{{ route('cliente.salvar') }}">
    {{ csrf_field() }}
    @include('painel.modules.cliente._form')
    <button class="btn deep orange">Salvar</button>
  </form>

@endsection
