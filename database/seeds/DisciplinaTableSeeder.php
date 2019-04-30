<?php

use Illuminate\Database\Seeder;
use App\Models\Painel\Disciplina;

class DisciplinaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      Disciplina::create([
        0 => [
          'nome' => 'Artes'
        ],
        1 => [
          'nome' => 'Matemática'
        ],
        2 => [
          'nome' => 'Educação Física'
        ],
        3 => [
          'nome' => 'Geografia'
        ],
        4 => [
          'nome' => 'Sociologia'
        ],
        5 => [
          'nome' => 'Biologia'
        ],
        6 => [
          'nome' => 'História'
        ],
        7 => [
          'nome' => 'Filosofía'
        ],
        8 => [
          'nome' => 'Língua Portuguesa'
        ],
        9 => [
          'nome' => 'Química'
        ],
        10 => [
          'nome' => 'Física'
        ],
      ]);
    }
}
