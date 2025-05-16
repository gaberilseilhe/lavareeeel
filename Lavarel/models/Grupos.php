<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Grupos extends Model
{
    use HasFactory;

    protected $table = 'grupos';
    protected $primaryKey = 'id_grupo';
    public $timestamps = false;
    protected $fillable = [
        'nome_grupo',
    ];

    public function usuarios()
    {
        return $this->hasMany(User::class, 'id_grupo', 'id_grupo');
    }
}
