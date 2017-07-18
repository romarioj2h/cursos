<?php
/**
 * Created by PhpStorm.
 * User: romario
 * Date: 03/07/17
 * Time: 22:10
 */

namespace App\Http\Controllers;

use App\Criador;
use App\Curso;

class IndexController
{

    public function index()
    {
        return view('index.index', [
            'quantidadeCursos' => Curso::quantidadeCursosAprovados(),
            'quantidadeCriadores' => Criador::quantidadeTotalCriadores()
        ]);
    }
}