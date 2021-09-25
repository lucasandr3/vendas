<?php

namespace App\interfaces\repository;

interface ParceiroRepositoryInterface
{
    public function todosAtivos();

    public function parceiroId();

    public function adicionar();

    public function editar();

    public function apagar();

    public function comissao();
}