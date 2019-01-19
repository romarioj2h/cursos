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
            'cursos' => Curso::where('categoriaId', $id)
                ->where('estado', Curso::ESTADO_HABILITADO)
                ->paginate(Curso::ITEMS_POR_PAGINA)
        ]);
    }

    public function index() {
        return view('categoria.index', [
            'categorias' => Categoria::where('habilitada', Categoria::ESTADO_HABILITADA)
                ->get()
        ]);
    }
}
