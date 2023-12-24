<?php

namespace App\Http\Controllers;

use App\Models\Partida;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ModalController extends Controller
{
    public function registerForm(){
        return[
            'content' => view('/popups/registerForm')->render(),
        ];
    }

    public function exibirRanking(){
        $listaPartidas = Partida::orderBy('acertos', 'desc')->orderBy('erros', 'asc')->orderBy('data_hora', 'desc')->get();
        return[
            'content' => view('/popups/exibirRanking', compact('listaPartidas'))->render(),
        ];
    }
}
