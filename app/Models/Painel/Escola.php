<?php

namespace App\Models\Painel;

use Illuminate\Database\Eloquent\Model;

class Escola extends Model
{
  protected $table = 'escola';
  protected $fillable = ['inep','nome','sit_funcionamento','foto','utb','cep','endereco','complemento','numero','bairro','municipio','uf','local_funcionamento','gestor'];
  public $timestamps = false;
}
