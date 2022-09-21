@extends('layouts.main')

@section('title', 'Cadastro de Notas')

@section('content')

<h1>Cadastro de Notas</h1>

<div id="create-prestadores-container" class="col-md-6 offset-md-3">
    <div class="container">
        <form action="/notas" method="POST">
        @csrf
            <div class="form-group">
                <label>Número da Nota</label>
                <input type="text" class="form-control" id="nome" name="nome" placeholder="Número da Nota" required>
            </div>
            <div class="form-group">
                <label>Nome do Tomador</label>
                <input type="text" class="form-control" id="endereco" name="endereco" placeholder="Nome do Tomador" required>
            </div>
            <div class="form-group">
                <label>Nome do Prestador</label>
                <input type="text" class="form-control" id="cnpj" name="cnpj" placeholder="Nome do Prestador" required>
            </div>
            <div class="form-group">
                <label>Valor</label>
                <input type="text" class="form-control" id="telefone" name="telefone" placeholder="Valor" required>
            </div>
            <div class="form-group">
                <label>Email</label>
                <input type="text" class="form-control" id="email" name="email" placeholder="Email do Tomador" required>
            </div>
            <div class="form-group">
                <label>Email</label>
                <input type="text" class="form-control" id="email" name="email" placeholder="Email do Prestador" required>
            </div>
            <input type="submit" class="btn btn-success" value="Cadastrar">
        </form>
    </div>
</div>
@endsection
