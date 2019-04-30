<?php

namespace App\Models\Painel;

use Illuminate\Database\Eloquent\Model;

class Aluno extends Model
{
  protected $table = 'aluno';
  protected $fillable = ['nome','cpf','sexo','foto','nacionalidade','data_nasc','nome_pai','nome_mae','rg','org_emis','data_expedi','est_nasc','mun_nasc','cep','endereco','numero','complemento','bairro','uf','municipio','telefone','aluno_turma','aluno_inep'];
  public $timestamps = false;
}
