<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    const UPDATED_AT = 'atualizadoEm';
    const CREATED_AT = 'criadoEm';
    const ESTADO_HABILITADA = 1;

    protected $table = 'categoria';

    public function cursos()
    {
        return $this->hasMany('App\Curso', 'categoriaId')->where('estado', Curso::ESTADO_HABILITADO);
    }

    public function buscarCursosPopulares()
    {
        return $this->cursos()->take(10)->get();
    }

    public function quantidadeCursos()
    {
        return $this->cursos()->count();
    }
}
