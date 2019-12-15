<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Repasse extends Model
{
    protected $table = 'tblrepasse';
    protected $primaryKey = 'intrepasseid';

    public function Imovel(){
        return $this->belongsToMany(Imovel::class);
    }
}
