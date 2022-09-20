@extends('layouts.main')

@section('title', 'Cadastro de Tomadores')

@section('content')

<h1>Cadastro de Tomadores</h1>

<div id="create-tomadores-container" class="col-md-6 offset-md-3">
    <div class="container">
        <form action="/tomadores" method="POST">
        @csrf
            <div class="form-group">
                <label for="title">Nome</label>
                <input type="text" class="form-control" id="nome" name="nome" placeholder="Nome do Tomador" required>
            </div>
            <div class="form-group">
                <label for="title">Endereço</label>
                <input type="text" class="form-control" id="endereco" name="endereco" placeholder="Endereço do Tomador" required>
            </div>
            <div class="form-group">
                <label for="title">CNPJ</label>
                <input type="text" class="form-control" id="cnpj" name="cnpj" placeholder="CNPJ do Tomadorr" required>
            </div>
            <div class="form-group">
                <label for="title">Telefone</label>
                <input type="text" class="form-control" id="telefone" name="telefone" placeholder="Telefone do Tomador" required>
            </div>
            <div class="form-group">
                <label for="title">Email</label>
                <input type="text" class="form-control" id="email" name="email" placeholder="Email do Tomador" required>
            </div>
            <input type="submit" class="btn btn-success" value="Cadastrar">
            <input type="button" class="btn btn-danger" value="Cancelar">
        </form>
    </div>
</div>
@if ($errors->any())
    <div class="text-center">
        @foreach ($errors->all() as $error)
            <li class="list-none">
                {{$error}}
            </li>
        @endforeach
    </div>
@endif
@endsection
