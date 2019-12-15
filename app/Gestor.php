<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Gestor extends Model
{
    protected $table = 'tblgestor';
    protected $primaryKey = 'intgestorid';

    public function Imovel(){
        return $this->belongsToMany(Imovel::class);
    }
}
