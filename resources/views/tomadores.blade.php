@extends('layouts.main')

@section('title', 'Cadastro de Tomadores')

@section('content')

<h1>Cadastro de Tomadores</h1>

<div id="create-prestadores-container" class="col-md-6 offset-md-3">
    <div class="container">
        <form action="/prestadores" method="POST"></form>
        @csrf
            <div class="form-group">
                <label>Nome</label>
                <input type="text" class="form-control" id="nome" name="nome" placeholder="Nome do Prestador" required>
            </div>
            <div class="form-group">
                <label>Endereço</label>
                <input type="text" class="form-control" id="endereco" name="endereco" placeholder="Endereço do Prestador" required>
            </div>
            <div class="form-group">
                <label>CNPJ</label>
                <input type="text" class="form-control" id="cnpj" name="cnpj" placeholder="CNPJ do Prestador" required>
            </div>
            <div class="form-group">
                <label>Telefone</label>
                <input type="text" class="form-control" id="telefone" name="telefone" placeholder="Telefone do Prestador" required>
            </div>
            <div class="form-group">
                <label>Email</label>
                <input type="text" class="form-control" id="email" name="email" placeholder="Email do Prestador" required>
            </div>
            <input type="submit" class="btn btn-success" value="Cadastrar">
            <input type="button" class="btn btn-danger" value="Cancelar">
        </form>
    </div>
</div>
@endsection
