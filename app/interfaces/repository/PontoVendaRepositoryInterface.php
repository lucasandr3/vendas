<?php

namespace App\interfaces\repository;

interface PontoVendaRepositoryInterface
{
    public function isOpen(string $diaAtual);
}