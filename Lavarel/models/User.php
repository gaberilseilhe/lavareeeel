<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $table = 'usuarios';
 
    protected $primaryKey = 'id_usuario';


    protected $fillable = [
        "nome_usuario",
        "data_nascimento",
        "id_grupo"
    ];

    public function grupos()
    {
        return $this->belongsTo(Grupos::class, 'id_grupo', 'id_grupo');
    }
    public function agendamento()
    {
        return $this->hasMany(agendamento::class, 'id_usuario', 'id_usuario');
    }
    public function agenda()
    {
        return $this->hasMany(agenda::class, 'id_agenda', 'id_agenda');
    }

}