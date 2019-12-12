<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Gestor extends Model
{
    protected $table = 'tblgestor';

    public function Imovel(){
        return $this->belongsToMany('App\Imovel');
    }
}
