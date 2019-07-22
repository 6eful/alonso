@extends('layout.site')
@section('titulo', 'Dashboard')

@section('conteudo')
<ul class="breadcrumb-nav">
  <li>Home</li>
</ul>
<a href="{{ route('cliente.index') }}">
<div class="card-modulo">
    <img src="{{ asset('/img/cliente.jpg') }}" alt="Avatar" style="width:100%">
    <div class="container-modulo">
      <h4>Clientes</h4>
    </div>
  </div>
</a>

  <a href="{{ route('proposta.index') }}">
    <div class="card-modulo">
      <img src="{{ asset('/img/proposta.jpg') }}" alt="Avatar" style="width:100%">
      <div class="container-modulo">
        <h4>Propostas</h4>
      </div>
    </div>
  </a>

  @if(Auth::user()->admin)
  <a href="{{ route('usuario.index') }}">
    <div class="card-modulo">
      <img src="{{ asset('/img/agenda.jpg') }}" alt="Avatar" style="width:100%">
      <div class="container-modulo">
        <h4>Usuarios</h4>
      </div>
    </div>
  </a>
  @endif
</div>
@endsection
