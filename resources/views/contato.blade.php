@extends('menu')

@section('title', 'Contato')

@section('content')
    <h1>Entre em contato conosco</h1>
    <form action="/contato_resultado" method="post">
        @csrf
        <div class="form-group">
            <label for="nome">Nome</label>
            <input type="text" name="nome" id="nome" autocomplete="off" placeholder="Informe seu nome..." class="form-control">
        </div>
        <div class="form-group">
            <label for="email">E-mail</label>
            <input type="email" name="email" id="email" autocomplete="off" placeholder="Informe seu e-mail..." class="form-control">
        </div>
        <div class="form-group">
            <label for="mensagem">Mensagem</label>
            <textarea name="mensagem" id="mensagem" cols="30" rows="10" class="form-control"></textarea>
        </div>
        <button type="submit" class="btn btn-success">Enviar</button>
    </form>
@endsection
