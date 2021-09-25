<?php
namespace App\repository;

use App\interfaces\repository\TaxaRepositoryInterface;
use App\Models\Taxa;
use App\Models\TaxaLista;

class TaxaRepository implements TaxaRepositoryInterface
{
    public function todasAtivas()
    {
        return Taxa::all()->toArray();
    }

    public function buscaBandeirasTaxas(array $codTaxas)
    {
        return TaxaLista::whereIn('id_tax', $codTaxas)->get()->toArray();
    }

    public function taxaId()
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
}