@extends('layouts.main')

@section('title', 'Cadastro de Notas')

@section('content')

<h1>Cadastro de Notas</h1>

<div id="create-notas-container" class="col-md-6 offset-md-3">
    <div class="container">
        <form action="/notas" method="POST">
        @csrf
            <div class="form-group">
                <label>Número da Nota</label>
                <input type="text" class="form-control @error('numero') is-invalid @enderror" id="numero" name="numero" placeholder="Número da Nota" value="{{old('numero')}}">
                @error('numero')
                <span class="invalid-feedback" role="alert">
                    <strong>{{$message}}</strong>
                </span>
                @enderror
            </div>
            <div class="form-group">
                <label>Nome do Tomador</label>
                <select name="tomador_id" id="tomador_id" class="form-control">
                    @foreach($tomadores as $tomador)
                    <option value="{{$tomador->id}}">{{$tomador->nome}}</option>
                    @endforeach
                </select>
                <!--<input type="text" class="form-control @error('tomador') is-invalid @enderror" id="tomador" name="tomador" placeholder="Nome do Tomador" value="{{old('tomador')}}">
                @error('tomador')
                <span class="invalid-feedback" role="alert">
                    <strong>{{$message}}</strong>
                </span>
                @enderror-->
            </div>
            <div class="form-group">
                <label>Nome do Prestador</label>
                <select name="prestador_id" id="prestador_id" class="form-control">
                    @foreach($prestadores as $prestador)
                    <option value="{{$prestador->id}}">{{$prestador->nome}}</option>
                    @endforeach
                </select>
                <!--<input type="text" class="form-control @error('prestador') is-invalid @enderror" id="prestador" name="prestador" placeholder="Nome do Prestador" value="{{old('prestador')}}">
                @error('prestador')
                <span class="invalid-feedback" role="alert">
                    <strong>{{$message}}</strong>
                </span>
                @enderror-->
            </div>
            <div class="form-group">
                <label>Valor</label>
                <input type="text" class="form-control @error('valor') is-invalid @enderror" id="valor" name="valor" placeholder="Valor" value="{{old('valor')}}">
                @error('valor')
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
