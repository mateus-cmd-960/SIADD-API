<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Professor extends Model
{
    use HasFactory;
    protected $table='professors';
    protected $fillable=[
        'nome',
        'conselho_cientifico',
    ];

    public function avaliacao(){
        return $this->BelongsToMany('App\Models\Avaliacao');
    }
}
