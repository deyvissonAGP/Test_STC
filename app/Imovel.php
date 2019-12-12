<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Imovel extends Model
{
    protected $table = 'tblimovel';
    protected $primaryKey = 'codigo';

    public function Gestor(){
        return $this->belongsToMany('App\Gestor');
    }
}
