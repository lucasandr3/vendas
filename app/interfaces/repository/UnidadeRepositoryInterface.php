<?php

namespace App\interfaces\repository;

interface UnidadeRepositoryInterface
{
    public function todosAtivas();

    public function todosInativas();

    public function UnidadeId();

    public function adicionar();

    public function editar();

    public function status();
}