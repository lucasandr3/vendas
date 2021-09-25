<?php

namespace App\service;

use App\interfaces\service\ProdutoServiceInterface;
use App\repository\ProdutoRepository;

class ProdutoService implements ProdutoServiceInterface
{
    private $repository;

    public function __construct()
    {
        $this->repository = new ProdutoRepository;
    }

    public function todosAtivos()
    {

    }

    public function todosInativos()
    {

    }

    public function vencidos()
    {

    }

    public function validade()
    {

    }

    public function clienteId()
    {

    }

    public function adicionar()
    {

    }

    public function editar()
    {

    }

    public function status()
    {

    }
}