<?php
namespace App\repository;

use App\interfaces\repository\PontoVendaRepositoryInterface;
use App\Models\PontoVenda;

class PontoVendaRepository implements PontoVendaRepositoryInterface
{
    public function isOpen(string $diaAtual)
    {
        return PontoVenda::where('day', $diaAtual)->first();
    }
}