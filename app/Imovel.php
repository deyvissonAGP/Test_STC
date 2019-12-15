<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Imovel extends Model
{
    protected $table = 'tblimovel';
    protected $primaryKey = 'codigo';

    public function Gestor(){
        return $this->hasMany(Gestor::class, 'codigo_imovel', 'codigo');
    }
    public function Repasse(){
        return $this->hasOne(Repasse::class, 'codigo_imovel', 'codigo');
    }
}
