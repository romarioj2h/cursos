<?php

namespace App\Http\Controllers;


use App\Curso;

class CursoController extends Controller
{

    public function index()
    {
        return view('curso.index', [
            'cursos' => Curso::paginate(Curso::ITEMS_POR_PAGINA)
        ]);
    }

    public function curso($id) {
        return view('curso.curso', [
            'curso' => Curso::find($id)
        ]);
    }
}
