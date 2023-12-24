<?php

namespace App\Http\Controllers;

use App\Models\Partida;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PartidaController extends Controller
{
    public function create(Request $request){
        $userID = Auth::user()->id;
        $partida = new Partida([
            'acertos' => $request->acertos,
            'erros' => $request->erros,
            'data_hora' => date('d-m-Y H:m:s'),
        ]);

        $partida['user_id'] = $userID;

        $partida->save();

        session()->flash('msg', ['tipo' => 'success', 'text' => 'Progress Saved, check ranking']);

        return redirect('/index');
    }
}
