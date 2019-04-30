<?php

namespace App\Models\Painel;

use Illuminate\Database\Eloquent\Model;

class Profissional extends Model
{
    protected $table = 'profissional';
    protected $fillable = ['nome', 'cpf', 'sexo', 'foto', 'nacionalidade', 'data_nasc', 'rg', 'org_emis', 'data_expedi', 'est_nasc', 'mun_nasc', 'cep', 'endereco', 'numero', 'complemento', 'bairro', 'uf', 'municipio', 'telefone', 'escolaridade', 'posgrad', 'cargo', 'anoform', 'profissional_disciplina'];
    public $timestamps = false;
}
