@extends('layouts.main')

@section('title', 'Editando:' . $prestador->nome)

@section('content')

<h1>Editar Prestador</h1>

<div id="create-prestadores-container" class="col-md-6 offset-md-3">
    <div class="container">
        <form action="/prestadores/update/{{$prestador->id}}" method="POST">
        @csrf
        @method('PUT')
            <div class="form-group">
                <label for="title">Nome</label>
                <input type="text" class="form-control @error('nome') is-invalid @enderror" id="nome" name="nome" placeholder="Nome do Prestador" value="{{old('nome', $prestador->nome)}}">
                @error('nome')
                <span class="invalid-feedback" role="alert">
                    <strong>{{$message}}</strong>
                </span>
                @enderror
            </div>
            <div class="form-group">
                <label for="title">Endereço</label>
                <input type="text" class="form-control @error('endereco') is-invalid @enderror" id="endereco" name="endereco" placeholder="Endereço do Prestador" value="{{old('endereco', $prestador->endereco)}}">
                @error('endereco')
                <span class="invalid-feedback" role="alert">
                    <strong>{{$message}}</strong>
                </span>
                @enderror
            </div>
            <div class="form-group">
                <label for="title">CNPJ</label>
                <input type="text" class="form-control @error('cnpj') is-invalid @enderror" id="cnpj" name="cnpj" placeholder="CNPJ do Prestador" value="{{old('cnpj', $prestador->cnpj)}}">
                @error('cnpj')
                <span class="invalid-feedback" role="alert">
                    <strong>{{$message}}</strong>
                </span>
                @enderror
            </div>
            <div class="form-group">
                <label for="title">Telefone</label>
                <input type="text" class="form-control @error('endereco') is-invalid @enderror" id="telefone" name="telefone" placeholder="Telefone do Prestador" value="{{old('telefone', $prestador->telefone)}}">
                @error('telefone')
                <span class="invalid-feedback" role="alert">
                    <strong>{{$message}}</strong>
                </span>
                @enderror
            </div>
            <div class="form-group">
                <label for="title">E-mail</label>
                <input type="text" class="form-control @error('endereco') is-invalid @enderror" id="email" name="email" placeholder="Email do Prestador" value="{{old('email', $prestador->email)}}">
                @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{$message}}</strong>
                </span>
                @enderror
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
