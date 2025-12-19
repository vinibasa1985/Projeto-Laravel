@extends('layouts.main_layout')
@section('content')


    <title>Todas as Tarefas</title>


    <h1>Lista de Tarefas</h1>
    <p>Aqui vão aparecer as tarefas vinda da base de dados</p>

<table class="table">
  <thead>

    <tr>
      <th scope="col">#</th>
      <th scope="col">Nome</th>
      <th scope="col">Status</th>
      <th scope="col">Data de Conclusão</th>
      <th scope="col">User</th>

    </tr>
  </thead>
  <tbody>

    @foreach ($tasks as $tasks)
    <tr>
      <th scope="row">{{$tasks->id}}</th>
      <td>{{$tasks->name}}</td>
      <td>{{$tasks->status}}</td>
      <td>{{$tasks->due_at}}</td>
      <td>{{$tasks->usname}}</td>
      <td><a href="{{route('tasks.view', $tasks->id)}}" class="btn btn-info">Ver</a></td>
      <td><a class="btn btn-danger" href="{{route('tasks.delete', $tasks->id)}}">Apagar</a></td>
    </tr>
    @endforeach
  </tbody>
</table>




<a href="{{ route('utils.welcome') }}">Voltar para Home</a>


@endsection
