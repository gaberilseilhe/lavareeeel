<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Servicos extends Model
{
    use HasFactory;

    protected $table = 'servicos';
 
    protected $primaryKey = 'id_servicos';


    protected $fillable = [
        "nome_servico",
        "valor",
    ];

    public function servicos()
    {
        return $this->hasMany(Agendamento::class,'id_servicos', 'id_servicos');
    }

}