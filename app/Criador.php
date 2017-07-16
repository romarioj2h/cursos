<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Criador extends Model
{
    const UPDATED_AT = 'atualizadoEm';
    const CREATED_AT = 'criadoEm';

    protected $table = 'criador';

    public function cursos()
    {
        return $this->hasMany('App\Curso', 'criadorId');
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
