<?php

namespace App\service;

use App\interfaces\service\ParceiroServiceInterface;
use App\repository\ParceiroRepository;

class ParceiroService implements ParceiroServiceInterface
{
    private $repository;

    public function __construct()
    {
        $this->repository = new ParceiroRepository;
    }

    public function todosAtivos()
    {
        return $this->repository->todosAtivos();
    }

    public function parceiroId()
    {

    }

    public function adicionar()
    {

    }

    public function editar()
    {

    }

    public function apagar()
    {

    }

    public function comissao()
    {

    }
}