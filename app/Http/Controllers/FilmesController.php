<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FilmesController extends Controller
{
    public function filmes()
    {
        $filmes = array(
            array('titulo' => 'Harry Potter e a Pedra Filosofal', 'ano' => '2001'),
            array('titulo' => 'Ana e Vitória - Filme', 'ano' => '2018'),
            array('titulo' => 'Como se fosse a primeira vez', 'ano' => '2004'),
            array('titulo' => 'O melhor de mim', 'ano' => '2014'),
            array('titulo' => 'Um momento pode mudar tudo', 'ano' => '2014')
        );

        return view('filmes', compact('filmes'));
    }
}

