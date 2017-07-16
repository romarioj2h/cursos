<?php

namespace App\Http\Controllers;

use App\Criador;
use App\Curso;
use Illuminate\Http\Request;

class CriadorController extends Controller
{
    public function index()
    {
        return view('criador.index', [
            'criadores' => Criador::all()
        ]);
    }

    public function criador($id)
    {
        $criador = Criador::find($id);
        return view('criador.criador', [
            'criador' => $criador,
            'cursos' => $criador->cursos()->paginate(Curso::ITEMS_POR_PAGINA)
        ]);
    }
}
