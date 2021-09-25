<?php

namespace App\service;

use App\interfaces\service\PedidoServiceInterface;
use App\repository\PedidoRepository;

class PedidoService implements PedidoServiceInterface
{
    private $repository;

    public function __construct()
    {
        $this->repository = new PedidoRepository;
    }

    public function todos()
    {

    }
}