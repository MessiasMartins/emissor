@extends('layouts.main')

@section('title', 'Lista de Prestadores')

@section('content')

<div id="search-container" class="col-md-12 mb-5">
    <h1>Prestadores Cadastrados</h1>
</div>
    <div id="cards-container" class="row">
        @foreach($prestadores as $prestadores)
             <div class="col-lg-4 col-md-12">
                 <div class="card">
                     <div class="card-body text-center">
                       <!-- <p class="card-date">{{ date('d/m/Y', strtotime($prestadores->date)) }}</p>-->
                        <h5 class="card-name">{{ $prestadores->nome }}</h5>
                        <h5 class="card-address">{{ $prestadores->endereco }}</h5>
                        <h5 class="card-cnpj">{{ $prestadores->cnpj }}</h5>
                        <h5 class="card-phone">{{ $prestadores->telefone }}</h5>
                        <h5 class="card-email">{{ $prestadores->email }}</h5>
                    </div>
                    <form action="/prestadores/{{$prestadores->id}}"method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger delete-btn">Excluir</button>
                        <a href="{{route('prestador.edit', [$prestadores])}}" class="btn btn-info">Editar</a>
                    </form>
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection
