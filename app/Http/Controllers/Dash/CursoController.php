<?php

namespace App\Http\Controllers\Dash;

use App\Curso;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Categoria;
use App\Criador;

class CursoController extends Controller
{
    public function index()
    {
        return view('dashboard.curso.index', [
            'cursos' => Curso::paginate(Curso::ITEMS_POR_PAGINA)
        ]);
    }

    public function adicionar(Request $request)
    {
        if ($request->isMethod('post')) {
            $this->validate($request, [
                'nome' => 'required|max:255',
                'descricao' => 'required',
                'dataPublicacao' => 'date|date_format:Y-m-d',
                'link' => 'required|url|unique:curso,link',
                'categoria' => 'required|integer',
                'criador' => 'required|integer',
                'estado' => [
                    'required',
                    \Illuminate\Validation\Rule::in([
                        Curso::ESTADO_HABILITADO,
                        Curso::ESTADO_INABILITADO
                    ])
                ],
            ]);

            $curso = new Curso();
            $curso->nome = $request->input('nome');
            $curso->descricao = $request->input('descricao');
            $curso->dataPublicacao = $request->input('dataPublicacao');
            $curso->categoriaId = $request->input('categoria');
            $curso->criadorId = $request->input('criador');
            $curso->estado = $request->input('estado');
            $curso->pago = $request->has('pago');
            $curso->link = $request->input('link');
            $curso->save();
            $request->session()->flash('mensagem', 'Curso criado com sucesso!');
            return redirect()->route('dash.curso.index');
        } else {
            return \view('dashboard.curso.adicionar', [
                'categorias' => Categoria::all(),
                'criadores' => \App\Criador::all(),
                'estados' => Curso::estados()
            ]);
        }
       
    }
}
