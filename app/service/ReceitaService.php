<?php

namespace App\service;

use App\interfaces\service\ReceitaServiceInterface;
use App\repository\ReceitaRepository;

class ReceitaService implements ReceitaServiceInterface
{
    private $repository;

    public function __construct()
    {
        $this->repository = new ReceitaRepository;
    }

    public function todas()
    {

    }

    public function receitaId()
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