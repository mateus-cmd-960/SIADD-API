<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Grau_academico extends Model
{
    use HasFactory;

    protected $table='grau_academicos';
    protected $fillable=[
        'descricao',
    ];
}
