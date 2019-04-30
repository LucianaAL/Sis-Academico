<?php

namespace App\Models\Painel;

use Illuminate\Database\Eloquent\Model;

class Funcionario extends Model
{
    protected $table = 'funcionario';
    protected $fillable = ['nome', 'cpf', 'sexo', 'foto', 'nacionalidade', 'data_nasc', 'rg', 'org_emis', 'data_expedi', 'est_nasc', 'mun_nasc', 'cep', 'endereco', 'numero', 'complemento', 'bairro', 'uf', 'municipio', 'telefone', 'escolaridade', 'posgrad', 'area', 'anoform', 'diretor', 'funcionario_inep'];
    public $timestamps = false;
}
