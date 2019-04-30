<?php

namespace App\Models\Painel;

use Illuminate\Database\Eloquent\Model;

class Turma extends Model
{
    protected $table = 'turma';
    protected $fillable = ['turma_descricao', 'ano', 'turno', 'modalidade', 'turma_inep'];
    public $timestamps = false;
}
