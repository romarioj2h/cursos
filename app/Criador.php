<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Criador extends Model
{
    const UPDATED_AT = 'atualizadoEm';
    const CREATED_AT = 'criadoEm';
    const TABLE = 'criador';

    protected $table = self::TABLE;

    public static function quantidadeTotalCriadores()
    {
        return DB::table(self::TABLE)->count();
    }

    public function cursos()
    {
        return $this->hasMany('App\Curso', 'criadorId')->where('estado', Curso::ESTADO_APROVADO);
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
