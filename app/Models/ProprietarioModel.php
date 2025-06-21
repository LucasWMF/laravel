<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProprietarioModel extends Model
{
    use HasFactory;
    protected $table = 'proprietario';
    protected $fillable = ['id', 'nome', 'cpf', 'tel', 'email'];

    public function anuncios()
    {
        return $this->hasMany(AnuncioModel::class, 'id_proprietario');
    }
}