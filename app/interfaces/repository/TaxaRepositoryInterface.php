<?php

namespace App\interfaces\repository;

interface TaxaRepositoryInterface
{
    public function todasAtivas();

    public function buscaBandeirasTaxas(array $codTaxas);

    public function taxaId();

    public function adicionar();

    public function editar();

    public function apagar();
}