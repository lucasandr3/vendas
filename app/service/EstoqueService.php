<?php

namespace App\service;

use App\interfaces\service\EstoqueServiceInterface;
use App\repository\EstoqueRepository;

class EstoqueService implements EstoqueServiceInterface
{
    private $repository;

    public function __construct()
    {
        $this->repository = new EstoqueRepository;
    }

    public function todos()
    {

    }
}