<?php

namespace App\Models\Painel;

use Illuminate\Database\Eloquent\Model;

class Disciplina extends Model
{
  protected $table = 'disciplina';
  protected $fillable = ['nome'];
  public $timestamps = false;
}
