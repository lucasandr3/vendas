<?php

namespace App\Controllers;

use App\service\DespesaService;
use Core\Controller;

class DespesaController extends Controller
{
    private $despesaService;

    public function __construct()
    {
        $this->despesaService = new DespesaService;
    }

    public function todas()
    {

    }

    public function one()
    {

    }

    public function nova()
    {

    }

    public function novaAcao()
    {

    }

    public function parceladas()
    {

    }

    public function parceladaAcao()
    {

    }
}