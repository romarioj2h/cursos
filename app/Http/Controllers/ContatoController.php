<?php

namespace App\Http\Controllers;

use App\Contato;
use Illuminate\Http\Request;

class ContatoController extends Controller
{
    public function index()
    {
        return view('contato.index');
    }

    public function adicionar(Request $request)
    {
        $this->validate($request, [
            'nome' => 'bail|required|max:255',
            'email' => 'bail|required|max:255|email',
            'assunto' => 'bail|required|max:255',
            'texto' => 'required',
        ], [
            'nome.required' => 'O campo nome é obrigatório',
            'nome.max' => 'O campo nome deve ter no máximo 255 caractéres',
            'email.required' => 'O campo email é obrigatório',
            'email.max' => 'O campo email deve ter no máximo 255 caractéres',
            'email.email' => 'Digite um email válido',
            'assunto.required' => 'O campo assunto é obrigatório',
            'assunto.max' => 'O campo assunto deve ter no máximo 255 caractéres',
            'texto.required' => 'O campo texto é obrigatório',
        ]);

        $contato = new Contato();
        $contato->nome = $request->input('nome');
        $contato->email = $request->input('email');
        $contato->assunto = $request->input('assunto');
        $contato->texto = $request->input('texto');
        $contato->save();
        $request->session()->flash('mensagem', 'Contato enviado! Vamos responder assim que possível!');
        return redirect()->route('contato.index');
    }
}
