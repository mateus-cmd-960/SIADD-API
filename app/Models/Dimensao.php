<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dimensao extends Model
{
    use HasFactory;
    protected $table='dimensaos';
    protected $fillable=[
        'descricao',
    ];

    public function avaliacao(){
        return $this->BelongsToMany('App\Models\Avaliacao');
    }
}
