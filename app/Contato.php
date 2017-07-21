<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contato extends Model
{
    const UPDATED_AT = 'atualizadoEm';
    const CREATED_AT = 'criadoEm';

    protected $table = 'contato';
}
