<?php

namespace App\Controllers;

use App\service\PedidoService;
use Core\Controller;

class PedidoController extends Controller
{
    private $pedidoService;

    public function __construct()
    {
        $this->pedidoService = new PedidoService;
    }

    public function index()
    {

    }
}