@extends('layout.site')
@section('titulo', 'Novo Usuário')

@section('conteudo')
<ul class="breadcrumb-nav">
  <li>Home</li>
  <li>Usuarios</li>
  <li>Adicionar novo usuário</li>
</ul>
<div class="row">
  <div class="container">
    <h3 class="center">Adicionar usuário</h3>
  </div>
  <form class="col s12" method="post" action="{{ route('usuario.salvar') }}">
    {{ csrf_field() }}
    @include('painel.modules.usuario._form')
    <button class="btn deep orange">Salvar</button>
  </form>

@endsection
