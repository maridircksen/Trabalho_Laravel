<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContatosEnviadosController extends Controller
{
    public function contatos_enviados(Request $request)
{
    $nome = $request->input('nome');
    $email = $request->input('email');
    $mensagem = $request->input('mensagem');
    
    return view('contatos_enviados', compact('nome', 'email', 'mensagem'));
}
}
