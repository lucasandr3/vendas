<?php

namespace App\service;

use App\interfaces\service\FornecedorServiceInterface;
use App\repository\FornecedorRepository;

class FornecedorService implements FornecedorServiceInterface
{
    private $repository;

    public function __construct()
    {
        $this->repository = new FornecedorRepository;
    }

    public function todos()
    {

    }
}