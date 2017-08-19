<?php

namespace App\Http\Controllers\Dash;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Categoria;

class CategoriaController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('dashboard.categoria.index', [
            'categorias' => Categoria::all()
        ]);
    }

    public function adicionar(Request $request)
    {
        if ($request->isMethod('post')) {
            $this->validate($request, [
                'nome' => 'required|unique:categoria|max:255',
                'logo' => 'required|max:255',
            ]);

            $categoria = new Categoria();
            $categoria->nome = $request->input('nome');
            $categoria->logo = $request->input('logo');
            $categoria->habilitada = $request->has('habilitada');
            $categoria->esquerda = 1;
            $categoria->direita = 1;
            $categoria->save();
            $request->session()->flash('mensagem', 'Categoria criada com sucesso!');
            return redirect()->route('dash.categoria.index');
        } else {
            return view('dashboard.categoria.adicionar');            
        }
    }
}
