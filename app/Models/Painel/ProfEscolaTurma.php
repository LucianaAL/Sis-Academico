<?php

namespace App\Models\Painel;

use Illuminate\Database\Eloquent\Model;

class ProfEscolaTurma extends Model
{
    protected $table = 'prof_escola_turma';
    protected $fillable = ['prof_id', 'escola_id', 'turma_id'];
    public $timestamps = false;
}
