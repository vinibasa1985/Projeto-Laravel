 @extends('layouts.main_layout')  {{--Ja temos o Bootstrap importado pelo main_layout--}}
@section('content')
{{-- O viwes mostra a parte visual no Browser --}}
<h2>O email de contato do {{$cesaeInfo['name']}}, caso detecte erros é {{$cesaeInfo['email']}}, endereço {{$cesaeInfo['address']}}</h2>
<h5>Aqui tem todos os utilizadores de forma estática (definido num array sem base de dados)</h5>

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

<h5>Users que são carregados da base de dados (tabela de users)</h5>
<table class="table">
  <thead>

    <tr>
      <th scope="col">#</th>
      <th scope="col">Nome</th>
      <th scope="col">Email</th>
      <th scope="col">NIF</th>
    </tr>
  </thead>
  <tbody>
    {{-- {{dd($users)}} --}}
    @foreach ($users as $users)
    <tr>
      <th scope="row">{{$users->id}}</th>
      <td>{{$users->name}}</td>
      <td>{{$users->email}}</td>
      <td>{{$users->nif}}</td>
    </tr>
    @endforeach
  </tbody>
</table>



<a href="{{ route('utils.welcome') }}">Voltar para Home</a>

@endsection
