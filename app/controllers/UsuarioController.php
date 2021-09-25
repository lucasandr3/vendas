<?php

namespace App\Controllers;

use App\service\UsuarioService;
use Core\Controller;

class UsuarioController extends Controller
{
    private $UsuarioService;

    public function __construct()
    {
        $this->UsuarioService = new UsuarioService;
    }

    public function ativos()
    {

    }

    public function inativos()
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