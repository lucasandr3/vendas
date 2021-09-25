<?php

namespace App\service;

use App\interfaces\service\DespesaServiceInterface;
use App\repository\DespesaRepository;

class DespesaService implements DespesaServiceInterface
{
    private $repository;

    public function __construct()
    {
        $this->repository = new DespesaRepository;
    }

    public function todos()
    {

    }

    public function despesaId()
    {

    }

    public function adicionar()
    {

    }

    public function todasParceladas()
    {

    }

    public function adicionarParcelada()
    {

    }
}