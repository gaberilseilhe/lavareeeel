<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Agenda extends Model
{
    use HasFactory;

    protected $table = 'agendas';
    protected $primaryKey = 'id_agenda';

    protected $fillable = [
        'id_usuario',
        'dia_da_semana',
        'horario',
    ];

    public function usuario()
    {
        return $this->hasMany(User::class, 'id_servico', 'id_servicos');
    }

}
