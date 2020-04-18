@extends('layout')

@section('cabecalho')
    Adicionar Usuário
@endsection

@section('conteudo')
<form method="post" action="/users/create">
    @csrf
    <div class="form-group">
        <label for="name">Nome</label>
        <input type="text" name="name" id="name" required class="form-control">
    </div>

    <div class="form-group">
        <label for="email">Nick</label>
        <input type="text" name="nick" id="nick" required class="form-control">
    </div>

    <div class="form-group">
        <label for="password">Senha</label>
        <input type="password" name="password" id="password" required min="1" class="form-control">
    </div>

    <div class="form-group">
        <label for="nome" class="">Username</label>
        <input type="text" class="form-control" name="username" id="username">
    </div>

    <div class="form-group">
        <label for="nome" class="">Número</label>
        <input type="text" class="form-control" name="number" id="number">
    </div>

    <div class="form-group">
        <label for="id">User:</label>
        <select class="form-control" id="id" name="id">
            @foreach ($users as $user)
                <option value="{{$user->id}}">{{$user->name}}</option>
            @endforeach
        </select>
    </div>

    <button class="btn btn-primary">Adicionar</button>
</form>
@endsection