<?php

namespace App\Http\Controllers;

use App\Curso;
use Illuminate\Http\Request;

class BuscaController extends Controller
{
    public function index(Request $request)
    {
        $termoDeBusca = $request->get('q') ?? '';

        return view('busca.index', [
            'cursos' => Curso::search($termoDeBusca)
                ->where('estado', Curso::ESTADO_APROVADO)
                ->paginate(Curso::ITEMS_POR_PAGINA),
            'termoDeBusca' => $termoDeBusca
        ]);
    }
}
