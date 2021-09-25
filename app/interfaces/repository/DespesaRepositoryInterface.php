<?php

namespace App\interfaces\repository;

interface DespesaRepositoryInterface
{
    public function todos();

    public function despesaId();

    public function adicionar();

    public function todasParceladas();

    public function adicionarParcelada();
}