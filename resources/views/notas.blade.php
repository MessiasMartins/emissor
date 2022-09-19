@extends('layouts.main')

@section('title', 'Cadastro de Notas')

@section('content')

<h1>Cadastro de Notas</h1>

<div class="container">
    <div class="form-group">
        <label>Número da Nota</label>
        <input type="text" class="form-control" required>
    </div>
    <div class="form-group">
        <label>Nome do Tomador</label>
        <input type="text" class="form-control" required>
    </div>
    <div class="form-group">
        <label>Nome do Prestador</label>
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
