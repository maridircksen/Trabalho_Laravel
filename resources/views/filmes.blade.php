@extends('menu')

@section('title', 'Filmes Favoritos')

@section('content')
    
    <h1>Filmes</h1>

    @foreach ($filmes as $filme)
        
    <table class="table table-striped">
        <thead class="thead-dark">
            <tr>
                <th style="width:150px">Título</th>
                <th style="width:150px">Ano</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td style="width:150px">{{ $filme['titulo'] }}</td>
                <td style="width:150px">{{ $filme['ano'] }}</td>
            </tr>
        </tbody>
    </table>

    @endforeach

@endsection