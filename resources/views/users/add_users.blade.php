@extends('layouts.main_layout')
@section('content')

<!-- <!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <title>Adicionar Utilizador</title>
</head>
<body> -->

<h1>O administrador da página é {{$pageAdmin}}</h1>
    <h1>Olá, aqui podes Adicionar Utilizadores</h1>

    <form method="POST" action="{{ route('users.store') }}">
        @csrf  {{-- Sem essa validação o Laravel não aceita  --}}
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Nome</label>
            <input name="name" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        @error('name')
            Nome inválido
        @enderror
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Email address</label>
            <input name="email" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
        </div>
        @error('email')
            Email inválido
        @enderror
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Password</label>
            <input name="password" type="password" class="form-control" id="exampleInputPassword1">
        </div>
        @error('password')
            password inválido
        @enderror
        <div class="mb-3 form-check">
            <input type="checkbox" class="form-check-input" id="exampleCheck1">
            <label class="form-check-label" for="exampleCheck1">Check me out</label>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>


    <a href="{{ route('utils.welcome') }}">Voltar para Home</a>


    @endsection
<!-- </body>
</html> -->
