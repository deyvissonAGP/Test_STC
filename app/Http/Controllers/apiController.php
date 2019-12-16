<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Imovel;
use App\Gestor;
use App\Repasse;

class apiController extends Controller
{
    private $imovel;

    public function __construct(Imovel $imovel)
    {
        $this->imovel = $imovel;
    }

    public function index()
    {
        $imovel = $this->imovel::all();

        return response()->json($imovel);
    }

    public function show($codigo)
    {

        $escola = $this->imovel::join('tblgestor', 'codigo_imovel', '=', 'tblgestor.codigo_imovel')
                                ->find($codigo);

        return response()->json($escola);
    }
}
