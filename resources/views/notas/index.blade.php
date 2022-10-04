@extends('layouts.main')

@section('title', 'Notas')

@section('content')

<h1>Notas</h1>

<form action="{{route('nota.search')}}" method="post">
    @csrf
    <div class="input-group mb-4" >
        <input type="text" class="form-control" name="search" placeholder="Pesquisar por Número:" aria-label="Recipient's username" aria-describedby="basic-addon2">
        <div class="input-group-append">
          <button class="btn btn-outline-secondary" type="submit">Pesquisar</button>
        </div>
      </div>
</form>

<div id="create-notas-container" class="">
    <div class="">
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Número</th>
                    <th>Prestador</th>
                    <th>Tomador</th>
                    <th>Valor</th>
                    <th>E-mail Prestador</th>
                    <th>E-mail Tomador</th>
                </tr>
            </thead>
            <tbody>
                @foreach($notas as $nota)
                <tr>
                    <td>{{$nota->id}}</td>
                    <td>{{$nota->numero}}</td>
                    <td>{{$nota->prestador->nome}}</td>
                    <td>{{$nota->tomador->nome}}</td>
                    <td>{{$nota->valor}}</td>
                    <td>{{$nota->prestador->email}}</td>
                    <td>{{$nota->tomador->email}}</td>
                    <td>
                    <form action="/notas/{{$nota->id}}"method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger delete-btn">Excluir</button>
                        <a href="{{route('nota.edit', [$nota])}}" class="btn btn-info">Editar</a>
                    </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
