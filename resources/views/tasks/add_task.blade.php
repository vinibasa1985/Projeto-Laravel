@extends('layouts.main_layout')

@section('content')
<div class="container">
    {{-- @php
    //aqui coloca qualquer código de php: funções, variáveis, etc
    $surname = 'Monteiro'; //declara variável, como é string pode usar pelicas
    @endphp --}}


    <h2>Adicionar Tarefa</h2>

    {{-- Mensagens de erro --}}
    {{-- @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('tasks.store') }}" method="POST">
        @csrf --}}

        {{-- Nome da tarefa --}}
        {{-- <div class="form-group">
            <label for="name">Nome da Tarefa</label>
            <input
                type="text"
                id="name"
                name="name"
                class="form-control"
                value="{{ old('name') }}"
                maxlength="50"
                required
                placeholder="Ex: Descreva qual tarefa será executado"
            >
        </div> --}}

        {{-- Descrição --}}
        {{-- <div class="form-group">
            <label for="description">Descrição</label>
            <textarea
                id="description"
                name="description"
                class="form-control"
                rows="4"
                required
                placeholder="Descreva a tarefa a realizar..."
            >{{ old('description') }}</textarea>
        </div> --}}

        {{-- Utilizador --}}
        {{-- <div class="form-group">
            <label for="user_id">Utilizador</label>
            <select
                id="user_id"
                name="user_id"
                class="form-control"
                required
            >
                <option value="">-- Selecionar Utilizador --</option>

                @foreach ($users as $user)
                    <option
                        value="{{ $user->id }}"
                        {{ old('user_id') == $user->id ? 'selected' : '' }}
                    >
                        {{ $user->name }} ({{ $user->email }})
                    </option>
                @endforeach
            </select>
        </div> --}}

        {{-- Botões --}}
        {{-- <div class="form-actions">
            <button type="submit" class="btn btn-success">
                Guardar Tarefa
            </button>

            <a href="{{ url()->previous() }}" class="btn btn-secondary">
                Cancelar
            </a>
        </div>
    </form>
</div> --}}

 <div class="container">

        <form method="POST" action="{{ route('tasks.store') }}">
            @csrf
            <div class="mb-3">
                <label for="exampleInputNome1" class="form-label">Tarefa</label>
                <input required name="name" type="text" class="form-control" id="exampleInputNome"
                    aria-describedby="nomeHelp" placeholder="Insira o nome da tarefa">

                @error('name')
                    <div class="alert alert-danger">Insira o nome da tarefa</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Descrição</label>
                <textarea required name="description" class="form-control" id="exampleFormControlTextarea1"
                    placeholder="Insira a descrição" rows="3"></textarea>

                @error('description')
                    <div class="alert alert-danger">Insira a descrição</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="exampleFormControlTextarea2" class="form-label">ID do Utilizador</label>
                <div class="mb-3">
                    <label for="exampleInputUser1" class="form-label">User</label>
                    <select name="utilizador">
                        <option value="">--Please choose an option--</option>
                        @foreach ($users as $user)
                            <option value="{{$user->id}}">{{$user->name}}</option>

                        @endforeach

                    </select>


                </div>

                @error('utilizador')
                    <div class="alert alert-danger">Insira o codigo do utilizador</div>
                @enderror
            </div>

            <div class="mb-3 form-check">
                <input required name="terms" type="checkbox" class="form-check-input" id="exampleCheck1">
                <label class="form-check-label" for="exampleCheck1">Li e aceito a Política de Privacidade</label>
            </div>
            @error('terms')
                <div class="alert alert-danger">Aceite a Política de Privacidade</div>
            @enderror
            <button type="submit" class="btn btn-primary">Enviar</button>
        </form>
    </div>

    <br>


    <a href="{{ route('utils.welcome') }}">Voltar para Home</a>


@endsection
