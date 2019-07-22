<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('titulo')</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
        <link rel="stylesheet" href="{{ asset('css/style-sidebar.css') }}">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="{{ asset('js/jquery-sidebar.js') }}"></script>
        <script src="{{ asset('js/jquery-alonso.js') }}"></script>
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    </head>
    <body>
        <div class="wrapper">
           <nav id="sidebar">
             <div class="sidebar-header">
               <picture>
                 <img src="{{ asset('/img/user.jpg') }}" alt="..." class="foto-perfil">
               </picture>
             </div>

             <ul class="list-unstyled components">
               <p>{{Auth::user()->name}}</p>
               <li><a href="{{ route('cliente.index') }}">Clientes</a></li>
               <li><a href="{{ route('proposta.index') }}">Proposta</a></li>
               @if(Auth::user()->admin)
               <li><a href="{{ route('usuario.index') }}">Usuarios</a></li>
               @endif
               <li><a href="{{ route('login.sair') }}">Sair</a></li>
             </ul>
           </nav>
           <div id="content">
             <nav class="navbar navbar-default">
               <div class="container-fluid">
                 <div class="navbar-header">
                  <button type="button" id="sidebarCollapse" class="btn btn-info navbar-btn">
                    <i class="material-icons">menu</i>
                  </button>
                 </div>
               </div>
             </nav>
             <div class="wrapper-content">
