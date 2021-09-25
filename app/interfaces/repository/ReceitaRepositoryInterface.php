<?php

namespace App\interfaces\repository;

interface ReceitaRepositoryInterface
{
    public function todas();

    public function receitaId();

    public function adicionar();

    public function todasParceladas();

    public function adicionarParcelada();
}