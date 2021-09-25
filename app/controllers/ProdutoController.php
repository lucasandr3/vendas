<?php

namespace App\Controllers;

use App\service\ProdutoService;
use Core\Controller;

class ProdutoController extends Controller
{
    private $ProdutoService;

    public function __construct()
    {
        $this->ProdutoService = new ProdutoService;
    }

    public function ativos()
    {

    }

    public function inativos()
    {

    }

    public function vencidos()
    {

    }

    public function validade()
    {

    }

    public function one()
    {

    }

    public function novo()
    {

    }

    public function novoAcao()
    {

    }

    public function editar()
    {

    }

    public function editarAcao()
    {

    }

    public function status()
    {

    }
}