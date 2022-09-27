@extends('layouts.main')

@section('title', 'Notas')

@section('content')

<h1>Notas</h1>

<div id="create-prestadores-container" class="col-md-6 offset-md-3">
    <div class="container">
        <table class="table">
            <thead>
                <tr>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                @foreach($notas as $nota)
                <tr>
                    <td>{{$nota->id}}</td>
                    <td>{{$nota->prestador}}</td>
                    <td>{{$nota->tomador}}</td>
                    <td>{{$nota->valor}}</td>
                    <td>{{$nota->email_prestador}}</td>
                    <td>{{$nota->email_tomador}}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
