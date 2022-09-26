@extends('layouts.main')

@section('title', 'Editando:' . $tomador->nome)

@section('content')

<h1>Editar Tomador</h1>

<div id="create-prestadores-container" class="col-md-6 offset-md-3">
    <div class="container">
        <form action="/tomadores/update/{{$tomador->id}}" method="POST">
        @csrf
        @method('PUT')
            <div class="form-group">
                <label for="title">Nome</label>
                <input type="text" class="form-control" id="nome" name="nome" placeholder="Nome do Tomador" value="{{old('nome', $tomador->nome)}}">
            </div>
            <div class="form-group">
                <label for="title">Endereço</label>
                <input type="text" class="form-control" id="endereco" name="endereco" placeholder="Endereço do Tomador" value="{{old('endereco', $tomador->endereco)}}">
            </div>
            <div class="form-group">
                <label for="title">CNPJ</label>
                <input type="text" class="form-control" id="cnpj" name="cnpj" placeholder="CNPJ do Tomador" value="{{old('cnpj', $tomador->cnpj)}}">
            </div>
            <div class="form-group">
                <label for="title">Telefone</label>
                <input type="text" class="form-control" id="telefone" name="telefone" placeholder="Telefone do Tomador" value="{{old('telefone', $tomador->telefone)}}">
            </div>
            <div class="form-group">
                <label for="title">Email</label>
                <input type="text" class="form-control" id="email" name="email" placeholder="Email do Tomador" value="{{old('email', $tomador->email)}}">
            </div>
            <input type="submit" class="btn btn-success" value="Cadastrar">
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
