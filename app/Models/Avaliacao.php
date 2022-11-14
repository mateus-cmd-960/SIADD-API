<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Avaliacao extends Model
{
    use HasFactory;

    public function professor(){
        return $this->BelongsToMany('App\Models\Professor');
    }

    public function dimensao(){
        return $this->BelongsToMany('App\Models\Dimensao');
    }

    public function cads(){
        return $this->BelongToMany('App\Models\Cad');
    }
}
