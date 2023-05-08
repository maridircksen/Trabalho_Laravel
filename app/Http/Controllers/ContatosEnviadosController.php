<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContatoResultadoController extends Controller
{
    public function contato_resultado(Request $request)
{
    $nome = $request->input('nome');
    $email = $request->input('email');
    $mensagem = $request->input('mensagem');
    
    return view('contato_resultado', compact('nome', 'email', 'mensagem'));
}
}
