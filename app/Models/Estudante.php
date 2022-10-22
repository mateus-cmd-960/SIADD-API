<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Estudante extends Model
{
    use HasFactory;
    protected $table='estudantes';
    protected $fillable=[
        'nome',
        'n_processo',
        'bilhete',
    ];

    public function disciplina(){
        return $this->BelongsToMany('App\Models\Disciplina');
    }
}
