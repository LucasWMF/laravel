<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\VeiculoModel; // IMPORTAÇÃO NECESSÁRIA

class AnuncioModel extends Model
{
    use HasFactory;

    protected $table = 'anuncio';

    // Você não precisa incluir o 'id' no fillable, pois ele é auto-increment
    protected $fillable = [
        'titulo',
        'descricao',
        'preco',
        'data_publicacao',
        'id_proprietario',
        'id_veiculo',
    ];

    public function veiculo()
    {
        return $this->belongsTo(VeiculoModel::class, 'id_veiculo');
    }

    public function proprietario()
    {
        return $this->belongsTo(ProprietarioModel::class, 'id_proprietario');
    }
}
