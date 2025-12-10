@extends('layouts.main_layout')
@section('content')

<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title> -->

    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous"> -->
    <!-- link style.css fica sempre por último -->
    <!-- <link rel="stylesheet" href="{{asset('css/style.css')}}"> -->

    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous" defer></script> -->


<!-- </head>
<body> -->
    <!-- Para declarar qualquer códigos do servidor de php (funções, variáveis, etc...) usando @php @endphp -->
     <!-- arrobaphp -->
     <!-- //código fictício que vem de uma consulta a base de dados -->
     <!-- $surname = 'Barbosa Santos'; -->
     <!-- arrobaendphp -->

     <!-- <nav class="navbar navbar-expand-lg bg-body-tertiary">
<div class="container-fluid">
<a class="navbar-brand" href="#">Navbar</a>
<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
<span class="navbar-toggler-icon"></span>
</button>
<div class="collapse navbar-collapse" id="navbarSupportedContent">
<ul class="navbar-nav me-auto mb-2 mb-lg-0">
<li class="nav-item">
<a class="nav-link active" aria-current="page" href="#">Home</a>
</li>
<li class="nav-item">
<a class="nav-link" href="#">Link</a>
</li>
<li class="nav-item dropdown">
<a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Dropdown
</a>
<ul class="dropdown-menu">
<li><a class="dropdown-item" href="#">Action</a></li>
<li><a class="dropdown-item" href="#">Another action</a></li>
<li><hr class="dropdown-divider"></li>
<li><a class="dropdown-item" href="#">Something else here</a></li>
</ul>
</li>
<li class="nav-item">
<a class="nav-link disabled" aria-disabled="true">Disabled</a>
</li>
</ul>
<form class="d-flex" role="search">
<input class="form-control me-2" type="search" placeholder="Search" aria-label="Search"/>
<button class="btn btn-outline-success" type="submit">Search</button>
</form>
</div>
</div>
</nav> -->



<!-- Testar com o sobrenome acima quando retirar aparece escola -->
    <h1>Home Page de {{$surname ? $surname : 'escola'}}</h1>

    @if ($surname)
        <h5>Olá {{ $surname }}</h5>
        <img  height="20px"  src="{{ asset('images/facebook_1760949785725_7385958730068099517.png') }}" alt="">
        <br>
    @else
    <h6>Olá Utilizador</h6>
    <img src="{{asset('images/nophoto.jpg')}}" alt="">
    @endif



    <img src="{{asset('images/81j3qbbxAbL._AC_SX679_.jpg')}}" alt="">


    <ul>
        <li><a href="{{route('utils.hello')}}">Olá mundo!</a></li>
        <li><a href="{{ route('users.add') }}">Adicionar Utilizador</a></li>
        <li><a href="{{ route('users.all') }}">Ver todos os users</a></li>
    </ul>

    @endsection

<!-- </body>
</html> -->
