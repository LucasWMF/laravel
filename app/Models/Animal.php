<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Animal extends Model
{
    use HasFactory;
    protected $table ='animal';
    protected $fillabel = ['nome', 'especie', 'raca', 'idade', 'sexo', 'porte', 'descricao', 'vacinacao', 'cadastro'];
}