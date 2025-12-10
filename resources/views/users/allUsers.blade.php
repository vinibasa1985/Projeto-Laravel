@extends('layouts.main_layout')
@section('content')

<h2>O email de contato do {{$cesaeInfo['name']}}, caso detecte erros é {{$cesaeInfo['email']}}, endereço {{$cesaeInfo['address']}}</h2>
<h5>Aqui tem todos os utilizadores</h5>

 <!-- Para transformar o array de students em string precisamos usar um ciclo for -->
{{-- <ul>
    @foreach ($students as $students)
    <li>{{$students}}</li>
    @endforeach
</ul> --}}

{{-- Abaixo esta em forma de array --}}
<ul>
    @foreach ($students as $students)
    <li>{{$students['name']}} e o email é {{$students['email']}} </li>
    @endforeach
</ul>



<a href="{{ route('utils.welcome') }}">Voltar para Home</a>

@endsection
