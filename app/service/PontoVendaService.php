<?php

namespace App\service;

use App\interfaces\service\PontoVendaServiceInterface;
use App\repository\PontoVendaRepository;

class PontoVendaService implements PontoVendaServiceInterface
{
    private $repository;

    public function __construct()
    {
        $this->repository = new PontoVendaRepository;
    }

    public function isOpen()
    {
        $diaAtual = date('Y-m-d');
        return $this->repository->isOpen($diaAtual);
    }
}