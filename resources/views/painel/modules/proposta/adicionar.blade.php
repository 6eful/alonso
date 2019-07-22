@extends('layout.site')
@section('titulo', 'Nova Proposta')

@section('conteudo')
<ul class="breadcrumb-nav">
  <li>Home</li>
  <li>Proposta</li>
  <li>Adicionar nova Proposta</li>
</ul>
<div class="row">
  <div class="container">
    <h3 class="center">Adicionar proposta</h3>
  </div>
  <form class="col s12" method="post" action="{{ route('proposta.salvar') }}" enctype="multipart/form-data">
    {{ csrf_field() }}
    @include('painel.modules.proposta._form')
    <button class="btn deep orange">Salvar</button>
  </form>

@endsection
