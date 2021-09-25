<?php
namespace App\repository;

use App\interfaces\repository\RelatorioRepositoryInterface;
use App\Models\Relatorio;

class RelatorioRepository implements RelatorioRepositoryInterface
{
    public function todos()
    {
        return Relatorio::all();
    }
}