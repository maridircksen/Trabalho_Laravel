@extends('menu')

@section('title', 'Contato - Enviados')

@section('content')
    <h1>Dados do Contato</h1>
    <p>Seus dados foram enviados com sucesso!</p>
    <ul>
        <li>Nome: {{$nome}}</li>
        <li>E-mail:  {{$email}}</li>
        <li>Mensagem: {{$mensagem}}</li>
    </ul>
@endsection