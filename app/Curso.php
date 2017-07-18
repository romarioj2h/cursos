<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Laravel\Scout\Searchable;

class Curso extends Model
{
    use Searchable;

    const TAMANHO_RESUMO = 200;
    const ITEMS_POR_PAGINA = 10;
    const UPDATED_AT = 'atualizadoEm';
    const CREATED_AT = 'criadoEm';
    const ESTADO_PEDENTE = 'PENDENTE';
    const ESTADO_APROVADO = 'APROVADO';
    const TABLE = 'curso';

    protected $table = self::TABLE;

    public function categoria()
    {
        return $this->belongsTo('App\Categoria', 'categoriaId');
    }

    public function criador()
    {
        return $this->belongsTo('App\Criador', 'criadorId');
    }

    public function anoPublicacao() {
        return date('Y', strtotime($this->dataPublicacao));
    }

    public function custo()
    {
        return $this->pago ? 'Pago' : 'Grátis';
    }

    public function resumo() {
        if(strlen($this->descricao) <= self::TAMANHO_RESUMO) {
            return $this->descricao;
        }

        $resumo  = substr($this->descricao, 0, self::TAMANHO_RESUMO-3);
        $ultimoEspaco = strrpos($resumo, ' ');
        $resumo  = substr($resumo, 0, $ultimoEspaco);
        return $resumo . '...';
    }


    public static function quantidadeCursosAprovados()
    {
        return DB::table(self::TABLE)->where('estado', self::ESTADO_APROVADO)->count();
    }
}
