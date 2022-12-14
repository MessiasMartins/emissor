@extends('layouts.main')

@section('title', 'Lista de Tomadores')

@section('content')

<div id="search-container" class="col-md-12 mb-5">
    <h1>Tomadores Cadastrados</h1>
</div>
    <div id="cards-container" class="row">
        @foreach($tomadores as $tomadores)
             <div class="col-lg-4 col-md-12">
                 <div class="card">
                     <div class="card-body text-center">
                       <!-- <p class="card-date">{{ date('d/m/Y', strtotime($tomadores->date)) }}</p>-->
                        <h5 class="card-name">{{ $tomadores->nome }}</h5>
                        <h5 class="card-address">{{ $tomadores->endereco }}</h5>
                        <h5 class="card-cnpj">{{ $tomadores->cnpj }}</h5>
                        <h5 class="card-phone">{{ $tomadores->telefone }}</h5>
                        <h5 class="card-email">{{ $tomadores->email }}</h5>
                    </div>
                    <form action="/tomadores/{{$tomadores->id}}"method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger delete-btn">Excluir</button>
                        <a href="{{route('tomador.edit', [$tomadores])}}" class="btn btn-info">Editar</a>
                    </form>
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection
