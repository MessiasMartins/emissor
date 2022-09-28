@extends('layouts.main')

@section('title', 'Notas')

@section('content')

<h1>Notas</h1>

<div id="create-prestadores-container" class="col-md-6 offset-md-3">
    <div class="container">
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
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
                    <td>{{$nota->prestador->nome}}</td>
                    <td>{{$nota->tomador->nome}}</td>
                    <td>{{$nota->valor}}</td>
                    <td>{{$nota->prestador->email}}</td>
                    <td>{{$nota->tomador->email}}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
