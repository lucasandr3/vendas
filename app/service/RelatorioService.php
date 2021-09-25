<?php

namespace App\service;

use App\interfaces\service\RelatorioServiceInterface;
use App\repository\RelatorioRepository;

class RelatorioService implements RelatorioServiceInterface
{
    private $repository;

    public function __construct()
    {
        $this->repository = new RelatorioRepository;
    }

    public function todos()
    {

    }
}