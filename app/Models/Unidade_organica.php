<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Unidade_organica extends Model
{
    use HasFactory;
    protected $table='unidade_organicas';
    protected $fillable=[
        'descricao',
    ];
}
