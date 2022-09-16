@extends('layouts.main')

@section('title', 'Cadastro de Prestadores')

@section('content')

<h1>Cadastro de Prestadores</h1>

<div class="container">
    <div class="form-group">
        <label>Nome</label>
        <input type="text" class="form-control" required>
    </div>
    <div class="form-group">
        <label>Endereço</label>
        <input type="text" class="form-control" required>
    </div>
    <div class="form-group">
        <label>cnpj/cpf</label>
        <input type="text" class="form-control" required>
    </div>
    <div class="form-group">
        <label>Telefone</label>
        <input type="text" class="form-control" required>
    </div>
    <div class="form-group">
        <label>Email</label>
        <input type="email" class="form-control" required>
    </div>
    <button type="button" class="btn btn-success">Enviar</button>
    <button type="button" class="btn btn-danger">Cancelar</button>
</div>
@endsection
