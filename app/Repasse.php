<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Repasse extends Model
{
    protected $table = 'tblrepasse';

    public function Imovel(){
        return $this->belongsToMany('App\Imovel');
    }
}
