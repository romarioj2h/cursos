<?php

namespace App\Http\Controllers;

use App\Categoria;
use App\Curso;
use Illuminate\Http\Request;

class CategoriaController extends Controller
{
    public function categoria($id)
    {
        return view('categoria.categoria', [
            'categoria' => Categoria::find($id),
            'cursos' => Curso::where('categoriaId', $id)->paginate(Curso::ITEMS_POR_PAGINA)
        ]);
    }

    public function index() {
        return view('categoria.index', [
            'categorias' => Categoria::all()
        ]);
    }
}
