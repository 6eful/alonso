@extends('layout.site')
@section('titulo', 'Editar Usuário')

@section('conteudo')
<ul class="breadcrumb-nav">
  <li>Home</li>
  <li>Usuarios</li>
  <li>Editar usuário</li>
</ul>
<div class="row">
  <div class="container">
    <h3 class="center">Editar usuário</h3>
  </div>
  <form class="col s12" method="post" action="{{ route('cliente.atualizar', $dado->id) }}">
    {{ csrf_field() }}
    @include('painel.modules.cliente._form')
    <input type="hidden" name="_method" value="put">
    <button class="btn deep orange">Salvar alterações</button>
  </form>

@endsection
