@extends('layouts.main_layout')
@section('content')
    <title>Todas as Tarefas</title>


    <h1>Lista de Tarefas</h1>
    <p>Aqui vão aparecer as prendas vindas da base de dados</p>

    <table class="table">
        <thead>

            <tr>
                <th scope="col">#</th>
                <th scope="col">Nome da Prenda</th>
                <th scope="col">Valor Previsto</th>
                <th scope="col">Pessoa a receber Prenda</th>
                <th scope="col">Valor Gasto</th>


            </tr>
        </thead>
        <tbody>

            @foreach ($gifts as $gift)
                <tr>
                    <th scope="row">{{ $gift->id }}</th>
                    <td>{{ $gift->name }}</td>
                    <td>{{ $gift->expected_value }}</td>
                    <td>{{ $gift->usname }}</td> <!-- nome do user vindo do join -->
                    <td>{{ $gift->amount_spent }}</td>
                    <td><a href="{{ route('gifts.view', $gift->id) }}" class="btn btn-info">Ver</a></td>
                    <td><a class="btn btn-danger" href="{{ route('gifts.delete', $gift->id) }}">Apagar</a></td>
                </tr>
            @endforeach
        </tbody>
    </table>




    <a href="{{ route('utils.welcome') }}">Voltar para Home</a>
@endsection
