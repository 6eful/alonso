@extends('layout.site')
@section('titulo', 'Usuarios')

@section('conteudo')
<ul class="breadcrumb-nav">
  <li>Home</li>
  <li>Usuarios</li>
</ul>
<div class="container">
  <h3 class="center">Lista de Usuarios</h3>
</div>
<div class="row">
  <table>
    <thead>
      <tr>
        <th>Id</th>
        <th>nome</th>
        <th>email</th>
        <th>Ação</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($dados as $dado)
      <tr>
        <td> {{ $dado->id }}</td>
        <td> {{ $dado->name }}</td>
        <td> {{ $dado->email }}</td>
        <td>
          <a href="{{ route('usuario.editar.index', $dado->id) }}"<i class="material-icons">mode_edit</i></a>
          <a href="{{ route('usuario.deletar', $dado->id) }}"><i class="material-icons">move_to_inbox</i></a>
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
  <a class="btn blue" href="{{ route('usuario.adicionar.index') }}">Adicionar</a>
</div>


@endsection
