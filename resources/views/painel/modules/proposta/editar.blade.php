@extends('layout.site')
@section('titulo', 'Editar Usuário')

@section('conteudo')
<ul class="breadcrumb-nav">
  <li>Home</li>
  <li>Proposta</li>
  <li>Editar proposta</li>
</ul>
<div class="row">
  <div class="container">
    <h3 class="center">Editar proposta</h3>
  </div>
  <form class="col s12" method="post" action="{{ route('proposta.atualizar', $dado->id) }}">
    {{ csrf_field() }}
    @include('painel.modules.proposta._formeditar')
    <input type="hidden" name="_method" value="put">
    <button class="btn deep orange">Salvar alterações</button>
  </form>

@endsection
